@extends('layouts.auth')

@section('content')

	<div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
			<h1 class="animated fadeInDown delay-1s">Create Account</h1>
            <div class="social-container animated zoomIn delay-2s">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social"><i class="fab fa-instagram"></i></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="animated  zoomIn delay-3s">
			<span>or use your email for registration</span>
            <input type="text" placeholder="Name" name="name" required />

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input type="tel" placeholder="Phone" name="phone" required/>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="email" placeholder="Email" name="email" required/>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input type="password" placeholder="Password" name="password" required/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
              <input id="password-confirm" placeholder="Confirm Password" type="password"  name="password_confirmation" required autocomplete="new-password">

            <button type="submit">Register</button>
            </div>
        </form>

	</div>
	<div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @if (session('message'))
                <div style="color:red;">
                    {{ session('message') }}
                </div>
            @endif
			<h1 class="animated fadeInDown delay-1s">Login</h1>
			<div class="social-container animated zoomIn delay-2s">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social"><i class="fab fa-instagram"></i></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="animated  zoomIn delay-3s">
                <span>or use your account</span>
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />


                <a href="#">Forgot your password?</a><br><br>
                <button type="submit">Login</button>
            </div>

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
                <h1 class="animated rotateInDownLeft delay-2s">Welcome Back!</h1>
                <p id="log-text"></p>
                <button class="ghost animated rollIn delay-2s" id="signUp" onclick="typeWriters()">Sign Up</button>

			</div>
			<div class="overlay-panel overlay-left">
                <h1 class="animated lightSpeedIn delay-2s">Hello, Friend!</h1>
				<p id="reg-text"></p>
                <button class="ghost animated fadeInLeft delay-2s" id="signIn">Sign In</button>
			</div>
		</div>
	</div>


@endsection
