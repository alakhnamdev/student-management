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
    <div id="sdbar">
        <div id="sdlog" class="flex f-justify-null">
            <button type="button" id="hmbtn" onclick="menu()" class="flex f-justify-null"><img
                    src="files/menu-burger.png" alt="">
                <a href="main.php">Home</a>
            </button>
        </div>
        <div id="sdseg" class="flex f-column f-justify-null">
            <div id="sdcon" class="flex">
                <button type="button" onclick="openInsert()" class="flex f-justify-null">
                    <img src="files/insert.png" alt="">Insert</button>
            </div>
            <div id="sdcon" class="flex">
                <button type="button" onclick="openDelete()" class="flex f-justify-null">
                    <img src="files/delete.png" alt="">Delete</button>
            </div>
            <div id="sdcon" class="flex">
                <button type="button" onclick="openUpdate()" class="flex f-justify-null">
                    <img src="files/update.png" alt="">Update</button>
            </div>
            <div id="sdcon" class="flex">
                <button type="button" onclick="openAcademics()" class="flex f-justify-null">
                    <img src="files/exam.png" alt="">Academics</button>
            </div>
            <div id="sdcon" class="flex">
                <button type="button" onclick="openAttendance()" class="flex f-justify-null">
                    <img src="files/calender.png" alt="">Attendance</button>
            </div>
            <!-- <div id="sdcon" class="flex">
                <button type="button" onclick="darkmode()" class="flex f-justify-null">
                    <img src="files/menu.png" alt="">Darkmode</button>
            </div> -->
        </div>
        <div id="sdlogout" class="flex f-column f-justify-null">
            <div id="sdcon" class="flex">
                <button type="button" onclick="openAttendance()" class="flex f-justify-null">
                    <img src="files/logout.png" alt="">Logout
                </button>
            </div>
        </div>
    </div>
    <div id="home" class="flex f-column playfair">
        <h1 id="heading">Student ERP</h1>
    </div>
</body>
<script src="mainscript.js"></script>

</html>