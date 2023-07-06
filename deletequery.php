<?php
include ("connector.php");
$id = $_REQUEST['sid'];
$qry = "DELETE FROM `marks` WHERE `marks`.`username` = '$id'";
$run = mysqli_query($connector,$qry);
if($run==true){
    ?>
    <script type="text/javascript">
        alert("file deleted");
        window.open("delete.php","_self");
    </script>
    <?php
}
?>