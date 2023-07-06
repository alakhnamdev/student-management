<!DOCTYPE html>
<html lang="en">

<head>
    <title>Updation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="mainstyle.css">
</head>

<body id="main">
    <?php
    include("sidebar.php");
    include("connector.php");
    $user = $_REQUEST['id'];
    if (isset($_POST['submit'])) {
        $user = $_REQUEST['id'];
        $MATHS = $_POST['MATHS'];
        $ENGLISH = $_POST['ENGLISH'];
        $PHYSICS = $_POST['PHYSICS'];
        $CHEMISTRY = $_POST['CHEMISTRY'];
        $COMPUTER = $_POST['COMPUTER'];
        $qry = "UPDATE `marks` SET `maths`='$MATHS',`english`='$ENGLISH',`physics`='$PHYSICS',`chemistry`='$CHEMISTRY',`computer`='$COMPUTER' WHERE `username` = '$user' ";
        $run = mysqli_query($connector, $qry);
        if ($run == true) {
    ?>
            <script>
                alert("updated succesfully");
                window.open("update.php","_self");
            </script>
    <?php
        }
    }
    ?>

    <?php
    include("connector.php");
    $query = "SELECT `username`, `maths`, `english`, `physics`, `chemistry`, `computer` FROM `marks` WHERE `username` = '$user'";
    $result = mysqli_query($connector, $query);
    $count = 0;
    while ($data = mysqli_fetch_assoc($result)) {
        $count++;
    ?>

    <div class="container mt-3">
        <h2>Updation</h2>
        <form action="updatequery.php?id=<?php echo $data['username'];?>" method="post">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td colspan="4" id="midheading">Student Id :- <?php echo $data['username']; ?></td>
                    </tr>
                    <tr>
                        <th id="tableheader">Code</th>
                        <th id="tableheader">Subject</th>
                        <th id="tableheader">Marks</th>
                        <th id="tableheader">Update</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Maths</td>
                        <td><?php echo $data['maths']; ?></td>
                        <td><input type="text" name="MATHS" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>English</td>
                        <td><?php echo $data['english']; ?></td>
                        <td><input type="text" name="ENGLISH" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Physics</td>
                        <td><?php echo $data['physics']; ?></td>
                        <td><input type="text" name="PHYSICS" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Chemistry</td>
                        <td><?php echo $data['chemistry']; ?></td>
                        <td><input type="text" name="CHEMISTRY" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Computer</td>
                        <td><?php echo $data['computer']; ?></td>
                        <td><input type="text" name="COMPUTER" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <center><button name="submit">Alter</button></center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <?php
    }
    ?>
</body>
<script src="mainscript.js"></script>

</html>