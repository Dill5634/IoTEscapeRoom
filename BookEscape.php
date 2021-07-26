<html>

<?php include 'config.php';
    if ($login == 0) {
    header('Location:LoginEscape.html');
    }
    $u_id = $_SESSION['login'];
    $SQL = "SELECT * FROM Group1 WHERE u_id = '$u_id' ";
    $selectfdb = mysqli_query($conn, $SQL);   
    $num_rows = mysqli_num_rows($selectfdb);
    if ($num_rows>0)
        header('Location:CountdownEscape.php');
    ?>


<head>
    <title>Book Hurst Escape Room</title>
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <header>
        <div class="nav-wrapper">
            <img width="375" height="121" src="download.png" alt="logo" class="logo">
            <nav>
                <ul>
                    <li>
                        <a href=AboutEscape.html> About</a>
                    </li>
                    <li>
                        <a href=BookEscape.php> Booking / Join a Group </a>
                    </li>
                    <li>
                        <a href=CountdownEscape.php> Countdown </a>
                    </li>
                    <li>
                        <a href=LoginEscape.html> Login </a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
   
    
    <div class="main-container">
        <form class="box" action="addBooking.php" method="post">
            <h1>Make a Booking</h1>
            <input type="Date" name="Date">
            <input type="Time" name="Time"  />
            <input type="submit" name="" value="Book" />
        </form>
    </div>


    <div class="main-container">
        <form class="box" action="JoinGroup.php" method="POST">
            <h1>Join a Group</h1>
            <input type="text" name="g_code" placeholder="Type the code" />
            <input type="submit" name="u_btn" value="Join Group">
        </form>
    </div>
    <script>
    var currYear = (new Date()).getFullYear();

$(document).ready(function() {
  $(".datepicker").datepicker({
    defaultDate: new Date(currYear-5,1,31),
    // setDefaultDate: new Date(2000,01,31),
    maxDate: new Date(currYear-5,12,31),
    yearRange: [1928, currYear 5],
    format: "dd/mm/yyyy"    
  });
});
    
</script>
</body>

</html>
