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

    <div class="botao">
       <button onclick="fundo_B()">modo escuro</button>
       <button  onclick="fundo_W()">modo claro</button>
       </div>
       
            <h1 >Personagens Jogaveis</h1>
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
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="img/Persona_3/makoto.png" class="personagens" alt="protagonista">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Makoto Yuki</h5>
                            <p >Um aluno do segundo ano que se transferiu para a Gekkoukan High School na primavera, retornando
                                <br>
                                para a ilha onde morou quando criança. Depois que um encontro com um monstro assustador o 
                                <br>
                                desperta para o poder da Persona, ele é recrutado pelo Specialized Extracurricular Execution Squad 
                                <br>(SEES).

                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Yukari.png" class="personagens" alt="Yukari">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Yukari Takeba</h5>
                            <p >Aluna do segundo ano da Gekkoukan High School e colega de classe do Protagonista.
                                <br> Sua personalidade alegre e boa aparência atraem muitos admiradores, mas por trás das
                                <br> gentilezas, ela é bastante teimosa e distante. Ela é membro do SEES comousuária 
                                <br>de Persona, e depois que ela e o Protagonista se aproximam de uma Sombra,
                                 <br> ela reconsidera sua falta de experiência em batalha e se junta a ele na linha de frente.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Junpei.png" class="personagens" alt="junpei">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Junpei Iori</h5>
                            <p >Outro colega do Protagonista, ao lado de Yukari. Ele desperta para suas habilidades de Persona logo após 
                                <br>a transferência do Protagonista para a escola, levando-o a se juntar ao resto do SEES no Dormitório Iwatodai.
                                <br>
                                Um grande palhaço da turma, ele está sempre pronto para brincar e aliviar o clima... o que nem sempre
                                <br> é apreciado pelo revirado Yukari.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Akihiko.png" class="personagens" alt="Akihiko">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Akihiko Sanada</h5>
                            <p >Aluno do terceiro ano da Gekkoukan High School e um dos membros fundadores da S.E.E.S.
                                <br> Ele é o capitão do time de boxe e também se destaca nos estudos, o que lhe rendeu muitos fãs na escola.
                                <br>
                                Ele tem uma personalidade fria e estóica, mas às vezes pode ser teimoso e até um pouco ingênuo.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/mitsuru.png" class="personagens" alt="mitsuru">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Mitsuru Kirijo</h5>
                            <p >A herdeira de uma poderosa corporação internacional, o Grupo Kirijo. Ela está no terceiro ano da
                                <br> Gekkoukan High School e atua como presidente do conselho estudantil. Ela também lidera S.E.E.S. 
                                <br>e organiza suas operações.
                                Com atitude empresarial, ela gosta de manter tudo em ordem.
                                <br> Ela é muito respeitada como uma estudante de honra que se destaca tanto nos estudos
                                <br> quanto nas atividades extracurriculares,
                                mas devido à sua educação de alta classe, 
                                <br>ela pode ignorar coisas que a maioria das pessoas consideraria senso comum.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item " data-bs-interval="2000">
                        <img src="img/Persona_3/Fuuka.png" class="personagens" alt="fuuka">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Fuuka Yamagishi</h5>
                            <p >Uma aluna tranquila e calma do segundo ano na Gekkoukan High School. Alunos menos íntegros aproveitam sua timidez, transformando-a em alvo de bullying.
                                <br>
                                Como resultado do bullying, ela fica presa na Dark Hour e precisa ser resgatada pelo Protagonista e seus amigos.
                                <br>
                                Essa experiência a leva a despertar para o poder da Persona e decidir entrar para S.E.E.S. ela mesma.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Koromaru.png" class="personagens" alt="Koromaru">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Koromaru</h5>
                            <p >Um cachorro que desperta para o poder da Persona após um acontecimento trágico.
                                <br> Como seu proprietário original o sacerdote do vizinho Santuário Naganaki do dormitório faleceu, 
                                <br>o protagonista e seus amigos o consideram um membro de pleno direito do SEES.
                                Inteligente, leal e amigável,
                                <br> ele rapidamente se torna um membro querido do grupo.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/aigis.png" class="personagens" alt="aigis">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Aigis</h5>
                            <p >Uma arma de supressão anti-sombra feita pelo homem, 7ª geração. Ela se junta ao SEES 
                                <br>
                                como um andróide com um coração humano, concedendo-lhe o poder de Persona.
                                <br>
                                Ela nutre uma ligação misteriosa com o Protagonista desde o primeiro dia em que se conheceram. 
                                <br>
                                Inicialmente parecendo fria e robótica, ela começa a descobrir mais emoções
                                <br> humanas através de suas experiências com o grupo.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/Ken.png" class="personagens" alt="Ken">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Ken Amada</h5>
                            <p >O membro mais jovem do SEES um aluno da 5ª série da Gekkoukan Elementary. Depois de 
                                <br>perder a mãe em um acidente, ele passa a morar no Dormitório Iwatodai.
                                <br>
                                Depois de despertar para suas habilidades de Persona, ele se junta ao SEES por conta própria.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="img/Persona_3/shinjiro.png" class="personagens" alt="Shinjiro">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 >Shinjiro Aragaki</h5>
                            <p >Um terceiro ano na Gekkoukan High, embora raramente possa ser visto na escola.
                                <br> Ele foi membro fundador do
                                 SEES ao lado de Mitsuru e Akihiko. Depois de se distanciar por cerca
                                 <br> de dois anos, uma certa reviravolta o convence a voltar ao grupo.

                                Embora inacessível à primeira
                                <br> vista, por baixo do exterior áspero há um coração gentil e um talento especial para cozinhar.
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
        

        <h1 class="titulo">A localização da vida real de onde aconteceu persona 3</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d419576.4045734955!2d134.7774226281651!3d34.75708757715837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60007d812aed89d9%3A0xc7126106c2f670f4!2zS8WNYmUsIEh5xY1nbywgSmFww6Nv!5e0!3m2!1spt-BR!2sbr!4v1694226805202!5m2!1spt-BR!2sbr" width="1064" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php include_once('imc/rodape.php')?>
        </div>
        </div>
        <br><br><br>

        <script src="scripit.js"></script>
        </body>

</html>