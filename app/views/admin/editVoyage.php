<!-- Edit Model POPUP -->

<div class="modal fade" id="modalForms" tabindex="-1" aria-labelledby="exampleModalLabels" aria-hidden="true" style="width: 100vw">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabels">Trip detail to modify</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo URLROOT;?>" >
                    <div class="mb-3">
                        <label class="form-label">Depart Station</label>
                        <input type="text" class="form-control" id="username" name="departStation" placeholder="From..." />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Arrive Station</label>
                        <input type="text" class="form-control" id="username" name="arriveStation" placeholder="To..." />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="date" class="form-control" id="username" name="" placeholder="To..." />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Time</label>
                        <input type="time" class="form-control" id="username" name="" placeholder="To..." />
                    </div>
                    <div class="modal-footer d-block ">
                        <button type="submit" class="btn btn-warning float-end">Save<i class="fas fa-save ms-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
