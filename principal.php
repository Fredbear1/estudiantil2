<?php

session_start();
if(isset($_SESSION['usuario']))
{
    require 'principal-vista.php';
}
else
{
    header ('location:login.php');
}


?>