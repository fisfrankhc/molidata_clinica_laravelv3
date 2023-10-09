<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="submenu">
                    <a href="{{ route('home') }}"><span class="menu-side"><img src="{{asset('/assets/img/icons/menu-icon-01.svg')}}"
                                alt=""></span> <span> Dashboard </span></a>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{asset('/assets/img/icons/call-icon-02.svg')}}"
                                alt=""></span> <span> Usuarios </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('usuarios.index') }}">Lista de Usuarios</a></li>
                        <li><a href="{{ route('usuarios.create') }}">Nuevo Usuario</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{asset('/assets/img/icons/call-icon-03.svg')}}"
                                alt=""></span> <span> Farmacia </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('categorias.index') }}">Categorias</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Venta</a></li>
                        <li><a href="#">Stock</a></li>
                    </ul>
                </li>
            </ul>
            <div class="logout-btn">
                <a href="{{ route('logout') }}"><span
                        class="menu-side"><img src="{{asset('/assets/img/icons/logout.svg')}}" alt=""></span>
                    <span>Cerrar Sesi&oacute;n</span></a>
            </div>
        </div>
    </div>
</div>
