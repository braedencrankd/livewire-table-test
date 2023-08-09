<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link rel="preconnect"
		href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
		rel="stylesheet" />

	<link rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">



</head>

<body class="antialiased">
	<div
		class="bg-dots-darker dark:bg-dots-lighter relative min-h-screen bg-gray-100 bg-center selection:bg-red-500 selection:text-white dark:bg-gray-900 sm:flex sm:items-center sm:justify-center">
		@if (Route::has('login'))
			<div class="z-10 p-6 text-right sm:fixed sm:right-0 sm:top-0">
				@auth
					<a href="{{ url('/home') }}"
						class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Home</a>
				@else
					<a href="{{ route('login') }}"
						class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Log
						in</a>

					@if (Route::has('register'))
						<a href="{{ route('register') }}"
							class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white">Register</a>
					@endif
				@endauth
			</div>
		@endif

		<main class="container">
			<h1>Livewire Table Issue Reproduction</h1>
			<livewire:table />
		</main>
	</div>
</body>

</html>
