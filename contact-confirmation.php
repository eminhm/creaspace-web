<?php include ("data/head.php"); ?>

<div id="wrap">
    <?php include ("data/navbar.php"); ?>

    <!--=============================================
     HEADER
     =============================================!-->
    <div class="container-fluid">
        <div class="row">
            <div class="nav-divider"></div>
            <div class="col-md-6 col-md-offset-3">
                <div class="divider-3"></div>

                <div class="bg-message">
                    <div class="divider-3"></div>
                    <h3 class="no-spacing center-block c-white no-margin"><?php echo $lang['confirmed'] ?> <3</h3>
                    <p class="c-white">
                        <?php echo $lang['mailingConfirmedText'] ?>
                    </p>
                    <div id="mdtimer">
                        <p class="c-gray">
                            <b class="bgc-grey"><?php echo $lang['redirectIn'] ?> <span>5</span> <?php echo $lang['redirectSeconds'] ?></b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-10"></div>
    </div>
</div>

<script src="js/mail.js" type="text/javascript" rel="script"></script>
<?php include ("data/head_scripts.php"); ?>

