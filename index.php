<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimota</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/estilos.css">

    <!-- JS -->
    <script src="./assets/js/script.js" defer></script>
</head>

<body>
    <header class="cabecalho">
        <nav>
            <div class="cabecalho__bloco-logo">
                <img src="./assets/img/hamburguer.svg" alt="icone de hamburguer" class="cabecalho__menu-hamburguer">
                <ul class="lista-menu">
                    <li class="lista-menu__titulo">Cursos</li>
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">Ingles</a>
                    </li>
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">Espanhol</a>
                    </li>
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">Italiano</a>
                    </li>
                    <li class="lista-menu__item">
                        <a href="#" class="lista-menu__link">Alemão</a>
                    </li>
                </ul>
                <img src="./assets/img/logo.svg" alt="Logo Polimota" class="cabecalho__logo">
                <p class="cabecalho__titulo">POLIMOTA</p>
            </div>
            <img src="./assets/img/user.svg" alt="" srcset="">
        </nav>

    </header>

    <section class="banner">
        <h1 class="banner__titulo">
            Procurando aprender uma lingua nova?
        </h1>
        <p class="banner__descricao">
            Aqui, você tem liberdade para aprender uma nova língua quando e onde quiser
        </p>
        <input type="button" class="banner__button" value="Quero aprender um novo idioma">
    </section>

    <!-- Swiper -->
    <section class="carrossel">
        <h2 class="carrossel__titulo">Idiomas para estudar</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./assets/img/EUA.svg" alt="Bandeira dos EUA"></div>
                <div class="swiper-slide"><img src="./assets/img/Espanha.svg" alt="Bandeira da Espanha"></div>
                <div class="swiper-slide"><img src="./assets/img/Italia.svg" alt="Bandeira da Italia"></div>
                <div class="swiper-slide"><img src="./assets/img/Alemanha.svg" alt="Bandeira da Alemanha"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="vantagens">
        <div class="vantagens__card">
            <img src="./assets/img/Icone repeticao.svg" alt="Icone de repetição" class="vantagens__img">
            <h2 class="vantagens__titulo">Técnica de Repetição Espaçada</h2>
            <p class="vantagens__descricao">Quando você tem dificuldade em algum exercício, ele aparece várias vezes ao longo do curso para que seja mais fácil aprender e memorizar.</p>
        </div>

        <div class="vantagens__card">
            <img src="./assets/img/Icone mic.svg" alt="Icone de microfone" class="vantagens__img">
            <h2 class="vantagens__titulo">O poder da fala</h2>
            <p class="vantagens__descricao">Durante as aulas, você é encorajado a repetir e criar frases inteiras no idioma que está estudando.</p>
        </div>

        <div class="vantagens__card">
            <img src="./assets/img/Icone tecnologia.svg" alt="Icone de repetição" class="vantagens__img">
            <h2 class="vantagens__titulo">Tecnologia inteligente</h2>
            <p class="vantagens__descricao">A plataforma tem uma tecnologia que consegue entender suas maiores dificuldades durante o curso, direcionando o seu treino para aquilo que você mais precisa.</p>
        </div>
    </section>






    <footer class="rodape">
        <p class="rodape__texto">Grupo Mota</p>
        <section class="rodape__topicos">
            <div class="rodape__servicos">
                <p class="rodape__titulo">Empresas</p>
                <a href="#" class="rodape__item"><img src="./assets/img/mota informatica.svg" alt="Logo Mota Informatica">Mota Informatica</a>
                <a href="#" class="rodape__item"><img src="./assets/img/vettel.svg" alt="Logo Vettel SafeDrive">Vettel
                    SafeDrive</a>
            </div>

            <div class="rodape__servicos">
                <p class="rodape__titulo">Projetos Sociais</p>
                <a href="#" class="rodape__item"><img src="./assets/img/Juntos pelo Mar.svg" alt="Logo Projeto Juntos pelo Mar">Juntos pelo Mar</a>
                <a href="#" class="rodape__item"><img src="./assets/img/Esporte todos os dias.svg" alt="Logo Projeto Esporte todos os dias"> Esporte todos os dias</a>
            </div>
        </section>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            slidesPerView: 2,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>