<?php

function Obter_Browser() {
 /**
 * Apenas os mais conhecidos...
 */
 $browsers['Chrome']             = 'Chrome';
 $browsers['Firebird']           = 'Firebird';
 $browsers['Firefox']            = 'Firefox';
 $browsers['Internet Explorer']  = 'Internet Explorer';
 $browsers['Konqueror']          = 'Konqueror';
 $browsers['Lynx']               = 'Lynx';
 $browsers['mobilexplorer']      = 'Mobile Explorer'; // Móvel
 $browsers['Mobile Safari']      = 'Mobile Safari'; // Móvel
 $browsers['MSIE']               = 'Internet Explorer';
 $browsers['Netscape']           = 'Netscape';
 $browsers['OmniWeb']            = 'OmniWeb';
 $browsers['Opera']              = 'Opera';
 $browsers['operamini']          = 'Opera Mini'; // Móvel
 $browsers['opera mini']         = 'Opera Mini'; // Móvel
 $browsers['Phoenix']            = 'Phoenix';
 $browsers['Safari']             = 'Safari';
 if (is_array($browsers)) {
 foreach ($browsers as $ua => $browser) {
 if (preg_match("|".preg_quote($ua).".*?([0-9\.]+)|i", trim($_SERVER['HTTP_USER_AGENT']), $versao)) {
 return $browser.' '.$versao[1];
 }
 }
 }
 return 'Browser Desconhecido';
 echo Obter_Browser($browsers).', '.Obter_Browser($browsers);
 }

?>




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
<!-- CSS here -->



        <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/gijgo.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> -->
        <script src="js/slickslider.js"></script>
    </head>

    <body>
        <!--[if lte IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->

            <!-- header-start -->
            <header>
                <div class="header-area ">
                 <div id="sticky-header" class="main-header-area">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-2 col-lg-2">
                                    <div class="logo">
                                        <a href="index.php">
                                            <img src="img/logo.png" >
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-8">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a class="active" href="internet-casa.html">Internet em Casa</a></li>
                                                <li><a href="internet-empresas.html">Para Empresas</a></li>
                                                <li style="padding-left: 10px;"><a>Bitcom Group<i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                            <li><a href="bitcom.html">Onde estamos</a></li>

                                                            <li><a href="https://www.bitcomfranchise.com.br/"target="_blank">Seja Franqueado</a></li>
                                                            <li><a href="seguros.html">Multisserviços</a></li>                                                   
                                                            <li><a href="https://www.facebook.com/bitcomtecnologiaa/"target="_blank">Tecnologia</a></li>
                                                            <li><a href="http://visao.com.br/"target="_blank">Visão360</a></li>
                                                            <li><a href="https://www.bitcomtv.com.br/"target="_blank">BitcomTV</a></li>
                                                            
                                                        </ul>
                                                </li>
                                                <li><a class="active" href="#"target="_blank"></a></li>
                                                <li style="padding-left: 10px;"><a>Sou Cliente<i class="ti-angle-down"></i></a>
                                                    <ul class="submenu">
                                                            <li><a href="https://rbx-visao.visao.psi.br/app_login/"target="_blank">Acessar Portal</a></li>
                                                            <li><a href="http://ip.bitcom.com.br/"target="_blank">Teste de velocidade</a></li>
                                                            <li><a href="cancelamento.html" target="_new">Cancelamento</a></li>
                                                            <li><a href="informativo.php" target="_new">Informativos</a></li>
                                                            <li><a href="minuta.php">Minutas</a></li>
                                                        </ul>
                                                </li>                                            
                                             <a href="faq.html"><i class="fa fa-search" aria-hidden="true" style="color: #A91114;margin-left: 36px;"></i>
                                                <a href="http://visao.com.br/"target="_blank"><img src="img/360.png" style="width: 8%;margin-left: 29px;"></i>
                                                </a>
                                                <div class="informativo" style="display: none;" ><a href="informativo.php" style="
    margin-left: 10px;
"><i class="fa fa-bell" aria-hidden="true" style="color: #A91114;margin-bottom: 20px; margin-right: -18px;"></i></a></a></div>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="Appointment">
                                        <a href="informativo.php" style="
    margin-left: 10px;
"><i class="fa fa-bell" aria-hidden="true" style="color: #A91114;margin-bottom: 20px; margin-right: 42px;"></i></a>
                                        <div class="book_btn d-none d-lg-block">
                                          <h2 style="font-size: 15px; color: #4D4D4D;font-family: Segoe UI regular;font-weight: 500;">Fone Comercial</h2>
                                            <h2 style="color:#A91114; font-size: 22px;font-family: Segoe UI regular;font-weight: 500;">0800 643 6590</h2>                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- header-end-->

        <!-- bradcam_area_start  -->
        <div class="bradcam_area22 breadcam_bg_Untitled-22 bradcam_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3></h3>
                            <p><a href="index.html"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bradcam_area_end  -->



        <!-- ONDE ESTAMOS INICIO -->
        <div class="our_department_area1-1">
            <form action="cancelamento.php" method="post">
            <div class="container" style="background-color: #332F2F;">
                    <div class="col-xl-4 col-md-8 col-lg-4">
                        <div class="section_title text-left mb-55">
                            <h3 style="text-align: center;font-size:21px; font-family: Segoe UI regular;top: 40px;">Preencha o formulário a seguir:</h3>
                        </div>
                    </div>
                     <div class="col-6"  style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55" style="text-align: center">
                                    <input type="text" placeholder="Nome Completo" id="nome" name="nome" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" required>
                            </div>
                        </div>
                     <div class="col-6" style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55">
                                    <input type="number" placeholder="Seu telefone" id="telefone" name="telefone" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" required>
                            </div>
                        </div>
                        <div class="col-6" style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55">
                                    <input type="text" placeholder="E-mail" id="email" name="email" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" required>
                            </div>
                        </div>
                     <div class="col-6" style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55">
                                 <input placeholder="CPF/CNPJ" id="cpf" name='cpfcnpj' type="text" onkeypress='mascaraMutuario(this,cpfCnpj)' onblur='clearTimeout()' style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" maxlength="20" required>
                                 <!--  <input type="number" placeholder="CPF/CNPJ" name="cpfcnpj" id="cpfcnpj" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" required > -->
                                  <br>
                                  <span id="cpfResponse"></span></p>
                            </div>
                        </div>
                     <div class="col-6" style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55">
                                    <select type="text" placeholder="Motivo do Cancelamento" id="motivo" name="motivo" style="font-family: Segoe UI semilight;font-size: 22px; overflow-x: hidden; width: 380px;" required>   
                                       <option value="" disabled selected>Motivo</option>
                                        <option value="Atendimento Comercial">Atendimento Comercial</option>
                                         <option value="Atendimento Pela Central Cliente">Atendimento Pela Central Cliente</option>
                                          <option value="Dificuldades Financeiras">Dificuldades Financeiras</option>
                                           <option value="Falecimento">Falecimento</option>
                                            <option value="Mudança de Cidade">Mudança de Cidade</option>
                                             <option value="Problemas Técnicos">Problemas Técnicos</option>
                                              <option value="Troca por outro plano de mercado">Troca por outro plano de mercado</option>
                                        
                                    </select>
                            </div>
                        </div> 
                        <div class="col-6" style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55">
                                    <input type="text" placeholder="Endereço de instalação" id="endereco" name="endereco" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" required>
                            </div>
                        </div>
                        <div class="col-6" style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55">
                                    <select type="text" placeholder="Cidade" id="cidade" name="cidade" style="font-family: Segoe UI semilight;font-size: 22px; overflow-x: hidden; width: 380px;" required>   
                                        <option value=""disabled selected>Informe sua Cidade</option>
                                        <option value="Bento Gonçalves - RS">Bento Gonçalves - RS</option>
                                        <option value="Campos Novos - SC">Campos Novos - SC</option>
                                        <option value="Canela - RS">Canela - RS</option>
                                        <option value="Carlos Barbosa - RS">Carlos Barbosa - RS</option>
                                        <option value="Caxias do Sul - RS">Caxias do Sul - RS</option>
                                        <option value="Farroupilha - RS">Farroupilha - RS</option>
                                        <option value="Flores da Cunha - RS">Flores da Cunha - RS</option>
                                        <option value="Gramado - RS">Gramado - RS</option>

                                        <option value="Lages - SC">Lages - SC</option>
                                        <option value="Nova Araçá - RS">Nova Araçá - RS</option>
                                        <option value="Nova Petrópolis -RS">Nova Petrópolis -RS</option>
                                        <option value="Osório - RS">Osório - RS</option>
                                        <option value="Paraí - RS">Paraí - RS</option>
                                        <option value="Portão - RS">Portão - RS</option>
                                        <option value="Santa Cruz do Sul - RS">Santa Cruz do Sul - RS</option>
                                        <option value="São Francisco de Paula - R">São Francisco de Paula - RS</option>
                                        <option value="Vacaria - RS">Vacaria - RS</option>
                                        <option value="Bom Jesus - RS">Bom Jesus - RS</option>
                                        
                                    </select>
                            </div>
                        </div>                                                 

                        <div class="col-6" style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55">
                                    <input type="text" placeholder="Observação" id="observacao" name="observacao" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" required>
                            </div>
                        </div>
                   <div class="col-6" style="text-align: center;top: 0px;">
                        <div class="section_title text-center mb-55">
                        <input type="submit"class="btn btn-primary mb-2" value="Solicitar cancelamento" class="boxed-btn3" style="font-family: Segoe UI regular;font-size: 21px;">

            </div>
        </div>
</div>
                                </form>

<div style="width: 100%;border-bottom: 0px solid #ffffff;"></div>

<!--INICIO QUERO MIGRAR + RODAPÉ-->
         
<footer class="footer">
     <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="footer_widget text-left">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/Logobitcom.png" style="width: 189px;height: 97px;margin-left: -4px;">
                            </a>
                        </div>
                        <p>
                            
                        </p> <style>span{font-weight: bold;}</style>
                        <span style="font-family: Segoe UI regular;font-size: 35;margin-left: -5px;color: #332F2F;">Horário de Atendimento</span>
                    <p></p>
                    <br>
                    <p>
                        <span style="font-family: Segoe UI regular;font-size: 35;color: #A91114;margin-left: -8px;"> Segunda à Sexta-feira</span>

                        <br>
                        <span style="font-family: Segoe UI regular;font-size: 35;color: #A91114;margin-left: -6px;"> Das 08:30 às 18:30</span>
                        <br>
                        <span style="font-family: Segoe UI regular;font-size: 35;color: #A91114;margin-left: -6px;"> Sábados</span>

                        <br>
                        <span style="font-family: Segoe UI regular;font-size: 35;color: #A91114;margin-left: -7px;"> Das 09:00 às 12:00</span>

                    </p>
                   
                   <div class="ajustes">
                    <div class="socail_links text-left"><p href="#" style="font-family: Segoe UI regular;font-size: 35;margin-right: -83px; font-weight: 400; color:black; text-left !important"><b><a href="https://www.bitcomfranchise.com.br/"target="_blank">Seja um franqueado</a>      <a href="http://visao.com.br/"target="_blank">Visão 360°</a> </b>
                        <br>
                        <br>
                        </p><p href="#" style="font-family: Segoe UI regular;font-size: 35;margin-right: -1px;font-weight: 400;color:black;text-align: left;"><b><a href="bitcom.html"target="_blank">Bitcom Corporate</a>          <a href="https://www.bitcomtv.com.br/web/"target="_blank">Bitcom TV</a></b>
                    </p></div></div>
                    
                </div>
            </div>
            
            
            <div class="col-6 text-right">
                <div class="footer_widget">
                    <h3 class="footer_title">       
                    </h3>
                    <p>
                    <div style="text-align: right;"><span style="font-family: Segoe UI regular; font-size: 30;text-align: left;margin-left: 20px;color: #332F2F;">Televendas</span><span style="font-size: 35;color: #A91114;"> &emsp;0800 643 6590</span></div>
                       
                    <div style="text-align: right;"><span style="font-family: Segoe UI regular; font-size: 30;text-align:left;color: #332F2F;margin-left: -56px;">Vendas por Whatsapp</span><span style="font-size: 35;color: #A91114;"> &emsp;54 9 8402-3364</span></div>
                       
                       <div style="text-align: right;"><span style="font-family: Segoe UI regular; font-size: 30;color: #332F2F;">Suporte 24/7</span><span style="font-size: 35;color: #A91114;"> &emsp;0800 648 9050</span></div>    
                        <br>      
                       <br>
                       <span style="font-family: Segoe UI regular; font-size: 35; color: #332F2F;">Franqueadora <br> Rua Bento Gonçalves, 1012 <br> Centro | Caxias do Sul | RS <br><br><br> Geral (54) 3209 9000<br>Comercial (54) 3209 9060 <br><br> </span>
                       <br> 


                  <!--redes sociais com cores-->

                   <div class="s-m">
                    <a href="https://www.facebook.com/bitcominternet"target="_blank"><img src="img/facebook.png" style="width: 10%;margin-left: -22px;margin-top: 35px;"></a>
                    <a href="https://www.instagram.com/bitcominternet"target="_blank"><img src="img/instagram.png" style="width: 10%;margin-top: 35px;"></a>    
                    <a href="https://www.linkedin.com/company/bitcomgroup/"target="_blank"><img src="img/linkedin.png" style="width: 10%;margin-top: 35px;"></a>
                    <a href="https://youtube.com/bitcominternet"target="_blank"><img src="img/youtube.png" style="width: 10%;margin-top: 35px;"></a>
                    <a href="https://twitter.com/bitcominternet"target="_blank"><img src="img/twitter.png" style="width: 10%;margin-top: 35px;"></a>
                </div>
                <!--redes sociais com cores-->
        </div>
    </div>
</div>
</div>
</div>
</footer>
<!-- footer start -->
 <footer class="footer">
        
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 <script>document.write(new Date().getFullYear());</script><div class="footer-copy">
    <p class="footer-copy-p color-preto-3">©  Bitcom TV &amp; Internet Provider - <a href="declaracao_AR.pdf" target="_new" style="color:#4D4D4D;">Bitcom Certificadora Digital: Declaração de Práticas de Negócio</a><br>Desenvolvido por <a href="http://www.pralike.com.br/"; style="color:#4D4D4D;">Pralike Comunicação Digital e <a href="https://www.nucleosistemas.com.br/"; style="color:#4D4D4D;">Núcleo Sistemas</a></p>
    <div class="clear-both"></div>
</div>  </a>
 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
 </footer>
<!-- footer end  -->
<!--codigos vindos da bitcom-->
<div id="chtflt" style="display:none"><script type="text/javascript">var chtfltUrl = "https://sac-bitcom.ascbrazil.com.br/Chat/id/sitebitcom"; var chtfltTitulo = "Fale Conosco"; var chtfltVarComplementar=""; var chtfltTema = "skin-red"; var chtfltLanguage="pt-BR"; var chtfltRobo = "0"; var chtfltUrlImg="";</script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/chat/new/chatInline.js"></script><link rel="stylesheet" href="https://sac-bitcom.ascbrazil.com.br/public/chat/new/chatInline.css"></div>

<div style="position:fixed;z-index:99999;right:0;left:0;margin-right:auto;margin-left:auto;width:25%"><script>var xhr = new XMLHttpRequest();xhr.open("POST", "https://sac-bitcom.ascbrazil.com.br/Chat/asc/checar-atendente");xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");xhr.onload = function(){if(xhr.readyState == 4 && xhr.status == 200){data = JSON.parse(xhr.responseText);if(data == true){document.getElementById("imgAtendimentoSAC").src = "https://sac-bitcom.ascbrazil.com.br/public/imagens/online.png";}else{document.getElementById("imgAtendimentoSAC").src = "https://sac-bitcom.ascbrazil.com.br/public/imagens/offline.png";}}};xhr.send();</script><a href='javascript:void(window.open("https://sac-bitcom.ascbrazil.com.br/Chat/id/sitebitcom","","width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes"))'><img id="imgAtendimentoSAC"></a></div>

<div id="asc_sac" style="display:none"><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/js/basil/src/basil.js"></script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/js/basil/src/basil.list.js"></script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/js/basil/src/basil.set.js"></script><!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/json2/20130526/json2.min.js"></script><![endif]--><script type="text/javascript">var url_socket_asc = "https://sac-bitcom.ascbrazil.com.br"; var ascUrlSac = "https://sac-bitcom.ascbrazil.com.br"; var ascVar1 = 1; var ascVar2 = 3; var ascConviteAutomatizado = false; var ascTempoConviteAutomatizado = 0; var ascServicoPadrao = 1; var ascLanguage="pt-BR"</script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/Painel/public/js/templates/socket.io.js"></script><script type="text/javascript" src="https://sac-bitcom.ascbrazil.com.br/public/js/site_visitantes/visitante.js"></script></div>
<!--codigos vindos da bitcom-->
<!-- <script type="text/javascript">
    function is_cpf (c) {

      if((c = c.replace(/[^\d]/g,"")).length != 11)
        return false

      if (c == "00000000000")
        return false;

      var r;
      var s = 0;

      for (i=1; i<=9; i++)
        s = s + parseInt(c[i-1]) * (11 - i);

      r = (s * 10) % 11;

      if ((r == 10) || (r == 11))
        r = 0;

      if (r != parseInt(c[9]))
        return false;

      s = 0;

      for (i = 1; i <= 10; i++)
        s = s + parseInt(c[i-1]) * (12 - i);

      r = (s * 10) % 11;

      if ((r == 10) || (r == 11))
        r = 0;

      if (r != parseInt(c[10]))
        return false;

      return true;
    }


    function fMasc(objeto,mascara) {
    obj=objeto
    masc=mascara
    setTimeout("fMascEx()",1)
    }

      function fMascEx() {
    obj.value=masc(obj.value)
    }

    function mCPF(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
    }

    cpfCheck = function (el) {
        document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">VÁLIDO</span>' : '<span style="color:#ff0000">INVÁLIDO</span>';
        if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
    }
</script> -->
<script>function mascaraMutuario(o,f){
    v_obj=o
    v_fun=f
    setTimeout('execmascara()',1)
}

function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}

function cpfCnpj(v){

    //Remove tudo o que não é dígito
    v=v.replace(/\D/g,"")

    if (v.length <= 14) { //CPF

        //Coloca um ponto entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d)/,"$1.$2")

        //Coloca um ponto entre o terceiro e o quarto dígitos
        //de novo (para o segundo bloco de números)
        v=v.replace(/(\d{3})(\d)/,"$1.$2")

        //Coloca um hífen entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")

    } else { //CNPJ

        //Coloca ponto entre o segundo e o terceiro dígitos
        v=v.replace(/^(\d{2})(\d)/,"$1.$2")

        //Coloca ponto entre o quinto e o sexto dígitos
        v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")

        //Coloca uma barra entre o oitavo e o nono dígitos
        v=v.replace(/\.(\d{3})(\d)/,".$1/$2")

        //Coloca um hífen depois do bloco de quatro dígitos
        v=v.replace(/(\d{4})(\d)/,"$1-$2")

    }

    return v
}</script>
<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 1500,
            arrows: true,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 1100,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });
    
</script>

<!--contact js-->
<!-- <script src="js/vendor/modernizr-3.5.0.min.js"></script> -->
<!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
<!-- <script src="js/popper.min.js"></script> -->
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


    <!-- footer end -->
    <script>
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 1500,
                arrows: true,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 1
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1
                    }
                }]
            });
        });
    </script>



<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="js/main.js"></script>
<!--Modal-->
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
                                            <a href="index.html" class="boxed-btn3">Quero assinar</a>
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
                                            <a href="contact.html" class="boxed-btn3">Já sou cliente</a>
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
<div class="modal modal-home container" id="mensagensrecebida" tabindex="-1" role="dialog">
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

<h1 style="color: white; font-size: 21px;">Sua mensagem foi recebida
com sucesso. Em breve entraremos em contato.</h1></div>
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
                            
                                <!-- <a href="apps.html">
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
                            
                            <a href="faq.html" style="
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
/
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


