<!-- <?php
$data = date('d/m/Y H:i:s');

$conn = pg_connect("dbname='db_psql_bitcom' user='root_psql_bitcom' password='Kg36wj?7'");

$rs = pg_query($conn,"select * from db_informativo where data_validade > '$data' order by data_validade ASC");


?>
 -->
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bitcom TV Internet Provider - Provedor de Serviços Residenciais e Empresariais</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name = "viewport" content = "width = largura do dispositivo, escala inicial = 1" >
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> -->
    <script src="js/slickslider.js"></script>

    <!--FIM SEÇÃO INICIAL-->
</head>
<!--INICIO HEADER-->
<!-- header-start -->
       <?php
   include('header.php');
   ?>
            <!-- header-end-->

            <!-- bradcam_area_start  -->

            <!-- bradcam_area_end  -->



            <!-- welcome_docmed_area_start -->

            <!-- welcome_docmed_area_end -->

            <!-- testmonial_area_start -->

            <!-- testmonial_area_end -->

            <!-- business_expert_area_start  -->
            <div class="business_expert_area" style="padding-top: 0px;padding-bottom: 100px;">
                
                            
            
                <div class="business_tabs_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="container">
                    <div class="border_bottom">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                 <!-- testmonial_area_end -->
    <!-- bradcam_area_end  -->
    <div class="container">
        <div class="row" style="margin-right:0px;"></div>
            
                
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-12" style="
padding-top: 60px;
">
                <div class="single_department1">
                    <div class="department_thumb1">
                        <div style="
          width: 100%;
          border-bottom: 3px solid #A91114;
          "></div>
                    </div>
                    <div class="row" style="text-align: center;">
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="single_department1">
                    <div class="department_thumb1">
                        <div style="
    font-size: 30px;
    font-family: Segoe UI regular;
    color: #A91114;
    padding-top: 0px;
 
">INFORMATIVOS<br>Caxias do Sul:<br>Temporais</div>
<br>
<br>
<div  style="
    font-size: 24px;
    font-family: Segoe UI regular;
    color: #A91114;
    /* font-weight: bold; */
    padding-bottom: 50px;
    margin-top: -40px;
"></div>

                    </div>
                    <div class="row" style="text-align: center;">
                         <div class="col-xl-12" style="top: -33px;">
                            <div class="slider_text"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12" style="
padding-top: 60px;
">
                <div class="single_department1">
                    <div class="department_thumb1">
                        <div style="
          width: 100%;
          border-bottom: 3px solid #A91114;
          "></div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-xl-12" style="top: -33px;">
                            <div class="slider_text"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        <p><a href="index.php"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="accordion" style=" text-align: left; padding-top: 100px;margin-left: 160px;">
    <div class="cardinfo">
      <div class="card-headerinfo" id="headingOne">
        <h5 class="mb-0">
          
                <!--Img + texto lateral-->

<div class="container my-5"  >
    
    <div class="row">
        <!-- <div class="col-xl-3 col-md-9">
           <img width="260" height="165" src="https://31uyr33l4bzy2vcgfa2xq1os74f-wpengine.netdna-ssl.com/wp-content/uploads/2020/06/pagina_materiais_720x545-campanha_whatsapp_no_seu_site-pt_br-ts-v1-260x165.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">
        </div> -->
        <div class="col-9">
<?php

while($row = pg_fetch_array($rs)){

$data_inserida = substr($row['data_inserida'],8,2) . '/' . substr($row['data_inserida'],5,2) . '/' . substr($row['data_inserida'],0,4) . substr($row['data_inserida'],10,9);


echo        '<div class="col-9">
            <div data-spy="scroll" data-target="img" data-offset="0" >
                <a href="#"><h4 style="font-size: 28px;">'.$row['titulo'].'</h4></a>
                    <p class="info">Publicado em '.$data_inserida.' |<br> <span class="hidden-xs sharing" data-url="#"></span></p>
                     <p>'.$row['descricao'].'
                    </p>
                    <BR><BR><p><b><a href="' . $row['link'] . '" target="_new">' . 'Clique aqui e leia a matéria' . '
                    </a></b></p>
            </div>
            
        </div>

        
    </div>
</div>
<br>';
}
 ?>


<!--Paginação-->
<!-- <div class="container">
<div class="col-12">
<ul class="pagination justify-content-center">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">4</a></li>
  <li class="page-item"><a class="page-link" href="#">5</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>
</div>
</div> -->




                <!-- <p style="font-family: Segoe UI regular;
                font-size: 18px;">10919214 - Caxias do Sul
                    <br>
                    10918711 - Parai e Nova Araçá
                    <br>
                    10920391 - Demais localidades
                </p>   -->
                 </div>
        </div>
      </div>
    </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


            <!--INICIO QUERO MIGRAR + RODAPÉ-->
    <!-- bradcam_area_end  -->
     <div class="our_department_area11">
        <div class="container">
            <div class="row" style="
        background-color: #332F2F;">
                <div class="col-xl-4 col-md-12">
                    <div class="section_title text-left mb-55">
                        <h3 style="text-align: center;font-size:21px; font-family: Segoe UI regular;top: 40px;">Troque para Bitcom e ganhe <b style="font-weight:bold;color:white;">&nbsp;50% <br>de desconto</b> na instalação </h3>
                    </div>
                </div>
                 <div class="col-xl-4 col-md-12" style="top: 44px;">
                        <div class="section_title text-center mb-55">
                            <form action="#" method="POST">
                                <input type="text" placeholder="Seu telefone" name="telefone" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 320px;"required>
                        </div>
                    </div>
                <div class="col-xl-4 col-md-12" style="top: 32px;">
                    <div class="section_title text-center mb-55 mobile">
                         <input type="submit" class="boxed-btn3" value="Quero Trocar"  style="font-family: Segoe UI regular;font-size: 21px;" required>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Start Sample Area -->
   <?php
   include('rodape.php');
   ?>




    <!-- footer   and -->
    <!--FIM QUERO MIGRAR + RODAPÉ-->
    <!--codigos vindos da bitcom-->
<div id="chtflt" style="display:none"><script type="text/javascript">var chtfltUrl = "https://sac-bitcom.ascbrazil.com.br/Chat/id/sitebitcom"; var chtfltTitulo = "Chat Bitcom"; var chtfltVarComplementar=""; var chtfltTema = "skin-red"; var chtfltLanguage="pt-BR"; var chtfltRobo = "0"; var chtfltUrlImg="";</script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/chat/new/chatInline.js"></script><link rel="stylesheet" href="https://sac-bitcom.ascbrazil.com.br/public/chat/new/chatInline.css"></div>


<div style="position:fixed;z-index:99999;right:0;left:0;margin-right:auto;margin-left:auto;width:25%"><script>var xhr = new XMLHttpRequest();xhr.open("POST", "https://sac-bitcom.ascbrazil.com.br/Chat/asc/checar-atendente");xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");xhr.onload = function(){if(xhr.readyState == 4 && xhr.status == 200){data = JSON.parse(xhr.responseText);if(data == true){document.getElementById("imgAtendimentoSAC").src = "https://sac-bitcom.ascbrazil.com.br/public/imagens/online.png";}else{document.getElementById("imgAtendimentoSAC").src = "https://sac-bitcom.ascbrazil.com.br/public/imagens/offline.png";}}};xhr.send();</script><a href='javascript:void(window.open("https://sac-bitcom.ascbrazil.com.br/Chat/id/sitebitcom","","width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes"))'><img id="imgAtendimentoSAC"></a></div>

<div id="asc_sac" style="display:none"><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/js/basil/src/basil.js"></script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/js/basil/src/basil.list.js"></script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/js/basil/src/basil.set.js"></script><!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/json2/20130526/json2.min.js"></script><![endif]--><script type="text/javascript">var url_socket_asc = "https://sac-bitcom.ascbrazil.com.br"; var ascUrlSac = "https://sac-bitcom.ascbrazil.com.br"; var ascVar1 = 1; var ascVar2 = 3; var ascConviteAutomatizado = false; var ascTempoConviteAutomatizado = 0; var ascServicoPadrao = 1; var ascLanguage="pt-BR"</script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/Painel/public/js/templates/socket.io.js"></script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/js/site_visitantes/visitante.js"></script></div>
<!--codigos vindos da bitcom-->
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
                        <div class="col-12">
 
                        <h1 style="
d
    font-family: Segoe UI regular;
    font-size: 21px;color: white;
">Informe os dados a baixo e em breve enviaremos a melhor oferta!</h1></div>
                        <div class="col-12">                            
                            <form class="form-inline" style="padding-top: 5px;padding-bottom: 0px;padding-top: 26px;margin-left: 30px;">
                                <label class="sr-only" for="inlineFormInputName2"></label>
                                <div class="col-xl-12" style="top: 0px;">
<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="CEP" style="
    margin-top: 10px;
    margin-left: 6px;
    border-radius: 7px;
    color: black;
    background-color: white;
    font-size: 20px;
"></div>
                                     <div class="col-xl-12" style="top: 0px;">
<div class="form-group">
                                        <label for="inputtext"></label>
                                        <div class="col-xl-12" style="top: 0px;">
<input type="text" id="inputtext" placeholder="Seu telefone" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" style="
                                    margin-top: 10px;
                                    margin-left: 0px;
                                    border-radius: 7px;
                                    color: black;
                                    background-color: white;
                                    font-size: 20px;
                                    "></div>
                                        <small id="passwordHelpInline" class="text">
                                   </small>
                                </div></div>
                            </form>
                            <!--LOGIN-->
                            <!--RELEMBRAR-->
                            
                                <a type="submit" class="btn btn-primary mb-2" data-toggle="modal" data-target="#mensagens"style="margin-top: 10px;margin-left: 25px;border-radius: 7px;color: white;background-color: red;font-size: 20px;">Enviar</a>
                            <!--RELEMBRAR-->
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
                            <form class="form-inline" style="padding-top: 5px;padding-bottom: 0px;padding-top: 26px;margin-left: 30px;">
                                <label class="sr-only" for="inlineFormInputName2"></label>
                                <div class="col-xl-12" style="top: 0px;">

<h1 style="color: white; font-size: 21px;">Obrigado, em breve entraremos em contato.</h1></div>
                                     <div class="col-xl-12" style="top: 0px;">
<div class="form-group">
                                        <label for="inputtext"></label>
                                        <div class="col-xl-12" style="top: 0px; margin-bottom: 40px;">
</div>
                                        <small id="passwordHelpInline" class="text">
                                   </small>
                                </div></div>
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
    /* background: none; */
">
                <div class="container">            
                    <div class="row">
                        
                        <div class="col-12">                            
                            <form class="form-inline" style="/* padding-top: 5px; *//* padding-bottom: 0px; *//* padding-top: 26px; */display: inline-block;/* margin-left: 30px; */vertical-align: middle;width: 70%;">
                                <label class="sr-only" for="inlineFormInputName2"></label>
                                <div class="col-xl-12" style="top:-11px;">
<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Qual é sua dúvida?" style="
    /* margin-top: 10px; */
    /* margin-left: 0px; */
    border-radius: 0px;
    border: none;
    color: black;
    margin: 0px !important;
    width: 100%;
    background-color: #dadada;
    font-size: 25px;
"></div>
                                     
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
"><button type="submit" style="color: #fdf9f9;font-size:30px;background-color: red; border-radius: 5px;border-top: red;border:0; margin-bottom: 22px;margin-left: -18px;"><i class="fa fa-search"></i></button></a>
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
</html>


  

