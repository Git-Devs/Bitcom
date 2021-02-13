<?php

            $nome = $_POST['nome'] == "" ? "null" : "'".$_POST['nome']."'";
            $telefone = $_POST['telefone'] == "" ? "null" : "'".$_POST['telefone']."'";
            $cpfcnpj = $_POST['cpfcnpj'] == "" ? "null" : "'".$_POST['cpfcnpj']."'";
            $cpf_formatado = $_POST['cpfcnpj'];
            $email = $_POST['email'] == "" ? "null" : "'".$_POST['email']."'";
            $email1 = $_POST['email'] == "" ? "null" : "".$_POST['email']."";
            $motivo = $_POST['motivo'] == "" ? "null" : "'".$_POST['motivo']."'";
            $endereco = $_POST['endereco'] == "" ? "null" : "'".$_POST['endereco']."'";
            $numero = $_POST['numero'] == "" ? "null" : "'".$_POST['numero']."'";
            $cidade = $_POST['cidade'] == "" ? "null" : "'".$_POST['cidade']."'";
            $observacao = $_POST['observacao'] == "" ? "null" : "'".$_POST['observacao']."'";


            $cpf_formatado = str_replace('.', '', $cpf_formatado);
            $cpf_formatado = str_replace('-', '', $cpf_formatado);
            $cpf_formatado = $cpf_formatado == "" ? "null" : "'".$cpf_formatado."'";
            

            $conn = @pg_connect("dbname='db_psql_bitcom' user='root_psql_bitcom' password='Kg36wj?7'");
             if (!$conn)
             {
               echo "Não foi possivel abrir banco de dados.\n";
               exit;
             }

            $Hoje = date('Y-m-d H:i:s');

            $data = date('d/m/Y');
            $hora = date('H:i:s');


            $rsCPF = pg_query($conn,"select count(*) as contagem FROM db_cancelar WHERE data_inserida >= NOW() - INTERVAL '24 HOURS' and replace(replace(cpf,'.',''),'-','') = $cpf_formatado");

            while($rowCPF = pg_fetch_array($rsCPF)){

                $contagem = $rowCPF['contagem'];
            }



            if($contagem == '0') {
            if ($_POST['nome'] != "") {
               $sqlEntidade = "insert into db_cancelar (nome, telefone, email, cpf, motivo, endereco, numero, cidade, data_inserida, observacao) values ($nome,$telefone,$email,$cpfcnpj, $motivo, $endereco, $numero, $cidade, '$Hoje', $observacao)";
               $execEntidade = pg_exec($conn,$sqlEntidade);
                }
            }
            else {
                        echo "<script type='text/javascript'> alert('Já existe um cadastro com esse CPF em menos de 24 horas!');</script>";
                        echo "<script type='text/javascript'> javascript:window.close();</script>";
            }


                $address = $email1;
                $email = "solicitacaocancelamento@bitcom.com.br";

                $e_subject = 'Solicitação de cancelamento: ' . $nome . ' - ' . $cpfcnpj . '.';

                $e_body = " " . PHP_EOL . PHP_EOL;
                $e_content = " " . PHP_EOL . PHP_EOL;
                $e_reply = "
        <body style='background-color:#ececec;'>
            <div class='parent' align='center'>
            <img src='https://i.ytimg.com/vi/aoLdD6dy4vU/0.jpg'><br>
            </div>
        <div class='parent'>

        <div style='padding-left: 10px;'>
            <p class='title'><strong> Dados da Solicitação:</strong> </p>
            <p>Sr(a) " . $nome . ", CPF" . $cpfcnpj . "  registramos na data " . $data . " às " . $hora . " sua solicitação de cancelamento de nossos serviços. </p>
        </div>

        <div style='padding-left: 10px;'>
            <p class='title'><strong> Nome:</strong> </p>
            <p>" . $nome . "</p>
        </div>

         <div style='padding-left: 10px;'>
            <p class='title'><strong> E-Mail:</strong> </p>
            <p>" . $email1 . "</p>
        </div>

          <div style='padding-left: 10px;'>
            <p class='title'><strong> CPF:</strong> </p>
            <p>" . $cpfcnpj . "</p>
        </div>

        <div style='padding-left: 10px;'>
            <p class='title'><strong> Telefone:</strong> </p>
            <p>" . $telefone . "</p>
        </div>

        <div style='padding-left: 10px;'>
            <p class='title'><strong> Endereço:</strong> </p>
            <p>" . $endereco . "</p>
        </div>

        <div style='padding-left: 10px;'>
            <p class='title'><strong> Cidade:</strong> </p>
            <p>" . $cidade . "</p>    
        </div>

        <div style='padding-left: 10px;'>
            <p class='title'><strong> Número:</strong> </p>
            <p>" . $numero . "</p>
        </div>

        <div style='padding-left: 10px;'>
            <p class='title'><strong> Motivo:</strong> </p>
            <p>" . $motivo . "</p>
        </div>

         <div style='padding-left: 10px;'>
             <p class='title'><strong> Observação:</strong> </p>
             <p>" . $observacao . "</p>
         </div>

        <div style='padding-left: 10px;'>
            <p class='title'><strong> Condições gerais:</strong> </p>
            <p>O Serviço de Atendimento ao Cliente (SAC) entrará em contato com você, em até 07 dias úteis, informando valores referentes à última mensalidade e também possíveis valores de multa, caso seu contrato esteja com o prazo de fidelidade ainda vigente. <BR><BR>
                Após efetivado o cancelamento, a área técnica entrará em contato, por telefone, em até 30 dias úteis, para agendar a retirada de equipamentos, se assim for necessário.<BR><BR>
                Para tanto estou ciente e concordo com as premissas do contrato assinado, no ato da contratação do serviço, e os itens relacionados abaixo, pelo que me comprometo a cumprir ou a que sejam devidamente cumpridas por quem eu indicar, quando for o caso:<BR><BR>
a) Para o devido cancelamento do serviço, a Bitcom Internet emitirá uma Ordem de Serviço ('OS’);<BR>
b) Com esta 'OS' em mãos, ao técnico da Bitcom Internet deverá ter assegurado a sua entrada no prédio e ou na unidade residencial do assinante, para a execução do serviço;<BR>
c) Após a execução do serviço a 'OS' deverá ser assinada pelo titular da assinatura ou responsável designado por ele, maior e portador de identidade, assim comprovado o exercício executado;<BR>
d) Caso o técnico da Bitcom Internet não tenha acesso ao prédio e ou unidade residencial do assinante e /ou este ou seu representado esteja ausente, o serviço de retirada será cancelado;<BR>
e) Sendo o serviço de retirada cancelado por qualquer motivo, a Bitcom Internet desconsiderará a solicitação de cancelamento e em consequência está autorizada a gerar o faturamento do deslocamento do técnico e a(s) mensalidade(s) subsequente(s);<BR>
f) O não pagamento do deslocamento do técnico e da(s) mensalidade(s) gerada(s) a partir da não execução do serviço solicitado, autoriza a Bitcom Internet a inclusão do nome do titular da assinatura no Serviço de Proteção ao Crédito - SPC.
</p>
        </div>


    </div>
</body>
"
;

                $msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

                $headers = "From: $email" . PHP_EOL;
                $headers .= "Reply-To: cancelamentos.interno@bitcom.com.br" . PHP_EOL;
                $headers .= "Bcc: site@bitcom.com.br, controller@visao.psi.br, ana.tomaz@bitcom.psi.br, cancelamentos.interno@bitcom.com.br" . PHP_EOL;
                $headers .= "MIME-Version: 1.0" . PHP_EOL;
                $headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
                $headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;


                if($contagem == '0') {
                if (trim($_POST['nome']) != "") {
                    if(mail($address, $e_subject, $msg, $headers)) {

                        echo "<fieldset>";
                        echo "<div id='success_page'>";
                        echo "<script type='text/javascript'> alert('E-mail enviado com sucesso');</script>";
                        echo "<script type='text/javascript'> javascript:window.close();</script>";
                        echo "</div>";
                        echo "</fieldset>";

                    } else {

                        echo 'E-mail não enviado, favor preencher novamente o formulário!';

                    }
                }
            }
?>