@extends('layouts.master')
@section('content')
	<div class="approach" id="app">
		<div class="container">
			 <div class="gallery-head text-center">
				<h3>Isi Data</h3>
				<span> </span>
			</div>
			<div class="contact-form_grid">
				@if (session('status'))
						 <div class="alert alert-success">
								 {{ session('status') }}
						 </div>
				 @endif
				 <!-- <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p> -->
			<form method="post" action="{{ route('postbeasiswa') }}" role="form">
				{{ csrf_field() }}
			 <input type="text" class="textbox" name="nama" placeholder="Nama Lengkap">
				<!-- nama lengkap, email, password, dan re-password -->
			 <input type="text" class="textbox" name="ttl" placeholder="Tempat, Tanggal Lahir">
			 <input type="text" class="textbox" name="alamat" placeholder="Alamat">
			 <input type="text" class="textbox" name="jk" placeholder="Jenis Kelamin">
			 <input type="text" class="textbox" name="asal" placeholder="Asal">
			 <input type="text" class="textbox" name="nisn" placeholder="NISN">
			 <input type="text" class="textbox" name="lulus" placeholder="Tahun Lulus">
			 <input type="text" class="textbox" name="email" placeholder="Email">
			 <input type="text" class="textbox" name="telp" placeholder="Telephone">
				<input type="submit" value="Daftar Sekarang">
			</form>
			 </div>
		</div>
	</div>
@endsection
