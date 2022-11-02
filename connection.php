<?php 
$host = "localhost" ; 
$user = "root" ; 
$pw = "" ; 
$ndb = "youcode" ; 
$con = mysqli_connect($host,$user,$pw,$ndb);
if($con){
    echo "connected" ; 
}else{
    echo "no connected" ; 
}


?>