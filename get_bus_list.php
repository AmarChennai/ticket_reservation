<?php	// get_bus_list.php 		Bus Ticketting Reservation system developed by R. Amaranathan
header("Content-Type: application/json; charset=UTF-8");
require_once('connect_database.php');
$result = mysqli_query($con,"SELECT concat(starting_place, ' to ', destination_place, ' at ', start_date_time) bus_detail, start_date_time, service_id FROM `bus_service_master` WHERE closed='No'");
$arr = array();
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
			$arr[] = $row;
	}
}
mysqli_close($con);
echo json_encode($arr);