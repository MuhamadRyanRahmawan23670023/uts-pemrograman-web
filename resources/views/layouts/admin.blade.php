<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Studio Admin')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Studio Admin Template">
	<meta name="author" content="Studio">
	<link href="{{ asset('admin-assets/css/vendor.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin-assets/css/app.min.css') }}" rel="stylesheet">
	@stack('styles')
</head>
<body>
	<div id="app" class="app @yield('body_class')">
		@if(View::hasSection('auth'))
			{{-- Login page: no header or sidebar, but keep the theme panel --}}
			@yield('content')
			@include('layouts.partials.admin.footer')
		@else
			@include('layouts.partials.admin.header')
			@include('layouts.partials.admin.sidebar')

			<main id="content" class="app-content @yield('content_class')">
				@yield('content')
			</main>

			<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
			@include('layouts.partials.admin.footer')
		@endif
	</div>
	@include('layouts.partials.admin.scripts')
</body>
</html>
