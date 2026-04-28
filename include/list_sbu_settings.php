<?php
$tdatalist_sbu = array();
$tdatalist_sbu[".searchableFields"] = array();
$tdatalist_sbu[".ShortName"] = "list_sbu";
$tdatalist_sbu[".OwnerID"] = "";
$tdatalist_sbu[".OriginalTable"] = "tbl_code_list";


$tdatalist_sbu[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatalist_sbu[".originalPagesByType"] = $tdatalist_sbu[".pagesByType"];
$tdatalist_sbu[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatalist_sbu[".originalPages"] = $tdatalist_sbu[".pages"];
$tdatalist_sbu[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatalist_sbu[".originalDefaultPages"] = $tdatalist_sbu[".defaultPages"];

//	field labels
$fieldLabelslist_sbu = array();
$fieldToolTipslist_sbu = array();
$pageTitleslist_sbu = array();
$placeHolderslist_sbu = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslist_sbu["English"] = array();
	$fieldToolTipslist_sbu["English"] = array();
	$placeHolderslist_sbu["English"] = array();
	$pageTitleslist_sbu["English"] = array();
	$fieldLabelslist_sbu["English"]["CatID"] = "Cat ID";
	$fieldToolTipslist_sbu["English"]["CatID"] = "";
	$placeHolderslist_sbu["English"]["CatID"] = "";
	$fieldLabelslist_sbu["English"]["Code"] = "Code";
	$fieldToolTipslist_sbu["English"]["Code"] = "";
	$placeHolderslist_sbu["English"]["Code"] = "";
	$fieldLabelslist_sbu["English"]["Description"] = "Description";
	$fieldToolTipslist_sbu["English"]["Description"] = "";
	$placeHolderslist_sbu["English"]["Description"] = "";
	$fieldLabelslist_sbu["English"]["Description2"] = "Description2";
	$fieldToolTipslist_sbu["English"]["Description2"] = "";
	$placeHolderslist_sbu["English"]["Description2"] = "";
	$fieldLabelslist_sbu["English"]["AssRec"] = "Ass Rec";
	$fieldToolTipslist_sbu["English"]["AssRec"] = "";
	$placeHolderslist_sbu["English"]["AssRec"] = "";
	$fieldLabelslist_sbu["English"]["OrderNo"] = "Order No";
	$fieldToolTipslist_sbu["English"]["OrderNo"] = "";
	$placeHolderslist_sbu["English"]["OrderNo"] = "";
	$fieldLabelslist_sbu["English"]["Active"] = "Active";
	$fieldToolTipslist_sbu["English"]["Active"] = "";
	$placeHolderslist_sbu["English"]["Active"] = "";
	$fieldLabelslist_sbu["English"]["Rate"] = "Rate";
	$fieldToolTipslist_sbu["English"]["Rate"] = "";
	$placeHolderslist_sbu["English"]["Rate"] = "";
	$fieldLabelslist_sbu["English"]["CreateBy"] = "Create By";
	$fieldToolTipslist_sbu["English"]["CreateBy"] = "";
	$placeHolderslist_sbu["English"]["CreateBy"] = "";
	$fieldLabelslist_sbu["English"]["CreateDate"] = "Create Date";
	$fieldToolTipslist_sbu["English"]["CreateDate"] = "";
	$placeHolderslist_sbu["English"]["CreateDate"] = "";
	$fieldLabelslist_sbu["English"]["UpdateBy"] = "Update By";
	$fieldToolTipslist_sbu["English"]["UpdateBy"] = "";
	$placeHolderslist_sbu["English"]["UpdateBy"] = "";
	$fieldLabelslist_sbu["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipslist_sbu["English"]["UpdateDate"] = "";
	$placeHolderslist_sbu["English"]["UpdateDate"] = "";
	if (count($fieldToolTipslist_sbu["English"]))
		$tdatalist_sbu[".isUseToolTips"] = true;
}


	$tdatalist_sbu[".NCSearch"] = true;



$tdatalist_sbu[".shortTableName"] = "list_sbu";
$tdatalist_sbu[".nSecOptions"] = 0;

$tdatalist_sbu[".mainTableOwnerID"] = "";
$tdatalist_sbu[".entityType"] = 1;
$tdatalist_sbu[".connId"] = "sumsel_ticketing_at_localhost";


$tdatalist_sbu[".strOriginalTableName"] = "tbl_code_list";

	



$tdatalist_sbu[".showAddInPopup"] = false;

$tdatalist_sbu[".showEditInPopup"] = false;

$tdatalist_sbu[".showViewInPopup"] = false;

$tdatalist_sbu[".listAjax"] = false;
//	temporary
//$tdatalist_sbu[".listAjax"] = false;

	$tdatalist_sbu[".audit"] = false;

	$tdatalist_sbu[".locking"] = false;


$pages = $tdatalist_sbu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalist_sbu[".edit"] = true;
	$tdatalist_sbu[".afterEditAction"] = 1;
	$tdatalist_sbu[".closePopupAfterEdit"] = 1;
	$tdatalist_sbu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalist_sbu[".add"] = true;
$tdatalist_sbu[".afterAddAction"] = 1;
$tdatalist_sbu[".closePopupAfterAdd"] = 1;
$tdatalist_sbu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalist_sbu[".list"] = true;
}



$tdatalist_sbu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalist_sbu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalist_sbu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalist_sbu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalist_sbu[".printFriendly"] = true;
}



$tdatalist_sbu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalist_sbu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalist_sbu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalist_sbu[".isUseAjaxSuggest"] = true;



												

$tdatalist_sbu[".ajaxCodeSnippetAdded"] = false;

$tdatalist_sbu[".buttonsAdded"] = false;

$tdatalist_sbu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalist_sbu[".isUseTimeForSearch"] = false;


$tdatalist_sbu[".badgeColor"] = "E8926F";


$tdatalist_sbu[".allSearchFields"] = array();
$tdatalist_sbu[".filterFields"] = array();
$tdatalist_sbu[".requiredSearchFields"] = array();

$tdatalist_sbu[".googleLikeFields"] = array();
$tdatalist_sbu[".googleLikeFields"][] = "CatID";
$tdatalist_sbu[".googleLikeFields"][] = "Code";
$tdatalist_sbu[".googleLikeFields"][] = "Description";
$tdatalist_sbu[".googleLikeFields"][] = "Description2";
$tdatalist_sbu[".googleLikeFields"][] = "AssRec";
$tdatalist_sbu[".googleLikeFields"][] = "OrderNo";
$tdatalist_sbu[".googleLikeFields"][] = "Active";
$tdatalist_sbu[".googleLikeFields"][] = "Rate";
$tdatalist_sbu[".googleLikeFields"][] = "CreateBy";
$tdatalist_sbu[".googleLikeFields"][] = "CreateDate";
$tdatalist_sbu[".googleLikeFields"][] = "UpdateBy";
$tdatalist_sbu[".googleLikeFields"][] = "UpdateDate";



$tdatalist_sbu[".tableType"] = "list";

$tdatalist_sbu[".printerPageOrientation"] = 0;
$tdatalist_sbu[".nPrinterPageScale"] = 100;

$tdatalist_sbu[".nPrinterSplitRecords"] = 40;

$tdatalist_sbu[".geocodingEnabled"] = false;










$tdatalist_sbu[".pageSize"] = 20;

$tdatalist_sbu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalist_sbu[".strOrderBy"] = $tstrOrderBy;

$tdatalist_sbu[".orderindexes"] = array();


$tdatalist_sbu[".sqlHead"] = "SELECT CatID,  	Code,  	Description,  	Description2,  	AssRec,  	OrderNo,  	Active,  	Rate,  	CreateBy,  	CreateDate,  	UpdateBy,  	UpdateDate";
$tdatalist_sbu[".sqlFrom"] = "FROM tbl_code_list";
$tdatalist_sbu[".sqlWhereExpr"] = "(CatID = 'SBU')";
$tdatalist_sbu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalist_sbu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalist_sbu[".arrGroupsPerPage"] = $arrGPP;

$tdatalist_sbu[".highlightSearchResults"] = true;

$tableKeyslist_sbu = array();
$tableKeyslist_sbu[] = "CatID";
$tableKeyslist_sbu[] = "Code";
$tableKeyslist_sbu[] = "Description";
$tableKeyslist_sbu[] = "Description2";
$tableKeyslist_sbu[] = "AssRec";
$tdatalist_sbu[".Keys"] = $tableKeyslist_sbu;


$tdatalist_sbu[".hideMobileList"] = array();




//	CatID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CatID";
	$fdata["GoodName"] = "CatID";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","CatID");
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


	$tdatalist_sbu["CatID"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "CatID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","Code");
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


	$tdatalist_sbu["Code"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "Code";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","Description");
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


	$tdatalist_sbu["Description"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "Description";
//	Description2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description2";
	$fdata["GoodName"] = "Description2";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","Description2");
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


	$tdatalist_sbu["Description2"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "Description2";
//	AssRec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AssRec";
	$fdata["GoodName"] = "AssRec";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","AssRec");
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


	$tdatalist_sbu["AssRec"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "AssRec";
//	OrderNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OrderNo";
	$fdata["GoodName"] = "OrderNo";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","OrderNo");
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


	$tdatalist_sbu["OrderNo"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "OrderNo";
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","Active");
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


	$tdatalist_sbu["Active"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "Active";
//	Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Rate";
	$fdata["GoodName"] = "Rate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","Rate");
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


	$tdatalist_sbu["Rate"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "Rate";
//	CreateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CreateBy";
	$fdata["GoodName"] = "CreateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","CreateBy");
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


	$tdatalist_sbu["CreateBy"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "CreateBy";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","CreateDate");
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


	$tdatalist_sbu["CreateDate"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "CreateDate";
//	UpdateBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UpdateBy";
	$fdata["GoodName"] = "UpdateBy";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","UpdateBy");
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


	$tdatalist_sbu["UpdateBy"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "UpdateBy";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "tbl_code_list";
	$fdata["Label"] = GetFieldLabel("list_sbu","UpdateDate");
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


	$tdatalist_sbu["UpdateDate"] = $fdata;
		$tdatalist_sbu[".searchableFields"][] = "UpdateDate";


$tables_data["list_sbu"]=&$tdatalist_sbu;
$field_labels["list_sbu"] = &$fieldLabelslist_sbu;
$fieldToolTips["list_sbu"] = &$fieldToolTipslist_sbu;
$placeHolders["list_sbu"] = &$placeHolderslist_sbu;
$page_titles["list_sbu"] = &$pageTitleslist_sbu;


changeTextControlsToDate( "list_sbu" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["list_sbu"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["list_sbu"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_list_sbu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CatID,  	Code,  	Description,  	Description2,  	AssRec,  	OrderNo,  	Active,  	Rate,  	CreateBy,  	CreateDate,  	UpdateBy,  	UpdateDate";
$proto0["m_strFrom"] = "FROM tbl_code_list";
$proto0["m_strWhere"] = "(CatID = 'SBU')";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CatID = 'SBU'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CatID",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'SBU'";
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
	"m_srcTableName" => "list_sbu"
));

$proto6["m_sql"] = "CatID";
$proto6["m_srcTableName"] = "list_sbu";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "list_sbu";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto10["m_sql"] = "Description";
$proto10["m_srcTableName"] = "list_sbu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Description2",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto12["m_sql"] = "Description2";
$proto12["m_srcTableName"] = "list_sbu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AssRec",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto14["m_sql"] = "AssRec";
$proto14["m_srcTableName"] = "list_sbu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderNo",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto16["m_sql"] = "OrderNo";
$proto16["m_srcTableName"] = "list_sbu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Active",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto18["m_sql"] = "Active";
$proto18["m_srcTableName"] = "list_sbu";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Rate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto20["m_sql"] = "Rate";
$proto20["m_srcTableName"] = "list_sbu";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto22["m_sql"] = "CreateBy";
$proto22["m_srcTableName"] = "list_sbu";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto24["m_sql"] = "CreateDate";
$proto24["m_srcTableName"] = "list_sbu";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateBy",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto26["m_sql"] = "UpdateBy";
$proto26["m_srcTableName"] = "list_sbu";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "tbl_code_list",
	"m_srcTableName" => "list_sbu"
));

$proto28["m_sql"] = "UpdateDate";
$proto28["m_srcTableName"] = "list_sbu";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "tbl_code_list";
$proto31["m_srcTableName"] = "list_sbu";
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
$proto30["m_srcTableName"] = "list_sbu";
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
$proto0["m_srcTableName"]="list_sbu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_list_sbu = createSqlQuery_list_sbu();


	
		;

												

$tdatalist_sbu[".sqlquery"] = $queryData_list_sbu;



include_once(getabspath("include/list_sbu_events.php"));
$tdatalist_sbu[".hasEvents"] = true;

?>