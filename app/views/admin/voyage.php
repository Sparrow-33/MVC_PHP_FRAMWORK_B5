
<h1 class="">Available Trips</h1>

    <table class="table table-white table-hover">
    <thead>
    <tr>
        <th scope="col">Depart Staion</th>
        <th scope="col">Arrive Station</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Train </th>
        <th scope="col">Seats</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
<?php foreach ($data['trips'] as $voyages): ?>
    <tr>

        <td><?php echo $voyages->departStation; ?> </td>
        <td><?php echo $voyages->arriveStation; ?> </td>
        <td><?php echo $voyages->v_date; ?></td>
        <td><?php echo $voyages->v_time; ?></td>
        <td><?php echo $voyages->t_name; ?></td>
        <td><?php echo $voyages->places; ?></td>
        <td>
            <a href="" data-bs-toggle="modal" data-bs-target="#modalForms<?php echo $voyages->V_ID ?>"><i class="me-3 dashEdit fas fa-edit"></i></a>
            <a href="" data-bs-toggle="modal" data-bs-target="#cancel<?php echo $voyages->V_ID ?>"><i class="me-3 dashCancel fas fa-ban"></i></a>
        </td>

    </tr>
    </tbody>


        <div class="modal fade" id="modalForms<?php echo $voyages->V_ID ?>" tabindex="-1" aria-labelledby="exampleModalLabels" aria-hidden="true" style="width: 100vw">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabels">Trip detail to modify</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo URLROOT;?>/voyages/update" >
                            <div class="mb-3">
                                <label class="form-label">Depart Station</label>
                                <input type="text" class="form-control" id="username" name="departStation" value="<?php echo $voyages->departStation?>" required/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Arrive Station</label>
                                <input type="text" class="form-control" id="username" name="arriveStation" value="<?php echo $voyages->arriveStation; ?>" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" id="username" name="date" value="<?php echo $voyages->v_date; ?>" required  />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Time</label>
                                <input type="time" class="form-control" id="username" name="time" value="<?php echo $voyages->v_time; ?>" required  />
                            </div>


                            <div class="modal-footer d-block ">
                                <button type="submit" name="submit" value="<?php echo $voyages->V_ID; ?>" class="btn btn-warning float-end">Save<i class="fas fa-save ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Cancel confirmation -->
        <div class="modal fade" id="cancel<?php echo $voyages->V_ID ?>" aria-labelledby="cancelModel" aria-hidden="true" tabindex="-1" style="width: 100vw">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cancelModel">Cancel this trip ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit"  class="btn btn-danger"><a href="<?php echo URLROOT?>/dashboard/cancelVoyages/<?php echo $voyages->V_ID ?>">Confirm</a></button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </table>


