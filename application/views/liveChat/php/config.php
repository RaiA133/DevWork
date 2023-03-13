<?php
$hostname = "devwork.rwlb.ap-southeast-5.rds.aliyuncs.com";
$username = "devwork_account";
$password = "1Maret2003";
$dbname = "devwork_polardb";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
  echo "Database connection error" . mysqli_connect_error();
}
