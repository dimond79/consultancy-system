@extends('dashboard.layouts.app')

@section('main-content')

<div id="page-content-wrapper">
        <div class="container-fluid">
            <form>
                <div class="row g-3">
                    <div class="col-md-12">
                        <input type="text" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Mobile Number" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Email Id" required>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" required>
                            <option selected disabled>Education level</option>
                            <option>High School</option>
                            <option>Bachelor's</option>
                            <option>Master's</option>
                            <option>PhD</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" required>
                            <option selected disabled>Courses</option>
                            <option>Engineering</option>
                            <option>Business</option>
                            <option>IT</option>
                            <option>Medicine</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" placeholder="Percentage" required>
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" placeholder="Age" required>
                    </div>

                    <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
</div>

@endsection
