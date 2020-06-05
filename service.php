<?php include ("data/head.php"); ?>

<div id="wrap">
    <?php include ("data/navbar.php"); ?>

    <!--=============================================
    Header
    =============================================!-->
    <div class="container">
        <div class="row cloud-container">
            <div class="col-lg-8 d-none d-sm-none d-md-none d-lg-block" data-animation="slideInRight">
                <div class="cloud-row">
                    <img src="./img/space-photography.jpg" alt="Clouds" class="cloud cloud-A">
                    <img src="./img/space-child.jpg" alt="Clouds" class="cloud cloud-B">
                    <img src="./img/space-artist.jpg" alt="Clouds" class="cloud cloud-C">
                </div>
            </div>
            <div class="col-lg-8 d-md-block d-lg-none">
                <img class="img-fluid" src="./img/space-artist.jpg">
            </div>
            <div class="col-lg-4" data-animation="slideInLeft">
                <h3 class="m-t-5">
                    <?php echo $lang['dl-title'] ?>
                </h3>
                <h5 class="c-gray m-t-2">
                    <?php echo $lang['dl-desc-1'] ?>
                </h5>
                <h5 class="c-gray m-t-1">
                    <?php echo $lang['dl-desc-2'] ?>
                </h5>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="video-bg">
        <div class="row wave-container">
            <div class="gras gras-animation"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" data-animation="flipInY" data-animation-delay="300ms">
                    <div class="embed-responsive embed-responsive-16by9 m-t-3 m-b-8">
                        <video controls="true" class="embed-responsive-item">
                            <source src="./video/banner.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--=============================================
    Content
    =============================================!-->

    <!--=============================================
    FOOTER
    =============================================!-->
    <?php include ("data/footer.php"); ?>
</div>

<?php include ("data/head_scripts.php"); ?>

<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js'></script>