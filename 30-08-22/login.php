<?php
include_once 'connection.php';
$Select = "SELECT * FROM signup ";
$query = mysqli_query($conn, $Select);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php include_once 'navbar.php'; ?>
    <?php include_once 'navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 bg-danger offset-3 p-3">
                <form action="Function.php" method="POST">
                    <br>
                    <input type="email" placeholder="Enter Your Email" name="useremail" class="form-control">
                    <br>
                    <input type="password" placeholder="Enter Your Password" name="userpass" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-warning" name="formlogin">
                </form>
            </div>
        </div>
        
    </div>
</body>

</html>