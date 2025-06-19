@extends('dashboard.layouts.app')

@section('main-content')

 <div id="page-content-wrapper">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Client</h1>

        </div>
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}

                </div>
            @endif

            {{-- {{$client}} --}}
            <form action="{{route('update.client', $client->id)}}" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="client_id" value="{{$client->id}}">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$client->name}}"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="mobile">Mobile No:</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" value="{{$client->mobile}}"
                            required>
                    </div>
                    <div class="col-md-6">
                        <lable for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{$client->email}}"
                                required>
                    </div>
                    <div class="col-md-6">
                        <label for="education">Highest Education:</label>
                        <select name="education" id= "education" class="form-select" >
                            <option disabled>Education level</option>
                            <option value="High School" {{$client->eductaion == "High School" ? 'selected' : '' }}>High School</option>
                            <option value = "Bachelor" {{$client->education == "Bachelor" ? 'selected' : ''}}>Bachelor</option>
                            <option value = "Master" {{$client->education == "Master" ? 'selected' : ''}}>Master</option>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="courseName">Course:</label>
                        <select name="course_id" id="courseName" class="form-select" required>
                            <option value="" selected disabled>Select Course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" {{$client->course_id == $course->id ? 'selected' : ''}}>{{ $course->course_name }}</option>
                            @endforeach
                            {{-- <option>2</option>
                        <option>3</option>
                        <option>4</option> --}}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="percentage">Percentage:</label>
                        <input type="number" name="percentage" id="percentage" class="form-control"
                            value="{{$client->percentage}}">
                    </div>
                    <div class="col-md-6">
                        <label for="age">Age:</label>
                        <input type="number" name="age" id="age" class="form-control" value="{{$client->age}}">
                    </div>
                    <div class="col-md-12">
                        <label for="message">Your Message:</label>
                        <textarea type="text" name="message" id="message" class="form-control" rows="5"
                             >{{$client->message}}</textarea>
                    </div>

                    <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
 </div>

@endsection
