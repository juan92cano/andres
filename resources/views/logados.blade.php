@extends('login/app')
@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h4>USUARIO LOGADO</h1>
                    <a href="{{ route('logout') }}">Cerrar Sesion</a>
                 </div>
            </div>
        </div>
    </div>
</main>
@endsection