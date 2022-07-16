<! This page where the user's can logged out from the system >
<?php
session_start();
session_destroy();
//header ('location : ../index.html');
echo '
<script>
    alert("Logout Successfull!");
    window.location = "../index.html";
</script>';
?>