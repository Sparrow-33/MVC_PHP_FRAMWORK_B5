<div class="row w-50 mx-auto">
    <div class="col-md mx-auto">
        <div class="card card-body bg-light mt-5">
            <?php flash('register_success'); ?>
            <h2 class="mx-auto">Adding a trip</h2>
            <p>Please fill out this to add </p>
            <form action="" method="POST" >

                <div class="form-group">
                    <label for="name">Depart Station</label>
                    <input type="text" name="departStation" class="form-control form-control-lg value="">
                    <span class="invalid-feedback"></span>
                </div>

                <div class="form-group">
                    <label for="name">Arrive Station</label>
                    <input type="text" name="arriveStation" class="form-control form-control-lg value="">
                    <span class="invalid-feedback"></span>
                </div>

                <div class="form-group">
                    <label for="name">Date</label>
                    <input type="date" name="date" class="form-control form-control-lg value="">
                    <span class="invalid-feedback"></span>
                </div>

                <div class="form-group">
                    <label for="name">Time</label>
                    <input type="time" name="time" class="form-control form-control-lg value="">
                    <span class="invalid-feedback"></span>
                </div>

                <div class="form-group">
                    <label for="train">Train</label>
                    <input type="text" name="train" class="form-control form-control-lg value="">
                    <span class="invalid-feedback"></span>
                </div>


                <div class="row">
                    <div class="col mt-2">
                        <input type="submit" value="Login" class="btn btn-success btn-block">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>