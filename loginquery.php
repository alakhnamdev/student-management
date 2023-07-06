<?php
    include("connector.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $qry = "SELECT * FROM logindetails";
    $run = mysqli_query($connector,$qry);
    $row = mysqli_num_rows($run);
    $count=0;
    while ($data = mysqli_fetch_assoc($run)) {
        $count++;
        if(($username == $data['username']) && ($password == $data['password'])){
            ?>
            <script>
                alert("Welcome <?php echo $username;?>");
                window.open("main.php","_self");
            </script>
            <?php
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            break;
        }
    }
    if($count == $row){
        ?>
        <script>
            alert("Wrong Password");
            window.open("index.php","_self");
        </script>
        <?php
    }
?>