@extends('website.master')
@section('title')
    Home
@endsection
@section('content')
    <section class="">
       <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="heroSlider">
           <div class="carousel-inner">
               <div class="carousel-item active" >
                   <img src="{{ asset('/') }}website/img/slider/image1.png" alt="" class="w-100 h-450">
                   <div class="carousel-caption caption">
                       <h3>Web Development</h3>
                       <p>Lorem ipsum Dolor net</p>
                       <a href="" class="btn btn-outline-success">Enroll Now</a>
                   </div>
               </div>
               <div class="carousel-item" >
                   <img src="{{ asset('/') }}website/img/slider/image2.png" alt="" class="w-100 h-450">
                   <div class="carousel-caption caption">
                       <h3>Web Design</h3>
                       <p>Lorem ipsum Dolor net</p>
                       <a href="" class="btn btn-outline-success">Enroll Now</a>
                   </div>
               </div>
               <div class="carousel-item" >
                   <img src="{{ asset('/') }}website/img/slider/image3.png" alt="" class="w-100 h-450">
                   <div class="carousel-caption caption">
                       <h3>Android Development</h3>
                       <p>Lorem ipsum Dolor net</p>
                       <a href="" class="btn btn-outline-success">Enroll Now</a>
                   </div>
               </div>
           </div>
           <a href="#heroSlider" class="carousel-control-prev" data-bs-slide="prev"><i class="carousel-control-prev-icon"></i></a>
           <a href="#heroSlider" class="carousel-control-next" data-bs-slide="next"><i class="carousel-control-next-icon"></i></a>
       </div>
    </section>
    <section class="">
        <div class="container-fluid bg-secondary py-2">
            <h2 class="text-white text-center">All Latest Course</h2>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/blog1.jpg" class="card-img h-250" alt="">
                        <div class="card-body">
                            <h5>Web Develoment</h5>
                            <p>Course Fee: Tk. 25000</p>
                            <hr/>
                            <a href="" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/ng-ex.jpg" class="card-img h-250" alt="">
                        <div class="card-body">
                            <h5>Social Media Marketing</h5>
                            <p>Course Fee: Tk. 10000</p>
                            <hr/>
                            <a href="" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/2.jpg" class="card-img h-250" alt="">
                        <div class="card-body">
                            <h5>Web Design</h5>
                            <p>Course Fee: Tk. 15000</p>
                            <hr/>
                            <a href="" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/blog2.jpg" class="card-img h-250" alt="">
                        <div class="card-body">
                            <h5>Android Develoment</h5>
                            <p>Course Fee: Tk. 20000</p>
                            <hr/>
                            <a href="" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container-fluid bg-secondary py-2">
            <h2 class="text-white text-center">Our Instructor Info</h2>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/member1.png" class="card-img h-250" alt="">
                        <div class="card-body">
                            <h5>Mr. Hridoy Khan</h5>
                            <p>Web Development Specailist</p>
                            <hr/>
                            <ul class="nav border-0">
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-instagram-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/member2.png" class="card-img h-250" alt="">
                        <div class="card-body">
                            <h5>Mr. Hridoy Khan</h5>
                            <p>Web Development Specailist</p>
                            <hr/>
                            <ul class="nav border-0">
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-instagram-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/member3.png" class="card-img h-250" alt="">
                        <div class="card-body">
                            <h5>Mr. Hridoy Khan</h5>
                            <p>Web Development Specailist</p>
                            <hr/>
                            <ul class="nav border-0">
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-instagram-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('/') }}website/img/3.png" class="card-img h-250" alt="">
                        <div class="card-body">
                            <h5>Mr. Hridoy Khan</h5>
                            <p>Web Development Specailist</p>
                            <hr/>
                            <ul class="nav border-0">
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-facebook-square"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-twitter-square"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="" class="nav-link text-info"><i class="fa-brands fa-instagram-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mb-5 py-3">
        <div class="container-fluid bg-secondary py-2">
            <h2 class="text-white text-center">Our Instructor Info</h2>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" id="customerReview">
                        <ol class="carousel-indicators customer-indicators">
                            <li data-bs-target="#customerReview" data-bs-slide-to="0" class="active customer-review-control1"></li>
                            <li data-bs-target="#customerReview" data-bs-slide-to="1" class="customer-review-control2"></li>
                            <li data-bs-target="#customerReview" data-bs-slide-to="2" class="customer-review-control3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('/') }}website/img/member1.png" class="member-image" alt="">
                                <div class="carousel-caption customer-caption text-secondary">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                                    <h4 class="text-success">Mrs.Olivia</h4>
                                    <p>Melbour, Aus</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/') }}website/img/member2.png" class="member-image" alt="">
                                <div class="carousel-caption customer-caption text-secondary">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                                    <h4 class="text-success">Mrs.Olivia</h4>
                                    <p>Melbour, Aus</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/') }}website/img/member3.png" class="member-image" alt="">
                                <div class="carousel-caption customer-caption text-secondary">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                                    <h4 class="text-success">Mrs.Olivia</h4>
                                    <p>Melbour, Aus</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
