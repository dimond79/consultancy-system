@extends('dashboard.layouts.app')

@section('main-content')
    <div id="page-content-wrapper">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0 text-gray-800">Clients</h1>
            <div>
                <button class="btn btn-sm btn-outline-secondary me-2">
                    <i class="fas fa-file-export fa-sm"></i> Export
                </button>
                <a href="#"><button class="btn btn-sm btn-primary">
                        <i class="fas fa-plus fa-sm"></i> Add Client
                    </button></a>
                <a href="#"><button class="btn btn-sm btn-primary">
                        <i class="fas fa-plus fa-sm"></i> Add Course
                    </button></a>
            </div>
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

            {{-- {{$clients}} --}}
            <form action="{{ route('client.create') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="name">Full Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="mobile">Mobile No:</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number"
                            required>
                    </div>
                    <div class="col-md-6">
                        <lable for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Id"
                                required>
                    </div>
                    <div class="col-md-6">
                        <label for="education">Highest Education:</label>
                        <select name="education" id= "education" class="form-select">
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
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @endforeach
                            {{-- <option>2</option>
                        <option>3</option>
                        <option>4</option> --}}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="percentage">Percentage:</label>
                        <input type="number" name="percentage" id="percentage" class="form-control"
                            placeholder="Percentage">
                    </div>
                    <div class="col-md-6">
                        <label for="age">Age:</label>
                        <input type="number" name="age" id="age" class="form-control" placeholder="Age">
                    </div>
                    <div class="col-md-12">
                        <label for="message">Your Message:</label>
                        <textarea type="text" name="message" id="message" class="form-control" rows="5"
                            placeholder="Place your message!"></textarea>
                    </div>

                    <div class="col-md-12 mt-4">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile No.</th>
                        <th scope="col">Email</th>
                        <th scope="col">Education</th>
                        <th scope="col">Course</th>
                        <th scope="col">Percentage</th>
                        <th scope="col">Age</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="my-3">
                        <h4>Client Details:</h4>
                        @foreach ($clients as $client)
                            <tr>
                                <th scope="row">{{ $client->id }}</th>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->mobile }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->education }}</td>
                                <td>{{ $client->course->course_name }}</td>
                                <td>{{ $client->percentage }}</td>
                                <td>{{ $client->age }}</td>
                                <td>{{ $client->message }}</td>
                                <td>{{ $client->status }}</td>
                                <td class="table-actions">
                                    <a href="#"><button class="btn btn-sm btn-outline-primary me-1"><i class="fas fa-eye"></i></button></a>
                                    <a href="{{route('edit.client',$client->id)}}"><button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-edit"></i>{{$client->id}}</button></a>
                                    <form action="{{route('client.delete',$client->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </div>
                    {{-- <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>@social</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
