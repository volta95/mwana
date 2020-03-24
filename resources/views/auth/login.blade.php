@extends('layouts.auth')

@section('content')

	<div class="form-container sign-up-container">
		<form action="#">
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
            <input type="tel" placeholder="Phone" name="phone" required/>
            <input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="pass" required/>
            <button>Register</button>
            </div>
        </form>

	</div>
	<div class="form-container sign-in-container">
		<form action="#">
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
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />


                <a href="#">Forgot your password?</a><br><br>
                <button>Login</button>
            </div>

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
                <h1 class="animated lightSpeedIn delay-2s">Welcome Back!</h1>
                <p id="log-text"></p>
                <button class="ghost animated fadeInLeft delay-2s" id="signUp" onclick="typeWriters()">Sign Up</button>

			</div>
			<div class="overlay-panel overlay-left">
                <h1 class="animated lightSpeedIn delay-2s">Hello, Friend!</h1>
				<p id="reg-text"></p>
                <button class="ghost animated fadeInLeft delay-2s" id="signIn">Sign In</button>
			</div>
		</div>
	</div>


@endsection
