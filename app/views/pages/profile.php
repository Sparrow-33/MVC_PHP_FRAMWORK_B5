<?php require APPROOT.'/views/inc/header.php' ;?>
    <div class="container py-5">

        <div class="row ">
            <div class="col-lg-4 ">
                <div class="card mb-4 ">
                    <div class="card-body text-center " >
                        <img src="<?php echo URLROOT;?>/public/img/male-avatr.svg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?php echo $data['user']->fullName ?></h5>
                        <p class="text-muted mb-1">User</p>
                        <div class="d-flex justify-content-center mb-2">

                            <button type="button" class="btn btn-outline-primary ms-1" data-bs-toggle="modal" data-bs-target="#modalForm">Edit Profile</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body" >
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><i class="fas fa-user me-3"></i>Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $data['user']->fullName ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><i class="fas fa-envelope me-3"></i>Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $data['user']->email ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><i class="fas fa-phone me-3"></i>Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $data['user']->phone ?></p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><i class="fas fa-map-marked-alt me-3"></i>Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $data['user']->address ?></p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Profile data to modify</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?php echo URLROOT ?>/users/editUserProfile/<?php echo $data['user']->ID ?>" >
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="username" name="name" value="<?php echo $data['user']->fullName ?>" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="username" name="email" value="<?php echo $data['user']->email ?>" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="phone">Phone</label>
                                        <input type="text" class="form-control" id="username" name="phone" value="<?php echo $data['user']->phone ?>" />
                                    </div>

                                    <div class="mb-3">

                                        <label class="form-label" for="address">Address</label>
                                        <input type="text" class="form-control" id="username" name="address" value="<?php echo $data['user']->address ?>" />
                                    </div>


                                    <div class="modal-footer d-block ">
                                        <button type="submit" class="btn btn-warning float-end">Edit<i class="bi bi-edit"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php require APPROOT.'/views/inc/footer.php';?>



