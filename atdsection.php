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
    include("sidebar.php");
    ?>
    <div id="home" class="flex f-column playfair">
        <div id="homecon">
            <h2 id="midheading" class="playfair">Attendance</h2>
            <h5 id="midheading">View Section</h5>
            <div id="services" class="flex f-justify-null flex-wrap viewsection">
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openStudent()">
                        <img id="imgcomp" src="files/student.png" alt="">
                        <h2 id="subheading">By Students</h2>
                    </button>
                </div>
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openSubject()">
                        <img id="imgcomp" src="files/subject.png" alt="">
                        <h2 id="subheading">By Courses</h2>
                    </button>
                </div>
            </div>
            <h5 id="midheading">Update Section</h5>
            <div id="services" class="flex f-justify-null flex-wrap">
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openMath()">
                        <img id="imgcomp" src="files/math.png" alt="">
                        <h2 id="subheading">Maths</h2>
                    </button>
                </div>
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openEng()">
                        <img id="imgcomp" src="files/eng.png" alt="">
                        <h2 id="subheading">English</h2>
                    </button>
                </div>
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openPhy()">
                        <img id="imgcomp" src="files/phy.png" alt="">
                        <h2 id="subheading">Physics</h2>
                    </button>
                </div>
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openChem()">
                        <img id="imgcomp" src="files/chem.png" alt="">
                        <h2 id="subheading">Chemistry</h2>
                    </button>
                </div>
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openCom()">
                        <img id="imgcomp" src="files/com.png" alt="">
                        <h2 id="subheading">Computer</h2>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="mainscript.js"></script>

</html>