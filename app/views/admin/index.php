 <?php require APPROOT.'/views/inc/dashHeader.php';?>

 <?php require APPROOT.'/views/inc/dashFooter.php';?>
 <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Profile data to modify</h5>
     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     <form method="post" action="<?php echo URLROOT?>/train/addTrain" >
      <div class="mb-3">
       <label for="tName" class="form-label">Train name</label>
       <input type="text" class="form-control" id="username" name="tName" value="" />
      </div>
      <div class="mb-3">
       <label class="form-label" for="seats">Nbre of seats</label>
       <input type="text" class="form-control" id="username" name="seats" value="" />
      </div>

      <div class="modal-footer d-block ">
       <button type="submit" class="btn btn-warning float-end">Add<i class="bi bi-edit"></i></button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>