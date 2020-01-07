@extends('layouts.app')

@section('content')


<body>
<meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
<script src='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.js'></script>
<link href='https://api.mapbox.com/mapbox.js/v2.4.0/mapbox.css' rel='stylesheet' />
<style>
        body { margin:0; padding:0; }
        #map { position:absolute; top:50; bottom:0; width:100%; }
    </style>
        <div id='map'></div>
        <script>
            L.mapbox.accessToken = 'pk.eyJ1IjoicmlvbmNvb2wyMjIyIiwiYSI6ImNrM3dyc3ZpcDBwY2ozampyY3VzMnVjbWIifQ.7GgNQod31wUWWihe5Qovmw';
            L.mapbox.map('map', 'mapbox.streets').addControl(L.mapbox.geocoderControl('mapbox.places'));
        </script>
    </body>