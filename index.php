<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'links.php' ?>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <title>Login Form</title>
</head>

<body>

    <div class="container login-main">
        <h1 class="secret">Secret Diary</h1>
        <p>Store Your Thoughts permanently and Securely.</p>
        <p class="maintag" id="demo">Interested? Sign Up Now
            <script>
                function myfunction() {
                    document.getElementById('demo').innerHTML = "Interested? Sign Up Now";
                }

                function myfunction1() {
                    document.getElementById('demo').innerHTML = "Login Using your emailid and password.";
                }
            </script>

        </p>

        <form method="POST">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="emailid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="passwordid" class="form-control" id="exampleInputPassword1">

            <div class="mb-3 form-check checkme">
                <input type="checkbox" class="form-check-input me-2" id="exampleCheck1">
                <label class="form-check-label checkme" for="exampleCheck1">Stay Logged In</label>
            </div>
            <button type="submit" name="sign" id='btn1' class="btn sign mt-3" onclick="myfunction()">Sign Up</button>
            <br>
            <button href="#" class="btn login" name="log" id='btn2' onclick="myfunction1()">Login</button>
        </form>
        </div>
</body>

</html>

 <?php
include 'connection.php';
if (isset($_POST['sign'])) {
    $email = $_POST['emailid'];
    $password = $_POST['passwordid'];
    $insertquery = "insert into loginpage(email,password)
     values(' $email',' $password')";
    $res = mysqli_query($con, $insertquery);
    if ($res) {
?>
        <script>
            alert('data inserted sucessfully');
            
        </script>
        <script>
          location.replace('home.php');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('data  not inserted');
        </script>
        
    <?php
    }
} elseif (isset($_POST['log'])) {
    $email = $_POST['emailid'];
    $password = $_POST['passwordid'];
    $insertquery = "insert into loginpage(email,password)
     values(' $email',' $password')";
    $res = mysqli_query($con, $insertquery);
    if ($res) {
    ?>
        <script>
            alert('data inserted sucessfully');
        </script>
        <script>
          location.replace('home.php');
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