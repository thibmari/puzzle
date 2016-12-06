<?php
    include 'translations.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Puzzle <?php echo $languages[$language]['trivial']['ghent']; ?> - Escape Rooms</title>
    <meta name="description" content="Puzzle EscapeRooms Ghent is the most thrilling/adventurous teambuilding activity you can find in Gent.">
    <!-- CSS  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Kreon' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" />
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-74666072-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','//connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1681428928762238');
        fbq('track', "PageView");
    </script>
    <!-- End Facebook Pixel Code -->
</head>
<body>
<a href="https://www.bookeo.com/puzzle" target="_blank">
    <div class="call-to-action">
        <?php
            if (isset($languages[$language]['menu']['book_now'])) {
                echo $languages[$language]['menu']['book_now'];
            }
        ?>
    </div>
</a>
<a href="<?php echo $newUrl; ?>">
    <div class="languages">
        <?php
        if ($language == 'nl') {
            echo 'English';
        } else {
            echo 'Nederlands';
        }
        ?>
    </div>
</a>
<div class="header">
    <div class="menu-wrapper">
        <?php include 'partials/menu.php' ; ?>
    </div>
    <?php include 'partials/slider.php'; ?>
</div>
<span class="anchor" id="about"></span>
<div class="container about">
    <div class="section">
        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center">
                        <?php
                            if (isset($languages[$language]['about']['what']['top'])) {
                                echo $languages[$language]['about']['what']['top'];
                            }
                        ?>
                    </h2>
                    <div class="center my-yellow">
                        <img alt="puzzle logo escape room ghent" width="70" src="img/logo.png" />
                    </div>
                    <h5 class="center">
                        <?php
                            if (isset($languages[$language]['about']['what']['middle'])) {
                                echo $languages[$language]['about']['what']['middle'];
                            }
                        ?>
                    </h5>
                    <p class="light">
                        <?php
                            if (isset($languages[$language]['about']['what']['bottom'])) {
                                echo $languages[$language]['about']['what']['bottom'];
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center">
                        <?php
                            if (isset($languages[$language]['about']['where']['top'])) {
                                echo $languages[$language]['about']['where']['top'];
                            }
                        ?>
                    </h2>

                    <div class="center my-yellow">
                        <i class="fa fa-map"></i>
                    </div>
                    <h5 class="center">
                        <?php
                            if (isset($languages[$language]['about']['where']['middle'])) {
                                echo $languages[$language]['about']['where']['middle'];
                            }
                        ?>
                    </h5>
                    <p class="light">
                        <?php
                            if (isset($languages[$language]['about']['where']['bottom'])) {
                                echo $languages[$language]['about']['where']['bottom'];
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center">
                        <?php
                            if (isset($languages[$language]['about']['who']['top'])) {
                                echo $languages[$language]['about']['who']['top'];
                            }
                        ?>
                    </h2>
                    <div class="center my-yellow">
                        <i class="fa fa-users"></i>
                    </div>
                    <h5 class="center">
                        <?php
                            if (isset($languages[$language]['about']['who']['middle'])) {
                                echo $languages[$language]['about']['who']['middle'];
                            }
                        ?>
                    </h5>
                    <p class="light">
                        <?php
                            if (isset($languages[$language]['about']['who']['bottom'])) {
                                echo $languages[$language]['about']['who']['bottom'];
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<span class="anchor" id="rooms"></span>
<div class="rooms">
    <div class="container">
        <div class="row room-row">
            <div class="col s12 m12 center">
                <h2 class="my-yellow">
                    <?php
                        if (isset($languages[$language]['menu']['rooms'])) {
                            echo $languages[$language]['menu']['rooms'];
                        }
                    ?>
                </h2>
                <?php
                    if (isset($languages[$language]['rooms']['room1']['slogan'])) {
                        echo $languages[$language]['rooms']['room1']['slogan'];
                    }
                ?>
            </div>
        </div>
        <div class="row room-row">
            <div class="col s12 m12 center">
                <h2>
                    <?php
                        if (isset($languages[$language]['rooms']['room1']['title'])) {
                        echo $languages[$language]['rooms']['room1']['title'];
                        }
                    ?>
                </h2>
            </div>
        </div>
        <div class="row room-row">
            <div class="room room_left col m12 l6">
                <ul>
                    <li>
                        <?php
                            if (isset($languages[$language]['rooms']['room1']['text'])) {
                                echo $languages[$language]['rooms']['room1']['text'];
                            }
                        ?>
                    </li>
                </ul>
                <h6 class="my-yellow">Escapes completed (25%)</h6>
                <div class="progress">
                    <div class="determinate" style="width: 25%"></div>
                </div>

            </div>
            <div class="room room_right col m12 l6">
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/8YbMntUWIhY" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<span class="anchor" id="prices"></span>
<div class="prices">
    <div class="container">
        <div class="row price-row">
            <div class="col s12 m12 center">
                <h2>
                    <?php
                        if (isset($languages[$language]['menu']['prices'])) {
                            echo $languages[$language]['menu']['prices'];
                        }
                    ?>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h5 class="center">
                        <?php
                            if (isset($languages[$language]['prices']['friends']['title'])) {
                                echo $languages[$language]['prices']['friends']['title'];
                            }
                        ?>
                    </h5>
                    <div class="center my-yellow">
                        <i class="fa fa-users"></i>
                    </div>
                    <p class="light">
                        <?php
                            if (isset($languages[$language]['prices']['friends']['text'])) {
                                echo $languages[$language]['prices']['friends']['text'];
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="icon-block">
                    <h5 class="center">
                        <?php
                            if (isset($languages[$language]['prices']['students']['title'])) {
                                echo $languages[$language]['prices']['students']['title'];
                            }
                        ?>
                    </h5>
                    <div class="center my-yellow">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <p class="light">
                        <?php
                            if (isset($languages[$language]['prices']['students']['text'])) {
                                echo $languages[$language]['prices']['students']['text'];
                            }
                        ?>
                    </p>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="icon-block">
                    <h5 class="center">
                        <?php
                            if (isset($languages[$language]['prices']['business']['title'])) {
                                echo $languages[$language]['prices']['business']['title'];
                            }
                        ?>
                    </h5>
                    <div class="center my-yellow">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <p class="light">
                        <?php
                            if (isset($languages[$language]['prices']['business']['text'])) {
                                echo $languages[$language]['prices']['business']['text'];
                            }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="price-box">
        <div class="container">
            <div class="row">
                <div class="col s6 m4 center">
                    <a href="booking.html" class="fff">
                        <div class="pricebox">
                            <div class="subbox">
                                2 <?php echo $languages[$language]['trivial']['persons']; ?>
                            </div>
                            <div class="subbox2">
                               €60
                            </div>
                            <div class="subbox3">
                                <?php
                                if (isset($languages[$language]['menu']['book_now'])) {
                                    echo $languages[$language]['menu']['book_now'];
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6 m4 center">
                    <a href="booking.html" class="fff">
                        <div class="pricebox">
                            <div class="subbox">
                                3 <?php echo $languages[$language]['trivial']['persons']; ?>
                            </div>
                            <div class="subbox2">
                                €75
                            </div>
                            <div class="subbox3">
                                <?php
                                if (isset($languages[$language]['menu']['book_now'])) {
                                    echo $languages[$language]['menu']['book_now'];
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6 m4 center">
                    <a href="booking.html" class="fff">
                        <div class="pricebox">
                            <div class="subbox">
                                4 <?php echo $languages[$language]['trivial']['persons']; ?>
                            </div>
                            <div class="subbox2">
                                €90
                            </div>
                            <div class="subbox3">
                                <?php
                                if (isset($languages[$language]['menu']['book_now'])) {
                                    echo $languages[$language]['menu']['book_now'];
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6 m4 center">
                    <a href="booking.html" class="fff">
                        <div class="pricebox">
                            <div class="subbox">
                                5 <?php echo $languages[$language]['trivial']['persons']; ?>
                            </div>
                            <div class="subbox2">
                                €105
                            </div>
                            <div class="subbox3">
                                <?php
                                if (isset($languages[$language]['menu']['book_now'])) {
                                    echo $languages[$language]['menu']['book_now'];
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6 m4 center">
                    <a href="booking.html" class="fff">
                        <div class="pricebox">
                            <div class="subbox">
                                6 <?php echo $languages[$language]['trivial']['persons']; ?>
                            </div>
                            <div class="subbox2">
                                €120
                            </div>
                            <div class="subbox3">
                                <?php
                                if (isset($languages[$language]['menu']['book_now'])) {
                                    echo $languages[$language]['menu']['book_now'];
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6 m4 center">
                    <a href="booking.html" class="fff">
                        <div class="pricebox">
                            <div class="subbox">
                                7 <?php echo $languages[$language]['trivial']['persons']; ?>
                            </div>
                            <div class="subbox2">
                                €140
                            </div>
                            <div class="subbox3">
                                <?php
                                if (isset($languages[$language]['menu']['book_now'])) {
                                    echo $languages[$language]['menu']['book_now'];
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<span class="anchor" id="faq"></span>
<div class="faq">
    <div class="container">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m6 center-on-small-only">
                    <?php
                    if (isset($languages[$language]['faq']['title'])) {
                        echo $languages[$language]['faq']['title'];
                    }
                    ?>
                </div>
                <div class="col s12 m6">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">question_answer</i>
                                <?php
                                if (isset($languages[$language]['faq']['faq1']['question'])) {
                                    echo $languages[$language]['faq']['faq1']['question'];
                                }
                                ?>
                            </div>
                            <div class="collapsible-body">
                                <p>
                                    <?php
                                    if (isset($languages[$language]['faq']['faq1']['answer'])) {
                                        echo $languages[$language]['faq']['faq1']['answer'];
                                    }
                                    ?>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">question_answer</i>
                                <?php
                                if (isset($languages[$language]['faq']['faq2']['question'])) {
                                    echo $languages[$language]['faq']['faq2']['question'];
                                }
                                ?>
                            </div>
                            <div class="collapsible-body">
                                <p>
                                    <?php
                                    if (isset($languages[$language]['faq']['faq2']['answer'])) {
                                        echo $languages[$language]['faq']['faq2']['answer'];
                                    }
                                    ?>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">question_answer</i>
                                <?php
                                if (isset($languages[$language]['faq']['faq3']['question'])) {
                                    echo $languages[$language]['faq']['faq3']['question'];
                                }
                                ?>
                            </div>
                            <div class="collapsible-body">
                                <p>
                                    <?php
                                    if (isset($languages[$language]['faq']['faq3']['answer'])) {
                                        echo $languages[$language]['faq']['faq3']['answer'];
                                    }
                                    ?>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">question_answer</i>
                                <?php
                                if (isset($languages[$language]['faq']['faq4']['question'])) {
                                    echo $languages[$language]['faq']['faq4']['question'];
                                }
                                ?>
                            </div>
                            <div class="collapsible-body">
                                <p>
                                    <?php
                                    if (isset($languages[$language]['faq']['faq4']['answer'])) {
                                        echo $languages[$language]['faq']['faq4']['answer'];
                                    }
                                    ?>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="material-icons">question_answer</i>
                                <?php
                                if (isset($languages[$language]['faq']['faq5']['question'])) {
                                    echo $languages[$language]['faq']['faq5']['question'];
                                }
                                ?>
                            </div>
                            <div class="collapsible-body">
                                <p>
                                    <?php
                                    if (isset($languages[$language]['faq']['faq5']['answer'])) {
                                        echo $languages[$language]['faq']['faq5']['answer'];
                                    }
                                    ?>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<span class="anchor" id="contact"></span>
<div class="contact contact-info">
    <div class="container">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4 mar-bottom">
                    <h5>
                        <?php
                        if (isset($languages[$language]['trivial']['mail'])) {
                            echo $languages[$language]['trivial']['mail'];
                        }
                        ?>
                    </h5>
                    <p><span class="my-yellow">escape</span>@puzzle.gent</p>
                </div>
                <div class="col s12 m4 mar-bottom">
                    <h5>
                        <?php
                        if (isset($languages[$language]['trivial']['location'])) {
                            echo $languages[$language]['trivial']['location'];
                        }
                        ?>
                    </h5>

                    <p>Blekerijstraat 75</p>

                    <p>9000 <?php echo $languages[$language]['trivial']['ghent']; ?>, BE</p>
                </div>
                <div class="col s12 m4">
                    <h5>
                        <?php
                        if (isset($languages[$language]['trivial']['call'])) {
                            echo $languages[$language]['trivial']['call'];
                        }
                        ?>
                    </h5>
                    <!-- <p>+32 478 93 63 03</p> -->
                    <p>+32 479 24 28 66</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-social">
    <div class="row">
        <a target="_blank" href="https://www.facebook.com/PuzzleEscaperooms/"
           class="col s12 m6 social-helper facebook">
            <img src="img/facebook_logo.png" alt="facebook logo"/>
        </a>
        <a target="_blank" href="https://twitter.com/PuzzleEscape?s=08" class="col s12 m6 social-helper twitter">
            <img src="img/twitter_logo.png" alt="facebook logo"/>
        </a>
    </div>
    <div class="row" style="background-color: #fff">
        <a target="_blank" href="http://www.tripadvisor.nl/10063770?m=19905"
           class="col s12 m6 social-helper tripadvisor">
            <img src="img/tripadvisor.jpg" alt="tripadvisor"/>
        </a>
        <a target="_blank" href="https://www.instagram.com/puzzle_escaperooms/" class="col s12 m6 instagram social-helper">
            <img src="img/instagram.jpg" alt="instagram logo"/>
        </a>
    </div>
</div>
<div class="contact contact-form">
    <div class="row">
        <div class="col s12 m6">
            <h5>
                <?php
                if (isset($languages[$language]['trivial']['contact'])) {
                    echo $languages[$language]['trivial']['contact'];
                }
                ?>
            </h5>
        </div>
        <form class="col s12 m6" action="form-action.php" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <i class="move-links material-icons prefix">account_circle</i>
                    <input required name="name" id="Name" type="text" class="validate">
                    <label for="Name">
                        <?php
                        if (isset($languages[$language]['trivial']['name'])) {
                            echo $languages[$language]['trivial']['name'];
                        }
                        ?>
                    </label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">email_circle</i>
                    <input required name="email" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">subject_circle</i>
                    <textarea name="message" id="textarea" class="materialize-textarea"></textarea>
                    <label for="textarea">
                        <?php
                        if (isset($languages[$language]['trivial']['vraag'])) {
                            echo $languages[$language]['trivial']['vraag'];
                        }
                        ?>
                    </label>
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">
                <?php
                if (isset($languages[$language]['trivial']['submit'])) {
                    echo $languages[$language]['trivial']['submit'];
                }
                ?>
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
<div id="google-map"></div>

<div class="review-placeholder">
    <div id="TA_excellent540" class="TA_excellent">
        <ul id="g1CKh3" class="TA_links Kdu7pbz">
            <li id="X04hsyhnEhf" class="VAksHZbl5w7G">
                <a target="_blank" href="https://www.tripadvisor.nl/"><img src="https://static.tacdn.com/img2/widget/tripadvisor_logo_115x18.gif" alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO"/></a>
            </li>
        </ul>
    </div>
    <div id="egb-review">
        <h1><a href="http://www.escapegamesbelgium.be/games/puzzle-gent​">Puzzle Gent</a></h1>
        <p><a href="http://escapegamesbelgium.be">Escapegamesbelgium</a></p>
    </div>
</div>


<footer class="page-footer">
    <?php include 'partials/footer.php' ; ?>
</footer>

<a href="#" class="scrollToTop">
    <span class="inset">
        <i class="fa fa-arrow-up"></i>
    </span>
</a>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/bin/materialize.min.js"></script>
<script src="https://escapegamesbelgium.be/js/review.js"></script>
<script>
    egb.initialize(document.getElementById('egb-review'), 27);
</script>
<script src="https://www.jscache.com/wejs?wtype=excellent&amp;uniq=540&amp;locationId=10063770&amp;lang=nl&amp;display_version=2"></script>
<script src="js/init.js"></script>

</body>
</html>
