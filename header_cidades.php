<?php
include('conexao.php');
$cidade = $_GET['local'];
?>
<style type="text/css">
<?php
$rsD = pg_query($conn,"select *,row_number() over (order by id_banner) as ordem from db_banner where cidade in ('$cidade','todos') and plataforma = 'D'");
while($row = pg_fetch_array($rsD)){
echo '.slider_bg_'.$row['ordem'].' {
  background-image: url(img/banner_pag_cidade/'.$row['nm_banner'].'.png);}';
}
?>
/* On screens that are 992px or less, set the background color to blue */
@media screen and (max-width: 992px) {
/* line 8, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_slider.scss */
.slider_area .single_slider {
  height: 1100px;
  opacity: 1;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
<?php
$rsC = pg_query($conn,"select *,row_number() over (order by id_banner) as ordem from db_banner where cidade in ('$cidade','todos')and plataforma = 'C'");
while($row = pg_fetch_array($rsC)){
echo '.slider_bg_'.$row['ordem'].' {
  background-image: url(img/banner_pag_cidade/'.$row['nm_banner'].'.png)}';
}
?>
}
/* On screens that are 600px or less, set the background color to olive */
@media screen and (max-width: 600px) {
/* line 8, C:/Users/SPN Graphics/Desktop/CL September/210 Medical/HTML/scss/_slider.scss */
.slider_area .single_slider {
  height: 1100px;
  opacity: 1;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
<?php
$rsC = pg_query($conn,"select *,row_number() over (order by id_banner) as ordem from db_banner where cidade in ('$cidade','todos')andand plataforma = 'C'");
while($row = pg_fetch_array($rsC)){
echo '.slider_bg_'.$row['ordem'].' {
  background-image: url(img/banner_pag_cidade/'.$row['nm_banner'].'.png)};';
}
?>
}    
</style>
<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container" style="width: 300px;">
                <div class="row">
                    <div class="col-xl-12">
                        <select
                            style="border-radius: 5px; border: solid #ffffff;font-family: Segoe UI regular;font-weight: 600;color: #c11920;"
                            onchange="if (this.value) window.location.href=this.value">
                            <option value="cidade.php?&local=antonio_prado"
                                <?=($_GET['local'] == 'antonio_prado')?'selected':''?>>Antonio Prado - RS</option>
                            <option value="cidade.php?&local=bento_goncalves"
                                <?=($_GET['local'] == 'bento_goncalves')?'selected':''?>>Bento Gonçalves - RS</option>
                            <option value="cidade.php?&local=bom_jesus" 
                            <?=($_GET['local'] == 'bom_jesus')?'selected':''?>>Bom Jesus - RS</option>
                            <option value="cidade.php?&local=campos_novos"
                                <?=($_GET['local'] == 'campos_novos')?'selected':''?>>Campos Novos - SC</option>
                            <option value="cidade.php?&local=canela" 
                            <?=($_GET['local'] == 'canela')?'selected':''?>>Canela - RS</option>
                            <option value="cidade.php?&local=carlos_barbosa"                            
                             <?=($_GET['local'] == 'carlos_barbosa')?'selected':''?>>Carlos Barbosa - RS</option>
                            <option value="cidade.php?&local=caxias_do_sul"
                                <?=($_GET['local'] == 'caxias_do_sul')?'selected':''?>>Caxias do Sul - RS</option>
                            <option value="cidade.php?&local=farroupilha"
                                <?=($_GET['local'] == 'farroupilha')?'selected':''?>>Farroupilha - RS</option>
                            <option value="cidade.php?&local=flores_da_cunha"
                                <?=($_GET['local'] == 'flores_da_cunha')?'selected':''?>>Flores da Cunha - RS</option>
                            <option value="cidade.php?&local=garibaldi"
                               <?=($_GET['local'] == 'garibaldi')?'selected':''?>>Garibaldi - RS</option>
                            <option value="cidade.php?&local=gramado"
                            <?=($_GET['local'] == 'gramado')?'selected':''?>>Gramado - RS</option>
                            <option value="cidade.php?&local=lajes"
                            <?=($_GET['local'] == 'lajes')?'selected':''?>>Lages - SC</option>
                            <option value="cidade.php?&local=lajeado"
                            <?=($_GET['local'] == 'lajeado')?'selected':''?>>Lajeado - RS</option>
                            <option value="cidade.php?&local=nova_araca"
                                <?=($_GET['local'] == 'nova_araca')?'selected':''?>>Nova Araçá - RS</option>
                            <option value="cidade.php?&local=nova_petropolis"
                                <?=($_GET['local'] == 'nova_petropolis')?'selected':''?>>Nova Petrópolis -RS</option>
                            <option value="cidade.php?&local=novo_hamburgo"
                                <?=($_GET['local'] == 'novo_hamburgo')?'selected':''?>>Novo Hamburgo - RS</option>
                            <option value="cidade.php?&local=osorio"
                            <?=($_GET['local'] == 'osorio')?'selected':''?>>Osório - RS</option>
                            <option value="cidade.php?&local=parai"
                            <?=($_GET['local'] == 'parai')?'selected':''?>>Paraí - RS</option>
                            <option value="cidade.php?&local=picada_cafe"
                                <?=($_GET['local'] == 'picada_cafe')?'selected':''?>>Picada Café - RS</option>
                            <option value="cidade.php?&local=portao"
                            <?=($_GET['local'] == 'portal')?'selected':''?>>Portão - RS</option>
                            <option value="cidade.php?&local=santa_cruz_do_sul"
                                <?=($_GET['local'] == 'santa_cruz_do_sul')?'selected':''?>>Santa Cruz do Sul - RS</option>
                            <option value="cidade.php?&local=sao_francisco_de_paula"
                                <?=($_GET['local'] == 'sao_francisco_de_paula')?'selected':''?>>São Francisco de Paula - RS
                            </option>
                            <option value="cidade.php?&local=sao_marcos"
                                <?=($_GET['local'] == 'sao_marcos')?'selected':''?>>São Marcos - RS</option>
                            <option value="cidade.php?&local=sapiranga"
                            <?=($_GET['local'] == 'sapiranga')?'selected':''?>>Sapiranga - RS</option>
                            <option value="cidade.php?&local=vacaria"
                            <?=($_GET['local'] == 'vacaria')?'selected':''?>>Vacaria - RS</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="internet-casa.php">Internet em Casa</a></li>
                                    <li><a href="internet-empresas.php">Para Empresas</a></li>
                                    <li style="padding-left: 10px;"><a>Bitcom Group<i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="bitcom.php">Onde estamos</a></li>
                                            <li><a href="https://www.bitcomfranchise.com.br/" target="_blank">Seja
                                                    Franqueado</a></li>
                                            <li><a href="seguros.php">Multisserviços</a></li>
                                            <li><a href="https://www.facebook.com/bitcomtecnologiaa/"
                                                    target="_blank">Tecnologia</a></li>
                                            <li><a href="http://visao.com.br/" target="_blank">Visão360</a></li>
                                            <li><a href="https://www.bitcomtv.com.br/" target="_blank">BitcomTV</a></li>

                                        </ul>
                                    </li>
                                    <li><a class="active" href="#" target="_blank"></a></li>
                                    <li style="padding-left: 10px;"><a>Sou Cliente<i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="https://rbx-visao.visao.psi.br/app_login/"
                                                    target="_blank">Acessar Portal</a></li>
                                            <li><a href="http://ip.bitcom.com.br/" target="_blank">Teste de
                                                    velocidade</a></li>
                                            <li><a href="cancelamento.php" target="_new">Cancelamento</a></li>
                                            <li><a href="informativo.php" target="_new">Informativos</a></li>
                                            <li><a href="minuta.php">Minutas</a></li>
                                        </ul>
                                    </li>
                                    <a href="faq.php"><i class="fa fa-search" aria-hidden="true"
                                            style="color: #A91114;margin-left: 36px;"></i>
                                        <a href="http://visao.com.br/" target="_blank"><img src="img/360.png"
                                                style="width: 8%;margin-left: 29px;"></i>
                                        </a>
                                        <div class="informativo" style="display: none;"><a href="informativo.php"
                                                style="margin-left: 10px;">
                                                <i class="fa fa-bell" aria-hidden="true"
                                                    style="color: #A91114;margin-bottom: 20px; margin-right: -18px;"></i></a>
                                    </a>
                        </div>
                        </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                    <div class="Appointment">
                        <a href="informativo.php" style="margin-left: 10px;">
                            <i class="fa fa-bell" aria-hidden="true"
                                style="color: #A91114;margin-bottom: 20px; margin-right: 42px;"></i></a>
                        <div class="book_btn d-none d-lg-block">
                            <h2 style="font-size: 15px; color: #4D4D4D;font-family: Segoe UI regular;font-weight: 500;">
                                Fone Comercial</h2>
                            <h2 style="color:#A91114; font-size: 22px;font-family: Segoe UI regular;font-weight: 500;">
                                0800 643 6590</h2>
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