<div class="container">
    <a class="navbar-brand" href="{{ route('user.index.get') }}"><span class="text-primary"><img src="{{ asset('img/logo.png') }}" alt="" height="40px" width="40px"> BD</span>-Doctors</a>

    <form action="#">
        <div class="input-group input-navbar">
            <div class="input-group-prepend">
                <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                aria-describedby="icon-addon1">
        </div>
    </form>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
        aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupport">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Home') active @endif"
                    href="{{ route('user.index.get') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'About-Us') active @endif"
                    href="{{ route('user.aboutus.get') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Doctors') active @endif"
                    href="{{ route('user.doctors.get') }}">Doctors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'News' || $title == 'News Details') active @endif"
                    href="{{ route('user.news.get') }}">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Contact') active @endif"
                    href="{{ route('user.contact.get') }}">Contact</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    @if (Route::has('login'))
                        @auth
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                    </div>
                @else
                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login / Register</a>
                @endauth
                @endif
            </li>
        </ul>
    </div> <!-- .navbar-collapse -->
</div> <!-- .container -->
