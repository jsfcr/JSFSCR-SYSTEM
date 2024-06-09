


<!-- save registration -->
<div class="modal" id="saveConfirmation" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Are you sure you want to save?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3 class="text-danger" id="alertInfo"></h3>
       
        <div id="newInfo">
          <h6>Id no. : <span class="card-text bolder-1 small bg-primary p-1 rounded-2 text-white" id="idnoInfo"></span></h6>
          <h6>Fullname : <span class="card-text bolder-1 small bg-primary p-1 rounded-2 text-white" id="fnameInfo"></span></h6>
          <h6>Course & Year : <span class="card-text bolder-1 small bg-primary p-1 rounded-2 text-white" id="courseYearInfo"></span></h6>
          <h6>Address : <span class="card-text bolder-1 small bg-primary p-1 rounded-2 text-white" id="addressInfo"></span></h6>

       </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <!-- <a type="button" class="btn btn-success saveBtn" id="saveRegData" href="<?php echo paramlnk.'&fnc=insert'?>">Yes</a> -->
         <button type="button" id="saveRegData" class="btn btn-success saveBtn">Yes</button>
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal" aria-label="Close">No</button>
      </div>
    </div>
  </div>
</div>