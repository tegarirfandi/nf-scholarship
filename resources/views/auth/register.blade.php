@extends('layouts.master')

@section('content')
	<div class="approach" id="app">
		<div class="container">
			 <div class="gallery-head text-center">
				<h3>Register</h3>
				<span> </span>
			</div>
			<div class="contact-form_grid">
				 <!-- <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p> -->
			<form method="post" action="{{ route('register') }}" role="form">
				{{ csrf_field() }}

			 <div class="">
				 <input type="text" class="textbox" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap">
				 @if ($errors->has('name'))
						 <span class="help-block">
								 <strong>{{ $errors->first('name') }}</strong>
						 </span>
				 @endif
			 </div>
				<!-- nama lengkap, email, password, dan re-password -->
				<div class="">
					<input type="email" class="textbox" name="email" value="{{ old('email') }}" placeholder="Email">
					@if ($errors->has('email'))
							<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
							</span>
					@endif
				</div>
				<div class="">
					<input type="password" class="textbox" name="password" value="{{ old('password') }}" placeholder="Password">
					@if ($errors->has('password'))
							<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
							</span>
					@endif
				</div>
				<div class="">
					<input type="password" class="textbox" name="password_confirmation" placeholder="Konfirmasi Password">
				</div>
				<input type="submit" value="Daftar Sekarang">
			</form>
			 </div>
		</div>
	</div>
@endsection
