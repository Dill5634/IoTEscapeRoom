<?php
include 'config.php';
if ($login == 0) 
{
//echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
}
else 
{
  //checks code exists in db
  $g_code = "g_code";
  $u_id = $_SESSION['login'];
   //checks if field is empty
  if (empty($g_code) ) 
  {
    echo "Please complete all Data";
  }else
  {
    //if the code is correct then adds them to that group in the db
    $SQL = "INSERT INTO Group1: (`u_id`) VALUES ('$u_id') WHERE (`g_code`) VALUES ('$g_code')" ; 
      $insert = mysqli_query($conn,$SQL);
   header('Location:CountdownEscape.php');
      echo $SQL; 
    
  }
  }

 ?>