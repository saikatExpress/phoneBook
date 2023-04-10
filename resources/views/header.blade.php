<div class="container">
    <div class="row custom_header">
        <div class="col-sm-2">
            <img class="logo_image" src="{{ asset('logos/phone1.png') }}" alt="no images">
        </div>
        <div class="col-sm-6">
            <ul class="myList">
                <li><a href="/home">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="">History</a></li>
            </ul>
        </div>
        <div class="col-sm-4">
            <ul class="myList">
                @guest
                    <li><a href="#">Register</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li>{{ Auth::user()->name }}</li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                @endguest
            </ul>
        </div>
    </div>
</div>
