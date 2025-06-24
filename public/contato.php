<?php  

$ok = 0;
$okdb = 0;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'vedors/email/Exception.php';
require 'vedors/email/PHPMailer.php';
require 'vedors/email/SMTP.php';

require 'admin/conexao.php';

if(isset($_POST['nome'])) {
        
        $assunto = 'Front Dev';
        $nome    = $_POST ['nome'];
        $fone    = $_POST ['fone'];
        $email   = $_POST ['email'];
        $mens    = $_POST ['mens'];

        // var_dump ($nome);
        // var_dump ($fone);
        // var_dump ($email);
        // var_dump ($mens);
      
        //-------INICIO BANCO DE DADOS-------este é o que envia o que foi preenchido no website para o db_frontdev.sql

        try{
            $inserir = $conn->prepare("INSERT INTO tbl_contato (nome_contato, telefone_contato, email_contato, mensagem_contato, status_contato) VALUES(:nome, :telefone, :email, :mensagem, 'Aguardando')");
            $inserir->bindParam(':nome',$nome);
            $inserir->bindParam(':telefone',$fone);
            $inserir->bindParam(':email',$email);
            $inserir->bindParam(':mensagem',$mens);

            if ($inserir->execute()) {
        //         echo "Dados inseridos com sucesso!";
        //         //echo "Dados inseridos com sucesso";
        //         //redirecionar para a propria página
        //         header("Location: contato.php");
        //         exit();
                    $okDb = 1;
            }
        //     else{
        //         echo "Erro ao inserir";
        //         $ok ==3;
        //     }

        }catch(PDOException $e) {
                echo "Erro:" . $e->getMessage();
        }

        //--------------------------FIM BANCO DE DADOS--------------------

        //tipi03@smpsistema.com.br
        //Senac@tipi03
         

    //-------------------------INICIO DO PHP MAILER------------------
    //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // *Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                  // *Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'tipi03@smpsistema.com.br'; // *SMTP username
        $mail->Password   = 'Senac@tipi03';                         // *SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('tipi03@smpsistema.com.br', $assunto);
        $mail->addAddress('frontddev@gmail.com', 'Front Dev');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content - corpo da mensagem
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $assunto;

        // var_dump($nome);
        $mail->Body = "
                        Nome: $nome <br>
                        Email: $email <br>
                        Telefone: $fone <br>
                        Mensagem: $mens
                        ";
        $mail->AltBody = "
                        Nome: $nome \n
                        Email: $email \n
                        Telefone: $fone \n
                        Mensagem: $mens
                        ";

        $mail->send();
        
        // echo $nome . 'Sua mensagem foi enviada com sucesso';
        $ok = 1;
    } catch (Exception $e) {
        // echo "Erro ao enviar a Mensagem!: {$mail->ErrorInfo}";
        $ok = 2;
    }


    //-------------------------FIM DO PHP MAILER--------------


}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--está TAG influência na responsividade-->
    <meta name="description" content="#"> <!--rever para que serve esta TAG-->
    <meta name="keywords" content="site,"> <!--rever para que serve esta TAG-->
    <meta name="author" content="Iara Freitas"> <!--nome que aparece no topo do site e que o Google usa muito para hackeamento-->
    <title>.: Front Dev :.</title>
    <link rel="stylesheet" href="assets/css/reset.css"> <!--ele fará a limpeza das configurações essenciais que vem do navegador, deixando como se fosse uma página em branco-->

    <!--ANIMATE CSS-->
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> 
    <!--usa servidor espalhado pelo mundo-->

    <link rel="stylesheet" href="assets/css/estilo.css"> <!--ele sempre vem por último, pois é a última parte do meu código que será lido e atuará na estilização-->
</head>

<body>
    <!--inicio header------------------ -->
    <?php require_once('conteudo/header.php') ?>
    <!--fim header--------------------- -->

    <main>

        <!-- início MAPA -->
        <section class="contato"> <!--width 1920px-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.024185053062!2d-46.43440892376197!3d-23.49563835918273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dd09800149%3A0x4f436ed77615106c!2sAvenida%20Marechal%20Tito%2C%201500%20-%20S%C3%A3o%20Miguel%20Paulista%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1727804144736!5m2!1spt-BR!2sbr" title="mapa da nossa localização" width="100%"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
        <!-- fim MAPA -->

        <!-- início CONTATO -->        
        <section>
            <div class="site">
                <form  class="pag-contato" action="#" method="POST">
                    <h2>Contato Agência</h2>
                    
                    <?php
                        if($ok == 1 && $okDb != 1) {
                            echo ("<h3>". $nome . ", sua mensagem foi enviada com sucesso! Usaremos seus dados apenas para responder à sua solicitação. Valorizamos sua privacidade. </h3>");
                        }elseif($ok == 2) {
                            echo ("<h3>". $nome . ", não foi possível enviar sua mensagem. Tente mais tarde. </h3>");
                        }
                    ?>

                    <div>
                        <div>
                            <div>
                                <input type="text" name="nome" id="nomeOrcamento" placeholder="Nome" required>  
                                <!-- a tag NAME vai guardar o dado informado no input e não pode ter 2 nomes iguais-->
                            </div>
                            <div>
                                <input type="tel" name="fone" id="foneOrcamento" placeholder="Telefone" required>
                            </div>
                            <div>
                                <input type="email" name="email" id="emailOrcamento" placeholder="E-mail" required>
                            </div>
                        </div>
        
                            <div>
                                <div>
                                    <textarea name="mens" id="mensOrcamento" placeholder="Mensagem" cols="30" rows="10"></textarea> 
                                    <!--neste campo o usuário preencherá a ms-->
                                </div>
                                <div>
                                    <!-- <input type="submit" value="Orçamento "> -->
                                    <!-- <button type="button" onclick="EnviarWhats()" tabindex="-1">Enviar</button> -->
                                    <input class="button" type="submit" value="Enviar E-mail">
                                </div>
                            </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- fim CONTATO -->        

    </main>

    <!--inicio footer-->
    <?php require_once('conteudo/footer.php'); ?>
    <?php require_once('conteudo/desenv-cont.php'); ?>
    <!--fim footer-->

    <!--este precisa vir primeiro que o script do SLICK que vai beber desta fonte. OjQuery só precisa que seja chamado a URL. Só precisamos da versão dele-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!--LITY JS-->
    <script src="assets/js/lity.min.js"></script>
    <script src="assets/js/animacoes.js"></script>
    
</body>

</html>