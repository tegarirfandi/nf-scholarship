@extends('layouts.master')

@section('content')
	<div class="approach" id="app">
		<div class="container">
			 <div class="gallery-head text-center">
				<h3>Silahkan Masuk</h3>
				<span> </span>
			</div>
			<div class="contact-form_grid"s>
				 <!-- <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p> -->
			<form method="post" action="{{ route('login') }}" role="form">
				{{ csrf_field() }}

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
				<input type="submit" value="Login">
			</form>
			 </div>
		</div>
	</div>
@endsection
