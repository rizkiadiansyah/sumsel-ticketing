<?php
$tdatalist_airlane = array();
$tdatalist_airlane[".searchableFields"] = array();
$tdatalist_airlane[".ShortName"] = "list_airlane";
$tdatalist_airlane[".OwnerID"] = "";
$tdatalist_airlane[".OriginalTable"] = "tbl_code_list";


$tdatalist_airlane[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatalist_airlane[".originalPagesByType"] = $tdatalist_airlane[".pagesByType"];
$tdatalist_airlane[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatalist_airlane[".originalPages"] = $tdatalist_airlane[".pages"];
$tdatalist_airlane[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatalist_airlane[".originalDefaultPages"] = $tdatalist_airlane[".defaultPages"];

//	field labels
$fieldLabelslist_airlane = array();
$fieldToolTipslist_airlane = array();
$pageTitleslist_airlane = array();
$placeHolderslist_airlane = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslist_airlane["English"] = array();
	$fieldToolTipslist_airlane["English"] = array();
	$placeHolderslist_airlane["English"] = array();
	$pageTitleslist_airlane["English"] = array();
	$fieldLabelslist_airlane["English"]["CatID"] = "Cat ID";
	$fieldToolTipslist_airlane["English"]["CatID"] = "";
	$placeHolderslist_airlane["English"]["CatID"] = "";
	$fieldLabelslist_airlane["English"]["Code"] = "Code";
	$fieldToolTipslist_airlane["English"]["Code"] = "";
	$placeHolderslist_airlane["English"]["Code"] = "";
	$fieldLabelslist_airlane["English"]["Description"] = "Description";
	$fieldToolTipslist_airlane["English"]["Description"] = "";
	$placeHolderslist_airlane["English"]["Description"] = "";
	$fieldLabelslist_airlane["English"]["Description2"] = "Description2";
	$fieldToolTipslist_airlane["English"]["Description2"] = "";
	$placeHolderslist_airlane["English"]["Description2"] = "";
	$fieldLabelslist_airlane["English"]["OrderNo"] = "Order No";
	$fieldToolTipslist_airlane["English"]["OrderNo"] = "";
	$placeHolderslist_airlane["English"]["OrderNo"] = "";
	$fieldLabelslist_airlane["English"]["Active"] = "Active";
	$fieldToolTipslist_airlane["English"]["Active"] = "";
	$placeHolderslist_airlane["English"]["Active"] = "";
	$fieldLabelslist_airlane["English"]["AssRec"] = "Ass Rec";
	$fieldToolTipslist_airlane["English"]["AssRec"] = "";
	$placeHolderslist_airlane["English"]["AssRec"] = "";
	$fieldLabelslist_airlane["English"]["Rate"] = "Rate";
	$fieldToolTipslist_airlane["English"]["Rate"] = "";
	$placeHolderslist_airlane["English"]["Rate"] = "";
	$fieldLabelslist_airlane["English"]["CreateBy"] = "Create By";
	$fieldToolTipslist_airlane["English"]["CreateBy"] = "";
	$placeHolderslist_airlane["English"]["CreateBy"] = "";
	$fieldLabelslist_airlane["English"]["CreateDate"] = "Create Date";
	$fieldToolTipslist_airlane["English"]["CreateDate"] = "";
	$placeHolderslist_airlane["English"]["CreateDate"] = "";
	$fieldLabelslist_airlane["English"]["UpdateBy"] = "Update By";
	$fieldToolTipslist_airlane["English"]["UpdateBy"] = "";
	$placeHolderslist_airlane["English"]["UpdateBy"] = "";
	$fieldLabelslist_airlane["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipslist_airlane["English"]["UpdateDate"] = "";
	$placeHolderslist_airlane["English"]["UpdateDate"] = "";
	if (count($fieldToolTipslist_airlane["English"]))
		$tdatalist_airlane[".isUseToolTips"] = true;
}


	$tdatalist_airlane[".NCSearch"] = true;



$tdatalist_airlane[".shortTableName"] = "list_airlane";
$tdatalist_airlane[".nSecOptions"] = 0;

$tdatalist_airlane[".mainTableOwnerID"] = "";
$tdatalist_airlane[".entityType"] = 1;
$tdatalist_airlane[".connId"] = "sumsel_ticketing_at_localhost";


$tdatalist_airlane[".strOriginalTableName"] = "tbl_code_list";

	



$tdatalist_airlane[".showAddInPopup"] = false;

$tdatalist_airlane[".showEditInPopup"] = false;

$tdatalist_airlane[".showViewInPopup"] = false;

$tdatalist_airlane[".listAjax"] = false;
//	temporary
//$tdatalist_airlane[".listAjax"] = false;

	$tdatalist_airlane[".audit"] = false;

	$tdatalist_airlane[".locking"] = false;


$pages = $tdatalist_airlane[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalist_airlane[".edit"] = true;
	$tdatalist_airlane[".afterEditAction"] = 1;
	$tdatalist_airlane[".closePopupAfterEdit"] = 1;
	$tdatalist_airlane[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalist_airlane[".add"] = true;
$tdatalist_airlane[".afterAddAction"] = 1;
$tdatalist_airlane[".closePopupAfterAdd"] = 1;
$tdatalist_airlane[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalist_airlane[".list"] = true;
}



$tdatalist_airlane[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalist_airlane[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalist_airlane[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalist_airlane[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalist_airlane[".printFriendly"] = true;
}



$tdatalist_airlane[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalist_airlane[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalist_airlane[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalist_airlane[".isUseAjaxSuggest"] = true;



												

$tdatalist_airlane[".ajaxCodeSnippetAdded"] = false;

$tdatalist_airlane[".buttonsAdded"] = false;

$tdatalist_airlane[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalist_airlane[".isUseTimeForSearch"] = false;


$tdatalist_airlane[".badgeColor"] = "4682B4";


$tdatalist_airlane[".allSearchFields"] = array();
$tdatalist_airlane[".filterFields"] = array();
$tdatalist_airlane[".requiredSearchFields"] = array();

$tdatalist_airlane[".googleLikeFields"] = array();
$tdatalist_airlane[".googleLikeFields"][] = "CatID";
$tdatalist_airlane[".googleLikeFields"][] = "Code";
$tdatalist_airlane[".googleLikeFields"][] = "Description";
$tdatalist_airlane[".googleLikeFields"][] = "Description2";
$tdatalist_airlane[".googleLikeFields"][] = "OrderNo";
$tdatalist_airlane[".googleLikeFields"][] = "Active";
$tdatalist_airlane[".googleLikeFields"][] = "AssRec";
$tdatalist_airlane[".googleLikeFields"][] = "Rate";
$tdatalist_airlane[".googleLikeFields"][] = "CreateBy";
$tdatalist_airlane[".googleLikeFields"][] = "CreateDate";
$tdatalist_airlane[".googleLikeFields"][] = "UpdateBy";
$tdatalist_airlane[".googleLikeFields"][] = "UpdateDate";



$tdatalist_airlane[".tableType"] = "list";

$tdatalist_airlane[".printerPageOrientation"] = 0;
$tdatalist_airlane[".nPrinterPageScale"] = 100;

$tdatalist_airlane[".nPrinterSplitRecords"] = 40;

$tdatalist_airlane[".geocodingEnabled"] = false;










$tdatalist_airlane[".pageSize"] = 20;

$tdatalist_airlane[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY OrderNo";
$tdatalist_airlane[".strOrderBy"] = $tstrOrderBy;

$tdatalist_airlane[".orderindexes"] = array();
			$tdatalist_airlane[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "OrderNo");


$tdatalist_airlane[".sqlHead"] = "SELECT CatID,  Code,  Description,  Description2,  OrderNo,  Active,  AssRec,  Rate,  CreateBy,  CreateDate,  UpdateBy,  UpdateDate";
$tdatalist_airlane[".sqlFrom"] = "FROM tbl_code_list";
$tdatalist_airlane[".sqlWhereExpr"] = "(CatID = 'AIRLINE')";
$tdatalist_airlane[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalist_airlane[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalist_airlane[".arrGroupsPerPage"] = $arrGPP;

$tdatalist_airlane[".highlightSearchResults"] = true;

$tableKeyslist_airlane = array();
$tableKeyslist_airlane[] = "CatID";
$tableKeyslist_airlane[] = "Code";
$tableKeyslist_airlane[] = "Description";
$tableKeyslist_airlane[] = "Description2";
$tdatalist_airlane[".Keys"] = $tableKeyslist_airlane;


$tdatalist_airlane[".hideMobileList"] = array();




//	CatID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CatID";
	$fdata["GoodName"] = "CatID";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","CatID");
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


	$tdatalist_airlane["CatID"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "CatID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","Code");
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


	$tdatalist_airlane["Code"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "Code";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","Description");
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


	$tdatalist_airlane["Description"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "Description";
//	Description2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description2";
	$fdata["GoodName"] = "Description2";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","Description2");
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


	$tdatalist_airlane["Description2"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "Description2";
//	OrderNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OrderNo";
	$fdata["GoodName"] = "OrderNo";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","OrderNo");
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


	$tdatalist_airlane["OrderNo"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "OrderNo";
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","Active");
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


	$tdatalist_airlane["Active"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "Active";
//	AssRec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AssRec";
	$fdata["GoodName"] = "AssRec";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","AssRec");
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


	$tdatalist_airlane["AssRec"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "AssRec";
//	Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Rate";
	$fdata["GoodName"] = "Rate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","Rate");
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


	$tdatalist_airlane["Rate"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "Rate";
//	CreateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CreateBy";
	$fdata["GoodName"] = "CreateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","CreateBy");
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


	$tdatalist_airlane["CreateBy"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "CreateBy";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","CreateDate");
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


	$tdatalist_airlane["CreateDate"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "CreateDate";
//	UpdateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UpdateBy";
	$fdata["GoodName"] = "UpdateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","UpdateBy");
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


	$tdatalist_airlane["UpdateBy"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "UpdateBy";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_airlane","UpdateDate");
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


	$tdatalist_airlane["UpdateDate"] = $fdata;
		$tdatalist_airlane[".searchableFields"][] = "UpdateDate";


$tables_data["list_airlane"]=&$tdatalist_airlane;
$field_labels["list_airlane"] = &$fieldLabelslist_airlane;
$fieldToolTips["list_airlane"] = &$fieldToolTipslist_airlane;
$placeHolders["list_airlane"] = &$placeHolderslist_airlane;
$page_titles["list_airlane"] = &$pageTitleslist_airlane;


changeTextControlsToDate( "list_airlane" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["list_airlane"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["list_airlane"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_list_airlane()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CatID,  Code,  Description,  Description2,  OrderNo,  Active,  AssRec,  Rate,  CreateBy,  CreateDate,  UpdateBy,  UpdateDate";
$proto0["m_strFrom"] = "FROM tbl_code_list";
$proto0["m_strWhere"] = "(CatID = 'AIRLINE')";
$proto0["m_strOrderBy"] = "ORDER BY OrderNo";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CatID = 'AIRLINE'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CatID",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'AIRLINE'";
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
	"m_srcTableName" => "list_airlane"
));

$proto6["m_sql"] = "CatID";
$proto6["m_srcTableName"] = "list_airlane";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "list_airlane";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "list_airlane";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description2",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto12["m_sql"] = "Description2";
$proto12["m_srcTableName"] = "list_airlane";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderNo",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto14["m_sql"] = "OrderNo";
$proto14["m_srcTableName"] = "list_airlane";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Active",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto16["m_sql"] = "Active";
$proto16["m_srcTableName"] = "list_airlane";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AssRec",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto18["m_sql"] = "AssRec";
$proto18["m_srcTableName"] = "list_airlane";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Rate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto20["m_sql"] = "Rate";
$proto20["m_srcTableName"] = "list_airlane";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto22["m_sql"] = "CreateBy";
$proto22["m_srcTableName"] = "list_airlane";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto24["m_sql"] = "CreateDate";
$proto24["m_srcTableName"] = "list_airlane";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto26["m_sql"] = "UpdateBy";
$proto26["m_srcTableName"] = "list_airlane";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_airlane"
));

$proto28["m_sql"] = "UpdateDate";
$proto28["m_srcTableName"] = "list_airlane";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tbl_code_list";
$proto31["m_srcTableName"] = "list_airlane";
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
$proto30["m_srcTableName"] = "list_airlane";
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
	"m_srcTableName" => "list_airlane"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="list_airlane";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_list_airlane = createSqlQuery_list_airlane();


	
		;

												

$tdatalist_airlane[".sqlquery"] = $queryData_list_airlane;



include_once(getabspath("include/list_airlane_events.php"));
$tdatalist_airlane[".hasEvents"] = true;

?>