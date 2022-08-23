<?php
include_once 'connection.php';
if (isset($_REQUEST['formsubmit'])) {
   echo $name = $_REQUEST['username'];
   echo $email = $_REQUEST['useremail'];
   echo $pass = $_REQUEST['userpass'];
   $insert = "INSERT INTO signup (name, email, pass) VALUES('$name','$email','$pass')";
   $query = mysqli_query($conn, $insert);
   if ($query) {
      header('location: index.php');
   } else {
      echo "No Insert";
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
