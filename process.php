<?php 
//start session
session_start();

require_once('database.php');

$action = $_GET['action'];

switch($action) {
	case 'add-cons':
		addCons();
	break;
	
	case 'delivered':
		markDelivered();
	break;
	
	case 'add-office':
		addNewOffice();
	break;
	
	case 'add-manager':
		addManager();
	break;
	
	case 'update-status':
		updateStatus();
	break;
	
	case 'change-pass':
		changePass();
	break;
			
	case 'logOut':
		logOut();
	break;		
	
}//switch

function addCons(){

	$Shippername = $_POST['Shippername'];
	$ShipperShippers_Contact = $_POST['ShipperShippers_Contact'];
	$Shipperaddress = $_POST['Shipperaddress'];
	
	$Receivername = $_POST['Receivername'];
	$ReceiverShippers_Contact = $_POST['ReceiverShippers_Contact'];
	$Receiveraddress = $_POST['Receiveraddress'];
	
	$ConsignmentNo = $_POST['ConsignmentNo'];
	$Shiptype = $_POST['Shiptype'];
	$Weight = $_POST['Weight'];
	$Invoiceno = $_POST['Invoiceno'];
	$Qnty = $_POST['Qnty'];

	$Bookingmode = $_POST['Bookingmode'];
	$TotalArrival_Time = $_POST['TotalArrival_Time'];
	$Mode = $_POST['Mode'];
	
	
	$Packupdate = $_POST['Packupdate'];
	$Pickuptime = $_POST['Pickuptime'];
	$status = $_POST['status'];
	$Comments = $_POST['Comments'];
	

	$sql = "INSERT INTO tbl_courier (cons_no, Shipper_Name, Shippers_Contact, Shipper_addresss, Receiver_Name, Receiver_Shippers_Contact, Receiver_address,  type, weight, Departure_Time, qty, book_mode, Arrival_Time, mode, Regisstration_D_T, Registration_Time, status, comments, book_date )
			VALUES('$ConsignmentNo', '$Shippername','$ShipperShippers_Contact', '$Shipperaddress', '$Receivername','$ReceiverShippers_Contact','$Receiveraddress', '$Shiptype',$Weight , '$Invoiceno', $Qnty, '$Bookingmode', '$TotalArrival_Time', '$Mode', '$Packupdate', '$Pickuptime', '$status', '$Comments', NOW())";	
	//echo $sql;
	dbQuery($sql);
	header('Location: courier-add-success.php'); 
	
	//echo $Ship;
}//addCons

function markDelivered() {
	$cid = (int)$_GET['cid'];
	$sql = "UPDATE tbl_courier
			SET status = 'Delivered'
			WHERE cid= $cid";
	dbQuery($sql);
	header('Location: delivered-success.php'); 
			
}//markDelivered();

function addNewOffice() {
	
	$OfficeName = $_POST['OfficeName'];
	$OfficeAddress = $_POST['OfficeAddress'];
	$City = $_POST['City'];
	$Shippers_ContactNo = $_POST['Shippers_ContactNo'];
	$OfficeTiming = $_POST['OfficeTiming'];
	$ContactPerson = $_POST['ContactPerson'];
	
	$sql = "INSERT INTO tbl_offices (off_name, address, city, ph_no, office_time, contact_person)
			VALUES ('$OfficeName', '$OfficeAddress', '$City', '$Shippers_ContactNo', '$OfficeTiming', '$ContactPerson')";
	dbQuery($sql);
	header('Location: office-add-success.php');
}//addNewOffice

function addManager() {
	
	$ManagerName = $_POST['ManagerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$Shippers_ContactNo = $_POST['Shippers_ContactNo'];
	$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no, office, reg_date)
			VALUES ('$ManagerName', '$Password', '$Address', '$Email', '$Shippers_ContactNo', '$OfficeName', NOW())";
	dbQuery($sql);
	header('Location: manager-add-success.php');

}//addNewOffice

function updateStatus() {
	
	$OfficeName = $_POST['OfficeName'];
	$status = $_POST['status'];
	$comments = $_POST['comments'];
	$cid = (int)$_POST['cid'];
	$cons_no = $_POST['cons_no'];
	//$OfficeName = $_POST['OfficeName'];
	
	$sql = "INSERT INTO tbl_courier_track (cid, cons_no, current_city, status, comments, bk_time)
			VALUES ($cid, '$cons_no', '$OfficeName', '$status', '$comments', NOW())";
	dbQuery($sql);
	
	$sql_1 = "UPDATE tbl_courier 
				SET status = '$status' 
				WHERE cid = $cid
				AND cons_no = '$cons_no'";
	dbQuery($sql_1);	
	
	header('Location: update-success.php');

}//addNewOffice



function logOut(){
	if(isset($_SESSION['user_name'])){
		unset($_SESSION['user_name']);
	}
	if(isset($_SESSION['user_type'])){
		unset($_SESSION['user_type']);
	}
	session_destroy();
	header('Location: login.php');
}//logOut

?>