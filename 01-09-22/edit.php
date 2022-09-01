<?php
include_once 'connection.php';
$id = $_GET['id'];
echo $id;
$select = "SELECT * FROM signup WHERE id='$id'";
$query = mysqli_query($conn, $select);
$row =  mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 bg-danger offset-3 p-3">
                <form action="Function.php" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo $id;?>">
                    <input type="text" placeholder="Enter Your Name" name="username" class="form-control" value="<?php echo $row['name']?>">
                    <br>
                    <input type="email" placeholder="Enter Your Email" name="useremail" class="form-control" value="<?php echo $row['email']?>">
                    <br>
                    <input type="password" placeholder="Enter Your Password" name="userpass" class="form-control" value="<?php echo $row['pass']?>">
                    <br>
                    <input type="submit" class="btn btn-warning" name="formupdate">
                </form>
            </div>
        </div>
    </div>
</body>

</html>