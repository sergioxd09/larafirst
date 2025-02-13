<!DOCTYPE html> <!-- para poder heredarlos a la plantilla q deseamos!-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOY EL MAESTRO
    </title>
</head>
<body>
    <header>
        Header z
    </header>

    @yield('contect') 

    <section>
        @yield('morecontect')
    </section>
</body>
</html>