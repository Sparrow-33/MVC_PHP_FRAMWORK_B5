<?php require APPROOT.'/views/inc/header.php' ;?>
<?php foreach ($data['trips'] as $result) :?>
    <?php flash('register_success'); ?>
<form action="<?php echo URLROOT ?>/reservations/cancelReserve" method="POST">
    <div class="row d-flex justify-content-center align-items-center h-100 mt-3 ">
        <div class="col col-xl-10">
            <div class="card mb-5" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <h3  class="mb-3 tripcordinate"><span class="me-2">From: </span><?php echo $result-> departStation ?><span class="me-2 ms-2">To:</span><?php echo $result-> arriveStation ?></h3>
                    <p class="small mb-0"><i class="fas fa-train"></i> <span class="mx-2">|</span><strong><?php echo $result-> t_name ?></strong></p>
                    <hr class="my-4">
                    <div class="d-flex justify-content-start align-items-center">
                        <p class="mb-0 text-uppercase"><i class="fas fa-clock"></i><span class="text-muted small mx-2"><?php echo $result-> v_time ?></span></p>
                        <p class="mb-0 text-uppercase"><i class="fas fa-calendar me-2"></i> <span class="text-muted small mx-2"><?php echo $result-> v_date ?></span></p>
                        <p class="mb-0 text-uppercase"><i class="fas fa-user"></i> <span class="text-muted small mx-2"><?php echo $data['name'] -> fullName ?></span></p>
                        <p class="mb-0 text-uppercase">
                            <?php if ($result-> STATUS) :?>
                                <i class="fas fa-check-circle me-2 available"></i>
                                <span class="text-muted small mx-2 available">Available</span>

                                 <?php if(!$result-> RSTATUS) :?>
                                    <button type="submit" value="<?php echo $result-> RID ?>" name="reserve" class="btn btn-outline-success btn-sm btn-floating">
                                        Get back
                                    </button>
                                  <?php else : ?>
                                    <button type="submit" value="<?php echo $result-> RID ?>" name="cancel" class="btn btn-outline-danger btn-sm btn-floating">
                                        cancel
                                    </button>
                                  <?php endif; ?>
                            <?php else: ?>
                            <i class="me-3 dashCancel fas fa-ban"></i></a>
                            <span class="text-muted small mx-2 available">Canceled</span>
                            <span class="ms-3 me-4">|</span></p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php endforeach; ?>