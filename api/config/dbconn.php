<?php
	Class DBConfig {
		function __construct(){}

		//function db_connect($user='root', $password="", $db="sc_autosys_2")
		function db_connect($user='sc_db_user', $password="#JS8ktQoTlDZKfTlj#", $db="sc_autosys_2")
		{
			//root P@ssw0rd
			$conn = mysqli_connect('127.0.0.1', $user, $password);
			if(!$conn) {
				return 'Error connecting to database'; 
			}
			mysqli_select_db($conn, $db);
			date_default_timezone_set("Africa/Lagos");
			
			return $conn;
		}
	}
?>
