<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--está TAG influência na responsividade-->
    <meta name="description" content="#"> <!--rever para que serve esta TAG-->
    <meta name="keywords" content="site,"> <!--rever para que serve esta TAG-->
    <meta name="author" content="Iara Freitas"> <!--nome que aparece no topo do site e que o Google usa muito para hackeamento-->
    <title>.: Front Dev :.</title>
    <link rel="stylesheet" href="assets/css/resset.css"> <!--ele fará a limpeza das configurações essenciais que vem do navegador, deixando como se fosse uma página em branco-->
    <link rel="stylesheet" href="assets/css/style.css"> <!--ele sempre vem por último, pois é a última parte do meu código que será lido e atuará na estilização-->
</head>

<body>
    <!--inicio do header----------------------- -->
    <?php require_once('conteudo/topo.php') ?>
    <!--fim do header-------------------------- -->

    <main>

        <!--inicio banner-->
        <section class="banner">  
            <!--banner add via css-->
            <a href="https://youtu.be/JlnP7RF6p68?si=fqnrENXgrCGH1GB5" data-lity> <img class="imgBanner" src="assets/img/banner-FD-1920x380.png" alt="imgbanner"  > <button class="btn-play"><img src="assets/img/btn-play.png" alt="btn-play-banner"></button> </a>
        </section> 
        <!--fim banner-->

        <!--inicio orçamento-->
        <?php require_once('conteudo/sobre-cont.php') ?>
        <?php require_once('conteudo/orcamento-cont.php') ?>
        <!--fim orçamento-->

        <!--inicio da metodologia-->
        <?php require_once('conteudo/metodologia-cont.php') ?>
        <!--fim da metodologia-->

        <!--inicio das linguagens-->
        <?php require_once('conteudo/linguagens-cont.php') ?>
        <!--fim das linguagens-->

        <!--inicio desenvolvedores-->
        <?php require_once('conteudo/devs-cont.php') ?>
        <!--fim desenvolvedores-->

    </main>

    <!--inicio footer-->
    <?php require_once('conteudo/footer-cont.php') ?>
    <!--fim footer-->


    <!--LITY JS-->
    <script src="assets/js/lity.min.js"></script>
    <script src="assets/js/animacoes.js"></script>
    
</body>

</html>