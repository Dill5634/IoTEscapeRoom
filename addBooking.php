<?php
include 'config.php';
if ($login == 0) 
{
//echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
}
else 
{
  //passes the data from the form to the database
  $Date = $_POST["Date"];
  $Time = $_POST["Time"];
  //creates random code
  $digits = 4;
  $g_code= rand(pow(10, $digits-1), pow(10, $digits)-1);
  //$g_code = $_["g_code"];
  //$g_id = $_POST["g_id"];
  $u_id = $_SESSION['login'];
   //checks if fields are empty
  if (empty($Date) || empty($Time) ) 
  {
    echo "Please complete all Data";
  }else
  {
    //inserts into db
    $SQL = "INSERT INTO Group1 (`Date`, `Time`, `g_code`, `u_id`) VALUES ('$Date', '$Time', '$g_code', '$u_id')";
      $insert = mysqli_query($conn,$SQL);
   header('Location:CountdownEscape.php');
      echo $SQL;
    
  }

}
 ?>
