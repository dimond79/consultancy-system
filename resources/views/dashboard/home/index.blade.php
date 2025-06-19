@extends('dashboard.layouts.app')

@section('main-content')

    <div id="page-content-wrapper">
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

                <span class="navbar-brand"><i class="bi bi-columns-gap me-2"></i>Admin Dashboard</span>
            </div>
        </nav>

        <div class="container-fluid mt-4">
            <div class="card">
                <div class="card-header">
                    Welcome, Admin
                </div>
                <div class="card-body">
                    <h5 class="card-title">Dashboard Overview</h5>
                    <p class="card-text">Manage clients, appointments, and more.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
