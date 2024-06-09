<?php include mod.''.hfui.''.fnc.'user_func.php'; ?>

<div class="container">
    <h3>User Interaction History</h3>



<table id="myTable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>History ID.</th>
                <th>User_id</th>
                <th>Interaction</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if ($getAllHist->num_rows > 0) {
                while ($datarow = $getAllHist->fetch_assoc()) {
                    echo "<tr><td>".$datarow["hist"]."</td><td>".$datarow["user_id"]."</td><td>".$datarow["user_action"]."</td><td>".$datarow["hist_date"]."</td></tr>";
                }
            }

             ?>
        </tbody>
        <tfoot>
            <tr>
                <th>History ID.</th>
                <th>User_id</th>
                <th>Interaction</th>
                <th>Date</th>
            </tr>
        </tfoot>
    </table>

    </div>