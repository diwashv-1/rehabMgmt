@extends('layouts.app')

@section('style')
    <style>
        .main-content{
            width: 60%;
            border-radius: 20px;
            box-shadow: 0 5px 5px rgba(0,0,0,.4);
            margin: 5em auto;
            display: flex;
        }
        .company__info{
            background-color: #008080;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: #fff;

            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.25),
                    rgba(219, 0, 0, 0.25)
                ),
                          url('Images/rehav5.jpg');

            background-size: cover;

            background-repeat: no-repeat;
        }
        .fa-android{
            font-size:3em;
        }
        @media screen and (max-width: 640px) {
            .main-content{width: 90%;}
            .company__info{
                display: none;
            }
            .login_form{
                border-top-left-radius:20px;
                border-bottom-left-radius:20px;
            }
        }
        @media screen and (min-width: 642px) and (max-width:800px){
            .main-content{width: 70%;}
        }
        .row > h2{
            color:#008080;
        }
        .login_form{
            background-color: #fff;
            border-top-right-radius:20px;
            border-bottom-right-radius:20px;
            border-top:1px solid #ccc;
            border-right:1px solid #ccc;
        }
        form{
            padding: 0 2em;
        }
        .form__input{
            width: 100%;
            border:0px solid transparent;
            border-radius: 0;
            border-bottom: 1px solid #aaa;
            padding: 1em .5em .5em;
            padding-left: 2em;
            outline:none;
            margin:1.5em auto;
            transition: all .5s ease;
        }
        .form__input:focus{
            border-bottom-color: #008080;
            box-shadow: 0 0 5px rgba(0,80,80,.4);
            border-radius: 4px;
        }
        .btn{
            transition: all .5s ease;
            width: 70%;
            border-radius: 30px;
            color:#008080;
            font-weight: 600;
            background-color: #fff;
            border: 1px solid #008080;
            margin-top: 1.5em;
            margin-bottom: 1em;
        }
        .btn:hover, .btn:focus{
            background-color: #008080;
            color:#fff;
        }
    </style>
@stop

@section('content')
<div class="">
    {{--<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
                    </form>
                </div>
            </div>
        </div>
    </div>--}}

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row main-content">
            <div class="col-md-4 company__info text-center">
                <span class="company__logo"><h2><span class="fa fa-android"></span></h2></span>
                <h4 class="company_title">Sunaulo Bihani</h4>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form text-center">
                <div class="container-fluid m-auto">
                    <div class="row m-auto">
                        <h2 class="col-md-12">Log In</h2>
                    </div>
                    <div class="row m-auto">
                        <form method="POST" action="{{ route('login') }}" >
                            @csrf
                            <div class="col-md-12">
                                <label for="email" class="col-md-12 col-form-label text-center">{{ __('E-Mail Address') }}</label>
                                <input type="email" id="email" placeholder="Email" class="col-md-12 form__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <input type="password" id="password" class="form__input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
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
                        </form>
                    </div>
                    <div class="row">
                        <p class="col-md-12">Don't have an account? <a href="#">Register Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection
