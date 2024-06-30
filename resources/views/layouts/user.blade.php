<!doctype html>
<html>

<head>
    @include('includes-user.head')
</head>

<body class="layout-boxed">
    
    @include('includes-user.loader')
    
    @include('includes-user.header')
    @include('includes-user.slider') 
      @yield('content')
    @include('includes-user.footer')

    @include('includes-user.script')

</body>

</html>