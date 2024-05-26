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
<style>
    form {
        margin: 4em;
    }

    table {
        width: 80%;
    }
</style>

<body id="main">
    <?php
    include("connector.php");
    if (isset($_POST['submit'])) {
        $users = $_POST['users'];
        foreach ($users as $username) {
            $query = "SELECT * FROM atdupdate WHERE `username` = '$username'";
            $runn = mysqli_query($connector, $query);
            $data = mysqli_fetch_assoc($runn);
            $atd = ($data['atd'] + 1);
            $qry = "UPDATE `atdupdate` SET `atd`='$atd' WHERE `username` = '$username'";
            $run = mysqli_query($connector, $qry);
        }
    }
    ?>
    <h1>Update attendance</h1>

    <form action="attendanceUpdate.php" method="post">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th id="tableheader">User</th>
                <th id="tableheader">Attendance</th>
                <th id="tableheader">Update</th>
            </tr>
            <?php
            include "connector.php";
            $qry = "SELECT * FROM atdupdate";
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
                        <?php echo $data['atd']; ?>
                    </td>
                    <td>
                        <input type="checkbox" name="users[]" value="<?php echo $data['username']; ?>">
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <button type="submit" class="btn btn-dark" name="submit">submit</button>
    </form>
</body>
<script src="mainscript.js"></script>

</html>