<?php
/* * * * * * * * * * अ ति थि  दे वो  भ व ! * * * * * * * * * * * * * *
* This Visitor Panel is free to use & strictly 𝙉𝙊𝙏 𝙁𝙊𝙍 𝙎𝘼𝙇𝙀 
* You can use it for free as a base for your any landing pages.  
* For Bigsec Community with <3 | https://t.me/bigseccommunity    
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit();
}

unset($_SESSION['login']);
session_destroy();
header('Location: login.php');
