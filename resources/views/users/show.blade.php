@extends('store.main')

@section('content')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-6 col-xs-12">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Usuario # {{ $user->id }}</h3>
                    </div>
                    <div class="panel-body">
                        <p><strong>Nombres: </strong> {{ $user->nombres }}</p>
                        <p><strong>Apellidos: </strong> {{ $user->apellidos }}</p>
                        <p><strong>Email: </strong> {{ $user->email }}</p>
                        <p><a class="btn btn-default" href="{{ route('users') }}" role="button">Regresar al listado</a></p>
                    </div>
                </div>

            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@stop