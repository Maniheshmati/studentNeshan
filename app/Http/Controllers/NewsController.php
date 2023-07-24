<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;
use App\Models\news;

class NewsController extends Controller
{
    function storeNews(){
        $latitudes = range(25, 40);
        $longitudes = range(44, 62);
        
        foreach ($latitudes as $latitude) {
            foreach ($longitudes as $longitude) {
                $url = "https://neshan.org/maps/@{$latitude},{$longitude},6.0z,0.0p/search/%D9%85%D9%88%D8%B3%D8%B3%D9%87%20%D8%A2%D9%85%D9%88%D8%B2%D8%B4";
                $response = new Client();
                $html = $response->request('GET', $url);
                $crawler = new Crawler($html->getBody());
                
    
                }
            }
        }
             
        public function showExplore(){
            $news = news::all();
            return view('explore', ['news' => $news]);
        }
    }

