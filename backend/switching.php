<?php
session_start();

if(isset($_POST["U"]))
{

$datos = mysqli_connect("db557693269.db.1and1.com", "dbo557693269", "ToRoVaCa?256", "db557693269");


$query = "SELECT ADM_ID, ADM_USR, ADM_PASS, ADM_NAME , ADM_SURNAME, ADM_FAC_CODE FROM ADMIN WHERE (ADM_USR = '" . $_POST["U"] . "' AND ADM_PASS = '" . $_POST['P'] . "' AND ADM_LOCK_STATUS = 1)";

$outcome = mysqli_fetch_assoc(mysqli_query($datos, $query));

if (!$outcome)

{
    $_SESSION["TxtUser"] = "";
    $_SESSION["TxtPass"] = "";
    $_SESSION["TxtFacility"] = "";
    $_SESSION["TxtCode"] = "";

    session_destroy();

echo "<script language='javascript'>window.location='../access.php'; </script>";


} 


else { 

 $_SESSION["TxtUser"] = $outcome['ADM_NAME'];
 $_SESSION["TxtSurname"] = $outcome['ADM_SURNAME'];
 $_SESSION["TxtFacility"] = $outcome['ADM_FAC_CODE'];
 $_SESSION["TxtCode"] = $outcome['ADM_ID'];

switch ($outcome['ADM_ID']) {
	case "1":
	     echo "<script language='javascript'>window.location='../special/index.php'</script>";
	break;
	default:
		 echo "<script language='javascript'>window.location='../current/index.php'</script>";
	break;


}

} 

} else {

	echo "<script language='javascript'>window.location='../access.php'; </script>";
}

 ?>


