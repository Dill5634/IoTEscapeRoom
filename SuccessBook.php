<?php
include 'config.php';
if ($login == 0) {
  echo " <meta http-equiv='refresh' content='0; url=BookEscape.php'>";
}else {
$u_id = $_SESSION['login'];
$getinfo = mysqli_query($conn,"SELECT * FROM Group1 WHERE u_id = $u_id ");
$arr = mysqli_fetch_array($getinfo);
 ?>

<span>Date : <?php echo $arr ['Date']; ?></span><br>
<span>Time : <?php echo $arr ['Time']; ?></span><br>
<span>Group Code : <?php echo $arr ['g_code']; ?></span><br>


<a href="CountdownEscape.php">Countdown</a>


<?php } ?>
