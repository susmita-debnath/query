<?php
	if( ! session_id() ) session_start();

	global $con;

	//$con = mysqli_connect('localhost', 'id13198998_query', 'dyxK3P$DCby@mU4', 'id13198998_query_1');

	$whitelist = array(
	    '127.0.0.1',
	    '::1'
	);

	if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
	    $con = mysqli_connect('localhost', 'id13198998_query', '$Iu]$Cr$57fM#J(s', 'id13198998_query_1');
	} else {
		$con = mysqli_connect('localhost', 'root', '', 'query_1');
	}
	

	function id_exists( $id ) {
		global $con;

		$query = "SELECT * FROM student WHERE `id` = '$id'";
		$a = mysqli_query($con, $query);

		if( $a->num_rows > 0 ) return true;
		else return false;
	}

	function id_identify( $id ) {
		global $con;

		if ( $id[0] == '0' ) {
			if ( $id[1] == '1') {
				if ( $id[2] == '1' ) {
					$query = "UPDATE student SET `d_id`='011' where `id` = '$id'";
					$a = mysqli_query($con, $query);
					echo $a;
					echo $id;
				}
			}
		}
		if ( $id[0] == '1' ) {
			if ( $id[1] == '1') {
				if ( $id[2] == '1' ) {
					$query = "UPDATE student SET `d_id`='111' WHERE `id` = '$id'";
					$a = mysqli_query($con, $query);
				}
			}
		}

	}

	function is_user_logged_in( $id = NULL ) {
		if( $id == NULL ) return isset($_SESSION['id']) ? true : false;
		else return isset($_SESSION['id']) && $id == $_SESSION['id'] ? true : false;
	}

	function is_user_valid( $id, $password ) {
		global $con;

		if ( $id == NULL || $password == NULL ) return false;

		$password = md5($password);

		$query = "SELECT * FROM student WHERE `id` = '$id' && `password` = '$password'";
		$a = mysqli_query($con, $query);

		$b = mysqli_fetch_assoc($a);
		
		if( $a->num_rows == 1 ) return $b['id'];
		else false;
	}