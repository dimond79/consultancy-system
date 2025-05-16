<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultancy Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/styles.css')}}" rel="stylesheet">



</head>

<body>
    {{-- Topbar --}}
    @include('dashboard.includes.topbar')
    <div class="d-flex" id="wrapper">

        {{-- Sidebar --}}
        @include('dashboard.includes.sidebar')



        {{-- Main Content --}}

        @yield('main-content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
