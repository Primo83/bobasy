<?php
$m=$_GET['m'];
?>


<!DOCTYPE html>

<head>
    <title>About</title>
    <meta http-equiv='content-language' content='pl'; charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/tms1.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"> 
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.hoverIntent.minified.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/camera1.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
     <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
    <script src="js/script.js"></script>
    <script>
        jQuery
        $(window).load(function(){
            jQuery('#camera').camera({
                pagination          : true, 
                navigation          : false,
                transPeriod         : 2000, 
                fx                  : 'simpleFade', 
                time: 7000
            });
        });
    </script>
    
	<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
    <!--[if IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie9.css">
	<![endif]-->
</head>
<body>
	<div class="block1 height_sp">
    <div class="bg">
        <div class="container_12">
            <!--==============================header=================================-->
            <header>
                <article class="grid_12">
                    <div class="inner-block">
                        <h1><a class="logo" href="index.php">AKADEMIA PŁYWANIA MALUCHA</a></h1>
                        <div class="info">
                            <div class="phone">+48 518 508 843</div>
                            <div class="street">apm.bydgoszcz@gmail.com</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    </article>
                <div class="clear"></div>
            </header>
                 <article class="grid_12">
                     <div class="inner-block">
                         <nav>
                            <ul class="sf-menu responsive-menu">
                                
                                <?php  
                                if($m == NULL) {echo '<li class="first_item bg_color1 item1"><a href="index.php">home</a></li>';} else
            						{echo '<li class="first_item bg_color1 item1"><a href="index.php">home</a></li>';}
            						
                                
                                if($m == 2) {echo '<li class="bg_color2 item2 current"><a href="index2.php?m=2">o nas</a></li>';} else
            						{echo '<li class="bg_color2 item2"><a href="index2.php?m=2">o nas</a></li>';}

            					if($m == 3) {echo '<li class="bg_color3 item3 current"><a href="index2.php?m=3">kursy i cennik</a></li>';} else
            						{echo '<li class="bg_color3 item3"><a href="index2.php?m=3">kursy i cennik</a></li>';}	

            					if($m == 4) {echo '<li class="bg_color4 item4 current"><a href="index2.php?m=4">faq</a></li>';} else
            						{echo '<li class="bg_color4 item4"><a href="index2.php?m=4">faq</a></li>';}
            						
            					if($m == 5) {echo '<li class="bg_color5 item5 current"><a href="index2.php?m=5">galeria</a></li>';} else
            						{echo '<li class="bg_color5 item5"><a href="index2.php?m=5">galeria</a></li>';}

            					if($m == 6) {echo '<li class="bg_color6 item6 current"><a href="index2.php?m=6">regulamin</a></li>';} else
            						{echo '<li class="bg_color6 item6"><a href="index2.php?m=6">regulamin</a></li>';}
            						
            					if($m == 7) {echo '<li class="bg_color1 last_item item7 current"><a href="index2.php?m=7">kontakt</a></li>';} else
            						{echo '<li class="bg_color1 last_item item7"><a href="index2.php?m=7">kontakt</a></li>';}
            					?>                      
                            </ul>
                            <div class="clear"></div>
                           </nav>
                     </div>
                 </article>
                 <div class="clear"></div>
         <!--SLIDER-->
            <article class="grid_12">
                <div class="inner-block">
                    <div class="slider_box">               
                        <div class="camera_wrap camera_azure_skin slider" id="camera">
                            <div data-src="images/slide11-1.jpg">                
                            </div>
                            <div data-src="images/slide4-4.jpg">                
                            </div>
                            <div data-src="images/slide1-1.jpg">                
                                                                  
                          </div>                
                    </div>
                </div>
                </article>
                <div class="clear"></div>
            <!--SLIDER_END-->
          
        </div>
    </div>  
</div>
<div class="block2">
    <!--==============================content================================-->
    <?php 
    
    $m2=$_POST['m2'];
    $imie=$_POST['imie'];
    $email=$_POST['email'];
    $potw_email=$_POST['potw_email'];
    $tel=$_POST['tel'];
    $tresc=$_POST['tresc'];
    
    
    if ($m == 2) { require("o_nas.php"); }
    if ($m == 3) { require("kursy_i_cennik.php"); }
    if ($m == 4) { require("faq.php"); }
    if ($m == 5) { require("galeria.php"); }
    if ($m == 6) { require("regulamin.php"); }
    if ($m == 7 or $m2 == 5) { require("kontakt.php"); }
    if ($m == 8) { require("dyplom1.php"); }
    
    ?>
    
        
<!--==============================footer=================================-->
<div class="block4">
    <div class="container_12">
        <article class="grid_12">
            <div class="inner-block">
                <footer>
                    <div class="menu">
                    	<?php
                                if($m == NULL) {echo '<a href="index.php">home</a>';} else
            						{echo '<a href="index.php">home</a>';}
            						
                                
                                if($m == 2) {echo '<a class="current" href="index2.php?m=2">o nas</a>';} else
            						{echo '<a href="index2.php?m=2">o nas</a>';}

            					if($m == 3) {echo '<a class="current" href="index2.php?m=3">kursy i cennik</a>';} else
            						{echo '<a href="index2.php?m=3">kursy i cennik</a>';}	

            					if($m == 4) {echo '<a class="current" href="index2.php?m=4">faq</a>';} else
            						{echo '<a href="index2.php?m=4">faq</a>';}
            						
            					if($m == 5) {echo '<a class="current" href="index2.php?m=5">galeria</a>';} else
            						{echo '<a href="index2.php?m=5">galeria</a>';}

            					if($m == 6) {echo '<a class="current" href="index2.php?m=6">regulamin</a>';} else
            						{echo '<a href="index2.php?m=6">regulamin</a>';}
            						
            					if($m == 7) {echo '<a class="current" href="index2.php?m=7">kontakt</a>';} else
            						{echo '<a href="index2.php?m=7">kontakt</a>';}
            					?>      
                        
                    </div>
                    <div class="privacy">
                         Akademia Pływania Malucha &nbsp;� 2013 &nbsp; &nbsp;&nbsp; <a href="index-8.html">Privacy Policy </a>
                    </div>
                </footer>
            </div>
        </article>
    </div>
</div>
</body>
</html>