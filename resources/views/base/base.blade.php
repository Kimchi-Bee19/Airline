<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Airplane Booking</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen w-screen overflow-x-hidden flex-col>
    <header class="sticky top-0 z-10 w-full">
        @include('includes.header')
    </header>
    <main class="w-full">
        <h1 class="text-center font-bold mt-10 mb-5 text-4xl">Airplane Book System</h1>

        @yield('content')
    </main>
    <footer class="mt-auto w-full">
        @include('includes.footer')
    </footer>
</body>
</html>