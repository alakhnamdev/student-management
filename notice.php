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
<style>
    #noticeboard {
        margin: 1em 1em 1em 0em;
        width: 93%;
        border-radius: 30px;
        padding: 1.5em 0.5em;
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.2) inset;
    }

    #notice {
        margin: 1em;
        background: #fff;
        padding:3em 1em;
        border-radius: 30px;
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.2);
    }

    #con {
        width: 100%;
        background: #f8f9fb;
        padding:1em 0.5em;
        border-radius: 10px;
        box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.2);
    }

    #content {
        font-family: poppins;
    }
</style>

<body id="main">
    <?php
    include("sidebar.php");
    ?>
    <div id="home" class="flex f-column playfair">
        <div id="noticeboard">
            <center>
                <h2 id="midheading" class="playfair">Notice Board</h2>
            </center>
            <?php
            include("connector.php");
            $qrynotice = "SELECT * FROM noticeboard";
            $getnotice = mysqli_query($connector, $qrynotice);
            $count = 0;
            while ($data = mysqli_fetch_assoc($getnotice)) {
                $count++;
                ?>
                <div id="notice">
                    <div id="con">
                        <label id="content">Posted By :- @</label>
                        <?php echo $data['username'] ?>
                    </div>
                    <div id="con">
                        <label id="content">Title :-</label>
                        <?php echo $data['ntitle'] ?>
                    </div>
                    <div id="con">
                        <label id="content">Notice :- </label><br>
                        <?php echo $data['notice'] ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>
<script src="mainscript.js"></script>

</html>