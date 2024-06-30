<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body class="layout-boxed">
    
    @include('includes.loader')
    
    @include('includes.header')
    @include('includes.slider') 
      @yield('content')
    @include('includes.footer')

    @include('includes.script')

</body>

</html>