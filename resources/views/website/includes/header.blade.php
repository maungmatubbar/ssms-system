<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand"><img height="40px" width="50px" src="{{ asset('/website/img/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" data-bs-target="#main_menu" data-bs-toggle="collapse"><span class="navbar-toggler-icon"></span></button>
        <div id="main_menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                <li><a href="{{ route('course') }}" class="nav-link">All Course</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                @if(Session::get('student_id'))
                    <li class="dropdown"><a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Session::get('student_name') }}</a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="dropdown-item">Dashboard</a></li>
                            <li><a href="{{ route('student.logout') }}" class="dropdown-item">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('login-registration') }}" class="nav-link">Login / Registration</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
