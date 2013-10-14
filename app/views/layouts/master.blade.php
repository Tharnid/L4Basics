<!DOCTYPE html>
<html lang ="en">

<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/style.css') }}


</head>

<body>
	@include('layouts.nav')
	@yield('content')
</body>

</html>