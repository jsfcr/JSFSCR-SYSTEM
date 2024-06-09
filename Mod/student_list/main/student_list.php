<?php include mod.''.stlst.''.fnc.'cases_func.php'; ?>

<div class="container">
    <h3>Student List</h3>



<table id="myTable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID no.</th>
                <th>Name</th>
                <th>Course & year</th>
                <th>Address</th>
                <th>Biometric</th>
                <th>Registered Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($getAllCases->num_rows > 0) {
                while ($datarow = $getAllCases->fetch_assoc()) {

                    if ($datarow["left_pinky"] == null || $datarow["left_ring_finger"] == null || $datarow["left_middle_finger"] == null || $datarow["left_index_finger"] == null || $datarow["left_thumb"] == null || $datarow["right_thumb"] == null || $datarow["right_index_finger"] == null || $datarow["right_middle_finger"] == null || $datarow["right_ring_finger"] == null || $datarow["right_pinky"] == null) {

                       
                        $fingerStatus = '<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#biometricModal" id="'.$datarow["student_id"].'" onclick="fpModalWithID(this.id)">incomplete</a>';
                    }
                    else
                    {
                        $fingerStatus = '<a href="#" >view biometric</a>';
                    }
                    $splitId = $datarow["student_id"];

                    echo "<tr><td >".$datarow["student_id"]."<input type='text' name='' id='studentIDcontrol' value=".$datarow["student_id"]." hidden></td><td>".$datarow["student_family_name"].", ".$datarow["student_name"]." ".$datarow["student_middle_name"]." ".$datarow["student_suffix"]."</td><td>".$datarow["student_year"]." - ".$datarow["student_course"]."</td><td>".$datarow["student_houseno_buillding_roomno"]." ".$datarow["student_barangay"]." ".$datarow["student_city"]." ".$datarow["student_province"]." ".$datarow["student_region"]." ".$datarow["zip_code"]."</td><td>".$fingerStatus."</td><td>".$datarow["Date_registered"]."</td><td>".deleteBtnFunc($splitId)."</td></tr>";
                }
            }

             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID no.</th>
                <th>Name</th>
                <th>Course & year</th>
                <th>Address</th>
                <th>Biometric</th>
                <th>Registered Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    </div>