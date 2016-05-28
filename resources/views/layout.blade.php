<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	@include('includes.header')

	<div class="container">
		@yield('content')
	</div>

	<!-- <footer class="footer">
		@include('includes.footer')
	</footer> -->

	@include('includes.scripts')
</body>
</html>