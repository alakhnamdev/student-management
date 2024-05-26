<!DOCTYPE html>
<html lang="en">

<head>
    <title>Attendance</title>
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
    ?>
    <?php
    include("connector.php");
    if (isset($_POST['submit'])) {
        $users = $_POST['users'];
        foreach ($users as $username) {
            $query = "SELECT * FROM attendance WHERE `username` = '$username'";
            $runn = mysqli_query($connector, $query);
            $data = mysqli_fetch_assoc($runn);
            $atd = ($data['attend1'] + 1);
            $qry = "UPDATE `attendance` SET `attend1`='$atd' WHERE `username` = '$username'";
            $run = mysqli_query($connector, $qry);
        }
    }
    if (isset($_POST['submit'])) {
        $query = "SELECT * FROM attendance";
        $runn = mysqli_query($connector, $query);
        $data = mysqli_fetch_assoc($runn);
        $session = ($data['session1'] + 1);
        $qry = "UPDATE `attendance` SET `session1`='$session'";
        $run = mysqli_query($connector, $qry);
    }
    ?>
    <div class="container mt-3">
        <h1>Update Attendance</h1><br>
        <form action="atdupdate.php" method="post">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <td colspan="4">
                            <h3 id="midheading">Maths</h3>
                        </td>
                    </tr>
                    <tr>
                        <th id="tableheader">username</th>
                        <th id="tableheader">Sessions</th>
                        <th id="tableheader">Attended</th>
                        <th id="tableheader">Attendance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connector.php";
                    $qry = "SELECT * FROM attendance";
                    $run = mysqli_query($connector, $qry);
                    $count = 0;
                    while ($data = mysqli_fetch_assoc($run)) {
                        $count++;
                        ?>
                        <tr>
                            <td>
                                <?php echo $data['username']; ?>
                            </td>
                            <td>
                                <?php echo $data['session1']; ?>
                            </td>
                            <td>
                                <?php echo $data['attend1']; ?>
                            </td>
                            <td>
                                <input type="checkbox" name="users[]" value="<?php echo $data['username']; ?>">
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-dark" name="submit">Update Attendance</button>
        </form>
    </div>

</body>
<script src="mainscript.js"></script>

</html>