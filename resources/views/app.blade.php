<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Twitter Clone</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<script src="{{ asset('js/angular.js') }}"></script>
</head>
<body>

	<b>{{ Auth::user()->name }}</b>
	@yield('content')

</body>
</html>
