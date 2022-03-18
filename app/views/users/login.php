<?php require APPROOT .'/views/inc/header.php'; ?>
 <!-- <div class="row w-50 mx-auto">
      <div class="col-md mx-auto">
          <div class="card card-body bg-light mt-5">
              <?php // flash('register_success'); ?>
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
  </div>  -->
<?php flash('register_success');?>
 <section class="vh-100 ">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="<?php echo URLROOT?>/public/img/loginIMG.jpg" class="img-fluid"
                     alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 login_sec">
                <form action="<?php echo URLROOT; ?>/users/login" method="POST">


                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['email']; ?>" placeholder = "Enter Email">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err']))?'is-invalid' : '';?>
                       value="<?php echo $data['password']; ?>" placeholder = "Enter password">
                        <label class="form-label" for="form3Example4">Password</label>
                        <span class="invalid-feedback"><?php echo $data['password_err'];?></span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">

                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input type="submit" value="Login" class="btn btn-success btn-block">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="<?php echo URLROOT; ?>/users/register" class="link-danger">Register</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>
  <?php require APPROOT .'/views/inc/footer.php'; ?>
