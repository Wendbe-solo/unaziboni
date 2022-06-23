@extends('layouts.app')



@section('content')


<link rel="stylesheet" href="{{asset('./boot/css/bootstrap.min.css')}}">

<style>
    .dd {
        background-image: url({{asset('ass/img/slide/slide5.jpg')}});
        

    }

    .cc {
        background-color: rgba(240, 248, 255, 0.721);




    }
</style>
<div class="container dd">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card cc">

                <div class="logo me-auto">
                    <!-- Uncomment below if you prefer to use an image logo -->

                    <a href="index.html"><img src="{{asset('./ass/img/slide/images3.jpg')}} " alt="" class=""></a>

                </div>


                <div id="epihan">{{ __('ADMINISTRATEUR') }}</div>




                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">

                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

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
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>





                        <p for="role-select" class="font-semibold text-gray-700">Je suis:</p>
                        <div class="flex justify-between items-center">
                            <label for="freelance">Directeur
                                <input type="radio" value="1" id="Directeur" name="role_id">
                                <span class="checkmark"></span>
                            </label>
                            <label for="client">Sécrétaire
                                <input type="radio" value="2" id="Sécrétaire" name="role_id">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="{{asset('./boot/js/bootstrap.bundle.min.js')}}">


@endsection