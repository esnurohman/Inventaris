<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Inventarisku</title>
</head>
<body>
    <div>
        <div class="container flex items-center justify-center h-screen mx-auto">
            {{ $slot }}
        </div>
    </div>
</body>
</html>