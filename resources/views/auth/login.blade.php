<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ url('css/loginauth.css') }}">
  <title>Document</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="{{ route('register') }}">
      @csrf
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required >

      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required >

      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required >
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="{{ route('login') }}">
      @csrf
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required />
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
  <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required >

  @error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
  @enderror
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Admin!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

</body>
<script>
  const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</html>




{{-- <form method="POST" action="{{ route('login') }}">
  @csrf

  <div class="row mb-3">
      <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

      <div class="col-md-6">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
      <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

      <div class="col-md-6">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
      <div class="col-md-6 offset-md-4">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

              <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
              </label>
          </div>
      </div>
  </div>

  <div class="row mb-0">
      <div class="col-md-8 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{ __('Login') }}
          </button>

          @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
          @endif
      </div>
  </div>
</form> --}}



{{-- <form method="POST" action="{{ route('register') }}">
  @csrf

  <div class="row mb-3">
      <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

      <div class="col-md-6">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
      <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

      <div class="col-md-6">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
      <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

      <div class="col-md-6">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
  </div>

  <div class="row mb-3">
      <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

      <div class="col-md-6">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
  </div>

  <div class="row mb-0">
      <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{ __('Register') }}
          </button>
      </div>
  </div>
</form> --}}