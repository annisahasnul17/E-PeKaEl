@extends('layouts.app1')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding-bottom: 20px;">
                <div class="card-header">Pengaturan Akun</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form style="text-align: center;">
						<div style="padding-bottom: 5px">
							<label for="Name">Nama</label><br>
							<input type="box" placeholder="Nama" style="width: 50%; text-align: center;">
						</div>
						
						<div style="padding-bottom: 5px">
							<label for="Name">Email</label><br>
							<input type="box" placeholder="Email" style="width: 50%; text-align: center;">
						</div>
						
						<div style="padding-bottom: 5px">
							<label for="Name">Alamat</label><br>
							<input type="box" placeholder="Alamat" style="width: 50%; text-align: center;">
						</div>
					
					</form>
                </div>
            </div>
			<div class="card">
                <div class="card-header">Password</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form style="text-align: center;">
						<div style="padding-bottom: 5px">
							<label for="Name">Password Lama</label><br>
							<input type="password" placeholder="Username" style="width: 50%; text-align: center;">
						</div>
						
						<div style="padding-bottom: 5px">
							<label for="Name">Password Baru</label><br>
							<input type="password" placeholder="Password Baru" style="width: 50%; text-align: center;">
						</div>
						
						<div style="padding-bottom: 5px">
							<label for="Name">Konfirmasi Password</label><br>
							<input type="password" placeholder="Konfirmasi Password Baru" style="width: 50%; text-align: center;">
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
