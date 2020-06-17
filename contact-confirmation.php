<?php include ("data/head.php"); ?>

<div id="wrap">

    <!--=============================================
    Navigation
    =============================================!-->
    <?php include ("data/navbar.php"); ?>

    <!--=============================================
    Confirmation
    =============================================!-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3 m-t-12" id="contact-confirmation">
                <h3 class="no-margin">
                    <b><?php echo $lang['confirmed'] ?></b>
                </h3>

                <h4 class="m-t-1 m-b-3">
                    <?php echo $lang['mailingConfirmedText'] ?>
                </h4>
                <div id="mdtimer">
                    <p class="c-gray">
                        <?php echo $lang['redirectIn'] ?> <span>5</span> <?php echo $lang['redirectSeconds'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--=============================================
    Footer
    =============================================!-->
    <?php include ("data/footer.php"); ?>
</div>

<?php include ("data/head_scripts.php"); ?>

<!--=============================================
Redirect
=============================================!-->
<script src="js/mail.js" type="text/javascript" rel="script"></script>

