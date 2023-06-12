<header class="pixxett-header1">
    <div class="header-container">
        <nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 logo-block">
                        <div class="logo">
                            <a title="e-commerce" href="./"><img alt="e-commerce" src="{{ asset('images/logo_transparente.png') }}"></a>
                        </div>
                        <!-- Navbar -->
                        <div class="mm-toggle-wrap hidden-lg hidden-md">
                            <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span></div>
                        </div>
                        <div class="nav-inner">
                            <ul id="nav" class="hidden-xs">
                                <li class="level0 parent drop-menu"><a href="{{ route('inicio') }}" class="active"><span>Nosotros</span></a></li>
                                <li class="level0 nav-5 level-top parent">
                                    <a href="javascript: void(0);" class="level-top"><span>Categorias</span><b class="caret"></b></a>
                                    <div class="level0-wrapper dropdown-6col">
                                        <div class="level0-wrapper2 container">

                                            {{--  <div class="row space-okc">
                                                @foreach ($menu_cate as $itemMenu)
                                                    <div class="col-md-4 lev-okc">
                                                        <ul class="level1" style="color: #d31616; font-weight: bold;"> {{ $itemMenu->name }}
                                                            @foreach ($itemMenu->subcategories as $itemSub)
                                                                <li><a href="#"><span>{{ $itemSub->name }}</span></a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endforeach
                                            </div>  --}}

                                            {{--  <div class="nav-block nav-block-left grid12-8 itemgrid itemgrid-4col">
                                                <ul class="level0">
                                                    @foreach ($menu_cate as $itemMenu)
                                                        <li class="level1 nav-6-1 parent">
                                                            <a href="javascript: void(0);" style="color: #d31616; font-weight: bold;"><span>{{ $itemMenu->name }}</span></a>
                                                            @if ($itemMenu->subcategories->count() > 0)
                                                                @php $contadorCate = 1; @endphp
                                                                <ul class="level1">
                                                                    @foreach ($itemMenu->subcategories as $itemSub)
                                                                        <li class="level1 nav-3-1-{{ $contadorCate }}">
                                                                            <a href="#"><span>{{ $itemSub->name }}</span></a>
                                                                        </li>
                                                                        @php $contadorCate++; @endphp
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>  --}}

                                            <div class="nav-block nav-block-left grid12-8 itemgrid itemgrid-4col">
                                                <div class="row space-okc">
                                                    <ul class="level1">
                                                    @foreach ($menu_cate as $itemMenu)
                                                        <div class="col-md-4 lev-okc"><a href="#" style="padding: 5px;"><span>{{ ucfirst(strtolower($itemMenu->name)) }}</span></a></div>
                                                    @endforeach
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li class="level0 nav-7 level-top parent">
                                    <a class="level-top" href="#"><span>Marcas<b class="caret"></b></span></a>
                                    <div class="level0-wrapper dropdown-6col">
                                        <div class="level0-wrapper2 container">
                                            <div class="row space-okc">
                                                @foreach ($menu_mark as $itemMark)
                                                    <div class="col-md-2 lev-okc"><a href="#" style="padding: 5px;"><span>{{ $itemMark->name }}</span></a></div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="level0 parent drop-menu"><a href="{{ route('productos') }}"><span>Productos</span></a></li>
                                <li class="level0 parent drop-menu"><a href="{{ route('microsoft') }}"><span>Microsoft 365</span></a></li>
                                <li class="level0 parent drop-menu"><a href="#"><span>Contactanos</span></a></li>
                                {{--  <li class="level0 parent drop-menu"><a href="{{ route('login_user') }}"><span>Mi cuenta</span></a></li>  --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>