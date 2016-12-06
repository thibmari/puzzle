<div class="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col s12 m1 invisible">
ss
            </div>
            <div class="col s12 m4">
                <h5>Sitemap</h5>
                <ul>
                    <li><a href="index.php#about">
                            <?php
                            if (isset($languages[$language]['menu']['about'])) {
                                echo $languages[$language]['menu']['about'];
                            }
                            ?>
                        </a>
                    </li>
                    <li><a href="index.php#rooms">
                            <?php
                            if (isset($languages[$language]['menu']['rooms'])) {
                                echo $languages[$language]['menu']['rooms'];
                            }
                            ?>
                        </a>
                    </li>
                    <li><a href="index.php#prices">
                            <?php
                            if (isset($languages[$language]['menu']['prices'])) {
                                echo $languages[$language]['menu']['prices'];
                            }
                            ?>
                        </a>
                    </li>
                    <li>
                        <a href="booking.php">
                            <?php
                            if (isset($languages[$language]['menu']['booking'])) {
                                echo $languages[$language]['menu']['booking'];
                            }
                            ?>
                        </a>
                    </li>
                    <li><a href="teambuilding.php">
                            Teambuilding
                        </a>
                    </li>
                    <li><a href="gift.php">
                            <?php
                            if (isset($languages[$language]['menu']['packages'])) {
                                echo $languages[$language]['menu']['packages'];
                            }
                            ?>
                        </a>
                    </li>
                    <li><a href="faq.php">
                            <?php
                            if (isset($languages[$language]['menu']['faq'])) {
                                echo $languages[$language]['menu']['faq'];
                            }
                            ?>
                        </a>
                    </li>
                    <li>
                        <a href="contact.php">
                            <?php
                            if (isset($languages[$language]['menu']['contact'])) {
                                echo $languages[$language]['menu']['contact'];
                            }
                            ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col s12 m4">
                <h5> <?php
                    if (isset($languages[$language]['trivial']['uren'])) {
                        echo $languages[$language]['trivial']['uren'];
                    }
                    ?></h5>
                <ul>
                    <li>Maandag - 15:00-21:00</li>
                    <li>Dinsdag - 15:00-21:00</li>
                    <li>Woensdag - 15:00-21:00</li>
                    <li>Donderdag - 15:00-21:00</li>
                    <li>Vrijdag - 14:00-22:00</li>
                    <li>Zaterdag - 08:30-22:30</li>
                    <li>Zondag - 08:30-22:30</li>
                </ul>
            </div>
            <div class="col s12 m3">
                <h5>Partners</h5>
                <ul>
                    <li><a href="http://gentteambuilding.be/nl" target="_blank">Gouden Gids</a></li>
                    <li><a href="http://www.maisonrouge.be" target="_blank">Maison Rouge</a></li>

                    <li>Site by <a href="http://www.ibault.com" target="_blank">iBault</a></li>
                </ul>
            </div>

        </div>
        <h2 class="center-align">
            Puzzle - Live Escape Rooms in <?php echo $languages[$language]['trivial']['ghent']; ?> - BE 0656751168
        </h2>
    </div>
</div>