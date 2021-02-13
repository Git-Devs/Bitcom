<?php

    $data = date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d H:i:s');

    if (isset($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip_cliente = $_SERVER['HTTP_CLIENT_IP'];
    }

    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip_cliente = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip_cliente = $_SERVER['REMOTE_ADDR'];
    }

    $json = file_get_contents('http://geoip-db.com/json/'.$ip_cliente.'');
    $data = json_decode($json);

    $data->country_code . '<br>';
    $data->country_name . '<br>';
    $data->state . '<br>';
    $data->city . '<br>';
    $data->postal . '<br>';
    $data->latitude . '<br>';
    $data->longitude . '<br>';
    $data->IPv4 . '<br>';

$is_https=false;
if (isset($_SERVER['HTTPS'])) $is_https=$_SERVER['HTTPS'];
if ($is_https !== "on")
{
    header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    exit(1);
}
    
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bitcom Viva Conectado - Provedor de Serviços Residenciais e Empresariais</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width = largura do dispositivo, escala inicial = 1">


    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="Bitcom Viva Conectado - Provedor de Serviços Residenciais e Empresariais" />
    <meta property="og:description"
        content="Bitcom Viva Conectado - Provedor de Serviços Residenciais e Empresariais" />
    <meta property="og:url" content="http://bitcom.com.br/" />
    <meta property="og:site_name" content="Bitcom Viva Conectado - Provedor de Serviços Residenciais e Empresariais" />

    <meta property="og:title" content="Bitcom Viva Conectado - Provedor de Serviços Residenciais e Empresariais" />

    <meta property="og:image" content="http://bitcom.com.br/img/favicon.png">
    <meta property="og:image:type" content="favicon.png">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">


    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav2.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> -->
    <script src="js/slickslider.js"></script>
</head>

<?php
include('header_cidades.php');
?>


<!--Menu lateral fixo redes sociais-->
<!-- <ul id="menu">
    <li><a href="https://www.facebook.com/bitcominternet" target="_blank"><img src="img/facebook.png"
                style="width: 100%;margin-left: 0px;margin-top: 3px;"></a></li>
    <li><a href="https://www.instagram.com/bitcominternet" target="_blank"><img src="img/instagram.png"
                style="width: 100%;margin-top: 35px;"></a></li>
    <li><a href="https://www.linkedin.com/company/bitcomgroup/" target="_blank"><img src="img/linkedin.png"
                style="width: 100%;margin-top: 35px;"></a></li>
    <li><a href="https://youtube.com/bitcominternet" target="_blank"><img src="img/youtube.png"
                style="width: 100%;margin-top: 35px;"></a></li>
    <li><a href="https://twitter.com/bitcominternet" target="_blank"><img src="img/twitter.png"
                style="width: 100%;margin-top: 35px;"></a></li>
</ul> -->
<!--Menu lateral fixo redes sociais-->

<!-- slider_area_start -->
<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
   
<?php

       $rsH = pg_query($conn,"select *,row_number() over (order by id_banner) as ordem from db_banner where cidade in ('$cidade','todos')and plataforma = 'D'");
       while($row = pg_fetch_array($rsH)){
        echo '<div class="single_slider  d-flex align-items-center slider_bg_'.$row['ordem'].'">
            <div class="container">
                <div class="row" style="text-align: center;">
                    <div class="col-xl-12" style="top: 300px;">
                        <div class="slider_text">
                            <a class="boxed-btn3" data-toggle="modal" data-target="#examplepopup">Consultar
                                disponibilidade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
}
?>      
    </div>
</div>



<!-- footer start -->
<!-- offers_area_start -->
<div class="our_department_area1">
    <div class="container">
        <div class="row" style="margin-right:0px;">
            <div class="col-xl-12">
                <div class="section_title text-left mb-55">
                    <!-- <h3>Ofertas para você</h3> -->
                    <p> <br>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-12">
                <div class="single_department1">
                    <div class="department_thumb1">
                        <img src="img/bit100.png" style="width: 258px; height: 450px;" alt="">
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-xl-12" style="top: -33px;padding-left: 16px;">
                            <div class="slider_text">
                                <a class="boxed-btn3" href="https://lp.bitcom.com.br/l/9nzh2dABF1117" target="_blank">Quero
                                    assinar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="single_department1">
                    <div class="department_thumb1">
                        <img src="img/bit50.png" style="width: 258px; height: 450px;" alt="">
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-xl-12" style="top: -33px;left: 0px;">
                            <div class="slider_text">
                                <a class="boxed-btn3" href="https://lp.bitcom.com.br/l/mrvEc0ABF1137" target="_blank">Quero
                                    assinar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="single_department1">
                    <div class="department_thumb1">
                        <img src="img/bit10.png" style="width: 258px; height: 450px;" alt="">
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-xl-12" style="top: -33px;left: 0px;">
                            <div class="slider_text">
                                <a class="boxed-btn3" href="https://lp.bitcom.com.br/l/YH6z0aABF1116" target="_blank">Quero
                                    assinar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <a class="active col-6" href="internet-casa.php" target="_blank"
            style="font-size: 18px;color:white;font-family:Segoe UI regular;text-decoration: underline;">Mais opções de
            Internet em Casa</a>

        <a class="active col-6" href="internet.php" target="_blank"
            style="font-size: 18px;color: red;font-family:Segoe UI regular;text-decoration: underline;">Mais opções de
            Internet Empresa</a>
    </div>
</div>
<div style="width: 100%;border-bottom: 50px solid #383434;"></div>
<div style="width: 100%;border-bottom: 50px solid #FFFFFF;"></div>
<!-- offers_area_start -->

<!-- testmonial_area_end -->

<div class="testmonial_area" onclick="window.open('seguros.php','_blank')" style="width: 90%; cursor: pointer;">
    <div class="testmonial_active owl-carousel">
        <div class="single-testmonial testmonial_bg_1 overlay2" style="width: 100%">
            <div class="container">
                <div class="row" style="text-align: center;">
                    <div class="col-xl-12" style="top: 270px;">
                        <div class="slider_text">
                            <a href="apps.php" class="boxed-btn3">Baixe agora</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="testmonial_info text-center">
                            <div class="quote">
                                <i class=""></i>
                            </div>
                            <p>
                                <br>
                                <br>
                            </p>
                            <div class="testmonial_author">
                                <h4></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-testmonial testmonial_bg_2 overlay2">
            <div class="container">
                <div class="row" style="text-align: center;">
                    <div class="col-xl-12" style="top: 270px;">
                        <div class="slider_text">
                            <a href="elements.php" class="boxed-btn3">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="testmonial_info text-center">
                            <div class="quote">
                                <i class=""></i>
                            </div>
                            <p>
                                <br>
                                <br>
                            </p>
                            <div class="testmonial_author">
                                <h4></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div style="
  width: 100%;
  border-bottom: 50px solid #ffffff;
  "></div>

<!--ACORDEON-->
<div id="accordion" style=" text-align: left; width:90%">
    <div class="card-body" style="
    color: #332F2F;
    font-size: 28px;
    font-family: Segoe UI regular;
    background-color: #f7f7f7;
    padding-top: 50px;
    padding-bottom: 50px;">
        Perguntas Frequentes
    </div>

    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne" style="
    font-family: Segoe UI regular;
    font-size: 18px;">
                    Quais os canais de atendimento da Bitcom?
                </button>
            </h5>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body" style="font-family: Segoe UI regular;font-size: 18px;">
                Nosso suporte técnico está disponível 24hrs através da central 0800 648 9050. O atendimento via Whatsapp
                está disponivel no número (54) 9 9660 0825.<br>
                Para falar com a central de atendimento ao cliente o número é (54) 3209 9088.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo" style="
    font-family: Segoe UI regular;
    font-size: 18px;">
                    Como emitir 2ª via do boleto? É possível realizar pagamento com cartão de crédito?
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body" style="font-family: Segoe UI regular;font-size: 18px;">
                Emitir a segunda via do seu boleto é muito simples através do nosso site. <a href="segunda.via.php"
                    target="_blank" style="text-decoration: underline; color: #d30811;font-weight: 600;">Veja como.</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree" style="
    font-family: Segoe UI regular;
    font-size: 18px;">
                    Minha internet Bitcom está lenta, o que eu faço?
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body" style="font-family: Segoe UI regular;font-size: 18px;">
                Se estiver enfrentando problemas de conexão ou lentidão, você pode seguir <a href="internet_lenta.php"
                    target="_blank" style="text-decoration: underline; color: #d30811;font-weight: 600;">esses
                    passos.</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFour">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour" style="
    font-family: Segoe UI regular;
    font-size: 18px;">
                    Como posso testar minha velocidade de internet?
                </button>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body" style="font-family: Segoe UI regular;font-size: 18px;">
                Você pode testar a velocidade da sua conexão acessando esse link: <a href="http://ip.bitcom.com.br"
                    target="_blank" style="text-decoration: underline; color: #d30811;font-weight: 600;">Teste de
                    velocidade Bitcom</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFive">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="false" aria-controls="collapseFive" style="
    font-family: Segoe UI regular;
    font-size: 18px;">
                    Por que minha velocidade não está compatível com o plano contratado?
                </button>
            </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body" style="font-family: Segoe UI regular;font-size: 18px;">
                A Bitcom se compromete com a velocidade da internet. Para identificar o problema, por favor siga <a
                    href="velocidade_plano.php" target="_blank"
                    style="text-decoration: underline; color: #d30811;font-weight: 600;">esses passos.</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFive">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed col-12" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="false" aria-controls="collapseFive" style="
    font-family: Segoe UI regular;
    font-size: 18px;">
                    <div class="frase" style="text-align: center;">
                        <a class="active col-6" href="about.php" target="_blank"
                            style="font-size: 18px; text-decoration: underline;color: #d30811;font-family: Segoe UI regular;padding-bottom: 50px;">Mais
                            perguntas frequentes</a>
                    </div>
                    <!-- <a class="active col-6" href="about.php" style="font-size: 18px;text-decoration: underline;margin-left: 440px;  color: #d30811;font-family: &quot;Segoe UI&quot;,regular;padding-bottom: 50px;">Mais perguntas frequentes</a>   -->
                </button>
            </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
        </div>
    </div>
</div>
<!--ACORDEON-->
<!-- bradcam_area_end  -->
<div class="our_department_area11">
    <div class="container">
        <div class="row" style="
        background-color: #332F2F;">
            <div class="col-xl-4 col-md-12">
                <div class="section_title text-left mb-55">
                    <h3
                        style="text-align: center;font-size:21px; font-family: Segoe UI regular;font-weight: 400;top: 40px;">
                        Troque para Bitcom e ganhe <b style="font-weight:bold;color:white;">&nbsp;50% <br>de
                            desconto</b> na instalação </h3>
                </div>
            </div>
            <!-- <form action="salvar_numero.php" method="POST"> -->
            <div class="col-xl-4 col-md-12" style="top: 44px;">
                <div class="section_title text-center mb-55">
                    <form action="salvar_numero.php" method="POST">
                        <input type="text" placeholder="Seu telefone" name="telefone"
                            onkeypress="mascara(this, '## #####-####')" maxlength="13"
                            style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 320px;"
                            required>
                </div>
            </div>
            <div class="col-xl-4 col-md-12" style="top: 32px;">
                <div class="section_title text-center mb-55 mobile">
                    <div class="btn-mobile">
                        <input type="submit" class="boxed-btn3" value="Quero Trocar"
                            style="font-family: Segoe UI regular;font-size: 21px;" required>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Start Sample Area -->



<?php
include('rodape.php');
?>

<!-- footer end  -->


<!-- JS here -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>
<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>

<script>
$(document).ready(function() {

    $('#exampleModalCenter').modal('show');
    // $('#examplepopup').modal('show');


});

$('#datepicker').datepicker({
    iconsLibrary: 'fontawesome',
    icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>'
    }
});

$('#datepicker2').datepicker({
    iconsLibrary: 'fontawesome',
    icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>'
    }
});

// $(document).ready(function() {
//     $('.js-example-basic-multiple').select2();
// });
</script>

</body>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
</button> -->


<!-- MODAL
<div class="modal container" id="exampleModalCenter" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered row" role="document">
        <div class="modal-content">    
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="close-button" aria-hidden="true">&times;</span>
            </button> 
            <div class="modal-body our_department_area">
                <div class="container">            
                    <div class="row">
                        <div class="col-xl- col-md-6">
                            <div class="single_department">
                                <div class="department_thumb">
                                    <img src="img/quecliente.png" class="center" alt="">
                                        <div class="col-xl-6" style="top: -70px;left: 0px;">
                                            <div class="slider_text">
                                            <a href="index.php" class="boxed-btn3">Quero assinar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl- col-md-6">
                            <div class="single_department">
                                <div class="department_thumb">
                                    <img src="img/jacliente.png" class="center" alt="">
                                        <div class="col-xl-6" style="top: -70px;left: 0px;">
                                            <div class="slider_text">
                                            <a href="contact.php" class="boxed-btn3">Já sou cliente</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </div>
</div> -->


<!-- MODAL popup-->
<div class="modal modal-home container" id="examplepopup" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered row" role="document">
        <div class="modal-content" style="background-color: white;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="">
                <span class="close-button" aria-hidden="true"
                    style="background-color: red;font-size: 15px;border-radius: 40px;height: 40px; width: 40px;padding-top: 13px;margin-bottom: 4px;">X</span>
            </button>
            <div class="modal-body our_department_area_popup">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 style="font-family: Segoe UI regular;font-size: 21px;color: white;">Informe os dados a
                                baixo e em breve enviaremos a melhor oferta!</h1>
                        </div>
                        <div class="col-12">
<script language="JavaScript">
 /*
 A função Mascara tera como valores no argumento os dados inseridos no input (ou no evento onkeypress)
 onkeypress="mascara(this, '## ####-####')"
 onkeypress = chama uma função quando uma tecla é pressionada, no exemplo acima, chama a função mascara e define os valores do argumento na função
 O primeiro valor é o this, é o Apontador/Indicador da Mascara, o '## ####-####' é o modelo / formato da mascara
 no exemplo acima o # indica os números, e o - (hifen) o caracter que será inserido entre os números, ou seja, no exemplo acima o telefone ficara assim: 11-4000-3562
 para o celular de são paulo o modelo deverá ser assim: '## #####-####' [11 98563-1254]
 para o RG '##.###.###.# [40.123.456.7]
 para o CPF '###.###.###.##' [789.456.123.10]
 Ou seja esta mascara tem como objetivo inserir o hifen ou espaço automáticamente quando o usuário inserir o número do celular, cpf, rg, etc 

 lembrando que o hifen ou qualquer outro caracter é contado tambem, como: 11-4561-6543 temos 10 números e 2 hifens, por isso o valor de maxlength será 12
 <input type="text" name="telefone" onkeypress="mascara(this, '## ####-####')" maxlength="12">
 neste código não é possivel inserir () ou [], apenas . (ponto), - (hifén) ou espaço
 */

 function mascara(t, mask){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 }
 </script>
                            <!------------------------FORMULÁRIO MIGRAÇÃO--------------------------->
                            <form action="salvar_consulta_disponibilidade.php" method="POST" class="form-inline"
                                style="padding-top: 5px;padding-bottom: 0px;padding-top: 26px;margin-left: 30px;">
                                <label class="sr-only" for="inlineFormInputName2"></label>
                                <div class="col-xl-12" style="top: 0px;">
                                    <input type="text" name='nome' class="form-control mb-2 mr-sm-2"
                                        id="inlineFormInputName" placeholder="Informe seu Nome" required
                                        style="margin-top: 10px;margin-left: 6px;border-radius: 7px;color: black;background-color: white;font-size: 20px;">
                                </div>
                                <div class="col-12">
                                    <label class="sr-only" for="inlineFormInputName2"></label>
                                    <div class="col-xl-12" style="top: 0px;">
                                        <input type="text" name='cep' class="form-control mb-2 mr-sm-2"
                                            id="inlineFormInputName2" placeholder="CEP"
                                            onkeypress="mascara(this, '#####-###')" minlength="8" maxlength="9" required
                                            style="margin-top: 10px;margin-left: 6px;border-radius: 7px;color: black;background-color: white;font-size: 20px;">
                                    </div>
                                    <div class="col-xl-12" style="top: 0px;">
                                        <div class="form-group">
                                            <label for="inputtext"></label>
                                            <div class="col-xl-12" style="top: 0px;">
                                                <input name='telefone' type="text" id="inputtext"
                                                    placeholder="Seu telefone"
                                                    onkeypress="mascara(this, '## #####-####')" minlength="10" maxlength="13" required
                                                    class="form-control mx-sm-3" aria-describedby="passwordHelpInline"
                                                    style="margin-top: 10px;margin-left: 0px;border-radius: 7px;color: black;background-color: white;font-size: 20px;">
                                            </div>
                                            <small id="passwordHelpInline" class="text"></small>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2"
                                        style="margin-top: 10px;margin-left: 10px;border-radius: 7px;color: white;background-color: red;font-size: 20px;">Enviar</button>
                            </form>
                            <!------------------------FORMULÁRIO--------------------------->

                            <!-- <button type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#mensagens" style="margin-top: 10px;margin-left: 25px;border-radius: 7px;color: white;background-color: red;font-size: 20px;">Enviar</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MODAL OBRIGADO -->
<!-- MODAL popup-->
<div class="modal modal-home container" id="mensagens" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered row" role="document">
        <div class="modal-content" style="background-color: white;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="">
                <span class="close-button" aria-hidden="true" style="
    background-color: red;
    font-size: 15px;
    border-radius: 40px;
    height: 40px;
    width: 40px;
    padding-top: 13px;
    margin-bottom: 4px;
">X</span>
            </button>
            <div class="modal-body our_department_area_popup">
                <div class="container">
                    <div class="row">
                        <div class="col-12" text-center;>
                            <!-- <h1 style="
    font-family: Segoe UI regular;
    font-size: 21px;color: white;
">Obrigado!</h1></div> -->
                            <div class="col-12">
                                <form class="form-inline"
                                    style="padding-top: 5px;padding-bottom: 0px;padding-top: 26px;margin-left: 30px;">

                                    <label class="sr-only" for="inlineFormInputName2"></label>
                                    <div class="col-xl-12" style="top: 0px;">

                                        <h1 style="color: white; font-size: 21px;">Obrigado, em breve entraremos em
                                            contato.</h1>
                                    </div>
                                    <div class="col-xl-12" style="top: 0px;">
                                        <div class="form-group">
                                            <label for="inputtext"></label>
                                            <div class="col-xl-12" style="top: 0px; margin-bottom: 40px;">
                                            </div>
                                            <small id="passwordHelpInline" class="text">
                                            </small>
                                        </div>
                                    </div>
                                </form>


                                <!--LOGIN-->
                                <!--RELEMBRAR-->

                                <!-- <a href="apps.php">
                                <button type="submit" class="btn btn-primary mb-2" style="margin-top: 10px;margin-left: 25px;border-radius: 7px;color: white;background-color: red;font-size: 20px;">Enviar</button></a> -->
                                <!--RELEMBRAR-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--CAIXA DE DUVIDAS-->


    <div class="modal container" id="caixaduvidas" tabindex="-1" role="dialog" style="padding-right: 17px;">
        <div class="modal-dialog modal-dialog-centered row" role="document">
            <div class="modal-content" style="background-color: black;">
                <div class="modal-body our_department_area_popup" style="
    background-color: #ffffff;
     background: none; 
">
                    <div class="container">
                        <div class="row">

                            <div class="col-12">
                                <form class="form-inline"
                                    style=" padding-top: 5px;  padding-bottom: 0px;  padding-top: 26px; display: inline-block;margin-left: 30px; vertical-align: middle;width: 70%;">
                                    <label class="sr-only" for="inlineFormInputName2"></label>
                                    <div class="col-xl-12" style="top:-11px;">
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                                            placeholder="Qual é sua dúvida?" style="
     margin-top: 10px; 
     margin-left: 0px; 
    border-radius: 0px;
    border: none;
    color: black;
    margin: 0px !important;
    width: 100%;
    background-color: #dadada;
    font-size: 25px;
">
                                    </div>

                                </form>
                                <!--LOGIN-->
                                <!--RELEMBRAR-->

                                <a href="faq.php" style="
    /* font-size: 48px; */
    display: inline-block;
    /* position: relative; */
    /* margin: auto; */
    /* height: 100%; */
    vertical-align: middle;
"><button type="submit" style="color: #fdf9f9;font-size:30px;background-color: red; border-radius: 5px;border-top: red;border:0; margin-bottom: 22px;margin-left: -18px;"><i
                                            class="fa fa-search"></i></button></a>
                                <!--RELEMBRAR-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    </script>

    <script language="JavaScript">
    /*
 A função Mascara tera como valores no argumento os dados inseridos no input (ou no evento onkeypress)
 onkeypress="mascara(this, '## ####-####')"
 onkeypress = chama uma função quando uma tecla é pressionada, no exemplo acima, chama a função mascara e define os valores do argumento na função
 O primeiro valor é o this, é o Apontador/Indicador da Mascara, o '## ####-####' é o modelo / formato da mascara
 no exemplo acima o # indica os números, e o - (hifen) o caracter que será inserido entre os números, ou seja, no exemplo acima o telefone ficara assim: 11-4000-3562
 para o celular de são paulo o modelo deverá ser assim: '## #####-####' [11 98563-1254]
 para o RG '##.###.###.# [40.123.456.7]
 para o CPF '###.###.###.##' [789.456.123.10]
 Ou seja esta mascara tem como objetivo inserir o hifen ou espaço automáticamente quando o usuário inserir o número do celular, cpf, rg, etc 

 lembrando que o hifen ou qualquer outro caracter é contado tambem, como: 11-4561-6543 temos 10 números e 2 hifens, por isso o valor de maxlength será 12
 <input type="text" name="telefone" onkeypress="mascara(this, '## ####-####')" maxlength="12">
 neste código não é possivel inserir () ou [], apenas . (ponto), - (hifén) ou espaço
 */

    function mascara(t, mask) {
        var i = t.value.length;
        var saida = mask.substring(1, 0);
        var texto = mask.substring(i)
        if (texto.substring(0, 1) != saida) {
            t.value += texto.substring(0, 1);
        }
    }
    </script>

</html>