<?php

$username="root";
$password="";
$server='localhost';
$db='checkform';

// connect to databse check kr rha hai 
$con= mysqli_connect($server,$username,$password,$db);
if($con)
{
    // echo "Connection Sucessful";
    ?>
  <script>
      alert('connection successful');
  </script>
 
<?php
}
else
{
    echo "No connection";
}

?>