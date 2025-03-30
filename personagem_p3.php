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
        <?php include('imc/menu.php'); ?>
    <div class="container">

    <div class="botao">
       <button onclick="fundo_B()">modo escuro</button>
       <button onclick="fundo_W()">modo claro</button>
    </div>
       
            <h1 >Personagens Jogaveis</h1>
            <br>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="img/Persona_3/makoto.png" class="personagens" alt="protagonista">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Makoto Yuki</h5>
                            <p >Makoto Yuki, protagonista de Persona 3,é um estudante reservado que lidera o SEES para enfrentar a Dark Hour e combater Shadows.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Yukari.png" class="personagens" alt="Yukari">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Yukari Takeba</h5>
                            <p >Yukari Takeba é uma estudante do SEES, conhecida por sua personalidade calorosa, mas com 
                                 traumas familiares profundos.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Junpei.png" class="personagens" alt="junpei">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Junpei Iori</h5>
                            <p >Junpei Iori é um membro do SEES, um jovem despreocupado e amigável, 
                                <br>
                                mas com inseguranças que busca superar ao provar seu valor.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Akihiko.png" class="personagens" alt="Akihiko">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Akihiko Sanada</h5>
                            <p >Akihiko Sanada é um membro do SEES, dedicado e disciplinado, 
                                conhecido por sua paixão por treinar e proteger os outros após enfrentar perdas pessoais.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/mitsuru.png" class="personagens" alt="mitsuru">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Mitsuru Kirijo</h5>
                            <p >Mitsuru Kirijo é uma jovem elegante e inteligente, 
                                herdeira do Grupo Kirijo, que carrega o peso de sua responsabilidade familiar e busca
                                redimir os erros de sua linhagem.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="2000">
                        <img src="img/Persona_3/Fuuka.png" class="personagens" alt="fuuka">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Fuuka Yamagishi</h5>
                            <p >Fuuka Yamagishi é uma tímida e gentil membro do SEES,
                                que atua como estrategista com habilidades de suporte e comunicação excepcionais.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Koromaru.png" class="personagens" alt="Koromaru">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Koromaru</h5>
                            <p >Koromaru é o fiel cachorro do SEES, portador de Persona, leal e corajoso,
                                <br>
                                que luta ao lado do time para honrar seu falecido dono.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/aigis.png" class="personagens" alt="aigis">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Aigis</h5>
                            <p >Aigis é uma androide do SEES, criada para combater Shadows, 
                                que desenvolve emoções humanas e um forte laço com o protagonista.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Ken.png" class="personagens" alt="Ken">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Ken Amada</h5>
                            <p >Ken Amada é o mais jovem membro do SEES, maduro para sua idade, 
                             motivado pela vingança, mas em busca de superar sua dor e encontrar seu propósito.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/shinjiro.png" class="personagens" alt="Shinjiro">
                        <div class="carousel-caption d-sm car-tex">
                            <h5 >Shinjiro Aragaki</h5>
                            <p >Shinjiro Aragaki é um ex-membro do SEES, reservado e atormentado
                                 por seu passado,
                                 que retorna ao grupo em busca de redenção.
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
        

        <h2 class="titulo">A localização da vida real de onde aconteceu persona 3</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d419576.4045734955!2d134.7774226281651!3d34.75708757715837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60007d812aed89d9%3A0xc7126106c2f670f4!2zS8WNYmUsIEh5xY1nbywgSmFww6Nv!5e0!3m2!1spt-BR!2sbr!4v1694226805202!5m2!1spt-BR!2sbr" class="mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php include_once('imc/rodape.php')?>
        </div>
        </div>
        <br><br><br>

        <script src="script.js"></script>
        </body>

</html>