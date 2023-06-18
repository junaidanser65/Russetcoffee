<?php
	include'connection.php';

	function display_data_orders(){
		global $conn;
		$query = "select * from orders";
    	$result = mysqli_query($conn,$query);
    	return $result;
	}

	function display_data_completed_orders(){
		global $conn;
		$query = "select * from completed_orders";
    	$result = mysqli_query($conn,$query);
    	return $result;
	}

	function display_data_cancelled_orders(){
		global $conn;
		$query = "select * from cancelled_orders";
    	$result = mysqli_query($conn,$query);
    	return $result;
	}

	function display_data_admins(){
		global $conn;
		$query = "select * from admin order by ID";
    	$result = mysqli_query($conn,$query);
    	return $result;
	}

	function display_tables(){
		global $conn;
		$query_tables = "select * from tables where booked = 0";
    	$all_tables = mysqli_query($conn,$query_tables);
		return $all_tables;
	}

	function display_data_bookings(){
		global $conn;
		$query_tables = "select * from bookings";
    	$all_tables = mysqli_query($conn,$query_tables);
		return $all_tables;
	}

	function display_data_booking_history(){
		global $conn;
		$query_tables = "select * from prev_bookings";
    	$all_tables = mysqli_query($conn,$query_tables);
		return $all_tables;
	}

	function display_data_tables(){
		global $conn;
		$query_tables = "select * from tables";
    	$all_tables = mysqli_query($conn,$query_tables);
		return $all_tables;
	}

	function display_id_admins(){
		global $conn;
		$query_tables = "select ID from admin";
    	$all_tables = mysqli_query($conn,$query_tables);
		return $all_tables;
	}

	function display_data_contact(){
		global $conn;
		$query_tables = "select * from contact";
    	$all_tables = mysqli_query($conn,$query_tables);
		return $all_tables;
	}
?>