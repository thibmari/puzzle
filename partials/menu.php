<a href="#" data-activates="mobile-menu" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
<div class="menu hide-on-med-and-down" role="navigation">
    <div class="menu__item">
        <a href="index.php#about" scrollTo="about">
                    <span class="inset">
                        <img alt="puzzle logo" width="31" src="img/logo.png" />
                    </span>
            <span style="margin-top: -2px;" class="menu__text hide-on-small-and-down">
                <?php
                if (isset($languages[$language]['menu']['about'])) {
                    echo $languages[$language]['menu']['about'];
                }
                ?>
            </span>
        </a>
    </div>
    <div class="menu__item">
        <a href="index.php#rooms" scrollTo="room-row">
                    <span class="inset">
                        <i class="fa fa-building"></i>
                    </span>
            <span class="menu__text hide-on-small-and-down">
                <?php
                if (isset($languages[$language]['menu']['rooms'])) {
                    echo $languages[$language]['menu']['rooms'];
                }
                ?>
            </span>
        </a>
    </div>
    <div class="menu__item menu__item_big">
        <a class="no-prevent" href="escape-eat.php?lang=<?php echo $language; ?>">
                    <span class="inset">
                        <i class="fa fa-cutlery"></i>
                    </span>
            <span class="menu__text hide-on-small-and-down">
               <?php
               if (isset($languages[$language]['menu']['packages'])) {
                   echo $languages[$language]['menu']['packages'];
               }
               ?>
            </span>
        </a>
    </div>
    <div class="menu__item">
        <a class="no-prevent" href="booking.html">
                    <span class="inset">
                        <i class="fa fa-calendar"></i>
                    </span>
            <span class="menu__text hide-on-small-and-down">
                <?php
                if (isset($languages[$language]['menu']['booking'])) {
                    echo $languages[$language]['menu']['booking'];
                }
                ?>
            </span>
        </a>
    </div>
    <div class="menu__item menu__item_big">
        <a class="no-prevent" href="teambuilding.php?lang=<?php echo $language; ?>">
                    <span class="inset">
                        <i class="fa fa-line-chart"></i>
                    </span>
            <span class="menu__text hide-on-small-and-down">
                       Teambuilding
            </span>
        </a>
    </div>
    <div class="menu__item menu__item_small">
        <a class="no-prevent" href="gifts.php?lang=<?php echo $language; ?>">
                    <span class="inset">
                        <i class="fa fa-gift"></i>
                    </span>
            <span class="menu__text hide-on-small-and-down">
               <?php
               if (isset($languages[$language]['menu']['gifts'])) {
                   echo $languages[$language]['menu']['gifts'];
               }
               ?>
            </span>
        </a>
    </div>
    <div class="menu__item menu__item_small">
        <a href="index.php#faq" scrollTo="faq">
                    <span class="inset">
                        <i class="fa fa-comments"></i>
                    </span>
            <span class="menu__text hide-on-small-and-down">
                <?php
                if (isset($languages[$language]['menu']['faq'])) {
                    echo $languages[$language]['menu']['faq'];
                }
                ?>
            </span>
        </a>
    </div>
    <div class="menu__item">
        <a href="index.php#contact" scrollTo="contact">
                    <span class="inset">
                        <i class="fa fa-envelope"></i>
                    </span>
            <span class="menu__text hide-on-small-and-down">
               <?php
               if (isset($languages[$language]['menu']['contact'])) {
                   echo $languages[$language]['menu']['contact'];
               }
               ?>
            </span>
        </a>
    </div>
</div>
<ul class="side-nav" id="mobile-menu">
    <li>
        <a href="index.php#about" scrollTo="about">
            <?php
            if (isset($languages[$language]['menu']['about'])) {
                echo $languages[$language]['menu']['about'];
            }
            ?>
        </a>
    </li>
    <li>
        <a href="index.php#rooms" scrollTo="room-row">
            <?php
            if (isset($languages[$language]['menu']['rooms'])) {
                echo $languages[$language]['menu']['rooms'];
            }
            ?>
        </a>
    </li>
    <li>
        <a class="no-prevent" href="escape-eat.php?lang=<?php echo $language; ?>">
            Escape & eat
        </a>
    </li>
    <li>
        <a class="no-prevent" href="booking.html">
            <?php
            if (isset($languages[$language]['menu']['booking'])) {
                echo $languages[$language]['menu']['booking'];
            }
            ?>
        </a>
    </li>
    <li>
        <a class="no-prevent" href="teambuilding.php?lang=<?php echo $language; ?>">
            Teambuilding
        </a>
    </li>
    <li>
        <a class="no-prevent" href="escape-eat.php?lang<?php echo $language; ?>">
            <?php
            if (isset($languages[$language]['menu']['packages'])) {
                echo $languages[$language]['menu']['packages'];
            }
            ?>
        </a>
    </li>
    <li>
        <a href="index.php#faq" scrollTo="faq">
            <?php
            if (isset($languages[$language]['menu']['faq'])) {
                echo $languages[$language]['menu']['faq'];
            }
            ?>
        </a>
    </li>
    <li>
        <a href="index.php#contact" scrollTo="contact">
            <?php
            if (isset($languages[$language]['menu']['contact'])) {
                echo $languages[$language]['menu']['contact'];
            }
            ?>
        </a>
    </li>
</ul>