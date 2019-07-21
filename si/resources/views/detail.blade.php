<!doctype html>
<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="application-name" content="Club House">
    <meta name="author" content="Stids S.A.S">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club House</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('js/fancybox-2.1.7/source/jquery.fancybox.css?v=2.1.5" media="screen') }}" />
    <link rel="icon" type="image/png" href="{{ asset('images/logotipo-min.png') }}">
    <style>
        @font-face {
            font-family: "Capture It";
            src: url(fonts/capture-it.ttf) format("truetype");
        }

        html, body, a, p {
            margin: 0;
            height: 100%;
            font-family: "Capture It";
        }
    </style>
</head>

<body>
<audio autoplay src="{{ asset('audio.mp4') }}"></audio>
<!-- header section -->
<section class="banner" role="banner">
    <!--header navigation -->
    <header id="header">
        <div class="header-content clearfix">
            <a style="color: white;" class="logo" href="{!! route('home.index') !!}">
                <img style="margin: 0 auto;" src="{{ asset('images/logotipo-min.png') }}" width="30px"> CLUB HOUSE
            </a>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="#intro">Inicio</a></li>
                    <li><a href="#services">Menú</a></li>
                    <li><a href="#works">Galería</a></li>
                    <li><a href="#teams">Delicias</a></li>
                    <li><a href="#testimonials">Testimonios</a></li>
                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a></div>
    </header>

    <!--header navigation -->
    <!-- banner text -->
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="banner-text text-center">
                <img style="margin: 0 auto;" class="img-responsive" src="{{ asset('images/logotipo-min.png') }}" width="290">
                <h1>Food</h1>
                <p style="color: white;">Una experiencia inolvidable</p>
                <nav role="navigation">
                    <a href="#services" class="banner-btn">
                        <img src="{{ asset('images/down-arrow.png') }}" alt=""></a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- header section -->
<!-- about section -->
<section id="intro" class="section intro no-padding">
    <div class="container">
        <div class="row no-gutter">
            <div class="row">
                <div class="col-md-6">
                    <div class="avatar"><img src="{{ asset('images/intro-img1.jpg') }}" alt="" class="img-responsive"></div>
                </div>
                <div class="col-md-6" style="padding: 30px;">
                    <br>
                    <br>
                    <h1>Una Experiencia Inolvidable</h1>
                    <p>
                        El 20 de julio del año 2016 nace barranquilla Club House un espectacular sitio de comidas que
                        busca darle a sus visitantes la oportunidad de probar sabores exquisitos y brindarles la
                        satisfacción de darles un lugar donde puedan encontrar tranquilidad y confort.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section -->
<!-- services section -->
<section id="services" class="services service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">Menú</h3>
                <p class="text-center"><em>Los mejores precios y el mejor servicio!</em></p>
                <br>
                <br>
            </div>
        </div>

        @if($categories->count())

            <div class="row">

            @foreach($categories as $key => $category)

                <div class="col-md-6 col-sm-6 services">
                    <span class="fa {{ $category->icon_code }} fa-2x rojo"></span>
                    <h4>{{ $category->name }}</h4>

                    @if($category->description)
                        <span class="texto-rojo">({{ $category->description }})</span>
                    @endif

                    @if($category->products->count())

                        <table width="100%" class="text-left">

                            @foreach($category->products as $product)

                                <tr>
                                    <td class="gris-oscuro">

                                        {{ $product->name }}

                                        @if($product->description)

                                            <div class="subtexto">({{ $product->description }})</div>

                                        @endif

                                    </td>
                                    <td class="gris-oscuro" width="3%">

                                        @if($product->price)

                                            <div class="precio-rojo">${{ number_format($product->price) }}</div>

                                        @endif

                                    </td>
                                </tr>

                                @if($product->small_size)

                                    <tr>
                                        <td class="gris-oscuro">
                                            <div class="subtexto">(Pequeña)</div>
                                        </td>
                                        <td class="gris-oscuro" width="3%">
                                            <div class="precio-rojo">${{ number_format($product->small_size) }}</div>
                                        </td>
                                    </tr>

                                @endif

                                @if($product->medium_size)

                                    <tr>
                                        <td class="gris-oscuro">
                                            <div class="subtexto">(Mediana)</div>
                                        </td>
                                        <td class="gris-oscuro" width="3%">
                                            <div class="precio-rojo">${{ number_format($product->medium_size) }}</div>
                                        </td>
                                    </tr>

                                @endif

                                @if($product->big_size)

                                    <tr>
                                        <td class="gris-oscuro">
                                            <div class="subtexto">(Grande)</div>
                                        </td>
                                        <td class="gris-oscuro" width="3%">
                                            <div class="precio-rojo">${{ number_format($product->big_size) }}</div>
                                        </td>
                                    </tr>

                                @endif

                            @endforeach

                        </table>

                    @endif

                </div>

            @endforeach

            </div>

        @else
            <div class="row">
                <div class="col-md-4 col-sm-4 services">
                    <span class="fa fa-cutlery fa-2x rojo"></span>
                    <h4>PIQUES</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">Mozzarellas fingers</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$8</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Aros de cebolla</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$7</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Porción papas a la francesa</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$5</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Porción papas en casco</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$6</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Dedos de pollo</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$6</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 col-sm-4 services">
                    <span class="fa fa-cutlery fa-2x rojo"></span>
                    <h4>SANDWICHS DULCES</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">
                                Queso y miel
                                <div class="subtexto">(queso mozzarella)</div>
                            </td>
                            <td class="gris-oscuro" width="3%" valign="top">
                                <div class="precio-rojo">$8</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Bocadillo con queso</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Nutella, fresas y queso mozzarella</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Troplical
                                <div class="subtexto">(piña, cereza, queso y jamón)</div>
                            </td>
                            <td class="gris-oscuro" width="3%" valign="top">
                                <div class="precio-rojo">$11</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 col-sm-4 services">
                    <span class="fa fa-cutlery fa-2x rojo"></span>
                    <h4>LA GRAN PICADA</h4>
                    <span class="texto-rojo">(Papas a la francesa, papas en casco, aros de cebolla, mozzarellas fingers)</span>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">
                                La gran picada dedos de pollo
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$22</div>
                                <div class="precio-rojo">$42</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                La gran picada pechuga
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$26</div>
                                <div class="precio-rojo">$50</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                La gran picada chorizo
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$26</div>
                                <div class="precio-rojo">$50</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                La gran picada suiza
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$27</div>
                                <div class="precio-rojo">$52</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 services">
                    <span class="fa fa-cutlery fa-2x rojo"></span>
                    <h4>SANDWICHS</h4>
                    <span class="texto-rojo">(Todos nuestros sándwiches, su preparación llevan salsas de la casa y con acompañante papas a la francesa o aros de cebolla)</span>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">
                                Sencillo
                                <div class="subtexto">(Jamón, queso mozzarella)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$11</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Hawaiano
                                <div class="subtexto">(Jamón, queso mozzarella, piña, tocineta)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Mixto
                                <div class="subtexto">(Jamón, queso mozzarella y chorizo)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Peperoni
                                <div class="subtexto">(Jamón, queso mozzarella y peperoni)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Pollo
                                <div class="subtexto">(Jamón, queso mozzarella y pollo)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Salami</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Pollo - Champiñones</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Pollo - Salami</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Pollo - Chorizo</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Pollo - Tocineta</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Pollo - Peperoni</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Pollo - Suiza</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                4 Carnes
                                <div class="subtexto">(Queso mozzarella, peperoni, chorizo, jamón, tocineta)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$16</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                5 Carnes
                                <div class="subtexto">(Queso mozzarella, peperoni, chorizo, jamón, tocineta, pollo)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$18</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                6 Carnes
                                <div class="subtexto">(Queso mozzarella, peperoni, chorizo, jamón, tocineta, pollo, salami)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$19</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Suiza
                                <div class="subtexto">(Queso mozzarella, jamón, salchicha suiza)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Americano
                                <div class="subtexto">(Jamón, queso mozzarella, queso chédar, tocineta, nachos)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Ranchero
                                <div class="subtexto">(Jamón, queso mozzarella, peperoni, salami, tocineta)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Italiano
                                <div class="subtexto">(Jamón, queso mozzarella, peperoni, salami, tocineta)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$16</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Vegetariano
                                <div class="subtexto">(Queso mozzarella, tomates frescos, lechuga con salsa de la casa)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$11</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6 col-sm-6 services">
                    <span class="fa fa-cutlery fa-2x rojo"></span>
                    <h4>CLUB POTATOES</h4>
                    <span class="texto-rojo">(Papas a la francesa, papas en casco, queso americano, beicon, sour crearm)</span>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">Club potatoes</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$18</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Club Potatoes agrandada</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$34</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Club potates chorizo
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$22</div>
                                <div class="precio-rojo">$42</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Club potatoes pechuga
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$22</div>
                                <div class="precio-rojo">$42</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Club potatoes suiza
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$23</div>
                                <div class="precio-rojo">$44</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Club potatoes pollo y chorizo
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$26</div>
                                <div class="precio-rojo">$50</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Club potatoes pollo y suiza
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$27</div>
                                <div class="precio-rojo">$54</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Club potatoes chorizo y suiza
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$27</div>
                                <div class="precio-rojo">$52</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Club potatoes 4 carnes
                                <div class="subtexto">(Beicon, pollo, chorizo y suiza)</div>
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <br>
                                <div class="precio-rojo">$36</div>
                                <div class="precio-rojo">$70</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 services">
                    <span class="fa fa-beer fa-2x rojo"></span>
                    <h4>POSTRES</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">
                                Fresa con crema
                                <div class="subtexto">(Pequeña)</div>
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$4</div>
                                <div class="precio-rojo">$7</div>
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Frutas con crema</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$11</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Churchill</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$11</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Brownie con helado</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$7</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 col-sm-4 services">
                    <span class="fa fa-beer fa-2x rojo"></span>
                    <h4>PARFAIT DULCES</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">
                                Oreo
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$8</div>
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Galleta milo
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$8</div>
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Galleta chips
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$8</div>
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Brownie
                                <div class="subtexto">(Mediana)</div>
                                <div class="subtexto">(Grande)</div>
                            </td>
                            <td class="gris-oscuro" width="3%">
                                <br>
                                <div class="precio-rojo">$8</div>
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-4 col-sm-4 services">
                    <span class="fa fa-beer fa-2x rojo"></span>
                    <h4>FRAPPUCCINOS</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">Arequipe</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$7</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Chocolate</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$7</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Nutella</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Irlandes</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Charly brown</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Chips</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Mr peanut whit chocolate</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Oreo</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Cookies and cream</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$10</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 services">
                    <span class="fa fa-beer fa-2x rojo"></span>
                    <h4>LIMONADAS</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">Natural</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Cerezada</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Patilla</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Yerbabuena</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Uva</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$5</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Durazno</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$5</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Coco</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$5</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Fresa</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$5</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3 col-sm-3 services">
                    <span class="fa fa-beer fa-2x rojo"></span>
                    <h4>REFRESCANTES</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">Té de la casa limón</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$5</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Té frambuesa</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$5</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3 col-sm-3 services">
                    <span class="fa fa-beer fa-2x rojo"></span>
                    <h4>CLUB SODA</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">
                                Queso y miel
                            </td>
                            <td class="gris-oscuro" width="3%" valign="top">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Maracuya
                            </td>
                            <td class="gris-oscuro" width="3%" valign="top">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">
                                Corozo
                            </td>
                            <td class="gris-oscuro" width="3%" valign="top">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3 col-sm-3 services">
                    <span class="fa fa-beer fa-2x rojo"></span>

                    <h4>MOJITOS</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">Tradicional</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Fresa</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Maracuyá</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Kiwi</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$14</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 services">
                    <span class="fa fa-beer fa-2x rojo"></span>
                    <h4>COCTELES</h4>
                    <span class="texto-rojo">(Santa Mónica son nuestras refrescantes limonadas con ron y tequila)</span>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">Natural</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Cereza</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Patilla</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Yerbabuena</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Uva</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Coco</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Durazno</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Fresa</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Kiwi</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$15</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3 col-sm-3 services">
                    <span class="fa fa-beer fa-2x rojo"></span>
                    <h4>MARGARITAS</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">Limón</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Fresa</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Maracuyá</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Blue margarita</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Uva</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Durazno</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Mora</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$13</div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3 col-sm-3 services">
                    <span class="fa fa-beer fa-2x rojo"></span>
                    <h4>CERVEZAS</h4>
                    <table width="100%" class="text-left">
                        <tr>
                            <td class="gris-oscuro">Águila light</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Club colombia</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Budweiser</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$4</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Heineken</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$6</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="gris-oscuro">Corona</td>
                            <td class="gris-oscuro" width="3%">
                                <div class="precio-rojo">$7</div>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        @endif
    </div>
</section>
<!-- services section -->
<!-- work section -->
<section id="works" class="works section no-padding">
    <br>
    <br>
    <h3 class="text-center">Galería</h3>
    <p class="text-center"><em>Espectaculares imagenes de nuestros aperitivos!</em></p>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-1.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-1.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-2.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-2.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-3.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-3.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-4.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-4.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-5.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-5.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-6-big.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-6.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-7.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-7.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-8.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-8.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-9.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-9.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-10.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-10.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-11-big.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-11.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-12-big.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-12.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-13-big.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-13.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-14-big.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-14.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 work">
                <a href="images/products/work-15-big.jpg" class="work-box fancybox-thumbs" data-fancybox-group="thumb">
                    <img src="images/products/work-15.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p>
                                <span class="fa fa-eye"></span><br>
                                Ver en grande
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- work section -->
<!-- our team section -->
<section id="teams" class="section teams">
    <h3 class="text-center">Delicias</h3>
    <p class="text-center"><em>Elige el coctel que más te guste y disfrutalo!</em></p>

    <div class="container">
        <div class="row">
            <!-- team member 2 -->
            <div class="col-md-6 col-sm-6">
                <div class="text-center">
                    <img src="images/patilla.jpg" width="550" alt="" class="img-circle img-responsive">
                    <ul class="social-icons clearfix">
                        <li><a href="https://www.facebook.com/bqclubhouse/" class=""><span
                                        class="fa fa-facebook"></span></a></li>
                        <li><a href="https://www.instagram.com/bqclubhouse/?hl=es" class=""><span
                                        class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="text-center">
                    <img src="images/patilla2.jpg" width="550" alt="" class="img-circle img-responsive">

                    <ul class="social-icons clearfix">
                        <li><a href="https://www.facebook.com/bqclubhouse/" class=""><span
                                        class="fa fa-facebook"></span></a></li>
                        <li><a href="https://www.instagram.com/bqclubhouse/?hl=es" class=""><span
                                        class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <!-- team member 2 -->
        </div>
    </div>
</section>
<!-- our team section -->
<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <center>
                                    <img src="images/logotipo.png" class="img-circle person" alt="Random Name">
                                </center>
                                <h1>"Tranquilizate si tienes un mal día venir a Club House es tu mejor opción..." </h1>
                                <p>Club House</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <center><img src="images/logotipo.png" class="img-circle person" alt="Random Name">
                                </center>
                                <h1>"Disfruta de nuestras delicias a un precio increible!" </h1>
                                <p>Club House.</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <center><img src="images/logotipo.png" class="img-circle person" alt="Random Name">
                                </center>
                                <h1>"Prueba nuestra nueva malteada Con sabor de Banana.." </h1>
                                <p>Club House.</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <center><img src="images/logotipo.png" class="img-circle person" alt="Random Name">
                                </center>
                                <h1>"Antojo de un sandwich ven y te complaceremos probando nuestras delicias." </h1>
                                <p>Club House.</p>
                            </blockquote>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section -->
<!-- Get a quote section -->
<section id="contact" class="sectcontact">
    <div class="container">
        <h3 class="text-center">Contacto</h3>
        <p class="text-center"><em>Escribenos y disfruta de el mejor servicio!</em></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.1666212094917!2d-74.81210981566906!3d10.988526962354173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d11c1515e4b%3A0xc3a601a01020e490!2sClub+House!5e0!3m2!1ses-419!2sco!4v1516628281327"
                width="100%"
                height="250"
                frameborder="0"
                style="border:0"
                allowfullscreen
        ></iframe>

        <div class="row"><br>
            <div class="col-md-4">
                <p>Quieres Venir?</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Barranquilla, COL</p>
                <p><span class="glyphicon glyphicon-phone"></span>Tel: +57 300 2076420</p>
                <p><span class="glyphicon glyphicon-envelope"></span> Instagram: bqclubhouse</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="Escribenos" placeholder="Comment"
                          rows="5"></textarea>
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="button">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Get a quote section -->
<!-- Footer section -->
<footer class="footer">
    <div class="footer-top section">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-6">
                    <h5>Localizados</h5>
                    <p>Barranquilla, COLOMBIA.<br>
                        (+57) 300 2076420<br>
                        Instagram: bqclubhouse</p>
                    <p><i class="fa fa-heart pulse"></i> & <a href="http://www.bqclubhouse.com">Club House</a></p>
                </div>
                <div class="footer-col col-md-3">
                    <h5>Servicios</h5>
                    <p>
                    <ul>
                        <li><a href="#">Domicilio</a></li>
                        <li><a href="#">Cumpleaños</a></li>
                        <li><a href="#">Fotografia</a></li>
                        <li><a href="#">Malteadas</a></li>
                        <li><a href="#">Tu experiencia</a></li>
                    </ul>
                    </p>
                </div>
                <div class="footer-col col-md-3">
                    <h5>Redes Soiales</h5>
                    <ul class="footer-share">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- footer top -->

</footer>
<!-- Footer section -->
<!-- JS FILES -->
<script src="{{ asset('js/jquery-1.11.3.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script src="{{ asset('js/retina.min.js') }}"></script>
<script src="{{ asset('js/modernizr.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fancybox-2.1.7/source/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
<script type="text/javascript" src="{{ asset('js/fancybox-2.1.7/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.fancybox-thumbs').fancybox({
            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : false,
            arrows    : false,
            nextClick : true,

            helpers : {
                thumbs : {
                    width  : 50,
                    height : 50
                }
            }
        });
    });
</script>
</body>