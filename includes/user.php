<?php 
	
	class User{
		public $id; 
		public $username;
		public $first_name;
		public $last_name; 
		public $password; 

		public static function find_all_users(){
			// global $database; 
			// $result_set = $database->query("SELECT * FROM users"); 
			// return $result_set; 

			return self::find_this_query("SELECT * FROM users");
		}

		public static function find_user_by_id($id){
			global $database; 

			//$user_id = $database->query("SELECT * FROM users WHERE id=$id "); 
			$user_id = self::find_this_query("SELECT * FROM users WHERE id=$id");
			return $user_id; 
		}

		public static function find_this_query($sql){
			global $database; 
			$result_set = $database->query($sql);
			return $result_set; 
		}
		
		public static function instantiation($found_user){
			
			$the_object = new User;

			$the_object->id 		= $found_user['id'];
			$the_object->username 	= $found_user['username'];
			$the_object->first_name = $found_user['first_name'];
			$the_object->last_name 	= $found_user['last_name'];
			$the_object->password 	= $found_user['password'];

			return $the_object; 
		}



		// public static function add_user(){
		// 	global $database; 

		// }

		// public static function update_user($id){
		// 	global $database; 
		// }

		// public static function delete_user($id){
		// 	global $database;

		// }

	}


	$user = new User();

?>