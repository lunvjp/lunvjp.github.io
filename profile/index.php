<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Vũ Trọng Phương</title>
        <meta charset="utf-8">
        <meta name="keywords" content="LunVjp,game,web,developer,full stack web developer,front-end,back-end">
        <meta name="author" content="Vu Trong Phuong">
        <meta name="description" content="This is my profile's website about all of the knowledge I have">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FontAwesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- LATO -->
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link href="https://lunvjp.github.io/css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="https://lunvjp.github.io/images/icon.ico">
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-101484659-1', 'auto');
            ga('send', 'pageview');

        </script>

    </head>

    <body id="top">
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">
                <!-- BUTTON HERE -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#details">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://www.lunvjp.tk/profile.html#top">HOME</a>
            </div>
            <div class="collapse navbar-collapse" id="details">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="https://www.lunvjp.tk/profile.html#mystories">My Stories</a></li>
                    <li><a href="https://www.lunvjp.tk/profile.html#about">About</a></li>
                    <li><a href="https://www.lunvjp.tk/profile.html#contact">Contact</a></li>
                    <li><a href="../logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="col-lg-12">
                <!-- <img> -->
                <div class="intro-text">
                    <span class="name">Trong-Phuong Vu</span>
                    <hr class="star-light" id="main">
                    <span class="skills">Full Stack Web Developer</span>
                </div>
            </div>
        </div>
    </header>

    <div class="show">
        <div class="slider">
            <div class="slide-item Fade">
                <img src="https://lunvjp.github.io/images/html5.jpg" alt="item 1 of slide">
                <!-- <div class="text">Caption 1</div> -->
            </div>
            <div class="slide-item Fade">
                <img src="https://lunvjp.github.io/images/css3.jpg" alt="item 2 of slide">
                <!-- <div class="text">Caption 2</div> -->
            </div>
            <div class="slide-item Fade">
                <img src="https://lunvjp.github.io/images/js.jpg" alt="item 3 of slide">
                <!-- <div class="text">Caption 3</div> -->
            </div>
            <div class="slide-item Fade">
                <img src="https://lunvjp.github.io/images/bootstrap.png" alt="item 4 of slide">
            </div>
            <div class="slide-item Fade">
                <img src="https://lunvjp.github.io/images/jquery.png" alt="item 5 of slide">
            </div>

            <a class="prev" onclick="ThemSlide(-1)">&#10094</a>
            <a class="next" onclick="ThemSlide(1)">&#10095</a>
        </div>
        <div class="dot-list">
            <span class="dot" onclick="SlideHienTai(1)"></span>
            <span class="dot" onclick="SlideHienTai(2)"></span>
            <span class="dot" onclick="SlideHienTai(3)"></span>
            <span class="dot" onclick="SlideHienTai(4)"></span>
            <span class="dot" onclick="SlideHienTai(5)"></span>
        </div>
    </div>

    <section id="mystories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>My Stories</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <a href="https://www.lunvjp.tk/profile.html#">
                    <div class="caption"></div>
                    <img src="https://lunvjp.github.io/images/skills.png" class="img-responsive" alt="skill's img">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="https://www.lunvjp.tk/profile.html#">
                    <div class="caption"></div>
                    <img src="https://lunvjp.github.io/images/work.png" class="img-responsive" alt="work's img">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="https://www.lunvjp.tk/profile.html#">
                    <div class="caption"></div>
                    <img src="https://lunvjp.github.io/images/Projects.png" class="img-responsive" alt="">
                </a>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>About</h1>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <!-- DIV 1 -->
                <div class="col-lg-4 col-lg-offset-2" align="justify">
                    <p>My goal is to be an excellent programmer, create big things that make people life better.</p>
                </div>
                <!-- DIV 2:  -->
                <div class="col-lg-4">
                    <table>
                        <colgroup>
                            <col width="40%">
                            <col witdh="60%">
                        </colgroup>
                        <tbody>
                        <tr>
                            <td>Name:</td>
                            <td>Trong-Phuong Vu</td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td>Oct 12th, 1998</td>
                        </tr>
                        <tr>
                            <td>I call myself:</td>
                            <td>A full stack web developer</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>momabz6@gmail.com</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- COL-MD-4 -->
                <!-- DIV 3: DOWNLOAD CV -->


            </div>
            <!-- ROW -->
        </div>
        <!-- CONTAINER -->
    </section>

    <section id="contact">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h1>Contact me</h1>
                <hr class="star-black">
                <form action="https://postmail.invotes.com/send" method="post" id="email_form">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <input class="form-control" type="text" name="subject" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <input class="form-control" type="email" name="extra_reply_to" placeholder="Your Email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <input class="form-control" type="number" name="extra_phone_number" placeholder="Your Phone Number">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control" rows="5" name="text" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="access_token" value="av1ftnuxe1jjng3jxuz9a0ck">
                    <input type="hidden" name="success_url" value=".?message=Email+Successfully+Sent%21&isError=0">
                    <input type="hidden" name="error_url" value=".?message=Email+could+not+be+sent.&isError=1">

                    <div class="row form-group">
                        <div class="col-lg-12">
                            <button id="submit_form" type="submit" class="sub btn btn-primary">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                <span style="margin-left:4px;">Send
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-item col-sm-4 col-xs-12">
                        <h3>About this website</h3>
                        <p>I build this website with Bootstrap, Jquery.</p>
                    </div>
                    <div class="footer-item col-sm-4 col-xs-12">
                        <!-- DIV 3 -->
                        <img class="logo img-responsive" src="https://lunvjp.github.io/images/logo.png">
                    </div>
                    <div class="footer-item col-sm-4 col-xs-12">
                        <h3>Contact Information</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/lunvjp" class="icon"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                            <li>
                                <div id="SkypeButton_Call_momabz6_1">
                                    <script type="text/javascript">
                                        Skype.ui({
                                            "name": "chat",
                                            "element": "SkypeButton_Call_momabz6_1",
                                            "participants": ["momabz6"],
                                            "imageSize": 32
                                        });
                                    </script>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <p>Copyright © 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Chat Live Area -->
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '46c1a8ed-c36b-405f-9cc8-da123f37b0f3', f: true }); done = true; } }; })();</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--JQUERY-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://lunvjp.github.io/js/animate.js" rel="stylesheet"></script>
    <script src="https://lunvjp.github.io/js/contact.js" rel="stylesheet"></script>
    </body>
    </html>
    <?php
} else {
    header('location: ../');
    exit();
}
?>