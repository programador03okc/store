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
<section class="main-container col2-left-layout bar bar--xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-xs-12 col-sm-push-3">
                <div class="category-description std">
                    <div class="slider-items-products">
                        <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col1 owl-carousel owl-theme">
                                @if (count($section4) > 0)
                                    @foreach ($section4 as $banner)
                                        <div class="item">
                                            <a href="#"><img alt="category image" src="{{ $rutaBan }}{{ $banner->name }}"></a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="item"> <a href="#">
                                        <img alt="category image" src="{{ asset('assets_web/images/category-img.jpg') }}"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag">Productos OK COMPUTER</div>
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <article class="col-main">
                    <h2 class="page-heading"><span class="page-heading-title">Lista de productos</span></h2>
                    <div class="toolbar">
						<div class="row">
							<div class="col-md-1">
								<div class="sorter">
									<div class="view-mode">
										<a href="list.html" title="List" class="button-list">&nbsp;</a>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="pages">
									<label>Página:</label>
									{{ $product->links('pagination.default') }}
								</div>
							</div>
							<div class="col-md-5">
								<div class="pager">
									<div id="limiter">
										<label>Cantidad de productos: </label>
										<ul>
											<li><a href="#">15<span class="right-arrow"></span></a>
												<ul>
												<li><a href="#">20</a></li>
												<li><a href="#">30</a></li>
												<li><a href="#">35</a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="category-products">
                        <ul class="products-grid">
                            @if (count($product) > 0)
                                @foreach ($product as $item)
                                    <li class="item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="mgk-pro-hover">
                                                    <a href="{{ route('detail-product', [$item->slug_short, $item->id]) }}" title="{{ $item->slug_short }}" class="product-image">
                                                        @php
                                                            if ($item->arts->count()) {
                                                                $img = $ruta.$item->arts->first()->name;
                                                            } else {
                                                                $img = asset('assets_web/images/products/product-img.jpg');
                                                            }
                                                        @endphp
                                                        <img class="img-responsive" src="{{ $img }}" alt="{{ $item->slug_short }}">
                                                        <span class="product-img-back">
                                                            <img class="img-responsive" src="{{ $img }}" alt="{{ $item->slug_short }}">
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="item-title">
                                                    <a title="{{ $item->title }}" href="{{ route('detail-product', [$item->slug_short, $item->id]) }}">{{ $item->subcategory->name }} {{ $item->title }}</a>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="actions">
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <p class="special-price">
                                                                    <span class="price-label">Special Price</span>
                                                                    <span class="price"> 
                                                                        @if ($item->prices->count())
                                                                            {{ $item->prices->first()->currency->simbol }}
                                                                            {{ $item->prices->first()->price }}
                                                                        @else
                                                                            0.00
                                                                        @endif
                                                                    </span>
                                                                </p>
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
                                    </li>   
                                @endforeach
                            @else
                                <li class="item col-lg-12">No hay productos registrados</li>
                            @endif
                        </ul>
                    </div>
                    <div class="toolbar">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pages">
                                    <label>Página:</label>
                                    {{ $product->links('pagination.default') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                <aside class="col-left sidebar">
                    <div class="side-nav-categories">
                        <div class="block-title"> Categorías </div>
                        <div class="box-content box-category">
                            <ul>
                                @foreach ($menu_cate as $filterCate)
                                    <li class="last"> <a href="#"> {{ $filterCate->name}} </a> </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="side-nav-categories">
                        <div class="block-title"> Marcas </div>
                        <div class="box-content box-category">
                            <ul>
                                @foreach ($menu_mark as $filterMark)
                                    <li class="last"> <a href="#"> {{ $filterMark->name}} </a> </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="block block-cart">
                        <div class="block-title ">Mi Carrito</div>
                        <div class="block-content">
                            <div class="summary">
                                <p class="amount">Tiene <a href="#">2 items</a> en su carrito.</p>
                                <p class="subtotal"> <span class="label">Subtotal:</span> <span class="price">$27.99</span> </p>
                            </div>
                            <div class="ajax-checkout">
                                <button class="button button-checkout" title="Comprar" type="button"><span>Procesar compra</span></button>
                            </div>
                            <p class="block-subtitle">Agregados últimamente item(s) </p>
                            <ul>
                                <li class="item">
                                    <a href="#" title="Fisher-Price Bubble Mower" class="product-image">
                                        <img src="{{ asset('assets_web/images/products/product-img.jpg') }}" alt="Fisher-Price Bubble Mower">
                                    </a>
                                    <div class="product-details">
                                        <div class="access">
                                            <a href="#" title="Remove This Item" class="btn-remove1">
                                                <span class="fa fa-trash-o"></span>
                                            </a>
                                        </div>
                                        <strong>1</strong> x <span class="price">$19.99</span>
                                        <p class="product-name"> <a href="#">Tablet E8</a></p>
                                    </div>
                                </li>
                                <li class="item last">
                                    <a href="#" title="Prince Lionheart Jumbo Toy Hammock" class="product-image">
                                        <img src="{{ asset('assets_web/images/products/product-img.jpg') }}" alt="Prince Lionheart Jumbo Toy Hammock">
                                    </a>
                                    <div class="product-details">
                                        <div class="access">
                                            <a href="#" title="Remove This Item" class="btn-remove1">
                                                <span class="fa fa-trash-o"></span>
                                            </a>
                                        </div>
                                        <strong>1</strong> x <span class="price">$8.00</span>
                                        <p class="product-name"> <a href="#"> Impresora HP L530 </a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="custom-slider">
                        <div>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                @php
                                    $contador = 1;
                                    $count = 1;
                                    $contItem = count($section8);
                                @endphp
                                <ol class="carousel-indicators">
                                    @for ($i = 0; $i < $contItem; $i++)
                                        <li class="{{ $i == 0 ? 'active' : ''}}" data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class=""></li>
                                        @php
                                            $count++;
                                        @endphp
                                    @endfor
                                </ol>
                                <div class="carousel-inner">
                                    
                                    @if (count($section8) > 0)
                                        @foreach ($section8 as $promProd)
                                            <div class="item {{ $contador == 1 ? 'active' : ''}}">
												<img src="{{ $rutaBan }}{{ $promProd->name }}" alt="{{ $promProd->name }}">
                                            </div>
                                            @php
                                                $contador++;
                                            @endphp
                                        @endforeach
                                    @else
                                        <div class="item active"><img src="{{ asset('assets_web/images/slide.jpg') }}" alt="slide3">
                                            <div class="carousel-caption">
                                                <h3><a title=" Sample Product" href="#">50% OFF</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <a class="left carousel-control" href="#" data-slide="prev"><span class="sr-only">Previous</span></a>
                                <a class="right carousel-control" href="#" data-slide="next"><span class="sr-only">Next</span></a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection

@section("scripts")
    <script type="text/javascript">
    </script>
@endsection