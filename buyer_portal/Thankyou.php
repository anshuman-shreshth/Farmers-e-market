<?php
    session_start();
    header("Refresh: 3; url=buyer_portal.php");
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        *
        {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }
        body,html
        {
            height: 100%;
            background: teal;
        }

        .main-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #00FF26;
            font-family: 'Sacramento', cursive;
            font-weight: 100;

        }
        .banner{
            margin-top:50px;
        }
        .loading-container{
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: center;
            height: 100px;
        }

        .lds-roller {
        display: inline-block;
        position: relative;
        width: 64px;
        height: 64px;
        }
        .lds-roller div {
        animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        transform-origin: 32px 32px;
        }
        .lds-roller div:after {
        content: " ";
        display: block;
        position: absolute;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #dfc;
        margin: -3px 0 0 -3px;
        }
        .lds-roller div:nth-child(1) {
        animation-delay: -0.036s;
        }
        .lds-roller div:nth-child(1):after {
        top: 50px;
        left: 50px;
        }
        .lds-roller div:nth-child(2) {
        animation-delay: -0.072s;
        }
        .lds-roller div:nth-child(2):after {
        top: 54px;
        left: 45px;
        }
        .lds-roller div:nth-child(3) {
        animation-delay: -0.108s;
        }
        .lds-roller div:nth-child(3):after {
        top: 57px;
        left: 39px;
        }
        .lds-roller div:nth-child(4) {
        animation-delay: -0.144s;
        }
        .lds-roller div:nth-child(4):after {
        top: 58px;
        left: 32px;
        }
        .lds-roller div:nth-child(5) {
        animation-delay: -0.18s;
        }
        .lds-roller div:nth-child(5):after {
        top: 57px;
        left: 25px;
        }
        .lds-roller div:nth-child(6) {
        animation-delay: -0.216s;
        }
        .lds-roller div:nth-child(6):after {
        top: 54px;
        left: 19px;
        }
        .lds-roller div:nth-child(7) {
        animation-delay: -0.252s;
        }
        .lds-roller div:nth-child(7):after {
        top: 50px;
        left: 14px;
        }
        .lds-roller div:nth-child(8) {
        animation-delay: -0.288s;
        }
        .lds-roller div:nth-child(8):after {
        top: 45px;
        left: 10px;
        }
        @keyframes lds-roller {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
        }

    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Roboto|Sacramento" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/logout.css">
</head>
<body>
    <div class='main-container'>
        <div class='banner'>
            <h1>You order is made,Please wait</h1>
        </div>
        <div class='loading-container'>
            <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
   
</body>
</html>