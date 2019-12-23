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
            var map = L.mapbox.map('map', 'mapbox.streets').setView([-6.9125224,107.5997832], 12);
            omnivore.csv('bandung.csv').addTo(map);
        </script>
</body>
@endsection 