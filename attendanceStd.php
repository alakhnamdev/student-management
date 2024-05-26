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
    include("sidebarStd.php");
    ?>

    <div class="container mt-3">
        <h2>Attendance Section</h2>
        <?php
        include "connector.php";
        $user = $_SESSION['username'];
        $qry = "SELECT * FROM attendance WHERE `username` = '$user' ";
        $run = mysqli_query($connector, $qry);
        $count = 0;
        while ($data = mysqli_fetch_assoc($run)) {
            $count++;
            ?>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th id="tableheader">Code</th>
                        <th id="tableheader">Course</th>
                        <th id="tableheader">Sessions</th>
                        <th id="tableheader">Attended</th>
                        <th id="tableheader">Absent</th>
                        <th id="tableheader">Attendance%</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Maths</td>
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
                            echo number_format($atp,1)."%";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>English</td>
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
                            <?php $atp = ($data['attend2'] / $data['session2']) * 100;
                            echo number_format($atp,1)."%"; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Physics</td>
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
                            <?php $atp = ($data['attend3'] / $data['session3']) * 100;
                            echo number_format($atp,1)."%"; ?>
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>Chemistry</td>
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
                            <?php $atp = ($data['attend4'] / $data['session4']) * 100;
                            echo number_format($atp,1)."%"; ?>
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>005</td>
                        <td>Computer</td>
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
                            <?php $atp = ($data['attend5'] / $data['session5']) * 100;
                            echo number_format($atp,1)."%"; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
        }
        ?>
    </div>

</body>
<script src="mainscript.js"></script>

</html>