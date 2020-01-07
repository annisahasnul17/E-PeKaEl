@extends('layouts.app', ['activePage' => 'Upload Bukti Pembayaran', 'titlePage' => __('User Management')])
        
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Upload Bukti Pembayaran') }}</h4>
                        <p class="card-category"></p>
                    </div>
                    <form action="{{ url('upload') }}" method="post" enctype="multipart/form-data" style="text-align: center; padding-top: 20px">
                        {{ csrf_field() }}
                        <input type="file" name="image"> 
                        <div style="text-align: center">
                            <div class="card-footer" style="text-align: center;">
                                <input type="submit" class="btn btn-sm btn-primary" value="Upload"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection