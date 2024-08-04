<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personagens</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row">
        <?php include('imc/menu.php'); ?>
    </div>
    <div class="container">
        <div class="fundo_preto">
            <h1 class="titulo">Personagens Jogaveis</h1>
            <br>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="6" aria-label="Slide 7"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="7" aria-label="Slide 8"></button>
                    

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="img/Persona_4/Yu.png" class="personagens" alt="protagonista">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Yu Narukami</h5>
                            <p class="h">Ele é um estudante transferido na Yasogami High School e reside por um ano em 
                                <br>Inaba uma cidade rural. E coisas estranhas acontecem.

                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_4/Yosuke.png" class="personagens" alt="Yosuke">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Yosuke Hanamura</h5>
                            <p class="h">Ele é colega de classe do protagonista na Yasogami High School em Inaba e filho do gerente da filial da
                                <br> loja de departamentos Junes em Inaba.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_4/Chie_Satonaka.png" class="personagens" alt="Chie">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Chie Satonaka</h5>
                            <p class="h">Uma garota enérgica e apaixonada por filmes de kung-fu, ela é uma das colegas de classe 
                                <br>do protagonista na Yasogami High School.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_4/Yukiko_Amagi.png" class="personagens" alt="Yukiko">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Yukiko Amagi</h5>
                            <p class="h">Ela é colega de classe do protagonista na Yasogami High School, e sua família administra 
                                <br>a pousada de fontes termais de Inaba, chamada Amagi Inn, onde ela é a próxima na fila 
                                <br>como gerente.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_4/Kanji_Tatsumi.png" class="personagens" alt="Kanji">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Kanji Tatsumi</h5>
                            <p class="h">Ele é um aluno do primeiro ano da classe 1-3 na Yasogami High School em Inaba e é 
                                <br>conhecido por muitos como um notório delinquente desde o ensino médio.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_4/Rise_Kujikawa.png" class="personagens" alt="Rise">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Rise Kujikawa</h5>
                            <p class="h">Ela é uma ídolo popular que retorna a Inaba para um breve hiato. Ela é uma estudante do primeiro ano
                                <br> da Yasogami High School.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_4/Teddie.png" class="personagens" alt="Teddie">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Teddie</h5>
                            <p class="h">Ele é conhecido como Kuma na versão japonesa, é um personagem jogável e ex-deuteragonista
                                <br> em Persona 4.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_4/Naoto_Shirogane.png" class="personagens" alt="Naoto">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Naoto Shirogane</h5>
                            <p class="h">Quinta geração dos famosos detetives Shirogane, Naoto chega a Inaba para ajudar a investigar 
                                <br>os assassinatos e se matricula como aluno do primeiro ano na Yasogami High School.
                            </p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev, h" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next,h" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        

        <h1 class="titulo">A localização da vida real de onde aconteceu persona 4</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15468.744813313282!2d134.24148953315287!3d35.407654429116846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35559a057c369121%3A0xc7d163b7ae069169!2sKoge%2C%20Yazu%2C%20Distrito%20de%20Yazu%2C%20Tottori%20680-0461%2C%20Jap%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1694588269749!5m2!1spt-BR!2sbr" width="1300" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <h5>Ele se passa em Koge e Kunoji.</h5>
            <?php include_once('imc/rodape.php') ?>
        </div>
        </div>

       
</body>

</html>