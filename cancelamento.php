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
        <link rel="stylesheet" type="text/css" href="css/estiloie.css">
<!-- CSS here -->

        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> -->
        <script src="js/slickslider.js"></script>
    </head>
   <?php
   include('header.php');
   ?>
        <!-- header-end-->
        <div  class="container">
        <div class="row">
            <div class="col-xl-4 col-md-12" style="padding-top: 60px;">
                <div class="single_department1">
                    <div class="department_thumb1">
                        <div style="width: 100%;border-bottom: 3px solid #A91114;"></div>
                        </div>
                    <div class="row" style="text-align: center;">
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="single_department1">
                <div class="department_thumb1">
                    <div style="font-size: 30px;font-family: Segoe UI regular;color: #A91114;padding-top: 15px;"> Formulário de<br>Cancelamento</div>
                    <br>
                    <br>
            <div  style="font-size: 24px;font-family: Segoe UI regular;color: #A91114;/* font-weight: bold; */padding-bottom: 50px;margin-top: -40px;"></div>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="col-xl-12" style="top: -33px;">
                        <div class="slider_text"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12" style="padding-top: 60px;">
            <div class="single_department1">
                <div class="department_thumb1">
                    <div style="width: 100%;border-bottom: 3px solid #A91114;"></div>
                </div>
                <div class="row" style="text-align: center;">
                    <div class="col-xl-12" style="top: -33px;">
                        <div class="slider_text"></div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h4 style="text-align: initial;">Podemos te ajudar de outra forma?</h4>
        <div class="chat" style="text-align: initial; margin-top: 40px; margin-bottom: 40px;">
        <button style="background-color:white;border:white;cursor:pointer;" onclick="chamachat()">
            <img src="img/chat_cancelamento.png" style="margin-left: 40px; border-radius: 50%; width: 180px; height: 200px;">
            <h1>Chat</h1>
        </button>
            <h4 style="text-align: initial; margin-top: 40px;">Cancelar via formulário(atendimento em até 24h):</h4>
        </div>



        <!-- ONDE ESTAMOS INICIO -->
        <div id="area">
            <form action="email_cancelamento.php" method="post">
                <div class="container" style="background-color: #ffffff;">
                    
                <fieldset style="background-color: #f2f2f2;">
                    <div class="col-xl-4 col-md-8 col-lg-4">
                        <div class="section_title text-left mb-55">
                            
                        </div>
                    </div>

                    <div class="col-6"  style="text-align: center;top: 10px;">
                        <div class="section_title text-center mb-55" style="text-align: center">
                            <input type="text" placeholder="Nome Completo" id="nome" name="nome" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" required>
                        </div>
                    </div>

                    <div class="col-6" style="text-align: center;top: 10px;">
                        <div class="section_title text-center mb-55">
                                <input type="text" placeholder="Seu telefone" id="telefone" name="telefone" onkeypress="mascara(this, '## #####-####')" maxlength="13" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" required>
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
                                <input type="text" placeholder="Número" id="numero" name="numero" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;" required>
                        </div>
                    </div>

                        <!-- <div class="col-6" style="text-align: center;top: 10px;">
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
                        </div>  -->

                    <div class="col-6" style="text-align: center;top: 10px;">
                        <div class="section_title text-center mb-55">
                                <select type="text" placeholder="Cidade" id="cidade" name="cidade" style="font-family: Segoe UI semilight;font-size: 22px; overflow-x: hidden; width: 380px;" required>   
                                    <option value=""disabled selected>Informe sua Cidade</option>
                                    <option value="Antonio Prado - RS">Antonio Prado - RS</option>
                                    <option value="Bento Gonçalves - RS">Bento Gonçalves - RS</option>
                                    <option value="Bom Jesus - RS">Bom Jesus - RS</option>
                                    <option value="Campos Novos - SC">Campos Novos - SC</option>
                                    <option value="Canela - RS">Canela - RS</option>
                                    <option value="Carlos Barbosa - RS">Carlos Barbosa - RS</option>
                                    <option value="Caxias do Sul - RS">Caxias do Sul - RS</option>
                                    <option value="Farroupilha - RS">Farroupilha - RS</option>
                                    <option value="Flores da Cunha - RS">Flores da Cunha - RS</option>
                                    <option value="Garibaldi - RS">Garibaldi - RS</option>
                                    <option value="Gramado - RS">Gramado - RS</option>
                                    <option value="Lages - SC">Lages - SC</option>
                                    <option value="Nova Araçá - RS">Nova Araçá - RS</option>
                                    <option value="Nova Petrópolis -RS">Nova Petrópolis -RS</option>
                                    <option value="Novo Hamburgo - RS">Novo Hamburgo - RS</option>
                                    <option value="Osório - RS">Osório - RS</option>
                                    <option value="Paraí - RS">Paraí - RS</option>
                                    <option value="Picada Café - RS">Picada Café - RS</option>
                                    <option value="Portão - RS">Portão - RS</option>
                                    <option value="Santa Cruz do Sul - RS">Santa Cruz do Sul - RS</option>
                                    <option value="São Francisco de Paula - R">São Francisco de Paula - RS</option>
                                    <option value="São Marcos - RS">São Marcos - RS</option>
                                    <option value="Sapiranga - RS">Sapiranga - RS</option>
                                    <option value="Vacaria - RS">Vacaria - RS</option>
                                    <option value="Bom Jesus - RS">Bom Jesus - RS</option>
                                </select>
                        </div>
                    </div>
                     <div class="col-6" style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55">
                                    <input type="text" placeholder="Observação" id="observacao" name="observacao" style="font-family: Segoe UI semilight;font-size: 18px; overflow-x: hidden; width: 380px; height: 120px;" required>
                            </div>
                        </div>
                                       
                    <div class="col-6" style="text-align: center;top: 0px;">
                        <div class="section_title text-center mb-55">
                            <input type="submit"class="btn btn-primary mb-2" value="Solicitar cancelamento" class="boxed-btn3" style="font-family: Segoe UI regular;font-size: 14px;float: left;">
                            <input type="#"class="btn btn-primary mb-2" value="Conversar no chat" class="boxed-btn3" style="font-family: Segoe UI regular;font-size: 14px; float: right; width: 42%;">
                            <br>
                            <input type="button" class="btn btn-primary mb-2"value="Imprimir" onClick="window.print()" value="Imprimir" id="btncad" style="width: 50%;
                            text-align: center;" >
                        </div>
                    </div>
                </div>
            </fieldset>
            </form>
<div style="width: 100%;border-bottom: 0px solid #ffffff;"></div>
<!--INICIO QUERO MIGRAR + RODAPÉ-->
   <?php
   include('rodape.php');
   ?>
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
=
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
    function chamachat(){
    $("#btnChatFlt").click()
    }
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

<style>
    #area
{
    position:relative;

}
#area #formulario
{
    position:absolute;
    display:block;
}

fieldset {
    min-width: -23px;
    padding: 0px;
    margin: 130px;
    border: 2px solid red;
}

legend
{
    font-style:bold;
    font-family: "Segoe UI";
}
#formulario label
{
    position:absolute;
    left:19px;
    margin-right:5px;
}


#formulario input.campo_nome
{
    position:absolute;
    left:95px;
    top:23px;
    width:225px;
}
#formulario input.campo_email
{
    position:absolute;
    left:95px;
    margin-top:2px;
    width:225px;
}
</style>
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