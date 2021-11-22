<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{url('/')}}">BLOG_2.O</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('about')}}">About</a></li>
{{--                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('post')}}">Sample Post</a></li>--}}
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('contact')}}">Contact</a></li>

                @if(\Illuminate\Support\Facades\Auth::check())

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('/dashboard')}}">Dashboard</a></li>

                    <li class="nav-item">
                        <form id="logout-form" method="post" action="{{route('logout')}}">@csrf</form>
                        <a class="nav-link px-lg-3 py-3 py-lg-4" href="#" onclick="document.getElementById('logout-form').submit();" >Logout</a>
                    </li>
                @else

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('login')}}">Login</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{url('register')}}">Register</a></li>

                @endif
            </ul>
        </div>
    </div>
</nav>
