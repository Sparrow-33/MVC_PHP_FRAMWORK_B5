<?php foreach ($data['trip'] as $result) :?>
<!-- <div class="container py-5 h-100"> -->
    <form action="<?php echo URLROOT ?>/reservations/reserve" method="POST">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card mb-5" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <h3  class="mb-3 tripcordinate"><span class="me-2">From: </span><?php echo $result-> departStation ?><span class="me-2 ms-2">To:</span><?php echo $result-> arriveStation ?></h3>
                        <p class="small mb-0"><i class="fas fa-train"></i> <span class="mx-2">|</span><strong><?php echo $result-> t_name ?></strong></p>
                        <hr class="my-4">
                        <div class="d-flex justify-content-start align-items-center">
                            <p class="mb-0 text-uppercase"><i class="fas fa-clock"></i><span class="text-muted small mx-2"><?php echo $result-> v_time ?></span></p>
                            <p class="mb-0 text-uppercase"><i class="fas fa-calendar me-2"></i> <span class="text-muted small mx-2"><?php echo $result-> v_date ?></span></p>
                            <p class="mb-0 text-uppercase">
                                <?php if ($result-> STATUS) :?>
                                <i class="fas fa-check-circle me-2 available"></i>
                                <span class="text-muted small mx-2 available">Available</span>
                                <?php else: ?>
                                <i class="me-3 dashCancel fas fa-ban"></i></a>
                                <span class="text-muted small mx-2 available">Canceled</span>
                                <span class="ms-3 me-4">|</span></p>
                                <?php endif; ?>
                            <button type="submit" value="<?php echo $result-> V_ID ?>" name="submit" class="btn btn-outline-dark btn-sm btn-floating">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</form>
   <!-- </div>-->
<?php endforeach; ?>