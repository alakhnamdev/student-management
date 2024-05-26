<?php
//    include("connector.php");
//    if (isset($_POST['submit'])) {
//        $user = $_POST['username'];
//        $query = "SELECT * FROM atdupdate WHERE `username` = '$user'";
//        $runn = mysqli_query($connector,$query);
//        $data = mysqli_fetch_assoc($runn);
//        echo $data['username']." ",$data['atd']."<br>";
//    }
//    if (isset($_POST['submit'])) {
//        $user = $_POST['username'];
//        $atd = $_POST['atd'];
//        $qry = "INSERT INTO `atdupdate`(`username`,`atd`) VALUES ('$user','$atd')";
//        $run = mysqli_query($connector, $qry);
//        if ($run == true) {
//            echo "done";
//        }
//    }
    $entry = array();
    for($a=0;$a<4;$a++){
        $entry[$a] = $a;
    }
    for($a=0;$a<4;$a++){
        echo $entry[$a].',';
    }
?>