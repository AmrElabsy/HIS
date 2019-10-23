<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa fa-plus"></i> <?php echo lang("KFS_Hos") ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link <?php setActive('home'); ?>" href="home/index"><?php echo lang('home_page') ?> </a></li>
                <li class="nav-item"><a class="nav-link <?php setActive('doctors'); ?>" href="doctor/index"><?php echo lang('doctors') ?> </a></li>
                <li class="nav-item"><a class="nav-link <?php setActive('appointments'); ?>" href="#"><?php echo lang('appointments') ?> </a></li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-success" href="home/makeappointment"><?php echo lang('make_appointment') ?></a></li>
                <li class="nav-item"><a class="nav-link <?php setActive('login'); ?>" href="home/signin"> <i class="fa fa-user"></i> <?php echo lang('login') ?></a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo lang("lang") ?></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="language/arabic"><?php echo lang("arabic_lang") ?></a>
                        <a class="dropdown-item" href="language/english"><?php echo lang("english_lang")?></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
