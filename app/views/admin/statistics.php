<?php flash('success_update');?>
<?php flash('addVoyage');?>


<div class="height-100 bg-light">
    <div class="container-fluid">
        <section>
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h5 class="text-uppercase">Minimal Statistics Cards</h5>
                    <p>Statistics on minimal cards.</p>
                </div>
            </div>

            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-danger"><?php echo $data['trains'] ?></h3>
                                    <p class="mb-0">Trains in service</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-train text-danger fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-success"><?php echo $data['num'];?></h3>
                                    <p class="mb-0">Clients</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="far fa-user text-success fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-warning"><?php echo $data['voyage']?></h3>
                                    <p class="mb-0">Available Trips</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-suitcase text-warning fa-3x"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between px-md-1">
                                <div>
                                    <h3 class="text-info"><?php echo $data['reserve']?></h3>
                                    <p class="mb-0">Tickets sold</p>
                                </div>
                                <div class="align-self-center">
                                    <i class="fa fa-ticket-alt text-info fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>