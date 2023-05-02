<div class="container">
    <div class="row custom_header">
        <div class="col-sm-2">
            <img class="logo_image" src="{{ asset('logos/phone1.png') }}" alt="no images">
        </div>
        <div class="col-sm-6">
            <div class="header_menu">
                <ul class="myList">
                    <li><a href="/home">Home</a></li>
                    <li><a href="{{ route('about.us') }}">About</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="">History</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <ul class="myList">
                @guest
                    <li><a class="btn btn-primary btn-sm btn-warning" href="#">Register</a></li>
                    <li><a class="btn btn-primary btn-sm btn-primary" href="{{ route('login') }}">Login</a></li>
                @else
                    <li><a class="btn btn-primary btn-sm btn-secondary"
                            href="{{ route('profile') }}">{{ Auth::user()->name }}</a></li>
                    <li><a class="btn btn-primary btn-sm" href="{{ route('logout') }}">Logout</a></li>
                @endguest
            </ul>
        </div>
    </div>
</div>
