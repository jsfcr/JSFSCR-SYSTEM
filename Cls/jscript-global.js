
$('#myTable').DataTable({
    
     
        layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
    
});

$('#myTableccl').DataTable({
    
     
        layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
    
});

$('#myTablencl').DataTable({
    
     
        layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
    
});

$('#myTablepcl').DataTable({
    
     
        layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
    
});

$('#myTablecscl').DataTable({
    
     
        layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
    
});



// function phAddress(){

//     $('#').onSelect(function(){

//     });


// }

var idofSTD = $("#stidFP").html();

var mysqlUrl = "Cls/core.php";
var insertStrike = "insert";
var deleteStrike = "delete";
var updateStrike = "update";

var imagefpjson = 'json/imagefp_view.php';

var userHistInsertsuc = "Successfully Registered this ID : ";
var userHistInsertfld = "Failed to Register this ID : ";
var userHistInsertdel = "Successfully Deleted this ID : ";
var userHistInsertdelfld = "Failed to Delete this ID : ";
var userHistInsertupt = "Successfully Updated this ID : ";
var userHistInsertuptfld = "Failed to Update this ID : ";


//alert
var success = '<div class="alert alert-success" role="alert">Successfully Registered!</div>';
var error = '<div class="alert alert-danger" role="alert">Error! Something went wrong!</div>'


