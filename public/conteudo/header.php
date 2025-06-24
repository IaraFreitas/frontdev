    <header  id="topo-fixo">
        <div class="site"><!--inicio-->

            <div class="logo">
                <a href="index.php">
                    <h1 class="wow animate__animated animate__zoomIn">FD</h1>
                </a>
            </div>

            <div>
                <nav class="menu">

                                        <!-- <?php
                     $pgAtual = basename($_SERVER['PHP_SELF'], '.php');
                     //     //var_dump($pgAtual); 
     
                     //     if($pgAtual == 'index'){
                     //     echo('ativo');
                     // }else{
                     //     var_dump('vazio');
                     // }
     
                          ?> -->

                    <ul>
                        <li>
                            <a href="index.php" class="<?php echo ($pgAtual == 'index') ? 'ativo' : ''; ?>">Home</a>
                        </li>
                        <li>
                            <a href="sobre.php" class="<?php echo ($pgAtual == 'sobre') ? 'ativo' : ''; ?>">Sobre</a>
                        </li>
                        <li>
                            <a href="servicos.php" class="<?php echo ($pgAtual == 'servicos') ? 'ativo' : ''; ?>">Serviços</a>
                        </li>
                        <li>
                            <a href="contato.php" class="<?php echo ($pgAtual == 'contato') ? 'ativo' : ''; ?>">Contato</a>
                        </li>
                    </ul>

                </nav>

            </div>

        </div>
    </header>