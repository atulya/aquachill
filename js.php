<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php include 'include/assetCss.php'; ?>
  </head>
  <body>
    <?php include 'include/header.php'; ?>
	<script>
			  

 //insert function
function submit_oem() 
{
	loader();
	var Oem_Date = document.getElementsByName("Oem_Date")[0].value;
	var Type = document.getElementsByName("TypeId")[0].value;
	var Make = document.getElementsByName("MakeId")[0].value;
	var capacity = document.getElementsByName("capacity")[0].value;
	var Chiller_Model = document.getElementsByName("Chiller_Model")[0].value;
	var Chiller_temp = document.getElementsByName("Chiller_temp")[0].value;
	var Condenser_temp = document.getElementsByName("Condenser_temp")[0].value;
	var Condenser_waterF = document.getElementsByName("Condenser_waterF")[0].value;
	var ambient_temp = document.getElementsByName("ambient_temp")[0].value;
	var Compressor_power = document.getElementsByName("Compressor_power")[0].value;
	var fan_power = document.getElementsByName("fan_power")[0].value;
	var basic_price = document.getElementsByName("basic_price")[0].value;
	var file_location = document.getElementById("file_location").files[0];
	var price_CVD = document.getElementsByName("price_CVD")[0].value;
	var cost = document.getElementsByName("cost")[0].value;
	var total_power = document.getElementsByName("total_power")[0].value;
	var Kw_tr = document.getElementsByName("Kw_tr")[0].value;
	

	var formdata = new FormData();
	formdata.append("Oem_Date",Oem_Date);
	formdata.append("Type",Type);
	formdata.append("Make",Make);
	formdata.append("capacity",capacity);
	formdata.append("Chiller_Model",Chiller_Model);
	formdata.append("Condenser_temp",Condenser_temp);
	formdata.append("ambient_temp",ambient_temp);
	formdata.append("Chiller_temp",Chiller_temp);
	formdata.append("Condenser_waterF",Condenser_waterF);
	formdata.append("Compressor_power",Compressor_power);
	formdata.append("fan_power",fan_power);
	formdata.append("basic_price",basic_price);
	formdata.append("price_CVD",price_CVD);
	formdata.append("file_location",file_location);
	formdata.append("cost",cost);
	formdata.append("total_power",total_power);
	formdata.append("Kw_tr",Kw_tr);
	//$('.clsListDiv').children().hide();
	$('#updateoem').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
	 document.getElementById("updateoem").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','insertoem.php',true);
	xhttp.send(formdata);
}		
function submit_oom() 
{
	loader();
	var item = document.getElementsByName("item_Id")[0].value;
	var Refrigerant = document.getElementsByName("Refrigerant")[0].value;
	var Make_Id = document.getElementsByName("Make_Id")[0].value;
	var ChillerModel = document.getElementsByName("ChillerModel")[0].value;
	var Model = document.getElementsByName("Model")[0].value;
	var Cost_R = document.getElementsByName("Cost_R")[0].value;
	var FileOOM = document.getElementById("FileOOM").files[0];
	
	var formdata = new FormData();
	formdata.append("item",item);
	formdata.append("Refrigerant",Refrigerant);
	formdata.append("Make_Id",Make_Id);
	formdata.append("ChillerModel",ChillerModel);
	formdata.append("Model",Model);
	formdata.append("Cost_R",Cost_R);
	formdata.append("FileOOM",FileOOM);

	$('#update').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("update").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','insertoom.php',true);
	xhttp.send(formdata);
}		
function submit_ppg() 
{
	loader();
	var spipe = document.getElementsByName("pipe")[0].value;
	var spipe_make = document.getElementsByName("pipe_make")[0].value;
	var squote = document.getElementsByName("quote")[0].value;
	var ssize = document.getElementsByName("size")[0].value;
	var sThk = document.getElementsByName("Thk")[0].value;
	var schedule = document.getElementsByName("schedule")[0].value;
	var weight = document.getElementsByName("weight")[0].value;
	var scost_mtr = document.getElementsByName("cost_mtr")[0].value;
	var scost_basis = document.getElementsByName("cost_basis")[0].value;
	var dquote_date = document.getElementsByName("quote_date")[0].value;
	var scost_inch = document.getElementsByName("cost_inch")[0].value;
	var scost_kg = document.getElementsByName("cost_rs")[0].value;
	var sPpg_file = document.getElementById("Ppg_file").files[0];
	
	var formdata = new FormData();
	formdata.append("spipe",spipe);
	formdata.append("spipe_make",spipe_make);
	formdata.append("squote",squote);
	formdata.append("ssize",ssize);
	formdata.append("sThk",sThk);
	formdata.append("schedule",schedule);
	formdata.append("weight",weight);
	formdata.append("scost_mtr",scost_mtr);
	formdata.append("scost_basis",scost_basis);
	formdata.append("dquote_date",dquote_date);
	formdata.append("scost_inch",scost_inch);
	formdata.append("scost_kg",scost_kg);
	formdata.append("sPpg_file",sPpg_file);

	$('#updateppg').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("updateppg").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','insertppg.php',true);
	xhttp.send(formdata);
}		
function submit_vlv() 
{
	loader();
	var svlvitem = document.getElementsByName("vlvitem")[0].value;
	var sPressure_rate = document.getElementsByName("Pressure_rate")[0].value;
	var ssize_NB = document.getElementsByName("size_NB")[0].value;
	var ssize_inch = document.getElementsByName("size_inch")[0].value;
	var sSpecifications = document.getElementsByName("Specifications")[0].value;
	var svlvmake = document.getElementsByName("vlvmake")[0].value;
	var svlvCost = document.getElementsByName("vlvCost")[0].value;
	var scost_inch = document.getElementsByName("cost_inch")[0].value;
	var dvlvDate = document.getElementsByName("vlvDate")[0].value;
	var slocation = document.getElementsByName("location")[0].value;
	
	var formdata = new FormData();
	formdata.append("svlvitem",svlvitem);
	formdata.append("sPressure_rate",sPressure_rate);
	formdata.append("ssize_NB",ssize_NB);
	formdata.append("ssize_inch",ssize_inch);
	formdata.append("sSpecifications",sSpecifications);
	formdata.append("svlvmake",svlvmake);
	formdata.append("svlvCost",svlvCost);
	formdata.append("scost_inch",scost_inch);
	formdata.append("dvlvDate",dvlvDate);
	formdata.append("slocation",slocation);

	$('#updatevlv').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("updatevlv").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','insertvlv.php',true);
	xhttp.send(formdata);
}		
function submit_pmp() 
{
	loader();
	var pmpitem = document.getElementsByName("pmpitem")[0].value;
	var pmpType = document.getElementsByName("pmpType")[0].value;
	var pmpQuote = document.getElementsByName("pmpQuote")[0].value;
	var pmpmake = document.getElementsByName("pmpmake")[0].value;
	var pmpModel = document.getElementsByName("pmpModel")[0].value;
	var pmpFlow = document.getElementsByName("pmpFlow")[0].value;
	var pmpHead = document.getElementsByName("pmpHead")[0].value;
	var pmpMotor = document.getElementsByName("pmpMotor")[0].value;
	var pmpSeal = document.getElementsByName("pmpSeal")[0].value;
	var pmpMOC = document.getElementsByName("pmpMOC")[0].value;
	var unit_price = document.getElementsByName("unit_price")[0].value;
	var pmpfile = document.getElementById("pmpfile").files[0];
	
	var formdata = new FormData();
	formdata.append("pmpitem",pmpitem);
	formdata.append("pmpType",pmpType);
	formdata.append("pmpQuote",pmpQuote);
	formdata.append("pmpmake",pmpmake);
	formdata.append("pmpModel",pmpModel);
	formdata.append("pmpFlow",pmpFlow);
	formdata.append("pmpHead",pmpHead);
	formdata.append("pmpMotor",pmpMotor);
	formdata.append("pmpSeal",pmpSeal);
	formdata.append("pmpMOC",pmpMOC);
	formdata.append("unit_price",unit_price);
	formdata.append("pmpfile",pmpfile);
	$('#updatepmp').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("updatepmp").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','insertpmp.php',true);
	xhttp.send(formdata);
}		
function submit_ct() 
{
	loader();
	var ctType = document.getElementsByName("ctType")[0].value;
	var ctmake = document.getElementsByName("ctmake")[0].value;
	var ctdate = document.getElementsByName("ctdate")[0].value;
	var water_flow = document.getElementsByName("water_flow")[0].value;
	var Range = document.getElementsByName("Range")[0].value;
	var Approach = document.getElementsByName("Approach")[0].value;
	var ct_Cost = document.getElementsByName("ct_Cost")[0].value;
	var Specific_Cost = document.getElementsByName("Specific_Cost")[0].value;
	var Specific_Cost_RS = document.getElementsByName("Specific_Cost_RS")[0].value;
	var ctFile = document.getElementById("ctFile").files[0];
	var formdata = new FormData();

	formdata.append("ctType",ctType);
	formdata.append("ctmake",ctmake);
	formdata.append("ctdate",ctdate);
	formdata.append("water_flow",water_flow);
	formdata.append("Range",Range);
	formdata.append("Approach",Approach);
	formdata.append("ct_Cost",ct_Cost);
	formdata.append("Specific_Cost",Specific_Cost);
	formdata.append("Specific_Cost_RS",Specific_Cost_RS);
	formdata.append("ctFile",ctFile);

	$('#updatect').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("updatect").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','insertct.php',true);
	xhttp.send(formdata);
}		
function submit_ahu() 
{
	loader();
	var AhuDescription = document.getElementsByName("AhuDescription")[0].value;
	var Ahumake = document.getElementsByName("Ahumake")[0].value;
	var AirFlowrate = document.getElementsByName("AirFlowrate")[0].value;
	var Pressure = document.getElementsByName("Pressure")[0].value;
	var TypeFan = document.getElementsByName("TypeFan")[0].value;
	var Filter = document.getElementsByName("Filter")[0].value;
	var PUFThk = document.getElementsByName("PUFThk")[0].value;
	var InnerSkin = document.getElementsByName("InnerSkin")[0].value;
	var OuterSkin = document.getElementsByName("OuterSkin")[0].value;
	var Cooling = document.getElementsByName("Cooling")[0].value;
	var reheat = document.getElementsByName("reheat")[0].value;
	var Section = document.getElementsByName("Section")[0].value;
	var Humidifier = document.getElementsByName("Humidifier")[0].value;
	var MotorKw = document.getElementsByName("MotorKw")[0].value;
	var Cost = document.getElementsByName("Cost")[0].value;
	var SpecificCost = document.getElementsByName("SpecificCost")[0].value;
	var AhuFile = document.getElementById("AhuFile").files[0];
	var formdata = new FormData();

	formdata.append("AhuDescription",AhuDescription);
	formdata.append("Ahumake",Ahumake);
	formdata.append("AirFlowrate",AirFlowrate);
	formdata.append("Pressure",Pressure);
	formdata.append("TypeFan",TypeFan);
	formdata.append("Filter",Filter);
	formdata.append("PUFThk",PUFThk);
	formdata.append("InnerSkin",InnerSkin);
	formdata.append("OuterSkin",OuterSkin);
	formdata.append("Cooling",Cooling);
	formdata.append("reheat",reheat);
	formdata.append("Section",Section);
	formdata.append("Humidifier",Humidifier);
	formdata.append("MotorKw",MotorKw);
	formdata.append("Cost",Cost);
	formdata.append("SpecificCost",SpecificCost);
	formdata.append("AhuFile",AhuFile);
	$('#updateAhu').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("updateAhu").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','insertAhu.php',true);
	xhttp.send(formdata);
}		
function submit_dct() 
{
	loader();
	var Gauge = document.getElementsByName("Gauge")[0].value;
	var Thickness = document.getElementsByName("Thickness")[0].value;
	var Flange = document.getElementsByName("Flange")[0].value;
	var Basic_Rate = document.getElementsByName("Basic_Rate")[0].value;
	var New_BasicRate = document.getElementsByName("New_BasicRate")[0].value;
	var Discount = document.getElementsByName("Discount")[0].value;
	var BasicDiscount = document.getElementsByName("BasicDiscount")[0].value;
	var Excise = document.getElementsByName("Excise")[0].value;
	var Transportation = document.getElementsByName("Transportation")[0].value;
	var Sealant_gasket = document.getElementsByName("Sealant_gasket")[0].value;
	var Support = document.getElementsByName("Support")[0].value;
	var Wastage = document.getElementsByName("Wastage")[0].value;
	var Total = document.getElementsByName("Total")[0].value;
	var VAT = document.getElementsByName("VAT")[0].value;
	var Grand_Total = document.getElementsByName("Grand_Total")[0].value;

	var formdata = new FormData();
	formdata.append("Gauge",Gauge);
	formdata.append("Thickness",Thickness);
	formdata.append("Flange",Flange);
	formdata.append("Basic_Rate",Basic_Rate);
	formdata.append("New_BasicRate",New_BasicRate);
	formdata.append("Discount",Discount);
	formdata.append("BasicDiscount",BasicDiscount);
	formdata.append("Excise",Excise);
	formdata.append("Transportation",Transportation);
	formdata.append("Sealant_gasket",Sealant_gasket);
	formdata.append("Support",Support);
	formdata.append("Wastage",Wastage);
	formdata.append("Total",Total);
	formdata.append("VAT",VAT);
	formdata.append("Grand_Total",Grand_Total);

	$('#updateDct').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("updateDct").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','insertDct.php',true);
	xhttp.send(formdata);
}		
function submit_ads(spDetails) 
{
	loader();
	var apDetails = spDetails.split("~");
	var AdsItem = document.getElementsByName("AdsItem")[0].value;
	var AdsMake = document.getElementsByName("AdsMake")[0].value;
	var AdsDate = document.getElementsByName("AdsDate")[0].value;
	var AdsFile = document.getElementById("AdsFile").files[0];

	var formdata = new FormData();
	formdata.append("RecId",apDetails[0]);
	formdata.append("AdsItem",AdsItem);
	formdata.append("AdsMake",AdsMake);
	formdata.append("AdsDate",AdsDate);
	formdata.append("AdsFile",AdsFile);

	$('#updateAds').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("updateAds").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','insertAds.php',true);
	xhttp.send(formdata);

}		
//edit function
function edit_oem(spDetails)
{
	
	$('.clsListDiv').children().hide();
	$("#MainOEM").hide();
	$("#EditOem").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("EditOem").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','editOem.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function edit_oom(spDetails)
{
	$('.clsListDiv').children().hide();
	$("#MainOOM").hide();
	$("#EditOOM").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("EditOOM").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','editoom.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function edit_ppg(spDetails)
{
	$('.clsListDiv').children().hide();
	$("#MainPPG").hide();
	$("#EditPPG").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("EditPPG").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','editppg.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function edit_ads(spDetails)
{
	$('.clsListDiv').children().hide();
	$("#Mainads").hide();
	$("#EditAds").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("EditAds").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','editAds.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function edit_vlv(spDetails)
{
	$('.clsListDiv').children().hide();
	$("#MainVlv").hide();
	$("#EditVlv").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("EditVlv").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','editVlv.php?RecId='+apDetails[0],true);
	xhttp.send();
}

function edit_pmp(spDetails)
{
	$('.clsListDiv').children().hide();
	$("#MainPmp").hide();
	$("#EditPmp").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("EditPmp").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','editPmp.php?RecId='+apDetails[0],true);
	xhttp.send();
}
function edit_ct(spDetails)
{
	$('.clsListDiv').children().hide();
	$("#MainCt").hide();
	$("#EditCT").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("EditCT").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','editct.php?RecId='+apDetails[0],true);
	xhttp.send();
}
function edit_ahu(spDetails)
{
	$('.clsListDiv').children().hide();
	$("#MainAhu").hide();
	$("#EditAhu").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("EditAhu").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','editAhu.php?RecId='+apDetails[0],true);
	xhttp.send();
}
function edit_dct(spDetails)
{
	$('.clsListDiv').children().hide();
	$("#MainDct").hide();
	$("#EditDct").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("EditDct").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','editDct.php?RecId='+apDetails[0],true);
	xhttp.send();
}

//update function


function oemUpdate(oemupId) 
{
	loader();
	var apoemupId = oemupId.split("~");
	var oemOem_Date = document.getElementsByName("Oem_Date")[0].value;
	var oemsType = document.getElementsByName("TypeId")[0].value;
	var oemMake = document.getElementsByName("MakeId")[0].value;
	var oemcapacity = document.getElementsByName("capacity")[0].value;
	var oemChiller_Model = document.getElementsByName("Chiller_Model")[0].value;
	var oemChiller_temp = document.getElementsByName("Chiller_temp")[0].value;
	var oemCondenser_temp = document.getElementsByName("Condenser_temp")[0].value;
	var oemCondenser_waterF = document.getElementsByName("Condenser_waterF")[0].value;
	var oemambient_temp = document.getElementsByName("ambient_temp")[0].value;
	var oemCompressor_power = document.getElementsByName("Compressor_power")[0].value;
	var oemfan_power = document.getElementsByName("fan_power")[0].value;
	var oembasic_price = document.getElementsByName("basic_price")[0].value;
	var oemfile_location = document.getElementById("file_location").files[0];
	var oemprice_CVD = document.getElementsByName("price_CVD")[0].value;
	var oemcost = document.getElementsByName("cost")[0].value;
	var oemtotal_power = document.getElementsByName("total_power")[0].value;
	var oemKw_tr = document.getElementsByName("Kw_tr")[0].value;
	

	var formdata = new FormData();
	formdata.append("RecId",apoemupId[0]);	
	formdata.append("Oem_Date",oemOem_Date);
	formdata.append("Type",oemsType);
	formdata.append("Make",oemMake);
	formdata.append("capacity",oemcapacity);
	formdata.append("Chiller_Model",oemChiller_Model);
	formdata.append("Condenser_temp",oemCondenser_temp);
	formdata.append("ambient_temp",oemambient_temp);
	formdata.append("Chiller_temp",oemChiller_temp);
	formdata.append("Condenser_waterF",oemCondenser_waterF);
	formdata.append("Compressor_power",oemCompressor_power);
	formdata.append("fan_power",oemfan_power);
	formdata.append("basic_price",oembasic_price);
	formdata.append("price_CVD",oemprice_CVD);
	formdata.append("file_location",oemfile_location);
	formdata.append("cost",oemcost);
	formdata.append("total_power",oemtotal_power);
	formdata.append("Kw_tr",oemKw_tr);

	$('#update').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
	 document.getElementById("update").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','updateoem.php',true);
	xhttp.send(formdata);

}
function oomUpdate(oomupId) 
{
	loader();
	var apoomupId = oomupId.split("~");
	var oomitem = document.getElementsByName("item_Id")[0].value;
	var oomRefrigerant = document.getElementsByName("Refrigerant")[0].value;
	var oomMake_Id = document.getElementsByName("Make_Id")[0].value;
	var oomChillerModel = document.getElementsByName("ChillerModel")[0].value;
	var oomModel = document.getElementsByName("Model")[0].value;
	var oomCost_R = document.getElementsByName("Cost_R")[0].value;
	var oomFileOOM = document.getElementById("FileOOM").files[0];
	
	var formdata = new FormData();
	formdata.append("RecId",apoomupId[0]);	
	formdata.append("item",oomitem);
	formdata.append("Refrigerant",oomRefrigerant);
	formdata.append("Make_Id",oomMake_Id);
	formdata.append("ChillerModel",oomChillerModel);
	formdata.append("Model",oomModel);
	formdata.append("Cost_R",oomCost_R);
	formdata.append("FileOOM",oomFileOOM);

	$('#update').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("update").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','updateoom.php',true);
	xhttp.send(formdata);

}
function ppgUpdate(ppgupId) 
{
	loader();
	var apppgupId = ppgupId.split("~");
	var ppgspipe = document.getElementsByName("pipe")[0].value;
	var ppgspipe_make = document.getElementsByName("pipe_make")[0].value;
	var ppgsquote = document.getElementsByName("quote")[0].value;
	var ppgssize = document.getElementsByName("size")[0].value;
	var ppgsThk = document.getElementsByName("Thk")[0].value;
	var ppgschedule = document.getElementsByName("schedule")[0].value;
	var ppgweight = document.getElementsByName("weight")[0].value;
	var ppgscost_mtr = document.getElementsByName("cost_mtr")[0].value;
	var ppgscost_basis = document.getElementsByName("cost_basis")[0].value;
	var ppgdquote_date = document.getElementsByName("quote_date")[0].value;
	var ppgscost_inch = document.getElementsByName("cost_inch")[0].value;
	var ppgscost_kg = document.getElementsByName("cost_rs")[0].value;
	var ppgsPpg_file = document.getElementById("Ppg_file").files[0];
	
	var formdata = new FormData();
	formdata.append("RecId",apppgupId[0]);	
	formdata.append("spipe",ppgspipe);
	formdata.append("spipe_make",ppgspipe_make);
	formdata.append("squote",ppgsquote);
	formdata.append("ssize",ppgssize);
	formdata.append("sThk",ppgsThk);
	formdata.append("schedule",ppgschedule);
	formdata.append("weight",ppgweight);
	formdata.append("scost_mtr",ppgscost_mtr);
	formdata.append("scost_basis",ppgscost_basis);
	formdata.append("dquote_date",ppgdquote_date);
	formdata.append("scost_inch",ppgscost_inch);
	formdata.append("scost_kg",ppgscost_kg);
	formdata.append("sPpg_file",ppgsPpg_file);

	$('#update').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("update").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','updateppg.php',true);
	xhttp.send(formdata);

}

function vlvUpdate(vlvupId) 
{
	loader();
	var apvlvupId = vlvupId.split("~");
	var vlvsitem = document.getElementsByName("vlvitem")[0].value;
	var sPressure_rate = document.getElementsByName("Pressure_rate")[0].value;
	var ssize_NB = document.getElementsByName("size_NB")[0].value;
	var ssize_inch = document.getElementsByName("size_inch")[0].value;
	var sSpecifications = document.getElementsByName("Specifications")[0].value;
	var svlvmake = document.getElementsByName("vlvmake")[0].value;
	var svlvCost = document.getElementsByName("vlvCost")[0].value;
	var scost_inch = document.getElementsByName("cost_inch")[0].value;
	var dvlvDate = document.getElementsByName("vlvDate")[0].value;
	var vlvslocation = document.getElementsByName("location")[0].value;
	
	var formdata = new FormData();
	formdata.append("RecId",apvlvupId[0]);	
	formdata.append("svlvitem",vlvsitem);
	formdata.append("sPressure_rate",sPressure_rate);
	formdata.append("ssize_NB",ssize_NB);
	formdata.append("ssize_inch",ssize_inch);
	formdata.append("sSpecifications",sSpecifications);
	formdata.append("svlvmake",svlvmake);
	formdata.append("svlvCost",svlvCost);
	formdata.append("scost_inch",scost_inch);
	formdata.append("dvlvDate",dvlvDate);
	formdata.append("slocation",vlvslocation);

	$('#update').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("update").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','updatevlv.php',true);
	xhttp.send(formdata);
}
function update_ct(CtupId) 
{
	loader();
	var apCtupId = CtupId.split("~");
		
	var strctType = document.getElementsByName("ctType")[0].value;
	var strctmake = document.getElementsByName("ctmake")[0].value;
	var strctdate = document.getElementsByName("ctdate")[0].value;
	var strwater_flow = document.getElementsByName("water_flow")[0].value;
	var strRange = document.getElementsByName("Range")[0].value;
	var strApproach = document.getElementsByName("Approach")[0].value;
	var strct_Cost = document.getElementsByName("ct_Cost")[0].value;
	var strSpecific_Cost = document.getElementsByName("Specific_Cost")[0].value;
	var strSpecific_Cost_RS = document.getElementsByName("Specific_Cost_RS")[0].value;
	var strctFile = document.getElementById("ctFile").files[0];
	
	var formdata = new FormData();
	formdata.append("RecId",apCtupId[0]);
	formdata.append("ctType",strctType);
	formdata.append("ctmake",strctmake);
	formdata.append("ctdate",strctdate);
	formdata.append("water_flow",strwater_flow);
	formdata.append("Range",strRange);
	formdata.append("Approach",strApproach);
	formdata.append("ct_Cost",strct_Cost);
	formdata.append("Specific_Cost",strSpecific_Cost);
	formdata.append("Specific_Cost_RS",strSpecific_Cost_RS);
	formdata.append("ctFile",strctFile);
	$('#update').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("update").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','updatect.php',true);
	xhttp.send(formdata);
}
function pmpUpdate(pmpupId) 
{
	loader();
	var appmpupId = pmpupId.split("~");
		
	var strpmpitem = document.getElementsByName("pmpitem")[0].value;
	var strpmpType = document.getElementsByName("pmpType")[0].value;
	var strpmpQuote = document.getElementsByName("pmpQuote")[0].value;
	var strpmpmake = document.getElementsByName("pmpmake")[0].value;
	var strpmpModel = document.getElementsByName("pmpModel")[0].value;
	var strpmpFlow = document.getElementsByName("pmpFlow")[0].value;
	var strpmpHead = document.getElementsByName("pmpHead")[0].value;
	var strpmpMotor = document.getElementsByName("pmpMotor")[0].value;
	var strpmpSeal = document.getElementsByName("pmpSeal")[0].value;
	var strpmpMOC = document.getElementsByName("pmpMOC")[0].value;
	var strunit_price = document.getElementsByName("unit_price")[0].value;
	var strpmpfile = document.getElementById("pmpfile").files[0];
	
	var formdata = new FormData();
	formdata.append("RecId",appmpupId[0]);
	formdata.append("pmpitem",strpmpitem);
	formdata.append("pmpType",strpmpType);
	formdata.append("pmpQuote",strpmpQuote);
	formdata.append("pmpmake",strpmpmake);
	formdata.append("pmpModel",strpmpModel);
	formdata.append("pmpFlow",strpmpFlow);
	formdata.append("pmpHead",strpmpHead);
	formdata.append("pmpMotor",strpmpMotor);
	formdata.append("pmpSeal",strpmpSeal);
	formdata.append("pmpMOC",strpmpMOC);
	formdata.append("unit_price",strunit_price);
	formdata.append("pmpfile",strpmpfile);

	$('#update').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("update").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','updatepmp.php',true);
	xhttp.send(formdata);
}
function ahuUpdate(ahuupId) 
{
	
	loader();
	var apahuupId = ahuupId.split("~");
	var ahuAhuDescription = document.getElementsByName("AhuDescription")[0].value;
	var ahuAhumake = document.getElementsByName("Ahumake")[0].value;
	var ahuAirFlowrate = document.getElementsByName("AirFlowrate")[0].value;
	var ahuPressure = document.getElementsByName("Pressure")[0].value;
	var ahuTypeFan = document.getElementsByName("TypeFan")[0].value;
	var ahuFilter = document.getElementsByName("Filter")[0].value;
	var ahuPUFThk = document.getElementsByName("PUFThk")[0].value;
	var ahuInnerSkin = document.getElementsByName("InnerSkin")[0].value;
	var ahuOuterSkin = document.getElementsByName("OuterSkin")[0].value;
	var ahuCooling = document.getElementsByName("Cooling")[0].value;
	var ahureheat = document.getElementsByName("reheat")[0].value;
	var ahuSection = document.getElementsByName("Section")[0].value;
	var ahuHumidifier = document.getElementsByName("Humidifier")[0].value;
	var ahuMotorKw = document.getElementsByName("MotorKw")[0].value;
	var ahuCost = document.getElementsByName("Cost")[0].value;
	var ahuSpecificCost = document.getElementsByName("SpecificCost")[0].value;
	var ahuAhuFile = document.getElementById("AhuFile").files[0];

	var formdata = new FormData();
	formdata.append("RecId",apahuupId[0]);
	formdata.append("AhuDescription",ahuAhuDescription);
	formdata.append("Ahumake",ahuAhumake);
	formdata.append("AirFlowrate",ahuAirFlowrate);
	formdata.append("Pressure",ahuPressure);
	formdata.append("TypeFan",ahuTypeFan);
	formdata.append("Filter",ahuFilter);
	formdata.append("PUFThk",ahuPUFThk);
	formdata.append("InnerSkin",ahuInnerSkin);
	formdata.append("OuterSkin",ahuOuterSkin);
	formdata.append("Cooling",ahuCooling);
	formdata.append("reheat",ahureheat);
	formdata.append("Section",ahuSection);
	formdata.append("Humidifier",ahuHumidifier);
	formdata.append("MotorKw",ahuMotorKw);
	formdata.append("Cost",ahuCost);
	formdata.append("SpecificCost",ahuSpecificCost);
	formdata.append("AhuFile",ahuAhuFile);

	$('#update').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("update").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','updateahu.php',true);
	xhttp.send(formdata);
}
function dctUpdate(dctupId) 
{
	
	loader();
	var apdctupId = dctupId.split("~");
	var dctGauge = document.getElementsByName("Gauge")[0].value;
	var dctThickness = document.getElementsByName("Thickness")[0].value;
	var dctFlange = document.getElementsByName("Flange")[0].value;
	var dctBasic_Rate = document.getElementsByName("Basic_Rate")[0].value;
	var dctNew_BasicRate = document.getElementsByName("New_BasicRate")[0].value;
	var dctDiscount = document.getElementsByName("Discount")[0].value;
	var dctBasicDiscount = document.getElementsByName("BasicDiscount")[0].value;
	var dctExcise = document.getElementsByName("Excise")[0].value;
	var dctTransportation = document.getElementsByName("Transportation")[0].value;
	var dctSealant_gasket = document.getElementsByName("Sealant_gasket")[0].value;
	var dctSupport = document.getElementsByName("Support")[0].value;
	var dctWastage = document.getElementsByName("Wastage")[0].value;
	var dctTotal = document.getElementsByName("Total")[0].value;
	var dctVAT = document.getElementsByName("VAT")[0].value;
	var dctGrand_Total = document.getElementsByName("Grand_Total")[0].value;

	var formdata = new FormData();
	formdata.append("RecId",apdctupId[0]);
	formdata.append("Gauge",dctGauge);
	formdata.append("Thickness",dctThickness);
	formdata.append("Flange",dctFlange);
	formdata.append("Basic_Rate",dctBasic_Rate);
	formdata.append("New_BasicRate",dctNew_BasicRate);
	formdata.append("Discount",dctDiscount);
	formdata.append("BasicDiscount",dctBasicDiscount);
	formdata.append("Excise",dctExcise);
	formdata.append("Transportation",dctTransportation);
	formdata.append("Sealant_gasket",dctSealant_gasket);
	formdata.append("Support",dctSupport);
	formdata.append("Wastage",dctWastage);
	formdata.append("Total",dctTotal);
	formdata.append("VAT",dctVAT);
	formdata.append("Grand_Total",dctGrand_Total);

	$('#update').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("update").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','updatedct.php',true);
	xhttp.send(formdata);
}
function update_ads(spDtls) 
{
	var apDtls = spDtls.split("~");
	var sAdsItem = document.getElementsByName("AdsItem")[0].value;
	var sAdsMake = document.getElementsByName("AdsMake")[0].value;
	var sAdsDate = document.getElementsByName("AdsDate")[0].value;
	var sAdsFile = document.getElementById("AdsFile").files[0];
	
	var formdata = new FormData();
	formdata.append("RecId",apDtls[0]);	
	formdata.append("AdsItem",sAdsItem);
	formdata.append("AdsMake",sAdsMake);
	formdata.append("AdsDate",sAdsDate);
	formdata.append("AdsFile",sAdsFile);

	$('#EditAds').hide();
	$('#updateAds').show();
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("updateAds").innerHTML = xhttp.responseText;
	}
  };
  
	xhttp.open('post','updateAds.php',true);
	xhttp.send(formdata);
}		

//loader function
function loader()
{
	$('body').removeClass('loaded');
       setTimeout(function() {
             window.location.reload();
          },0);
}
 //delete function
function delete_recordADS(spDetails)
{
	loader();
	$('.clsListDiv').children().hide();
	$("#DeleteMsg").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("DeleteMsg").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','DeleteAds.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function delete_recordDCT(spDetails)
{
	loader();
	$('.clsListDiv').children().hide();
	$("#DeleteMsg").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("DeleteMsg").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','DeleteDct.php?RecIdDct='+apDetails[0],true);
	xhttp.send();

}
function delete_recordAhu(spDetails)
{
	loader();
	$('.clsListDiv').children().hide();
	$("#DeleteMsg").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("DeleteMsg").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','DeleteAhu.php?RecId='+apDetails[0],true);
	xhttp.send();
}
function delete_recordCT(spDetails)
{
	loader();
	$('.clsListDiv').children().hide();
	$("#DeleteMsg").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("DeleteMsg").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','DeleteCt.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function delete_recordPMP(spDetails)
{
	loader();
	$('.clsListDiv').children().hide();
	$("#DeleteMsg").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("DeleteMsg").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','DeletePmp.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function delete_recordVLV(spDetails)
{
	loader();
	$('.clsListDiv').children().hide();
	$("#DeleteMsg").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("DeleteMsg").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','DeleteVlv.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function delete_recordPPG(spDetails)
{
	loader();
	$('.clsListDiv').children().hide();
	$("#DeleteMsg").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("DeleteMsg").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','DeletePpg.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function delete_recordOOM(spDetails)
{
	loader();
	$('.clsListDiv').children().hide();
	$("#DeleteMsg").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("DeleteMsg").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','DeleteOom.php?RecId='+apDetails[0],true);
	xhttp.send();

}
function delete_recordOEM(spDetails)
{
	loader();
	$('.clsListDiv').children().hide();
	$("#DeleteMsg").show();
	var apDetails = spDetails.split("~");
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (xhttp.readyState == 4 && xhttp.status == 200) 
	{
		document.getElementById("DeleteMsg").innerHTML = xhttp.responseText;
	}
  };
	xhttp.open('post','DeleteOem.php?RecId='+apDetails[0],true);
	xhttp.send();

}
	</script>
