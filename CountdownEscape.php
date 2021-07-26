<html>

<?php include 'config.php';
 
    if ($login == 0) {
    header('Location:LoginEscape.html');
    }
    
?>

<head>
    <title>Countdown Hurst Escape Room</title>
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
    
    
    <div id="escinfo">
        <?php
    $u_id = $_SESSION['login'];
    $getinfo = mysqli_query($conn,"SELECT * FROM Group1 WHERE u_id = $u_id ");
    $arr = mysqli_fetch_array($getinfo);
    ?>
        <!-- shows the date, time and group code -->
        <span>Date : <?php echo $arr ['Date']; ?></span><br>
        <span>Time : <?php echo $arr ['Time']; ?></span><br>
        <span>Group Code : <?php echo $arr ['g_code']; ?></span><br>
        
   <?php 
        //finds the  current date
        $date1 = new DateTime();
        $date1 = $date1->getTimestamp();
        //echo $date1;
        
        //$datetime = '2020-10-12 14:35:08';
//finds the date of the booking
$date2 = (new DateTime($arr ['Date']." ". $arr ['Time']))->getTimestamp();
        //calculates the time difference
        $count= $date2 - $date1;
        //calculates the time in seconds
        $count=$count/86400;
    ?>

    </div>

    <iframe src="http://free.timeanddate.com/clock/i7frhqf4/n136/tluk/fs20/fcfff/tc000/pc000/tt0" frameborder="0" width="382" height="25"></iframe>

    <h1>Countdown Clock</h1>
    <div id="clockdiv">
        <div>
            <span class="days"></span>
            <div class="smalltext">Days</div>
        </div>
        <div>
            <span class="hours"></span>
            <div class="smalltext">Hours</div>
        </div>
        <div>
            <span class="minutes"></span>
            <div class="smalltext">Minutes</div>
        </div>
        <div>
            <span class="seconds"></span>
            <div class="smalltext">Seconds</div>
        </div>
    </div>
    <script>
        //converts the php function into JS
        var php_var = "<?php echo $count; ?>";
        //finds the time remaining
        function getTimeRemaining(endtime) {
            const total = Date.parse(endtime) - Date.parse(new Date());
            const seconds = Math.floor((total / 1000) % 60);
            const minutes = Math.floor((total / 1000 / 60) % 60);
            const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
            const days = Math.floor(total / (1000 * 60 * 60 * 24));
            //returns the time remaining in days, hours, minutes and seconds
            return {
                total,
                days,
                hours,
                minutes,
                seconds
            };
        }
            //starts the clock
        function initializeClock(id, endtime) {
            const clock = document.getElementById(id);
            const daysSpan = clock.querySelector('.days');
            const hoursSpan = clock.querySelector('.hours');
            const minutesSpan = clock.querySelector('.minutes');
            const secondsSpan = clock.querySelector('.seconds');

            //updates the clock
            function updateClock() {
                const t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                    clearInterval(timeinterval);
                }
            }
            updateClock();
            const timeinterval = setInterval(updateClock, 1000);
        }
        //runs the php function "php_var" into the clock
        const deadline = new Date(Date.parse(new Date()) + php_var * 24 * 60 * 60 * 1000);
        initializeClock('clockdiv', deadline);

    </script>


</body>

</html>
