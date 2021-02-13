<?php
            $nome = $_POST['nome'] == "" ? "null" : "'".$_POST['nome']."'";
            $cep = $_POST['cep'] == "" ? "null" : "'".$_POST['cep']."'";
            $telefone = $_POST['telefone'] == "" ? "null" : "'".$_POST['telefone']."'";

            if ($nome == 'null') {
            echo  "<script type='text/javascript'> alert('Dados enviado com sucesso');</script>";
            echo "<script type='text/javascript'> javascript:history.back();</script>";
            exit;
            }
             // $conn = pg_connect("dbname='nocorona_' user='root' password='og85K2*l'");
            $conn = @pg_connect("dbname='db_psql_bitcom' user='root_psql_bitcom' password='Kg36wj?7'");
            if (!$conn)
            {
               echo "Não foi possivel abrir banco de dados.\n";
               exit;
            }

            $Hoje = date('d/m/Y H:i:s');

            $sqlInsert = "insert into db_consulta_disponibilidade (data_inserida, nome, cep, telefone) values ('$Hoje',$nome,$cep,$telefone)";
            $execInsert = @pg_exec($conn,$sqlInsert);

            $address = "bitcomshop@bitcom.com.br";
            $email = "bitcomshop@bitcom.com.br";

            $e_subject = 'Solicitação de troca de plano  ' . $telefone . '.';

            $e_body = "Você recebeu uma mensagem do cliente:$nome do cep $cep e telefone $telefone com interesse de migrar de plano! " . PHP_EOL . PHP_EOL;
               $e_content = "\"$comentario\"" . PHP_EOL . PHP_EOL;
               $e_reply = "Você pode contatar $nome pelo telefone $telefone.";

               $msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

               $headers = "From: $email" . PHP_EOL;
               $headers .= "Reply-To: bitcomshop@bitcom.com.br, " . PHP_EOL;
               $headers .= "MIME-Version: 1.0" . PHP_EOL;
               $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
               $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

               if(mail($address, $e_subject, $msg, $headers)) {

                  echo "<fieldset>";
                  echo "<div id='success_page'>";
                  echo "<script type='text/javascript'> alert('Número enviado com sucesso');</script>";
                  echo "<script type='text/javascript'> javascript:history.back();</script>";
                  echo "</div>";
                  echo "</fieldset>";

               } else {

                  echo 'E-mail não enviado, favor preencher novamente o formulário!';

               }
               echo "<script type='text/javascript'> alert('Dados enviado com sucesso');</script>";
               echo "<script type='text/javascript'> javascript:history.back();</script>";
            
?>