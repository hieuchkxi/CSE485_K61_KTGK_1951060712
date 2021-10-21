<?php
include("connect.php");
$patientid = $_GET['id'];
$sql = "DELETE FROM patient WHERE patientid = $patientid";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    header("location:index.php");
} else {
    header("location:index.php");
}