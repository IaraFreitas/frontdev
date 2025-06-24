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

    <?php require_once('conteudo/header.php'); ?>

    <!-- FIM HEADER -->

    <!-- banner -->

    <section class="servicos-banner">

        <div class="site">
            <h2 class="wow animate__animated animate__zoomIn"> <span>N</span>ossos <span>S</span>erviços</h2>
        </div>

    </section>

    <!-- fim banner -->

    <main>

        <!-- começo linguagens -->
        <section class="pag-servicos wow animate__animated animate__fadeInUp">

            <div class="site">

                <div class="slideshow">
                    <img src="<?php echo 'assets/img/img-servicos.png'; ?>" alt="img 1" class="slide">
                    <img src="<?php echo 'assets/img/img-servicos3.jpg'; ?>" alt="img 2" class="slide">
                    <img src="<?php echo 'assets/img/img-servicos4.jpg'; ?>" alt="img 3" class="slide">
                </div>

                <div class="titulo-servicos">
                    <h2>A <span>FrontDev</span> é especializada em Desenvolvimento de Sites</h2>
                </div>

                <section class="cx-servicos">
                    <div class="site">

                        <div>
                            <div class="caixa-servicos1">

                                <img src="assets/img/analytics-monitor.png" alt="">
                                <p> Desenvolvimento de Sites Personalizados
                                    Criação de sites sob medida, com design e funcionalidades específicos para as necessidades do cliente.
                                    Desenvolvimento Front-end e Back-end, incluindo integração com sistemas de terceiros (API, CRMs, etc.).
                                    Criação de Single Page Applications (SPAs) e Progressive Web Apps (PWAs).</p>

                            </div>

                            <div class="caixa-servicos2">

                                <img src="assets/img/monitoramento.png" alt="">
                                <p>Web Design e UI/UX
                                    Design de interfaces focadas na experiência do usuário (UX) e na navegabilidade intuitiva.
                                    Criação de layouts responsivos para dispositivos móveis, desktops e tablets.
                                    Prototipagem interativa e wireframes para aprovação visual antes do desenvolvimento.</p>
                            </div>

                            <div class="caixa-servicos3">

                                <img src="assets/img/monitor.png" alt="">
                                <p>
                                    SEO Técnico e Otimização para Motores de Busca
                                    Implementação de boas práticas de SEO para melhorar o ranqueamento nos motores de busca (Google, Bing).
                                    Criação de estrutura semântica, otimização de meta tags, URLs amigáveis, e schema markup.
                                    Verificação e ajustes de velocidade, responsividade e conteúdo.</p>

                            </div>

                        </div>

                    </div>

                </section>

                <!-- <div
                    class="">
                    <span class="vc_sep_holder vc_sep_holder_l">
                        <span style="border-color:#a8a8a8;"
                            class="vc_sep_line">
                        </span>
                    </span>
                    <span class="vc_sep_holder vc_sep_holder_r"><span
                            style="border-color:#a8a8a8;" class="vc_sep_line"></span></span>
                </div> -->

                <div class="lgs-servicos">

                    <h2>Veja algumas das nossas linguagens que utilizamos</h2>

                </div>

                <div class="cxMet-servicos">

                    <div>
                        <a href="https://developer.mozilla.org/pt-BR/docs/Web/HTML" target="_blank"><img
                                src="assets/img/html-5 (1).png" alt="logo html"></a>

                    </div>

                    <div>
                        <a href="https://developer.mozilla.org/pt-BR/docs/Web/CSS" target="_blank"><img
                                src="assets/img/css-3 (3).png" alt="logo css"></a>

                    </div>

                    <div>
                        <a href="https://developer.mozilla.org/pt-BR/docs/Web/JavaScript" target="_blank"><img
                                src="assets/img/script-java (1).png" alt="logo java-script"></a>

                    </div>

                    <div>
                        <a href="https://www.php.net/manual/pt_BR/index.php" target="_blank"><img src="assets/img/logo-php.png"
                                alt="logo php"></a>

                    </div>

                    <div>
                        <a href="https://www.devmedia.com.br/mysql-tutorial/33309" target="_blank"><img
                                src="assets/img/logo-mysql.png" alt="logo mysql"></a>

                    </div>

                </div>
            </div>

        </section>
        <!-- fim linguagens -->

        <!-- metodologia -->
        <!-- fim metodologia -->

        <!-- Devs -->
        <!-- fim devs -->


    </main>
    <!-- footer -->
    <?php require_once('conteudo/footer.php'); ?>
    <?php require_once('conteudo/desenv-cont.php'); ?>

    <!-- fim footer -->

    <script src="assets/js/script.js"></script>

</body>


</html>