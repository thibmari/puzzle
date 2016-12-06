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

<a href="escape-eat.php?lang=<?php echo $newL; ?>">
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

<div class="gifts">
    <div class="container">
        <div class="col s12 m12">
            <h2>
            <?php
                if (isset($languages[$language]['gifts']['intro']['title'])) {
                    echo $languages[$language]['gifts']['intro']['title'];
                }
                ?>
            </h2>
            <h5>
                <?php
                if (isset($languages[$language]['gifts']['intro']['title2'])) {
                    echo $languages[$language]['gifts']['intro']['title2'];
                }
                ?>
            </h5>
            <p>
                <?php
                if (isset($languages[$language]['gifts']['intro']['p1'])) {
                    echo $languages[$language]['gifts']['intro']['p1'];
                }
                ?>
             </p>
            <p>
                <?php
                if (isset($languages[$language]['gifts']['intro']['p2'])) {
                    echo $languages[$language]['gifts']['intro']['p2'];
                }
                ?>
            </p>
            <p>
                <?php
                if (isset($languages[$language]['gifts']['intro']['p3'])) {
                    echo $languages[$language]['gifts']['intro']['p3'];
                }
                ?>
            </p>
            <p>
                <?php
                if (isset($languages[$language]['gifts']['intro']['p4'])) {
                    echo $languages[$language]['gifts']['intro']['p4'];
                }
                ?>
            </p>
            <p>
                BVBA Puzzle Activities<br/>
                BE03 0017 8895 0384<br/>
                Blekerijstraat 75<br/>
                9000 Gent
            </p>
            <p>
                <?php
                if (isset($languages[$language]['gifts']['intro']['p5'])) {
                    echo $languages[$language]['gifts']['intro']['p5'];
                }
                ?>
            </p>
            <div class="row">
                <h2><span class="my-yellow">Small & tall</span></h2>
                <div class="col s12 m6 l-align">
                    <p>De menukaart is beperkt en wisselend; op die manier geven ze zichzelf de vrijheid om te werken met verse en seizoensgebonden ingrediënten. ’s Middags kan je in Small & Tall terecht voor een lunch: een stevige boterham, verse soep, spaghetti bolognaise, vegetarische pasta of een lekkere dagschotel.
                    </p>
                    <h5>Formules (prijzen pp):</h5>
                    <p>

                        Formule 1: €32
                        1 escapegame + Lunch @ Small & Tall
                        Soep
                        + keuze uit een van de belegde boterhammen (incl slaatje)
                        + koffie / thee  
                    </p>
                    <p>
                        Formule 2: €36
                        1 escaperoom + Lunch of diner @ Small & Tall
                        Soep
                        + keuze uit dagschotel, spaghetti bolognaise of  vegetarische pasta
                        + koffie/ thee

                    </p>
                    <p>Wie wil kan ook steeds nog iets bijbestellen zoals taart bijvoorbeeld. Ook drank is ook gewoon ter plekke af te rekenen. 
                        Tot 6 personen mag de dag zelf gereserveerd worden. Vanaf meer dan 6 liefst al de donderdag van voorafgaande week. Maximum: 14personen en 1 minimum week op voorhand reserveren.</p>
                    <p><a href="http://www.small-tall-gent.be" target="_blank">www.small-tall-gent.be</a></p>
                    <h5>Openingsuren</h5>
                    <p>
                        Maandag - donderdag van 11u30 tot 20u00<br/>
                        Vrijdag - zaterdag van 11u30 tot 21u00 
                    </p>

                </div>
                <div class="col s12 m6">
                    <img src="img/gifts/smalltall2.jpg" alt="small & tall restaurant" />
                    <img src="img/gifts/smalltall1.jpg" alt="small & tall restaurant" />
                </div>
            </div>
            <div class="row">
                <h2><span class="my-yellow">Mezzogiorno</span></h2>
                <div class="col s12 m6 cs-margin">
                    <img src="img/gifts/mezzogiorno3.jpg" alt="Mezzogiorno restaurant" />
                    <img src="img/gifts/mezzogiorno2.jpg" alt="Mezzogiorno restaurant" />
                    <img src="img/gifts/mezzogiorno1.jpg" alt="Mezzogiorno restaurant" />
                </div>
                <div class="col s12 m6 l-align">
                    <p>Ongetwijfeld de beste Siciliaanse keuken van Gent!
                        “chiù si conza chiù si sconza”
                        Deze uitdrukking vat de essentie van hun keuken: Verse producten van de beste kwaliteit in volle zon gegroeid vormen de basis van de keuken. Ze kiezen voor seizoensproducten die dan op hun best zijn. Zo kunnen ze een gevarieerde kaart aanbieden, dagelijks aangevuld met een suggestie van de chef .
                    </p>
                    <h5>Formules (prijzen pp):</h5>
                    <p>
                        Formule 1: 38€
                        1 escaperoom + Lunch @ Il Mezzogiorno:
                        Voorgerecht: anti pasta
                        Hoofdgerecht: pasta 
                    </p>
                    <p>
                        Formule 2: 55€
                        1 escaperoom + Diner @ Il Mezzogiorno:  Voorgerecht:
                        Hoofdgerecht: pasta
                        Dolce
                    </p>
                    <p>
                        Formule 3: 75€
                        1 escaperoom + Diner @ Il Mezzogiorno:
                        Voorgerecht: anti pasta
                        Hoofdgerecht: pasta
                        Secondi: ...
                        Dolce

                    </p>
                    <p> Drank is ter plekke af te rekenen. 
                        Tot en met 7 personen kan op de dag zelf gereserveerd worden. Vanaf 8 personen minimum 3 dagen op voorhand te reserveren. Maximum: 21 personen en minimum 1week op voorhand reserveren.
                    <p>
                    <p><a href="http://ilmezzogiorno.be/" target="_blank">http://ilmezzogiorno.be</a></p>
                    <h5>Openingsuren</h5>
                    <p>
                        Dinsdag – vrijdag  van 12.00 tot 14.00 <br/>
                        Dinsdag – zaterdag van 18.00 tot 22.00 <br/>
                        Zondag en maandag gesloten
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="page-footer eat-footer">
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
