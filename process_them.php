<?php
if(isset($_POST['btthem'])){
   
    include('connect.php');
    $ten=$_POST['firstname'];
    $ho=$_POST['lastname'];
    $gioitinh=$_POST['gender'];
    $sdt=$_POST['mobie'];
    $email=$_POST['email'];
    $chieucao=$_POST['height'];
    $cannang=$_POST['weight'];
    $nhommau=$_POST['blood_type'];

    $sql = "INSERT INTO patient(firstname,lastname,gender,mobie,email,height,weight,blood_type)
    VALUES('$ten','$ho','$gioitinh','$sdt','$email','$chieucao','$cannang','$nhommau');";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location:index.php");

    mysqli_close($conn);
}