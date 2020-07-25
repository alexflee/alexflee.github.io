<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ESZ Consultants</title>
        <meta name="author" content="Alex Lee Design - http://www.alexleedesign.co.uk">
        <meta name="description" content="Digital designer and front end developer based in Nottingham, available for design, print and interactive development">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="http://www.alexleedesign.co.uk/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="http://www.alexleedesign.co.uk/favicon.png">
        <!-- Place favicon.ico in the root directory -->

        <!--<link rel="stylesheet" href="css/normalize.css"> -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- TODO svg polyline graph for header -->

        <header id="who" class="gradient_blue">
                <div class="bg_container"></div>                 
                <nav>
                    <div class="wrapper">
                        <div class="logo">
                            <h1><a href="#who"><b>ESZ</b>Consulting</a></h1>
                        </div>
                        <ul>
                            <li class="who"> <a href="#who">WHO WE ARE</a></li>
                            <li class="what"> <a href="#whatwedo">WHAT WE DO</a></li>
                            <li class="contact"> <a href="#contact">CONTACT US</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="wrapper onethousand">
                    <summary class="summary">
                        <h1>
                            We are a digital development consultancy consisting of an excellent team of highly motivated and experienced multi-disciplined software engineers and developers.
                        </h1>
                        <p>
                            With over 30 years of combined experience in various markets, we have both expertise and a broad skill set, with the knowledge, flexibility and adaptability that come from working at the leading edge.
                        </p>
                        <button class="button whatwedo" style="vertical-align:middle"><span>What we do </span></button>
                        <button class="button getintouch" style="vertical-align:middle"><span>Get in touch </span></button>
                    </summary>
                    <div class="welcome_line_left"></div>
                    <div class="welcome_line_right"></div>
                    <div class="welcome_line_left2"></div>
                    <div class="welcome_line_right2"></div>
                    <div class="circle_left"></div>
                    <div class="circle_right"></div>
                    <div class="circle_left2"></div>
                    <div class="circle_right2"></div>
                    <div class="welcome_cross cross_1"></div>
                    <div class="welcome_cross cross_2"></div>
                    <div class="welcome_cross cross_3"></div>
                </div>
        </header>
        <section id="whatwedo">
            <header>
                <figure>
                    <div class="circle">
                        <div class="cog1"></div>
                        <div class="cog2"></div>
                    </div>
                    <div id="item1" class=""></div>
                    <div id="item2" class=""></div>
                    <div id="item3" class=""></div>
                    <div id="item4" class=""></div>
                </figure>
                <h2>What we do</h2>
                <h3>We do bespoke software development and provide technical consultancy.</h3>
            </header>
            <main>
                <div class="row1">
                    <article>
                        <figure class="web"></figure>
                        <h4>WEB DESIGN &amp; DEVELOPMENT</h4>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                    </article>
                    <article>
                        <figure class="cloud"></figure>
                        <h4>CLOUD &amp; SaaS</h4>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                    </article>
                    <article>
                        <figure class="consulting"></figure>
                        <h4>CONSULTING</h4>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                    </article>
                </div>
                <div class="row2">
                    <article>
                        <figure class="desktop"></figure>
                        <h4>DESKTOP &amp; SERVER</h4>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                    </article>
                    <article>
                        <figure class="communications"></figure>
                        <h4>COMMUNICATIONS</h4>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                    </article>
                    <article>
                        <figure class="technology"></figure>
                        <h4>TECHNOLOGY</h4>
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet Aenean.</p>
                    </article>
                </div>
            </main>
        </section>

        <section id="office" class="office">

        </section>

        <section id="contact">
            <header>
                <figure>
                    <div class="circle">
                        <div class="speech1"></div>
                        <div class="speech2"></div>
                    </div>
                    <div id="item5" class=""></div>
                    <div id="item6" class=""></div>
                    <div id="item7" class=""></div>
                    <div id="item8" class=""></div>
                </figure>
                <h2>Contact Us</h2>
                <h3>If you would like to discuss a potential project or just find out a bit more about the services we can offer you, please get in touch.</h3>
            </header>
            <div class="wrapper">

                <div id="contactdone">
                    <p>Your message has been sent, we will contact your as soon as possible.</p>
                </div>

                <form id="contact_form" class="form" method="post" action="contactengine.php">
                    <input type="text" name="name" id="name" placeholder="Name" />
                    <input type="text" name="email" id="email" placeholder="Email" />
                    <input type="text" name="company" id="company" placeholder="Company" />
                    <input type="text" name="number" id="number" placeholder="Telephone Number" />
                    <textarea class="textarea" name="message" rows="20" cols="20" id="message" placeholder="Hello, this is my enquiry..."></textarea>
                    <input type="submit" id="submit_btn" name="submit" value="Submit" class="submit-button" />
                </form>

                <aside>
                    <figure class="getintouch"></figure>
                    <div class="asidetext">
                        <p class="title"><b>Get in touch</b></p>
                        <p>
                           Phone: <strong>+44 (0) 20 8123 6240</strong><br/>
                           Email: <a href="mailto:sales@eszconsulting.com?Subject=Hello" target="_top"><strong>sales@eszconsulting.com</strong></a>
                        </p>
                    </div>
                </aside>
                <aside class="aside2">
                    <figure class="registeredoffice"></figure>
                    <div class="asidetext">
                        <p class="title"><b>Registered office <a target="_blank" href="https://www.google.co.uk/maps/place/Spofforths+LLP+chartered+accountants/@50.821038,-0.7988367,17z/data=!3m1!4b1!4m5!3m4!1s0x48745242b658ac07:0x9d0385cd9b6943fa!8m2!3d50.821038!4d-0.796648"><i></i></a></b></p>
                        <p>
                           9 Donnington Park, 85 Birdham Road,<br/>
                           Chichester,West Sussex, PO20 7AJ.
                        </p>
                    </div>
                </aside>
            </div>
        </section>

        <footer>
            <div class="wrapper">
                <p>
                    <span>ESZ Consulting Limited (Registered in England &amp; Wales)</span>      
                    <span>Copyright ESZ Consulting Ltd, All rights reserved</span>       
                    <span>Company No. 07430684</span>              
                    <span>VAT No. 101796918</span>
                </p>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/classie.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
