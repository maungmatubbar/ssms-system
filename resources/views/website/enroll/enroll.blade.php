@extends('website.master')
@section('title')
    Course Enroll
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <h3 class="text-muted">Course Enroll Form</h3>
                        <hr/>
                        <form action="{{ route('enroll.confirm',['id'=>$id]) }}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" class="form-control" placeholder="Enter Mobile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Payment</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="payment_type" value="1"> Pay Later</label>
                                    <label><input type="radio" name="payment_type" value="2"> Pay Now</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-9 offset-3">
                                    <input type="submit" name="btn" class="btn btn-outline-primary px-5" value="Confirm Enroll">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
