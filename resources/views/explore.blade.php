@include('layouts.header')

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>اکتشاف پست ها</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        .post-card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>اکتشاف پست ها</h1>

        <div class="card post-card">
            <div class="card-body">
                @foreach ($news as $new)
                <h5 class="card-title">{{ $new->title }}</h5>
                <p class="card-text">{{ $new->resource }}</p>
                <a href="" class="btn btn-primary">مشاهده جزئیات</a>
                    
                @endforeach
            </div>
        </div>

</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
