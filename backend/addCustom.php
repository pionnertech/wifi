<?php

$name    =  $_GET['name'];
$fac     =  $_GET['fac'];
$address =  $_GET['address'];
$mail    =  $_GET['mail']; 
$user    =  $_GET['user']; 
$pass    =  $_GET['pass'];
$geo     =  $_GET['geo']; 

$datos = mysqli_connect("db557693269.db.1and1.com", "dbo557693269", "ToRoVaCa?256", "db557693269");
// faccode

$var = mysqli_fetch_assoc(mysqli_query($datos, "SELECT ADM_FAC_CODE FROM ADMIN ORDER BY ADM_FAC_CODE DESC LIMIT 1"));
$newFacility = (int)$var['ADM_FAC_CODE'] + 1;

$parts = explode(" ", $name);
$firstname = array_shift($parts);
$lastname = implode(" ", $parts);

$queryString = "INSERT INTO ADMIN(ADM_NAME, ADM_SURNAME,  ADM_USR, ADM_PASS, ADM_GEO, ADM_ADRSS, ADM_FAC_CODE, ADM_LOCK_STATUS, ADM_FAC_NAME) VALUES ('" . $firstname . "' , '" . $lastname . "', '"  . $user  ."' , '" . $pass . "', '" . $geo . "', '" . $address . "', " . $newFacility . ", 0, '" . $fac ."')";

if(!mysqli_query($datos, $queryString)){

echo 0;

} else {

echo 1;

}


?>