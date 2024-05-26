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
    <div id="maths" class="container mt-3">
        <h1 class="midheading">Attendance Section</h1><br>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td colspan="5">
                        <h3 id="midheading"> Course :- Maths</h3>
                    </td>
                </tr>
                <tr>
                    <th id="tableheader">username</th>
                    <th id="tableheader">Sessions</th>
                    <th id="tableheader">Attended</th>
                    <th id="tableheader">Absent</th>
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
                            <?php echo $data['session1'] - $data['attend1']; ?>
                        </td>
                        <td>
                            <?php
                            $atp = ($data['attend1'] / $data['session1']) * 100;
                            echo number_format($atp, 1) . "%";
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table><br>
    </div>
    <div id="maths" class="container mt-3">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td colspan="5">
                        <h3 id="midheading"> Course :- English</h3>
                    </td>
                </tr>
                <tr>
                    <th id="tableheader">username</th>
                    <th id="tableheader">Sessions</th>
                    <th id="tableheader">Attended</th>
                    <th id="tableheader">Absent</th>
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
                            <?php echo $data['session2']; ?>
                        </td>
                        <td>
                            <?php echo $data['attend2']; ?>
                        </td>
                        <td>
                            <?php echo $data['session2'] - $data['attend2']; ?>
                        </td>
                        <td>
                            <?php
                            $atp = ($data['attend2'] / $data['session2']) * 100;
                            echo number_format($atp, 1) . "%";
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table><br>
    </div>
    <div id="maths" class="container mt-3">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td colspan="5">
                        <h3 id="midheading"> Course :- Physics</h3>
                    </td>
                </tr>
                <tr>
                    <th id="tableheader">username</th>
                    <th id="tableheader">Sessions</th>
                    <th id="tableheader">Attended</th>
                    <th id="tableheader">Absent</th>
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
                            <?php echo $data['session3']; ?>
                        </td>
                        <td>
                            <?php echo $data['attend3']; ?>
                        </td>
                        <td>
                            <?php echo $data['session3'] - $data['attend3']; ?>
                        </td>
                        <td>
                            <?php
                            $atp = ($data['attend3'] / $data['session3']) * 100;
                            echo number_format($atp, 1) . "%";
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table><br>
    </div>
    <div id="maths" class="container mt-3">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td colspan="5">
                        <h3 id="midheading"> Course :- Chemistry</h3>
                    </td>
                </tr>
                <tr>
                    <th id="tableheader">username</th>
                    <th id="tableheader">Sessions</th>
                    <th id="tableheader">Attended</th>
                    <th id="tableheader">Absent</th>
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
                            <?php echo $data['session4']; ?>
                        </td>
                        <td>
                            <?php echo $data['attend4']; ?>
                        </td>
                        <td>
                            <?php echo $data['session4'] - $data['attend4']; ?>
                        </td>
                        <td>
                            <?php
                            $atp = ($data['attend4'] / $data['session4']) * 100;
                            echo number_format($atp, 1) . "%";
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table><br>
    </div>
    <div id="maths" class="container mt-3">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td colspan="5">
                        <h3 id="midheading"> Course :- Computer</h3>
                    </td>
                </tr>
                <tr>
                    <th id="tableheader">username</th>
                    <th id="tableheader">Sessions</th>
                    <th id="tableheader">Attended</th>
                    <th id="tableheader">Absent</th>
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
                            <?php echo $data['session5']; ?>
                        </td>
                        <td>
                            <?php echo $data['attend5']; ?>
                        </td>
                        <td>
                            <?php echo $data['session5'] - $data['attend5']; ?>
                        </td>
                        <td>
                            <?php
                            $atp = ($data['attend5'] / $data['session5']) * 100;
                            echo number_format($atp, 1) . "%";
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table><br>
    </div>

</body>
<script src="mainscript.js"></script>

</html>