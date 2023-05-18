<div class="container">
    <nav>
        <div class="custom_header">
            <h2><a href="#"> <span>Phone</span>Book</a></h2>

            <ul class="myList">
                <li><a href="/home">Home</a></li>
                <li><a href="{{ route('about.us') }}">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">History</a></li>
                @guest
                    <li><a class="btn btn-primary btn-sm btn-warning" href="#">Register</a></li>
                    <li><a class="btn btn-primary btn-sm btn-primary" href="{{ route('login') }}">Login</a></li>
                @else
                    <li><a class="btn btn-primary btn-sm btn-secondary"
                            href="{{ route('profile') }}">{{ Auth::user()->name }}</a></li>
                    <li><a class="btn btn-primary btn-sm" href="{{ route('logout') }}">Logout</a></li>
                @endguest
            </ul>
            <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
            <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>
        </div>
    </nav>
</div>
