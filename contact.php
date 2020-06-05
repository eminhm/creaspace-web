<?php include ("data/head.php"); ?>

<div id="wrap">
    <?php include ("data/navbar.php"); ?>

    <!--=============================================
    Header
    =============================================!-->
    <div class="container">
        <div class="row m-t-10" data-animation="fadeIn">
            <div class="col-lg-4 offset-lg-1">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo $lang['email'] ?></label>
                        <input class="form-control" id="exampleInputEmail1" type="email" name="Email" id="Email" placeholder="<?php echo $lang['email'] ?>" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><?php echo $lang['message'] ?></label>
                        <textarea name="Message" rows="5" id="Message" placeholder="<?php echo $lang['message'] ?>" required=""></textarea>
                    </div>
                    <button type="submit" name="submit" value="Send" class="btn-submit m-b-1"><?php echo $lang['send'] ?></button>
                </form>
            </div>
            <div class="col-lg-6">
                <h3 class="m-t-3"><?php echo $lang['contact'] ?></h3>
                <h5 class="c-gray m-t-2"><?php echo $lang['contactText'] ?></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 m-t-5" data-animation="slideInUp" data-animation-delay="400ms">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.770529227978!2d8.587977915828326!3d47.26019026983618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd4d48bc55da582fc!2sBildungszentrum%20Z%C3%BCrichsee%20BZZ!5e0!3m2!1sde!2sch!4v1591351868364!5m2!1sde!2sch" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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