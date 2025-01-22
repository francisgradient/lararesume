<!DOCTYPE html>
<html lang="en">
<head>

    @include('components.front.meta')

	@include('components.front.css')

	@include('components.front.favicon')

</head>


<body>

    @yield('content')

    @include('components.front.js')

</body>
</html>
