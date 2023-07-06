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
    include("sidebar.php")
    ?>

    <div class="container mt-3">
        <h2>Academics</h2>
        <p></p>
    <?php
        include "connector.php";
        $qry = "SELECT * FROM marks";
        $run = mysqli_query($connector,$qry);
        $count = 0;
        while($data = mysqli_fetch_assoc($run)){
           $count++;
    ?>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <td colspan="3" id="midheading">Student Id :- <?php echo $data['username'];?></td>
                </tr>
                <tr>
                    <th id="tableheader">Code</th>
                    <th id="tableheader">Subject</th>
                    <th id="tableheader">Marks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td >001</td>
                    <td>Maths</td>
                    <td><?php echo $data['maths'];?></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>English</td>
                    <td><?php echo $data['english'];?></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Physics</td>
                    <td><?php echo $data['physics'];?></td>
                </tr>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Chemistry</td>
                    <td><?php echo $data['chemistry'];?></td>
                </tr>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Computer</td>
                    <td><?php echo $data['computer'];?></td>
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