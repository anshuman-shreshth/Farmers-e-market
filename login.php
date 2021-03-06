<?php   
    session_start();
    include('php/login_script.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Organo</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body> 
    <div class="nav"> 
        <ul class="navbar-container" id="navbar">
            <li class="icon main"><a href="index.php"><i class="fas fa-seedling"></i> Home</a></li>
        </ul>
    </div>
    <div id="container">
        <div id="about_box">
            <div id="icon_box">
                <i class="fas fa-seedling"></i>
                <P>Farmers' E-Market</P>
            </div>
        </div>
        <div id="signup_box">
            <form id="form_id" method="POST" action="#">
                <p>Enter your Username:</p>
                <input class="reg-field" name="username" id="username" type="text" placeholder="username">
                <p>Enter your Password:</p>
                <input class="reg-field" name="password" id="password" type="password" placeholder="Password">
                <p id="error"></p>
                <button id="REG_button">LOGIN</button>
                <span>
                    <?php
                        if(isset($_SESSION['error']))
                        {
                            echo $_SESSION['error'];
                        }
                    ?>
                </span>
            </form>
        </div>
    </div>
</body>
</html>