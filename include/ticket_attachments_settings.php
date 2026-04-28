<?php
$tdataticket_attachments = array();
$tdataticket_attachments[".searchableFields"] = array();
$tdataticket_attachments[".ShortName"] = "ticket_attachments";
$tdataticket_attachments[".OwnerID"] = "";
$tdataticket_attachments[".OriginalTable"] = "tbl_ticket_attachments";


$tdataticket_attachments[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataticket_attachments[".originalPagesByType"] = $tdataticket_attachments[".pagesByType"];
$tdataticket_attachments[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataticket_attachments[".originalPages"] = $tdataticket_attachments[".pages"];
$tdataticket_attachments[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataticket_attachments[".originalDefaultPages"] = $tdataticket_attachments[".defaultPages"];

//	field labels
$fieldLabelsticket_attachments = array();
$fieldToolTipsticket_attachments = array();
$pageTitlesticket_attachments = array();
$placeHoldersticket_attachments = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsticket_attachments["English"] = array();
	$fieldToolTipsticket_attachments["English"] = array();
	$placeHoldersticket_attachments["English"] = array();
	$pageTitlesticket_attachments["English"] = array();
	$fieldLabelsticket_attachments["English"]["id"] = "Id";
	$fieldToolTipsticket_attachments["English"]["id"] = "";
	$placeHoldersticket_attachments["English"]["id"] = "";
	$fieldLabelsticket_attachments["English"]["req_id"] = "Req Id";
	$fieldToolTipsticket_attachments["English"]["req_id"] = "";
	$placeHoldersticket_attachments["English"]["req_id"] = "";
	$fieldLabelsticket_attachments["English"]["attachment"] = "Attachment";
	$fieldToolTipsticket_attachments["English"]["attachment"] = "";
	$placeHoldersticket_attachments["English"]["attachment"] = "";
	$fieldLabelsticket_attachments["English"]["update_by"] = "Update By";
	$fieldToolTipsticket_attachments["English"]["update_by"] = "";
	$placeHoldersticket_attachments["English"]["update_by"] = "";
	$fieldLabelsticket_attachments["English"]["update_date"] = "Update Date";
	$fieldToolTipsticket_attachments["English"]["update_date"] = "";
	$placeHoldersticket_attachments["English"]["update_date"] = "";
	if (count($fieldToolTipsticket_attachments["English"]))
		$tdataticket_attachments[".isUseToolTips"] = true;
}


	$tdataticket_attachments[".NCSearch"] = true;



$tdataticket_attachments[".shortTableName"] = "ticket_attachments";
$tdataticket_attachments[".nSecOptions"] = 0;

$tdataticket_attachments[".mainTableOwnerID"] = "";
$tdataticket_attachments[".entityType"] = 1;
$tdataticket_attachments[".connId"] = "sumsel_ticketing_at_localhost";


$tdataticket_attachments[".strOriginalTableName"] = "tbl_ticket_attachments";

	



$tdataticket_attachments[".showAddInPopup"] = false;

$tdataticket_attachments[".showEditInPopup"] = false;

$tdataticket_attachments[".showViewInPopup"] = false;

$tdataticket_attachments[".listAjax"] = false;
//	temporary
//$tdataticket_attachments[".listAjax"] = false;

	$tdataticket_attachments[".audit"] = false;

	$tdataticket_attachments[".locking"] = false;


$pages = $tdataticket_attachments[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataticket_attachments[".edit"] = true;
	$tdataticket_attachments[".afterEditAction"] = 1;
	$tdataticket_attachments[".closePopupAfterEdit"] = 1;
	$tdataticket_attachments[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataticket_attachments[".add"] = true;
$tdataticket_attachments[".afterAddAction"] = 1;
$tdataticket_attachments[".closePopupAfterAdd"] = 1;
$tdataticket_attachments[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataticket_attachments[".list"] = true;
}



$tdataticket_attachments[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataticket_attachments[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataticket_attachments[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataticket_attachments[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataticket_attachments[".printFriendly"] = true;
}



$tdataticket_attachments[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataticket_attachments[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataticket_attachments[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataticket_attachments[".isUseAjaxSuggest"] = true;



																								

$tdataticket_attachments[".ajaxCodeSnippetAdded"] = false;

$tdataticket_attachments[".buttonsAdded"] = false;

$tdataticket_attachments[".addPageEvents"] = false;

// use timepicker for search panel
$tdataticket_attachments[".isUseTimeForSearch"] = false;


$tdataticket_attachments[".badgeColor"] = "bc8f8f";


$tdataticket_attachments[".allSearchFields"] = array();
$tdataticket_attachments[".filterFields"] = array();
$tdataticket_attachments[".requiredSearchFields"] = array();

$tdataticket_attachments[".googleLikeFields"] = array();
$tdataticket_attachments[".googleLikeFields"][] = "id";
$tdataticket_attachments[".googleLikeFields"][] = "req_id";
$tdataticket_attachments[".googleLikeFields"][] = "attachment";
$tdataticket_attachments[".googleLikeFields"][] = "update_by";
$tdataticket_attachments[".googleLikeFields"][] = "update_date";



$tdataticket_attachments[".tableType"] = "list";

$tdataticket_attachments[".printerPageOrientation"] = 0;
$tdataticket_attachments[".nPrinterPageScale"] = 100;

$tdataticket_attachments[".nPrinterSplitRecords"] = 40;

$tdataticket_attachments[".geocodingEnabled"] = false;










$tdataticket_attachments[".pageSize"] = 20;

$tdataticket_attachments[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataticket_attachments[".strOrderBy"] = $tstrOrderBy;

$tdataticket_attachments[".orderindexes"] = array();


$tdataticket_attachments[".sqlHead"] = "SELECT id,  	req_id,  	attachment,  	update_by,  	update_date";
$tdataticket_attachments[".sqlFrom"] = "FROM tbl_ticket_attachments";
$tdataticket_attachments[".sqlWhereExpr"] = "";
$tdataticket_attachments[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataticket_attachments[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataticket_attachments[".arrGroupsPerPage"] = $arrGPP;

$tdataticket_attachments[".highlightSearchResults"] = true;

$tableKeysticket_attachments = array();
$tableKeysticket_attachments[] = "id";
$tdataticket_attachments[".Keys"] = $tableKeysticket_attachments;


$tdataticket_attachments[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tbl_ticket_attachments";
	$fdata["Label"] = GetFieldLabel("ticket_attachments","id");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataticket_attachments["id"] = $fdata;
		$tdataticket_attachments[".searchableFields"][] = "id";
//	req_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "req_id";
	$fdata["GoodName"] = "req_id";
	$fdata["ownerTable"] = "tbl_ticket_attachments";
	$fdata["Label"] = GetFieldLabel("ticket_attachments","req_id");
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


	$tdataticket_attachments["req_id"] = $fdata;
		$tdataticket_attachments[".searchableFields"][] = "req_id";
//	attachment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "attachment";
	$fdata["GoodName"] = "attachment";
	$fdata["ownerTable"] = "tbl_ticket_attachments";
	$fdata["Label"] = GetFieldLabel("ticket_attachments","attachment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "attachment";

		$fdata["sourceSingle"] = "attachment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attachment";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
			$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdataticket_attachments["attachment"] = $fdata;
		$tdataticket_attachments[".searchableFields"][] = "attachment";
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "tbl_ticket_attachments";
	$fdata["Label"] = GetFieldLabel("ticket_attachments","update_by");
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


	$tdataticket_attachments["update_by"] = $fdata;
		$tdataticket_attachments[".searchableFields"][] = "update_by";
//	update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_date";
	$fdata["GoodName"] = "update_date";
	$fdata["ownerTable"] = "tbl_ticket_attachments";
	$fdata["Label"] = GetFieldLabel("ticket_attachments","update_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "update_date";

		$fdata["sourceSingle"] = "update_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_date";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdataticket_attachments["update_date"] = $fdata;
		$tdataticket_attachments[".searchableFields"][] = "update_date";


$tables_data["ticket_attachments"]=&$tdataticket_attachments;
$field_labels["ticket_attachments"] = &$fieldLabelsticket_attachments;
$fieldToolTips["ticket_attachments"] = &$fieldToolTipsticket_attachments;
$placeHolders["ticket_attachments"] = &$placeHoldersticket_attachments;
$page_titles["ticket_attachments"] = &$pageTitlesticket_attachments;


changeTextControlsToDate( "ticket_attachments" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ticket_attachments"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ticket_attachments"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tbl_pengajuan_ticket_hdr";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pengajuan_ticket_hdr";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pengajuan_ticket_hdr";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ticket_attachments"][0] = $masterParams;
				$masterTablesData["ticket_attachments"][0]["masterKeys"] = array();
	$masterTablesData["ticket_attachments"][0]["masterKeys"][]="req_id";
				$masterTablesData["ticket_attachments"][0]["detailKeys"] = array();
	$masterTablesData["ticket_attachments"][0]["detailKeys"][]="req_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ticket_attachments()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	req_id,  	attachment,  	update_by,  	update_date";
$proto0["m_strFrom"] = "FROM tbl_ticket_attachments";
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
	"m_strName" => "id",
	"m_strTable" => "tbl_ticket_attachments",
	"m_srcTableName" => "ticket_attachments"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ticket_attachments";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "req_id",
	"m_strTable" => "tbl_ticket_attachments",
	"m_srcTableName" => "ticket_attachments"
));

$proto8["m_sql"] = "req_id";
$proto8["m_srcTableName"] = "ticket_attachments";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "attachment",
	"m_strTable" => "tbl_ticket_attachments",
	"m_srcTableName" => "ticket_attachments"
));

$proto10["m_sql"] = "attachment";
$proto10["m_srcTableName"] = "ticket_attachments";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "tbl_ticket_attachments",
	"m_srcTableName" => "ticket_attachments"
));

$proto12["m_sql"] = "update_by";
$proto12["m_srcTableName"] = "ticket_attachments";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_date",
	"m_strTable" => "tbl_ticket_attachments",
	"m_srcTableName" => "ticket_attachments"
));

$proto14["m_sql"] = "update_date";
$proto14["m_srcTableName"] = "ticket_attachments";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tbl_ticket_attachments";
$proto17["m_srcTableName"] = "ticket_attachments";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "req_id";
$proto17["m_columns"][] = "attachment";
$proto17["m_columns"][] = "update_by";
$proto17["m_columns"][] = "update_date";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tbl_ticket_attachments";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "ticket_attachments";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ticket_attachments";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ticket_attachments = createSqlQuery_ticket_attachments();


	
		;

					

$tdataticket_attachments[".sqlquery"] = $queryData_ticket_attachments;



include_once(getabspath("include/ticket_attachments_events.php"));
$tdataticket_attachments[".hasEvents"] = true;

?>