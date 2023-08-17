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

    <section class="questionario">
        <h2 class="questionario__titulo">Questionario</h2>
        <div class="questionario__grid">
            <form action="dados.php" method="get" class="questionario__form">
                <label for="nome" class="questionario__label">Qual o seu nome?</label>
                <input type="text" id="nome" name="nome" placeholder="digite seu nome" class="questionario__resposta"
                    required>

                <label for="idade" class="questionario__label">Qual a sua idade?</label>
                <input type="number" id="idade" name="idade" placeholder="digite sua idade"
                    class="questionario__resposta" required>

                <label for="sexo" class="questionario__label">Qual o seu sexo?</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="sexo" id="sexo-m" class="questionario__resposta" value="Masculino"
                        required> <label for="sexo-m">Masculino</label>
                    <input type="radio" name="sexo" id="sexo-f" class="questionario__resposta" value="Feminino"
                        required> <label for="sexo-f">Feminino</label>
                </div>
                <label for="esporte" class="questionario__label">Qual seu esporte favorito?</label>
                <select name="esporte" id="" class="questionario__resposta">
                    <option value="Atletismo">Atletismo</option>
                    <option value="Automobilismo">Automobilismo</option>
                    <option value="Badminton">Badminton</option>
                    <option value="Basquete">Basquete</option>
                    <option value="Basquete 3×3">Basquete 3×3</option>
                    <option value="Beachtennis">Beachtennis</option>
                    <option value="Beisebol">Beisebol</option>
                    <option value="Biribol">Biribol</option>
                    <option value="BMX">BMX</option>
                    <option value="Bobsled">Bobsled</option>
                    <option value="Bocha">Bocha</option>
                    <option value="Bodyboard">Bodyboard</option>
                    <option value="Boliche">Boliche</option>
                    <option value="Boxe">Boxe</option>
                    <option value="Canoagem">Canoagem</option>
                    <option value="Capoeira">Capoeira</option>
                    <option value="Cheerleading">Cheerleading</option>
                    <option value="Ciclismo de Estrada">Ciclismo de Estrada</option>
                    <option value="Ciclismo de Pista">Ciclismo de Pista</option>
                    <option value="Corrida de Rua">Corrida de Rua</option>
                    <option value="Cross Country">Cross Country</option>
                    <option value="Crossfit">Crossfit</option>
                    <option value="Curling">Curling</option>
                    <option value="Dama">Dama</option>
                    <option value="Dança Esportiva">Dança Esportiva</option>
                    <option value="Escalada Esportiva">Escalada Esportiva</option>
                    <option value="Esgrima">Esgrima</option>
                    <option value="E-Sports">E-Sports</option>
                    <option value="Fisiculturismo">Fisiculturismo</option>
                    <option value="Futebol">Futebol</option>
                    <option value="Futebol Americano">Futebol Americano</option>
                    <option value="Futebol de Areia">Futebol de Areia</option>
                    <option value="Futevôlei">Futevôlei</option>
                    <option value="Futsal">Futsal</option>
                    <option value="Ginástica Artística">Ginástica Artística</option>
                    <option value="Ginástica Ritmica">Ginástica Ritmica</option>
                    <option value="Goalball">Goalball</option>
                    <option value="Golfe">Golfe</option>
                    <option value="Handebol">Handebol</option>
                    <option value="Highline">Highline</option>
                    <option value="Hipismo">Hipismo</option>
                    <option value="Hóquei">Hóquei</option>
                    <option value="Hóquei de Grama">Hóquei de Grama</option>
                    <option value="Jiu-Jitsu">Jiu-Jitsu</option>
                    <option value="Jogo de Malha">Jogo de Malha</option>
                    <option value="Judô">Judô</option>
                    <option value="Karatê">Karatê</option>
                    <option value="Kickboxing">Kickboxing</option>
                    <option value="Kitesurfe">Kitesurfe</option>
                    <option value="Kung Fu">Kung Fu</option>
                    <option value="Levantamento de Peso">Levantamento de Peso</option>
                    <option value="Luge">Luge</option>
                    <option value="MMA">MMA</option>
                    <option value="Motociclismo">Motociclismo</option>
                    <option value="Mountain Biking">Mountain Biking</option>
                    <option value="Muay Thai">Muay Thai</option>
                    <option value="Nado Artístico">Nado Artístico</option>
                    <option value="Natação">Natação</option>
                    <option value="Parapente">Parapente</option>
                    <option value="Patinação">Patinação</option>

                    <option value="Patinação Artística no Gelo">Patinação Artística no Gelo</option>
                    <option value="Patinação de Velocidade no Gelo">Patinação de Velocidade no Gelo</option>
                    <option value="Polo Aquático">Polo Aquático</option>
                    <option value="Rafting">Rafting</option>
                    <option value="Remo">Remo</option>
                    <option value="Rugby">Rugby</option>
                    <option value="Saltos Ornamentais">Saltos Ornamentais</option>
                    <option value="Skate">Skate</option>
                    <option value="Skeleton">Skeleton</option>
                    <option value="Ski Esportivo">Ski Esportivo</option>
                    <option value="Slackline">Slackline</option>
                    <option value="Snowboard Esportivo">Snowboard Esportivo</option>
                    <option value="Softball">Softball</option>
                    <option value="Squash">Squash</option>
                    <option value="Stand Up Paddle">Stand Up Paddle</option>
                    <option value="Surfe">Surfe</option>
                    <option value="Taekwondo">Taekwondo</option>
                    <option value="Tiro com Arco">Tiro com Arco</option>
                    <option value="Tiro Esportivo">Tiro Esportivo</option>
                    <option value="Triathlon">Triathlon</option>
                    <option value="Tênis">Tênis</option>
                    <option value="Tênis de Mesa">Tênis de Mesa</option>
                    <option value="Vela">Vela</option>
                    <option value="Voo Livre">Voo Livre</option>
                    <option value="Voleibol">Voleibol</option>
                    <option value="Voleibol de Praia">Voleibol de Praia</option>
                    <option value="Windsurf">Windsurf</option>
                    <option value="Wingsuit">Wingsuit</option>
                    <option value="Wrestling">Wrestling</option>
                    <option value="Xadrez">Xadrez</option>
                </select>

                <label for="tempo" class="questionario__label">Há quanto tempo você pratica?</label>
                <input type="number" id="tempo" name="tempo" placeholder="digite quantos anos você pratica"
                    class="questionario__resposta" required>

                <label for="campeonatos" class="questionario__label">Quantas vezes participou de campeonatos?</label>
                <input type="number" id="campeonatos" name="campeonatos"
                    placeholder="Digite quantas vezes você participou" class="questionario__resposta" required>

                <label for="alimentação" class="questionario__label">Você se alimenta bem?</label>
                <div class="questionario__radiobtn">
                    <input type="radio" name="alimentacao" id="alimentacao-sim" class="questionario__resposta"
                        value="Sim" required> <label for="alimentacao-sim">Sim</label>
                    <input type="radio" name="alimentacao" id="alimentacao-nao" class="questionario__resposta"
                        value="Não" required><label for="alimentacao-nao">Não</label>
                </div>

                <label for="sono" class="questionario__label">Você dorme quantas horas por dia?</label>
                <input type="number" id="sono" name="sono" placeholder="Digite quantas horas você dorme por dia"
                    class="questionario__resposta" required>

                <input type="submit" value="Enviar" class="questionario__btn"></input>
            </form>

            <!-- Slider main container -->
            <div class="swiper mySwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="project-img">
                            <img src="./assets/img/mulher.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-img">
                            <img src="./assets/img/academia.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-img">
                            <img src="./assets/img/boxeador.svg" alt="" srcset="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="project-img">
                            <img src="./assets/img/jogando disco.svg" alt="" srcset="">
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <div class="autoplay-progress">
                    <svg viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20"></circle>
                    </svg>
                    <span></span>
                </div>
            </div>
        </div>
    </section>
    <footer class="rodape">
        <p class="rodape__texto">Grupo Mota</p>
        <section class="rodape__topicos">
            <div class="rodape__servicos">
                <p class="rodape__titulo">Empresas</p>
                <a href="#" class="rodape__item"><img src="./assets/img/mota informatica.svg"
                        alt="Logo Mota Informatica">Mota Informatica</a>
                <a href="#" class="rodape__item"><img src="./assets/img/vettel.svg" alt="Logo Vettel SafeDrive">Vettel
                    SafeDrive</a>
            </div>

            <div class="rodape__servicos">
                <p class="rodape__titulo">Projetos Sociais</p>
                <a href="#" class="rodape__item"><img src="./assets/img/Juntos pelo Mar.svg"
                        alt="Logo Projeto Juntos pelo Mar">Juntos pelo Mar</a>
                <a href="#" class="rodape__item"><img src="./assets/img/Esporte todos os dias.svg"
                        alt="Logo Projeto Esporte todos os dias"> Esporte todos os dias</a>
            </div>
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            slidesPerView: "auto",
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            effect: "flip",
            grabCursor: true,

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });
    </script>
    <!-- <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            keyboard: true,
            
        });
        swiper.start()
    </script> -->
</body>

</html>