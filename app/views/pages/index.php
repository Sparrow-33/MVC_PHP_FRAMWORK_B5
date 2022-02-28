<?php require APPROOT.'/views/inc/header.php' ;?>
<img src="<?php echo URLROOT ?>./img/train6_BG.jpg" class=" bg_img img-fluid bg_img ">
<div class=" container-fluid bg_div">
    <h1 >Welcome to <span>YouExpress</span></h1>
</div>


<!-- Click on Modal Button -->
<div class="d-flex btn-container">
<button id="main_btn" type="button" class=" search btn btn-primary " data-bs-toggle="modal" data-bs-target="#modalForm">
    Search for a trip
</button>
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
                <form method="post" action="<?php echo URLROOT;?>/voyage/searchVoyage" >
                    <div class="mb-3">
                        <label class="form-label">Depart Station</label>
                        <input type="text" class="form-control" id="username" name="departStation" placeholder="From..." />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Arrive Station</label>
                        <input type="text" class="form-control" id="username" name="arriveStation" placeholder="To..." />
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


