<!DOCTYPE html>
<html lang="en">

<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet" />
</head>
<style>
    #main {
        font-family: "poppins", "playfair display";
        background-color: #f8f9fb;
    }

    #login {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 30em;
        width: 22em;
    }

    #log {
        background-color: white;
    }

    #email,
    #pwd {
        width: 18em;
        box-shadow: none;
        border:1px solid grey;
        height: 3.5em;
    }

    #log {
        height: 100%;
        width: 100%;
        box-shadow: 0 0 10px 2px rgba(158, 158, 158, 0.25);
    }

    #loginbtn {
        width: 100%;
        height: 3em;
    }

    h1 {
        font-family: playfair display;
        font-size: 4em;
        font-weight: 900;
    }

    #logo {
        height: 6em;
        width: 6em;
    }

    #cbox{
        box-shadow: none;
    }
</style>
<body id="main">
    <div id="login" class="rounded-5">
        <div id="log" class="container rounded-5 d-flex flex-column justify-content-center align-items-center">
            <!-- <img src="logo.png" alt="" id="logo" class="rounded-pill border" srcset=""> -->
            <h1 class="m-2">Login</h1>
            <form action="loginquery.php" method="post">
                <div class="form-floating mb-4 mt-4">
                    <input type="text" class="form-control" id="email" placeholder="Enter email" name="username">
                    <label for="email" class="">Email</label>
                </div>
                <div class="form-floating mt-4 mb-4">
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    <label for="pwd">Password</label>
                </div>
                <div class="form-check mb-4">
                    <label class="form-check-label">
                        <input class="form-check-input" id="cbox" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <center><button type="submit" id="loginbtn" class="btn btn-dark">Login</button></center>
            </form>
        </div>
    </div>
</body>

</html>