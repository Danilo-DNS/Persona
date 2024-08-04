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
    <div class="row">
        <?php include_once('imc/menu.php'); ?>
    </div>
    <!-- /Menu -->

    <div class="container">

       <div class="botao">
       <button onclick="fundo_B()">modo escuro</button>
       <button  onclick="fundo_W()">modo claro</button>
       </div>
       <h1 class="text">Persona</h1>

            <?php echo '<img class="logo" src="img/index/'.rand(1,4).'.jpg">'?>
            <br><br>

            <!-- Texto -->

            <h4 class="text">Qual é o significado das cores de cada persona ?</h4>

            <br>

            <img src="img/capa_3.jpg" alt="capa do jogo de persona 3" class="capa">


            <h6 id="text">Foi a partir no persona 3 que passamos a ter histórias profundas com temas bem delicados onde tudo apresentava um motivo e possuía
                um significado e com isso, também começamos a ter a presença forte das cores que dessa vez não só se fazia presente nas artes
                promocionais como no jogo inteiro qual passava a ser trabalhado com base em uma cor em específico. Afinal assim como foi dito Shigenori Soejima
                "O que causa nas pessoas não são palavras ou formas mas sim cores" dessa maneira, acabou por ser representado pelo azul uma
                cor fria que além simbolizar o sentimentos também toma conta dos menus e ambientes do jogo para passar a ideia de depressão e
                desesperança algo qual está tendo um destaque ainda maior agora com a chegada do remake do game já que assim como nos filmes animados
                em Persona 3 Reload também teremos uma maior presença de um verde mórbido.</h6>

            <br>
            <br><br><br>

            <img src="img/capa_4.jpg" alt="capa do jogo de persona 4" class="capa">
            <h6 id="text">No persona 4 que impressiona é temos um amarelo cegante e a fandom ficou dividida com o singulo da cor que seria expressado os dois lados
                que o jogo possui afinal de contas o amarelo pode muito bem expressar um sinal de perigo, mas com o título tendo como destaque alta aceitação
                sua cor também pode muito bem expressar o medo e a ansiedade que temos para com isso no entanto. Os muitos sentidos da cor não param por
                aí Persona 4 fala muito sobre a juventude e como você deve aproveitar disso junto as outras pessoas independente de suas diferenças e
                dos padrões da sociedade, então a calorosa brilhante ofuscante ardente presença do amarelo predominante serve principalmente para
                representar a emoção amizade e felicidade e união é isso sua versão aprimorada Persona 4 Golden trouxe uma amontoado de cores
                secundárias para enfatizar a importância dos laços que o acompanham ao longo da extensionada que chamamos de vida.</h6>

            <br><br><br>
            <img src="img/capa_5.jpg" alt="capa do jogo de persona 5" class="capa">
            <h6 id="text">Agora falando no Persona 5 e a cor que domina o jogo com tanta força quanto a emoção da Ira é um vermelho gritante com a ideia de
                representar o vermelho vivo nesse caso serve para representar a raiva frustração e a
                ansiedade pela Liberdade com a colocada para o jogador ao longo de toda narrativa isso é feito expressando também muito da dor e do
                sacrifício visto que temos a cor do sangue aqui, no fim o vermelho presente em persona 5 não só serve para tomar conta do game no
                geral como do jogador também trazendo para fora a vontade para uma revolução e reafirmação da individualidade e existência de cada
                indivíduo perante a sociedade, com a chegada de sua versão aprimorada Persona 5 the Royal o dourado foi acrescentado para expressar
                o alto nível e valor do jogo ao mesmo tempo que se trata de uma cor que busca proporcionar um equilíbrio para mim conversando assim
                diretamente com os novos temas do título que envolvem saúde mental e trazendo um pouco da determinação e resolução necessária para não
                ceder ao escapismo</h6>
<br><br>
                <!-- /Texto -->

            <!-- /Rodape -->

            <?php include_once('imc/rodape.php') ?>

<!-- /Rodape -->

</div>



   <script src="scripit.js"></script>
<!-- /Container  --> 
</body>

</html>