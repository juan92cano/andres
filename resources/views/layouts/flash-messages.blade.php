@session('success')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $value }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
@endsession

@session('error')
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ $value }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
@endsession

@session('warning')
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $value }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
@endsession

@session('info')
    <div class="alert alert-info alert dismissible fade show" role="alert">
        {{ $value }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
@endsession

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Por favor revise lo que se muestra a continuación</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
@endif