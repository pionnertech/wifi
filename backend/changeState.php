<?php 

$id = $_GET['id'];
$argument = $_GET['argument'];

$datos = mysqli_connect("db557693269.db.1and1.com", "dbo557693269", "ToRoVaCa?256", "db557693269");

//check state to toggle

$check = mysqli_fetch_assoc(mysqli_query($datos, "SELECT ADM_LOCK_STATUS FROM ADMIN WHERE ADM_ID =" . $id ));

$state = (int)$check['ADM_LOCK_STATUS'];

if($state === 1){

   if(!mysqli_query($datos, "UPDATE ADMIN SET ADM_LOCK_STATUS = 0 WHERE ADM_ID = " . $id)){
    echo "problem";
   } else {
   	echo "0";
   }
   
} else if($state === 0) {

   if(!mysqli_query($datos, "UPDATE ADMIN SET ADM_LOCK_STATUS = 1 WHERE ADM_ID = " . $id)){
     echo "problem";
   } else {
   	 echo "1";
   }
    
}


?>