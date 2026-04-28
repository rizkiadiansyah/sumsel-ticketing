<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["AfterEditUserinfo"]=true;

		$this->events["BeforeRegister"]=true;


		$this->events["AfterSuccessfulRegistration"]=true;


//	onscreen events



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$_SESSION["nama"] = $data['nama'];
$_SESSION["nik"] = $username;
$_SESSION["password"] = $password;


header("Location:landing.php");
exit();
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After userinfo updated
function AfterEditUserinfo(&$values, $where, &$oldvalues, $pageObject)
{

		$sql = "UPDATE tbl_users 
        SET updated_at = NOW() 
        WHERE " . $where;

CustomQuery($sql);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEditUserinfo

		

		
		
		
		
		
		
		
		
		
				// Before registration
function BeforeRegister(&$userdata, &$sqlValues, &$message, $pageObject)
{

		$username = $userdata["nik"]; 

$strSQL = "
INSERT INTO `sumsel-ticketingugmembers` (UserName, GroupID)
VALUES (" . db_prepare_string($username) . ", 2)
";

CustomQuery($strSQL);

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeRegister

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// After successful registration
function AfterSuccessfulRegistration(&$userdata, $pageObject)
{

		    $to = $userdata["email"]; 

    $subject = "Registrasi Berhasil";

    $message = "
    Halo ".$userdata["nama"].",<br><br>
    Akun kamu berhasil didaftarkan.<br>
    Silakan login menggunakan akun yang sudah dibuat.<br><br>
    
    Terima kasih.
    ";

    $maildata = array();
    $maildata["to"] = $to;
    $maildata["subject"] = $subject;
    $maildata["htmlbody"] = $message;

    runner_mail($maildata);

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulRegistration

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
