<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Byron</title>
  <meta name="description" content="Byron est l'enfant terrible de Captain Beefheart et The Streets, le batard révolté de Tom Waits
            et The Beastie Boys. Avec un hip-hop cinématographique qui emprunte au blues, au gospel, au folk et au punk, et des textes en anglais incisifs, ils vous entraînent dans les méandres du désespoir amoureux sur un air enjoué de cabaret glauque." />
  <meta name="keywords" content="musique, groupe, byron, band, music">
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="fonts/foundation-icons/foundation-icons.css" />
  <script src="bower_components/modernizr/modernizr.js"></script>
</head>

<body>

<div class="page-opacifier">
</div>

<div id="fb-root"></div>




<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<div class="row">
  <div class="small-12 columns">
    <h1 class="text-center" id="byron">BYRON <small class="hidden-for-small">inc</small> </h1>
    <!--<div class="text-center"><i class="fi-alert"></i> Site temporaire développé conformément à la méthode <a target="_blank" href="http://byatoo.com/la-rache/index.php?p=page&name=la-faq&id=3">la rache</a> </div> -->
  </div>
</div>

<div class="row content">
  <div class="small-12 medium-12 columns">

    <p class="speech">
      <strong>Byron</strong> est l'enfant terrible de Captain Beefheart et The Streets, le batard révolté de Tom Waits
      et The Beastie Boys. Avec un hip-hop cinématographique qui emprunte au blues, au gospel, au folk et au punk, et des textes en anglais incisifs, ils vous entraînent dans les méandres du désespoir amoureux sur un air enjoué de cabaret glauque.
<br /><br />

      Byron c'est : <span class="stabilo">Percy Louis</span>  à la basse,<span class="stabilo"> Erwan Guirriec</span> à la batterie, <span class="stabilo">Antoine Houbron</span> aux claviers, <span class="stabilo">Lewis Cuthbert-Ashton</span> au chant, <span class="stabilo">Yann Boisselier</span> à la guitare et au chant.
    </p>

    <ul class="small-block-grid-2 medium-block-grid-5 large-block-grid-5">
      <li>
        <span class="th">
      <img width="150px" src="images/membres/lewis.jpg">
    </span>
      </li>

      <li>
                <span class="th">
      <img width="150px" src="images/membres/yann.jpg">
    </span>

      </li>

      <li>
        <span class="th">
      <img width="150px" src="images/membres/erwan.jpg">
    </span>
      </li>
      <li>
        <span class="th">
      <img width="150px" src="images/membres/antoine.jpg">
    </span>
      </li>

      <li>
        <span class="th">
      <img width="150px" src="images/membres/percy.jpg">
    </span>
      </li>
    </ul>

  </div>
</div>

<div class="row">
  <div class="small-12 columns text-center facebook-wrapper">
    <p class="">
      <a target="_blank" href="http://facebook.com/byron.band" class="primary button radius"><i class="fi-social-facebook fi-icon-large"></i> Page facebook </a>
      <span id="contact-link"></span>
    </p>
    <div class="fb-like" data-href="https://facebook.com/byron.band" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
  </div>
</div>

<div class="row">
  <div class="small-12 columns">
    <div class="row">
      <div class="small-12 columns soundcloud-wrapper">
        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/199643732&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
        <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/199646718&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
      </div>
    </div>
  </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>

<script type="text/javascript" language="javascript">

  // Email obfuscator script 2.1 by Tim Williams, University of Arizona
  // Random encryption key feature by Andrew Moulden, Site Engineering Ltd
  // This code is freeware provided these four comment lines remain intact
  // A wizard to generate this code is at http://www.jottings.com/obfuscator/

  { coded = "BsF73B7@v8-328-Pt2sF.Bsh"
    key = "uXa5WF7D2PwORCkZNTAsyl8hgY3LVUIcMqv9J6EKi04ntGrbzfpxHjSBdo1Qem"
    shift=coded.length
    link=""
    for (i=0; i<coded.length; i++) {
      if (key.indexOf(coded.charAt(i))==-1) {
        ltr = coded.charAt(i)
        link += (ltr)
      }
      else {
        ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
        link += (key.charAt(ltr))
      }
    }
    document.getElementById("contact-link").innerHTML = "<a class=\"button radius success\" href='mailto:"+link+"'><i class=\"fi-mail fi-icon-large\"></i> Nous contacter</a>";
  }

</script>


</body>
</html>
