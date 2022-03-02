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
<?php foreach ($data['trip'] as $voyages): ?>
    <tr>

        <td><?php echo $voyages->departStation; ?> </td>
        <td><?php echo $voyages->arriveStation; ?> </td>
        <td><?php echo $voyages->v_date; ?></td>
        <td><?php echo $voyages->v_time; ?></td>
        <td><?php echo $voyages->t_name; ?></td>
        <td><?php echo $voyages->places; ?></td>
        <td>
            <a href="" data-bs-toggle="modal" data-bs-target="#modalForms"><i class="me-3 dashEdit fas fa-edit"></i></a>
            <a href=""><i class="me-3 dashCancel fas fa-ban"></i></a>
        </td>

    </tr>
<?php endforeach; ?>
    </tbody>

    </table>

<div class="modal fade" id="modalForms" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100vw">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Trip detail to modify</h5>
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
                        <button type="submit" class="btn btn-warning float-end">Search<i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
