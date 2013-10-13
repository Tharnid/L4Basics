<!DOCTYPE html>
<html lang ="en">

<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	{{ HTML::style('css/style.css') }}
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}

</head>

<body>
	@include('layouts.nav')
	@yield('content')
</body>

</html>