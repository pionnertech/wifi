<?php

session_start();

    $_SESSION["TxtUser"] = "";
    $_SESSION["TxtPass"] = "";
    $_SESSION["TxtFacility"] = "";
    $_SESSION["TxtCode"] = "";

    session_destroy();

echo "<script language='javascript'>window.location='../access.php'</script>";


 ?>