<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;
use App\Models\news;

class NewsController extends Controller
{
    function storeNews(){
        $client = new Client();
        $html = $client->request('GET', 'https://news.ycombinator.com/');
        $crawler = new Crawler($html->getBody());
        $span = $crawler->filter('.titleline')->each(function($node){
            $title = $node->filter('a')->text();
            $resource = $node->filter('span.sitestr')->text();
            
            $new = new news();
            $status = news::where('title', $title)->get();
            # Check if the news exist in database or not
            if(!count($status) > 0){

            

                $new->title = $title;
                $new->resource = $resource;
                $new->save();
            }            
        });     
    }
    public function showExplore(){
        $this->storeNews();
        $news = news::all();
        return view('explore', ['news' => $news]);
    }
}
