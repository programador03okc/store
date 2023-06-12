@extends("themes/web/layout")

@section("content")
<!--  Slider -->
<section class="cover height-70 imagebg text-center slider slider--ken-burns mt-box-slider" data-arrows="true" data-paging="true">
    <div class="container-fluid">
        <div class="row">
            <div class="home-slider5">
                <div class="bxslider">
                    @foreach ($section1 as $banner)
                        <div><img src="{{ $ruta }}{{ $banner->name }}" title="Funky roots"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Secciones -->
<section class="top-banner-section-wrapper">
    <div class="container">
        <div class="top-banner-section">
            <div class="row">
                @if (count($section2) > 0)
                    @foreach ($section2 as $promo)
                        <div class="col-sm-4">
                            <a href="#"><img src="{{ $ruta }}{{ $promo->name }}" alt="{{ $promo->name }}"></a>
                        </div>
                    @endforeach
                @else
                    <div class="col-sm-4">
                        <a href="#"><img src="{{ asset('assets_web/images/home-block.jpg') }}" alt="Promotional Banner"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#"><img src="{{ asset('assets_web/images/home-block.jpg') }}" alt="Promotional Banner"></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#"><img src="{{ asset('assets_web/images/home-block.jpg') }}" alt="Promotional Banner"></a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Gallery -->
<section class="bar bar-3 bar--sm home-special-products">
    <div class="container">
        <div class="row">
            <div class="section-heading">
                <h2 class="section-title">Productos en Oferta</h2>
            </div>
            <div class="section-content">
                <div class="content-left">
                    @if (count($section5) > 0)
                        @foreach ($section5 as $bleft)
                            <a href="#"><img src="{{ $ruta }}{{ $bleft->name }}" alt="{{ $bleft->name }}"></a>
                        @endforeach
                    @else
                        <a href="#"><img src="{{ asset('assets_web/images/left-banner.jpg') }}" alt="left-banner"> </a>
                    @endif
                </div>
                <div class="content-right">
                    <div class="content-right-inner">
                        @if (count($section7) > 0)
                            @foreach ($section7 as $bright)
                                <div class="col-lg-6 col-sm-6">
                                    <a href="#"><img src="{{ $ruta }}{{ $bright->name }}" alt="{{ $bright->name }}"></a>
                                </div>
                            @endforeach
                        @else
                            <div class="col-lg-6 col-sm-6">
                                <a href="#"><img src="{{ asset('assets_web/images/right-banner-1.jpg') }}" alt="right-banner"></a>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <a href="#"><img src="{{ asset('assets_web/images/right-banner-2.jpg') }}" alt="right-banner"></a>
                            </div>
                        @endif
                    </div>
                    <div class="content-right-inner">
                        <div class="col-lg-12">
                            @if (count($section6) > 0)
                                @foreach ($section6 as $bwright)
                                    <a href="#"><img src="{{ $ruta }}{{ $bwright->name }}" alt="{{ $bwright->name }}"></a>
                                @endforeach
                            @else
                                <a href="#"><img src="{{ asset('assets_web/images/right-banner-3.jpg') }}" alt="right-banner"></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Productos más vendidos -->
<section class="featured-pro bg--site">
    <div class="container">
        <div class="row">
            <div class="slider-items-products">
                <div class="featured-block">
                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                        <div class="home-block-inner">
                            <div class="block-title">
                                <h2>Productos más vendidos</h2>
                            </div>
                            <div class="pretext">
                                Lorem Ipsum is simply dummy text of the printing and type
                                setting industry. Curabitur eu odio non justo euismod congue.
                            </div>
                            <a href="grid.html" class="view_more_bnt">Ver más</a>
                        </div>
                        <div class="slider-items slider-width-col4 products-grid block-content">
                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="mgk-pro-hover">
                                            <a href="#" title="Retis lapen casen" class="product-image">
                                                <img class="img-responsive" src="{{ asset('assets_web/images/products/product1.jpg') }}" alt="Productos vendidos">
                                                <span class="product-img-back">
                                                    <img class="img-responsive" src="{{ asset('assets_web/images/products/product-img1.jpg') }}" alt="Productos vendidos">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="item-title">
                                            <a title="Dell Inspiron 15" href="product_detail.html">Dell Inspiron 15</a>
                                        </div>
                                        <div class="quick-view">
                                            <a title="Ver detalle" href="#" class="link-quickview">
                                                <i class="icons pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="actions">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="actions-cart">
                                                    <button type="button" title="Agregar al carrito" class="button btn-cart"></button>
                                                </div>
                                                <ul class="add-to-links">
                                                    <li class="pull-left-no pull-wishlist">
                                                        <a href="#" title="Favorito" class="link-wishlist">
                                                            <i class="fa fa-heart-o"></i>Favorito
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="mgk-pro-hover">
                                            <a href="#" title="Retis lapen casen" class="product-image">
                                                <img class="img-responsive" src="{{ asset('assets_web/images/products/product2.jpg') }}" alt="Productos vendidos">
                                                <span class="product-img-back">
                                                    <img class="img-responsive" src="{{ asset('assets_web/images/products/product-img1.jpg') }}" alt="Productos vendidos">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="item-title">
                                            <a title="Dell Inspiron 15" href="product_detail.html">Dell Inspiron 15</a>
                                        </div>
                                        <div class="quick-view">
                                            <a title="Ver detalle" href="#" class="link-quickview">
                                                <i class="icons pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="actions">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="actions-cart">
                                                    <button type="button" title="Agregar al carrito" class="button btn-cart"></button>
                                                </div>
                                                <ul class="add-to-links">
                                                    <li class="pull-left-no pull-wishlist">
                                                        <a href="#" title="Favorito" class="link-wishlist">
                                                            <i class="fa fa-heart-o"></i>Favorito
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="mgk-pro-hover">
                                            <a href="#" title="Retis lapen casen" class="product-image">
                                                <img class="img-responsive" src="{{ asset('assets_web/images/products/product3.jpg') }}" alt="Productos vendidos">
                                                <span class="product-img-back">
                                                    <img class="img-responsive" src="{{ asset('assets_web/images/products/product-img1.jpg') }}" alt="Productos vendidos">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="item-title">
                                            <a title="Dell Inspiron 15" href="product_detail.html">Dell Inspiron 15</a>
                                        </div>
                                        <div class="quick-view">
                                            <a title="Ver detalle" href="#" class="link-quickview">
                                                <i class="icons pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="actions">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="actions-cart">
                                                    <button type="button" title="Agregar al carrito" class="button btn-cart"></button>
                                                </div>
                                                <ul class="add-to-links">
                                                    <li class="pull-left-no pull-wishlist">
                                                        <a href="#" title="Favorito" class="link-wishlist">
                                                            <i class="fa fa-heart-o"></i>Favorito
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="mgk-pro-hover">
                                            <a href="#" title="Retis lapen casen" class="product-image">
                                                <img class="img-responsive" src="{{ asset('assets_web/images/products/product4.jpg') }}" alt="Productos vendidos">
                                                <span class="product-img-back">
                                                    <img class="img-responsive" src="{{ asset('assets_web/images/products/product-img1.jpg') }}" alt="Productos vendidos">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="item-title">
                                            <a title="Dell Inspiron 15" href="product_detail.html">Dell Inspiron 15</a>
                                        </div>
                                        <div class="quick-view">
                                            <a title="Ver detalle" href="#" class="link-quickview">
                                                <i class="icons pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="actions">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="actions-cart">
                                                    <button type="button" title="Agregar al carrito" class="button btn-cart"></button>
                                                </div>
                                                <ul class="add-to-links">
                                                    <li class="pull-left-no pull-wishlist">
                                                        <a href="#" title="Favorito" class="link-wishlist">
                                                            <i class="fa fa-heart-o"></i>Favorito
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="mgk-pro-hover">
                                            <a href="#" title="Retis lapen casen" class="product-image">
                                                <img class="img-responsive" src="{{ asset('assets_web/images/products/product5.jpg') }}" alt="Productos vendidos">
                                                <span class="product-img-back">
                                                    <img class="img-responsive" src="{{ asset('assets_web/images/products/product-img1.jpg') }}" alt="Productos vendidos">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="item-title">
                                            <a title="Dell Inspiron 15" href="product_detail.html">Dell Inspiron 15</a>
                                        </div>
                                        <div class="quick-view">
                                            <a title="Ver detalle" href="#" class="link-quickview">
                                                <i class="icons pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="actions">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="actions-cart">
                                                    <button type="button" title="Agregar al carrito" class="button btn-cart"></button>
                                                </div>
                                                <ul class="add-to-links">
                                                    <li class="pull-left-no pull-wishlist">
                                                        <a href="#" title="Favorito" class="link-wishlist">
                                                            <i class="fa fa-heart-o"></i>Favorito
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="mgk-pro-hover">
                                            <a href="#" title="Retis lapen casen" class="product-image">
                                                <img class="img-responsive" src="{{ asset('assets_web/images/products/product6.jpg') }}" alt="Productos vendidos">
                                                <span class="product-img-back">
                                                    <img class="img-responsive" src="{{ asset('assets_web/images/products/product-img1.jpg') }}" alt="Productos vendidos">
                                                </span>
                                            </a>
                                        </div>
                                        <div class="item-title">
                                            <a title="Dell Inspiron 15" href="product_detail.html">Dell Inspiron 15</a>
                                        </div>
                                        <div class="quick-view">
                                            <a title="Ver detalle" href="#" class="link-quickview">
                                                <i class="icons pe-7s-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="actions">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <span class="regular-price"> <span class="price">$155.00</span> </span>
                                                    </div>
                                                </div>
                                                <div class="actions-cart">
                                                    <button type="button" title="Agregar al carrito" class="button btn-cart"></button>
                                                </div>
                                                <ul class="add-to-links">
                                                    <li class="pull-left-no pull-wishlist">
                                                        <a href="#" title="Favorito" class="link-wishlist">
                                                            <i class="fa fa-heart-o"></i>Favorito
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="brand-logo wow bounceInUp animated">
    <div class="container">
        <div class="row">
            <div class="section-heading">
                <h2 class="section-title">NUESTRAS MARCAS</h2>
            </div>
            <div class="slider-items-products">
                <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">
                        @if (count($section9) > 0)
                            @foreach ($section9 as $marks)
                                <div class="item">
                                    <a href="javascript:void(0);"><img src="{{ $ruta }}{{ $marks->name }}" alt="{{ $marks->name }}"></a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section("scripts")
    <script type="text/javascript">
        jQuery(document).ready(function () {
             $('.bxslider').bxSlider({
                mode: 'fade',
                auto: true,
                autoControls: true,
                captions: false,
                responsive: true,
            });
			$('.bx-pager').css('display', 'none');
        });
    </script>
@endsection