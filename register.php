<?php
//connecting to the database
include 'config.php';
if ($login == 1) {
  //If successful it will send them to the booking page
echo " <meta http-equiv='refresh' content='0; url=BookEscape.php'>";
}else {
  //variables to add to the database
if (isset($_POST["u_btn"])) {
  $u_name = $_POST["u_name"];
  $u_email = $_POST["u_email"];
  $u_pass = $_POST["u_pass"];
  //checks if all the fields have data
  if (empty($u_name) || empty($u_email) || empty($u_pass) ) {
    echo "Please complete all Data";
  }else{
    //Puts the data in the fields into the database
    $insert = mysqli_query($conn,"INSERT INTO `users` (`u_name`, `u_email`, `u_pass`) VALUES ('$u_name', '$u_email', '$u_pass')");


    }
    }
  }
  


 ?>



