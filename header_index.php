<?php
include('conexao.php');
$cidade = 'todos';
?>
<style type="text/css">
<?php
$rsD = pg_query($conn,"select *,row_number() over (order by id_banner) as ordem from db_banner where cidade in ('$cidade','todos')and plataforma = 'D'");
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
$rsC = pg_query($conn,"select *,row_number() over (order by id_banner) as ordem from db_banner where cidade in ('$cidade','todos')and plataforma = 'C'");
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
                                <?=($data->city == 'Antonio Prado')?'selected':''?>>Antonio Prado - RS</option>
                            <option value="cidade.php?&local=bento_goncalves"
                                <?=($data->city == 'Bento Gonçalves')?'selected':''?>>Bento Gonçalves - RS</option>
                            <option value="cidade.php?&local=bom_jesus" <?=($data->city == 'Bom Jesus')?'selected':''?>>
                                Bom Jesus - RS</option>
                            <option value="cidade.php?&local=campos_novos"
                                <?=($data->city == 'Campos Novos')?'selected':''?>>Campos Novos - SC</option>
                            <option value="cidade.php?&local=canela" <?=($data->city == 'Canela')?'selected':''?>>Canela
                                - RS</option>
                            <option value="cidade.php?&local=carlos_barbosa"
                                <?=($data->city == 'Carlos Barbosa')?'selected':''?>>Carlos Barbosa - RS</option>
                            <option value="cidade.php?&local=caxias_do_sul"
                                <?=($data->city == 'Caxias do Sul')?'selected':''?>>Caxias do Sul - RS</option>
                            <option value="cidade.php?&local=farroupilha"
                                <?=($data->city == 'Farroupilha')?'selected':''?>>Farroupilha - RS</option>
                            <option value="cidade.php?&local=flores_da_cunha"
                                <?=($data->city == 'Flores da Cunha')?'selected':''?>>Flores da Cunha - RS</option>
                            <option value="cidade.php?&local=garibaldi" <?=($data->city == 'Garibaldi')?'selected':''?>>
                                Garibaldi - RS</option>
                            <option value="cidade.php?&local=gramado" <?=($data->city == 'Gramado')?'selected':''?>>
                                Gramado - RS</option>
                            <option value="cidade.php?&local=lajes" <?=($data->city == 'Lages')?'selected':''?>>Lages -
                                SC</option>
                            <option value="cidade.php?&local=lajeado" <?=($data->city == 'Lajeado')?'selected':''?>>
                                Lajeado - RS</option>
                            <option value="cidade.php?&local=nova_araca"
                                <?=($data->city == 'Nova Araçá')?'selected':''?>>Nova Araçá - RS</option>
                            <option value="cidade.php?&local=nova_petropolis"
                                <?=($data->city == 'Nova Petrópolis')?'selected':''?>>Nova Petrópolis -RS</option>
                            <option value="cidade.php?&local=novo_hamburgo"
                                <?=($data->city == 'Novo Hamburgo')?'selected':''?>>Novo Hamburgo - RS</option>
                            <option value="cidade.php?&local=osorio" <?=($data->city == 'Osório')?'selected':''?>>Osório
                                - RS</option>
                            <option value="cidade.php?&local=parai" <?=($data->city == 'Paraí')?'selected':''?>>Paraí -
                                RS</option>
                            <option value="cidade.php?&local=picada_cafe"
                                <?=($data->city == 'Picada Café')?'selected':''?>>Picada Café - RS</option>
                            <option value="cidade.php?&local=portao" <?=($data->city == 'Portão')?'selected':''?>>Portão
                                - RS</option>
                            <option value="cidade.php?&local=santa_cruz_do_sul"
                                <?=($data->city == 'Santa Cruz do Sul')?'selected':''?>>Santa Cruz do Sul - RS</option>
                            <option value="cidade.php?&local=sao_francisco_de_paula"
                                <?=($data->city == 'São Francisco de Paula')?'selected':''?>>São Francisco de Paula - RS
                            </option>
                            <option value="cidade.php?&local=sao_marcos"
                                <?=($data->city == 'São Marcos')?'selected':''?>>São Marcos - RS</option>
                            <option value="cidade.php?&local=sapiranga" <?=($data->city == 'Sapiranga')?'selected':''?>>
                                Sapiranga - RS</option>
                            <option value="cidade.php?&local=vacaria" <?=($data->city == 'Vacaria')?'selected':''?>>
                                Vacaria - RS</option>
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
                                            <li><a href="https://www.facebook.com/bitcominternet/"
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