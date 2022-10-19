<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login - @yield('title')</title>
    @include('login.head')
</head>
<style>
    #gradient3 {
        background: linear-gradient(to bottom left,#00ccff 0%, #0000ff 100%);
    }
    </style>
<body id="gradient3">
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