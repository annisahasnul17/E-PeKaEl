@extends('layouts.app', ['activePage' => 'Bayar Iyuran', 'titlePage' => __('User Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('History Pembayaran') }}</h4>
              </div>
              <div class="card-body">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
  
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                          {{ __('ID') }}
                      </th>
                      <th>
                        {{ __('Deskripsi') }}
                      </th>
                      <th>
                        {{ __('Tanggal Bayar') }}
                      </th>
                      <th class="text-right">
                        {{ __('Status') }}
                      </th>
                    </thead>
                    <tbody>
                      @foreach($images as $img)
                        <tr>
                          <td>
                            {{ $img->id }}
                          </td>
                          <td>
                            Pembayaran Anda Sedang Ditinjau
                          </td>
                          <td>
                            {{ $img->dibuat }}
                          </td>
                          <td class="td-actions text-right">
                                <i class="material-icons">done</i>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection