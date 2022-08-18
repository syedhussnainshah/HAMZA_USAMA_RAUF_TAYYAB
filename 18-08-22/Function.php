<?php
include_once 'connection.php';
if (isset($_REQUEST['formsubmit'])) {
   echo $name = $_REQUEST['username'];
   echo $email = $_REQUEST['useremail'];
   echo $pass = $_REQUEST['userpass'];
   $insert = "INSERT INTO signup (name, email, pass) VALUES('$name','$email','$pass')";
   $query = mysqli_query($conn, $insert);
   if ($query) {
      echo "Insert";
   } else {
      echo "No Insert";
   }
}
