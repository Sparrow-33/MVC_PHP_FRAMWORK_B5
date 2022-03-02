    <div class="container py-5 h-100">
        <div class="row d-flex  h-100">
            <?php foreach($data['user'] as $user) : ?>
            <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">
                            <div class="flex-shrink-0">
                                <img src="<?php echo URLROOT; ?>/public/img/male-avatr.svg" alt="Generic placeholder image" class="img-fluid" style="width: 100px; border-radius: 10px;">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1"><?php echo $user -> fullName; ?></h5>
                                <p class="mb-2 pb-1" style="color: #2b2a2a;">normal user</p>
                                <div class="d-flex justify-content-start rounded-3 p-2 mb-2" style="background-color: #efefef;">
                                    <div>
                                        <p class="small text-muted mb-1">Email</p>
                                        <p class="mb-0"><?php echo $user -> email; ?></p>
                                    </div>
                                </div>


                                <div class="d-flex pt-1">
                                    <button type="button" class="btn btn-outline-primary me-1 flex-grow-1">Disable</button>
                                    <button type="button" class="btn btn-primary flex-grow-1">More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

        </div>
    </div>
