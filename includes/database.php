<?php 

	require_once("admin-config.php"); //database credentials are located here

	class Database {
		public $connection; //leave this variable public

		function __construct(){
			$this->open_db_connection();//executing the connection automatically
		}

		public function open_db_connection(){
			$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			// checking for failed connection
			if (mysqli_connect_error($this->connection)) { 
				die("Database connection failed! " . mysqli_error());
			} 
		}

		public function query($sql){
			$result = mysqli_query($this->connection, $sql); 

			return  $result;
		}

		private function confirm_query($result){
			if (!$result) {
				die("Query failed..."); 
			}
		}

		public function escape_string($string){
			$escaped_string = mysqli_real_escape_string($this->connection, $string);
			return $escaped_string; 
		}

	}

	$database = new Database; //instatiating the class, now we can use this variable to use the class 

?>