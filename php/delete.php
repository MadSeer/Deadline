<?php
require_once 'database.php';
if(isset($_GET['id']))
{   
    $link = mysqli_connect("127.0.0.1","root","","web-app-database") 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_GET['id']);
     
    $query ="DELETE FROM users WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 

    require('../cabinet/admin.php');

}
?>