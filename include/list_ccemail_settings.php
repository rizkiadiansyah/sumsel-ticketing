<?php
$tdatalist_ccemail = array();
$tdatalist_ccemail[".searchableFields"] = array();
$tdatalist_ccemail[".ShortName"] = "list_ccemail";
$tdatalist_ccemail[".OwnerID"] = "";
$tdatalist_ccemail[".OriginalTable"] = "tbl_code_list";


$tdatalist_ccemail[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatalist_ccemail[".originalPagesByType"] = $tdatalist_ccemail[".pagesByType"];
$tdatalist_ccemail[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatalist_ccemail[".originalPages"] = $tdatalist_ccemail[".pages"];
$tdatalist_ccemail[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatalist_ccemail[".originalDefaultPages"] = $tdatalist_ccemail[".defaultPages"];

//	field labels
$fieldLabelslist_ccemail = array();
$fieldToolTipslist_ccemail = array();
$pageTitleslist_ccemail = array();
$placeHolderslist_ccemail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslist_ccemail["English"] = array();
	$fieldToolTipslist_ccemail["English"] = array();
	$placeHolderslist_ccemail["English"] = array();
	$pageTitleslist_ccemail["English"] = array();
	$fieldLabelslist_ccemail["English"]["CatID"] = "Cat ID";
	$fieldToolTipslist_ccemail["English"]["CatID"] = "";
	$placeHolderslist_ccemail["English"]["CatID"] = "";
	$fieldLabelslist_ccemail["English"]["Code"] = "Code";
	$fieldToolTipslist_ccemail["English"]["Code"] = "";
	$placeHolderslist_ccemail["English"]["Code"] = "";
	$fieldLabelslist_ccemail["English"]["Description"] = "Description";
	$fieldToolTipslist_ccemail["English"]["Description"] = "";
	$placeHolderslist_ccemail["English"]["Description"] = "";
	$fieldLabelslist_ccemail["English"]["Description2"] = "Description2";
	$fieldToolTipslist_ccemail["English"]["Description2"] = "";
	$placeHolderslist_ccemail["English"]["Description2"] = "";
	$fieldLabelslist_ccemail["English"]["AssRec"] = "Ass Rec";
	$fieldToolTipslist_ccemail["English"]["AssRec"] = "";
	$placeHolderslist_ccemail["English"]["AssRec"] = "";
	$fieldLabelslist_ccemail["English"]["OrderNo"] = "Order No";
	$fieldToolTipslist_ccemail["English"]["OrderNo"] = "";
	$placeHolderslist_ccemail["English"]["OrderNo"] = "";
	$fieldLabelslist_ccemail["English"]["Active"] = "Active";
	$fieldToolTipslist_ccemail["English"]["Active"] = "";
	$placeHolderslist_ccemail["English"]["Active"] = "";
	$fieldLabelslist_ccemail["English"]["Rate"] = "Rate";
	$fieldToolTipslist_ccemail["English"]["Rate"] = "";
	$placeHolderslist_ccemail["English"]["Rate"] = "";
	$fieldLabelslist_ccemail["English"]["CreateBy"] = "Create By";
	$fieldToolTipslist_ccemail["English"]["CreateBy"] = "";
	$placeHolderslist_ccemail["English"]["CreateBy"] = "";
	$fieldLabelslist_ccemail["English"]["CreateDate"] = "Create Date";
	$fieldToolTipslist_ccemail["English"]["CreateDate"] = "";
	$placeHolderslist_ccemail["English"]["CreateDate"] = "";
	$fieldLabelslist_ccemail["English"]["UpdateBy"] = "Update By";
	$fieldToolTipslist_ccemail["English"]["UpdateBy"] = "";
	$placeHolderslist_ccemail["English"]["UpdateBy"] = "";
	$fieldLabelslist_ccemail["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipslist_ccemail["English"]["UpdateDate"] = "";
	$placeHolderslist_ccemail["English"]["UpdateDate"] = "";
	if (count($fieldToolTipslist_ccemail["English"]))
		$tdatalist_ccemail[".isUseToolTips"] = true;
}


	$tdatalist_ccemail[".NCSearch"] = true;



$tdatalist_ccemail[".shortTableName"] = "list_ccemail";
$tdatalist_ccemail[".nSecOptions"] = 0;

$tdatalist_ccemail[".mainTableOwnerID"] = "";
$tdatalist_ccemail[".entityType"] = 1;
$tdatalist_ccemail[".connId"] = "sumsel_ticketing_at_localhost";


$tdatalist_ccemail[".strOriginalTableName"] = "tbl_code_list";

	



$tdatalist_ccemail[".showAddInPopup"] = false;

$tdatalist_ccemail[".showEditInPopup"] = false;

$tdatalist_ccemail[".showViewInPopup"] = false;

$tdatalist_ccemail[".listAjax"] = false;
//	temporary
//$tdatalist_ccemail[".listAjax"] = false;

	$tdatalist_ccemail[".audit"] = false;

	$tdatalist_ccemail[".locking"] = false;


$pages = $tdatalist_ccemail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalist_ccemail[".edit"] = true;
	$tdatalist_ccemail[".afterEditAction"] = 1;
	$tdatalist_ccemail[".closePopupAfterEdit"] = 1;
	$tdatalist_ccemail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalist_ccemail[".add"] = true;
$tdatalist_ccemail[".afterAddAction"] = 1;
$tdatalist_ccemail[".closePopupAfterAdd"] = 1;
$tdatalist_ccemail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalist_ccemail[".list"] = true;
}



$tdatalist_ccemail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalist_ccemail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalist_ccemail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalist_ccemail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalist_ccemail[".printFriendly"] = true;
}



$tdatalist_ccemail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalist_ccemail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalist_ccemail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalist_ccemail[".isUseAjaxSuggest"] = true;



												

$tdatalist_ccemail[".ajaxCodeSnippetAdded"] = false;

$tdatalist_ccemail[".buttonsAdded"] = false;

$tdatalist_ccemail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalist_ccemail[".isUseTimeForSearch"] = false;


$tdatalist_ccemail[".badgeColor"] = "5F9EA0";


$tdatalist_ccemail[".allSearchFields"] = array();
$tdatalist_ccemail[".filterFields"] = array();
$tdatalist_ccemail[".requiredSearchFields"] = array();

$tdatalist_ccemail[".googleLikeFields"] = array();
$tdatalist_ccemail[".googleLikeFields"][] = "CatID";
$tdatalist_ccemail[".googleLikeFields"][] = "Code";
$tdatalist_ccemail[".googleLikeFields"][] = "Description";
$tdatalist_ccemail[".googleLikeFields"][] = "Description2";
$tdatalist_ccemail[".googleLikeFields"][] = "Active";
$tdatalist_ccemail[".googleLikeFields"][] = "OrderNo";
$tdatalist_ccemail[".googleLikeFields"][] = "AssRec";
$tdatalist_ccemail[".googleLikeFields"][] = "Rate";
$tdatalist_ccemail[".googleLikeFields"][] = "CreateBy";
$tdatalist_ccemail[".googleLikeFields"][] = "CreateDate";
$tdatalist_ccemail[".googleLikeFields"][] = "UpdateBy";
$tdatalist_ccemail[".googleLikeFields"][] = "UpdateDate";



$tdatalist_ccemail[".tableType"] = "list";

$tdatalist_ccemail[".printerPageOrientation"] = 0;
$tdatalist_ccemail[".nPrinterPageScale"] = 100;

$tdatalist_ccemail[".nPrinterSplitRecords"] = 40;

$tdatalist_ccemail[".geocodingEnabled"] = false;










$tdatalist_ccemail[".pageSize"] = 50;

$tdatalist_ccemail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalist_ccemail[".strOrderBy"] = $tstrOrderBy;

$tdatalist_ccemail[".orderindexes"] = array();


$tdatalist_ccemail[".sqlHead"] = "SELECT CatID,  Code,  Description,  Description2,  Active,  OrderNo,  AssRec,  Rate,  CreateBy,  CreateDate,  UpdateBy,  UpdateDate";
$tdatalist_ccemail[".sqlFrom"] = "FROM tbl_code_list";
$tdatalist_ccemail[".sqlWhereExpr"] = "(CatID = 'email_cc')";
$tdatalist_ccemail[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalist_ccemail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalist_ccemail[".arrGroupsPerPage"] = $arrGPP;

$tdatalist_ccemail[".highlightSearchResults"] = true;

$tableKeyslist_ccemail = array();
$tableKeyslist_ccemail[] = "CatID";
$tableKeyslist_ccemail[] = "Code";
$tableKeyslist_ccemail[] = "Description";
$tableKeyslist_ccemail[] = "Description2";
$tableKeyslist_ccemail[] = "AssRec";
$tdatalist_ccemail[".Keys"] = $tableKeyslist_ccemail;


$tdatalist_ccemail[".hideMobileList"] = array();




//	CatID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CatID";
	$fdata["GoodName"] = "CatID";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","CatID");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatalist_ccemail["CatID"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "CatID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","Code");
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


	$tdatalist_ccemail["Code"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "Code";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","Description");
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


	$tdatalist_ccemail["Description"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "Description";
//	Description2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description2";
	$fdata["GoodName"] = "Description2";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","Description2");
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


	$tdatalist_ccemail["Description2"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "Description2";
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","Active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Active";

		$fdata["sourceSingle"] = "Active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Active";

	
	
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


	$tdatalist_ccemail["Active"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "Active";
//	OrderNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OrderNo";
	$fdata["GoodName"] = "OrderNo";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","OrderNo");
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


	$tdatalist_ccemail["OrderNo"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "OrderNo";
//	AssRec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AssRec";
	$fdata["GoodName"] = "AssRec";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","AssRec");
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


	$tdatalist_ccemail["AssRec"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "AssRec";
//	Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Rate";
	$fdata["GoodName"] = "Rate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","Rate");
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


	$tdatalist_ccemail["Rate"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "Rate";
//	CreateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CreateBy";
	$fdata["GoodName"] = "CreateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","CreateBy");
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


	$tdatalist_ccemail["CreateBy"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "CreateBy";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","CreateDate");
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


	$tdatalist_ccemail["CreateDate"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "CreateDate";
//	UpdateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UpdateBy";
	$fdata["GoodName"] = "UpdateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","UpdateBy");
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


	$tdatalist_ccemail["UpdateBy"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "UpdateBy";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_ccemail","UpdateDate");
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


	$tdatalist_ccemail["UpdateDate"] = $fdata;
		$tdatalist_ccemail[".searchableFields"][] = "UpdateDate";


$tables_data["list_ccemail"]=&$tdatalist_ccemail;
$field_labels["list_ccemail"] = &$fieldLabelslist_ccemail;
$fieldToolTips["list_ccemail"] = &$fieldToolTipslist_ccemail;
$placeHolders["list_ccemail"] = &$placeHolderslist_ccemail;
$page_titles["list_ccemail"] = &$pageTitleslist_ccemail;


changeTextControlsToDate( "list_ccemail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["list_ccemail"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["list_ccemail"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_list_ccemail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CatID,  Code,  Description,  Description2,  Active,  OrderNo,  AssRec,  Rate,  CreateBy,  CreateDate,  UpdateBy,  UpdateDate";
$proto0["m_strFrom"] = "FROM tbl_code_list";
$proto0["m_strWhere"] = "(CatID = 'email_cc')";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CatID = 'email_cc'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CatID",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'email_cc'";
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
	"m_srcTableName" => "list_ccemail"
));

$proto6["m_sql"] = "CatID";
$proto6["m_srcTableName"] = "list_ccemail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "list_ccemail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "list_ccemail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description2",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto12["m_sql"] = "Description2";
$proto12["m_srcTableName"] = "list_ccemail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Active",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto14["m_sql"] = "Active";
$proto14["m_srcTableName"] = "list_ccemail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderNo",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto16["m_sql"] = "OrderNo";
$proto16["m_srcTableName"] = "list_ccemail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AssRec",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto18["m_sql"] = "AssRec";
$proto18["m_srcTableName"] = "list_ccemail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Rate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto20["m_sql"] = "Rate";
$proto20["m_srcTableName"] = "list_ccemail";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto22["m_sql"] = "CreateBy";
$proto22["m_srcTableName"] = "list_ccemail";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto24["m_sql"] = "CreateDate";
$proto24["m_srcTableName"] = "list_ccemail";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto26["m_sql"] = "UpdateBy";
$proto26["m_srcTableName"] = "list_ccemail";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_ccemail"
));

$proto28["m_sql"] = "UpdateDate";
$proto28["m_srcTableName"] = "list_ccemail";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tbl_code_list";
$proto31["m_srcTableName"] = "list_ccemail";
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
$proto30["m_srcTableName"] = "list_ccemail";
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
$proto0["m_srcTableName"]="list_ccemail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_list_ccemail = createSqlQuery_list_ccemail();


	
		;

												

$tdatalist_ccemail[".sqlquery"] = $queryData_list_ccemail;



include_once(getabspath("include/list_ccemail_events.php"));
$tdatalist_ccemail[".hasEvents"] = true;

?>