@extends('login/app_login')
@section('content')
@if(session('success'))
    <h1>{{session('success')}}</h1>
@endif

<div class="page-wrapper auth">
    <div class="page-inner bg-brand-gradient">
        <div class="page-content-wrapper bg-transparent m-0">
            <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                <div class="d-flex align-items-center container p-0">
                    <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                        <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Proyecto" aria-roledescription="logo">
                            <span class="page-logo-text mr-1">Proyecto</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex-1" style="background: url({{ asset('assets/img/svg/pattern-3.svg') }}) no-repeat center bottom fixed; background-size: cover;">
                <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                    <div class="row">
                        <div class="col col-md-6 col-lg-7 hidden-sm-down">
                            <h2 class="fs-xxl fw-500 mt-4 text-white">
                                Proyecto And...
                                <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                                    Lorem ipsum dolor sit amet consectetur adipiscing elit purus tempor augue, id nibh scelerisque dignissim dis bibendum accumsan senectus rutrum cubilia commodo, primis magnis aliquet tempus placerat vulputate pulvinar leo blandit. Porta aliquet donec aptent penatibus nunc pretium magnis enim, est a himenaeos mattis inceptos habitasse tempor, consequat nibh libero phasellus sed rutrum pulvinar. 
                                </small>
                            </h2>
                            <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                                <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                                    Nuestras Redes Sociales
                                </div>
                                <div class="d-flex flex-row opacity-70">
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-facebook-square"></i>
                                    </a>
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-twitter-square"></i>
                                    </a>
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-google-plus-square"></i>
                                    </a>
                                    <a href="#" class="mr-2 fs-xxl text-white">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                            <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                                Login
                            </h1>
                            <div class="card p-4 rounded-plus bg-faded">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="email">Correo Electrónico: </label>
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Su Correo" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Contraseña: </label>
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Su Contraseña" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group text-left">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberme" name="remember">
                                            <label class="custom-control-label" for="rememberme"> Recuerdame </label>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-lg-6 pl-lg-1 my-2">
                                            <button type="submit" class="btn btn-info btn-block btn-lg">Ingresar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                        <?php echo date("Y");?> © JC Developer by&nbsp;<a href='#' class='text-white opacity-40 fw-500' title='JC Developer' target='_blank'>jcdeveloper.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
