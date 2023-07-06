<!DOCTYPE html>
<html lang="en">

<head>
    <title>Academics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="mainstyle.css">
</head>
<body id="main">
    <?php
    include("sidebar.php");
    include "connector.php";
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $MATHS = $_POST['MATHS'];
        $ENGLISH = $_POST['ENGLISH'];
        $PHYSICS = $_POST['PHYSICS'];
        $CHEMISTRY = $_POST['CHEMISTRY'];
        $COMPUTER = $_POST['COMPUTER'];
        $qry = "INSERT INTO `marks`(`username`, `maths`, `english`, `physics`, `chemistry`, `computer`) VALUES ('$username','$MATHS','$ENGLISH','$PHYSICS','$CHEMISTRY','$COMPUTER')";
        $run = mysqli_query($connector, $qry);
        if ($run == true) {
            ?>
            <script>
                alert("inserted succesfully");
            </script>
            <?php
        }
    }
    ?>

    <div class="container mt-3">
        <h2>Insertion</h2>
        <form action="insert.php" method="post">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td colspan="3" id="midheading">Student Id :- <input type="text" name="username"
                                placeholder="enter username"></td>
                    </tr>
                    <tr>
                        <th id="tableheader">Code</th>
                        <th id="tableheader">Subject</th>
                        <th id="tableheader">Marks</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Maths</td>
                        <td><input type="text" name="MATHS" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>English</td>
                        <td><input type="text" name="ENGLISH" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Physics</td>
                        <td><input type="text" name="PHYSICS" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Chemistry</td>
                        <td><input type="text" name="CHEMISTRY" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Computer</td>
                        <td><input type="text" name="COMPUTER" placeholder="enter marks"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <center><button name="submit">submit</button></center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</body>
<script src="mainscript.js"></script>

</html>