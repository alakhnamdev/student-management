<?php
session_start();
?>
<script>
    alert("<?php echo $_SESSION['username'];?> logged out successfully");
    window.open("index.php","_self");
</script>
<?php
session_unset();
session_destroy();
?>