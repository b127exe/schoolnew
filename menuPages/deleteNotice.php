<?php

include "../component/connect.php";

$nid = $_GET['nid'];

$sql = "DELETE FROM notice WHERE nid = $nid";

$res = mysqli_query($conn,$sql);

if($res){
    header("Location: allNotice.php");
}



?>