<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	{{-- Open sans Google fonts --}}
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

	{{-- Font Awesome CSS link --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	{{-- ootstrap and css stylsheet link --}}
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<title>Laracarte</title>
	<style>
		body
		{
			font-family: 'Open Sans', Helvetica, Arial, sans-serif;
		}

		footer
		{
			margin-top: 5em;
			margin-bottom: 2em;
		}

		h2
		{
			margin-top: 1em;
		}
	</style>
</head>
<body>
	@include('partials.nav')

	<div class="container">

		@yield('container')

	</div>
		
@include('partials.footer')

	
	<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>