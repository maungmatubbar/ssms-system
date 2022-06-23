@extends('website.master')
@section('title')
    About Us
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                       <table class="table table-bordered">
                           <thead>
                                <tr>
                                    <th>Course Title</th>
                                    <td>{{ $result['title'] }}</td>
                                </tr>
                                <tr>
                                    <th>Instructor Name</th>
                                    <td>{{ $result['teacher_name'] }}</td>
                                </tr>
                                <tr>
                                    <th>Starting Date</th>
                                    <td>{{ $result['start_date'] }}</td>
                                </tr>
                                <tr>
                                    <th>Course Fee</th>
                                    <td>{{ $result['fee'] }}</td>
                                </tr>
                                <tr>
                                    <th>Registration Status</th>
                                    <td>{{ $result['enroll_status'] }}</td>
                                </tr>
                           </thead>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h1>How We Work...</h1>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus exercitationem nemo omnis veniam! Ab accusantium aperiam cum eius facilis iure maxime nisi numquam possimus, quaerat qui reiciendis repudiandae ullam vitae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus exercitationem nemo omnis veniam! Ab accusantium aperiam cum eius facilis iure maxime nisi numquam possimus, quaerat qui reiciendis repudiandae ullam vitae.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h1>Our Chairman Message...</h1>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus exercitationem nemo omnis veniam! Ab accusantium aperiam cum eius facilis iure maxime nisi numquam possimus, quaerat qui reiciendis repudiandae ullam vitae.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus exercitationem nemo omnis veniam! Ab accusantium aperiam cum eius facilis iure maxime nisi numquam possimus, quaerat qui reiciendis repudiandae ullam vitae.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
