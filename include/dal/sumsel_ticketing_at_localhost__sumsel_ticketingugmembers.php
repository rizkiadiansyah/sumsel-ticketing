<?php
$dalTablesumsel_ticketingugmembers = array();
$dalTablesumsel_ticketingugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablesumsel_ticketingugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablesumsel_ticketingugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablesumsel_ticketingugmembers["UserName"]["key"]=true;
$dalTablesumsel_ticketingugmembers["GroupID"]["key"]=true;
$dalTablesumsel_ticketingugmembers["Provider"]["key"]=true;

$dal_info["sumsel_ticketing_at_localhost__sumsel_ticketingugmembers"] = &$dalTablesumsel_ticketingugmembers;
?>