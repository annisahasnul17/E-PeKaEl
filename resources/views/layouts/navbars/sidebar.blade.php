<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('PeKaeL') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Beranda') }}</p>
        </a>
     
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini">  </span>
				<i class="material-icons">person</i>
                <span class="sidebar-normal">{{ __('Profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'upload' ? ' active' : '' }}">
              <a class="nav-link" href="/upload">
                <span class="sidebar-mini">  </span>
				<i class="material-icons">money</i>
                <span class="sidebar-normal"> {{ __('Bayar Iuran') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage ?? '' ?? '' == 'history' ? ' active' : '' }}">
              <a class="nav-link" href="/history">
                <span class="sidebar-mini">  </span>
				<i class="material-icons">history</i>
                <span class="sidebar-normal"> {{ __('History Pembayaran') }} </span>
              </a>
            </li>
          </ul>
        </div>
     
     
      <li class="nav-item{{ $activePage ?? '' ?? '' == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Rekomendasi') }}</p>
        </a>
      </li>
      
     
     
    </ul>
  </div>
</div>