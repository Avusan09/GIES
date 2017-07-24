<?php

if(!isset($_SESSIONS['user_id']) || empty($_SESSION['user_id']))
{
    header("Location://login.php");
}

elseif(($_SESSION['user_name']))
{
    header("Location://index.php");
}

?>