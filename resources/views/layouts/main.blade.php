<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <title>@yield('title')</title> <!-- Define o título da página -->
</head>
<body>
    <header>
        <div class="positionHeader">
            <img src="/img/nm_logo.png" class="logo_NovoMundo">

            <form class="barraPosition">
                <input class="barraPesquisa" type="search" placeholder="Pesquise aqui...">
                <span class="material-symbols-outlined">
                    search
                </span>
            </form>
        </div> 

    </header>
    <hr class="buttonBarra">
        <div class="buttonContainer">

            <a href="/">
                <button class="header-button1">HOME</button>
            </a>
            <a href="/games">
                <button class="header-button1">JOGOS</button>
            </a> 
        </div>
    <section class="content">
    @yield('content') <!-- Aqui é onde o conteúdo específico da página será inserido -->
    </section>
    <footer>
        <p>Novo Mundo &copy; 2024</p>
    </footer>
</body>
</html>