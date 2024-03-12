<?php

session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$grade = $_POST['grade'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];


$sToken = "Your line token";
$sMessage .= "\n" . "มีปัญหารายงานเข้ามา!" . "\n";
$sMessage .= "ชื่อ: " . $fname . "\n";
$sMessage .= "นามสกุล: " . $lname . "\n";
$sMessage .= "ชั้น: " . $grade . "\n";
$sMessage .= "ชื่อปัญหา: " . $subject . "\n";
$sMessage .= "ราละเอียดของปัญหา: " . "\n " . $msg . "\n";


$chOne = curl_init();
curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($chOne, CURLOPT_POST, 1);
curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=" . $sMessage);
$headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $sToken . '', );
curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($chOne);

if ($result) {
	$_SESSION['success'] = "ส่งข้อความไปที่ไลน์เรียบร้อยแล้ว!";
	header("location: index.php");
} else {
	$_SESSION["error"] = "ส่งข้อความไปที่ไลน์ไม่สำเร็จ!";
	header("location: index.php");
}

?>
