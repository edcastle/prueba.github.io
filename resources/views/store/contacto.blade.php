@extends('store.main')

@section('content')
<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Inicio</a></li>
            <li class="active">Contacto</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

@if ( session('status') != null )
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session('status') }}
</div>
@endif

<!-- section -->
<div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                
                <div class="col-md-4 col-xs-12">
                <form id="checkout-form" action=" {{ route('sendmail') }}" method="POST">
                    {{csrf_field()}}
                        <div class="billing-details">
                            <p>Envíanos tus consultas y te atenderemos lo más pronto posible.</p> <br>
                            <div class="section-title">
                                <h3 class="title">Contacto</h3>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="nombres" placeholder="Nombres">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="apellidos" placeholder="Apellidos">
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="ciudad" placeholder="Ciudad">
                            </div>
                            <div class="form-group">
                                <textarea rows="4" class="input" name="mensaje" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-10">
                                    <button type="submit" class="primary-btn">Enviar!</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                    <div class="col-md-8 col-xs-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0767433725214!2d-79.84525438522807!3d-6.7604966951130985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ceec532fa7d97%3A0x294fce35e13dd7a3!2sTahuantinsuyo+1065%2C+Jos%C3%A9+Leonardo+Ortiz!5e0!3m2!1ses!2spe!4v1539456004663" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->


@stop
