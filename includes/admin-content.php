<?php 
	
	// $query = "SELECT * FROM users";
	// $users_result = $database->query($query);

	// while ($user = mysqli_fetch_array($users_result)) {
	// 	echo $user['username'] . " - Id: " . $user['id']. "<br>";
	// }
	


	// echo "<br>All Users:<br>"; 
	// foreach (User::find_all_users() as $user) {
	// 	echo  $user['username'] . "<br>"; 
	// }

	// echo "Find user with ID #1" . "<br>";
	
	// foreach(User::find_user_by_id(1) as $user) {
	// 	echo "Id: " . $user['id'] . " Username: " . $user['username'];
	// }

	//$found_user = User::find_user_by_id(2);

	// foreach (User::find_user_by_id(1) as $found_user) {
	// 	$user->id = $found_user['id'];
	// 	$user->username = $found_user['username'];
	// 	$user->first_name = $found_user['first_name'];
	// 	$user->last_name = $found_user['last_name'];
	// 	$user->password = $found_user['password'];
	// }	

	$found_user = User::find_user_by_id(2);

	$this_user = User::instantiation($found_user);

	echo $this_user->id;



	echo "<br><br><br><br><br>"
?>