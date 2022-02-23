<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <a href="{{ route('home') }}" class="navbar-brand sidebar-gone-hide">{{ config('app.name') }}</a>
    <div class="navbar-nav">
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    </div>

    <ul class="navbar-nav navbar-right ml-auto">
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
                <a href="#" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                @if (auth()->user()->hasRole(\App\Models\Role::ADMIN))
                    <a href="{{ route('admin.dashboard') }}" class="dropdown-item has-icon">
                        <i class="fas fa-bolt"></i> Administrator
                    </a>
                @endif

                <div class="dropdown-divider"></div>
                <form method="POST" style="margin-bottom: 0px" action="{{ route('logout') }}">
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
