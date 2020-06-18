<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="form">
            <p>Login</p>
            <form action="../php/testreg.php" method="post">

                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>


                <div class="rowbtn">
                  <button type="submit" class="btn btn-primary">Submit</button>
                
                  <a class="btn btn-primary" href="../regist/regist.php" role="button">Registration</a>
                </div>
              </form>
        </div>
        <div class="otstup">
                  
        </div>
    </main>
    
    <script defer src="../bootstrap-4.3.1-dist/jquery-3.5.1.min.js"></script>
    <script defer src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>