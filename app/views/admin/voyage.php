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
            <a href=""><i class="me-3 dashEdit fas fa-edit"></i></a>
            <a href=""><i class="me-3 dashCancel fas fa-ban"></i></a>
        </td>

    </tr>
<?php endforeach; ?>
    </tbody>

    </table>



