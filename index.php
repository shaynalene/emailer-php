<?php
    session_start();
    include("database.php");

    mysqli_query($conn,$sql);

    mysqli_close($conn);
?>