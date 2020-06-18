<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header class="container-fluid">
      <div class="Sitename">
        <img src="../pictures/logo.png" alt="logo">
        
        <?php
        echo "<h1> Hello Admin </h1>";
        ?>

      </div>
      <div class="menu">

        <a href="http://" target="_self" rel="noopener noreferrer">About us</a>
        <a href="../login/login.php" target="_self" rel="noopener noreferrer">Login</a>
      </div>  
        
    </header>

    <main class="container-fluid">
        <div class="saloon">
        
        <div class="remove">

        <p>Delete/add user</p>
            <form action="../php/delete.php" method="get">

                <div class="form-group">
                  <label for="exampleInputPassword1">id</label>
                  <input name="id" type="text" class="form-control" id="exampleInputPassword1">
                </div>
      
                  <button type="submit" class="btn btn-primary">Delete</button>
                
              </form>

        </div>
        
        <table class="tableadmin">
 
        <?php

echo "<link rel='stylesheet' href='../css/admin.css'>";


require_once 'database.php'; // подключаем скрипт
 
$link = mysqli_connect("127.0.0.1","root","","web-app-database") 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM users";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>Login</th><th>Password</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>

         </table>

        </div>
    </main>
    

      </div>
      <div class="rowfooter">
        <div class="columnfooter">
          <h5>Lorem</h5>
          <ul>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
          </ul>
        </div>
        <div class="columnfooter">
          <h5>Lorem</h5>
          <ul>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
          </ul>
        </div><div class="columnfooter">
          <h5>Lorem</h5>
          <ul>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
          </ul>
        </div><div class="columnfooter">
          <h5>Lorem</h5>
          <ul>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
            <li><a href="">Lorem, ipsum.</a></li>
          </ul>
        </div>
      </div>
    </footer>
    

    <script defer src="./bootstrap-4.3.1-dist/jquery-3.5.1.min.js"></script>
    <script defer src="./bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>