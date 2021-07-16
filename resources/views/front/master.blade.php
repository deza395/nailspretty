<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pretty Nails & Co</title>
   <!-- Bootstrap Core CSS -->
   <link href="front/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!-- Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="front/css/animate.css" rel="stylesheet" />
<!-- Squad theme CSS -->
<link href="front/css/style.css" rel="stylesheet">
<link href="front/color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>
    {{View::make('front/components/header')}}
  
    
    @yield('content')
    {{View::make('front/components/footer')}}


    <script src="front/js/jquery.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery.easing.min.js"></script>	
	<script src="front/js/jquery.scrollTo.js"></script>
	<script src="front/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="front/js/custom.js"></script>

</body>

</html>


