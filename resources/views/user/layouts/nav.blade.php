<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">D</a><span class="navbar-brand2">onation</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                        <a class="nav-link" href="{{'/'}}">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('services')}}">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('create.buyticket')}}">Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Media')}}">Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vol-login') }}">Join As Volunteer</a>
                    </li>
                @else
                <li class="nav-item">
                        <a class="nav-link" href="{{'/'}}">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('create.buyticket')}}">Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Media')}}">Media</a>
                    </li>
                    <li class="nav-item">

                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        <!-- <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#"  data-bs-toggle="dropdown" aria-expanded="false">
                          {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu">
                            <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                            </ul>
                        </div> -->
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Join As Volunteer</a>
                    </li>
                    
                @endguest
            </ul>
  
        </div>
    </div>
</nav>
  