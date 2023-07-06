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
    ?>

    <div class="container mt-3">
        <h2>Attendance Section</h2>
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
                    <td>100</td>
                    <td>100</td>
                    <td>0</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>English</td>
                    <td>100</td>
                    <td>100</td>
                    <td>0</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Physics</td>
                    <td>100</td>
                    <td>100</td>
                    <td>0</td>
                    <td>100</td>
                </tr>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Chemistry</td>
                    <td>100</td>
                    <td>100</td>
                    <td>0</td>
                    <td>100</td>
                </tr>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Computer</td>
                    <td>100</td>
                    <td>100</td>
                    <td>0</td>
                    <td>100</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
<script src="mainscript.js"></script>

</html>