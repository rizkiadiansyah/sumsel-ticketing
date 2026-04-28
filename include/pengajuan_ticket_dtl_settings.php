<?php
$tdatapengajuan_ticket_dtl = array();
$tdatapengajuan_ticket_dtl[".searchableFields"] = array();
$tdatapengajuan_ticket_dtl[".ShortName"] = "pengajuan_ticket_dtl";
$tdatapengajuan_ticket_dtl[".OwnerID"] = "";
$tdatapengajuan_ticket_dtl[".OriginalTable"] = "tbl_pengajuan_ticket_dtl";


$tdatapengajuan_ticket_dtl[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatapengajuan_ticket_dtl[".originalPagesByType"] = $tdatapengajuan_ticket_dtl[".pagesByType"];
$tdatapengajuan_ticket_dtl[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatapengajuan_ticket_dtl[".originalPages"] = $tdatapengajuan_ticket_dtl[".pages"];
$tdatapengajuan_ticket_dtl[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatapengajuan_ticket_dtl[".originalDefaultPages"] = $tdatapengajuan_ticket_dtl[".defaultPages"];

//	field labels
$fieldLabelspengajuan_ticket_dtl = array();
$fieldToolTipspengajuan_ticket_dtl = array();
$pageTitlespengajuan_ticket_dtl = array();
$placeHolderspengajuan_ticket_dtl = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspengajuan_ticket_dtl["English"] = array();
	$fieldToolTipspengajuan_ticket_dtl["English"] = array();
	$placeHolderspengajuan_ticket_dtl["English"] = array();
	$pageTitlespengajuan_ticket_dtl["English"] = array();
	$fieldLabelspengajuan_ticket_dtl["English"]["id_detail"] = "Id Detail";
	$fieldToolTipspengajuan_ticket_dtl["English"]["id_detail"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["id_detail"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["req_id"] = "Req Id";
	$fieldToolTipspengajuan_ticket_dtl["English"]["req_id"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["req_id"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["nik_penumpang"] = "NIK Penumpang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["nik_penumpang"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["nik_penumpang"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["nik_ktp"] = "NIK Ktp";
	$fieldToolTipspengajuan_ticket_dtl["English"]["nik_ktp"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["nik_ktp"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["nama_penumpang"] = "Nama Penumpang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["nama_penumpang"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["nama_penumpang"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["posisi_penumpang"] = "Posisi Penumpang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["posisi_penumpang"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["posisi_penumpang"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["sbu_penumpang"] = "Sbu Penumpang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["sbu_penumpang"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["sbu_penumpang"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["no_telp_penumpang"] = "No Telp Penumpang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["no_telp_penumpang"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["no_telp_penumpang"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["gender"] = "Gender";
	$fieldToolTipspengajuan_ticket_dtl["English"]["gender"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["gender"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["tipe_perjalanan"] = "Tipe Perjalanan";
	$fieldToolTipspengajuan_ticket_dtl["English"]["tipe_perjalanan"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["tipe_perjalanan"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["bandara_asal"] = "Bandara Asal";
	$fieldToolTipspengajuan_ticket_dtl["English"]["bandara_asal"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["bandara_asal"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["bandara_tujuan"] = "Bandara Tujuan";
	$fieldToolTipspengajuan_ticket_dtl["English"]["bandara_tujuan"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["bandara_tujuan"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["maskapai"] = "Maskapai";
	$fieldToolTipspengajuan_ticket_dtl["English"]["maskapai"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["maskapai"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["tanggal_penerbangan"] = "Tanggal Penerbangan";
	$fieldToolTipspengajuan_ticket_dtl["English"]["tanggal_penerbangan"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["tanggal_penerbangan"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["waktu_berangkat"] = "Waktu Berangkat";
	$fieldToolTipspengajuan_ticket_dtl["English"]["waktu_berangkat"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["waktu_berangkat"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["waktu_tiba"] = "Waktu Tiba";
	$fieldToolTipspengajuan_ticket_dtl["English"]["waktu_tiba"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["waktu_tiba"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["catatan_khusus"] = "Catatan Khusus";
	$fieldToolTipspengajuan_ticket_dtl["English"]["catatan_khusus"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["catatan_khusus"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["bandara_asal_p"] = "Bandara Asal Pulang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["bandara_asal_p"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["bandara_asal_p"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["bandara_tujuan_p"] = "Bandara Tujuan Pulang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["bandara_tujuan_p"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["bandara_tujuan_p"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["maskapai_p"] = "Maskapai Penerbangan Pulang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["maskapai_p"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["maskapai_p"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["tanggal_penerbangan_p"] = "Tanggal Penerbangan Pulang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["tanggal_penerbangan_p"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["tanggal_penerbangan_p"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["waktu_berangkat_p"] = "Waktu Berangkat Pulang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["waktu_berangkat_p"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["waktu_berangkat_p"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["waktu_tiba_p"] = "Waktu Tiba Pulang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["waktu_tiba_p"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["waktu_tiba_p"] = "";
	$fieldLabelspengajuan_ticket_dtl["English"]["catatan_khusus_p"] = "Catatan Khusus Pulang";
	$fieldToolTipspengajuan_ticket_dtl["English"]["catatan_khusus_p"] = "";
	$placeHolderspengajuan_ticket_dtl["English"]["catatan_khusus_p"] = "";
	if (count($fieldToolTipspengajuan_ticket_dtl["English"]))
		$tdatapengajuan_ticket_dtl[".isUseToolTips"] = true;
}


	$tdatapengajuan_ticket_dtl[".NCSearch"] = true;



$tdatapengajuan_ticket_dtl[".shortTableName"] = "pengajuan_ticket_dtl";
$tdatapengajuan_ticket_dtl[".nSecOptions"] = 0;

$tdatapengajuan_ticket_dtl[".mainTableOwnerID"] = "";
$tdatapengajuan_ticket_dtl[".entityType"] = 1;
$tdatapengajuan_ticket_dtl[".connId"] = "sumsel_ticketing_at_localhost";


$tdatapengajuan_ticket_dtl[".strOriginalTableName"] = "tbl_pengajuan_ticket_dtl";

	



$tdatapengajuan_ticket_dtl[".showAddInPopup"] = false;

$tdatapengajuan_ticket_dtl[".showEditInPopup"] = false;

$tdatapengajuan_ticket_dtl[".showViewInPopup"] = false;

$tdatapengajuan_ticket_dtl[".listAjax"] = false;
//	temporary
//$tdatapengajuan_ticket_dtl[".listAjax"] = false;

	$tdatapengajuan_ticket_dtl[".audit"] = false;

	$tdatapengajuan_ticket_dtl[".locking"] = false;


$pages = $tdatapengajuan_ticket_dtl[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapengajuan_ticket_dtl[".edit"] = true;
	$tdatapengajuan_ticket_dtl[".afterEditAction"] = 1;
	$tdatapengajuan_ticket_dtl[".closePopupAfterEdit"] = 1;
	$tdatapengajuan_ticket_dtl[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapengajuan_ticket_dtl[".add"] = true;
$tdatapengajuan_ticket_dtl[".afterAddAction"] = 1;
$tdatapengajuan_ticket_dtl[".closePopupAfterAdd"] = 1;
$tdatapengajuan_ticket_dtl[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapengajuan_ticket_dtl[".list"] = true;
}



$tdatapengajuan_ticket_dtl[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapengajuan_ticket_dtl[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapengajuan_ticket_dtl[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapengajuan_ticket_dtl[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapengajuan_ticket_dtl[".printFriendly"] = true;
}



$tdatapengajuan_ticket_dtl[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapengajuan_ticket_dtl[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapengajuan_ticket_dtl[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapengajuan_ticket_dtl[".isUseAjaxSuggest"] = true;



																								

$tdatapengajuan_ticket_dtl[".ajaxCodeSnippetAdded"] = false;

$tdatapengajuan_ticket_dtl[".buttonsAdded"] = false;

$tdatapengajuan_ticket_dtl[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapengajuan_ticket_dtl[".isUseTimeForSearch"] = false;


$tdatapengajuan_ticket_dtl[".badgeColor"] = "5f9ea0";


$tdatapengajuan_ticket_dtl[".allSearchFields"] = array();
$tdatapengajuan_ticket_dtl[".filterFields"] = array();
$tdatapengajuan_ticket_dtl[".requiredSearchFields"] = array();

$tdatapengajuan_ticket_dtl[".googleLikeFields"] = array();
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "id_detail";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "req_id";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "nik_penumpang";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "nik_ktp";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "nama_penumpang";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "posisi_penumpang";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "sbu_penumpang";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "no_telp_penumpang";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "gender";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "tipe_perjalanan";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "bandara_asal";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "bandara_tujuan";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "maskapai";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "tanggal_penerbangan";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "waktu_berangkat";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "waktu_tiba";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "catatan_khusus";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "bandara_asal_p";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "bandara_tujuan_p";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "maskapai_p";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "tanggal_penerbangan_p";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "waktu_berangkat_p";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "waktu_tiba_p";
$tdatapengajuan_ticket_dtl[".googleLikeFields"][] = "catatan_khusus_p";



$tdatapengajuan_ticket_dtl[".tableType"] = "list";

$tdatapengajuan_ticket_dtl[".printerPageOrientation"] = 0;
$tdatapengajuan_ticket_dtl[".nPrinterPageScale"] = 100;

$tdatapengajuan_ticket_dtl[".nPrinterSplitRecords"] = 40;

$tdatapengajuan_ticket_dtl[".geocodingEnabled"] = false;










$tdatapengajuan_ticket_dtl[".pageSize"] = 20;

$tdatapengajuan_ticket_dtl[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapengajuan_ticket_dtl[".strOrderBy"] = $tstrOrderBy;

$tdatapengajuan_ticket_dtl[".orderindexes"] = array();


$tdatapengajuan_ticket_dtl[".sqlHead"] = "SELECT id_detail,  	req_id,  	nik_penumpang,  	nik_ktp,  	nama_penumpang,  	posisi_penumpang,  	sbu_penumpang,  	no_telp_penumpang,  	gender,  	tipe_perjalanan,  	bandara_asal,  	bandara_tujuan,  	maskapai,  	tanggal_penerbangan,  	waktu_berangkat,  	waktu_tiba,  	catatan_khusus,  	bandara_asal_p,  	bandara_tujuan_p,  	maskapai_p,  	tanggal_penerbangan_p,  	waktu_berangkat_p,  	waktu_tiba_p,  	catatan_khusus_p";
$tdatapengajuan_ticket_dtl[".sqlFrom"] = "FROM tbl_pengajuan_ticket_dtl";
$tdatapengajuan_ticket_dtl[".sqlWhereExpr"] = "";
$tdatapengajuan_ticket_dtl[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapengajuan_ticket_dtl[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapengajuan_ticket_dtl[".arrGroupsPerPage"] = $arrGPP;

$tdatapengajuan_ticket_dtl[".highlightSearchResults"] = true;

$tableKeyspengajuan_ticket_dtl = array();
$tableKeyspengajuan_ticket_dtl[] = "id_detail";
$tdatapengajuan_ticket_dtl[".Keys"] = $tableKeyspengajuan_ticket_dtl;


$tdatapengajuan_ticket_dtl[".hideMobileList"] = array();




//	id_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_detail";
	$fdata["GoodName"] = "id_detail";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","id_detail");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_detail";

		$fdata["sourceSingle"] = "id_detail";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_detail";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["id_detail"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "id_detail";
//	req_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "req_id";
	$fdata["GoodName"] = "req_id";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","req_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "req_id";

		$fdata["sourceSingle"] = "req_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "req_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=25";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["req_id"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "req_id";
//	nik_penumpang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nik_penumpang";
	$fdata["GoodName"] = "nik_penumpang";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","nik_penumpang");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nik_penumpang";

		$fdata["sourceSingle"] = "nik_penumpang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nik_penumpang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["nik_penumpang"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "nik_penumpang";
//	nik_ktp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nik_ktp";
	$fdata["GoodName"] = "nik_ktp";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","nik_ktp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nik_ktp";

		$fdata["sourceSingle"] = "nik_ktp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nik_ktp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["nik_ktp"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "nik_ktp";
//	nama_penumpang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nama_penumpang";
	$fdata["GoodName"] = "nama_penumpang";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","nama_penumpang");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama_penumpang";

		$fdata["sourceSingle"] = "nama_penumpang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama_penumpang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["nama_penumpang"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "nama_penumpang";
//	posisi_penumpang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "posisi_penumpang";
	$fdata["GoodName"] = "posisi_penumpang";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","posisi_penumpang");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "posisi_penumpang";

		$fdata["sourceSingle"] = "posisi_penumpang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "posisi_penumpang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["posisi_penumpang"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "posisi_penumpang";
//	sbu_penumpang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sbu_penumpang";
	$fdata["GoodName"] = "sbu_penumpang";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","sbu_penumpang");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sbu_penumpang";

		$fdata["sourceSingle"] = "sbu_penumpang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sbu_penumpang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["sbu_penumpang"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "sbu_penumpang";
//	no_telp_penumpang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "no_telp_penumpang";
	$fdata["GoodName"] = "no_telp_penumpang";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","no_telp_penumpang");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "no_telp_penumpang";

		$fdata["sourceSingle"] = "no_telp_penumpang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "no_telp_penumpang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["no_telp_penumpang"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "no_telp_penumpang";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","gender");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "gender";

		$fdata["sourceSingle"] = "gender";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["gender"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "gender";
//	tipe_perjalanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tipe_perjalanan";
	$fdata["GoodName"] = "tipe_perjalanan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","tipe_perjalanan");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "tipe_perjalanan";

		$fdata["sourceSingle"] = "tipe_perjalanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipe_perjalanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "One Way";
	$edata["LookupValues"][] = "Round Trip";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["tipe_perjalanan"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "tipe_perjalanan";
//	bandara_asal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "bandara_asal";
	$fdata["GoodName"] = "bandara_asal";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","bandara_asal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bandara_asal";

		$fdata["sourceSingle"] = "bandara_asal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bandara_asal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["bandara_asal"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "bandara_asal";
//	bandara_tujuan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "bandara_tujuan";
	$fdata["GoodName"] = "bandara_tujuan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","bandara_tujuan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bandara_tujuan";

		$fdata["sourceSingle"] = "bandara_tujuan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bandara_tujuan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["bandara_tujuan"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "bandara_tujuan";
//	maskapai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "maskapai";
	$fdata["GoodName"] = "maskapai";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","maskapai");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "maskapai";

		$fdata["sourceSingle"] = "maskapai";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maskapai";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["maskapai"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "maskapai";
//	tanggal_penerbangan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tanggal_penerbangan";
	$fdata["GoodName"] = "tanggal_penerbangan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","tanggal_penerbangan");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "tanggal_penerbangan";

		$fdata["sourceSingle"] = "tanggal_penerbangan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanggal_penerbangan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["tanggal_penerbangan"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "tanggal_penerbangan";
//	waktu_berangkat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "waktu_berangkat";
	$fdata["GoodName"] = "waktu_berangkat";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","waktu_berangkat");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "waktu_berangkat";

		$fdata["sourceSingle"] = "waktu_berangkat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "waktu_berangkat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["waktu_berangkat"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "waktu_berangkat";
//	waktu_tiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "waktu_tiba";
	$fdata["GoodName"] = "waktu_tiba";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","waktu_tiba");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "waktu_tiba";

		$fdata["sourceSingle"] = "waktu_tiba";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "waktu_tiba";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["waktu_tiba"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "waktu_tiba";
//	catatan_khusus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "catatan_khusus";
	$fdata["GoodName"] = "catatan_khusus";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","catatan_khusus");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "catatan_khusus";

		$fdata["sourceSingle"] = "catatan_khusus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catatan_khusus";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["catatan_khusus"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "catatan_khusus";
//	bandara_asal_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "bandara_asal_p";
	$fdata["GoodName"] = "bandara_asal_p";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","bandara_asal_p");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bandara_asal_p";

		$fdata["sourceSingle"] = "bandara_asal_p";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bandara_asal_p";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["bandara_asal_p"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "bandara_asal_p";
//	bandara_tujuan_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "bandara_tujuan_p";
	$fdata["GoodName"] = "bandara_tujuan_p";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","bandara_tujuan_p");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bandara_tujuan_p";

		$fdata["sourceSingle"] = "bandara_tujuan_p";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bandara_tujuan_p";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["bandara_tujuan_p"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "bandara_tujuan_p";
//	maskapai_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "maskapai_p";
	$fdata["GoodName"] = "maskapai_p";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","maskapai_p");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "maskapai_p";

		$fdata["sourceSingle"] = "maskapai_p";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maskapai_p";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["maskapai_p"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "maskapai_p";
//	tanggal_penerbangan_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "tanggal_penerbangan_p";
	$fdata["GoodName"] = "tanggal_penerbangan_p";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","tanggal_penerbangan_p");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "tanggal_penerbangan_p";

		$fdata["sourceSingle"] = "tanggal_penerbangan_p";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanggal_penerbangan_p";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["tanggal_penerbangan_p"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "tanggal_penerbangan_p";
//	waktu_berangkat_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "waktu_berangkat_p";
	$fdata["GoodName"] = "waktu_berangkat_p";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","waktu_berangkat_p");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "waktu_berangkat_p";

		$fdata["sourceSingle"] = "waktu_berangkat_p";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "waktu_berangkat_p";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["waktu_berangkat_p"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "waktu_berangkat_p";
//	waktu_tiba_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "waktu_tiba_p";
	$fdata["GoodName"] = "waktu_tiba_p";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","waktu_tiba_p");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "waktu_tiba_p";

		$fdata["sourceSingle"] = "waktu_tiba_p";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "waktu_tiba_p";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["waktu_tiba_p"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "waktu_tiba_p";
//	catatan_khusus_p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "catatan_khusus_p";
	$fdata["GoodName"] = "catatan_khusus_p";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_dtl";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_dtl","catatan_khusus_p");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "catatan_khusus_p";

		$fdata["sourceSingle"] = "catatan_khusus_p";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catatan_khusus_p";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapengajuan_ticket_dtl["catatan_khusus_p"] = $fdata;
		$tdatapengajuan_ticket_dtl[".searchableFields"][] = "catatan_khusus_p";


$tables_data["pengajuan_ticket_dtl"]=&$tdatapengajuan_ticket_dtl;
$field_labels["pengajuan_ticket_dtl"] = &$fieldLabelspengajuan_ticket_dtl;
$fieldToolTips["pengajuan_ticket_dtl"] = &$fieldToolTipspengajuan_ticket_dtl;
$placeHolders["pengajuan_ticket_dtl"] = &$placeHolderspengajuan_ticket_dtl;
$page_titles["pengajuan_ticket_dtl"] = &$pageTitlespengajuan_ticket_dtl;


changeTextControlsToDate( "pengajuan_ticket_dtl" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pengajuan_ticket_dtl"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pengajuan_ticket_dtl"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_pengajuan_ticket_hdr";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pengajuan_ticket_hdr";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pengajuan_ticket_hdr";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pengajuan_ticket_dtl"][0] = $masterParams;
				$masterTablesData["pengajuan_ticket_dtl"][0]["masterKeys"] = array();
	$masterTablesData["pengajuan_ticket_dtl"][0]["masterKeys"][]="req_id";
				$masterTablesData["pengajuan_ticket_dtl"][0]["detailKeys"] = array();
	$masterTablesData["pengajuan_ticket_dtl"][0]["detailKeys"][]="req_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pengajuan_ticket_dtl()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_detail,  	req_id,  	nik_penumpang,  	nik_ktp,  	nama_penumpang,  	posisi_penumpang,  	sbu_penumpang,  	no_telp_penumpang,  	gender,  	tipe_perjalanan,  	bandara_asal,  	bandara_tujuan,  	maskapai,  	tanggal_penerbangan,  	waktu_berangkat,  	waktu_tiba,  	catatan_khusus,  	bandara_asal_p,  	bandara_tujuan_p,  	maskapai_p,  	tanggal_penerbangan_p,  	waktu_berangkat_p,  	waktu_tiba_p,  	catatan_khusus_p";
$proto0["m_strFrom"] = "FROM tbl_pengajuan_ticket_dtl";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_detail",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto6["m_sql"] = "id_detail";
$proto6["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "req_id",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto8["m_sql"] = "req_id";
$proto8["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nik_penumpang",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto10["m_sql"] = "nik_penumpang";
$proto10["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nik_ktp",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto12["m_sql"] = "nik_ktp";
$proto12["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "nama_penumpang",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto14["m_sql"] = "nama_penumpang";
$proto14["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "posisi_penumpang",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto16["m_sql"] = "posisi_penumpang";
$proto16["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sbu_penumpang",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto18["m_sql"] = "sbu_penumpang";
$proto18["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "no_telp_penumpang",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto20["m_sql"] = "no_telp_penumpang";
$proto20["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto22["m_sql"] = "gender";
$proto22["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tipe_perjalanan",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto24["m_sql"] = "tipe_perjalanan";
$proto24["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "bandara_asal",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto26["m_sql"] = "bandara_asal";
$proto26["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "bandara_tujuan",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto28["m_sql"] = "bandara_tujuan";
$proto28["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "maskapai",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto30["m_sql"] = "maskapai";
$proto30["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "tanggal_penerbangan",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto32["m_sql"] = "tanggal_penerbangan";
$proto32["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "waktu_berangkat",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto34["m_sql"] = "waktu_berangkat";
$proto34["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "waktu_tiba",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto36["m_sql"] = "waktu_tiba";
$proto36["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "catatan_khusus",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto38["m_sql"] = "catatan_khusus";
$proto38["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "bandara_asal_p",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto40["m_sql"] = "bandara_asal_p";
$proto40["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "bandara_tujuan_p",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto42["m_sql"] = "bandara_tujuan_p";
$proto42["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "maskapai_p",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto44["m_sql"] = "maskapai_p";
$proto44["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "tanggal_penerbangan_p",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto46["m_sql"] = "tanggal_penerbangan_p";
$proto46["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "waktu_berangkat_p",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto48["m_sql"] = "waktu_berangkat_p";
$proto48["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "waktu_tiba_p",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto50["m_sql"] = "waktu_tiba_p";
$proto50["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "catatan_khusus_p",
	"m_strTable" => "tbl_pengajuan_ticket_dtl",
	"m_srcTableName" => "pengajuan_ticket_dtl"
));

$proto52["m_sql"] = "catatan_khusus_p";
$proto52["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "tbl_pengajuan_ticket_dtl";
$proto55["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id_detail";
$proto55["m_columns"][] = "req_id";
$proto55["m_columns"][] = "nik_penumpang";
$proto55["m_columns"][] = "nik_ktp";
$proto55["m_columns"][] = "nama_penumpang";
$proto55["m_columns"][] = "posisi_penumpang";
$proto55["m_columns"][] = "sbu_penumpang";
$proto55["m_columns"][] = "no_telp_penumpang";
$proto55["m_columns"][] = "gender";
$proto55["m_columns"][] = "tipe_perjalanan";
$proto55["m_columns"][] = "bandara_asal";
$proto55["m_columns"][] = "bandara_tujuan";
$proto55["m_columns"][] = "maskapai";
$proto55["m_columns"][] = "tanggal_penerbangan";
$proto55["m_columns"][] = "waktu_berangkat";
$proto55["m_columns"][] = "waktu_tiba";
$proto55["m_columns"][] = "catatan_khusus";
$proto55["m_columns"][] = "bandara_asal_p";
$proto55["m_columns"][] = "bandara_tujuan_p";
$proto55["m_columns"][] = "maskapai_p";
$proto55["m_columns"][] = "tanggal_penerbangan_p";
$proto55["m_columns"][] = "waktu_berangkat_p";
$proto55["m_columns"][] = "waktu_tiba_p";
$proto55["m_columns"][] = "catatan_khusus_p";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "tbl_pengajuan_ticket_dtl";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "pengajuan_ticket_dtl";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pengajuan_ticket_dtl";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pengajuan_ticket_dtl = createSqlQuery_pengajuan_ticket_dtl();


	
		;

																								

$tdatapengajuan_ticket_dtl[".sqlquery"] = $queryData_pengajuan_ticket_dtl;



$tdatapengajuan_ticket_dtl[".hasEvents"] = false;

?>