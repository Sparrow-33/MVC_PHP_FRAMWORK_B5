<?php require APPROOT .'/views/inc/header.php'; ?>
  <div class="row w-50 mx-auto">
      <div class="col-md mx-auto">
          <div class="card card-body bg-light mt-5">
              <?php flash('register_success'); ?>
              <h2 class="mx-auto">Log In</h2>
              <p>Please fill out this to Loh in</p>
              <form action="<?php echo URLROOT; ?>/users/login" method="POST" >

                  <div class="form-group">
                      <label for="name">Email: <sup>*</sup></label>
                      <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['email']; ?>">
                      <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
                  </div>

                  <div class="form-group">
                      <label for="name">Password: <sup>*</sup></label>
                      <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['password']; ?>">
                      <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
                  </div>


                  <div class="row">
                      <div class="col mt-2">
                          <input type="submit" value="Login" class="btn btn-success btn-block">
                      </div>
                      <div class="col">
                          <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light btn-block mt-2 ">No account ? Register</a>
                      </div>
                  </div>

              </form>
          </div>
      </div>
  </div>
  <?php require APPROOT .'/views/inc/footer.php'; ?>
