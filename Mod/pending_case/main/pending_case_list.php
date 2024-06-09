<?php include mod.''.pcse.''.fnc.'cases_func.php'; ?>

<div class="container">
    <h3>Pending Cases List</h3>



<table id="myTable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Case No.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date</th>
                <th>Upload</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($getAllCases->num_rows > 0) {
                while ($datarow = $getAllCases->fetch_assoc()) {
                    echo "<tr><td>".$datarow["case_id"]."</td><td>".$datarow["case_title"]."</td><td>".$datarow["case_description"]."</td><td>".$datarow["case_location"]."</td><td>".$datarow["case_date_time"]."</td><td>No Image</td></tr>";
                }
            }

             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Case No.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date</th>
                <th>Upload</th>
            </tr>
        </tfoot>
    </table>

    </div>