<!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
    @vite('resources/css/app.css')

    @stack('css')

    @stack('js')
</head>

<body class="bg-gray-300">

    
    <x-nav.nav-bar />
    <x-nav.aside />
    

    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-14">
            @yield('dashboard-content')
        </div>
    </div>

</body>

</html>