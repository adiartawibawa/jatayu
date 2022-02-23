<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a>
            </li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-turbolinks="false" data-toggle="dropdown"
                class="d-flex align-items-center nav-link dropdown-toggle nav-link-lg nav-link-user">
                @if (App\Jatayu::managesProfilePhotos())
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                        class="rounded-circle mr-1">
                @else
                    <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
                @endif
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('home') }}" class="dropdown-item has-icon">
                    <i class="fas fa-home"></i> Home
                </a>

                {{-- <a href="{{ route('profile.show') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <a href="{{ route('api-tokens.show') }}" class="dropdown-item has-icon">
                        <i class="fas fa-qrcode"></i> {{ __('API Tokens') }}
                    </a>
                @endif
                @if (request()->get('is_admin'))
                    <a href="/setting" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i> Setting
                    </a>
                @endif --}}
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
                        onclick="event.preventDefault();this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
