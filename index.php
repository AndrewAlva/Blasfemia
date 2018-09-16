<?php
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;
     
    if($detect->isMobile()) {
        header('Location: http://www.mandelbrot.mx/blasfemia/mob');
        exit;
    }


    ini_set('display_errors', 1);
    require_once('TwitterAPIExchange.php');
    require_once('query.php');
    $TotalTweets = count($tweetsArray['statuses']);
    $AllTweets = $TotalTweets;
    
    
    $TweetsLeft = 60 - $TotalTweets;
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pinche Blasfemia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="description" content="BLASFEMIA
        Es en realidad la libertad de expresarte sin limitaciones,
        romper las barreras de la moral y la sociedad 
        para dejar salir a tu yo verdadero.

        Es cierto que las palabras pueden ser balas, pero muchas veces solo 
        apuntan al aire y no a la persona, puedes relajarte y gritar lo que te plazca.

        Libérate, blasfema..." />
        <meta name="keywords" content="Blasfemia, blasfemia, Pinche, pinche, Vida, vida, Zine, zine, México, méxico, MX, mx, ilustracion, ilustración, ilustration, Andrew, andrew, Alva, alva, interactive, interactivo, digital, pinche blasfemia" />


               
        <meta property="og:title" content="Pinche Blasfemia" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="http://mandelbrot.mx/blasfemia/img/share-graph.jpg" />
        <meta property="og:url" content="http://mandelbrot.mx/blasfemia/" />
        <meta property="og:description" content="BLASFEMIA
        Es en realidad la libertad de expresarte sin limitaciones,
        romper las barreras de la moral y la sociedad 
        para dejar salir a tu yo verdadero.

        Es cierto que las palabras pueden ser balas, pero muchas veces solo 
        apuntan al aire y no a la persona, puedes relajarte y gritar lo que te plazca.

        Libérate, blasfema..." />

        <link rel="icon" 
        type="image/png" 
        href="favicon.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        
        <div id="loader">
            <img src="mob/imgs/loader.png" alt="">
        </div>


        <div id="fullwrapper" class="hidden">
            <div id="blasfemiamenu-btn">
            </div>

            <div id="share-btn">
                <a href="http://www.facebook.com/sharer/sharer.php?u=http://mandelbrot.mx/blasfemia/" target="_blank">
                    
                </a>
            </div>

            <div id="about-btn">
                
            </div>

            <div id="blasfemiamenu-wrapper">
                <a class="twitter-timeline" href="https://twitter.com/hashtag/haha" data-widget-id="597135752145670144"><span class="pincheinter">#PINCHE INTERNET!</span> <br> Recarga la pagina</a>

            </div>

            <div id="about-wrapper">
                <h1> Blasfemia </h1>
                <p>  Por cada <span class="hashtag">#PincheBlasfemia</span> que dejes salir estaras rompiendo
                la prision que te encierra. Despues de gritar tu Blasfemia recarga la pagina para verlo. <br><br>

                Para vivir una experiencia distinta visita el sitio desde tu celular. <br><br>
        
                    <span class="reminder">
                        <?php
                            echo "Llevamos ";


                            echo "<span class='hashtag'>".$AllTweets."</span>";


                            if($AllTweets == 1){
                                echo " Blasfemia!";
                            }else{
                                echo " Blasfemias!";
                            }
                            
                        ?>

                        <br><br>*La pagina se recarga automaticamente cada 90 segundos.
                    </span>
                </p>

            </div>

            <div class="pinchegraff">
                <img src="img/pinche-vida.png" alt="">
            </div>

            <div class="vignete">
                <img src="img/Blasfemia Vignete.png" alt="">
            </div>

            <div id="blasfemiawrapper">

                <div id="svgswrapper">
                    <div id="spitwrapper">
                        <div id="spithere" class="svgbox spitpos">
                            <img src="spits/First-Spit.gif" alt="">
                        </div>
                    </div>



                    <!-- STONE MASK -->
                    <div class="stonebox">
                        
                        <?php
                            if ($TotalTweets < 1) {
                                echo "<img src='img/stone-frames/Frame00.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 2) {
                                echo "<img src='img/stone-frames/Frame01.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 3) {
                                echo "<img src='img/stone-frames/Frame02.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 4) {
                                echo "<img src='img/stone-frames/Frame03.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 5) {
                                echo "<img src='img/stone-frames/Frame04.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 6) {
                                echo "<img src='img/stone-frames/Frame05.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 7) {
                                echo "<img src='img/stone-frames/Frame06.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 8) {
                                echo "<img src='img/stone-frames/Frame07.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 9) {
                                echo "<img src='img/stone-frames/Frame08.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 10) {
                                echo "<img src='img/stone-frames/Frame09.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 11) {
                                echo "<img src='img/stone-frames/Frame10.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 12) {
                                echo "<img src='img/stone-frames/Frame11.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 13) {
                                echo "<img src='img/stone-frames/Frame12.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 14) {
                                echo "<img src='img/stone-frames/Frame13.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 15) {
                                echo "<img src='img/stone-frames/Frame14.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 16) {
                                echo "<img src='img/stone-frames/Frame15.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 17) {
                                echo "<img src='img/stone-frames/Frame16.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 18) {
                                echo "<img src='img/stone-frames/Frame17.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 19) {
                                echo "<img src='img/stone-frames/Frame18.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 20) {
                                echo "<img src='img/stone-frames/Frame19.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 21) {
                                echo "<img src='img/stone-frames/Frame20.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 22) {
                                echo "<img src='img/stone-frames/Frame21.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 23) {
                                echo "<img src='img/stone-frames/Frame22.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 24) {
                                echo "<img src='img/stone-frames/Frame23.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 25) {
                                echo "<img src='img/stone-frames/Frame24.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 26) {
                                echo "<img src='img/stone-frames/Frame25.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 27) {
                                echo "<img src='img/stone-frames/Frame26.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 28) {
                                echo "<img src='img/stone-frames/Frame27.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 29) {
                                echo "<img src='img/stone-frames/Frame28.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 30) {
                                echo "<img src='img/stone-frames/Frame29.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 31) {
                                echo "<img src='img/stone-frames/Frame30.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 32) {
                                echo "<img src='img/stone-frames/Frame31.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 33) {
                                echo "<img src='img/stone-frames/Frame32.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 34) {
                                echo "<img src='img/stone-frames/Frame33.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 35) {
                                echo "<img src='img/stone-frames/Frame34.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 36) {
                                echo "<img src='img/stone-frames/Frame35.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 37) {
                                echo "<img src='img/stone-frames/Frame36.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 38) {
                                echo "<img src='img/stone-frames/Frame37.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 39) {
                                echo "<img src='img/stone-frames/Frame38.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 40) {
                                echo "<img src='img/stone-frames/Frame39.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 41) {
                                echo "<img src='img/stone-frames/Frame40.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 42) {
                                echo "<img src='img/stone-frames/Frame41.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 43) {
                                echo "<img src='img/stone-frames/Frame42.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 44) {
                                echo "<img src='img/stone-frames/Frame43.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 45) {
                                echo "<img src='img/stone-frames/Frame44.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 46) {
                                echo "<img src='img/stone-frames/Frame45.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 47) {
                                echo "<img src='img/stone-frames/Frame46.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 48) {
                                echo "<img src='img/stone-frames/Frame47.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 49) {
                                echo "<img src='img/stone-frames/Frame48.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 50) {
                                echo "<img src='img/stone-frames/Frame49.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 51) {
                                echo "<img src='img/stone-frames/Frame50.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 52) {
                                echo "<img src='img/stone-frames/Frame51.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 53) {
                                echo "<img src='img/stone-frames/Frame52.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 54) {
                                echo "<img src='img/stone-frames/Frame53.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 55) {
                                echo "<img src='img/stone-frames/Frame54.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 56) {
                                echo "<img src='img/stone-frames/Frame55.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 57) {
                                echo "<img src='img/stone-frames/Frame56.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 58) {
                                echo "<img src='img/stone-frames/Frame57.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 59) {
                                echo "<img src='img/stone-frames/Frame58.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 60) {
                                echo "<img src='img/stone-frames/Frame59.png' alt='Libérate'>";
                            }elseif ($TotalTweets < 61) {
                                echo "<img src='img/stone-frames/Frame60.png' alt='Libérate'>";
                            }
                            
                        ?>

                    </div>

                    


                    <!-- HEAD HORIZONTAL -->
                    <div class="svgbox">
                        <img src="img/head-h/cr14.svg" alt="Pinche Blasfemia cr14">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr13.svg" alt="Pinche Blasfemia cr13">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr12.svg" alt="Pinche Blasfemia cr12">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr11.svg" alt="Pinche Blasfemia cr11">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr10.svg" alt="Pinche Blasfemia cr10">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr9.svg" alt="Pinche Blasfemia cr9">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr8.svg" alt="Pinche Blasfemia cr8">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr7.svg" alt="Pinche Blasfemia cr7">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr6.svg" alt="Pinche Blasfemia cr6">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr5.svg" alt="Pinche Blasfemia cr5">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr4.svg" alt="Pinche Blasfemia cr4">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr3.svg" alt="Pinche Blasfemia cr3">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr2.svg" alt="Pinche Blasfemia cr2">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-h/cr1.svg" alt="Pinche Blasfemia cr1">
                    </div>




                    <!-- HEAD VERTICAL -->
                    <div class="svgbox">
                        <img src="img/head-v/cb15.svg" alt="Pinche Blasfemia cb14">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb14.svg" alt="Pinche Blasfemia cb14">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb13.svg" alt="Pinche Blasfemia cb13">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb12.svg" alt="Pinche Blasfemia cb12">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb11.svg" alt="Pinche Blasfemia cb11">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb10.svg" alt="Pinche Blasfemia cb10">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb9.svg" alt="Pinche Blasfemia cb9">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb8.svg" alt="Pinche Blasfemia cb8">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb7.svg" alt="Pinche Blasfemia cb7">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb6.svg" alt="Pinche Blasfemia cb6">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb5.svg" alt="Pinche Blasfemia cb5">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb4.svg" alt="Pinche Blasfemia cb4">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb3.svg" alt="Pinche Blasfemia cb3">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb2.svg" alt="Pinche Blasfemia cb2">
                    </div>
                    <div class="svgbox">
                        <img src="img/head-v/cb1.svg" alt="Pinche Blasfemia cb1">
                    </div>




                    <!-- BODY HORIZONTAL -->
                    <div class="svgbox">
                        <img src="img/body-h/bh19.svg" alt="Pinche Blasfemia bh19">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh18.svg" alt="Pinche Blasfemia bh18">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh17.svg" alt="Pinche Blasfemia bh17">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh16.svg" alt="Pinche Blasfemia bh16">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh15.svg" alt="Pinche Blasfemia bh15">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh14.svg" alt="Pinche Blasfemia bh14">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh13.svg" alt="Pinche Blasfemia bh13">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh12.svg" alt="Pinche Blasfemia bh12">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh11.svg" alt="Pinche Blasfemia bh11">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh10.svg" alt="Pinche Blasfemia bh10">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh9.svg" alt="Pinche Blasfemia bh9">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh8.svg" alt="Pinche Blasfemia bh8">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh7.svg" alt="Pinche Blasfemia bh7">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh6.svg" alt="Pinche Blasfemia bh6">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh5.svg" alt="Pinche Blasfemia bh5">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh4.svg" alt="Pinche Blasfemia bh4">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh3.svg" alt="Pinche Blasfemia bh3">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh2.svg" alt="Pinche Blasfemia bh2">
                    </div>
                    <div class="svgbox">
                        <img src="img/body-h/bh1.svg" alt="Pinche Blasfemia bh1">
                    </div>





                    <!-- BODY VERTICAL -->
                    <div class="svgbox">
                        <img src="img/body-v/bvFull.svg" alt="Pinche Blasfemia bv1">
                    </div>




                    <!-- ARMS HORIZONTAL -->
                    <div class="svgbox">
                        <img src="img/armhFull.svg" alt="Pinche Blasfemia armh1">
                    </div>




                    <!-- ARMS VERTICAL -->
                    <div class="svgbox">
                        <img src="img/armvFull.svg" alt="Pinche Blasfemia armv1">
                    </div>




                    <!-- ANTE ARM HORIZONTAL -->
                    <div class="svgbox">
                        <img src="img/antehFull.svg" alt="Pinche Blasfemia anteh1">
                    </div>

                    <div class="svgbox">
                        <img src="img/antehFull-blur.svg" alt="Pinche Blasfemia anteh-blur">
                    </div>




                    <!-- ANTE ARM VERTICAL -->
                    <div class="svgbox">
                        <img src="img/antevFull.svg" alt="Pinche Blasfemia antev1">
                    </div>




                    <!-- HAND LEFT -->
                    <div class="svgbox">
                        <img src="img/handLeft.svg" alt="Pinche Blasfemia Hand Left">
                    </div>




                    <!-- HAND RIGHT -->
                    <div class="svgbox">
                        <img src="img/handRight.svg" alt="Pinche Blasfemia Hand Right">
                    </div>

                </div>

                <div class="blasfemiastotales">
                    <?php
                        if($TweetsLeft == 1){
                            echo "<p> Falta ";
                        }else{
                            echo "<p> Faltan ";
                        }


                        echo $TweetsLeft;


                        if($TweetsLeft == 1){
                            echo " Tweet! </p>";
                        }else{
                            echo " Tweets! </p>";
                        }
                        
                    ?>
                </div>

            </div>

        </div>

                    









        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <script type="text/javascript">
            $(window).load(function() {
                $("#loader").fadeOut('slow');
                $('#fullwrapper').removeClass('hidden');
            });
        </script>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-63516008-1');ga('send','pageview');
        </script>
    </body>
</html>

