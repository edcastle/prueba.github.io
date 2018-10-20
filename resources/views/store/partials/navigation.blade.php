<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            @if ( !isset($desplegado))
            <div class="category-nav show-on-click">
            @elseif($desplegado)
            <div class="category-nav">
            @endif
                <span class="category-header">Categorias <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    <li><a href="#">Artículos y accesorios para el mueblista</a></li>
                    <li><a href="#">Accesorios y Seguridad para puertas</a></li>
                    <li><a href="#">Amarres y Mallas</a></li>
                    <li><a href="#">Chapas y Cerrajería</a></li>
                    <li><a href="#">Baños</a></li>
                    <li><a href="#">Limpieza</a></li>
                    <li><a href="#">Gasfitería</a></li>
                    <li><a href="#">Pinturas y acabados</a></li>
                    <li><a href="#">Herramientas</a></li>
                    <li><a href="#">Construcción</a></li>
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('about') }}">Quienes Somos</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->