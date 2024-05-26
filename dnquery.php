<?php
include("connector.php");
$id = $_REQUEST['sid'];
$qry = "DELETE FROM `noticeboard` WHERE `ID` = '$id'";
$run = mysqli_query($connector, $qry);
if ($run == true) {
    ?>
    <script type="text/javascript">
        alert("Notice deleted");
        window.open("dnotice.php", "_self");
    </script>
    <?php
}
?>