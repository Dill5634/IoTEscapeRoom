<html>
    <?php include 'config.php';
    if ($login == 0) {
    header('Location:LoginEscape.html');
    }
    ?>

<head>
    <title>Hurst Escape Room Make Your Group</title>
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
                        <a href=BookEscape.php> Booking </a>
                    </li>
                    <li>
                        <a href=CountdownEscape.php> Countdown </a>
                    </li>
                    <li>
                        <a href=GroupEscape.php> Join a Group </a>
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


</body>
    
    <div class="main-container">
    <form class="box" action="JoinGroup.php" method="POST">
        <h1>Join a Group</h1>
        <input type="text" name="g_code" placeholder="Type the code" />
        <input type="submit" name="u_btn" value="Sign Up">
    </form>
    </div>
    
    
    
    

</html>
