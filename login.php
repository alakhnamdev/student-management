<!DOCTYPE html>
<html lang="en">

<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="mainstyle.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Poppins:wght@300;400;500&display=swap"
        rel="stylesheet" />
</head>
<body id="main">
    <div id="login" class="rounded-5">
        <div id="log" class="container rounded-5 d-flex flex-column justify-content-center align-items-center">
            <div id="loghead" class="flex flex-column">
                <img src="logo.png" alt="" id="logo" class="rounded-pill" srcset="">
                <h1 id="h1" class="m-2">Student</h1>
            </div>
            <form action="loginquery.php" method="post">
                <div class="form-floating mb-4 mt-4">
                    <input type="text" class="form-control" id="email" placeholder="Enter username" name="username">
                    <label for="email" class="">Username</label>
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