<?php
include 'config.php';


if (isset($_POST["u_btn"])) {
  $u_email = $_POST['u_email'];
  $u_pass = $_POST['u_pass'];
  if (empty($u_email) || empty($u_pass)) {
    echo "Please Complete all data";
  }else{
    $selectfdb = mysqli_query($conn,"SELECT * FROM users WHERE u_email = '$u_email' AND u_pass = '$u_pass'");
    $row = mysqli_fetch_array($selectfdb);
    if ($row["u_email"] == $u_email && $row["u_pass"] == $u_pass) {
     session_start();
      $_SESSION['login'] = $row["u_id"];
      //setcookie('login',1,time()+(3600 + 24));
        //echo "hello";
      //echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
        header('Location:BookEscape.php');
    }else {
      header('Location:LoginEscape.php');
    }
  }

 ?>



<?php } ?>
