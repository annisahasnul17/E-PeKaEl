@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')])

@section('content')

<body>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
    <link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:0; bottom:0; width:100%; }
    </style>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-omnivore/v0.2.0/leaflet-omnivore.min.js'></script>
        <div id='map'></div>
        <script> 
            L.mapbox.accessToken = 'pk.eyJ1IjoicmlvbmNvb2wxMjEwMTIxMCIsImEiOiJjazRpZXNraXEwb2thM2VsYnRmbG5tM2tyIn0.116T84JhTJMzMN8BjIM7iA';
            var map = L.mapbox.map('map', 'mapbox.streets').setView([5.5718582,95.3714915], 16);
            omnivore.csv('bandung.csv').addTo(map);

            var polylinePoints = [
                [5.58562,95.35544],
                [5.57656,95.35901],
                [5.57322,95.36077],
                [5.56326,95.36900]
            ];

            var polyline = L.polyline(polylinePoints, {color: "#FF2D00"}).addTo(map);

            var titikgaris = [
                [5.56602,95.36687],
                [5.56595,95.37176],
            ];

            var garis = L.polyline(titikgaris, {color: "#FF2D00"}).addTo(map);

            var titikgaris1 = [
                 [5.56601,95.36735],
                 [5.57164,95.36764],
            ];

            var garis1 = L.polyline(titikgaris1, {color: "#FF2D00"}).addTo(map);

            var titikgaris2 = [
                 [5.57137,95.37218],
                 [5.57083,95.37361],
                 [5.57053,95.37631],
                 [5.56908,95.37774],
                 [5.56902,95.38053],
                 [5.56914,95.38315],
            ];

            var garis2 = L.polyline(titikgaris2).addTo(map);

            var titikgaris3 = [
                 [5.58168,95.36407],
                 [5.58150,95.36566],
                 [5.58051,95.36835],
                 [5.57941,95.36899],
                 [5.57566,95.37041],
                 [5.57408,95.37106],
            ];

            var garis3 = L.polyline(titikgaris3).addTo(map);

            var titikgaris4 = [
                 [5.57386,95.37088],
                 [5.57162,95.37086],
                 
            ];

            var garis4 = L.polyline(titikgaris4).addTo(map);

            var titikgaris5 = [
                 [5.57225,95.36599],
                 [5.57331,95.36214],
                 
            ];

            var garis5 = L.polyline(titikgaris5).addTo(map);
        </script>
		<h4 class="card-title">{{ __('Tandai Lokasi Jual') }}</h4>
</body>
@endsection 