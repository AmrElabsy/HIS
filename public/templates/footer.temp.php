<?php
global $noFooter;
if (!isset($noFooter))
{
    ?>
    <nav class="footer"  id="footer">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <h5><i class="fa fa-globe"></i> <?php echo lang('important_links')?></h5>
                <div class="content">
                    <div><a href="home/index"><?php echo lang('home_page') ?></a></div>
                    <div><a href="doctor/index"><?php echo lang('doctors') ?></a></div>
                    <div><a href="#"><?php echo lang('clinics') ?></a></div>
                    <div><a href="#"><?php echo lang('make_appointment') ?></a></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <h5><i class="fa fa-newspaper"></i> <?php echo lang('recent_news') ?></h5>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pharetra ac magna nec cursus.
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <h5><i class="fa fa-phone"></i> <?php echo lang('contact_us') ?></h5>
                <div class="content">
                    <div><i class="fa fa-phone"></i> 0473214998</div>
                    <div><i class="fa fa-envelope"></i> kfs_info@kfs.edu.eg</div>
                </div>
            </div>
        </div>
    </nav>

    <?php
}
?>
    <script type="application/javascript" src="<?php echo JS_PATH?>jquery.js"></script>
    <script type="application/javascript" src="<?php echo JS_PATH?>all.js"></script>
    <script src="<?php echo JS_PATH?>wow.min.js"></script>
    <script>
        new WOW().init()
    </script>
    <script src="<?php echo JS_PATH?>bootstrap.arabic.js"></script>
    <script src="<?php echo JS_PATH?>jquery-ui.js"></script>
    <script src="<?php echo JS_PATH?>script.js"></script>
    <?php
    if (!isset($_SESSION['lang']))
    {
        ?>
        <script src="<?php echo JS_PATH?>script-ar.js"></script>
        <?php
    }
    else {
        if ($_SESSION['lang'] == 'arabic') {
            ?>
            <script src="<?php echo JS_PATH?>script-ar.js"></script>
            <?php
        } elseif ($_SESSION['lang'] == 'english') {
            ?>
            <script src="<?php echo JS_PATH?>script-en.js"></script>
            <?php
        }
    }
    ?>
</body>
</html>
