<?php
$clinics = $this->data['clinics'];
$doctors = $this->data['doctors'];
$countOfDoctors = $this->data['countOFDoctors'];
$countOfClinics = $this->data['countOfClinics'];
$countOfPatients = $this->data['countOfPatients'];
?>

<div class="page-header">
    <img src="public/images/kfs_hos.png">
</div>

<div class="clinics">
    <h1 class="text-center"><?php echo lang('clinics'); ?></h1>
    <div class="row">
        <?php
        foreach ($clinics as $clinic) {
            ?>
            <div class="col-sm-6 col-lg-4 wow slideInUp">
                <div class="clinic">
                    <div class="clinic-img"><img src="public/images/clinics/teeth.jpg"></div>
                    <div class="clinic-name"><?php echo $clinic[lang('DBname')]?></div>
                    <div class="clinic-btn text-center">
                        <a href="#" class="btn btn-outline-success"><?php echo lang('make_appointment') ?></a>
                        <br/>
                        <a href="#" class="btn btn-outline-danger">Show Doctors</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <a href="clinic/index" class="show_all text-center">Show More</a>
</div>

<div class="doctors_home">
    <h1 class="text-center"><?php echo lang('doctors') ?></h1>
    <div class="row">
        <?php
        foreach($doctors as $doctor) {
        ?>
            <div class="col-md-6 col-lg-4 wow zoomIn">
                <div class="doctor">
                    <div class="row">
                        <div class="col-5">
                            <div class="doctor-img"><img src="public/images/doctors/doctor.png"></div>
                        </div>

                        <div class="col-7 text-center">
                            <div class="doctor-name">
                                <h4><?php echo $doctor[lang('DBname')] ?></h4>
                                <p class="doctor_specialize"><?php echo $doctor['specialization']?></p>
                            </div>

                            <div class="doctor-btn">
                                <a href="#" class="btn btn-success"><i class="fa fa-user"></i> <?php echo lang('view_profile') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <a href="doctor/index" class="show_all text-center">Show More</a>
</div>

<div class="stats">
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="stat stat-1">
                <span class="icon"><i class="fas fa-clinic-medical"></i> </span><?php echo lang('clinics') ?>
                <span class="num" id="num"><?php echo $countOfClinics;?></span>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="stat stat-2">
                <span class="icon"><i class="fa fa-user"></i> </span><?php echo lang('patients') ?>
                <span class="num" id="num2"><?php echo $countOfPatients;?></span>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="stat stat-3">
                <span class="icon"><i class="fa fa-user-md"></i> </span><?php echo lang('doctors') ?>
                <span class="num" id="num3"><?php echo $countOfDoctors;?></span>
            </div>
        </div>
    </div>
</div>