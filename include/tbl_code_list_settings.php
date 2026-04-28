<?php
$tdatatbl_code_list = array();
$tdatatbl_code_list[".searchableFields"] = array();
$tdatatbl_code_list[".ShortName"] = "tbl_code_list";
$tdatatbl_code_list[".OwnerID"] = "";
$tdatatbl_code_list[".OriginalTable"] = "tbl_code_list";


$tdatatbl_code_list[".pagesByType"] = my_json_decode( "{}" );
$tdatatbl_code_list[".originalPagesByType"] = $tdatatbl_code_list[".pagesByType"];
$tdatatbl_code_list[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatbl_code_list[".originalPages"] = $tdatatbl_code_list[".pages"];
$tdatatbl_code_list[".defaultPages"] = my_json_decode( "{}" );
$tdatatbl_code_list[".originalDefaultPages"] = $tdatatbl_code_list[".defaultPages"];

//	field labels
$fieldLabelstbl_code_list = array();
$fieldToolTipstbl_code_list = array();
$pageTitlestbl_code_list = array();
$placeHolderstbl_code_list = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_code_list["English"] = array();
	$fieldToolTipstbl_code_list["English"] = array();
	$placeHolderstbl_code_list["English"] = array();
	$pageTitlestbl_code_list["English"] = array();
	$fieldLabelstbl_code_list["English"]["CatID"] = "Cat ID";
	$fieldToolTipstbl_code_list["English"]["CatID"] = "";
	$placeHolderstbl_code_list["English"]["CatID"] = "";
	$fieldLabelstbl_code_list["English"]["Code"] = "Code";
	$fieldToolTipstbl_code_list["English"]["Code"] = "";
	$placeHolderstbl_code_list["English"]["Code"] = "";
	$fieldLabelstbl_code_list["English"]["Description"] = "Description";
	$fieldToolTipstbl_code_list["English"]["Description"] = "";
	$placeHolderstbl_code_list["English"]["Description"] = "";
	$fieldLabelstbl_code_list["English"]["Description2"] = "Description2";
	$fieldToolTipstbl_code_list["English"]["Description2"] = "";
	$placeHolderstbl_code_list["English"]["Description2"] = "";
	$fieldLabelstbl_code_list["English"]["AssRec"] = "Ass Rec";
	$fieldToolTipstbl_code_list["English"]["AssRec"] = "";
	$placeHolderstbl_code_list["English"]["AssRec"] = "";
	$fieldLabelstbl_code_list["English"]["OrderNo"] = "Order No";
	$fieldToolTipstbl_code_list["English"]["OrderNo"] = "";
	$placeHolderstbl_code_list["English"]["OrderNo"] = "";
	$fieldLabelstbl_code_list["English"]["Active"] = "Active";
	$fieldToolTipstbl_code_list["English"]["Active"] = "";
	$placeHolderstbl_code_list["English"]["Active"] = "";
	$fieldLabelstbl_code_list["English"]["Rate"] = "Rate";
	$fieldToolTipstbl_code_list["English"]["Rate"] = "";
	$placeHolderstbl_code_list["English"]["Rate"] = "";
	$fieldLabelstbl_code_list["English"]["CreateBy"] = "Create By";
	$fieldToolTipstbl_code_list["English"]["CreateBy"] = "";
	$placeHolderstbl_code_list["English"]["CreateBy"] = "";
	$fieldLabelstbl_code_list["English"]["CreateDate"] = "Create Date";
	$fieldToolTipstbl_code_list["English"]["CreateDate"] = "";
	$placeHolderstbl_code_list["English"]["CreateDate"] = "";
	$fieldLabelstbl_code_list["English"]["UpdateBy"] = "Update By";
	$fieldToolTipstbl_code_list["English"]["UpdateBy"] = "";
	$placeHolderstbl_code_list["English"]["UpdateBy"] = "";
	$fieldLabelstbl_code_list["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipstbl_code_list["English"]["UpdateDate"] = "";
	$placeHolderstbl_code_list["English"]["UpdateDate"] = "";
	if (count($fieldToolTipstbl_code_list["English"]))
		$tdatatbl_code_list[".isUseToolTips"] = true;
}


	$tdatatbl_code_list[".NCSearch"] = true;



$tdatatbl_code_list[".shortTableName"] = "tbl_code_list";
$tdatatbl_code_list[".nSecOptions"] = 0;

$tdatatbl_code_list[".mainTableOwnerID"] = "";
$tdatatbl_code_list[".entityType"] = 0;
$tdatatbl_code_list[".connId"] = "sumsel_ticketing_at_localhost";


$tdatatbl_code_list[".strOriginalTableName"] = "tbl_code_list";

	



$tdatatbl_code_list[".showAddInPopup"] = false;

$tdatatbl_code_list[".showEditInPopup"] = false;

$tdatatbl_code_list[".showViewInPopup"] = false;

$tdatatbl_code_list[".listAjax"] = false;
//	temporary
//$tdatatbl_code_list[".listAjax"] = false;

	$tdatatbl_code_list[".audit"] = false;

	$tdatatbl_code_list[".locking"] = false;


$pages = $tdatatbl_code_list[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatbl_code_list[".edit"] = true;
	$tdatatbl_code_list[".afterEditAction"] = 1;
	$tdatatbl_code_list[".closePopupAfterEdit"] = 1;
	$tdatatbl_code_list[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatbl_code_list[".add"] = true;
$tdatatbl_code_list[".afterAddAction"] = 1;
$tdatatbl_code_list[".closePopupAfterAdd"] = 1;
$tdatatbl_code_list[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatbl_code_list[".list"] = true;
}



$tdatatbl_code_list[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatbl_code_list[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatbl_code_list[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatbl_code_list[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatbl_code_list[".printFriendly"] = true;
}



$tdatatbl_code_list[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatbl_code_list[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatbl_code_list[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatbl_code_list[".isUseAjaxSuggest"] = true;



												

$tdatatbl_code_list[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_code_list[".buttonsAdded"] = false;

$tdatatbl_code_list[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_code_list[".isUseTimeForSearch"] = false;


$tdatatbl_code_list[".badgeColor"] = "EDCA00";


$tdatatbl_code_list[".allSearchFields"] = array();
$tdatatbl_code_list[".filterFields"] = array();
$tdatatbl_code_list[".requiredSearchFields"] = array();

$tdatatbl_code_list[".googleLikeFields"] = array();
$tdatatbl_code_list[".googleLikeFields"][] = "CatID";
$tdatatbl_code_list[".googleLikeFields"][] = "Code";
$tdatatbl_code_list[".googleLikeFields"][] = "Description";
$tdatatbl_code_list[".googleLikeFields"][] = "Description2";
$tdatatbl_code_list[".googleLikeFields"][] = "AssRec";
$tdatatbl_code_list[".googleLikeFields"][] = "OrderNo";
$tdatatbl_code_list[".googleLikeFields"][] = "Active";
$tdatatbl_code_list[".googleLikeFields"][] = "Rate";
$tdatatbl_code_list[".googleLikeFields"][] = "CreateBy";
$tdatatbl_code_list[".googleLikeFields"][] = "CreateDate";
$tdatatbl_code_list[".googleLikeFields"][] = "UpdateBy";
$tdatatbl_code_list[".googleLikeFields"][] = "UpdateDate";



$tdatatbl_code_list[".tableType"] = "list";

$tdatatbl_code_list[".printerPageOrientation"] = 0;
$tdatatbl_code_list[".nPrinterPageScale"] = 100;

$tdatatbl_code_list[".nPrinterSplitRecords"] = 40;

$tdatatbl_code_list[".geocodingEnabled"] = false;










$tdatatbl_code_list[".pageSize"] = 20;

$tdatatbl_code_list[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatbl_code_list[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_code_list[".orderindexes"] = array();


$tdatatbl_code_list[".sqlHead"] = "SELECT CatID,  	Code,  	Description,  	Description2,  	AssRec,  	OrderNo,  	Active,  	Rate,  	CreateBy,  	CreateDate,  	UpdateBy,  	UpdateDate";
$tdatatbl_code_list[".sqlFrom"] = "FROM tbl_code_list";
$tdatatbl_code_list[".sqlWhereExpr"] = "";
$tdatatbl_code_list[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_code_list[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_code_list[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_code_list[".highlightSearchResults"] = true;

$tableKeystbl_code_list = array();
$tableKeystbl_code_list[] = "CatID";
$tableKeystbl_code_list[] = "Code";
$tableKeystbl_code_list[] = "Description";
$tableKeystbl_code_list[] = "Description2";
$tableKeystbl_code_list[] = "AssRec";
$tdatatbl_code_list[".Keys"] = $tableKeystbl_code_list;


$tdatatbl_code_list[".hideMobileList"] = array();




//	CatID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CatID";
	$fdata["GoodName"] = "CatID";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","CatID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CatID";

		$fdata["sourceSingle"] = "CatID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CatID";

	
	
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


	$tdatatbl_code_list["CatID"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "CatID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","Code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Code";

		$fdata["sourceSingle"] = "Code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Code";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatatbl_code_list["Code"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "Code";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","Description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Description";

		$fdata["sourceSingle"] = "Description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
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


	$tdatatbl_code_list["Description"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "Description";
//	Description2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description2";
	$fdata["GoodName"] = "Description2";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","Description2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Description2";

		$fdata["sourceSingle"] = "Description2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description2";

	
	
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


	$tdatatbl_code_list["Description2"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "Description2";
//	AssRec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AssRec";
	$fdata["GoodName"] = "AssRec";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","AssRec");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AssRec";

		$fdata["sourceSingle"] = "AssRec";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AssRec";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatbl_code_list["AssRec"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "AssRec";
//	OrderNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OrderNo";
	$fdata["GoodName"] = "OrderNo";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","OrderNo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "OrderNo";

		$fdata["sourceSingle"] = "OrderNo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OrderNo";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatbl_code_list["OrderNo"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "OrderNo";
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","Active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Active";

		$fdata["sourceSingle"] = "Active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Active";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatbl_code_list["Active"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "Active";
//	Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Rate";
	$fdata["GoodName"] = "Rate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","Rate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Rate";

		$fdata["sourceSingle"] = "Rate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatatbl_code_list["Rate"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "Rate";
//	CreateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CreateBy";
	$fdata["GoodName"] = "CreateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","CreateBy");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreateBy";

		$fdata["sourceSingle"] = "CreateBy";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreateBy";

	
	
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


	$tdatatbl_code_list["CreateBy"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "CreateBy";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","CreateDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CreateDate";

		$fdata["sourceSingle"] = "CreateDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreateDate";

	
	
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


	$tdatatbl_code_list["CreateDate"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "CreateDate";
//	UpdateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UpdateBy";
	$fdata["GoodName"] = "UpdateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","UpdateBy");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdateBy";

		$fdata["sourceSingle"] = "UpdateBy";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdateBy";

	
	
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


	$tdatatbl_code_list["UpdateBy"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "UpdateBy";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("tbl_code_list","UpdateDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "UpdateDate";

		$fdata["sourceSingle"] = "UpdateDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdateDate";

	
	
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


	$tdatatbl_code_list["UpdateDate"] = $fdata;
		$tdatatbl_code_list[".searchableFields"][] = "UpdateDate";


$tables_data["tbl_code_list"]=&$tdatatbl_code_list;
$field_labels["tbl_code_list"] = &$fieldLabelstbl_code_list;
$fieldToolTips["tbl_code_list"] = &$fieldToolTipstbl_code_list;
$placeHolders["tbl_code_list"] = &$placeHolderstbl_code_list;
$page_titles["tbl_code_list"] = &$pageTitlestbl_code_list;


changeTextControlsToDate( "tbl_code_list" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tbl_code_list"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tbl_code_list"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tbl_code_list()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CatID,  	Code,  	Description,  	Description2,  	AssRec,  	OrderNo,  	Active,  	Rate,  	CreateBy,  	CreateDate,  	UpdateBy,  	UpdateDate";
$proto0["m_strFrom"] = "FROM tbl_code_list";
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
	"m_strName" => "CatID",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto6["m_sql"] = "CatID";
$proto6["m_srcTableName"] = "tbl_code_list";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "tbl_code_list";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "tbl_code_list";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description2",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto12["m_sql"] = "Description2";
$proto12["m_srcTableName"] = "tbl_code_list";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AssRec",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto14["m_sql"] = "AssRec";
$proto14["m_srcTableName"] = "tbl_code_list";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderNo",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto16["m_sql"] = "OrderNo";
$proto16["m_srcTableName"] = "tbl_code_list";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Active",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto18["m_sql"] = "Active";
$proto18["m_srcTableName"] = "tbl_code_list";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Rate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto20["m_sql"] = "Rate";
$proto20["m_srcTableName"] = "tbl_code_list";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto22["m_sql"] = "CreateBy";
$proto22["m_srcTableName"] = "tbl_code_list";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto24["m_sql"] = "CreateDate";
$proto24["m_srcTableName"] = "tbl_code_list";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto26["m_sql"] = "UpdateBy";
$proto26["m_srcTableName"] = "tbl_code_list";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "tbl_code_list"
));

$proto28["m_sql"] = "UpdateDate";
$proto28["m_srcTableName"] = "tbl_code_list";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tbl_code_list";
$proto31["m_srcTableName"] = "tbl_code_list";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "CatID";
$proto31["m_columns"][] = "Code";
$proto31["m_columns"][] = "Description";
$proto31["m_columns"][] = "Description2";
$proto31["m_columns"][] = "AssRec";
$proto31["m_columns"][] = "OrderNo";
$proto31["m_columns"][] = "Active";
$proto31["m_columns"][] = "Rate";
$proto31["m_columns"][] = "CreateBy";
$proto31["m_columns"][] = "CreateDate";
$proto31["m_columns"][] = "UpdateBy";
$proto31["m_columns"][] = "UpdateDate";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "tbl_code_list";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "tbl_code_list";
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
$proto0["m_srcTableName"]="tbl_code_list";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_code_list = createSqlQuery_tbl_code_list();


	
		;

												

$tdatatbl_code_list[".sqlquery"] = $queryData_tbl_code_list;



$tdatatbl_code_list[".hasEvents"] = false;

?>