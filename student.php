<!DOCTYPE html>
<html lang="en">

<head>
    <title>ERP</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div id="home" class="flex f-column playfair">
        <div id="homecon">
            <h2 id="midheading">Welcome to Student Portal</h2>
            <p id="content">Some main services are as follow</p>
            <div id="services" class="flex flex-wrap">
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openProfile()">
                        <img id="imgcomp" src="files/profile.png" alt="">
                        <h2 id="subheading">Profile</h2>
                    </button>
                </div>
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openStdAcademic()">
                        <img id="imgcomp" src="files/exam.png" alt="">
                        <h2 id="subheading">Academics</h2>
                    </button>
                </div>
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openStdAttendance()">
                        <img id="imgcomp" src="files/calender.png" alt="">
                        <h2 id="subheading">Attendance</h2>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="mainscript.js"></script>
</html>