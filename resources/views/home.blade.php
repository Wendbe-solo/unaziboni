@extends("layouts.app")

@section('content')
<link rel="stylesheet" href="{{asset('./m/m.css')}}">
<style>
    .dd {
        background-image: url({{asset('ass/img/slide/slide5.jpg')}});

    }

    .cc {
        background-color: rgba(248, 250, 253, 0.353);
}
</style>
<button class="btn btn-danger d-flex justify-content-end ">
<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se deconnecter') }}
                                    </a>
</button> <br>
<button class="btn btn-info">
    <a href="{{asset('homea')}}">Espace Directeur</a>
</button>
<button class="btn btn-info">
<a href="{{asset('homeb')}}">Espace Seecretaire</a>   
</button>

<div class="container dd">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card cc">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{asset('./boot/css/bootstrap.min.css')}}">
@endsection