@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 70px !important;">
    <div class="row">
      <div class="col-md-3 col-sm-12"></div>
      <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
        <div class="form">
          <div class="text-center py-4">
            <i class="fas fa-user-circle fa-3x"></i></div>
          <h3 style="text-align: center" class="pb-4">LOGIN</h3>
                    <form class="form-group" method="POST" action="{{ route('login') }}">
                        @csrf

                            
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="enter username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                            <br>
                            
                         <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="enter password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group text-right mb-0">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                 {{ __('Forgot Your Password?') }}
                            </a>
                         @endif
                            
                            <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                            </button>

                             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
