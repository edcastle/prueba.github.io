@extends('store.main')

@section('content')

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-5 col-xs-12">

                <form id="checkout-form" action="{{ route('users.store') }}" method="POST">
                    {{csrf_field()}}
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Crear usuario</h3>
                        </div>
                        
                        @include('store.partials.errors')

                        <div class="form-group">
                            <input class="input" type="text" name="nombres" placeholder="Nombres" value="{{ old('nombres') }}">
                        </div>

                        <div class="form-group">
                            <input class="input" type="text" name="apellidos" placeholder="Apellidos" value="{{ old('apellidos') }}">
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <input class="input" type="password" name="password" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3 col-xs-10">
                                <button type="submit" class="primary-btn">Crear!</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@stop