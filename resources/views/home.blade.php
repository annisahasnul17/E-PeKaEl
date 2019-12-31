@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman Beranda</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div style="height: 150px; width: 150px; background-color: blue; border-radius: 20%; text-align: center; padding-top: 10px; color: white;">
                        <a href="/maps">
                            <img src="http://localhost/pkll/resources/img/map.png" width="50%" style="padding-bottom: 30px"/>
                        </a>
                        <h5>MAPS</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
