<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <x-side-bar></x-side-bar>

    <div class="ml-28">
        {{ $slot }}
    </div>
</body>

</html>
