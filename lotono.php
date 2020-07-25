
        <?php
            include 'includes/header.php';
        ?>

        <aside class="ease" id="work-aside">
            <h1 class="all web work-ios ease">Lotono</h1>
            <div class="aside-text">
                <p class="shadow">

                Lotono wanted a clean, attractive and simple website to promote their low carbon project across the Dorset and Hampshire area. The end result gave them a great digital presence to communicate with like-minded businesses.

                </p>
                <p class="aside-details">
                   Role: Lead designer &amp; developer<br/>
                   Date: Winter 2013
                   Completed at Fathom
                </p>
                
            </div>
        </aside>

         

        <section class="portfolio" id="portfolio">
            
            <div class="grid-portfolio r">
                <img src="img/work/lotono1.jpg" width="100%">
                <img src="img/work/lotono3.jpg" width="100%">
                <img src="img/work/lotono2.jpg" width="100%">
                <img src="img/work/lotono4.jpg" width="100%">
                <p class="">
                    <a href="index.php#work"><i class="fa fa-undo aside-icons"></i></a>
                    <a href="teamsport.php"><i class="fa fa-arrow-circle-o-right aside-icons"></i></a>
                </p>
            </div>

        </section>

        
        <?php
            include 'includes/footer.php';
        ?>
    </body>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
        <!-- INSTA -->
        <script src="js/instafeed.min.js"></script>
        <script type="text/javascript">
            var userFeed = new Instafeed({
                get: 'user',
                userId: 50067457,
                limit:3,
                accessToken: '50067457.467ede5.d361d38f70b949e5b76cc59134088e07',
                template: '<a href="{{link}}"><img width="33%" class="l" src="{{image}}" /></a>',
                resolution:'standard_resolution'
            });
            userFeed.run();
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
