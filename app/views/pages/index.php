<?php require APPROOT.'/views/inc/header.php' ;?>
<?php flash('register_success'); ?>
<?php flash('cant_cancel');?>
<?php flash('edit_profile');?>
<?php flash('failed_edit_profile'); ?>

<!-- <section class="index_section">

            <div class="A1 container-fluid h-custom">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <h1 > <span class="banner_span_title">YouExpress</span></h1>
            </div>
            </div>

            <div class="col-md-9  col-xl-5 ">
                <img src="<?php echo URLROOT?>/public/img/pos_bg_3.svg" class="img-fluid bgImg"
                     alt="Sample image" height="200">
            </div>   -->

    <!-- Click on Modal Button -->

  <!--  <div class="btn_container">
    <button id="main_btn" type="button" class=" search btn btn-primary " data-bs-toggle="modal" data-bs-target="#modalForm">
        Search for a trip <i class="fas fa-long-arrow-alt-right"></i>
    </button>
    </div>
</section>  -->

<!-- first section -->
<div class="first-section">
    <div class="title-btn">
        <h1 >YouExpress</h1>
        <p>we saves your time both while purchasing, the check-in and during the travel.</p>
        <a >
            <button id="main_btn" type="button" class=" search btn btn-primary " data-bs-toggle="modal" data-bs-target="#modalForm">
                Search for a trip <i class="fas fa-long-arrow-alt-right"></i>
            </button>
        </a>
    </div>

    <div class="online ">
        <img src="<?php echo URLROOT?>/public/img/pos_bg_3.svg" alt="">
    </div>
</div>












<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enter trip details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo URLROOT;?>/VoyagePassenger/searchVoyage" >
                    <div class="mb-3">
                        <label class="form-label">Depart Station</label>
                        <input type="text" class="form-control" id="username" name="departStation" placeholder="From..." />
                        <span class="invalid-feedback"><?php echo $data['depart_err'];?></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Arrive Station</label>
                        <input type="text" class="form-control" id="username" name="arriveStation" placeholder="To..." />
                        <span class="invalid-feedback"><?php echo $data['arrive_err'];?></span>
                    </div>


                    <div class="modal-footer d-block ">
                        <button type="submit" class="btn btn-warning float-end">Search<i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php require APPROOT.'/views/inc/footer.php';?>


