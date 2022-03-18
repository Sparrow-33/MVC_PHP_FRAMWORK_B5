<?php require APPROOT .'/views/inc/header.php'; ?>
 <!-- <div class="row w-50 mx-auto">
      <div class="col-md mx-auto">
          <div class="card card-body bg-light mt-5">
              <h2 class="mx-auto">Create An Account</h2>
              <p>Please fill out this to register with us</p>
              <form action="<?php echo URLROOT; ?>/users/register" method="POST" >
                  <div class="form-group ">
                      <label for="name">Name: <sup>*</sup></label>
                      <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['name']; ?>">
                      <span class="invalid-feedback"><?php echo $data['name_err'];?></span>
                  </div>

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

                  <div class="form-group">
                      <label for="name">Confirm password: <sup>*</sup></label>
                      <input type="password" name="confirm password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['confirm_password']; ?>">
                      <span class="invalid-feedback"><?php echo $data['confirm_password_err'];?></span>
                  </div>

                  <div class="row">
                      <div class="col mt-2">
                          <input type="submit" value="Register" class="btn btn-success btn-block">
                      </div>
                      <div class="col">
                          <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block mt-2 ">Have an account ? Login</a>
                      </div>
                  </div>

              </form>
          </div>
      </div>
  </div> -->

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="<?php echo URLROOT?>/public/img/register.jpg" class="img-fluid"
                     alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="<?php echo URLROOT; ?>/users/register" method="POST">


                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label for="name">Name: <sup>*</sup></label>
                        <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['name']; ?>">
                        <span class="invalid-feedback"><?php echo $data['name_err'];?></span>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label for="name">Email: <sup>*</sup></label>
                        <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label for="name">Password: <sup>*</sup></label>
                        <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
                    </div>

                    <!-- confirm Password input -->
                    <div class="form-outline mb-3">
                        <label for="name">Confirm password: <sup>*</sup></label>
                        <input type="password" name="confirm password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['confirm_password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['confirm_password_err'];?></span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">

                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" value="Register" class="btn btn-success btn-block">
                        <p class="small fw-bold mt-2 pt-1 mb-0">have an account ?  <a href="<?php echo URLROOT; ?>/users/login" class="link-danger">Login</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>
  <?php require APPROOT .'/views/inc/footer.php'; ?>
 
