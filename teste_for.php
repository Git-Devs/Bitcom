<?php
include('conexao.php');
$cidade = 'caxias_do_sul';
echo 'DESKTOP'.'<BR>';
$rsD = pg_query($conn,"select * from db_banner where cidade = '$cidade' and plataforma = 'D'");
while($row = pg_fetch_array($rsD)){
echo '.slider_bg_'.$row['id_banner'].' {
  background-image: url(../img/banner/'.$row['nm_banner'].'.png);'.'<br>';
}
echo 'CELULAR'.'<BR>';
$rsC = pg_query($conn,"select * from db_banner where cidade = '$cidade'and plataforma = 'C'");
while($row = pg_fetch_array($rsC)){
echo '.slider_bg_'.$row['id_banner'].' {
  background-image: url(../img/banner/'.$row['nm_banner'].'.png);'.'<br>';
}

$rsH = pg_query($conn,"select * from db_banner where cidade = '$cidade'and plataforma = 'D'");
while($row = pg_fetch_array($rsH)){
echo '<div class="single_slider  d-flex align-items-center slider_bg_'.$row['id_banner'].'">
            <div class="container">
                <div class="row" style="text-align: center;">
                    <div class="col-xl-12" style="top: 300px;">
                        <div class="slider_text">
                            <a class="boxed-btn3" data-toggle="modal" data-target="#examplepopup">'.$row['id_banner'].'</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
}
