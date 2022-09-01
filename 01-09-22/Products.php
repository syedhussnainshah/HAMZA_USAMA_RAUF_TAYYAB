<?php
session_start();
// session_destroy();
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-3 bg-warning p-3">
                <form action="Function.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="product_name" class="form-control" placeholder="Enter product Name">
                    <br>
                    <input type="number" name="product_price" class="form-control" placeholder="Enetr Product price">
                    <br>
                    <input type="file" name="product_image" class="form-control">
                    <br>
                    <button type="submit" name="addproduct" class="btn btn-primary">ADD</button>
                </form>
            </div>
        </div>
        <div class="row">
            <?php
            include_once 'connection.php';
            $select = "SELECT * FROM products";
            $query = mysqli_query($conn, $select);
            while ($row = mysqli_fetch_array($query)) {

            ?>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="img/<?php echo $row['product_image'] ?>" width="100%" alt="">
                        </div>
                        <div class="card-footer">
                            <h5>product Name: <?php echo $row['product_name'] ?> </h5>
                            <h5>product Price: <?php echo $row['product_price'] ?> </h5>
                            <form action="Function.php" method="POST">
                                <input type="hidden" name="pro_id" value="<?php echo $row['id'] ?>">
                                <button type="submit" class="btn btn-warning" name="addtocart">ADD To Cart</button>
                            </form>
                        </div>
                    </div>




                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Action</th>
                    </tr>


                    <?php
                    if (empty($_SESSION['mycart'])) {
                        echo "Emty";
                    } else {
                        foreach ($_SESSION['mycart'] as $product) {
                            foreach ($product as $key => $value) {
                                if ($key == 'id') {
                                    $product_id = $value;
                                }
                                if ($key == 'qty') {
                                    $qty = $value;
                                }
                            }
                            $select = "SELECT * FROM products WHERE id ='$product_id'";
                            $query = mysqli_query($conn, $select);
                            while ($row = mysqli_fetch_array($query)) {
                                echo '
<tr>
<td><img src="img/' . $row['product_image'] . '" width="70px"/></td>
<td>' . $row['product_name'] . '</td>
<td>' . $row['product_price'] . '</td>
<td>' . $qty . '</td>
<td>' . $row['product_price'] * $qty . '</td>
<td><button class="btn btn-danger">Remove</button></td>

</tr>
                            ';
                            }
                        }
                    }
                    ?>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
</body>

</html>