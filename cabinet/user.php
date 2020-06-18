<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header class="container-fluid">
      <div class="Sitename">
        <img src="../pictures/logo.png" alt="logo">
        
        <?php
        echo "<h1> Hello $login </h1>";
        ?>

      </div>
      <div class="menu">

        <a href="http://" target="_self" rel="noopener noreferrer">About us</a>
        <a href="../login/login.php" target="_self" rel="noopener noreferrer">Login</a>
      </div>  
        
    </header>

    <main class="container-fluid">
        <div class="saloon">
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae mollitia consequatur sint aliquid corrupti corporis nam labore doloremque impedit. Voluptas!</h2>
        </div>
    </main>
    <div class="cowboys2">
      <div class="cowtext">Lorem ipsum dolor sit amet.</div>
      <div class="cowboys">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat maxime perspiciatis dignissimos cupiditate minima omnis! Pariatur aperiam exercitationem itaque nobis autem animi facere eaque odit nisi sint voluptate recusandae cum soluta voluptatibus veniam sit, id incidunt aliquam iusto mollitia minima hic omnis? Animi ipsa veritatis laborum quos rerum officiis minima.</p>
        <div class="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../pictures/cowboy1.jpg" class="d-block w-100" alt="...">
          </div>
          
          <div class="carousel-item">
            <img src="../pictures/cowboy3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
      </div>
      </div>
    </div>
    <div class="fourtext">
      <div class="cowtext">
        Lorem ipsum dolor sit amet consectetur adipisicing.
      </div>
      <div class="four">
        <div class="navbtn">
          <p><a href="">Lorem, ipsum.</a></p>
          <a><img src="../pictures/txtpic1.jpg" alt="txtpic"></a>
        </div>
        
          <div class="navbtn">
            <p><a href="">Lorem, ipsum.</a></p>
            <a><img src="../pictures/txtpic2.jpg" alt="txtpic"></a>
          </div>
                
          <div class="navbtn">
            <p><a href="">Lorem, ipsum.</a></p>
            <a><img src="../pictures/txtpic3.jpg" alt="txtpic"></a>
          </div>
                
          <div class="navbtn">
            <p><a href="">Lorem, ipsum.</a></p>
            <a><img src="../pictures/txtpic4.jpg" alt="txtpic"></a>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="otstup">

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