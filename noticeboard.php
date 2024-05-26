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
    #notice {
        height: 10em;
        max-height: 10em;
        min-height: 10em;
        box-sizing: border-box;
    }

    #noticeboard {
        margin: 1em 1em 1em 0em;
        width: 93%;
        border-radius: 30px;
        padding: 1.5em 2em;
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.2) inset;
    }

    #nmsg {
        font-family: playfair display;
    }

    #postbtn,
    #username,
    #title,
    #notice {
        font-family: poppins;
        font-weight: 500;
    }

    #username,
    #title,
    #notice {
        box-shadow: none;
    }

    #username:hover,
    #title:hover,
    #notice:hover {
        box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.2);
    }

    .textarea {
        resize: none;
        height: 200px;
        transition: all 0.5s;
        border: 2px solid #DDDDDD;
        width: 100% !important;
    }

    .textarea_danger {
        border: 2px solid red !important;
    }

    .textarea:focus {
        box-shadow: none;
        outline: none;
        border: 2px solid blue;
    }
</style>

<body id="main">
    <?php
    include("sidebar.php");
    ?>
    <?php
    include("connector.php");
    if (isset($_POST['postnotice'])) {
        $user = $_POST['username'];
        if ($user == "admin") {
            $ntitle = $_POST['ntitle'];
            $notice = $_POST['notice'];
            $qrynotice = "INSERT INTO `noticeboard`(`username`,`ntitle`,`notice`)VALUES('$user','$ntitle','$notice')";
            $postnotice = mysqli_query($connector, $qrynotice);
            ?>
            <script>
                alert("Message Posted to the NoticeBoard");
                window.open("notice.php","_self");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Only Admin is allowed to post");
            </script>
            <?php
        }
    }
    ?>
    <div id="home" class="flex f-column playfair">
        <div id="noticeboard">
            <center>
                <h2 id="midheading" class="playfair">Notice Board</h2>
            </center>
            <form action="noticeboard.php" method="post">
                <div class="form-floating mb-4 mt-4">
                    <input type="text" class="form-control" id="username" placeholder="username" name="username">
                    <label for="username" class="">Username</label>
                </div>
                <div class="form-floating mb-4 mt-4">
                    <input type="text" class="form-control" id="title" placeholder="title" name="ntitle">
                    <label for="ntitle" class="">Title</label>
                </div>
                <div class="form-floating mb-4 mt-4">
                    <div id="nmsg" class="playfair">Write Message Here.</div>
                    <textarea id="notice" onkeyup="validate()" class="form-control textarea" placeholder="Type Here..."
                        name="notice"></textarea>
                    <span id="words_count" class="d-none">Words - <span id="textcount"></span>/2000</span>
                </div>
                <button type="submit" name="postnotice" id="postbtn" class="btn btn-dark">Post Notice</button>
            </form>
        </div>
    </div>
</body>
<script src="mainscript.js"></script>
<script>
    function validate() {
        const areatextarea = document.querySelector("#notice");
        const areatext = document.querySelector("#notice").value.length;
        const textcount = document.querySelector("#textcount");
        const wordcount = document.querySelector("#words_count");
        textcount.innerHTML = areatext;
        if (areatext > 2000) {
            textcount.classList.add("text-danger");
            areatextarea.classList.add("textarea_danger");
        } else {
            textcount.classList.remove("text-danger");
            areatextarea.classList.remove("textarea_danger");
        }

        if (areatext < 1) {
            wordcount.classList.add("d-none");
        } else {
            wordcount.classList.remove("d-none");
        }
    }
</script>

</html>