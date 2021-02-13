<?php
            $telefone = $_POST['telefone'] == "" ? "null" : "'".$_POST['telefone']."'";

             // $conn = pg_connect("dbname='nocorona_' user='root' password='og85K2*l'");
            $conn = @pg_connect("dbname='db_psql_bitcom' user='root_psql_bitcom' password='Kg36wj?7'");
             if (!$conn)
             {
                echo "Não foi possivel abrir banco de dados.\n";
                exit;
             }

            $Hoje = date('d/m/Y H:i:s');

            $sqlInsert = "insert into db_migrar (numero_tel, data_inserida) values ($telefone,'$Hoje')";
            $execInsert = @pg_exec($conn,$sqlInsert);

             $address = "bitcomshop@bitcom.com.br";
             $email = "bitcomshop@bitcom.com.br";

            // $address = "michel@nucleosistemas.com.br";
            // $email = "michel@nucleosistemas.com.br";

             $e_subject = 'Solicitação de troca de plano  ' . $telefone . '.';

             $e_body = "Você recebeu uma mensagem do cliente de numero: $telefone com interesse de trocar para Bitcom e ganhar  50% de desconto na instalação! " . PHP_EOL . PHP_EOL;
                $e_content = "\"$comentario\"" . PHP_EOL . PHP_EOL;
                $e_reply = "Você pode contatar via telefone $telefone.";

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

            
 
?>