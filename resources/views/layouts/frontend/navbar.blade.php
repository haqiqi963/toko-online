<nav class="navbar navbar-dark navbar-expand-lg sticky-top" style="background-color: #164863">
    <div class="container">
        <img src="{{ asset('frontend/logo.jpg') }}" class="rounded" width="120px" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
            @guest
                <ul class="navbar-nav gap-3 d-flex justify-content-center fs-5 item-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page"
                           href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('shop') ? 'active fw-bold' : '' }}" href="/shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active fw-bold' : '' }}" href="/contact">Contact</a>
                    </li>
                </ul>
                <div class="d-flex gap-4 align-items-center">
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal" type="button">
                        Login or Register
                    </button>
                    <div class="notification">
                        <a href="/transaction" class="fs-5"><i class="bi icon-nav bi-bag-fill bi-3x"></i></a>
                        <div class="circle">10</div>
                    </div>
                </div>
            @endguest
                @auth
                    @if(Auth::user()->role_id == 3)
                        <ul class="navbar-nav gap-3 d-flex justify-content-center fs-5 item-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page"
                                   href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('shop') ? 'active fw-bold' : '' }}" href="/shop">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('contact') ? 'active fw-bold' : '' }}" href="/contact">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logoutCust') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logoutCust') }}" method="get" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <div class="d-flex gap-4 align-items-center">
                            <div class="notification">
                                <a href="/transaction" class="fs-5"><i class="bi icon-nav bi-bag-fill bi-3x"></i></a>
                                <div class="circle">10</div>
                            </div>
                        </div>
                    @else
                        <ul class="navbar-nav gap-3 d-flex justify-content-center fs-5 item-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('home') ? 'active fw-bold' : '' }}" aria-current="page" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('shop') ? 'active fw-bold' : '' }}" href="/shop">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('contact') ? 'active fw-bold' : '' }}" href="/contact">Contact</a>
                            </li>
                        </ul>
                        <div class="d-flex gap-4 align-items-center">
                            <div class="notification">
                                <a href="/transaction" class="nav-link {{ Request::is('transaction') ? 'active fw-bold' : '' }}"><i class="bi icon-nav bi-bag-fill bi-3x"></i></a>
                                <div class="circle">10</div>
                            </div>
                        </div>

                    @endif
                @endauth
        </div>
    </div>
</nav>
