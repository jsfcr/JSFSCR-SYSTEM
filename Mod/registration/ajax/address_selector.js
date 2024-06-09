

$(document).ready(function(){
const urljson = 'json/philippine_provinces_cities_municipalities_and_barangays_2019v2.js';

const regionNameStr = [];
const provinceArray = [];
const provinceIndexVal = [];
const municipalOptVal = [];
const municipalIndexVal = [];
const barangayOptVal = [];


	function loadRegionJson(){
		$.ajax({
			url : urljson,
			type : 'get',
			success : function(data){
				var jsonData = JSON.parse(data);
				$.each(jsonData, function(i, regionJson){
					$("#addressSelector").after('<option value="'+regionJson.region_name+'">'+regionJson.region_name+'</option>');
						regionNameStr.push(regionJson.region_name);
						provinceArray.push(regionJson.province_list);
						$.each(regionJson.province_list,function(j, municipalJson){
							provinceIndexVal.push(j);
							municipalOptVal.push(municipalJson);
							$.each(municipalJson.municipality_list,function(k, barangayJson){
								municipalIndexVal.push(k);
								barangayOptVal.push(barangayJson.barangay_list);
							})
						})
				});
				console.log(municipalIndexVal);
				console.log(barangayOptVal);
				console.log(provinceIndexVal);
				console.log(municipalOptVal);
				console.log(provinceArray);
				console.log(regionNameStr);
			}		
		});
	}
loadRegionJson();



function loadProvinceData(regValue){
	regionIndex = regionNameStr.indexOf(regValue);
	$("option[id=newprov]").remove();
		const provinces = [];
	for (const province in provinceArray[regionIndex]) {
			$("#addressSelector2").after('<option id="newprov" value="'+province+'">'+province+'</option>');    
	}
}



function loadMunicipalData(provValue){
	provinceIndex = provinceIndexVal.indexOf(provValue);
	console.log(provinceIndex);
	$("option[id=newmuni]").remove();
		const municipal = [];
	for (const municipal in municipalOptVal[provinceIndex].municipality_list) {
			$("#addressSelector3").after('<option id="newmuni" value="'+municipal+'">'+municipal+'</option>');    
	}
}

function loadBarangayData(muniValue){
	municipalIndex = municipalIndexVal.indexOf(muniValue);
	console.log(municipalIndex);
	$("option[id=newbrgy]").remove();
		const barangay = [];
		$.each(barangayOptVal[municipalIndex], function(a, barangay){
			$("#addressSelector4").after('<option id="newbrgy" value="'+barangay+'">'+barangay+'</option>');    
		});
}


//region selector


	$("#regionSelector").on('change',function(){
		
	var regVal = $(this).val();
	console.log(regVal);
		loadProvinceData(regVal);
	});

//province selector

	$("#provinceSelector").on('change',function(){
		
	var provVal = $(this).val();
	console.log(provVal);
		loadMunicipalData(provVal);
	});

//municipal selector

	$("#municipalSelector").on('change',function(){
		
	var muniVal = $(this).val();
	console.log(muniVal);
		loadBarangayData(muniVal);
	});


	var idno;
	var frstNme;
	var mdlNme;
	var fmlNme;
	var sffx;

	var sCrs;
	var sYr;


	var hbszp;
	var brgy;
	var mcpl;
	var prvn;
	var rgn;
	var zpc;

	var dataInsReg;

$("#saveBtnreg").on('click', function(){
	console.log("i click save button");
	
	var idno 	= $("#studentidform").val();
	var frstNme = $("#firstname").val();
	var mdlNme 	= $("#middlename").val();
	var fmlNme 	= $("#familyname").val();
	var sffx 	= $("#suffix").val();

	var sCrs 	= $("#studentCrs").val();
	var sYr 	= $("#studentYr").val();


	var hbszp 	= $("#hbszp").val();
	var brgy 	= $("#barangaySelector").val();
	var mcpl 	= $("#municipalSelector").val();
	var prvn 	= $("#provinceSelector").val();
	var rgn 	= $("#regionSelector").val();
	var zpc 	= $("#zpc").val();



	if (idno == "" || fmlNme == "" || sCrs == "" || sYr == "" || hbszp == "" || brgy == "" || mcpl == "" || prvn == "" || rgn == "" || zpc == "") {

		// alert('Required fields with (*) Asterisk must be filled up');
		$("#saveRegData").removeAttr('id').prop('disabled',true);
		$("#alertInfo").html('Sorry! Please filled up all required fields');
		

	}
	else
	{

		 dataInsReg = {
			"student_id"	: idno,
			"student_name"	: frstNme,
			"student_middle_name"	: mdlNme,
			"student_family_name"	: fmlNme,
			"student_suffix"	: sffx,
			"student_course"	: sCrs,
			"student_year"	: sYr,
			"student_houseno_buillding_roomno"	: hbszp,
			"student_region"	: rgn,
			"student_province"	: prvn,
			"student_city"	: mcpl,
			"student_barangay"	: brgy,
			"zip_code"	: zpc
			};
		$(".saveBtn").prop('id','saveRegData').prop('disabled',false);
		$("#alertInfo").empty();
	}
	
	
	

	$("#idnoInfo").html(idno);
	$("#fnameInfo").html(fmlNme+', '+frstNme+' '+mdlNme+' '+sffx);
	$("#courseYearInfo").html(sYr+' - '+sCrs);
	$("#addressInfo").html(hbszp+' '+brgy+', '+mcpl+', '+prvn+', '+rgn+', '+zpc);
});



function clearForm(){
	$('input[type=text], input[type=email], input[type=tel], input[type=number]').val('');
	$('textarea').val('');
	$('select').val($('select option:first').val());

}



// function userHist(attrData, table){ 
// 	var dataIns = attrData;
// 	$.ajax({
// 		url : insertUrl,
// 		type : 'POST',
// 		data : {
// 			dataSet: dataIns,
// 			tableSet : table,
// 			insertStat : insertStrike
// 		},
// 		success : function(response,data){
// 			//$("#alertInfo").html(response);
			
// 		},
// 		error: function(xhr, status, error) {
			
//                 console.error(xhr.responseText);
//        }
// 	});

// }
	


function insert(attrData, table){ 
	var dataIns = attrData;
	$.ajax({
		url : mysqlUrl,
		type : 'POST',
		data : {
			dataSet: dataIns,
			tableSet : table,
			msyqlStatus : insertStrike
		},
		success : function(response,data){
			//$("#alertInfo").html(response);
			$('#alertInfo').html(success);
			$('#saveRegData').prop('disabled', true);
			setTimeout(function(){
				$('#saveConfirmation').modal('hide');
				

				clearForm();
			}, 5000);
		},
		error: function(xhr, status, error) {
			$('#alertInfo').html(error);
                console.error(xhr.responseText);
       }
	});

}


$("#saveRegData").on('click',function(){
	console.log(dataInsReg);
	insert(dataInsReg, "student");
});

$("#clearBtn").click(function(){
	 clearForm();
});


});