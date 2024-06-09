


<div class="container bg-white mt-3 border rounded-2">
    <h3>Registration</h3>

    <form  method="post" id="regFormData">

        <div class="col-12">
            <div class="col-3">
                <label for="studentidform" class="form-label-sm">ID number <span class="text-danger">(*)</span></label>
            </div>
            <div class="mb-3 col-sm-12">
              
              <input type="text" class="form-control-sm col-sm-12 col-md-6 col-lg-3" id="studentidform" name="studentidform" placeholder="ID number">


            </div>
        </div>

        <hr>

            <h6>Personal Information</h6>
    <div class="row g-3 col-12">
        <div class="row g-3 col-md-6 col-lg-4">
             <div class="col-12">
                <label for="firstname" class="form-label-sm">First Name <span class="text-danger">(*)</span></label>
            </div>
            <div class="col-12">
                <input type="text" class="form-control-sm col-12" id="firstname" name="firstname" placeholder="First Name">
            </div>
        </div>

         <div class="row g-3 col-md-6 col-lg-4">
             <div class="col-12">
                <label for="middlename" class="form-label-sm">Middle Name (Optional)</label>
            </div>
             <div class="col-12">
                <input type="text" class="form-control-sm col-12" id="middlename" name="middlename" placeholder="Middle Name">
            </div>
        </div>

         <div class="row g-3 col-md-6 col-lg-4">
            
           <div class="col-12">
                <label for="familyname" class="form-label-sm">Family Name <span class="text-danger">(*)</span></label>
            </div>
            <div class="col-12">
                <input type="text" class="form-control-sm col-12" id="familyname" name="familyname" placeholder="Family Name">
            </div>

            
              
        </div>

        <div class="row g-3 col-4">
             <div class="col-12">
                <label for="suffix" class="form-label-sm">Suffix (Optional)</label>
            </div>
            <div class="col-12">
                <select class="form-select-sm col-sm-9 col-md-6 col-lg-3" id="suffix" name="suffix">
                    <option value="">Select</option>
                    <option value="Sr">Sr</option>
                    <option value="Jr">Jr</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                </select>
            </div>
        </div>
        <hr>
        <h6>Educational information</h6>
        <div class="col-12">
            <div class="mb-3 col-12">
              <label for="studentCrs" class="form-label-sm"> Course <span class="text-danger">(*)</span></label>
              <input type="text" class="form-control-sm col-12" id="studentCrs" name="studentCrs" placeholder="Course">
            </div>

            <div class="mb-3 col-3">
              <label for="studentYr" class="form-label-sm">Year/Position <span class="text-danger">(*)</span></label>
             <select class="form-select-sm col-sm-9 col-md-6 col-lg-3" id="studentYr" name="studentYr">
                    <option value="">Select</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="faculty">Faculty</option>
                    <option value="faculty">Staff</option>

            
            
                 </select>

            </div>

        </div>
        </div>
        <hr>


          <h6>Address information</h6>
        <div class="row col-12">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class=" col-12">
                  <label for="regionSelector" class="form-label-sm">Region <span class="text-danger">(*)</span></label>
                </div>
                <div class="mb-3">
                    <select class="form-select-sm col-12" id="regionSelector" name="regionSelector">
                        <option value="" id="addressSelector">Select</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class=" col-12">
                  <label for="provinceSelector" class="form-label-sm">Province <span class="text-danger">(*)</span></label>
                </div>
                <div class="mb-3">
                    <select class="form-select-sm col-12" id="provinceSelector" name="provinceSelector">
                        <option value="" id="addressSelector2" >Select</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class=" col-12">
                  <label for="municipalSelector" class="form-label-sm">Municipal <span class="text-danger">(*)</span></label>
                </div>
                <div class="mb-3">
                    <select class="form-select-sm col-12" id="municipalSelector" name="municipalSelector">
                        <option value="" id="addressSelector3">Select</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class=" col-12">
                  <label for="barangaySelector" class="form-label-sm">Barangay <span class="text-danger">(*)</span></label>
                </div>
                <div class="mb-3">
                    <select class="form-select-sm col-12" id="barangaySelector" name="barangaySelector">
                        <option value="" id="addressSelector4">Select</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class=" col-12">
                  <label for="hbszp" class="form-label-sm small">House no./ Building no. / Street/ Zone / Purok <span class="text-danger">(*)</span></label>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control-sm col-12" name="" id="hbszp" name="hbszp" placeholder="House no./ Building no. / Street/ Zone / Purok">
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class=" col-12">
                  <label for="zpc" class="form-label-sm">Zipcode <span class="text-danger">(*)</span></label>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control-sm col-12" name="" id="zpc" name="zpc" placeholder="Zipcode">
                </div>
            </div>
        </div>

        <hr>
    
        

        <div class="col-12">
            <div class="col-3">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#saveConfirmation" id="saveBtnreg">Save</button>
                <button type="button" class="btn btn-warning" id="clearBtn">Clear</button>
            </div>
        </div>

        

        
    </form>


    </div>