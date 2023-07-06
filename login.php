<?php

session_start();

if (isset($_session['uid'])) {
    header('location:admin/admindash.php');
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        #table {
            padding-top: 20px;
            position: relative;

            left: 650px;


        }
    </style>
</head>

<body>
    <h1 style="text-align:center;">Admin Login</h1>
    <form action="login.php" method="POST">

        <table id="table">

            <tr>
                <td>
                    Username:<input type="text" name="username" required>
                </td>


            </tr>


            <tr>
                <td>
                    Password:<input type="text" name="password" required>
                </td>


            </tr>

            <tr>
                <td style="position:relative; left:100px;">
                    <input type="submit" name="login" value="Login" required>
                </td>


            </tr>






        </table>





    </form>

</body>

</html>


<?php

include('dbcon.php');

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run = mysqli_query($conn, $query);

    $row = mysqli_num_rows($run);
    if ($row < 1) {
        ?>
        <script>

            alert("username or password not match");
            window.open('login.php', '_self');
        </script>

    <?php
    } else {

        $data = mysqli_fetch_assoc($run);

        $id = $data['id'];


        $_SESSION['uid'] = $id;
        header('location:admin/admindash.php');

    }


}





?>