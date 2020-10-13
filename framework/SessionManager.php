<?php
class SessionManager 
{
	public static function create ()
	{
		$array = array('container' => 'yes',);
	}
	
	public function destroy ()
	{
		$_SESSION = array ();   //Unsets all Session Variables
		
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(session_name(), '' , time() -4200,
				$params["path"], $params["domain"],
				$params["secure"], $params["httponly"]
				);
		}
		session_destroy();
		header('Location:index.php');
	}
	
	
}