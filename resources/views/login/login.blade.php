<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - @yield('title')</title>
    @include('login.head')
</head>
<style>
    body {
        background-image: url('https://wallpaperaccess.com/full/558715.jpg');
        background-attachment: fixed;
    }
</style>

<body>
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">@yield('content-title')</h1>
            @yield('content')
        </div>
        <!-- /.container-fluid -->
    </div>
    @include('login.script')



</body>

</html>