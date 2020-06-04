<?php include ("data/head.php"); ?>

<div id="wrap">
    <?php include ("data/navbar.php"); ?>

    <!--=============================================
    Header
    =============================================!-->
    <!--<div class="hero-wrapper">
        <figure>
            <video loop="loop" muted="muted" autoplay="autoplay">
                <source src="https://assets.yesstud.io/studioblvd/video/studioblvd_420.mp4"/>
            </video>
        </figure>
    </div>

    <div class="supermodule">
        <h1 class="c-white">Pudis ea pro delestion nem illatio rescit ipicten damendantur?</h1>
    </div>
    -->

    <section id="banner">

        <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
            <source src="video/placeholder.mp4" type="video/mp4">
            Sorry, your browser does not support HTML5 video.
        </video>

        <div class="supermodule">
            <h1 data-animation="zoomIn" data-animation-delay="300ms">
                “Wir bieten dir die Möglichkeit an dich zu verwirklichen!”
            </h1>
        </div>

        <button id="mute-video">
            <img src="./img/icons/volume-down-solid.svg" class="audio-off">
            <img src="./img/icons/volume-mute-solid.svg" class="audio-on">
        </button>

    </section>

    <!--<div class="welcome">
        <div class="supermodule">
            <h1 data-animation="zoomIn" class="c-white">video here</h1>


            <div class="col-md-6">
                <div class="cloud-container visible-lg-block visible-md-block">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Elbe_-_flussaufw%C3%A4rts_kurz_nach_Ort_K%C3%B6nigstein.jpg/330px-Elbe_-_flussaufw%C3%A4rts_kurz_nach_Ort_K%C3%B6nigstein.jpg" alt="Clouds" class="cloud cloud-A">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Elbe_-_flussaufw%C3%A4rts_kurz_nach_Ort_K%C3%B6nigstein.jpg/330px-Elbe_-_flussaufw%C3%A4rts_kurz_nach_Ort_K%C3%B6nigstein.jpg" alt="Clouds" class="cloud cloud-B">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Elbe_-_flussaufw%C3%A4rts_kurz_nach_Ort_K%C3%B6nigstein.jpg/330px-Elbe_-_flussaufw%C3%A4rts_kurz_nach_Ort_K%C3%B6nigstein.jpg" alt="Clouds" class="cloud cloud-C">
                </div>
            </div>
        </div>
    </div>-->

    <!--=============================================
    3 Elements
    =============================================!-->
    <div class="container">
        <div class="row m-b-20 m-t-10">
            <div class="col-lg-4 m-b-2">
                <div class="element-box" data-animation="zoomIn">
                    <img class="img-fluid" src="./img/icons/pencil-ruler-solid.svg">
                    <h3 class="m-t-5">Pudis ea pro delestion nem</h3>
                    <h5 class="m-b-2">Pudis ea pro delestion nem</h5>
                </div>
            </div>
            <div class="col-lg-4 m-b-2">
                <div class="element-box" data-animation="zoomIn" data-animation-delay="300ms">
                    <img class="img-fluid" src="./img/icons/person-booth-solid.svg">
                    <h3 class="m-t-5">Pudis ea pro delestion nem</h3>
                    <h5 class="m-b-2">Pudis ea pro delestion nem</h5>
                </div>
            </div>
            <div class="col-lg-4 m-b-2">
                <div class="element-box" data-animation="zoomIn" data-animation-delay="600ms">
                    <img class="img-fluid" src="./img/icons/child-solid.svg">
                    <h3 class="m-t-5">Pudis ea pro delestion nem</h3>
                    <h5 class="m-b-2">Pudis ea pro delestion nem</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row m-b-30">
            <div class="col-lg-3 offset-lg-1" data-animation="slideInRight" data-animation-delay="400ms">
                <img src="img/podcast/portrait.jpg" class="img-fluid m-b-3">
            </div>
            <div class="col-lg-7" data-animation="slideInLeft" data-animation-delay="400ms">
                <h3>
                    Creaspace bietet in der ganzen Schweiz Kreativplätze für Jugendliche an.
                </h3>
                <h5 class="c-gray m-t-1">
                    Das Netzwerk sollte jungen, kreativen Künstlern eine Plattform bieten um ihre Projekte umzusetzen und gleichzeitig Leute mit selben Interessen kennenzulernen.
                </h5>

                <div class="row m-t-4">
                    <div class="col-lg-4 col-4">
                        <a href="./dienstleistungen.php">
                            <button class="btn-main m-b-5">Dienstleistungen</button>
                        </a>
                    </div>
                    <div class="col-lg-4 col-4">
                        <a href="./dienstleistungen.php">
                            <button class="btn-main">Kontakt</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=============================================
    Podcast
    =============================================!-->
    <div class="container-fluid podcast-bg">
        <div class="row wave-container">
            <div class="gras gras-animation"></div>
        </div>

        <div class="container podcast-container">
            <div class="row">
                <div class="col-lg-12 podcast-row" data-animation="fadeIn">
                    <img class="img-fluid podcast-portrait" src="img/podcast/gallery/HER_01_Q.JPG">

                    <audio id="music" preload="true">
                        <source src="audio/yukis.mp3">
                    </audio>

                    <div id="audioplayer">
                        <button id="pButton" class="play"></button>

                        <h3>Podcast</h3>
                        <h5 class="c-gray m-b-2">Am qui con et et arum latas nos aut officto rporehenim rest.</h5>

                        <div id="timeline">
                            <div id="playhead"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="demo-gallery">
                        <ul id="lightgallery" class="list-unstyled image-gallery" data-animation="fadeIn">
                            <li data-src="img/podcast/gallery/HER_01.JPG">
                                <a href="">
                                    <img class="img-fluid" src="img/podcast/gallery/HER_01_Q.JPG">
                                </a>
                            </li>
                            <li data-src="img/podcast/gallery/HER_02.jpg">
                                <a href="">
                                    <img class="img-fluid" src="img/podcast/gallery/HER_02_Q.jpg">
                                </a>
                            </li>
                            <li data-src="img/podcast/gallery/HER_03.jpg">
                                <a href="">
                                    <img class="img-fluid" src="img/podcast/gallery/HER_03_Q.jpg">
                                </a>
                            </li>
                        </ul>
                        <ul id="lightgallery-1" class="list-unstyled image-gallery" data-animation="fadeIn">
                            <li data-src="img/podcast/gallery/WORK_1.1.JPG">
                                <a href="">
                                    <img class="img-fluid" src="img/podcast/gallery/WORK_1.1_Q.JPG">
                                </a>
                            </li>
                            <li data-src="img/podcast/gallery/WORK_1.2.JPG"></li>
                            <li data-src="img/podcast/gallery/WORK_1.3.JPG"></li>

                            <li data-src="img/podcast/gallery/WORK_2.1.jpg">
                                <a href="">
                                    <img class="img-fluid" src="img/podcast/gallery/WORK_2.1_Q.jpg">
                                </a>
                            </li>
                            <li data-src="img/podcast/gallery/WORK_2.2.jpg"></li>
                            <li data-src="img/podcast/gallery/WORK_2.3.jpg"></li>

                            <li data-src="img/podcast/gallery/WORK_3.1.JPG">
                                <a href="">
                                    <img class="img-fluid" src="img/podcast/gallery/WORK_3.1_Q.JPG">
                                </a>
                            </li>
                            <li data-src="img/podcast/gallery/WORK_3.2.png"></li>
                            <li data-src="img/podcast/gallery/WORK_3.3.jpg"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container" id="team">
        <div class="row">
            <div class="col-lg-12 m-b-4">
                <h3 class="text-center">Unser Team</h3>
                <h5 class="c-gray text-center">
                    Wir arbeiten daran, euch bestmögliche Diensleitung anzubieten.
                </h5>
            </div>
            <div class="col-lg-3">
                <img class="img-fluid" src="http://localhost/img/podcast/gallery/WORK_1.1_Q.JPG">
            </div>
            <div class="col-lg-3">
                <img class="img-fluid" src="http://localhost/img/podcast/gallery/WORK_1.1_Q.JPG">
            </div>
            <div class="col-lg-3">
                <img class="img-fluid" src="http://localhost/img/podcast/gallery/WORK_1.1_Q.JPG">
            </div>
            <div class="col-lg-3">
                <img class="img-fluid" src="http://localhost/img/podcast/gallery/WORK_1.1_Q.JPG">
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