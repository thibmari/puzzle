<?php
include 'translations.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Teambuilding | Puzzle <?php echo $languages[$language]['trivial']['ghent']; ?> - Escape Rooms</title>
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

<a href="gifts.php?lang=<?php echo $newL; ?>">
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

<div class="header header_cs">
    <div class="menu-wrapper menu-wrapper_cs">
        <?php include 'partials/menu.php' ; ?>
    </div>
</div>

<div class="teambuilding">
    <div class="container">
        <div class="col s12 m12">
            <h2>
                <?php
                if (isset($languages[$language]['gift']['title'])) {
                    echo $languages[$language]['gift']['title'];
                }
                ?>
            </h2>
            <img src="img/gift1.jpg" alt="cadeaubon pic" />
            <img src="img/gift3.jpg" alt="cadeaubon pic 2" />
            <img src="img/gift2.jpg" alt="cadeaubon pic 3" />
            <span>...</span>
        </div>
    </div>
</div>
<div class="teambuilding_form">
    <div class="container">
        <form class="col s12 m12" action="gift_form.php" method="post">
            <div class="input-field col s12">
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
                <input required name="email" id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>

            <div class="input-field col s12">
                <select name="coupons" id="coupons" required>
                    <option value="1">1 cadeaubon</option>
                    <option value="2">2 cadeaubonnen</option>
                    <option value="3">3 cadeaubonnen</option>
                    <option value="4">4 cadeaubonnen</option>
                    <option value="5">5 cadeaubonnen</option>
                    <option value="6">6 cadeaubonnen</option>
                </select>
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
<script src="js/bin/materialize.min.js"></script>
<script src="js/teambuilding.js"></script>

</body>
</html>
