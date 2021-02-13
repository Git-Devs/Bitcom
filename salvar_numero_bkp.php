<?php
            $telefone = $_POST['telefone'] == "" ? "null" : "'".$_POST['telefone']."'";

             // $conn = pg_connect("dbname='nocorona_' user='root' password='og85K2*l'");
            $conn = @pg_connect("dbname='bitcom' user='postgres' password='123abcABC'");
             if (!$conn)
             {
                // echo "Não foi possivel abrir banco de dados.\n";
                // exit;
             }

            $Hoje = date('d/m/Y H:i:s');

            $sqlInsert = "insert into db_migrar (numero_tel, data_inserida) values ($telefone,'$Hoje')";
            $execInsert = @pg_exec($conn,$sqlInsert);

            $address = "michel@nucleosistemas.com.br";

            $e_subject = 'Solicitação de Imigração numero:' .$telefone. '.';

            $e_body = "Você recebeu um email com o contato do portal numero: $telefone. O cliente tem interesse em  migrar para bitcom!" . PHP_EOL . PHP_EOL;

                $msg = wordwrap( $e_body . 70 );

                $headers = "From: $email" . PHP_EOL;
                $headers .= "Reply-To: michel@nucleosistemas.com.br" . PHP_EOL;
                $headers .= "MIME-Version: 1.0" . PHP_EOL;
                $headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
                $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

                if(mail($address, $e_subject, $msg, $headers)) {

                    echo "<fieldset>";
                    echo "<div id='success_page'>";
                    echo "&nbsp;";
                    echo "</div>";
                    echo "</fieldset>";

                } else {

                    echo 'E-mail não enviado, favor preencher novamente o formulário!';

                }


                echo "<script type='text/javascript'> alert('Número enviado com sucesso');</script>";
                echo "<script type='text/javascript'> javascript:history.back();</script>";
            }

?>
