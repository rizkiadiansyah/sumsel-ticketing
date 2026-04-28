<?php
$tdatalist_data_penumpang = array();
$tdatalist_data_penumpang[".searchableFields"] = array();
$tdatalist_data_penumpang[".ShortName"] = "list_data_penumpang";
$tdatalist_data_penumpang[".OwnerID"] = "";
$tdatalist_data_penumpang[".OriginalTable"] = "tbl_data_penumpang";


$tdatalist_data_penumpang[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatalist_data_penumpang[".originalPagesByType"] = $tdatalist_data_penumpang[".pagesByType"];
$tdatalist_data_penumpang[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatalist_data_penumpang[".originalPages"] = $tdatalist_data_penumpang[".pages"];
$tdatalist_data_penumpang[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatalist_data_penumpang[".originalDefaultPages"] = $tdatalist_data_penumpang[".defaultPages"];

//	field labels
$fieldLabelslist_data_penumpang = array();
$fieldToolTipslist_data_penumpang = array();
$pageTitleslist_data_penumpang = array();
$placeHolderslist_data_penumpang = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslist_data_penumpang["English"] = array();
	$fieldToolTipslist_data_penumpang["English"] = array();
	$placeHolderslist_data_penumpang["English"] = array();
	$pageTitleslist_data_penumpang["English"] = array();
	$fieldLabelslist_data_penumpang["English"]["active"] = "Active";
	$fieldToolTipslist_data_penumpang["English"]["active"] = "";
	$placeHolderslist_data_penumpang["English"]["active"] = "";
	$fieldLabelslist_data_penumpang["English"]["create_at"] = "Create At";
	$fieldToolTipslist_data_penumpang["English"]["create_at"] = "";
	$placeHolderslist_data_penumpang["English"]["create_at"] = "";
	$fieldLabelslist_data_penumpang["English"]["gender"] = "Gender";
	$fieldToolTipslist_data_penumpang["English"]["gender"] = "";
	$placeHolderslist_data_penumpang["English"]["gender"] = "";
	$fieldLabelslist_data_penumpang["English"]["nama"] = "Nama";
	$fieldToolTipslist_data_penumpang["English"]["nama"] = "";
	$placeHolderslist_data_penumpang["English"]["nama"] = "";
	$fieldLabelslist_data_penumpang["English"]["nik"] = "NIK";
	$fieldToolTipslist_data_penumpang["English"]["nik"] = "";
	$placeHolderslist_data_penumpang["English"]["nik"] = "";
	$fieldLabelslist_data_penumpang["English"]["nik_ktp"] = "NIK KTP";
	$fieldToolTipslist_data_penumpang["English"]["nik_ktp"] = "";
	$placeHolderslist_data_penumpang["English"]["nik_ktp"] = "";
	$fieldLabelslist_data_penumpang["English"]["no_telp"] = "No Telp";
	$fieldToolTipslist_data_penumpang["English"]["no_telp"] = "";
	$placeHolderslist_data_penumpang["English"]["no_telp"] = "";
	$fieldLabelslist_data_penumpang["English"]["posisi_jabatan"] = "Posisi Jabatan";
	$fieldToolTipslist_data_penumpang["English"]["posisi_jabatan"] = "";
	$placeHolderslist_data_penumpang["English"]["posisi_jabatan"] = "";
	$fieldLabelslist_data_penumpang["English"]["sbu"] = "SBU";
	$fieldToolTipslist_data_penumpang["English"]["sbu"] = "";
	$placeHolderslist_data_penumpang["English"]["sbu"] = "";
	$fieldLabelslist_data_penumpang["English"]["update_at"] = "Update At";
	$fieldToolTipslist_data_penumpang["English"]["update_at"] = "";
	$placeHolderslist_data_penumpang["English"]["update_at"] = "";
	$fieldLabelslist_data_penumpang["English"]["vip"] = "Vip";
	$fieldToolTipslist_data_penumpang["English"]["vip"] = "";
	$placeHolderslist_data_penumpang["English"]["vip"] = "";
	$fieldLabelslist_data_penumpang["English"]["gff"] = "Gff";
	$fieldToolTipslist_data_penumpang["English"]["gff"] = "";
	$placeHolderslist_data_penumpang["English"]["gff"] = "";
	if (count($fieldToolTipslist_data_penumpang["English"]))
		$tdatalist_data_penumpang[".isUseToolTips"] = true;
}


	$tdatalist_data_penumpang[".NCSearch"] = true;



$tdatalist_data_penumpang[".shortTableName"] = "list_data_penumpang";
$tdatalist_data_penumpang[".nSecOptions"] = 0;

$tdatalist_data_penumpang[".mainTableOwnerID"] = "";
$tdatalist_data_penumpang[".entityType"] = 1;
$tdatalist_data_penumpang[".connId"] = "sumsel_ticketing_at_localhost";


$tdatalist_data_penumpang[".strOriginalTableName"] = "tbl_data_penumpang";

	



$tdatalist_data_penumpang[".showAddInPopup"] = false;

$tdatalist_data_penumpang[".showEditInPopup"] = false;

$tdatalist_data_penumpang[".showViewInPopup"] = false;

$tdatalist_data_penumpang[".listAjax"] = false;
//	temporary
//$tdatalist_data_penumpang[".listAjax"] = false;

	$tdatalist_data_penumpang[".audit"] = false;

	$tdatalist_data_penumpang[".locking"] = false;


$pages = $tdatalist_data_penumpang[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalist_data_penumpang[".edit"] = true;
	$tdatalist_data_penumpang[".afterEditAction"] = 1;
	$tdatalist_data_penumpang[".closePopupAfterEdit"] = 1;
	$tdatalist_data_penumpang[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalist_data_penumpang[".add"] = true;
$tdatalist_data_penumpang[".afterAddAction"] = 1;
$tdatalist_data_penumpang[".closePopupAfterAdd"] = 1;
$tdatalist_data_penumpang[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalist_data_penumpang[".list"] = true;
}



$tdatalist_data_penumpang[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalist_data_penumpang[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalist_data_penumpang[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalist_data_penumpang[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalist_data_penumpang[".printFriendly"] = true;
}



$tdatalist_data_penumpang[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalist_data_penumpang[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalist_data_penumpang[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalist_data_penumpang[".isUseAjaxSuggest"] = true;



												

$tdatalist_data_penumpang[".ajaxCodeSnippetAdded"] = false;

$tdatalist_data_penumpang[".buttonsAdded"] = false;

$tdatalist_data_penumpang[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalist_data_penumpang[".isUseTimeForSearch"] = false;


$tdatalist_data_penumpang[".badgeColor"] = "4169E1";


$tdatalist_data_penumpang[".allSearchFields"] = array();
$tdatalist_data_penumpang[".filterFields"] = array();
$tdatalist_data_penumpang[".requiredSearchFields"] = array();

$tdatalist_data_penumpang[".googleLikeFields"] = array();
$tdatalist_data_penumpang[".googleLikeFields"][] = "nik";
$tdatalist_data_penumpang[".googleLikeFields"][] = "nik_ktp";
$tdatalist_data_penumpang[".googleLikeFields"][] = "nama";
$tdatalist_data_penumpang[".googleLikeFields"][] = "posisi_jabatan";
$tdatalist_data_penumpang[".googleLikeFields"][] = "sbu";
$tdatalist_data_penumpang[".googleLikeFields"][] = "no_telp";
$tdatalist_data_penumpang[".googleLikeFields"][] = "gender";
$tdatalist_data_penumpang[".googleLikeFields"][] = "vip";
$tdatalist_data_penumpang[".googleLikeFields"][] = "active";
$tdatalist_data_penumpang[".googleLikeFields"][] = "create_at";
$tdatalist_data_penumpang[".googleLikeFields"][] = "update_at";
$tdatalist_data_penumpang[".googleLikeFields"][] = "gff";



$tdatalist_data_penumpang[".tableType"] = "list";

$tdatalist_data_penumpang[".printerPageOrientation"] = 0;
$tdatalist_data_penumpang[".nPrinterPageScale"] = 100;

$tdatalist_data_penumpang[".nPrinterSplitRecords"] = 40;

$tdatalist_data_penumpang[".geocodingEnabled"] = false;










$tdatalist_data_penumpang[".pageSize"] = 20;

$tdatalist_data_penumpang[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalist_data_penumpang[".strOrderBy"] = $tstrOrderBy;

$tdatalist_data_penumpang[".orderindexes"] = array();


$tdatalist_data_penumpang[".sqlHead"] = "SELECT nik,  nik_ktp,  nama,  posisi_jabatan,  sbu,  no_telp,  gender,  vip,  active,  create_at,  update_at,  gff";
$tdatalist_data_penumpang[".sqlFrom"] = "FROM tbl_data_penumpang";
$tdatalist_data_penumpang[".sqlWhereExpr"] = "";
$tdatalist_data_penumpang[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalist_data_penumpang[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalist_data_penumpang[".arrGroupsPerPage"] = $arrGPP;

$tdatalist_data_penumpang[".highlightSearchResults"] = true;

$tableKeyslist_data_penumpang = array();
$tableKeyslist_data_penumpang[] = "nik";
$tdatalist_data_penumpang[".Keys"] = $tableKeyslist_data_penumpang;


$tdatalist_data_penumpang[".hideMobileList"] = array();




//	nik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nik";
	$fdata["GoodName"] = "nik";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","nik");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nik";

		$fdata["sourceSingle"] = "nik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nik";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatalist_data_penumpang["nik"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "nik";
//	nik_ktp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nik_ktp";
	$fdata["GoodName"] = "nik_ktp";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","nik_ktp");
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
			$edata["EditParams"].= " maxlength=16";

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


	$tdatalist_data_penumpang["nik_ktp"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "nik_ktp";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama";

		$fdata["sourceSingle"] = "nama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama";

	
	
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


	$tdatalist_data_penumpang["nama"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "nama";
//	posisi_jabatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "posisi_jabatan";
	$fdata["GoodName"] = "posisi_jabatan";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","posisi_jabatan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "posisi_jabatan";

		$fdata["sourceSingle"] = "posisi_jabatan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "posisi_jabatan";

	
	
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


	$tdatalist_data_penumpang["posisi_jabatan"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "posisi_jabatan";
//	sbu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sbu";
	$fdata["GoodName"] = "sbu";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","sbu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sbu";

		$fdata["sourceSingle"] = "sbu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sbu";

	
	
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
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "Description";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(Code,' -  ',Description)";

				$edata["LookupWhere"] = "CatID = 'SBU' AND Active = '1'";


		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatalist_data_penumpang["sbu"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "sbu";
//	no_telp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "no_telp";
	$fdata["GoodName"] = "no_telp";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","no_telp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "no_telp";

		$fdata["sourceSingle"] = "no_telp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "no_telp";

	
	
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


	$tdatalist_data_penumpang["no_telp"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "no_telp";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","gender");
	$fdata["FieldType"] = 129;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "L";
	$edata["LookupValues"][] = "P";

	
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


	$tdatalist_data_penumpang["gender"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "gender";
//	vip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "vip";
	$fdata["GoodName"] = "vip";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","vip");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "vip";

		$fdata["sourceSingle"] = "vip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vip";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatalist_data_penumpang["vip"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "vip";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatalist_data_penumpang["active"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "active";
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","create_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "create_at";

		$fdata["sourceSingle"] = "create_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
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


	$tdatalist_data_penumpang["create_at"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "create_at";
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","update_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "update_at";

		$fdata["sourceSingle"] = "update_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
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


	$tdatalist_data_penumpang["update_at"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "update_at";
//	gff
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "gff";
	$fdata["GoodName"] = "gff";
	$fdata["ownerTable"] = "tbl_data_penumpang";
	$fdata["Label"] = GetFieldLabel("list_data_penumpang","gff");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "gff";

		$fdata["sourceSingle"] = "gff";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gff";

	
	
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


	$tdatalist_data_penumpang["gff"] = $fdata;
		$tdatalist_data_penumpang[".searchableFields"][] = "gff";


$tables_data["list_data_penumpang"]=&$tdatalist_data_penumpang;
$field_labels["list_data_penumpang"] = &$fieldLabelslist_data_penumpang;
$fieldToolTips["list_data_penumpang"] = &$fieldToolTipslist_data_penumpang;
$placeHolders["list_data_penumpang"] = &$placeHolderslist_data_penumpang;
$page_titles["list_data_penumpang"] = &$pageTitleslist_data_penumpang;


changeTextControlsToDate( "list_data_penumpang" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["list_data_penumpang"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["list_data_penumpang"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_list_data_penumpang()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nik,  nik_ktp,  nama,  posisi_jabatan,  sbu,  no_telp,  gender,  vip,  active,  create_at,  update_at,  gff";
$proto0["m_strFrom"] = "FROM tbl_data_penumpang";
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
	"m_strName" => "nik",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto6["m_sql"] = "nik";
$proto6["m_srcTableName"] = "list_data_penumpang";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nik_ktp",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto8["m_sql"] = "nik_ktp";
$proto8["m_srcTableName"] = "list_data_penumpang";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto10["m_sql"] = "nama";
$proto10["m_srcTableName"] = "list_data_penumpang";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "posisi_jabatan",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto12["m_sql"] = "posisi_jabatan";
$proto12["m_srcTableName"] = "list_data_penumpang";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sbu",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto14["m_sql"] = "sbu";
$proto14["m_srcTableName"] = "list_data_penumpang";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "no_telp",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto16["m_sql"] = "no_telp";
$proto16["m_srcTableName"] = "list_data_penumpang";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto18["m_sql"] = "gender";
$proto18["m_srcTableName"] = "list_data_penumpang";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "vip",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto20["m_sql"] = "vip";
$proto20["m_srcTableName"] = "list_data_penumpang";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto22["m_sql"] = "active";
$proto22["m_srcTableName"] = "list_data_penumpang";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto24["m_sql"] = "create_at";
$proto24["m_srcTableName"] = "list_data_penumpang";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto26["m_sql"] = "update_at";
$proto26["m_srcTableName"] = "list_data_penumpang";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "gff",
	"m_strTable" => "tbl_data_penumpang",
	"m_srcTableName" => "list_data_penumpang"
));

$proto28["m_sql"] = "gff";
$proto28["m_srcTableName"] = "list_data_penumpang";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tbl_data_penumpang";
$proto31["m_srcTableName"] = "list_data_penumpang";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "nik";
$proto31["m_columns"][] = "nik_ktp";
$proto31["m_columns"][] = "nama";
$proto31["m_columns"][] = "posisi_jabatan";
$proto31["m_columns"][] = "sbu";
$proto31["m_columns"][] = "no_telp";
$proto31["m_columns"][] = "gender";
$proto31["m_columns"][] = "vip";
$proto31["m_columns"][] = "gff";
$proto31["m_columns"][] = "active";
$proto31["m_columns"][] = "create_at";
$proto31["m_columns"][] = "update_at";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "tbl_data_penumpang";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "list_data_penumpang";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="list_data_penumpang";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_list_data_penumpang = createSqlQuery_list_data_penumpang();


	
		;

												

$tdatalist_data_penumpang[".sqlquery"] = $queryData_list_data_penumpang;



include_once(getabspath("include/list_data_penumpang_events.php"));
$tdatalist_data_penumpang[".hasEvents"] = true;

?>