
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php' ?>
    <link rel="stylesheet" href="css/style1.css">
    <script src="js/jquery.js"></script>
</head>

<body>
    <div class="container-fluid header">

        <h1>
            Select diary
        </h1>
        <form action="" method="POST">
            <button class="button1" name="btn2"><a href="logout.php">Logout</a></button>
            <!-- <textarea id="diary" name="diary" class="form-control"></textarea> -->
            <textarea id="diary" name="diarys" class="form-control"></textarea>
        </form>

    </div>

</body>

</html>

<?php
include 'connection.php';
if (isset($_POST['btn2'])) {
     $diary=$_POST['diarys'];
    $insertquery = "insert into loginpage('diary')
     values('$diary')";
    $res = mysqli_query($con, $insertquery);
    if ($res) {
?>
        <script>
            alert('data inserted sucessfully');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('data  not inserted');
        </script>

<?php
    }
}
?>