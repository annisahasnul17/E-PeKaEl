@extends('layouts.app', ['activePage' => 'Beranda', 'titlePage' => __('Beranda')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <img src="http://localhost/pekaels/resources/img/makanan.png" height="60" alt=""/>
              </div>
              <h3 class="card-title">
                Makanan
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/makanan">View...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
              <img src="http://localhost/pekaels/resources/img/minuman.png" height="60" alt=""/>
              </div>
              <h3 class="card-title">Minuman</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/minuman">View...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
              <img src="http://localhost/pekaels/resources/img/aksesoris.png" height="60" alt=""/>
              </div>
              <h3 class="card-title">Aksesoris</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/aksesoris">View...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
              <img src="http://localhost/pekaels/resources/img/buah.png" height="60" alt=""/>
              </div>
              <h3 class="card-title">Buah - buahan</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/buah">View...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
              <img src="http://localhost/pekaels/resources/img/pakaian.png" height="60" alt=""/>
              </div>
              <h3 class="card-title">
                Pakaian
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/pakaian">View...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
              <img src="http://localhost/pekaels/resources/img/mainan.png" height="60" alt=""/>
              </div>
              <h3 class="card-title">Mainan</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/mainan">View...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
              <img src="http://localhost/pekaels/resources/img/spatula.png" height="60" alt=""/>
              </div>
              <h3 class="card-title">Peralatan Dapur</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/peralatandapur">View...</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <img src="http://localhost/pekaels/resources/img/pulsa1.png" style="background-color: white; border-radius: 10%" height="60" alt=""/>
              </div>
              <h3 class="card-title">Pulsa & Top Up</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <a href="/pulsa">View...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush