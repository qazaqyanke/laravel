<!-- Navigation -->
<script src="https://kit.fontawesome.com/12e6365a82.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Nekidalovo.ru</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{route('shopping.cart')}}">Shopping <i class="fas fa-shopping-cart"></i><span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>
                </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login')  }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register')  }}">Register</a>
                    </li>

                @else


                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                            {{ Auth::user()->name }} <span class="caret"><i class="far fa-user"></i></span>


                        </a>



                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"

                               onclick="event.preventDefault();

                                                     document.getElementById('logout-form').submit();">

                                {{ __('Logout') }}

                            </a>



                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                @csrf

                            </form>

                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
