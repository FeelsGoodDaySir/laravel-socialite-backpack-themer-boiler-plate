
<!doctype html>
<html lang="en">
<head>
	@include('front.base.inc.head')
</head>
<body>
	@yield('header')

	@yield('content')

	@include('front.base.inc.footer')

	@yield('before_scripts')
	@stack('before_scripts')

	@yield('after_scripts')
	@stack('after_scripts')

</body>
</html>
