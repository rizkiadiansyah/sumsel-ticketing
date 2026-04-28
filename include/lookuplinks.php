<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["tbl_code_list"] ) ) {
			$lookupTableLinks["tbl_code_list"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_code_list"]["tbl_users.sbu"] )) {
			$lookupTableLinks["tbl_code_list"]["tbl_users.sbu"] = array();
		}
		$lookupTableLinks["tbl_code_list"]["tbl_users.sbu"]["edit"] = array("table" => "tbl_users", "field" => "sbu", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_code_list"] ) ) {
			$lookupTableLinks["tbl_code_list"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_code_list"]["pengajuan_ticket_hdr.beban_sbu"] )) {
			$lookupTableLinks["tbl_code_list"]["pengajuan_ticket_hdr.beban_sbu"] = array();
		}
		$lookupTableLinks["tbl_code_list"]["pengajuan_ticket_hdr.beban_sbu"]["edit"] = array("table" => "pengajuan_ticket_hdr", "field" => "beban_sbu", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_code_list"] ) ) {
			$lookupTableLinks["tbl_code_list"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_code_list"]["pengajuan_ticket_hdr.status"] )) {
			$lookupTableLinks["tbl_code_list"]["pengajuan_ticket_hdr.status"] = array();
		}
		$lookupTableLinks["tbl_code_list"]["pengajuan_ticket_hdr.status"]["edit"] = array("table" => "pengajuan_ticket_hdr", "field" => "status", "page" => "edit");
		if( !isset( $lookupTableLinks["tbl_code_list"] ) ) {
			$lookupTableLinks["tbl_code_list"] = array();
		}
		if( !isset( $lookupTableLinks["tbl_code_list"]["list_data_penumpang.sbu"] )) {
			$lookupTableLinks["tbl_code_list"]["list_data_penumpang.sbu"] = array();
		}
		$lookupTableLinks["tbl_code_list"]["list_data_penumpang.sbu"]["edit"] = array("table" => "list_data_penumpang", "field" => "sbu", "page" => "edit");
}

?>