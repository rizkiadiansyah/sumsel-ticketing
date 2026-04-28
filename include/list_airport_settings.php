<?php
$tdatalist_airport = array();
$tdatalist_airport[".searchableFields"] = array();
$tdatalist_airport[".ShortName"] = "list_airport";
$tdatalist_airport[".OwnerID"] = "";
$tdatalist_airport[".OriginalTable"] = "tbl_code_list";


$tdatalist_airport[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatalist_airport[".originalPagesByType"] = $tdatalist_airport[".pagesByType"];
$tdatalist_airport[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatalist_airport[".originalPages"] = $tdatalist_airport[".pages"];
$tdatalist_airport[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatalist_airport[".originalDefaultPages"] = $tdatalist_airport[".defaultPages"];

//	field labels
$fieldLabelslist_airport = array();
$fieldToolTipslist_airport = array();
$pageTitleslist_airport = array();
$placeHolderslist_airport = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslist_airport["English"] = array();
	$fieldToolTipslist_airport["English"] = array();
	$placeHolderslist_airport["English"] = array();
	$pageTitleslist_airport["English"] = array();
	$fieldLabelslist_airport["English"]["CatID"] = "Cat ID";
	$fieldToolTipslist_airport["English"]["CatID"] = "";
	$placeHolderslist_airport["English"]["CatID"] = "";
	$fieldLabelslist_airport["English"]["Code"] = "Code";
	$fieldToolTipslist_airport["English"]["Code"] = "";
	$placeHolderslist_airport["English"]["Code"] = "";
	$fieldLabelslist_airport["English"]["Description"] = "Description";
	$fieldToolTipslist_airport["English"]["Description"] = "";
	$placeHolderslist_airport["English"]["Description"] = "";
	$fieldLabelslist_airport["English"]["Description2"] = "Description2";
	$fieldToolTipslist_airport["English"]["Description2"] = "";
	$placeHolderslist_airport["English"]["Description2"] = "";
	$fieldLabelslist_airport["English"]["OrderNo"] = "Order No";
	$fieldToolTipslist_airport["English"]["OrderNo"] = "";
	$placeHolderslist_airport["English"]["OrderNo"] = "";
	$fieldLabelslist_airport["English"]["Active"] = "Active";
	$fieldToolTipslist_airport["English"]["Active"] = "";
	$placeHolderslist_airport["English"]["Active"] = "";
	$fieldLabelslist_airport["English"]["AssRec"] = "Ass Rec";
	$fieldToolTipslist_airport["English"]["AssRec"] = "";
	$placeHolderslist_airport["English"]["AssRec"] = "";
	$fieldLabelslist_airport["English"]["Rate"] = "Rate";
	$fieldToolTipslist_airport["English"]["Rate"] = "";
	$placeHolderslist_airport["English"]["Rate"] = "";
	$fieldLabelslist_airport["English"]["CreateBy"] = "Create By";
	$fieldToolTipslist_airport["English"]["CreateBy"] = "";
	$placeHolderslist_airport["English"]["CreateBy"] = "";
	$fieldLabelslist_airport["English"]["CreateDate"] = "Create Date";
	$fieldToolTipslist_airport["English"]["CreateDate"] = "";
	$placeHolderslist_airport["English"]["CreateDate"] = "";
	$fieldLabelslist_airport["English"]["UpdateBy"] = "Update By";
	$fieldToolTipslist_airport["English"]["UpdateBy"] = "";
	$placeHolderslist_airport["English"]["UpdateBy"] = "";
	$fieldLabelslist_airport["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipslist_airport["English"]["UpdateDate"] = "";
	$placeHolderslist_airport["English"]["UpdateDate"] = "";
	if (count($fieldToolTipslist_airport["English"]))
		$tdatalist_airport[".isUseToolTips"] = true;
}


	$tdatalist_airport[".NCSearch"] = true;



$tdatalist_airport[".shortTableName"] = "list_airport";
$tdatalist_airport[".nSecOptions"] = 0;

$tdatalist_airport[".mainTableOwnerID"] = "";
$tdatalist_airport[".entityType"] = 1;
$tdatalist_airport[".connId"] = "sumsel_ticketing_at_localhost";


$tdatalist_airport[".strOriginalTableName"] = "tbl_code_list";

	



$tdatalist_airport[".showAddInPopup"] = false;

$tdatalist_airport[".showEditInPopup"] = false;

$tdatalist_airport[".showViewInPopup"] = false;

$tdatalist_airport[".listAjax"] = false;
//	temporary
//$tdatalist_airport[".listAjax"] = false;

	$tdatalist_airport[".audit"] = false;

	$tdatalist_airport[".locking"] = false;


$pages = $tdatalist_airport[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalist_airport[".edit"] = true;
	$tdatalist_airport[".afterEditAction"] = 1;
	$tdatalist_airport[".closePopupAfterEdit"] = 1;
	$tdatalist_airport[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalist_airport[".add"] = true;
$tdatalist_airport[".afterAddAction"] = 1;
$tdatalist_airport[".closePopupAfterAdd"] = 1;
$tdatalist_airport[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalist_airport[".list"] = true;
}



$tdatalist_airport[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalist_airport[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalist_airport[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalist_airport[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalist_airport[".printFriendly"] = true;
}



$tdatalist_airport[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalist_airport[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalist_airport[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalist_airport[".isUseAjaxSuggest"] = true;



												

$tdatalist_airport[".ajaxCodeSnippetAdded"] = false;

$tdatalist_airport[".buttonsAdded"] = false;

$tdatalist_airport[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalist_airport[".isUseTimeForSearch"] = false;


$tdatalist_airport[".badgeColor"] = "E07878";


$tdatalist_airport[".allSearchFields"] = array();
$tdatalist_airport[".filterFields"] = array();
$tdatalist_airport[".requiredSearchFields"] = array();

$tdatalist_airport[".googleLikeFields"] = array();
$tdatalist_airport[".googleLikeFields"][] = "CatID";
$tdatalist_airport[".googleLikeFields"][] = "Code";
$tdatalist_airport[".googleLikeFields"][] = "Description";
$tdatalist_airport[".googleLikeFields"][] = "Description2";
$tdatalist_airport[".googleLikeFields"][] = "Active";
$tdatalist_airport[".googleLikeFields"][] = "OrderNo";
$tdatalist_airport[".googleLikeFields"][] = "AssRec";
$tdatalist_airport[".googleLikeFields"][] = "Rate";
$tdatalist_airport[".googleLikeFields"][] = "CreateBy";
$tdatalist_airport[".googleLikeFields"][] = "CreateDate";
$tdatalist_airport[".googleLikeFields"][] = "UpdateBy";
$tdatalist_airport[".googleLikeFields"][] = "UpdateDate";



$tdatalist_airport[".tableType"] = "list";

$tdatalist_airport[".printerPageOrientation"] = 0;
$tdatalist_airport[".nPrinterPageScale"] = 100;

$tdatalist_airport[".nPrinterSplitRecords"] = 40;

$tdatalist_airport[".geocodingEnabled"] = false;










$tdatalist_airport[".pageSize"] = 20;

$tdatalist_airport[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY OrderNo";
$tdatalist_airport[".strOrderBy"] = $tstrOrderBy;

$tdatalist_airport[".orderindexes"] = array();
			$tdatalist_airport[".orderindexes"][] = array(6, (1 ? "ASC" : "DESC"), "OrderNo");


$tdatalist_airport[".sqlHead"] = "SELECT CatID,  Code,  Description,  Description2,  Active,  OrderNo,  AssRec,  Rate,  CreateBy,  CreateDate,  UpdateBy,  UpdateDate";
$tdatalist_airport[".sqlFrom"] = "FROM tbl_code_list";
$tdatalist_airport[".sqlWhereExpr"] = "(CatID = 'AIRPORT')";
$tdatalist_airport[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalist_airport[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalist_airport[".arrGroupsPerPage"] = $arrGPP;

$tdatalist_airport[".highlightSearchResults"] = true;

$tableKeyslist_airport = array();
$tableKeyslist_airport[] = "CatID";
$tableKeyslist_airport[] = "Code";
$tableKeyslist_airport[] = "Description";
$tableKeyslist_airport[] = "Description2";
$tdatalist_airport[".Keys"] = $tableKeyslist_airport;


$tdatalist_airport[".hideMobileList"] = array();




//	CatID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CatID";
	$fdata["GoodName"] = "CatID";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","CatID");
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


	$tdatalist_airport["CatID"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "CatID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","Code");
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


	$tdatalist_airport["Code"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "Code";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","Description");
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


	$tdatalist_airport["Description"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "Description";
//	Description2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description2";
	$fdata["GoodName"] = "Description2";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","Description2");
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


	$tdatalist_airport["Description2"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "Description2";
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","Active");
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


	$tdatalist_airport["Active"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "Active";
//	OrderNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OrderNo";
	$fdata["GoodName"] = "OrderNo";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","OrderNo");
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


	$tdatalist_airport["OrderNo"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "OrderNo";
//	AssRec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AssRec";
	$fdata["GoodName"] = "AssRec";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","AssRec");
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


	$tdatalist_airport["AssRec"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "AssRec";
//	Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Rate";
	$fdata["GoodName"] = "Rate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","Rate");
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


	$tdatalist_airport["Rate"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "Rate";
//	CreateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CreateBy";
	$fdata["GoodName"] = "CreateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","CreateBy");
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


	$tdatalist_airport["CreateBy"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "CreateBy";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","CreateDate");
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


	$tdatalist_airport["CreateDate"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "CreateDate";
//	UpdateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UpdateBy";
	$fdata["GoodName"] = "UpdateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","UpdateBy");
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


	$tdatalist_airport["UpdateBy"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "UpdateBy";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airport","UpdateDate");
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


	$tdatalist_airport["UpdateDate"] = $fdata;
		$tdatalist_airport[".searchableFields"][] = "UpdateDate";


$tables_data["list_airport"]=&$tdatalist_airport;
$field_labels["list_airport"] = &$fieldLabelslist_airport;
$fieldToolTips["list_airport"] = &$fieldToolTipslist_airport;
$placeHolders["list_airport"] = &$placeHolderslist_airport;
$page_titles["list_airport"] = &$pageTitleslist_airport;


changeTextControlsToDate( "list_airport" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["list_airport"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["list_airport"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_list_airport()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CatID,  Code,  Description,  Description2,  Active,  OrderNo,  AssRec,  Rate,  CreateBy,  CreateDate,  UpdateBy,  UpdateDate";
$proto0["m_strFrom"] = "FROM tbl_code_list";
$proto0["m_strWhere"] = "(CatID = 'AIRPORT')";
$proto0["m_strOrderBy"] = "ORDER BY OrderNo";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CatID = 'AIRPORT'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CatID",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'AIRPORT'";
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
	"m_srcTableName" => "list_airport"
));

$proto6["m_sql"] = "CatID";
$proto6["m_srcTableName"] = "list_airport";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "list_airport";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "list_airport";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description2",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto12["m_sql"] = "Description2";
$proto12["m_srcTableName"] = "list_airport";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Active",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto14["m_sql"] = "Active";
$proto14["m_srcTableName"] = "list_airport";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderNo",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto16["m_sql"] = "OrderNo";
$proto16["m_srcTableName"] = "list_airport";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AssRec",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto18["m_sql"] = "AssRec";
$proto18["m_srcTableName"] = "list_airport";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Rate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto20["m_sql"] = "Rate";
$proto20["m_srcTableName"] = "list_airport";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto22["m_sql"] = "CreateBy";
$proto22["m_srcTableName"] = "list_airport";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto24["m_sql"] = "CreateDate";
$proto24["m_srcTableName"] = "list_airport";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto26["m_sql"] = "UpdateBy";
$proto26["m_srcTableName"] = "list_airport";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto28["m_sql"] = "UpdateDate";
$proto28["m_srcTableName"] = "list_airport";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tbl_code_list";
$proto31["m_srcTableName"] = "list_airport";
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
$proto30["m_srcTableName"] = "list_airport";
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
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "OrderNo",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airport"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="list_airport";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_list_airport = createSqlQuery_list_airport();


	
		;

												

$tdatalist_airport[".sqlquery"] = $queryData_list_airport;



include_once(getabspath("include/list_airport_events.php"));
$tdatalist_airport[".hasEvents"] = true;

?>