<?php


            $nome = $_POST['nome'] == "" ? "null" : "".$_POST['nome']."";
            $empresa = $_POST['instituição'] == "" ? "null" : "".$_POST['instituição']."";
            $uf = $_POST['uf'] == "" ? "null" : "'".$_POST['uf']."'";
            $municipio = $_POST['municipio'] == "" ? "null" : "".$_POST['municipio']."";
            $email = $_POST['email'] == "" ? "null" : "'".$_POST['email']."'";
            $telefone = $_POST['telefone'] == "" ? "null" : "".$_POST['telefone']."";
            $mensagem = $_POST['mensagem'] == "" ? "null" : "".$_POST['mensagem']."";

            $Hoje = date('d/m/Y H:i:s');

             $address = "gabriel@nucleosistemas.com.br";
             $email = "gabriel@nucleosistemas.com.br";

             $e_subject = 'Portal - Agendamento de Visitas ' . $nome . '.';

                 $e_body = "Você recebeu um email de agendamento de visitas do $nome da empresa $empresa situada na cidade $municipio - $estado com a mensagem $mensagem. ". PHP_EOL ." O e-mail de contato é $email e o telefone é $telefone. A data prevista de agendamento seria para o dia $hoje! " . PHP_EOL . PHP_EOL;
                $e_reply = "Você pode contatar via telefone $telefone.";

                $msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

                $headers = "From: $email" . PHP_EOL;
                $headers .= "Reply-To: gabriel@nucleosistemas.com.br" . PHP_EOL;
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
