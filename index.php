<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con,true);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="css/css/icons.css">
    <title>Document</title>
</head>

<body>
    <header>
        <img style="width: 200px;" src="assets/img/logo.png">

        <button class="btn" onclick="window.location.href ='logout.php'"> LOG OUT</button>
    </header>
    <div class="header">
        <div class="hero">
            <span>
                <h2 style="font-family: cursive; position: relative; bottom: 50px;"> <?php echo $user_data['name'];?></h2>
                <h3>Your balance is</h3>
            <b style="font-size: 100px;">$<?php echo $user_data['balance'];?></b>
            </span>
            <div class="send-receive">
                <div class="send"><i class="material-icons">send </i><span>&nbsp&nbsp</span> SEND</div>
                <div class="receive"><i class="material-icons">input</i><span>&nbsp&nbsp</span> RECEIVE</div>
            </div>
        </div>
    </div>
    </div>
    <div class="section">
        <div class="trans">
            <span style="font-family: cursive; font-size: 20px; font-weight: 700; position:relative; left: 40%; line-height: 60px; ">
                RECENT TRANSACTIONS
            </span>
            <!-- <div class="trans-child">
                <div class="date">30 Sep 2021</div>
                <div class="trans-main">
                    <div class="trans-image">
                        <div style="height: 40px;width:40px; border-radius: 100%; display:flex; align-items: center; justify-content: center;
                         background-image: url(assets/img/bg-masthead.jpg); background-repeat:round;">
                        </div>
                    </div>
                    <div class="name-time">

                        <div class="name">OKAFOR CHUKWUEBUKA
                            <br>
                        </div>
                        <div class="time">09:04 PM</div>
                    </div>
                    <div class="amount">$1000.00</div>
                </div>
            </div>
            <div class="trans-child">
                <div class="date">30 Sep 2021</div>
                <div class="trans-main">
                    <div class="trans-image">
                        <div style="height: 40px;width:40px; border-radius: 100%; display:flex; align-items: center; justify-content: center;
                         background-image: url(assets/img/bg-masthead.jpg); background-repeat:round;">
                        </div>
                    </div>
                    <div class="name-time">

                        <div class="name">OKAFOR CHUKWUEBUKA
                            <br>
                        </div>
                        <div class="time">09:04 PM</div>
                    </div>
                    <div class="amount">$1000.00</div>
                </div>
            </div>
            <div class="trans-child">
                <div class="date">30 Sep 2021</div>
                <div class="trans-main">
                    <div class="trans-image">
                        <div style="height: 40px;width:40px; border-radius: 100%; display:flex; align-items: center; justify-content: center;
                         background-image: url(assets/img/bg-masthead.jpg); background-repeat:round;">
                        </div>
                    </div>
                    <div class="name-time">

                        <div class="name">OKAFOR CHUKWUEBUKA
                            <br>
                        </div>
                        <div class="time">09:04 PM</div>
                    </div>
                    <div class="amount">$1000.00</div>
                </div>
            </div> -->

          <span class="recent">  Recent Transactions will appear here.</span>
        </div>
    </div>
    <footer>
        &copy 2021
    </footer>
</body>



</html>