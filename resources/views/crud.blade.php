<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud-Movies</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/a4fef512d9.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <nav >
        <h1 class = "text-3xl py-5">Crud-Movies</h1>
    </nav>
    @livewire('peliculas')
    @livewire('livewire-ui-modal')
    @livewireScripts
</body>
</html>
