@extends('dashboard.layouts.app')

@section('main-content')

<div id="page-content-wrapper">
        <div class="container-fluid">
            <form action="{{route('client.create')}}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-12">
                        <input type="text" name="name"  id="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Id" required>
                    </div>
                    <div class="col-md-6">
                        <select name="education" id= "education" class="form-select" >
                            <option selected disabled>Education level</option>
                            <option>High School</option>
                            <option>Bachelor</option>
                            <option>Master</option>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select">
                            <option selected disabled>Courses</option>
                            <option>Engineering</option>
                            <option>Business</option>
                            <option>IT</option>
                            <option>Medicine</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="percentage" id="percentage" class="form-control" placeholder="Percentage">
                    </div>
                    <div class="col-md-6">
                        <input type="number" name="age" id="age" class="form-control" placeholder="Age">
                    </div>
                    <div class="col-md-12">
                        <textarea type="text" name="message" id="message" class="form-control" rows="5" placeholder="Place your message!" ></textarea>
                    </div>

                    <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
</div>

@endsection
