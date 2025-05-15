<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consultancy Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="admin.css" rel="stylesheet">

   <style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    #wrapper {
        display: flex;
        height: 100vh;
        width: 100%;
    }

    #sidebar-wrapper {
        width: 250px;
        background-color: #343a40;
        color: white;
        min-height: 100vh;
    }

    #page-content-wrapper {
        flex: 1;
        padding: 20px;
        background-color: #f8f9fa;
        overflow-y: auto;
    }
</style>


</head>

<body>
    <div class="d-flex" id="wrapper">
        {{-- Sidebar --}}
        @include('dashboard.includes.sidebar')

        {{-- Main Content --}}

        @yield('main-content')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
