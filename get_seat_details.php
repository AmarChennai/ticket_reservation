<?php	// get_seat_details.php 		Bus Ticketting Reservation system developed by R. Amaranathan
header("Content-Type: application/json; charset=UTF-8");
$data = json_decode(file_get_contents("php://input"));
$service_id = substr($data->service_id,0,3);
require_once('connect_database.php');
$result = mysqli_query($con,"select service_id, seat_no, passenger_name, booked from bus_service_seat_detail where service_id='$service_id'");
$arr = array();
if(mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
			$arr[] = $row;
	}
}
mysqli_close($con);
echo json_encode($arr);