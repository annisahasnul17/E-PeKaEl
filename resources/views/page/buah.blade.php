@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Buah-buahan')])

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
            var map = L.mapbox.map('map', 'mapbox.streets').setView([5.5718582,95.3714915], 15);
            omnivore.csv('bandung.csv').addTo(map);

            L.marker([5.571413,95.3688497], {draggable: 'true'}).addTo(map).bindPopup('<img src="{{ asset('images') }}/mangga.jpg" alt="" height="100" style="padding-right: 10px" /><h2 style="text-align:center;">Buah Mangga</h2>').openPopup(); 
            L.marker([5.5715845,95.3655579], {draggable: 'true'}).addTo(map).bindPopup('<img src="{{ asset('images') }}/jamblang.jpg" alt="" height="100" style="padding-right: 10px" /><h2 style="text-align:center;">Buah Jamblang</h2>').openPopup(); 
            L.marker([5.5730365,95.3615739], {draggable: 'true'}).addTo(map).bindPopup('<img src="{{ asset('images') }}/rambutan.jpg" alt="" height="100" style="padding-right: 10px" /><h2 style="text-align:center;">Buah Rambutan</h2>').openPopup(); 
            L.marker([5.5701273,95.3752217], {draggable: 'true'}).addTo(map).bindPopup('<img src="{{ asset('images') }}/durian.jpg" alt="" height="100" style="padding-right: 10px" /><h2 style="text-align:center;">Buah Durian</h2>').openPopup();  
            L.marker([5.5700745,95.3747893], {draggable: 'true'}).addTo(map).bindPopup('<img src="{{ asset('images') }}/langsat.jpg" alt="" height="100" style="padding-right: 10px" /><h2 style="text-align:center;">Buah Langsat</h2>').openPopup();  
            L.marker([5.5700971,95.3738562], {draggable: 'true'}).addTo(map).bindPopup('<img src="{{ asset('images') }}/jeruk.jpg" alt="" height="100" style="padding-right: 10px" /><h2 style="text-align:center;">Buah Jeruk</h2>').openPopup(); 
            L.marker([5.5700971,95.3738562], {draggable: 'true'}).addTo(map).bindPopup('<img src="{{ asset('images') }}/jambu.jpg" alt="" height="100" style="padding-right: 10px" /><h2 style="text-align:center;">Buah Jambu</h2>').openPopup(); 
        </script>
</body>
@endsection 