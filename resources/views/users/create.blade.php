@extends('layouts.app', ['activePage' => 'Upload Bukti Pembayaran', 'titlePage' => __('User Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('user.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Upload Bukti Pembayaran') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Kembali') }}</a>
                  </div>
                </div>
              <div class="card-footer ml-auto mr-auto" style="text-align: center;">
              <a href="/upload" class="btn btn-sm btn-primary">{{ __('Upload') }}</a>
              </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection