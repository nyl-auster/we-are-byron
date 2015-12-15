<?php
// redirect we-are-byron.com to byron-inc.fr permanently
// DO NOT REMOVE ! we-are-byron.com pointe toujours vers ce fichier
if (strpos($_SERVER['HTTP_HOST'], 'we-are-byron.com') !== FALSE) {
 header("Status: 301 Moved Permanently", false, 301);
 header("Location: http://www.byron-inc.fr");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

   <base href="/">

    <meta charset="utf-8">

    <?php
    /** 
     * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
     * NE PAS INDEXER L'ESPACE PRO !
     * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
     */
    ?>
    <meta name="robots" content="noindex">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Byron inc, groupe de musique">
    <meta name="author" content="Byron inc">
    <meta name="keywords" content="Byron inc, Byron groupe de musique, Byron music band">

    <title>Byron inc</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/byron.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<div id="fb-root"></div>

<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">BYRON Inc</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Byron Inc</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#clips">Clips</a>
                </li>
                <li>
                    <a class="page-scroll" href="#premier-ep">Premier EP</a>
                </li>   
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header id="pro">
    <div class="header-content">
        <div class="header-content-inner">
            <h3>ESPACE PRO</h3>
           <!--
            <hr>
            <p class=""> ESPACE PRO </p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            -->
        </div>
    </div>
</header>

<!--
<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">BYRON INC - ESPACE PRO</h2>
            </div>
        </div>
    </div>
</section>
-->



<section class="bg-dark" style="background-color:black" id="clips">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-heading"> NOS CLIPS </h3>
                <hr class="light">

<!--
                <p class="text-faded">
                  Stalker - en  cours de finalisation. Visuellement entre Pulp Fiction et la Dolce Vita; musicalement entre Tango, blues et hip-hop écorché. 
              </p>
          -->
          <br />
          <h3>STALKER - en cours de finalisation</h3>
          <p class="center">
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/agpnSAsl-GQ" frameborder="0" allowfullscreen></iframe>

            </div>
        </p>

<!--
            <p class="text-faded">
              JUDAS - En cours de finalisation. Quand Elvis rencontre Jim Morisson dans le garage de Iggy Pop.
          </p>
      -->
      <br />
      <h3> JUDAS - en cours de finalisation </h3>
      <p class="center">
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/fwFjF3s3S3A" frameborder="0" allowfullscreen></iframe>
        </div>
        <p>

                <!--
                  <a href="#" class="btn btn-default btn-xl">Get Started!</a>
              -->
          </div>
      </div>
  </div>
</section>

<section id="premier-ep">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"> MUSIQUES - PREMIER EP </h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">


                <!--  <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>-->
                <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/199643732&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/199646718&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/237346626&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/237346627&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
            </div>

        </div>
    </div>
</section>


<!--
<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Start Bootstrap!</h2>
  <a target="_blank" href="http://facebook.com/byron.band" class="btn btn-default btn-xl"><i class="fi-social-facebook fi-icon-large"></i> Page facebook </a>
<div class="fb-like" data-href="https://facebook.com/byron.band" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
            <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a>
        </div>
    </div>
</aside>
-->


<section class="bg-dark" id="contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">NOUS CONTACTER</h2>
                <hr class="primary">
                <br/>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">

                <!-- link will be filled by javascript, a weak protection for our email... -->
                <p id="contact-link"></p>

                <div class="wow bounceIn"><a target="_blank" href="http://facebook.com/byron.band" class="btn btn-default btn-xl"><i class="fi-social-facebook fi-icon-large"></i> Page facebook </a></div>
                <br/>
                <div class="fb-like wow bounceIn" data-href="https://facebook.com/byron.band" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
                <br/><br/>

            </div>
        </div>
    </div>
</section>

<?php include "../footer.inc.php" ?>


