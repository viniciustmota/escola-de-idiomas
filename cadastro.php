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

</head>

<body>
    <header class="cabecalho">
        <nav>
            <div class="cabecalho__bloco-logo">
                <img src="./assets/img/hamburguer.svg" alt="icone de hamburguer">
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

    <section class="questionario">
        <h2 class="questionario__titulo">Questionario</h2>
        <div class="questionario__grid">
            <form action="dados.php" method="get" class="questionario__form">
                <label for="nome" class="questionario__label">Qual o seu nome?</label>
                <input type="text" id="nome" name="nome" placeholder="digite seu nome" class="questionario__resposta" required>

                <label for="idade" class="questionario__label">Qual a sua idade?</label>
                <input type="number" id="idade" name="idade" placeholder="digite sua idade" class="questionario__resposta" required>

                <label for="sexo" class="questionario__label">Qual o seu sexo?</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="sexo" id="sexo-m" class="questionario__resposta" value="Masculino" required> <label for="sexo-m">Masculino</label>
                    <input type="radio" name="sexo" id="sexo-f" class="questionario__resposta" value="Feminino" required> <label for="sexo-f">Feminino</label>
                </div>
                <label for="esporte" class="questionario__label">Qual seu esporte favorito?</label>
                <select name="esporte" id="" class="questionario__resposta">
                    <option value="Atletismo">Atletismo</option>
                </select>

                <label for="tempo" class="questionario__label">Há quanto tempo você pratica?</label>
                <input type="number" id="tempo" name="tempo" placeholder="digite quantos anos você pratica" class="questionario__resposta" required>

                <label for="campeonatos" class="questionario__label">Quantas vezes participou de campeonatos?</label>
                <input type="number" id="campeonatos" name="campeonatos" placeholder="Digite quantas vezes você participou" class="questionario__resposta" required>

                <label for="alimentação" class="questionario__label">Você se alimenta bem?</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="alimentacao" id="alimentacao-sim" class="questionario__resposta" value="Sim" required> <label for="alimentacao-sim">Sim</label>
                    <input type="radio" name="alimentacao" id="alimentacao-nao" class="questionario__resposta" value="Não" required><label for="alimentacao-nao">Não</label>
                </div>

                <label for="sono" class="questionario__label">Você dorme quantas horas por dia?</label>
                <input type="number" id="sono" name="sono" placeholder="Digite quantas horas você dorme por dia" class="questionario__resposta" required>

                <input type="submit" value="Enviar" class="questionario__btn"></input>
            </form>

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