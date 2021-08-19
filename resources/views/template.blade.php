<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/template/css/bootstrap.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/mycss/css.css">

    <title>{{ $title }}</title>
  </head>
  <body>

   	@include('navbar')
    <div class="containers mt-2 ml-5">
      @yield('conten')
    </div>
	  

  </body>
</html>