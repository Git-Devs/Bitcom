<?php
            $vaga = $_POST['vaga'] == "" ? "null" : "'".$_POST['vaga']."'";
            $email = $_POST['email'] == "" ? "null" : "'".$_POST['email']."'";
            $nome = $_POST['nome'] == "" ? "null" : "'".$_POST['nome']."'";
            $telefone = $_POST['telefone'] == "" ? "null" : "'".$_POST['telefone']."'";
            $observacao = $_POST['observacao'] == "" ? "null" : "'".$_POST['observacao']."'";
            $arquivo = $_POST['arquivo'] == "" ? "null" : "'".$_POST['arquivo']."'";

    $arquivo = $_FILES['arquivo']['name'];
   if($arquivo != "") {

    $arquivo = $_FILES['arquivo']['name'];
    $tipoArquivo = pathinfo($arquivo);
    $extencao ='.'.$tipoArquivo['extension'];
    $nomeArquivo = 'arquivos/curriculo_'.$_POST['nome'].$_POST['telefone'].$extencao;
    $nomeArquivoSemEspaco = str_replace(" ", "_", $nomeArquivo);
    $uploaddir = $nomeArquivoSemEspaco;
    $uploadfile = $uploaddir . basename($_FILES['arquivo']);

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
    echo "";
    }
    }

             // $conn = pg_connect("dbname='nocorona_' user='root' password='og85K2*l'");
            $conn = @pg_connect("dbname='db_psql_bitcom' user='root_psql_bitcom' password='Kg36wj?7'");

            $Hoje = date('d/m/Y H:i:s');

           $sqlInsert = "insert into db_formulario_vaga (data_inserida, vaga, email, nome, telefone, observacao, arquivo) values ('$Hoje',$vaga, $email, $nome,$telefone, $observacao, '$nomeArquivo')";

            $execInsert = @pg_exec($conn,$sqlInsert);

            $address = "fabio@nucleosistemas.com.br";
            $email = "fabio@nucleosistemas.com.br";

            $e_subject = 'Trabalhe Conosco  ' . $nome . '.';

                $e_body = "Você recebeu um curriculo de:$nome com telefone $telefone com interesse em trabalhar conosco! " . PHP_EOL . PHP_EOL;
               $e_content = "\"$comentario\"" . PHP_EOL . PHP_EOL;
               $e_reply = "Você pode contatar  $nome pelo  $telefone.";
               $e_arquivo = "Acesso curriculo:https://bitcom.com.br/$nomeArquivo";

               $msg = wordwrap( $e_body . $e_content . $e_reply. $e_arquivo,70);

               $headers = "From: $email" . PHP_EOL;
               $headers .= "Reply-To: fabio@nucleosistemas.com.br, " . PHP_EOL;
               $headers .= "MIME-Version: 1.0" . PHP_EOL;
               $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
               $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

               if(mail($address, $e_subject, $msg, $headers)) {

                  echo "<fieldset>";
                  echo "<div id='success_page'>";
                  echo "<script type='text/javascript'> alert('Currículo enviado com sucesso');</script>";
                  echo "<script type='text/javascript'> javascript:history.back();</script>";
                  echo "</div>";
                  echo "</fieldset>";

               } else {

                  echo 'E-mail não enviado, favor preencher novamente o formulário!';

               }
               echo "<script type='text/javascript'> alert('Dados enviado com sucesso');</script>";
               echo "<script type='text/javascript'> javascript:history.back();</script>";
            
?>