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
            <h2 id="midheading" class="playfair">User Section</h2>
            <div id="services" class="flex f-justify-null flex-wrap viewsection">
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openCUser()">
                        <img id="imgcomp" src="files/createuser.png" alt="">
                        <h2 id="subheading">Create User</h2>
                    </button>
                </div>
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openAUser()">
                        <img id="imgcomp" src="files/deleteuser.png" alt="">
                        <h2 id="subheading">Alter Details</h2>
                    </button>
                </div>
                <div id="components" class="flex f-column">
                    <button id="btncomp" onclick="openDUser()">
                        <img id="imgcomp" src="files/updateuser.png" alt="">
                        <h2 id="subheading">Delete User</h2>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="mainscript.js"></script>

</html>