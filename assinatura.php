<?php
$data = date('d/m/Y H:i:s');

include('conexao.php');

$rs = pg_query($conn,"select * from db_assinatura order by data_inserida DESC limit 1");


?>

<!DOCTYPE html>
<html>
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
<script
    type="text/javascript"
      src="https://cdn.tiny.cloud/1/ftm17kkc0f0cm7b5hkovqivmvubqqnm003qbsssqalbr63bx/tinymce/5/tinymce.min.js" 
    referrerpolicy="origin">
  </script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    language: 'pt_PT',
    width: 580,
    height: 500,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullpage | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>

    </head>
    </head>
<!--INICIO HEADER-->
<!-- header-start -->
            <header style="background-color: red;">
                <body>
                <div class="header-area ">
                 <div id="sticky-header" class="main-header-area" style="background-color: #ffffff;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-2 col-lg-2">
                                    <div class="logo">
                                        <a href="http://bitcom.com.br/admin/administrador/index.php">
                                            <img src="img/logo.png" >
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-7">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a class="active" href="#"></a></li>
                                                <li><a href="#"></a></li>
                                                <li><a href="#"></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <!-- <div class="Appointment" style="font-size: 30px;"><h5 style="font-size: 24px;color: red;padding-left: 0;padding-right: 26px;">Hello Friend!</h5> -->
                                        <div class="book_btn d-none d-lg-block">
                                           <a href="http://bitcom.com.br/"><i class="fa fa-sign-out " aria-hidden="true" style="float: right;font-size: 30px; color: red;">Sair</i></a>
                                        </div>
                                    </h5></div>
                                </div>
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>    
            <!-- header-end -->

    <body style="background-color:#332F2F; ">
        <!--[if lte IE 9]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->

            <!-- header-start -->

        <!-- header-end -->


     <!-- INFORMATIVO  INICIO -->
        <div class="our_department_area1-1" style="background-color:#332f2f;">
            <form method="get" action="file.doc">
            <div class="container" style="background-color: #332F2F;">
                    <div class="col-xl-12 col-md-12 col-lg-12">
                        <div class="section_title text-left mb-55">
                            <h3 style="text-align: center;font-size:30px; font-family: Segoe UI semibold;top: 40px;">Imagem para assinatura</h3>
                        </div>
                    </div>
                     <!-- <div class="col-6"  style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55" style="text-align: center">
                                <input type="text" placeholder="Título" id="titulo" name="titulo" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 580px;" required>
                            </div>
                        </div> -->
                     <div class="figure">
<?php

while($row = pg_fetch_array($rs)){
                        
    echo "<img src='admin/administrador/img_produtos/".$row['imagem'] . "' alt='assinatura bitcom'>";

?>

 <!--  <p>A T-Rex on display in the Manchester University Museum.</p> -->
</div>
                        
                     <!-- div class="col-6" style="text-align: center;top: 10px;">
                            <div class="section_title text-center mb-55">
                                    <input type="date" placeholder="Validade" id="validade" name="validade" style="font-family: Segoe UI semilight;font-size: 26px; overflow-x: hidden; width: 380px;margin-left: 95px;" required>
                            </div>
                    </div> -->

                                                                                                     
                    <div class="col-6" style="text-align: center;top: 0px;">
                        <div class="section_title text-center mb-55">
<?php
    
        echo "<a href='admin/administrador/img_produtos/".$row['imagem'] . "' download='assinatura' style='color: white; font-size: 20px;'><i class='fa fa-download' aria-hidden='true'></i> Download</a>";
    }
?>
                    </div>
            </div>
            </form>
        </div>
    <!-- INFORMATIVO  FIM -->


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



<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>

</body>
</html>


