@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 margin-tb center">&nbsp;</div>
		<div class="col-lg-4 margin-tb center">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <h2>Login</h2>
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
			<form action="{{ route('login') }}" method="post">
                @csrf
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
					<strong>&nbsp;</strong>
					<input type="checkbox" name="remember" id="remember" class="mr-2">
                        <label for="remember">Remember me</label>
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Login</button>
			</div>
			<p class="text-center mb-0"> <a href="{{ route('register') }}">New user? Register please</a></p>
            </form>
        </div>
    </div>
        </div>
		<div class="col-lg-4 margin-tb center">&nbsp;</div>
    </div>
</div>
@endsection

