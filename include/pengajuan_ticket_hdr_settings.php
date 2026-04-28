<?php
$tdatapengajuan_ticket_hdr = array();
$tdatapengajuan_ticket_hdr[".searchableFields"] = array();
$tdatapengajuan_ticket_hdr[".ShortName"] = "pengajuan_ticket_hdr";
$tdatapengajuan_ticket_hdr[".OwnerID"] = "nik_pemesan";
$tdatapengajuan_ticket_hdr[".OriginalTable"] = "tbl_pengajuan_ticket_hdr";


$tdatapengajuan_ticket_hdr[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatapengajuan_ticket_hdr[".originalPagesByType"] = $tdatapengajuan_ticket_hdr[".pagesByType"];
$tdatapengajuan_ticket_hdr[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatapengajuan_ticket_hdr[".originalPages"] = $tdatapengajuan_ticket_hdr[".pages"];
$tdatapengajuan_ticket_hdr[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatapengajuan_ticket_hdr[".originalDefaultPages"] = $tdatapengajuan_ticket_hdr[".defaultPages"];

//	field labels
$fieldLabelspengajuan_ticket_hdr = array();
$fieldToolTipspengajuan_ticket_hdr = array();
$pageTitlespengajuan_ticket_hdr = array();
$placeHolderspengajuan_ticket_hdr = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspengajuan_ticket_hdr["English"] = array();
	$fieldToolTipspengajuan_ticket_hdr["English"] = array();
	$placeHolderspengajuan_ticket_hdr["English"] = array();
	$pageTitlespengajuan_ticket_hdr["English"] = array();
	$fieldLabelspengajuan_ticket_hdr["English"]["req_id"] = "Req Id";
	$fieldToolTipspengajuan_ticket_hdr["English"]["req_id"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["req_id"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["nik_pemesan"] = "NIK Pemesan";
	$fieldToolTipspengajuan_ticket_hdr["English"]["nik_pemesan"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["nik_pemesan"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["nama_pemesan"] = "Nama Pemesan";
	$fieldToolTipspengajuan_ticket_hdr["English"]["nama_pemesan"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["nama_pemesan"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["posisi_pemesan"] = "Posisi Pemesan";
	$fieldToolTipspengajuan_ticket_hdr["English"]["posisi_pemesan"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["posisi_pemesan"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["sbu_pemesan"] = "SBU Pemesan";
	$fieldToolTipspengajuan_ticket_hdr["English"]["sbu_pemesan"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["sbu_pemesan"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["no_telp_pemesan"] = "No Telp Pemesan";
	$fieldToolTipspengajuan_ticket_hdr["English"]["no_telp_pemesan"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["no_telp_pemesan"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["email_pemesan"] = "Email Pemesan";
	$fieldToolTipspengajuan_ticket_hdr["English"]["email_pemesan"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["email_pemesan"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["atasan_langsung"] = "Atasan Langsung";
	$fieldToolTipspengajuan_ticket_hdr["English"]["atasan_langsung"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["atasan_langsung"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["jenis_pengajuan"] = "Jenis Pengajuan";
	$fieldToolTipspengajuan_ticket_hdr["English"]["jenis_pengajuan"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["jenis_pengajuan"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["alasan"] = "Alasan";
	$fieldToolTipspengajuan_ticket_hdr["English"]["alasan"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["alasan"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["beban_sbu"] = "Beban SBU";
	$fieldToolTipspengajuan_ticket_hdr["English"]["beban_sbu"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["beban_sbu"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["status"] = "Status";
	$fieldToolTipspengajuan_ticket_hdr["English"]["status"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["status"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["ket_admin"] = "Ket Admin";
	$fieldToolTipspengajuan_ticket_hdr["English"]["ket_admin"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["ket_admin"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["created_at"] = "Created At";
	$fieldToolTipspengajuan_ticket_hdr["English"]["created_at"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["created_at"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["create_by"] = "Create By";
	$fieldToolTipspengajuan_ticket_hdr["English"]["create_by"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["create_by"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["updated_at"] = "Updated At";
	$fieldToolTipspengajuan_ticket_hdr["English"]["updated_at"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["updated_at"] = "";
	$fieldLabelspengajuan_ticket_hdr["English"]["update_by"] = "Update By";
	$fieldToolTipspengajuan_ticket_hdr["English"]["update_by"] = "";
	$placeHolderspengajuan_ticket_hdr["English"]["update_by"] = "";
	if (count($fieldToolTipspengajuan_ticket_hdr["English"]))
		$tdatapengajuan_ticket_hdr[".isUseToolTips"] = true;
}


	$tdatapengajuan_ticket_hdr[".NCSearch"] = true;



$tdatapengajuan_ticket_hdr[".shortTableName"] = "pengajuan_ticket_hdr";
$tdatapengajuan_ticket_hdr[".nSecOptions"] = 0;

$tdatapengajuan_ticket_hdr[".mainTableOwnerID"] = "nik_pemesan";
$tdatapengajuan_ticket_hdr[".entityType"] = 1;
$tdatapengajuan_ticket_hdr[".connId"] = "sumsel_ticketing_at_localhost";


$tdatapengajuan_ticket_hdr[".strOriginalTableName"] = "tbl_pengajuan_ticket_hdr";

	



$tdatapengajuan_ticket_hdr[".showAddInPopup"] = false;

$tdatapengajuan_ticket_hdr[".showEditInPopup"] = false;

$tdatapengajuan_ticket_hdr[".showViewInPopup"] = false;

$tdatapengajuan_ticket_hdr[".listAjax"] = false;
//	temporary
//$tdatapengajuan_ticket_hdr[".listAjax"] = false;

	$tdatapengajuan_ticket_hdr[".audit"] = false;

	$tdatapengajuan_ticket_hdr[".locking"] = false;


$pages = $tdatapengajuan_ticket_hdr[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapengajuan_ticket_hdr[".edit"] = true;
	$tdatapengajuan_ticket_hdr[".afterEditAction"] = 1;
	$tdatapengajuan_ticket_hdr[".closePopupAfterEdit"] = 1;
	$tdatapengajuan_ticket_hdr[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapengajuan_ticket_hdr[".add"] = true;
$tdatapengajuan_ticket_hdr[".afterAddAction"] = 1;
$tdatapengajuan_ticket_hdr[".closePopupAfterAdd"] = 1;
$tdatapengajuan_ticket_hdr[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapengajuan_ticket_hdr[".list"] = true;
}



$tdatapengajuan_ticket_hdr[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapengajuan_ticket_hdr[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapengajuan_ticket_hdr[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapengajuan_ticket_hdr[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapengajuan_ticket_hdr[".printFriendly"] = true;
}



$tdatapengajuan_ticket_hdr[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapengajuan_ticket_hdr[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapengajuan_ticket_hdr[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapengajuan_ticket_hdr[".isUseAjaxSuggest"] = true;



												

$tdatapengajuan_ticket_hdr[".ajaxCodeSnippetAdded"] = false;

$tdatapengajuan_ticket_hdr[".buttonsAdded"] = false;

$tdatapengajuan_ticket_hdr[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapengajuan_ticket_hdr[".isUseTimeForSearch"] = false;


$tdatapengajuan_ticket_hdr[".badgeColor"] = "DAA520";


$tdatapengajuan_ticket_hdr[".allSearchFields"] = array();
$tdatapengajuan_ticket_hdr[".filterFields"] = array();
$tdatapengajuan_ticket_hdr[".requiredSearchFields"] = array();

$tdatapengajuan_ticket_hdr[".googleLikeFields"] = array();
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "req_id";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "nik_pemesan";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "nama_pemesan";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "posisi_pemesan";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "sbu_pemesan";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "no_telp_pemesan";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "email_pemesan";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "atasan_langsung";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "jenis_pengajuan";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "alasan";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "beban_sbu";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "status";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "ket_admin";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "created_at";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "create_by";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "updated_at";
$tdatapengajuan_ticket_hdr[".googleLikeFields"][] = "update_by";



$tdatapengajuan_ticket_hdr[".tableType"] = "list";

$tdatapengajuan_ticket_hdr[".printerPageOrientation"] = 0;
$tdatapengajuan_ticket_hdr[".nPrinterPageScale"] = 100;

$tdatapengajuan_ticket_hdr[".nPrinterSplitRecords"] = 40;

$tdatapengajuan_ticket_hdr[".geocodingEnabled"] = false;










$tdatapengajuan_ticket_hdr[".pageSize"] = 20;

$tdatapengajuan_ticket_hdr[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY 	created_at DESC";
$tdatapengajuan_ticket_hdr[".strOrderBy"] = $tstrOrderBy;

$tdatapengajuan_ticket_hdr[".orderindexes"] = array();
			$tdatapengajuan_ticket_hdr[".orderindexes"][] = array(14, (0 ? "ASC" : "DESC"), "created_at");


$tdatapengajuan_ticket_hdr[".sqlHead"] = "SELECT req_id,  	nik_pemesan,  	nama_pemesan,  	posisi_pemesan,  	sbu_pemesan,  	no_telp_pemesan,  	email_pemesan,  	atasan_langsung,  	jenis_pengajuan,  	alasan,  	beban_sbu,  	status,  	ket_admin,  	created_at,  	create_by,  	updated_at,  	update_by";
$tdatapengajuan_ticket_hdr[".sqlFrom"] = "FROM tbl_pengajuan_ticket_hdr";
$tdatapengajuan_ticket_hdr[".sqlWhereExpr"] = "";
$tdatapengajuan_ticket_hdr[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapengajuan_ticket_hdr[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapengajuan_ticket_hdr[".arrGroupsPerPage"] = $arrGPP;

$tdatapengajuan_ticket_hdr[".highlightSearchResults"] = true;

$tableKeyspengajuan_ticket_hdr = array();
$tableKeyspengajuan_ticket_hdr[] = "req_id";
$tdatapengajuan_ticket_hdr[".Keys"] = $tableKeyspengajuan_ticket_hdr;


$tdatapengajuan_ticket_hdr[".hideMobileList"] = array();




//	req_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "req_id";
	$fdata["GoodName"] = "req_id";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","req_id");
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


	$tdatapengajuan_ticket_hdr["req_id"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "req_id";
//	nik_pemesan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nik_pemesan";
	$fdata["GoodName"] = "nik_pemesan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","nik_pemesan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nik_pemesan";

		$fdata["sourceSingle"] = "nik_pemesan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nik_pemesan";

	
	
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


	$tdatapengajuan_ticket_hdr["nik_pemesan"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "nik_pemesan";
//	nama_pemesan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nama_pemesan";
	$fdata["GoodName"] = "nama_pemesan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","nama_pemesan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama_pemesan";

		$fdata["sourceSingle"] = "nama_pemesan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama_pemesan";

	
	
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


	$tdatapengajuan_ticket_hdr["nama_pemesan"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "nama_pemesan";
//	posisi_pemesan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "posisi_pemesan";
	$fdata["GoodName"] = "posisi_pemesan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","posisi_pemesan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "posisi_pemesan";

		$fdata["sourceSingle"] = "posisi_pemesan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "posisi_pemesan";

	
	
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


	$tdatapengajuan_ticket_hdr["posisi_pemesan"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "posisi_pemesan";
//	sbu_pemesan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sbu_pemesan";
	$fdata["GoodName"] = "sbu_pemesan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","sbu_pemesan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sbu_pemesan";

		$fdata["sourceSingle"] = "sbu_pemesan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sbu_pemesan";

	
	
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


	$tdatapengajuan_ticket_hdr["sbu_pemesan"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "sbu_pemesan";
//	no_telp_pemesan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "no_telp_pemesan";
	$fdata["GoodName"] = "no_telp_pemesan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","no_telp_pemesan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "no_telp_pemesan";

		$fdata["sourceSingle"] = "no_telp_pemesan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "no_telp_pemesan";

	
	
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


	$tdatapengajuan_ticket_hdr["no_telp_pemesan"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "no_telp_pemesan";
//	email_pemesan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email_pemesan";
	$fdata["GoodName"] = "email_pemesan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","email_pemesan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email_pemesan";

		$fdata["sourceSingle"] = "email_pemesan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_pemesan";

	
	
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


	$tdatapengajuan_ticket_hdr["email_pemesan"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "email_pemesan";
//	atasan_langsung
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "atasan_langsung";
	$fdata["GoodName"] = "atasan_langsung";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","atasan_langsung");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "atasan_langsung";

		$fdata["sourceSingle"] = "atasan_langsung";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "atasan_langsung";

	
	
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


	$tdatapengajuan_ticket_hdr["atasan_langsung"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "atasan_langsung";
//	jenis_pengajuan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "jenis_pengajuan";
	$fdata["GoodName"] = "jenis_pengajuan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","jenis_pengajuan");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "jenis_pengajuan";

		$fdata["sourceSingle"] = "jenis_pengajuan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jenis_pengajuan";

	
	
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
	$edata["LookupValues"][] = "Cuti";
	$edata["LookupValues"][] = "Dinas";

	
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


	$tdatapengajuan_ticket_hdr["jenis_pengajuan"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "jenis_pengajuan";
//	alasan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "alasan";
	$fdata["GoodName"] = "alasan";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","alasan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "alasan";

		$fdata["sourceSingle"] = "alasan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alasan";

	
	
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


	$tdatapengajuan_ticket_hdr["alasan"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "alasan";
//	beban_sbu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "beban_sbu";
	$fdata["GoodName"] = "beban_sbu";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","beban_sbu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "beban_sbu";

		$fdata["sourceSingle"] = "beban_sbu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "beban_sbu";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_code_list";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Code";

				$edata["LookupWhere"] = "CatID = 'app_sbu' AND Active = '1'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapengajuan_ticket_hdr["beban_sbu"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "beban_sbu";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_code_list";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Description";

				$edata["LookupWhere"] = "CatID = 'status' AND Active = '1'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapengajuan_ticket_hdr["status"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "status";
//	ket_admin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ket_admin";
	$fdata["GoodName"] = "ket_admin";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","ket_admin");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ket_admin";

		$fdata["sourceSingle"] = "ket_admin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ket_admin";

	
	
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


	$tdatapengajuan_ticket_hdr["ket_admin"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "ket_admin";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
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


	$tdatapengajuan_ticket_hdr["created_at"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "created_at";
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","create_by");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "create_by";

		$fdata["sourceSingle"] = "create_by";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_by";

	
	
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


	$tdatapengajuan_ticket_hdr["create_by"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "create_by";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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


	$tdatapengajuan_ticket_hdr["updated_at"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "updated_at";
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "tbl_pengajuan_ticket_hdr";
	$fdata["Label"] = GetFieldLabel("pengajuan_ticket_hdr","update_by");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "update_by";

		$fdata["sourceSingle"] = "update_by";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
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


	$tdatapengajuan_ticket_hdr["update_by"] = $fdata;
		$tdatapengajuan_ticket_hdr[".searchableFields"][] = "update_by";


$tables_data["pengajuan_ticket_hdr"]=&$tdatapengajuan_ticket_hdr;
$field_labels["pengajuan_ticket_hdr"] = &$fieldLabelspengajuan_ticket_hdr;
$fieldToolTips["pengajuan_ticket_hdr"] = &$fieldToolTipspengajuan_ticket_hdr;
$placeHolders["pengajuan_ticket_hdr"] = &$placeHolderspengajuan_ticket_hdr;
$page_titles["pengajuan_ticket_hdr"] = &$pageTitlespengajuan_ticket_hdr;


changeTextControlsToDate( "pengajuan_ticket_hdr" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pengajuan_ticket_hdr"] = array();
//	pengajuan_ticket_dtl
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pengajuan_ticket_dtl";
		$detailsParam["dOriginalTable"] = "tbl_pengajuan_ticket_dtl";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pengajuan_ticket_dtl";
	$detailsParam["dCaptionTable"] = GetTableCaption("pengajuan_ticket_dtl");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pengajuan_ticket_hdr"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pengajuan_ticket_hdr"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pengajuan_ticket_hdr"][$dIndex]["masterKeys"][]="req_id";

				$detailsTablesData["pengajuan_ticket_hdr"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pengajuan_ticket_hdr"][$dIndex]["detailKeys"][]="req_id";
//	ticket_attachments
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ticket_attachments";
		$detailsParam["dOriginalTable"] = "tbl_ticket_attachments";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ticket_attachments";
	$detailsParam["dCaptionTable"] = GetTableCaption("ticket_attachments");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pengajuan_ticket_hdr"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pengajuan_ticket_hdr"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pengajuan_ticket_hdr"][$dIndex]["masterKeys"][]="req_id";

				$detailsTablesData["pengajuan_ticket_hdr"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pengajuan_ticket_hdr"][$dIndex]["detailKeys"][]="req_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pengajuan_ticket_hdr"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pengajuan_ticket_hdr()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "req_id,  	nik_pemesan,  	nama_pemesan,  	posisi_pemesan,  	sbu_pemesan,  	no_telp_pemesan,  	email_pemesan,  	atasan_langsung,  	jenis_pengajuan,  	alasan,  	beban_sbu,  	status,  	ket_admin,  	created_at,  	create_by,  	updated_at,  	update_by";
$proto0["m_strFrom"] = "FROM tbl_pengajuan_ticket_hdr";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY 	created_at DESC";
	
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
	"m_strName" => "req_id",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto6["m_sql"] = "req_id";
$proto6["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nik_pemesan",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto8["m_sql"] = "nik_pemesan";
$proto8["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nama_pemesan",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto10["m_sql"] = "nama_pemesan";
$proto10["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "posisi_pemesan",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto12["m_sql"] = "posisi_pemesan";
$proto12["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sbu_pemesan",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto14["m_sql"] = "sbu_pemesan";
$proto14["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "no_telp_pemesan",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto16["m_sql"] = "no_telp_pemesan";
$proto16["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email_pemesan",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto18["m_sql"] = "email_pemesan";
$proto18["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "atasan_langsung",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto20["m_sql"] = "atasan_langsung";
$proto20["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "jenis_pengajuan",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto22["m_sql"] = "jenis_pengajuan";
$proto22["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "alasan",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto24["m_sql"] = "alasan";
$proto24["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "beban_sbu",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto26["m_sql"] = "beban_sbu";
$proto26["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto28["m_sql"] = "status";
$proto28["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ket_admin",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto30["m_sql"] = "ket_admin";
$proto30["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto32["m_sql"] = "created_at";
$proto32["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto34["m_sql"] = "create_by";
$proto34["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto36["m_sql"] = "updated_at";
$proto36["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto38["m_sql"] = "update_by";
$proto38["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "tbl_pengajuan_ticket_hdr";
$proto41["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "req_id";
$proto41["m_columns"][] = "nik_pemesan";
$proto41["m_columns"][] = "nama_pemesan";
$proto41["m_columns"][] = "posisi_pemesan";
$proto41["m_columns"][] = "sbu_pemesan";
$proto41["m_columns"][] = "no_telp_pemesan";
$proto41["m_columns"][] = "email_pemesan";
$proto41["m_columns"][] = "atasan_langsung";
$proto41["m_columns"][] = "jenis_pengajuan";
$proto41["m_columns"][] = "alasan";
$proto41["m_columns"][] = "beban_sbu";
$proto41["m_columns"][] = "status";
$proto41["m_columns"][] = "ket_admin";
$proto41["m_columns"][] = "created_at";
$proto41["m_columns"][] = "create_by";
$proto41["m_columns"][] = "updated_at";
$proto41["m_columns"][] = "update_by";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "tbl_pengajuan_ticket_hdr";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "pengajuan_ticket_hdr";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "tbl_pengajuan_ticket_hdr",
	"m_srcTableName" => "pengajuan_ticket_hdr"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="pengajuan_ticket_hdr";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pengajuan_ticket_hdr = createSqlQuery_pengajuan_ticket_hdr();


	
		;

																	

$tdatapengajuan_ticket_hdr[".sqlquery"] = $queryData_pengajuan_ticket_hdr;



include_once(getabspath("include/pengajuan_ticket_hdr_events.php"));
$tdatapengajuan_ticket_hdr[".hasEvents"] = true;

?>