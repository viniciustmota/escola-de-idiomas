<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="./assets/css/estilos.css">
</head>

<body>
    <?php
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $sexo = $_GET['sexo'];
    $esporte = $_GET['esporte'];
    $tempo = $_GET['tempo'];
    $alimentacao = $_GET['alimentacao'];
    $sono = $_GET['sono'];
    $campeonatos = $_GET['campeonatos'];
    ?>

    <header class="cabecalho">
        <img src="./assets/img/Logo.svg" alt="Logo Projeto Esporte todos os dias" class="cabecalho__logo">
        <p class="cabecalho__titulo">Projeto Esporte Todos os dias</p>
    </header>

    <section class="banner banner-dados">
        <h1 class="banner__titulo">
            <?php echo ("Que legal $nome!") ?>
        </h1>
        <p class="banner__descricao banner__descricao-dados">
            <?php echo ("Você pratica $esporte,
há $tempo anos") ?>
        </p>
    </section>

    <section class="dados">
        <?php echo "<img class='dados__img' src='./assets/img/$esporte.jpg' \">";
        echo ("<div class='dados__div'>
                    <h2 class='dados__titulo'>Dados sobre você</h2>
                    <ul class='dados__lista'>
                        <li class='dados__item'>Gênero $sexo;</li>
                        <li class='dados__item'>Tem $idade anos</li>
                        <li class='dados__item'>Ja participou em $campeonatos campeonatos;</li>
                        <li class='dados__item'>Se alimenta bem: $alimentacao;</li>
                        <li class='dados__item'>Dorme $sono horas por dia;</li>
                    </ul>
                </div>
    ");

        ?>
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