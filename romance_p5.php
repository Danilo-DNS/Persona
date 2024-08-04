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
            <h1 class="titulo">Pares românticos</h1>
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
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>


                </div>
                <div class="carousel-inner">

                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="img/Persona_5/ann.png" class="personagens" alt="Ann">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Ann Takamaki</h5>
                            <p class="h"> Ela é uma estudante da Shujin Academy que vive uma vida dupla
                                <br> como The Phantom Thief. Depois de se sentir culpada por não ter
                                <br> ajudado sua melhor amiga Shiho Suzui, que seria vítima de Kamoshida
                                <br> ela jurou vingança e fazer Kamoshida confessar seus crimes.
                                <br> Seu codinome é "Panther". <a href="https://youtu.be/3aOOK4ZyK70?si=JLrs1jzGZ__QKcJk">Ver video</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="img/Persona_5/takemi.png" class="personagens" alt="protagonista">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Tae Takemi</h5>
                            <p class="h"> Ela é uma médica de rua que possui uma clínica em Yongen-Jaya, não muito longe do Café Leblanc.
                                <br> Sua clínica serve como cabine de remédios do jogador durante todo o jogo. <a href="https://youtu.be/VTMQILbhzLA?si=1E_v1tYAPfAyCjyC">Ver video</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_5/kawakami.png" class="personagens" alt="Morgana">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Sadayo Kawakami</h5>
                            <p class="h">Kawakami é uma professora altamente competente e profissional que nunca deixa seu
                                <br>estresse e exaustão crescentes aparecerem visivelmente em nenhum de seus trabalhos.
                                <br>Ela é a melhor professora de todos os tempos, a persona 5 <a href="https://youtu.be/WlS9Uj0DxfY?si=u28ho8EKB4ZmVATr">Ver video</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/makoto.png" class="personagens" alt="Makoto">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Makoto Niijima</h5>
                            <p class="h"> Ela é a presidente do conselho estudantil da Shujin Academy, que vive uma vida dupla como membra
                                <br>dos The Phantom Thief. Seu codinome no The Phantom Thief é "Queen". <a href="https://youtu.be/yxUAeoaGXSY?si=6i_408VAogbhk4cb">Ver o video</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/Ohya.png" class="personagens" alt="Akechi">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Ichiko Ohya</h5>
                            <p class="h">Ela é uma paparazza sem escrúpulos. <a href="https://youtu.be/AGr7Yb6my0U?si=I50aGjKIu3Zh4d8V">Ver video</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/Chihaya.png" class="personagens" alt="Yusuke">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Chihaya Mifune</h5>
                            <p class="h">Ela é uma cartomante ativa em Shinjuku. <a href="https://youtu.be/6t0cwc9HV2o?si=96rhtCdk7nScR3Xk">Ver o video</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/futaba.png" class="personagens" alt="Futaba">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Futaba Sakura</h5>
                            <p class="h">Ela é uma hikikomori e um dos alvos dos Phantom Thieves, futuramente se tornando
                                <br>um membro do grupo. Futaba é a navigator, tendo como principal função lembrar
                                <br> as fraquezas dos inimigos, mas, ela também pode dar diversos buffs
                                <br>e cura para os aliados e atrapalhar os inimigos.
                                <br> Seu codinome é "Oracle". <a href="https://youtu.be/FpYYNqlk3GI?si=hMmdnItw0rh0El5o">Ver video</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/Hifumi.png" class="personagens" alt="Ryuji">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Hifumi Togo</h5>
                            <p class="h">Ela é uma campeã de Shogi conhecida por nunca perder uma partida. <a href="https://youtu.be/y88vWlLfbfg?si=M_6nL0KZ9ewgMr-i">Ver video</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/haru.png" class="personagens" alt="Haru">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Haru Okumura</h5>
                            <p class="h">Ela é uma garota rica que frequenta a Academia Shujin e vive uma vida
                                <br>dupla como The Phantom Thief. Ela é a única filha de Kunikazu Okumura,
                                <br> o quinto maior alvo dos The Phantom Thief.
                                <br>E o seu codinome é "Noir" <a href="https://youtu.be/cccQ9IiglAM?si=N9duL8edCVxhf7m-">Ver video</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/Yoshizawa.png" class="personagens" alt="Sumire">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Sumire Yoshizawa</h5>
                            <p class="h">Ela é uma personagem jogável de Persona 5 Royal. Ela é uma estudante transferida do primeiro ano
                                <br>da Academia Shujin e uma ginasta talentosa que se envolve com os The Phantom Thief.
                                <br>Seu codinome é "Violet".
                                <a href="https://youtu.be/17q9Iu75fV0?si=ip9m3JFeWW6W0Rx5">Ver o video</a>
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
            <?php include_once('imc/rodape.php') ?>
        </div>
    </div>
</body>

</html>