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
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="8" aria-label="Slide 9"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="9" aria-label="Slide 10"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="10" aria-label="Slide 11"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="11" aria-label="Slide 12"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="12" aria-label="Slide 13"></button>
                    

                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="img/Persona_5/joker.png" class="personagens" alt="protagonista">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Ren Amamiya</h5>
                            <p class="h"> Ele é um estudante do segundo ano do ensino médio que é expulso por ter
                                <br> sido falsamente acusado de agressão por um político.
                                <br>Que criou um grupo que se chama "The Phantom Thief" para fazer que
                                <br> pessoas confessase os crimes deles e o Ren é o lider desse grupo que
                                <br> seu codinome é "Joker".
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_5/morgana.png" class="personagens" alt="Morgana">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Morgana</h5>
                            <p class="h">Ele é um ser misterioso ligado a Mementos. Ele não sabe quem é e busca respostas para restaurar suas memórias.
                                <br>E ensina para The Phantom Thief como usar seus poderes e como funciona as coisas. Seu codinome é "Mona"
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/ryuji.png" class="personagens" alt="Ryuji">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Ryuji Sakamoto</h5>
                            <p class="h">Ele é um estudante da Shujin Academy e um ex-astro do atletismo que vive uma vida dupla
                                <br>como The Phantom Thief. Ele é seu manas.
                                <br> Seu codinome é "Skull".
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/ann-phantom.png" class="personagens" alt="Ann">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Ann Takamaki</h5>
                            <p class="h"> Ela é uma estudante da Shujin Academy que vive uma vida dupla
                                <br> como The Phantom Thief. Depois de se sentir culpada por não ter
                                <br> ajudado sua melhor amiga Shiho Suzui, que seria vítima de Kamoshida
                                <br> ela jurou vingança e fazer Kamoshida confessar seus crimes.
                                <br> Seu codinome é "Panther".
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/yusuke.png" class="personagens" alt="Yusuke">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Yusuke Kitagawa</h5>
                            <p class="h">Ele é um estudante de arte da Kosei High School que se envolve com os Phantom Thieves of Hearts.
                                <br>Seu codinome é "Fox".
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/makoto-phantom.png" class="personagens" alt="Makoto">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Makoto Niijima</h5>
                            <p class="h"> Ela é a presidente do conselho estudantil da Shujin Academy, que vive uma vida dupla como membra
                                <br>dos The Phantom Thief. Seu codinome no The Phantom Thief é "Queen".
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/futaba_phantom.png" class="personagens" alt="Futaba">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Futaba Sakura</h5>
                            <p class="h">Ela é uma hikikomori e um dos alvos dos Phantom Thieves, futuramente se tornando
                                <br>um membro do grupo. Futaba é a navigator, tendo como principal função lembrar
                                <br> as fraquezas dos inimigos, mas, ela também pode dar diversos buffs
                                <br>e cura para os aliados e atrapalhar os inimigos.
                                <br> Seu codinome é "Oracle".
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/haru_phantom.png" class="personagens" alt="Haru">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Haru Okumura</h5>
                            <p class="h">Ela é uma garota rica que frequenta a Academia Shujin e vive uma vida
                                <br>dupla como The Phantom Thief. Ela é a única filha de Kunikazu Okumura,
                                <br> o quinto maior alvo dos The Phantom Thief.
                                <br>E o seu codinome é "Noir"
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/akechi.png" class="personagens" alt="Akechi">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Goro Akechi</h5>
                            <p class="h">Ele é visto como o príncipe detetive e também como uma celebridade Japonesa.
                                <br> Ele é considerado o grande rival do Joker e dos Phantom Thieves visto que ele é um dos membros
                                <br> mais importantes da investigação contra os The Phantom Thief.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/Sumire_phantom.png" class="personagens" alt="Sumire">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Sumire Yoshizawa</h5>
                            <p class="h">Ela é uma personagem jogável de Persona 5 Royal. Ela é uma estudante transferida do primeiro ano
                                <br>da Academia Shujin e uma ginasta talentosa que se envolve com os The Phantom Thief.
                                <br>Seu codinome é "Violet".
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/sophia.png" class="personagens" alt="Sophia">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Sophia</h5>
                            <p class="h">Sophia é uma personagem jogável de Persona 5 Strikers. Ela é uma IA encontrada pelo
                                <br> protagonista enquanto escapava da prisão de Shibuya que se envolve com os The Phantom Thief.
                                <br>Seu codinome é "Sophie"
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Persona_5/wolf.png" class="personagens" alt="Zenkichi">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="h">Zenkichi Hasegawa</h5>
                            <p class="h">Ele é um personagem jogável de Persona 5 Strikers. Ele é um inspetor de polícia da
                                <br>prefeitura de Kyoto encarregado de investigar o último incidente relacionado
                                <br>ao Metaverso.
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


                <h1 class="titulo">A localização da vida real de onde aconteceu persona 5</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51862.592707603035!2d139.6514163585532!3d35.66685498323211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cb2eb3108d1%3A0xf11cd9b2395b6677!2zU2hpYnV5YSwgVMOzcXVpbywgSmFww6Nv!5e0!3m2!1spt-BR!2sbr!4v1694584694947!5m2!1spt-BR!2sbr" width="1300" height="900" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <?php include_once('imc/rodape.php') ?>
            </div>
        </div>



</body>

</html>