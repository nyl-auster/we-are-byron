<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

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
        document.getElementById("contact-link").innerHTML = '<a style="color:white" href="mailto:' + link + '"><p><i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i></p>Envoyer un mail</a>';
    }
</script>

<script type="text/javascript" language="javascript">
    <!--
    // Email obfuscator script 2.1 by Tim Williams, University of Arizona
    // Random encryption key feature by Andrew Moulden, Site Engineering Ltd
    // This code is freeware provided these four comment lines remain intact
    // A wizard to generate this code is at http://www.jottings.com/obfuscator/
    { coded = "e4DSr3@dSDb4.3k"
        key = "AdGntkMEBL7w4xR281e3JOHYWyCZmgpzQr6i0TIlVFaf9bPNcuKjvUSq5DosXh"
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
        document.getElementById("contact-link-nicolas").innerHTML = link;
    }
    //-->
</script><noscript>Sorry, you need Javascript on to email me.</noscript>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-62552060-1', 'auto');
    ga('send', 'pageview');
</script>

</body>

</html>