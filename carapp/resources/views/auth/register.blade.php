@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 margin-tb center">&nbsp;</div>
		<div class="col-lg-4 margin-tb center">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <h2>Register</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					@if (session('status'))
						<div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
							{{ session('status') }}
						</div>
					@endif
				</div>
			</div>
			<form action="{{ route('register') }}" method="post">
                @csrf
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Name:</strong>
					<input type="text" name="name" id="name" placeholder="Your name" class="form-control" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Username:</strong>
					<input type="text" name="username" id="username" placeholder="Username" class="form-control" value="{{ old('username') }}">

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Email:</strong>
					<input type="text" name="email" id="email" placeholder="Your email" class="form-control" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Password:</strong>
					<input type="password" name="password" id="password" placeholder="Choose a password" class="form-control" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Password again:</strong>
					<input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="form-control" value="">

                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Register</button>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 text-center"><a href="{{ route('login') }}">Already registered? Please Login</a></div>
            </form>
        </div>
    </div>
        </div>
		<div class="col-lg-4 margin-tb center">&nbsp;</div>
    </div>
</div>
@endsection