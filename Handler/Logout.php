<?php 
    session_start();
    session_unset();
    session_destroy();
    echo "<script>alert('Logout Successfully');
    window.location.href='../Login.php'</script>";
?>