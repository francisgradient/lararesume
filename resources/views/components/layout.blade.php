<!DOCTYPE html>
<html lang="en">
<head>

    @include('components.meta')

	@include("components.css")

	<!--
		Favicons
	-->
	<link rel="shortcut icon" href="assets/images/favicons/favicon.ico">

</head>


<body>

    @yield('content')

    @include('components.js')

</body>
</html>
