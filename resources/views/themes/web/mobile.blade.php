<ul class="mobile-menu">
    <li><a href="./">Nosotros</a></li>
    <li>
        <span class="expand fa fa-plus" style="padding-bottom: 15.5px; padding-top: 15.5px;"></span><a href="#" style="padding-right: 55px;">Categorias</a>
        <ul style="display: none;">
            @foreach ($menu_cate as $itemMenu)
                <li><a href="#">{{ $itemMenu->name }}</a></li>
            @endforeach
        </ul>
    </li>
    <li>
        <span class="expand fa fa-plus" style="padding-bottom: 15.5px; padding-top: 15.5px;"></span><a href="#" style="padding-right: 55px;">Marcas</a>
        <ul style="display: none;">
            @foreach ($menu_mark as $itemMark)
                <li><a href="#">{{ $itemMark->name }}</a></li>
            @endforeach
        </ul>
    </li>
    <li><a href="{{ route('productos') }}">Productos</a></li>
    <li><a href="{{ route('microsoft') }}">Microsoft 365</a></li>
    <li><a href="{{ route('contactanos') }}">Contactanos</a></li>
    <li style="height: 2px;"></li>
</ul>
<div class="top-links">
    {{--  <ul class="links">
        <li><a title="Mi cuenta" href="{{ route('login_user') }}">Mi Cuenta</a></li>
    </ul>  --}}
</div>