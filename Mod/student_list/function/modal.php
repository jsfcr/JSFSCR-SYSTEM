<!-- detele modal -->
<div class="modal" id="deleteModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Are you sure you want to delete?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5 class="card-text"><span class="p-1 bg-primary text-white" id="idDel"></span></h5>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <!-- <a type="button" class="btn btn-success saveBtn" id="saveRegData" href="<?php echo paramlnk.'&fnc=insert'?>">Yes</a> -->
         <button type="button" id="delBtnSub" class="btn btn-danger">Yes</button>
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal" aria-label="Close">No</button>
      </div>
    </div>
  </div>
</div>



<!-- Biometric Registration modal -->
<div class="modal" id="biometricModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Biometric Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="container-fluid">
          <div class="col-12">
            <h6>ID number : <span id="stidFP"></span></h6>
          </div>
            <div class="col-12 row">
             
              <?php  

               
          foreach ($fpArray as $key => $value) {
            $filenameOnFolder = $value[1];

                
         
               ?>

                <div class="col-lg-3 col-md-6 col-sm-3 h-75 mh-100">
                  <div class="col-12">
                    <span class="img-thumbnail bolder-1 bg-info text-white fingerType" id="<?php echo $value[0]; ?>"><?php echo $value[0]; ?></span>
                  </div>
                  <div id="fpImgHolder" class="col-12">
                    <a href="#" id="<?php echo $key; ?>" name="<?php echo $value[1]; ?>" class="btn bg-transparent border-0" data-bs-toggle="modal" data-bs-target="#bioScanner" value="<?php echo $value[0]; ?>" onclick="openFpScanner(this.name)"><img id="<?php echo $value[1]; ?>" src="Img/finger-print-notuploaded.png" class="img-fluid"></a>
                  </div>
                    
                </div>

              <?php } ?>

            </div>
        </div>

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <!-- <a type="button" class="btn btn-success saveBtn" id="saveRegData" href="<?php echo paramlnk.'&fnc=insert'?>">Yes</a> -->
         <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#saveConfirmation" id="saveBtnreg">Done</button>
      </div>
    </div>
  </div>
</div>



<!-- biometric scanner modal -->
<div class="modal" id="bioScanner" tabindex="-1">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header row">
        <div class="col-12">
           <div id="content-reader">  
            <h4>Select Reader :</h4>
            <select class="form-control mb-1" id="readersDropDown" onchange="selectChangeEvent()">
            </select>
            <div id="readerDivButtons">
                <table width=100% style="text-align: center;">
                        <tr>
                            <td>
                                <input type="button" class="btn btn-primary" id="refreshList" value="Refresh List" 
                                    onclick="Javascript:readersDropDownPopulate(false)">
                            </td>
                           <!--  <td>
                                <input type="button" class="btn btn-primary" id="capabilities" value="Capabilities"
                                data-toggle="modal" data-target="#myModal" onclick="Javascript:populatePopUpModal()">
                            </td>   -->
                        </tr>
                </table>

              <!-- Modal - Pop Up window content-->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content -->
                  <div class="modal-content" id="modalContent" >
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Reader Information</h4>
                    </div>
                    <div class="modal-body" id="ReaderInformationFromDropDown">
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>
  
            </div>
        </div>
        </div>
        <div class="col-12 align-middle">
           <h6>Scan Quality</h6> <input type="text" disabled class="form-control col-12 align-middle" id="qualityInputBox">
        </div>
       
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div id="content-capture"  class="modal-body">
        <div  class="col-12">
          <h5 id="status" class="bolder-1"></h5>            
            <div id="imagediv"></div>
          <div id="contentButtons">
                <table width=70% align="center">
                    <tr>
                        <td>
                            <input type="button" class="btn btn-primary" id="clearButton" value="Clear" onclick="Javascript:onClear()">
                        </td>
                        <td data-toggle="tooltip" title="Will work with the .png format.">
                            <input type="button" class="btn btn-primary" id="save" value="Save">
                        </td>
                        <td>
                            <input type="button" class="btn btn-primary" id="start" value="Start" onclick="Javascript:onStart()">
                        </td>
                        <td>
                           <input type="button" class="btn btn-primary" id="stop" value="Stop" onclick="Javascript:onStop()">
                        </td>
                        <td>
                           <input type="button" class="btn btn-primary" id="saveImagePng" value="Export" onclick="Javascript:onImageDownload()">
                        </td>
                        <td>
                            <input type="button" class="btn btn-primary" id="info" value="Info" onclick="Javascript:onGetInfo()">
                        </td>
                </table>
            </div>
        </div>
        
      </div>
      <div class="modal-footer row">
        <div class="col-12">
          <div id="saveAndFormats" class="d-none">
             
              <form name="myForm" style ="border : solid grey;padding:5px;">
              <b>Acquire Formats :</b><br>
              <table>
                <tr data-toggle="tooltip" title="Will save data to a .raw file.">
                  <td>
                    <input type="checkbox" name="Raw" value="1" onclick="checkOnly(this)"> RAW  <br>
                  </td>
                </tr>
                <tr data-toggle="tooltip" title="Will save data to a Intermediate file">
                  <td>
              <input type="checkbox" name="Intermediate" value="2" onclick="checkOnly(this)"> Feature Set<br>
                  </td>
                </tr>
                <tr data-toggle="tooltip" title="Will save data to a .wsq file.">
                  <td>
              <input type="checkbox" name="Compressed" value="3" onclick="checkOnly(this)"> WSQ<br>
                  </td>
                </tr>
                <tr data-toggle="tooltip" title="Will save data to a .png file.">
                  <td>
              <input type="checkbox" name="PngImage" checked="true" value="4" onclick="checkOnly(this)"> PNG
                  </td>
                </tr>
              </table>
              </form>
          
            
            </div>

        </div>
        </div>
        <div class="col-12 row">
             <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            <!-- <a type="button" class="btn btn-success saveBtn" id="saveRegData" href="<?php echo paramlnk.'&fnc=insert'?>">Yes</a> -->
             <!-- <button type="button" id="delBtnSub" class="btn btn-danger col-8 mx-auto mb-1">Yes</button> -->
            <button type="button" class="btn btn-warning col-8 mx-auto" data-bs-toggle="modal" data-bs-target="#biometricModal" aria-label="Close" onclick="backbuttonfp()">Back</button>
        </div>
       
      </div>
    </div>
  </div>
</div>




