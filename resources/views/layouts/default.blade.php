<!doctype html>
<html lang="en">
  <head>
    @include('includes.header')
  </head>
  <body>
    <nav>@include('includes.nav')</nav>
    
    <section>@yield ('content')</section>
    <footer>@include ('includes.footer')</footer>
    <footer>@include ('includes.scripts')</footer>


    

    
  </body>
</html>