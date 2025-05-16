@extends('dashboard.layouts.app')

@section('main-content')

<div id="page-content-wrapper">
        <div class="container-fluid">
            @if(session('success'))
             <div class="alert alert-success">
                {{session('success')}}
             </div>
            @endif
            @if(session('error'))
             <div class="alert alert-danger">
                {{session('error')}}

             </div>
             @endif
            <form action="{{route('client.create')}}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name"  id="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="mobile">Mobile No:</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" required>
                    </div>
                    <div class="col-md-6">
                        <lable for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email Id" required>
                    </div>
                    <div class="col-md-6">
                        <label for="education">Highest Education:</label>
                        <select name="education" id= "education" class="form-select" >
                            <option selected disabled>Education level</option>
                            <option>High School</option>
                            <option>Bachelor</option>
                            <option>Master</option>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="courseName">Course:</label>
                        <select name="course_id" id="courseName" class="form-select" required>
                            <option selected disabled>Courses</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="percentage">Percentage:</label>
                        <input type="number" name="percentage" id="percentage" class="form-control" placeholder="Percentage">
                    </div>
                    <div class="col-md-6">
                        <label for="age">Age:</label>
                        <input type="number" name="age" id="age" class="form-control" placeholder="Age">
                    </div>
                    <div class="col-md-12">
                        <label for="message">Your Message:</label>
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
