@extends('layouts.app')

@section('content')
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{asset('img/logo.png')}}" alt="Klorofil Logo" width="200px"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form method="POST" action="{{ route('login') }}" class="form-auth-small">
                                @csrf
								<div class="form-group">
                                    <label for="email" class="control-label sr-only">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
								</div>


								<div class="form-group">
                                    <label for="password" class="control-label sr-only">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
								</div>


								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left" for="remember">
										<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<span>Remember me</span>
									</label>
								</div>



                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    LOGIN
                                </button>
                                <br>
                                @if (Route::has('password.request'))
                                    <span class="helper-text"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">Forgot password?</a></span>
                                @endif

							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Somo suna empresa de confianza</h1>
							<p>by Logistic 2021</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->



@endsection
