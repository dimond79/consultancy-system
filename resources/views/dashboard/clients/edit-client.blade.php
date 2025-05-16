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

            {{$clients}}
            <form >
                @csrf
                {{-- @method('PUT') --}}
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$clients->name}}"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="mobile">Mobile No:</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" value="{{$clients->mobile}}"
                            required>
                    </div>
                    <div class="col-md-6">
                        <lable for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{$clients->email}}"
                                required>
                    </div>
                    <div class="col-md-6">
                        <label for="education">Highest Education:</label>
                        <select name="education" id= "education" class="form-select" >
                            <option value="{{$clients->education}}" selected disabled>Education level</option>
                            <option>High School</option>
                            <option>Bachelor</option>
                            <option>Master</option>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="courseName">Course:</label>
                        <select name="course_id" id="courseName" class="form-select" required>
                            <option selected disabled>Courses</option>
                            {{-- @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @endforeach --}}
                            {{-- <option>2</option>
                        <option>3</option>
                        <option>4</option> --}}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="percentage">Percentage:</label>
                        <input type="number" name="percentage" id="percentage" class="form-control"
                            value="{{$clients->percentage}}">
                    </div>
                    <div class="col-md-6">
                        <label for="age">Age:</label>
                        <input type="number" name="age" id="age" class="form-control" value="{{$clients->age}}">
                    </div>
                    <div class="col-md-12">
                        <label for="message">Your Message:</label>
                        <textarea type="text" name="message" id="message" class="form-control" rows="5"
                             >{{$clients->message}}</textarea>
                    </div>

                    <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
 </div>

@endsection
