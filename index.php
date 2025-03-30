<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Menu -->
        <?php include_once('imc/menu.php'); ?>
    <!-- /Menu -->

    <div class="container">

       <div class="botao">
       <button onclick="fundo_B()">modo escuro</button>
       <button onclick="fundo_W()">modo claro</button>
       </div>
       <h1 class="text">Persona</h1>

            <?php echo '<img class="logo" src="img/index/'.rand(1,4).'.jpg">'?>
            <br><br>

            <!-- Texto -->

            <h4 class="text">Qual é o significado das cores de cada persona ?</h4>

            <br>

            <img src="img/capa_3.jpg" alt="capa do jogo de persona 3" class="capa">


            <h6 id="text">Em Persona 3, a série adotou histórias profundas com temas delicados e o uso simbólico de cores. O azul representa depressão e desesperança, presente nos menus e cenários.
                 No remake Persona 3 Reload, isso é intensificado com a adição de um verde mórbido.</h6>

            <br>
            <br><br><br><br><br>

            <img src="img/capa_4.jpg" alt="capa do jogo de persona 4" class="capa">
            <h6 id="text">Em Persona 4, o amarelo predominante reflete os dois lados do jogo: perigo e ansiedade, mas também amizade, felicidade e união.
                 O jogo aborda juventude e aceitação das diferenças, com a cor simbolizando emoções calorosas. Na versão aprimorada, Persona 4 Golden, cores secundárias reforçam a importância dos laços na jornada da vida.</h6>

            <br><br><br><br><br><br>
            <img src="img/capa_5.jpg" alt="capa do jogo de persona 5" class="capa">
            <h6 id="text">Em Persona 5, o vermelho simboliza raiva, frustração, ansiedade por liberdade, dor e sacrifício, representando o desejo de revolução e reafirmação da individualidade. 
                Na versão aprimorada, Persona 5 Royal, o dourado foi adicionado para equilibrar esses temas, refletindo valor, saúde mental, determinação e resistência ao escapismo.</h6>
<br><br><br><br><br><br>
                <!-- /Texto -->

            <!-- /Rodape -->

            <?php include_once('imc/rodape.php') ?>

<!-- /Rodape -->

</div>



   <script src="script.js"></script>
<!-- /Container  --> 
</body>

</html>