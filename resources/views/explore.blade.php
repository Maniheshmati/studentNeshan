@include('layouts.header')

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>اکتشاف پست ها</title>
        <link href="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.css" rel="stylesheet" type="text/css">
    <script src="https://static.neshan.org/sdk/leaflet/1.4.0/leaflet.js" type="text/javascript"></script>
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> --}}
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

<div id="map" style="width: 600px; height: 450px; background: #eee; border: 2px solid #aaa;"></div>
  
<script type="text/javascript">

    var myMap = new L.Map('map', {
        key: 'service.1148097693de48e4bbed159c4f3ffcdc',
        maptype: 'dreamy',
        center: [36.3293, 59.4944],
        zoom: 14,
        poi: true,
        onPoiLayerSwitched: function (state) {
            console.log(state);
            alert(myMap.center);
        }
    });
</script>

</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
