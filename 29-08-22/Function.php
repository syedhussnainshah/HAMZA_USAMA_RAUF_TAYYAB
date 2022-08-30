<?php session_start();
include_once 'connection.php';
if (isset($_REQUEST['formsubmit'])) {
   echo $name = $_REQUEST['username'];
   echo $email = $_REQUEST['useremail'];
   echo $pass = $_REQUEST['userpass'];
   $filename = $_FILES['image']['name'];
   $path = $_FILES['image']['tmp_name'];
   $folder = 'img/' . $filename;
   if (move_uploaded_file($path, $folder)) {


      $insert = "INSERT INTO signup (name, email, pass, image) VALUES('$name','$email','$pass','$filename')";
      $query = mysqli_query($conn, $insert);
      if ($query) {
         header('location: login.php');
      } else {
         echo "No Insert";
      }
   } else {
      echo "Image Not move";
   }
}
if (isset($_REQUEST['formupdate'])) {
   echo $name = $_REQUEST['username'];
   echo $email = $_REQUEST['useremail'];
   echo $pass = $_REQUEST['userpass'];
   $id = $_REQUEST['user_id'];
   $update = "UPDATE signup SET `name`='$name', `email`='$email',`pass`='$pass' WHERE id='$id'";
   $query = mysqli_query($conn, $update);
   if ($query) {
      header('location: index.php');
   } else {
      echo  "No Update";
   }
}
if (isset($_REQUEST['formlogin'])) {
   echo $email = $_REQUEST['useremail'];
   echo $pass = $_REQUEST['userpass'];
   $select = "SELECT * FROM signup WHERE email='$email' AND pass='$pass'";
   $query = mysqli_query($conn, $select);
   if (mysqli_num_rows($query) > 0) {
      $row = mysqli_fetch_array($query);
      $_SESSION['userID'] = $row['id'];
      header('location: index.php');
   } else {
      echo "Not Login";
   }
}
