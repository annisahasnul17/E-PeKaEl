@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('PeKaeL')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-8" style="padding-top: 150px">
          <h1 class="text-white text-center">{{ __('Selamat Datang Di PeKaeL') }}</h1>
      </div>
      <div class="container-fluid">
        <ul class="nav" style="padding-left: 300px; font-size: 125%">
            <li class="nav-item">
                <a href="https://creative-tim.com" target="blank" class="nav-link">
                    {{ __('Help Center') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="/aboutus" class="nav-link">
                    {{ __('About us') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="/bisnis" class="nav-link">
                    {{ __('Business') }}
                </a>
            </li>
            <li class="nav-item">
                <a href="/nearby" class="nav-link">
                    {{ __('PKL Nearby') }}
                </a>
            </li>
        </ul>
    </div>
  </div>
</div>
@endsection
