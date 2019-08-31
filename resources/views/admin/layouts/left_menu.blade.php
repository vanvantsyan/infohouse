<nav class="sidebar" id='navbarSidebarContent'>
    <button class="navbar-toggler menu-toggle" type="button" data-toggle="collapse" data-target="#navbarSidebarContent"
            aria-controls="navbarSidebarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="sidebar-sticky">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}">
        </div>
        <ul class="nav" id="menu">
                <li class="{!! (Request::is('users*') ? 'active' : '') !!}">
                    <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false"
                       aria-controls="ui-basic">
                        <i class="fas fa-users"></i>
                        <span class="menu-title">Օգտատերեր</span>
                    </a>
                    <div class="collapse {!! (Request::is('users*') ? 'show' : '') !!}"
                         id="user">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item {!! (Request::is('users') ? 'active' : '') !!}">
                                <a class="nav-link" href="{{ route('users.index') }}">
                                    Ցուցակ
                                </a>
                            </li>
                            <li class="nav-item {!! (Request::is('users/create') ? 'active' : '') !!}">
                                <a class="nav-link" href="{{ route('users.create')  }}">
                                    Գրանցել
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            <li class="{!! (Request::is('news*') ? 'active' : '') !!}">
                <a class="nav-link" data-toggle="collapse" href="#news" aria-expanded="false"
                   aria-controls="ui-basic">
                    <i class="fas fa-list"></i>
                    <span class="menu-title">Լուրեր և իրադարձություններ</span>
                </a>
                <div class="collapse {!! (Request::is('news*') ? 'show' : '') !!}"
                     id="news">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item {!! (Request::is('news') ? 'active' : '') !!}">
                            <a class="nav-link" href="{{ route('news.index') }}">
                                Ցանկ
                            </a>
                        </li>
                        <li class="nav-item {!! (Request::is('news/create') ? 'active' : '') !!}">
                            <a class="nav-link" href="{{ route('news.create')  }}">
                                Ավելացնել
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <div class="bottom-link-sidebar">
            <a href="{{ route('admin.logout') }}">
                <i class="fas fa-power-off"></i> Logout
            </a>
        </div>
    </div>
</nav>
