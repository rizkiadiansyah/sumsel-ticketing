<?php
$dalTabletbl_ticket_attachments = array();
$dalTabletbl_ticket_attachments["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletbl_ticket_attachments["req_id"] = array("type"=>200,"varname"=>"req_id", "name" => "req_id", "autoInc" => "0");
$dalTabletbl_ticket_attachments["attachment"] = array("type"=>201,"varname"=>"attachment", "name" => "attachment", "autoInc" => "0");
$dalTabletbl_ticket_attachments["update_by"] = array("type"=>200,"varname"=>"update_by", "name" => "update_by", "autoInc" => "0");
$dalTabletbl_ticket_attachments["update_date"] = array("type"=>135,"varname"=>"update_date", "name" => "update_date", "autoInc" => "0");
$dalTabletbl_ticket_attachments["id"]["key"]=true;

$dal_info["sumsel_ticketing_at_localhost__tbl_ticket_attachments"] = &$dalTabletbl_ticket_attachments;
?>