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

<div class="header header_cs">
    <div class="menu-wrapper menu-wrapper_cs">
        <?php include 'partials/menu.php' ; ?>
    </div>
</div>

<div class="teambuilding">
    <div class="container">
        <div class="col s12 m12">
            <h2>
                 Bedrijven <span class="my-yellow">Teambuilding</span>
            </h2>
            <h5>What?</h5>
            <p>
                Een escape room is een ruimte waarin je wordt opgesloten met jouw team  in een kamer voor 60 minuten.  Hier worden jullie uitgedaagd om zo snel mogelijk ontsnappen  zonder enige instructies!   De kamer is ingericht volgens een thema en iedere kamer heeft een heel eigen verhaal. De verschillende kamers vind je hier.
             </p>
             <h5>Why?</h5>
             <p>   De twee belangrijkste factoren om deze Escape-uitdaging tot een goed einde te brengen is samenwerking en communicatie.  De Puzzle escape rooms stimuleren deze factoren door ervoor te zorgen dat verschillende persoonlijkheden in de groep nodig zijn.
                Puzzle daagt teams uit om logisch, onlogisch en  'out of the box' te denken.   
             </p>
             <h5>Who?</h5>
             <p>Het spel kan gespeeld worden tot 7 personen per kamer.  Er zijn geen fysieke inspanningen nodig. De escape rooms zijn ontworpen voor alle leeftijden vanaf 16jaar tem 99jaar.
                De prijs is 20€ pp. (enkel escaperoom) 
             </p>

            <img src="img/teambuilding1.jpg" alt="teambuilding pic" />
            <img src="img/teambuilding2.jpg" alt="teambuilding pic" />
            <img src="img/teambuilding3.jpg" alt="teambuilding pic" />

            <h2>Prijs <span class="my-yellow">op maat!</span></h2>
            <p>
                Puzzle biedt verschillende opties om deze teambuildingactiviteit te volmaken.  Alle prijzen kunt u hier terugvinden.  Download PDF  Hieronder vindt u deze opties terug.  Vraag onderaan deze pagina uw op maat gemaakte offerte! 
            </p>
             <h5>Puzzle Meeting Room</h5>
            <p>
                Gebruik onze vergaderruimte voor je eigen vergadering, workshop,  brainstorm sessie of business update.
                Puzzle voorziet een ruimte van 50m2  met alle toebehoren incl.: projectie, scherm, geluid, wifi, flipcharts, schrijfmateriaal, post its, ... Indien er nog andere materialen gewenst worden, zorgen we ervoor dat we het in huis halen.  Verschillende lunch formules zijn ter plaatse mogelijk.   De meeting room is beschikbaar van dinsdag tem vrijdag van 9u tot 18u.
                Indien gewenst, meld dit op uw offerte aanvraag.
            </p>
             <h5>Escape & Eat</h5>
            <p>  Puzzle werkt samen met dichtgelegen restauranten in de buurt.
                Indien gewenst kunnen wij een brunch, lunch, vieruurtje of diner
                koppelen aan een escapegame. 
                De restauranten die we aanbieden zijn:  Small & Tall, Franz Gustav, Il Mezzogiorno, Multatuli & De Stokerij.  Deze liggen op wandelafstand van Puzzle.

                Zij hebben elk hun eigen aangepaste formules in de aanbieding.   De verschillende formules + prijzen: klik hier. (PDF)

                Indien gewenst, meld uw keuze op uw offerte aanvraag.
<           </p>
             <h5>Escape & Analyse</h5>
            <p>
                Als extra optie biedt Puzzle een samenwerking aan met een psycholoog die jullie groepsdynamiek analyseert en achteraf verschillende teamfases bespreekt.

                De positieve elementen van het team worden hier uitgebreid aangekaart.

                De prijs is afhankelijk van het aantal personen. Dit kunnen we u pas geven als we het aantal deelnemers weten.
                Indien gewenst, meld dit op uw offerte aanvraag.
             </p>
             <h5>Apero na het spel of de meeting</h5>
            <p>
                Puzzle biedt verschillende opties aan om na het spel of de meeting gezellig uit te bollen na een leuke en spannende teambuildingsdag.
                Voor 5€ pp bieden wij cava, champagne, fingerfood, ... aan.
                Indien gewenst, meld dit op uw offerte aanvraag.
            </p>
        </div>
    </div>
</div>
<div class="teambuilding_form">
    <div class="container">
        <form class="col s12 m12">
                <div class="input-field col s12">
                    <input name="name" id="Name" type="text" class="validate">
                    <label for="Name">
                        <?php
                        if (isset($languages[$language]['trivial']['name'])) {
                            echo $languages[$language]['trivial']['name'];
                        }
                        ?>
                    </label>
                </div>
                <div class="input-field col s12">
                    <input name="email" id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12">
                    <input name="company" id="company" type="text" class="validate">
                    <label for="company">Bedrijf</label>
                </div>
                <div class="input-field col s12">
                    <input type="date" class="datepicker">
                    <label for="email">Gewenste speeldatum</label>
                </div>
                <div class="input-field col s12">
                    <select>
                        <option value="2">Teambuilding voor 2 personen - €60</option>
                        <option value="3">Teambuilding voor 3 personen - €90</option>
                        <option value="3">Teambuilding voor 4 personen - €120</option>
                        <option value="3">Teambuilding voor 5 personen - €150</option>
                    </select>
                </div>
                <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Opmerkingen</label>
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

<footer class="page-footer orange">
    <div class="footer-copyright">-
        <div class="center container">
            <h2>
                Puzzle - Live Escape Rooms in <?php echo $languages[$language]['trivial']['ghent']; ?> - BE0817944778
            </h2>
        </div>
    </div>
</footer>

<a href="#" class="scrollToTop">
    <span class="inset">
        <i class="fa fa-arrow-up"></i>
    </span>
</a>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bin/materialize.min.js"></script>
<script>
    $(document).ready(function() {
        $('select').material_select();
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 2 // Creates a dropdown of 15 years to control year
        });
    })
</script>

</body>
</html>
