<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-assets/assets/css/bootstrap5/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend-assets/assets/css/style.css">
</head>
<body>
	@include('frontend.includes.header')
	<main>
		@yield('body')
	</main>
	@include('frontend.includes.footer')

<script type="text/javascript" src="{{asset('/')}}frontend-assets/assets/js/bootstrap-js/bootstrap.bundle.js"></script>
</body>
</html>	