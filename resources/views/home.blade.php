<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Path Finder</title>
    @vite('resources/css/app.css')
</head>
<body class="grid-bg bg-gray-950 text-white bg-fixed bg-cover bg-center bg-no-repeat min-h-screen overflow-hidden"">
    
    <div class="navbar relative z-10 bg-black/50 backdrop-blur-md p-10 shadow-2xl text-center max-w-2xl border border-white/10 flex flex-wrap">    
        <ul class="backdrop-blur-sm">
            <a href="{{ route('find.jobs') }}">Find Jobs</a>
            <a href="{{ route('problem.page') }}">Report A Problem</a>
            <a href="{{ route('add.profile') }}">Add Profile</a>
        </ul>
    </div>

    <div class="min-h-screen flex items-center justify-center relative">
    
        <!-- Floating Images -->
        <img src="{{ asset('img/astronaut.png') }}" class="absolute top-10 left-10 w-24 rotate-[-12deg] z-0 hover:blur-0 transition duration-300 ease-in-out" />
        <img src="{{ asset('img/rocket.png') }}" class="absolute bottom-20 right-20 w-32 rotate-6 z-0 hover:blur-0 transition duration-300 ease-in-out" />
        <img src="{{ asset('img/circle.png') }}" class="absolute top-1/2 left-1/4 w-20 -translate-y-1/2 rotate-12 z-0 hover:blur-0 transition duration-300 ease-in-out" />

        <img src="{{ asset('img/planet.png') }}" class="absolute top-0 right-1/3 w-16 rotate-3 z-0 hover:blur-0 transition duration-300 ease-in-out" />
        <img src="{{ asset('img/planet2.png') }}" class="absolute bottom-10 left-1/3 w-12 -rotate-6 z-0 hover:blur-0 transition duration-300 ease-in-out" />
        <img src="{{ asset('img/planet3.png') }}" class="absolute top-1/4 right-5 w-20 rotate-45 z-0 hover:blur-0 transition duration-300 ease-in-out" />

        <!-- Center Box -->
        <div class="relative z-10 bg-black/50 backdrop-blur-md p-10 rounded-2xl shadow-2xl text-center max-w-2xl border border-white/10">
            <h1 class="text-5xl font-bold mb-4">Hello, My Name Is Neil</h1>
            <p class="text-2xl">And Welcome to <span class="text-purple-400 font-semibold">Path Finder</span></p>
        </div>
    </div>

</body>
</html>
