@extends('app')
@section('title','Index') {{-- Titulo de la pagina --}}
@section('content')

            <!-- BEGIN Page Content -->
            <!-- the #js-page-content id is needed for some plugins to initialize -->
            <main id="js-page-content" role="main" class="page-content">
                <div class="subheader">
                    <h1 class="subheader-title">
                        <i class='subheader-icon fal fa-globe'></i> Index
                        <small>
                            Pequeña descripción de la pagina actual
                        </small>
                    </h1>
                </div>
                
                <!-- Your main content goes below here: -->
                <div class="row">
                    <div class="col-xl-12">
                        <div id="panel-1" class="panel">
                            <div class="panel-hdr">
                                <h2>
                                    Titulo de la pagina
                                </h2>
                                <div class="panel-toolbar">
                                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Pantalla Completa"></button>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <div class="panel-tag">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit purus tempor augue, id nibh scelerisque dignissim dis bibendum accumsan senectus rutrum cubilia commodo
                                    </div>
                                    <p>
                                        Ullamcorper ut aptent nisi penatibus placerat habitant tincidunt primis hac fames, sed vestibulum himenaeos maecenas felis ad tempus suscipit bibendum quis, dictum posuere interdum facilisis eros mauris hendrerit faucibus neque. Orci rutrum mus facilisis hendrerit urna primis aptent dictumst ultrices nostra, cras natoque senectus taciti dictum vehicula molestie suspendisse mollis. Ornare nibh phasellus tortor vulputate per suscipit, aptent inceptos posuere eu penatibus pharetra, sociosqu sodales himenaeos non magnis.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
@endsection