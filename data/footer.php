<footer class="footer-aab">
    <div class="footer-box">
        <div class="container m-b-1">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center m-b-1">
                    <!-- Links -->
                    <div class="footer-child m-t-2">
                        <a href="contact">
                            <?php echo $lang['contact'] ?>
                        </a>
<!--                        <span class="c-gray">|</span>-->
<!--                        <a href="presskit.php">-->
<!--                            Press Kit-->
<!--                        </a><span class="c-gray">|</span>-->
<!--                        <a href="privacy.php">-->
<!--                            --><?php //echo $lang['cookiePrivacy'] ?>
<!--                        </a>-->
                    </div>

                    <!-- Social Media -->
                    <div class="social footer-social">
                        <a href="https://instagram.com/onekksu" target="_blank"><img src="./img/icons/instagram-brands.svg"></a>&nbsp;
                        <a href="https://twitter.com/onekksu" target="_blank"><img src="./img/icons/twitter-brands.svg"></a>&nbsp;
                        <a href="https://youtube.com/onekksu"target="_blank"><img src="./img/icons/youtube-brands.svg"></a>&nbsp;
                        <a href="https://onekksu.itch.io/mindfate" target="_blank"><img src="./img/icons/itch-io-brands.svg"></a>&nbsp;
                        <a href="https://www.reddit.com/user/onekksu" target="_blank"><img src="./img/icons/reddit-alien-brands.svg"></a>&nbsp;
                    </div>
                </div>
            </div>
            <div class="footer-border"></div>

            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-5 col-sm-8 col-xs-12">
                            <!-- Mailing Title + Tooltip -->
                            <p class="center-block c-white no-margin center-block m-t-1">
                                <?php echo $lang['mailing'] ?>
                                <button class="info-button red-tooltip" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['mailingText'] ?>">
                                    <img src="./img/icons/info-circle-solid.svg">
                                </button>
                            </p>

                            <!-- Form -->
                            <div id="mc_embed_signup" class="m-t-1">
                                <form action="https://onekksu.us19.list-manage.com/subscribe/post?u=6e8929e6fcc80feb0b3906eac&amp;id=71d1f129f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate text-center" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <div class="mc-field-group">
                                            <input placeholder="<?php echo $lang['emailAdress'] ?>" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                        </div>

                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>

                                        <div id="mc_robot" aria-hidden="true">
                                            <input type="text" name="b_6e8929e6fcc80feb0b3906eac_71d1f129f0" tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <input type="submit" value="<?php echo $lang['countMeIn'] ?>" name="subscribe" id="mc-embedded-subscribe">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rights Desktop -->
                <div class="visible-lg-block visible-md-block visible-sm-block col-md-3 col-sm-4">
                    <small class="text-right pull-right no-margin c-white m-t-3">
                        <?php echo $lang['rights'] ?><br> © Emin Araki
                    </small>
                </div>

                <!-- Rights Mobile -->
                <div class="visible-xs-block col-xs-12">
                    <div class="footer-border m-t-2"></div>
                    <small class="text-center center-block no-margin c-white m-t-1">
                        <?php echo $lang['rights'] ?> © Emin Araki
                    </small>
                </div>
            </div>
        </div>
    </div>
</footer>