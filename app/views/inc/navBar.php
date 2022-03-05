<nav class="navbar navbar-expand-lg navbar-light  pe-3 ps-3">
    <div class="container-fluid">
          <a class="navbar-brand mx-auto " href="<?php echo URLROOT; ?>"><img src="<?php echo URLROOT ?>./img/train_white.svg" height="48" alt=""></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


          <?php if(isset($_SESSION['user_id'])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/userProfile"><i class="fas  fa-user-circle"></i></a>
          </li>
          <?php endif; ?>

           <?php if(isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo URLROOT;?>/reservations/MyReservation/<?php echo $_SESSION['user_id'];?>"><i class="fas fa-suitcase"></i></a>
                    </li>
                    <?php endif; ?>

        </ul>

        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
         <?php if(isset($_SESSION['user_id'])) : ?>
                 <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?php echo URLROOT; ?>/users/logout"><i class="fas fa-sign-out-alt"></i></a>
                 </li>
         <?php else : ?>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="<?php echo URLROOT; ?>/users/register"><i class="bi bi-person-plus-fill login"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/login"><i class="bi  bi-box-arrow-in-right login"></i></a>

                  </li>
                </ul>
         <?php endif; ?>
      </div>
    </div>
  </nav>
