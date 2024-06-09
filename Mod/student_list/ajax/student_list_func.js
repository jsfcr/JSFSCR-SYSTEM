

	

var idTodel;

var fingerTypeName;
var idFP; 





var finalFpIDToScanTYPEID;

function fpModalWithID(idFps){
	fpDataImagessfromDb(idFps);
	//console.log(idFps);
	idFP = idFps;
	//	console.log(idFP);
	$("#stidFP").html(idFps);
}

function backbuttonfp(){
	//console.log(idFP);
	fpDataImagessfromDb(idFP);

}


function openFpScanner(fTname){
	finalFpIDToScanTYPEID = idFP+"-"+fTname;
	onClear();
}




function openModalwithId(stIdno){
	//	console.log(stIdno);
		idTodel = stIdno;
		$("#idDel").html(idTodel);	
};


//execute after modal open

function fpDataImagessfromDb(idddd){
	
	
	var stIDsss = idddd;
	$.ajax({
		url: imagefpjson,
		type : 'POST',
		data : {
			stIDD : stIDsss
		},
		success : function(data){
			var json = JSON.parse(data);
			//console.log(data);

			$.each(json, function(i, data){
					//console.log(i+'-'+data);
					
				if (data!=null) {
					
						$("img#"+i).removeAttr('src');
						$("img#"+i).attr('src','Img/fp_images/'+data);
				}
				else
				{

					$("img#"+i).removeAttr('src');
						$("img#"+i).attr('src','Img/finger-print-notuploaded.png');
				}
						
				
			});
			//need more codes here
				}
		
	});
};




$("#delBtnSub").on('click', function(){
	stIdno = $(this).attr('name');
	
	 deleteStudent("student","student_id",idTodel);
});


	function deleteStudent(delTable, delId, delIdVal){

			console.log(delTable+"--"+delId+"--"+delIdVal);
		$.ajax({
			url : mysqlUrl,
			type : 'POST',
			data : {
				stField : delId,
				stid : delIdVal,
				delTable : delTable,
				msyqlStatus : deleteStrike
			},
			success : function(data){
				console.log(data);
				location.reload();

			}

		});
	
	}


function idToFP(fpToScan){
	console.log(fpToScan);
	$("#fpTitle").html(fpToScan);
}





//finger print scanning code javascript, jquery, ajax
//start-->


// For Download and formats ends