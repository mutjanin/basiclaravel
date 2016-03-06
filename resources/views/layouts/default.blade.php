<!doctype html>
<html>
    <head>
@include('includes.head')
    </head>
    <body>
@include('includes.menu')
    	@yield('content') 
@include('includes.footer_content')
@include('includes.footer')
    </body>
</html>