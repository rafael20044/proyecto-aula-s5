<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $titulo }} </title>
    @Vite(['resources/css/layout.css'])
</head>
<body>
    <header>
        <a href=""> <img src="/img/favicon.ico" alt=""> Questopia </a>
        <div class="buscador">
            <input type="text" placeholder="Buscar pregunta">
            <img src="/img/lupa.png" alt="">
        </div>
        <div class="logings">
            <a>Log in</a>
            <a>Sing up</a>
        </div>
    </header>
    <nav>
        <a href=""> <img src="/img/casa.png" alt=""> Home</a>
        <a href=""> <img src="/img/mensaje.png" alt=""> Questions</a>
        <a href=""> <img src="/img/cuerpo.png" alt=""> Nosotros</a>
    </nav>
    <main>
        {{ $slot }}
    </main>
</body>
</html>