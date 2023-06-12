@extends("themes/web/layout")

@section("content")

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <a href="#">OK COMPUTER</a>
        <span class="separator"><i class="iconfont pe-7s-angle-right"></i></span>
        <span>Tienda de Productos</span>
    </div>
</div>

<!-- Container -->
<section class="main-container col1-layout bar bar--sm">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-main col-lg-12">
                    <div class="product-view">
                        <div class="product-essential">
                            <form action="#" method="post" id="product_addtocart_form">
                                <input name="form_key" value="6UbXroakyQlbfQzK" type="hidden">
                                <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                                    <div class="new-label new-top-left"> New</div>
                                    <div class="product-image">
                                        <div class="product-full">
                                            @php
                                                $portada = $product->arts->where('art_type_id', 1);
                                                if ($portada->count() > 0) {
                                                    $img = $ruta.$portada->first()->name;
                                                } else {
                                                    $img = asset('assets_web/images/products/product-img.jpg');
                                                }
                                            @endphp
                                            <img id="product-zoom" class="" src="{{ $img }}" data-zoom-image="{{ $img }}" alt="{{ $product->slug_short }}"/>
                                        </div>
                                        <div class="more-views">
                                            <div class="slider-items-products">
                                                <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                                                    <div class="slider-items slider-width-col4 block-content">
                                                        @php
                                                            $galeria = $product->arts;
                                                        @endphp

                                                        @if ($galeria->count() > 0)
                                                            @foreach ($galeria as $itemImg)
                                                                <div class="more-views-items">
                                                                    <a href="#" data-image="{{ asset('assets_web/images/products/product-img.jpg') }}" data-zoom-image="products-images/product-img1.jpg">
                                                                        <img class="product-zoom" src="{{ $ruta }}{{ $itemImg->name }}" alt="product-image"/>
                                                                    </a>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <div class="more-views-items">
                                                                <a href="#" data-image="{{ asset('assets_web/images/products/product-img.jpg') }}" data-zoom-image="products-images/product-img1.jpg">
                                                                    <img class="product-zoom" src="{{ asset('assets_web/images/products/product-img.jpg') }}" alt="product-image"/>
                                                                </a>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                                    <div class="product-name">
                                        <h1>{{ $product->subcategory->name }} {{ $product->title }}</h1>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:90%" class="rating"></div>
                                        </div>
                                        <p class="rating-links">
                                            <a href="#">1 visitas</a>
                                            <span class="separator">|</span>
                                            <a href="#">Agrega tu visita</a>
                                        </p>
                                    </div>
                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Precio de venta</span>
                                                <span id="product-price-48" class="price">
                                                    @if ($product->prices->count())
                                                        {{ $product->prices->first()->currency->simbol }}
                                                        {{ $product->prices->first()->price }}
                                                    @else
                                                        0.00
                                                    @endif
                                                </span>
                                            </p>
                                            <p class="availability in-stock pull-right"><span>En Stock</span></p>
                                        </div>
                                    </div>
                                    <div class="short-description">
                                        <h2>Características del producto</h2>
                                        <div>
                                            <div>
                                                <label>Modelo: {{ $product->name }} {{ $product->model }}</label>
                                                <br>
                                                <label>Sub Categoría: {{ $product->subcategory->name }}</label>
                                                <br>
                                                <label>Categoría: {{ $product->category->name }}</label>
                                                <br>
                                                <label>Marca: {{ $product->mark->name }}</label>
                                                <br>
                                                <label>Part Number: {{ $product->part_number }}</label>
                                            </div>
                                        </div>
                                        <br>
                                        <h2>Especificaciones</h2>
                                        <div>
                                            <ul id="list-element">
                                                @foreach ($product->specifications as $espec)
                                                    @php
                                                        $order = 0;
                                                        switch ($espec->feature_value->feature->name) {
                                                            case 'PROCESADOR':
                                                                $order = 1;
                                                            break;
                                                            case 'MEMORIA RAM':
                                                                $order = 2;
                                                            break;
                                                            case 'CAPACIDAD':
                                                                $order = 3;
                                                            break;
                                                            case 'ALMACENAMIENTO':
                                                                $order = 4;
                                                            break;
                                                            case 'TARJETA DE VIDEO':
                                                                $order = 5;
                                                            break;
                                                            case 'TAMAÑO':
                                                                $order = 6;
                                                            break;
                                                            case 'SISTEMA OPERATIVO':
                                                                $order = 7;
                                                            break;
                                                            case 'GARANTIA':
                                                                $order = 8;
                                                            break;
                                                        }
                                                    @endphp
                                                    
                                                    <li data-order="{{ $order }}">{{ $espec->feature_value->feature->name }}: {{ $espec->feature_value->value->name }} {{ $espec->feature_content }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <br>
                                        <h2>Especificaciones Extras</h2>
                                        <div>
                                            <div>
                                                <label>Detalles:</label>
                                                <div style="font-size: 0.85714286em;">
                                                    @php
                                                        if ($product->detail != null) {
                                                            echo str_replace(PHP_EOL, '<br>', $product->detail);
                                                        } else {
                                                            echo 'Sin especificación';
                                                        }
                                                    @endphp
                                                </div>
                                                @if ($product->link != null)
                                                    <br>
                                                    <label>Link: <a href="{{ $product->link }}" target="_blank" style="color: #3b62f3">Ver detalles del producto</a></label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <div class="pull-left">
                                                <div class="custom pull-left">
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;"
                                                        class="reduced items-count" type="button">
                                                        <i class="fa fa-minus">&nbsp;</i>
                                                    </button>
                                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                        class="increase items-count" type="button">
                                                        <i class="fa fa-plus">&nbsp;</i>
                                                    </button>
                                                </div>
                                            </div>
                                            <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Agregar al carrito" type="button"><span>Agregar al carrito</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("scripts")
    <script type="text/javascript" src="{{ asset('assets_web/js/cloud-zoom.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            var listaArray = $('#list-element > li').toArray();
            listaArray.sort((a, b) => {
                console.log(a.dataset.order);
                return a.dataset.order.localeCompare(b.dataset.order);
            });
            $('#list-element').append(listaArray);
        });
    </script>
@endsection