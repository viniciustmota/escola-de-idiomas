<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/estilos.css">

    <!-- JS -->
    <script src="./assets/js/script.js" defer></script>
</head>

<body>
    <?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $sexo = $_GET['sexo'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone'];
    $cpf = $_GET['cpf'];
    $curso = $_GET['cursos'];
    $nivel = $_GET['Nivel'];
    $deficiencia = $_GET['deficiencia'];
    $rg = $_GET['rg'];
    ?>

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
            <ul class="cabecalho__lista">
                <li class="cabecalho__item"><a href="#">Cursos</a></li>
                <li class="cabecalho__item"><a href="#">Entrar</a></li>
                <li class="cabecalho__btn"><a href="./cadastro.php">Quero me matricular</a></li>
            </ul>
            <img src="./assets/img/user.svg" alt="" srcset="" class="cabecalho__login">
        </nav>

    </header>

    <section class="banner banner-dados">
        <p class="banner__descricao banner__descricao-dados">
            <?php echo ("Olá, $nome") ?>
        </p>
        <h1 class="banner__titulo">
            <?php echo ("Confirme seus dados
e comece os estudos") ?>
        </h1>
    </section>

    <section class="dados">
        <div class="dados__conteudo">
            <?php
            echo ("<div class='dados__div'>
                    <ul class='dados__lista'>
                        <li class='dados__item'>Nome: <span>$nome</span></li>
                        <li class='dados__item'>Idade: <span>$idade anos</span></li>
                        <li class='dados__item'>Genêro: <span>$sexo</span></li>
                        <li class='dados__item'>E-mail: <span>$email</span></li>
                        <li class='dados__item'>Telefone: <span>$telefone</span></li>
                        <li class='dados__item'>CPF: <span>$cpf</span></li>
                        <li class='dados__item'>RG: <span>$rg</span></li>
                        <li class='dados__item'>Curso: <span>$curso</span></li>
                        <li class='dados__item'>Nível: <span>$nivel</span></li>
                        <li class='dados__item'>Possui deficiência: <span>$deficiencia</span></li>      
                    </ul>
                </div>
                "); ?>
            <button type="submit" class="dados__btn">confimar</button>
        </div>
        <img src="./assets/img/Globo.svg" alt="Imagem de um globo da terra" class="dados__img">
    </section>

    <footer class="rodape">
        <p class="rodape__texto">Grupo Mota</p>
        <section class="rodape__topicos">
            <div class="rodape__servicos">
                <p class="rodape__titulo">Empresas</p>
                <a href="#" class="rodape__item"><img src="./assets/img/mota informatica.svg" alt="Logo Mota Informatica">Mota Informatica</a>
                <a href="#" class="rodape__item"><img src="./assets/img/vettel.svg" alt="Logo Vettel SafeDrive">Vettel SafeDrive</a>
            </div>

            <div class="rodape__servicos">
                <p class="rodape__titulo">Projetos Sociais</p>
                <a href="#" class="rodape__item"><img src="./assets/img/Juntos pelo Mar.svg" alt="Logo Projeto Juntos pelo Mar">Juntos pelo Mar</a>
                <a href="#" class="rodape__item"><img src="./assets/img/Esporte todos os dias.svg" alt="Logo Projeto Esporte todos os dias"> Esporte todos os dias</a>
            </div>
        </section>
    </footer>
</body>

</html>