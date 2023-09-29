<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://rsms.me/">
		<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
		<script src="https://unpkg.com/htmx.org@1.9.5"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/htmx.org@1.9.6"></script>
        @vite('resources/js/app.js')
    </head>
    <body class="antialiased">
        <div class="flex" id="portfolio-nav">
            <a href="/"><svg  viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M67.984 99.832H110.48V113.528H47.248V20.216H67.984V99.832Z" fill="white"/>
                <path d="M111.672 56.216L131.64 56.216V122.776C131.64 132.675 129.123 140.013 124.088 144.792C119.053 149.656 111.843 152.088 102.456 152.088C94.6907 152.088 88.7173 150.979 84.536 148.76C80.3547 146.541 77.2827 143.64 75.32 140.056C73.3573 136.472 72.2053 132.461 71.864 128.024C71.5227 123.501 71.352 119.021 71.352 114.584H89.528C89.528 118.253 89.6133 121.453 89.784 124.184C90.04 126.915 90.552 129.219 91.32 131.096C92.088 132.888 93.1973 134.253 94.648 135.192C96.184 136.045 98.232 136.472 100.792 136.472C103.352 136.472 105.357 136.088 106.808 135.32C108.259 134.552 109.325 133.571 110.008 132.376C110.776 131.096 111.245 129.645 111.416 128.024C111.587 126.317 111.672 124.568 111.672 122.776V56.216Z" fill="white"/>
                <circle cx="88" cy="88" r="84" stroke="white" stroke-width="8"/>
                </svg>
            </a>
            <h1>@yield('title')</h1>
            </div>
        @yield('content')

        @yield('script')
    </body>
</html>
