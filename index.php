<?php
include_once 'common.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $lang['title']; ?></title>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="<?php echo $lang['MetaDescription']; ?>" />
<meta name="keywords" content="<?php echo $lang['MetaKeywords']; ?>"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="admin/css/main.css">
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="all">
<link href="css/bootstrap-switch.min.css" type="text/css" rel="stylesheet" media="all">
<link href="css/select2.min.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/custom.css">
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.2.3.min.js"></script> 
<script>
    $(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
     $(".color_letter_idioma a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          {
              $('.color_letter_idioma .text_idioma.active').removeClass('active');
              $(this).addClass("active");
          }
     });
     $(".color_letter_idioma2 a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          {
              $('.color_letter_idioma2 .text_idioma2.active').removeClass('active');
              $(this).addClass("active");
          }
     });
});
</script>


<link href='//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>



<link href="css/index.css" rel="stylesheet"> 



</head>



<body>
    
    
    <!-- Loader -->
<div class="back" style="display:block;">
    <div class="load"></div>
</div>    

    
    <!-- banner -->
    <div class="banner">
        <div class="header">
            <!-- header -->
            <div class="container">
                <div class="col-xs-12" style="z-index: 999;">
                    <div class="color_letter_idioma2 col-mobile-out">
                    <a href="index.php?lang=pt" class="text_idioma2 active"><img src="images/languages/portugal.png" class="img-lang" alt="portugal" title="PT"></a> 
                    <a href="index.php?lang=en" class="text_idioma2"><img src="images/languages/inglaterra.png" class="img-lang" alt="inglaterra" title="EN"></a>
                    <a href="index.php?lang=fr" class="text_idioma2"><img src="images/languages/france.png" class="img-lang" alt="frança" title="FR"></a> 
                    <a href="index.php?lang=de" class="text_idioma2"><img src="images/languages/alemanha.png" class="img-lang" alt="alemanha" title="DE"></a>
                    </div>
                </div>
                
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#"><?php echo $lang['slogan']; ?></a>
                    </div>
                    <!-- navbar-header -->
                    
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                <li class="col-mobile-in"><div class="color_letter_idioma" >
                    <a href="index.php?lang=pt" class="text_idioma active"><img src="images/languages/portugal.png" class="img-lang" alt="portugal" title="PT"></a> 
                    <a href="index.php?lang=en" class="text_idioma"><img src="images/languages/inglaterra.png" class="img-lang" alt="inglaterra" title="EN"></a>
                    <a href="index.php?lang=fr" class="text_idioma"><img src="images/languages/france.png" class="img-lang" alt="frança" title="FR"></a> 
                    <a href="index.php?lang=de" class="text_idioma"><img src="images/languages/alemanha.png" class="img-lang" alt="alemanha" title="DE"></a>
                    </div></li>
                        <ul class="nav navbar-nav navbar-right">
                                                        
                            <li><a href="#about" class="scroll"><?php echo $lang['restaurante']; ?></a></li>
                            <!-- <li><a target="_blank" href="flip/menu.html" >Menus & Vinhos</a></li> -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $lang['menus_vinhos']; ?>
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu" id="menu_drop">
                                  <li style="text-align: center"><a target="_blank" href="<?php echo $lang['menu-comida-dia']; ?>" ><?php echo $lang['menus_vinhos_dia']; ?></a></li>
                                  <li style="text-align: center"><a target="_blank" href="<?php echo $lang['menu-comida']; ?>"><?php echo $lang['menus_vinhos_noite']; ?></a></li>
                                </ul>
                              </li>
                            
                            <li><a href="#" data-toggle="modal" data-target="#add_reserve"><?php echo $lang['reservas']; ?></a></li>
                            <li><a href="#menu" class="scroll"><?php echo $lang['testemnunhos']; ?> </a></li>
                            <li><a href="#gallery" class="scroll"><?php echo $lang['galeria']; ?></a></li>
                            <li><a href="#contact" class="scroll"><?php echo $lang['contactos']; ?></a></li>
                                                        
                        </ul>   
                        <div class="clearfix"> </div>   
                    </div>
                </nav>
            </div> 
        </div>
        <!-- //header -->
        <!-- banner-text -->
        <div class="banner-text"> 
            <div class="flexslider">
                <img class="center-img" src="admin/images/logo.png" >
                <ul class="slides">
                    
                    <li>
                        <p><?php echo $lang['init_desc']; ?></p>
                        <a href="#" class="more" style="margin-top: -50px;" data-toggle="modal" data-target="#add_reserve"><?php echo $lang['reserva_efectuada']; ?></a>  
                    </li>
                    <li>
                        <p><?php echo $lang['init_desc2']; ?></p>
                        <a href="#" class="more" style="margin-top: -50px;" data-toggle="modal" data-target="#add_reserve"><?php echo $lang['reserva_efectuada']; ?></a>  
                    </li>
                    <li>
                        <p><?php echo $lang['init_desc3']; ?></p>
                        <a href="#" class="more" style="margin-top: -50px;" data-toggle="modal" data-target="#add_reserve"><?php echo $lang['reserva_efectuada']; ?></a>  
                    </li>
                </ul>
            </div>  
        </div> 
        <!-- //banner-text --> 
    </div>
    
    <!-- //banner --> 
    <!-- welcome --> 
    <div id="about" class="welcome"> 
        <div class="container">
            <div class="agile-title">
                <h1> <?php echo $lang['bem_vindo_menu']; ?>! </h1>
            </div>
            <div class="w3ls-row">
                <div class="col-md-6 welcome-left">
                    <div class="welcome-img">
                        <img src="images/Bem-Vindo/restaurante-la-cigale.jpg" class="img-responsive zoom-img" alt="restaurante la cigale - entrada" height="100%" width="100%" />
                    </div>
                    <div class="col-md-6 welcome-left-grids">
                        <div class="welcome-img">
                            <img src="images/Bem-Vindo/por-de-sol.jpg" class="img-responsive zoom-img" alt="restaurante la cigale - por do sol" height="100%" width="100%" />
                        </div>
                    </div>
                    <div class="col-md-6 welcome-left-grids">
                        <div class="welcome-img">
                            <img src="images/Bem-Vindo/dourada-escalada.jpg" class="img-responsive zoom-img" alt="restaurante la cigale - dourada assada" height="100%" width="100%" />
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 welcome-right"> 
                    <?php echo $lang['text-bem']; ?>

                </div>
                
                <div class="clearfix"> </div>
            </div> 
            
            <div class="open-hours-row row">
                        <div class="col-md-3 open-hours-left">
                            <h4><?php echo $lang['horario_funcionamento']; ?></h4>
                        </div>
                         <div class="col-md-3 open-hours-left">
                            <?php echo $lang['almoco']; ?>
                        </div>
                        <div class="col-md-3 open-hours-left">
                            <?php echo $lang['jantar']; ?>
                        </div>
                        <div class="col-md-3 open-hours-left">
                            <?php echo $lang['reserva']; ?>
                        </div>
                    </div>
                    
                    
        </div>
    </div>
    
    
    
        <!-- especialidades -->
    <div id="especialidades" class="especialidades">  
        <div class="container">
            <div class="agile-title">
                <h1> <?php echo $lang['especialidades_menu']; ?> </h1>
            </div>
            <ul class="accordion"> 
                <li class="slide-01">
                                        <p class="esp"><?php echo $lang['esp1']; ?></p>
                    <div class="menu-left">
                        <img src="images/especialidades/ameijoa.jpg" alt="restaurante la cigale - ameijoas Bulhão Pato" height="100%" width="100%" />
                        <div class="menu-right">
                            <h4><?php echo $lang['esp1']; ?></h4>
                            <p></p>
                        </div>
                    </div>  
                </li> 
                <li class="slide-08">
                                        <p class="esp2"><?php echo $lang['esp8']; ?></p>
                    <div class="menu-left">
                        <img src="images/especialidades/cataplana.jpg" alt="restaurante la cigale - cataplana" height="100%" width="100%" />
                        <div class="menu-right">
                            <h4><?php echo $lang['esp8']; ?></h4>
                            <p></p>
                        </div>
                    </div>
                </li>
                <!--<li class="slide-02">
                                        
                    <div class="menu-left">
                        <img src="images/especialidades/peixe-fresco.jpg" alt="restaurante la cigale - peixe fresco"/>
                        <div class="menu-right">
                            <h4><?php echo $lang['esp2']; ?></h4>
                            <p></p>
                        </div>
                    </div>  
                </li>-->
                <li class="slide-05">
                                        <p class="esp3"><?php echo $lang['esp5']; ?></p>
                    <div class="menu-left">
                        <img src="images/especialidades/peixe-grelhado.jpg" alt="restaurante la cigale - peixe grelhado" height="100%" width="100%" />
                        <div class="menu-right">
                            <h4><?php echo $lang['esp5']; ?></h4>
                            <p></p>
                        </div> 
                    </div>
                </li>
                <!--
                <li class="slide-03">
                                        
                    <div class="menu-left">
                        <img src="images/especialidades/peixe-escalado.jpg" alt="restaurante la cigale - peixe escaldado" height="100%" width="100%" />
                        <div class="menu-right">
                            <h4><?php echo $lang['esp3']; ?></h4>
                            <p></p>
                        </div>
                    </div>
                </li> 
                -->
                <li class="slide-04">
                                        <p class="esp4"><?php echo $lang['esp4']; ?></p>
                    <div class="menu-left">
                        <img src="images/especialidades/salada-polvo.jpg" alt="restaurante la cigale - salada de polvo" height="100%" width="100%" />
                        <div class="menu-right">
                            <h4><?php echo $lang['esp4']; ?></h4>
                            <p></p>
                        </div>
                    </div>
                </li> 
                
                <li class="slide-06">
                                        <p class="esp5"><?php echo $lang['esp6']; ?></p>
                    <div class="menu-left">
                        <img src="images/especialidades/arroz-marisco.jpg" alt="restaurante la cigale - arroz marisco" height="100%" width="100%" />
                        <div class="menu-right">
                            <h4><?php echo $lang['esp6']; ?></h4>
                            <p></p>
                        </div>
                    </div>
                </li>
                <!-- <li class="slide-07">
                    <div class="menu-left">
                        <img src="images/especialidades/camaroes.jpg" alt="restaurante la cigale - camaroes" height="100%" width="100%" />
                        <div class="menu-right">
                            <h4><?php echo $lang['esp7']; ?></h4>
                            <p></p>
                        </div>
                    </div>
                </li> -->
                
                <!-- <li class="slide-09">
                    <div class="menu-left">
                        <img src="images/especialidades/sapateira.jpg" alt="restaurante la cigale - sapateira" height="100%" width="100%" />
                        <div class="menu-right">
                            <h4><?php echo $lang['esp9']; ?></h4>
                            <p></p>
                        </div>
                    </div>
                </li> -->
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //especialidades -->
    
    
    
    <!-- menu -->
    <div id="menu" class="menu">  
        <div class="slid" style="padding: 0px;">
            
           <div class="header">
           
            <div class="banner-text" id="bann"> 
            <div class="agile-title">
                <h1 class="com_tes"> <?php echo $lang['testemunhos_menu']; ?> </h1>
            </div>
            
                    <div class="flexslider">
                        <ul id="slider">
                        </ul>
                    </div>
                    
                
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                          
                        </div>
                        
                        
                    
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <!-- <span class="glyphicon glyphicon-chevron-left"></span>
                          <span class="sr-only">Previous</span> -->
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                          <!--  <span class="glyphicon glyphicon-chevron-right"></span>
                          <span class="sr-only">Next</span> -->
                        </a>
                      </div>
            </div>  
            
            <div id="info_ranking">
                
            </div>
            

                    
                    
                    
                    
                    
                    
                    
                     
                    
                </div> 
            </div>
        </div>
    </div>
    
    
    
    <!-- //team -->
    <!-- gallery -->
    <div id="gallery" class="gallery">
        <div class="container">
            <div class="agile-title">
                <h1> <?php echo $lang['galeria_menu']; ?> </h1>
            </div>
            <div class="gallery-agileinfo-row">  
                <div class="col-md-4 gallery-grids">
                    <div class="hover ehover14">
                        <a href="images/galeria/lacigale-esplanada.jpg" class="swipebox" >
                            <img src="images/galeria/lacigale-esplanada.jpg" alt="restaurante la cigale - esplanada" class="img-responsive" height="100%" width="100%" />
                            
                            
                        </a>    
                    </div>
                </div>
                <div class="col-md-4 gallery-grids">
                    <div class="hover ehover14">
                        <a href="images/galeria/lacigale-pescadores.jpg" class="swipebox" >
                            <img src="images/galeria/lacigale-pescadores.jpg" alt="restaurante la cigale - barco dos pescadores" class="img-responsive" height="100%" width="100%" />
                            
                        </a>    
                    </div>
                </div>
                <div class="col-md-4 gallery-grids">
                    <div class="hover ehover14">
                        <a href="images/galeria/lacigale-exterior.jpg" class="swipebox" >
                            <img src="images/galeria/lacigale-exterior.jpg" alt="restaurante la cigale - exterior" class="img-responsive" height="100%" width="100%" />
                            
                        </a>    
                    </div>
                </div>
                <div class="col-md-4 gallery-grids gallery-grids-mdl">
                    <div class="hover ehover14">
                        <a href="images/galeria/lacigale-praia.jpg" class="swipebox" >
                            <img src="images/galeria/lacigale-praia.jpg" alt="restaurante la cigale - praia" class="img-responsive" height="100%" width="100%" />
                            
                        </a>    
                    </div>
                </div>
                <div class="col-md-4 gallery-grids gallery-grids-mdl">
                    <div class="hover ehover14">
                        <a href="images/galeria/lacigale-entrada.jpg" class="swipebox" >
                            <img src="images/galeria/lacigale-entrada.jpg" alt="restaurante la cigale - entrada" class="img-responsive" height="100%" width="100%" />
                            
                        </a>    
                    </div>
                </div>
                <div class="col-md-4 gallery-grids gallery-grids-mdl">
                    <div class="hover ehover14">
                        <a href="images/galeria/lacigale-esplanadas.jpg" class="swipebox" >
                            <img src="images/galeria/lacigale-esplanadas.jpg" alt="restaurante la cigale - esplanada" class="img-responsive" height="100%" width="100%" />
                            
                        </a>    
                    </div>
                </div>
                <div class="col-md-4 gallery-grids">
                    <div class="hover ehover14">
                        <a href="images/galeria/lacigale-peixe.jpg" class="swipebox" >
                            <img src="images/galeria/lacigale-peixe.jpg" alt="restaurante la cigale - peixe fresco" class="img-responsive" height="100%" width="100%" />
                            
                        </a>    
                    </div>
                </div>
                <div class="col-md-4 gallery-grids">
                    <div class="hover ehover14">
                        <a href="images/galeria/lacigale-sala.jpg" class="swipebox" >
                            <img src="images/galeria/lacigale-sala.jpg" alt="restaurante la cigale - peixe fresco" class="img-responsive" height="100%" width="100%" />
                            
                        </a>    
                    </div>
                </div>
                <div class="col-md-4 gallery-grids">
                    <div class="hover ehover14">
                        <a href="images/galeria/lacigale-bar.jpg" class="swipebox" >
                            <img src="images/galeria/lacigale-bar.jpg" alt="restaurante la cigale - bar" class="img-responsive" height="100%" width="100%" />
                            
                        </a>    
                    </div>
                </div>
                <div class="clearfix"> </div> 
            </div>
        </div>
    </div>
    <!-- //gallery -->
    
    
    <!-- especialidades -->
    <!-- <div id="premios" class="premios">  
        <div class="container">
            <div class="agile-title">
                <h1> Premios e Noticias </h1>
            </div>
            <ul class="accordion"> 
                          
                <li class="slide-01">
                    <div class="menu-left">
                        <img src="images/m1.jpg" alt="restaurante la cigale - "/>
                        <div class="menu-right">
                            <h4>Blandit sed </h4>
                            <h5>$20 </h5>
                            <p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
                        </div>
                    </div>  
                </li> 
                <li class="slide-02">
                    <div class="menu-left">
                        <img src="images/m2.jpg" alt=""/>
                        <div class="menu-right">
                            <h4>Faucibus </h4>
                            <h5>$15 </h5>
                            <p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
                        </div>
                    </div>  
                </li> 
                <li class="slide-03">
                    <div class="menu-left">
                        <img src="images/m3.jpg" alt=""/>
                        <div class="menu-right">
                            <h4>Vulputate </h4>
                            <h5>$50 </h5>
                            <p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
                        </div>
                    </div>
                </li> 
                <li class="slide-04">
                    <div class="menu-left">
                        <img src="images/m4.jpg" alt=""/>
                        <div class="menu-right">
                            <h4>Fusce sed </h4>
                            <h5>$60 </h5>
                            <p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
                        </div>
                    </div>
                </li> 
            </ul>
            <div class="clearfix"> </div>
        </div>
    </div>
    -->
    <!-- //especialidades -->
    
    
    
    
    
    
    <!-- address -->
    <div id="contact" class="address"> 
        <div class="container">
            <div class="agile-title">
                <h1> <?php echo $lang['contactos_menu']; ?> </h1>
            </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: center;">
                        <img src="images/contactos/morada-icon.png" style="width: 25px;"> Restaurante La Cigale <p style="text-align: center; padding-left: 30px;">Praia de Olhos d´Agua</p> <p style="text-align: center; padding-left: 30px;">8200 Albufeira-Algarve</p>
                    </div>
                
                    <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: center;">
                        <img src="images/contactos/telefone-icon.png" style="width: 25px;"> <a title="Telefone do Restaurant La Cigale" href="tel:+351289501637" style="color: #000!important; font-size: 15px;">+351 289 501 637</a>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: center;">
                        <img src="images/contactos/email-icon.png" style="width: 25px;"> <a href="mailto:info@restaurantelacigale.net" style="color: #000!important; font-size: 15px;"> info@restaurantelacigale.net</a>
                    </div>
            </div>
        </div>
    </div>
    <!-- //address -->
    <!-- contact -->
    <div class="contact">
        <div class="col-md-6 contact-left">
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBID5Z_Iuv6A2xX7cfvnDgJyJ1PCH31TQc'></script>
            <div style='overflow:hidden;height:auto;width:100%;'>
                <div id='gmap_canvas' style='height:400px;width:100%;'></div>
          <div>
          </div>
          <div>
          </div>
          <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16, scrollwheel: false, navigationControl: false, mapTypeControl: false,scaleControl: false, draggable: true, center:new google.maps.LatLng(37.089781,-8.190837999999985),mapTypeId: google.maps.MapTypeId.SATELLITE };map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(37.089781,-8.190837999999985)});infowindow = new google.maps.InfoWindow({content:'<a href="https://www.google.pt/maps/dir//Restaurante+La+Cigale,+Rua+25+de+Abril,+Albufeira/@37.0898973,-8.2608787,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0xd1acbdada17a2bd:0x639fb062d028bf72!2m2!1d-8.190838!2d37.089781" target="_blank" style="color: #000; font-size: 18px;"><strong>La Cigale</strong><br>Restaurante<br></a>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    </div>
        <div class="col-md-6 contact-right">
            <div class="wthree-contact-row">
                <h4><?php echo $lang['informacoes_menu']; ?></h4> 
                <form id="info_contact">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <input class="info" type="text" name="name" placeholder="<?php echo $lang['nome_info']; ?> *">
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <input class="info" type="text" name="email" placeholder="<?php echo $lang['email_info']; ?> *">
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <textarea class="info" placeholder="<?php echo $lang['mensagem_info']; ?> *" name="message"></textarea>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <input type="submit" value="<?php echo $lang['enviar']; ?>" style="width: 100%;">  
                        </div>
                        <div class="col-md-6 col-xs-12" style="padding-top: 10px; text-align: center;">
                            <a href="#" ><img src="images/contactos/instagram-icon.png" class="link1" style="width: 30px;"></a>
                            <a target="_blank" href="https://www.facebook.com/www.restaurantelacigale.net/" ><img src="images/contactos/facebook-icon.png" class="link2" style="width: 30px;"></a>
                        </div>
                    </div>
                    
                    
                    
                </form>  
            </div>
        </div>
        <!-- <div class="clearfix"> </div> -->
    </div>
    <!-- //contact -->
    
    
    
    
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <p><?php echo $lang['copyright']; ?></p>
      <!-- <p>Design by: <a target="_blank" href="https://oseubackoffice.com/">oseubackoffice</a></p> -->
        </div>
    </div>
    
    

        <a id="back-to-top" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

    <a id="shared-to" class="btn btn-primary btn-lg back-to-top2" role="button" title="Shared Page" data-placement="left" data-toggle="modal" data-target="#myModal" data-placement="left"><span class="glyphicon glyphicon-share-alt"></span></a>

        
    
    
    
    <!-- //footer -->    
    
    <!-- Modals Info -->
    <?php include 'admin/modals.php' ?>
    


    
    
    
        <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
        
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
        </script>


            <!-- FlexSlider -->
            
            <script type="text/javascript">
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: $(".custom-controls-container"),
                customDirectionNav: $(".custom-navigation a")
              });
              
              
            });
            
            
            
                
            </script>
            
            <script>
                setTimeout(function() {$(".back").fadeOut(); });
            </script>

            
        

    
    
    <script src="js/bootstrap.js"></script>
    <script src="js/bootbox.min.js"></script>
    <script src="js/bootstrap-switch.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/select2.full.min.js"></script>
    
    <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script defer src="js/jquery.flexslider.js"></script>


    

    
        
            <!-- //FlexSlider -->
    
    
    <!-- swipe box js -->
    <script src="js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
            jQuery(function($) {
                $(".swipebox").swipebox();
            });
    </script>
    <!-- //swipe box js --> 
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });
    </script>
    
    
    
    <script>
    
    var count = 0;
    
    // Classificações - Ratings






if ($( window ).width() > 414 && $( window ).width() <= 1400)
{

$(".slide-01").hover( function()
        {
            if (count % 2 == 0)
            {
                $(".esp").css('display', 'none');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-01").css('width', '60%');
                $(".accordion .slide-01 img").css('width', '80%');
                $(".accordion .slide-01 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-01 img").css('width', '136%');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
});
$(".slide-08").hover( function()
        {
            if (count % 2 == 0)
            {
                $(".esp2").css('display', 'none');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-08").css('width', '60%');
                $(".accordion .slide-08 img").css('width', '80%');
                $(".accordion .slide-08 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp2").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-08 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });


$(".slide-06").hover( function()
        {
            if (count % 2 == 0)
            {
                $(".esp5").css('display', 'none');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-06").css('width', '60%');
                $(".accordion .slide-06 img").css('width', '80%');
                $(".accordion .slide-06 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp5").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-06 img").css('width', '136%');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });
       $(".slide-05").hover( function()
        {
            if (count % 2 == 0)
            {
                $(".esp3").css('display', 'none');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-05").css('width', '60%');
                $(".accordion .slide-05 img").css('width', '80%');
                $(".accordion .slide-05 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-05 img").css('width', '136%');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
            }
            count++;
        });
        $(".slide-04").hover( function()
        {
            if (count % 2 == 0)
            {
                $(".esp4").css('display', 'none');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-04").css('width', '60%');
                $(".accordion .slide-04 img").css('width', '80%');
                $(".accordion .slide-04 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp4").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-04 img").css('width', '136%');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
            }
            count++;
        });
}         

$(window).on('resize', function () 
{
    // Telemoveis
    if ($( window ).width() <= 414)
   {
        $(".slide-09, .slide-08, .slide-07, .slide-06, .slide-05, .slide-04, .slide-03, .slide-02, .slide-01").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp, .esp2, .esp3, .esp4, .esp5").css('display','none');
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                
            }
            else
            {
                $(".esp, .esp2, .esp3, .esp4, .esp5").css('display','block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
            }
            count++;
        });
   }
   //Tablets

   else if ($( window ).width() > 414 && $( window ).width() <= 600)
   {
       $(".slide-09").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-09").css('width', '60%');
                $(".accordion .slide-09 img").css('width', '80%');
                $(".accordion .slide-09 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-09 img").css('width', '136%');
                $(".accordion .slide-09 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });
       $(".slide-08").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp2").css('display', 'none');
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-08").css('width', '60%');
                $(".accordion .slide-08 img").css('width', '80%');
                $(".accordion .slide-08 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-08 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });
       $(".slide-07").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-07").css('width', '60%');
                $(".accordion .slide-07 img").css('width', '80%');
                $(".accordion .slide-07 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-07 img").css('width', '136%');
                $(".accordion .slide-07 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });
       $(".slide-06").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp5").css('display', 'none');
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-06").css('width', '60%');
                $(".accordion .slide-06 img").css('width', '80%');
                $(".accordion .slide-06 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-06 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });
       $(".slide-05").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp3").css('display', 'none');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-05").css('width', '60%');
                $(".accordion .slide-05 img").css('width', '80%');
                $(".accordion .slide-05 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-05 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
            }
            count++;
        });
        $(".slide-04").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp4").css('display', 'none');
                $(".esp3").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-04").css('width', '60%');
                $(".accordion .slide-04 img").css('width', '80%');
                $(".accordion .slide-04 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-04 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
            }
            count++;
        });
        $(".slide-03").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-03").css('width', '60%');
                $(".accordion .slide-03 img").css('width', '80%');
                $(".accordion .slide-03 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%')
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-03 img").css('width', '136%');
                $(".accordion .slide-03 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
            }
            count++;
        });
        $(".slide-02").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-02").css('width', '60%');
                $(".accordion .slide-02 img").css('width', '80%');
                $(".accordion .slide-02 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-02 img").css('width', '136%');
                $(".accordion .slide-02 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
            }
            count++;
        });
        $(".slide-01").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp").css('display', 'none');
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".menu-right").css('width', '250px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-01").css('width', '60%');
                $(".accordion .slide-01 img").css('width', '80%');
                $(".accordion .slide-01 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-01 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });

}






   else if ($( window ).width() > 600 && $( window ).width() <= 1400)
   {
       $(".slide-09").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-09").css('width', '60%');
                $(".accordion .slide-09 img").css('width', '80%');
                $(".accordion .slide-09 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-09 img").css('width', '136%');
                $(".accordion .slide-09 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });
       $(".slide-08").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp2").css('display', 'none');
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-08").css('width', '60%');
                $(".accordion .slide-08 img").css('width', '80%');
                $(".accordion .slide-08 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-08 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });
       $(".slide-07").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-07").css('width', '60%');
                $(".accordion .slide-07 img").css('width', '80%');
                $(".accordion .slide-07 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-07 img").css('width', '136%');
                $(".accordion .slide-07 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });
       $(".slide-06").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp5").css('display', 'none');
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-06").css('width', '60%');
                $(".accordion .slide-06 img").css('width', '80%');
                $(".accordion .slide-06 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-06 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });
       $(".slide-05").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp3").css('display', 'none');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-05").css('width', '60%');
                $(".accordion .slide-05 img").css('width', '80%');
                $(".accordion .slide-05 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-05 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
            }
            count++;
        });
        $(".slide-04").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp4").css('display', 'none');
                $(".esp3").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-04").css('width', '60%');
                $(".accordion .slide-04 img").css('width', '80%');
                $(".accordion .slide-04 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-04 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
            }
            count++;
        });
        $(".slide-03").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-03").css('width', '60%');
                $(".accordion .slide-03 img").css('width', '80%');
                $(".accordion .slide-03 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%')
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-03 img").css('width', '136%');
                $(".accordion .slide-03 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
            }
            count++;
        });
        $(".slide-02").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-02").css('width', '60%');
                $(".accordion .slide-02 img").css('width', '80%');
                $(".accordion .slide-02 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-01").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-01 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-02 img").css('width', '136%');
                $(".accordion .slide-02 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
            }
            count++;
        });
        $(".slide-01").on('click', function()
        {
            if (count % 2 == 0)
            {
                $(".esp").css('display', 'none');
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".menu-right").css('width', '300px');
                $(".menu-right").css('margin-right', '0px');
                $(".accordion .slide-01").css('width', '60%');
                $(".accordion .slide-01 img").css('width', '80%');
                $(".accordion .slide-01 img").css('transform', 'translateY(-200px)');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '10%');
                $(".accordion .slide-08").css('width', '10%');
                $(".accordion .slide-07").css('width', '10%');
                $(".accordion .slide-06").css('width', '10%');
                $(".accordion .slide-05").css('width', '10%');
                $(".accordion .slide-04").css('width', '10%');
                $(".accordion .slide-03").css('width', '10%');
                $(".accordion .slide-02").css('width', '10%');
                $(".accordion .slide-09 .menu-left img").css('width', '241%');
                $(".accordion .slide-08 .menu-left img").css('width', '241%');
                $(".accordion .slide-07 .menu-left img").css('width', '241%');
                $(".accordion .slide-06 .menu-left img").css('width', '241%');
                $(".accordion .slide-05 .menu-left img").css('width', '241%');
                $(".accordion .slide-04 .menu-left img").css('width', '241%');
                $(".accordion .slide-03 .menu-left img").css('width', '241%');
                $(".accordion .slide-02 .menu-left img").css('width', '241%');
            }
            else
            {
                $(".esp3").css('display', 'block');
                $(".esp4").css('display', 'block');
                $(".esp5").css('display', 'block');
                $(".esp2").css('display', 'block');
                $(".esp").css('display', 'block');
                $(".menu-right").css('width', '0px');
                $(".menu-right").css('margin-right', '-57px');
                $(".accordion .slide-01 img").css('width', '136%');
                $(".accordion .slide-08 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-01 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-05 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-04 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-06 img").css('transform', 'translateY(0px)');
                $(".accordion .slide-09").css('width', '20%');
                $(".accordion .slide-08").css('width', '20%');
                $(".accordion .slide-07").css('width', '20%');
                $(".accordion .slide-06").css('width', '20%');
                
                $(".accordion .slide-04").css('width', '20%');
                $(".accordion .slide-05").css('width', '20%');
                $(".accordion .slide-03").css('width', '20%');
                $(".accordion .slide-02").css('width', '20%');
                $(".accordion .slide-01").css('width', '20%');
                $(".accordion .slide-09 .menu-left img").css('width', '152%');
                $(".accordion .slide-08 .menu-left img").css('width', '152%');
                $(".accordion .slide-07 .menu-left img").css('width', '152%');
                $(".accordion .slide-06 .menu-left img").css('width', '152%');
                $(".accordion .slide-05 .menu-left img").css('width', '152%');
                $(".accordion .slide-04 .menu-left img").css('width', '152%');
                $(".accordion .slide-03 .menu-left img").css('width', '152%');
                $(".accordion .slide-02 .menu-left img").css('width', '152%');
                $(".accordion .slide-01 .menu-left img").css('width', '152%');
                
                
            }
            count++;
        });







        
   }
});




    var star1=0;
    var st1;
    
callTestimonials();

    
    
    var date = new Date();
          d = date.setDate(date.getDate());
          h = date.setHours(date.getHours());
    
    // Datas usando no datetimepicker

    $("#data_reseva_dt").datetimepicker({ ignoreReadonly: true, format: 'DD/MM/YYYY', 
    locale: 'pt', showTodayButton: true, minDate: h, defaultDate: h, widgetPositioning: { horizontal: 'right', vertical: 'bottom' }});

  // Datas usando no datetimepicker

  $("#hora_reseva_dt").datetimepicker({ ignoreReadonly: true, format: 'HH:mm', 
    locale: 'pt', showTodayButton: true, minDate: h, defaultDate: h, widgetPositioning: { horizontal: 'right', vertical: 'bottom' }});
    
    // Selecção dos Paises Disponiveis
    
    
    $('#pais').html('<option value=""><?php echo $lang['pais_pl']; ?></option><option value="Austria">Áustria</option><option value="Alemanha">Alemanha</option><option value="Austrália">Austrália</option><option value="Brasil">Brasil</option><option value="Bulgária">Bulgária</option><option value="Bélgica">Bélgica</option><option value="Canadá">Canadá</option><option value="China">China</option><option value="Dinamarca">Dinamarca</option><option value="Egipto">Egito</option><option value="Espanha">Espanha</option><option value="Estados Unidos">Estados Unidos</option><option value="França">França</option><option value="Grécia">Grécia</option><option value="Holanda">Holanda</option><option value="Hong Kong">Hong Kong</option><option value="Hungria">Hungria</option><option value="Irlanda">Irlanda</option><option value="Itália">Itália</option><option value="Japão">Japão</option><option value="Luxemburgo">Luxemburgo</option><option value="Malta">Malta</option><option value="Moçambique">Moçambique</option><option value="México">México</option><option value="Monáco">Mónaco</option><option value="Noruega">Noruega</option><option value="Polónia">Polónia</option><option value="Portugal">Portugal</option><option value="Reino Unido">Reino Unido</option><option value="Romania">Romania</option><option value="RS">Rússia</option><option value="Suíça">Suíça</option><option value="Índia">Índia</option><option value="Outro">Outro</option>').select2();
    
    
    // Submissão do Formulario de Reservas
    
    $('#add_reserve').on('submit',function(e){
        e.preventDefault();
        $(".back").show(); 
        $(".load").show();
        dataValue=$(this).serialize()+'&action=1';
    $.ajax({ url:'admin/reservas/action_reservas.php',
    data:dataValue,
    type:'POST', 

    success: function(data){
           arr=[];
      arr =  JSON.parse(data);
      if (arr.error){
          $(".back").hide(); 
        $(".load").hide();
        $('.debug-url').html('<?php echo $lang['warn1']; ?>:<br><br>'+arr.error+'<br> <?php echo $lang['warn2']; ?>');
        $('#Modalko_reserves').modal();
        $('#add_reserve').modal('hide');
      }

      else if (arr.success == 0){
          $(".back").hide(); 
        $(".load").hide();
        $('.debug-url').html('<?php echo $lang['warn3']; ?>');
        $('#Modalko_reserves').modal();
        $('#add_reserve').modal('hide');
      }

      else if(arr.success == 1){
          $(".back").hide(); 
        $(".load").hide();
          $('.debug-url').html('<?php echo $lang['succ1']; ?> <strong class="cpt">'+arr.id+'</strong> <?php echo $lang['succ2']; ?> <strong>'+arr.email+'</strong>.');
          $('html, body').animate({ scrollTop: 0 }, 500);
          $('#Modalok_reserves').modal();
          setTimeout(function(){
          $('#Modalok_reserves').modal('hide');},2500);
          
          $('#add_reserve').modal('hide');
          $('#add_reserve')[0].reset();
      }
    },
    error: function(){
        $(".back").hide(); 
        $(".load").hide();
      $('.debug-url').html('<?php echo $lang['warn4']; ?>');
      $('#Modalko_reserves').modal();
      $('#add_reserve').modal('hide');
    }
  });
});

    
    // Visulizar Comentários
    
    function callTestimonials()
    {
        var s = '';
        var str1 = '';
  setTimeout(function(){ 
  dataValue='action=1';
    $.ajax({ url:'admin/testimonials/action_testimonials.php',
    data:dataValue,
    type:'POST', 
    cache:false,
    success: function(data){
      $('.back').fadeOut();

      arr = JSON.parse(data);
      


          if (arr[0].testimonials == null || arr[0].testimonials.length < 1 )
          {
            
            $('#Modalko .debug-url').html('<?php $lang['test_vis']; ?>');
            $("#mensagem_ko").trigger('click');
             $('.back').fadeOut();
          }
          else 
          {
            
            for(i=0;i<arr[0].testimonials.length;i++)
            {
                
                if (i==0)
                {
                    s1 = '<div class="item active"><br><p class="aligner"><img src="admin/images/coment-in.png" > '+arr[0].testimonials[0].mensagem+' <img src="admin/images/coment-fim.png" ></p><p style="font-size: 20px;"><strong>'+arr[0].testimonials[0].nome+'</strong></p></div>';

                }
                else
                {
                    s += '<div class="item"><br><p class="aligner"><img src="admin/images/coment-in.png" > '+arr[0].testimonials[i].mensagem+' <img src="admin/images/coment-fim.png" ></p><p style="font-size: 20px;"><strong>'+arr[0].testimonials[i].nome+'</strong></p></div>';
 
                }
                
                
                
            

            }
            
            
            st = '<fieldset class="rating star_align" readonly="readonly"><input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label><input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label><input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label><input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label><input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label></fieldset>';
            

            var media_geral = parseFloat(arr[0].media).toFixed(1);
            var food_media_geral = parseFloat(arr[0].fod).toFixed(1);
            var servicos_media_geral = parseFloat(arr[0].ser).toFixed(1);
            var valor_media_geral = parseFloat(arr[0].valor).toFixed(1);
            var ambiente_media_geral = parseFloat(arr[0].ambiente).toFixed(1);
            var recommended = parseFloat(arr[0].rec).toFixed(0);
            
            var float_number_star = Math.round(media_geral);

            
            st2='<fieldset class="rating1"><input type="radio" id="star5_1" name="rating1" value="5" title=""  /><label class = "full" for="star5_1" style="cursor:pointer"></label><input type="radio" id="star4_1" name="rating1" value="4" /><label class = "full" for="star4_1" style="cursor:pointer"></label><input type="radio" id="star3_1" name="rating1" value="3" /><label class = "full" for="star3_1" style="cursor:pointer"></label><input type="radio" id="star2_1" name="rating1" value="2" /><label class = "full" for="star2_1" style="cursor:pointer"></label><input type="radio" id="star1_1" name="rating1" value="1" /><label class = "full" for="star1_1" style="cursor:pointer"></label></fieldset><input type="hidden" id="sta1">' ;
            st3='<fieldset class="rating2"><input type="radio" id="star5_2" name="rating2" value="5" /><label class = "full" for="star5_2" style="cursor:pointer"></label><input type="radio" id="star4_2" name="rating2" value="4" /><label class = "full" for="star4_2" style="cursor:pointer"></label><input type="radio" id="star3_2" name="rating2" value="3" /><label class = "full" for="star3_2" style="cursor:pointer"></label><input type="radio" id="star2_2" name="rating2" value="2" /><label class = "full" for="star2_2" style="cursor:pointer"></label><input type="radio" id="star1_2" name="rating2" value="1" /><label class = "full" for="star1_2" style="cursor:pointer"></label></fieldset><input type="hidden" id="sta2">' ;
            st4='<fieldset class="rating3"><input type="radio" id="star5_3" name="rating3" value="5" /><label class = "full" for="star5_3" style="cursor:pointer"></label><input type="radio" id="star4_3" name="rating3" value="4" /><label class = "full" for="star4_3" style="cursor:pointer"></label><input type="radio" id="star3_3" name="rating3" value="3" /><label class = "full" for="star3_3"></label><input type="radio" id="star2_3" name="rating3" value="2" /><label class = "full" for="star2_3" style="cursor:pointer"></label><input type="radio" id="star1_3" name="rating3" value="1" /><label class = "full" for="star1_3" style="cursor:pointer"></label></fieldset><input type="hidden" id="sta3">' ;
            st5='<fieldset class="rating4"><input type="radio" id="star5_4" name="rating4" value="5" /><label class = "full" for="star5_4" style="cursor:pointer"></label><input type="radio" id="star4_4" name="rating4" value="4" /><label class = "full" for="star4_4" style="cursor:pointer"></label><input type="radio" id="star3_4" name="rating4" value="3" /><label class = "full" for="star3_4"></label><input type="radio" id="star2_4" name="rating4" value="2" /><label class = "full" for="star2_4" style="cursor:pointer"></label><input type="radio" id="star1_4" name="rating4" value="1" /><label class = "full" for="star1_4" style="cursor:pointer"></label></fieldset><input type="hidden" id="sta4">' ;
            st6='<fieldset class="rating5"><input type="radio" id="star5_5" name="rating5" value="100" /><label class = "full" for="star5_5" style="cursor:pointer"></label><input type="radio" id="star4_5" name="rating5" value="80" /><label class = "full" for="star4_5" style="cursor:pointer"></label><input type="radio" id="star3_5" name="rating5" value="60" /><label class = "full" for="star3_5"></label><input type="radio" id="star2_5" name="rating5" value="40" /><label class = "full" for="star2_5" style="cursor:pointer"></label><input type="radio" id="star1_5" name="rating5" value="20" /><label class = "full" for="star1_5" style="cursor:pointer"></label></fieldset><input type="hidden" id="sta5">' ;

            $("#class1").html(st2);
            $("#class2").html(st3);
            $("#class3").html(st4);
            $("#class4").html(st5);
            $("#class5").html(st6);
            $(".carousel-inner").html(''+s1+''+s+'');
            $("#info_ranking").html('<div class="row"><div class="col-md-4 upper_letter"><div class="col-md-6" style="text-align: center;"><img style="width: 120px;" src="admin/images/lacigale_smal.png"><br><br><?php echo $lang['avaliacao_geral']; ?> <p style="font-size: 36px; color:#fff;">'+media_geral+'</p></div></div><div class="col-md-4 upper_letter"><div class="row"><div class="col-md-12" style="text-align: center;">'+st+'</div></div><div class="col-lg-3 col-md-6"><center><?php echo $lang['comida']; ?></center> <p style="font-size: 20px; text-align: center; color:#fff;">'+food_media_geral+'</p></div><div class="col-lg-3 col-md-6"><center><?php echo $lang['servico']; ?></center> <p style="font-size: 20px; text-align: center; color:#fff;">'+servicos_media_geral+'</p></div><div class="col-lg-3 col-md-6"><center><?php echo $lang['valor']; ?></center> <p style="font-size: 20px; text-align: center; color:#fff;">'+valor_media_geral+'</p></div><div class="col-lg-3 col-md-6"><center><?php echo $lang['ambiente']; ?></center> <p style="font-size: 20px; text-align: center; color:#fff;">'+ambiente_media_geral+'</p></div></div><div class="col-md-4" style="padding-top: 0px;"><div class="col-md-10 col-md-offset-1" style="text-align: center;"><p style="font-size: 36px; color:#fff;">'+recommended+'%</p></div><div class="col-md-12" style="text-align: center;"><?php echo $lang['rec_pp']; ?></div><div class="col-md-12" style="text-align: center;"><a style="text-align: center" href="#" class="more" data-toggle="modal" data-target="#add_testimonails"><?php echo $lang['btn_test']; ?></a></div></div></div>');            
            
            
            
            if ($("#star1").val() == float_number_star)
            {
                $('#star1').attr("checked", true);
                $('#star2').attr("checked", false);
                $('#star3').attr("checked", false);
                $('#star4').attr("checked", false);
                $('#star5').attr("checked", false);
            }
            else if ($("#star2").val() == float_number_star)
            {
                $('#star1').attr("checked", false);
                $('#star2').attr("checked", true);
                $('#star3').attr("checked", false);
                $('#star4').attr("checked", false);
                $('#star5').attr("checked", false);
            }
            else if ($("#star3").val() == float_number_star)
            {
                $('#star1').attr("checked", false);
                $('#star2').attr("checked", false);
                $('#star3').attr("checked", true);
                $('#star4').attr("checked", false);
                $('#star5').attr("checked", false);
            }
            else if ($("#star4").val() == float_number_star)
            {
                $('#star1').attr("checked", false);
                $('#star2').attr("checked", false);
                $('#star3').attr("checked", false);
                $('#star4').attr("checked", true);
                $('#star5').attr("checked", false);
            }
            else
            {
                $('#star1').attr("checked", false);
                $('#star2').attr("checked", false);
                $('#star3').attr("checked", false);
                $('#star4').attr("checked", false);
                $('#star5').attr("checked", true);
            }
            
            // Estrelas de Classificação de Comidas 
            $('input[name="rating1"]').on('click', function()
            { 
                star1 = $('input[name="rating1"]:checked').val();
 
                
                if (star1 == $("#star1_1").val())
                {
                    st1 = 1;
                }
                else if (star1 == $("#star2_1").val())
                {
                    st1 = 2;
                }
                else if (star1 == $("#star3_1").val())
                {
                    st1 = 3;
                }
                else if (star1 == $("#star4_1").val())
                {
                    st1 = 4;
                }
                else
                {
                    st1 = 5;
                }
                $("#sta1").val(st1);
            });
            
            // Estrelas de Classificação de Serviços
            
            $('input[name="rating2"]').on('click', function()
            { 
                star1 = $('input[name="rating2"]:checked').val();

                
                if (star1 == $("#star1_2").val())
                {
                    st2 = 1;
                }
                else if (star1 == $("#star2_2").val())
                {
                    st2 = 2;
                }
                else if (star1 == $("#star3_2").val())
                {
                    st2 = 3;
                }
                else if (star1 == $("#star4_2").val())
                {
                    st2 = 4;
                }
                else
                {
                    st2 = 5;
                }
                $("#sta2").val(st2);
            });
            
            
            // Estrelas de Classificação dos Valores
            
             $('input[name="rating3"]').on('click', function()
            { 
                star1 = $('input[name="rating3"]:checked').val();

                
                if (star1 == $("#star1_3").val())
                {
                    st3 = 1;
                }
                else if (star1 == $("#star2_3").val())
                {
                    st3 = 2;
                }
                else if (star1 == $("#star3_3").val())
                {
                    st3 = 3;
                }
                else if (star1 == $("#star4_3").val())
                {
                    st3 = 4;
                }
                else
                {
                    st3 = 5;
                }
                $("#sta3").val(st3);
            });
            
            // Estrelas de Classificação do Ambiente
            
             $('input[name="rating4"]').on('click', function()
            { 
                star1 = $('input[name="rating4"]:checked').val();
 
                
                if (star1 == $("#star1_4").val())
                {
                    st4 = 1;
                }
                else if (star1 == $("#star2_4").val())
                {
                    st4 = 2;
                }
                else if (star1 == $("#star3_4").val())
                {
                    st4 = 3;
                }
                else if (star1 == $("#star4_4").val())
                {
                    st4 = 4;
                }
                else
                {
                    st4 = 5;
                }
                $("#sta4").val(st4);
            });
            
             $('input[name="rating5"]').on('click', function()
            { 
                star1 = $('input[name="rating5"]:checked').val();
      
                
                if (star1 == $("#star1_5").val())
                {
                    st5 = 20;
                }
                else if (star1 == $("#star2_5").val())
                {
                    st5 = 40;
                }
                else if (star1 == $("#star3_5").val())
                {
                    st5 = 60;
                }
                else if (star1 == $("#star4_5").val())
                {
                    st5 = 80;
                }
                else
                {
                    st5 = 100;
                }
                $("#sta5").val(st5);
            });
            
            // Estrelas de Classificação das Recomendações
            
            
            
            
            $('input[name="rating"]').attr('disabled', true);
          }
        },
        error:function(data){
            $('#Modalko .debug-url').html('<?php echo $lang['warn4']; ?>');
            $("#mensagem_ko").trigger('click');
             $('.back').fadeOut();
          }
        });
    
    }, 1000);
}


// Submissão de Comentarios
    
    $('#add_testimonails').on('submit',function(e){
        e.preventDefault();
        $(".back").show();
        $(".load").show();
        dataValue=$(this).serialize()+'&vote1='+$("#sta1").val()+'&vote2='+$("#sta2").val()+'&vote3='+$("#sta3").val()+'&vote4='+$("#sta4").val()+'&vote5='+$("#sta5").val()+'&action=2';
    $.ajax({ url:'admin/testimonials/action_testimonials.php',
    data:dataValue,
    type:'POST', 

    success: function(data){

      arr=[];
      arr =  JSON.parse(data);

      if (arr.error){
          $(".back").hide(); 
        $(".load").hide();
        $('.debug-url').html("<?php echo $lang['warn_test1']; ?>:<br><br>"+arr.error+"<br> <?php echo $lang['warn_test2']; ?>");
        $('#Modalko_test').modal();
        $('#add_testimonails').modal('hide');
      }

      else if (arr.success == 0){
          $(".back").hide(); 
        $(".load").hide();
        $('.debug-url').html("<?php echo $lang['warn_test3']; ?>");
        $('#Modalko_test').modal();
        $('#add_testimonails').modal('hide');
      }

      else if(arr.success == 1){
          $(".back").hide(); 
        $(".load").hide();
          $('.debug-url').html("<?php echo $lang['warn_succ1']; ?>");
          $('#Modalok_test').modal();
          $('html, body').animate({ scrollTop: 0 }, 500);
          setTimeout(function(){
          $('#Modalok_test').modal('hide');},2500);
          $('#add_testimonails').modal('hide');
          $('#add_testimonails')[0].reset();
          callTestimonials();
      }
    },
    error: function(){
        $(".back").hide(); 
        $(".load").hide();
      $('.debug-url').html("<?php echo $lang['warn_test4']; ?>");
      ('#Modalko_test').modal();
      $('#add_testimonails').modal('hide');
    }
  });
});

// Adicionar uma nova informação

// Submeter dados no formulario Contactos

$("#info_contact").submit(function(e){
$(".back").show();
$(".load").show();
e.preventDefault();
dataValue = $(this).serialize();
$.ajax({ url:'info/resp.php',
data:dataValue,
    type:'POST', 
    cache: false,
    success:function(data){
       if(data == 0)
      {
          $(".back").hide();
          $(".load").show();
        $('.debug-url').html("<?php echo $lang['succ_info1'] ?>");
          $('#info_contact')[0].reset();
          $("#mensagem_ok").trigger('click');
          setTimeout(function(){
          $('#Modalok').modal('hide');},2500);
     }
     else
     {
      $(".back").hide();
      $(".load").show();
      $('.debug-url').html("<?php echo $lang['warn_info1'] ?>:<br><br>"+data+"<br> <?php echo $lang['warn_info2'] ?>");
        $('#Modalko').modal();
     }
     
   },
 error:function(){
     $(".back").hide();
     $(".load").show();
     $('.debug-url').html("<?php echo $lang['warn_info3'] ?>");
        $('#Modalko').modal();
    }
  });


});


    $(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
                $('#shared-to').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
                $('#shared-to').fadeOut();
                
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});


$('#Modalko_reserves').on('hidden.bs.modal', function () {
  $("#add_reserve").modal('show');
});

$('#Modalko_test').on('hidden.bs.modal', function () {
  $("#add_testimonails").modal('show');
});


    </script>
    
    <!-- Zoom In AND Out -->
    

    
    
    
</body>
</html>