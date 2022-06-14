<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}website/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/all.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/ecom.css">
    <link rel="stylesheet" href="{{ asset('/') }}website/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand"><img height="40px" width="50px" src="{{ asset('/website/img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" data-bs-target="#main_menu" data-bs-toggle="collapse"><span class="navbar-toggler-icon"></span></button>
            <div id="main_menu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li><a href="" class="nav-link">Home</a></li>
                    <li><a href="" class="nav-link">About Us</a></li>
                    <li><a href="" class="nav-link">All Course</a></li>
                    <li><a href="" class="nav-link">Contact</a></li>
                    <li><a href="" class="nav-link">Login / Registration</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-secondary">
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                       <div class="card card-body h-100 bg-transparent border-0">
                           <h4 class="text-light">Why Choice Us</h4>
                           <hr/>
                           <p class="text-light justify-content-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur debitis doloremque iure molestiae quas quasi soluta tempore temporibus? Ad corporis deleniti fuga, impedit magnam molestias natus nisi nobis quae.</p>
                       </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body h-100 bg-transparent border-0">
                            <h4 class="text-light">Popular Course</h4>
                            <hr/>
                            <ul class="list-group bg-transparent border-0">
                                <li class="list-group-item bg-transparent border-0"><a href="" class="text-decoration-none text-light">Web Development</a></li>
                                <li class="list-group-item bg-transparent border-0"><a href="" class="text-decoration-none text-light">Android Development</a></li>
                                <li class="list-group-item bg-transparent border-0"><a href="" class="text-decoration-none text-light">Digital Marketing</a></li>
                                <li class="list-group-item bg-transparent border-0"><a href="" class="text-decoration-none text-light">Desktop Application</a></li>
                                <li class="list-group-item bg-transparent border-0"><a href="" class="text-decoration-none text-light">Social Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-body h-100 bg-transparent border-0">
                            <h4 class="text-light">Contact With Us</h4>
                            <hr/>
                            <p class="text-light">
                                House #420, Road No #120 West Dhanmondi,Dhaka-1209,Bangladesh. <br/>
                                Email: info@exmple.com <br/>
                                Phone: 01712345678
                            </p>
                            <hr/>
                            <ul class="nav border-0">
                                <li><a href="" class="nav-link text-light"><i class="fa-2x fa-brands fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link text-light"><i class="fa-2x fa-brands fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link text-light"><i class="fa-2x fa-brands fa-linkedin"></i></a></li>
                                <li><a href="" class="nav-link text-light"><i class="fa-2x fa-brands fa-instagram-square"></i></a></li>
                                <li><a href="" class="nav-link text-light"><i class="fa-2x fa-brands fa-google-plus-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-dark py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center text-light mb-0">Copy Right &copy; 2022 Design & Development By - Web Development Batch Five.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
<script src="{{ asset('/') }}website/js/jquery-3.6.0.js"></script>
<script src="{{ asset('/') }}website/js/bootstrap.js"></script>
</body>
</html>
