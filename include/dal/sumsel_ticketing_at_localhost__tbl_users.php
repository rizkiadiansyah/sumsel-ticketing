<?php
$dalTabletbl_users = array();
$dalTabletbl_users["id"] = array("type"=>20,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletbl_users["nik"] = array("type"=>200,"varname"=>"nik", "name" => "nik", "autoInc" => "0");
$dalTabletbl_users["nama"] = array("type"=>200,"varname"=>"nama", "name" => "nama", "autoInc" => "0");
$dalTabletbl_users["posisi"] = array("type"=>200,"varname"=>"posisi", "name" => "posisi", "autoInc" => "0");
$dalTabletbl_users["sbu"] = array("type"=>200,"varname"=>"sbu", "name" => "sbu", "autoInc" => "0");
$dalTabletbl_users["no_hp"] = array("type"=>200,"varname"=>"no_hp", "name" => "no_hp", "autoInc" => "0");
$dalTabletbl_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTabletbl_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTabletbl_users["role"] = array("type"=>129,"varname"=>"role", "name" => "role", "autoInc" => "0");
$dalTabletbl_users["is_active"] = array("type"=>16,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTabletbl_users["remember_token"] = array("type"=>200,"varname"=>"remember_token", "name" => "remember_token", "autoInc" => "0");
$dalTabletbl_users["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at", "autoInc" => "0");
$dalTabletbl_users["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at", "autoInc" => "0");
$dalTabletbl_users["id"]["key"]=true;

$dal_info["sumsel_ticketing_at_localhost__tbl_users"] = &$dalTabletbl_users;
?>