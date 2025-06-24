<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontdev</title>


    <link rel="stylesheet" href="assets/css/reset.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/lity.min.css">

    <link rel="stylesheet" href="assets/css/estilo.css">


</head>

<body>
    <!-- COMEÇO HEADER -->

    <?php require_once('conteudo/header.php');?>

    <!-- FIM HEADER -->

    <!-- banner -->

    <section class="banner">

        <div class="site">
            <h2 class="wow animate__animated animate__zoomIn">Front Dev</h2>
        </div>

    </section>

    <!-- fim banner -->

    <main>

        <section class="sobre">

            <div class="site">

                <div>
                    <!-- <h2>Sobre <span>F</span>ront<span>D</span>ev</h2> -->
                    <p>Bem-vindo a <span>FrontDev</span>, onde a inovação e a criatividade se encontram para transformar sua presença
                        digital. </p>
                </div>

                <div>
                    <form action="#" name="orcamento" method="post">

                        <h2>Faça seu Orçamento</h2>

                        <div><input type="nome" name="nome"  placeholder="Nome" required></div>

                        <div><input type="tel" name="fone"  placeholder="Telefone" required></div>

                        <div><input type="email" name="email"  placeholder="E-mail" required></div>

                        <div>
                        <textarea name="mens" placeholder="Mensagem" cols="30" rows="10"></textarea></div>

                        <button onclick="EnviarWhats()">Orçamento</button>

                    </form>

                </div>

            </div>
    
        </section>

        <section class="linguagens wow animate__animated animate__fadeInUp">

            <div class="site">
                <div class="titulo">
                    <h2>Linguagens</h2>
                </div>

                <!-- <p>Conheça algumas das linguagens utilizadas</p> -->

                <div class="cxMet">

                    <div>
                        <img src="assets/img/html-5 (1).png" alt="logo HTML">
                        <h3>HTML</h3>
                        <h4>O HTML é a base estrutural dos nossos sites. Definimos o conteúdo em blocos (como textos, imagens, vídeos). É a definição do esqueleto do seu site.</h4>
                    </div>

                    <div>
                        <img src="assets/img/css-3 (3).png" alt="logo CSS">
                        <h3>CSS</h3>
                        <h4>CSS é estilizar! Ele transforma o HTML estático com a aplicação de cores, fontes, imagens e muito mais. Pense nele como o responsável por vestir seu site com o melhor visual.</h4>
                    </div>

                    <div>
                        <img src="assets/img/script-java (1).png" alt="logo Java Script">
                        <h3>Java-Script</h3>
                        <h4>O Java-Script é o que dá vida às páginas, tornando tudo interativo. Com ele as animações acontecem. É o que faz o site agir e reagir às ações do usuário!</h4>
                    </div>

                    <div>
                        <img src="assets/img/php (4).png" alt="logo PHP">
                        <h3>PHP</h3>
                        <h4>O PHP permite gerar páginas personalizadas, processar formulários, conectar-se a bancos de dados e criar sistemas de login e APIs. Traz o dinâmismo.</h4>
                    </div>

                    <div>
                        <img src="assets/img/mysql (5).png" alt="logo MySQL">
                        <h3>MySQL</h3>
                        <h4>O MySQL é um sistema de gerenciamento de banco de dados para armazenar, organizar e acessar informações. Com ele gerenciamos dados com eficiência.</h4>
                    </div>

                </div>
            </div>

        </section>

        <!-- metodologia -->

        <section class="metodologia wow animate__animated animate__fadeInUp">
            <div class="site">
                <h2>Metodologia</h2>

                <div class="caixamt">

                    <div>
                        <div class="borda">
                            <h3>1</h3>
                        </div>
                        <h4>Início</h4>
                        <p>Imersão ao projeto através da coleta do briefing e planejamento para definição de objetivos e
                            funcionalidades.</p>
                    </div>

                    <div>
                        <div class="borda">
                            <h3>2</h3>
                        </div>
                        <h4>Design</h4>
                        <p>Design do wireframe, key visual com base na identidade da marca e criação do layout com
                            soluções
                            visuais.
                        </p>
                    </div>


                    <div>
                        <div class="borda">
                            <h3>3</h3>
                        </div>
                        <h4>Front-End</h4>
                        <p>Programação e codificação junto a estruturação das páginas e suas funcionalidades, além da
                            otimização
                            e SEO.</p>
                    </div>

                    <div>
                        <div class="borda">
                            <h3>4</h3>
                        </div>
                        <h4>Entrega</h4>
                        <p>Revisão final, validações e publicação do seu projeto com acompanhamento dos acessos e do
                            desempenho.
                        </p>
                    </div>

                </div>

            </div>

        </section>

        <!-- DESENVOLVEDORES -->

        <section class="devs wow animate__animated animate__fadeInUp">

            <div class="site">

                <h6>Desenvolvedores</h6>

                <div class="container">
                    <!-- Div para lista de desenvolvedores -->
                    <div class="dev-list">
                        <div class="developer" onclick="exibirInfo('dev1')">
                            <img src="assets/img/iaradevs 1.png" alt="Dev 1">
                        </div>
                        <div class="developer" onclick="exibirInfo('dev2')">
                            <img src="assets/img/felipedev 1.png" alt="Dev 2">
                        </div>
                        <div class="developer" onclick="exibirInfo('dev4')">
                            <img src="assets/img/samueldev 1.png" alt="Dev 3">
                        </div>
                        <div class="developer" onclick="exibirInfo('dev3')">
                            <img src="assets/img/kauedev 1.png" alt="Dev 4">
                        </div>
                        <div class="developer" onclick="exibirInfo('dev5')">
                            <img src="assets/img/vitoriadev 1.png" alt="Dev 5">

                        </div>
                    </div>

                    <!-- Div para exibir informações detalhadas do desenvolvedor -->
                    <div class="dev-info">
                        <img id="dev-photo" src="" alt="Foto do Desenvolvedor" style="display: none; width: 200px; height: 200px; border-radius: 50%; margin: 30px;">
                        <h2 id="dev-name">Selecione um desenvolvedor</h2>
                        <div id="dev-socials" style="display: none;">
                            <a href="https://web.whatsapp.com/" id="whatsapp" target="_blank">
                                <img src="assets/img/whatsapp-fd.png" alt="logo whatsapp">
                            </a>
                            <a href="https://www.instagram.com/accounts/login/" id="instagram" target="_blank">
                                <img src="assets/img/instagram-fd.png" alt="logo instagram">
                            </a>
                            <a href="https://www.linkedin.com/login/pt" id="linkedin" target="_blank">
                                <img src="assets/img/linkedin-fd.png" alt="logo linkedin">
                            </a>
                        </div>
                    </div>
                </div>

            </div>


        </section>
        <!-- footer -->
    </main>

    <?php require_once('conteudo/footer.php'); ?>
    <?php require_once('conteudo/desenv-cont.php'); ?>
    
    <script src="assets/js/script.js"></script>
    <script src="assets/js/animacon.js"></script>

</body>


</html>