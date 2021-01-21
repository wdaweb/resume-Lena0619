<?php

include_once "../base.php";

$acc = $_POST['acc'];
$pw = $_POST['pw'];

$check=$Login->count(['acc'=>$acc,'pw'=>$pw]);
echo $check;
if($check>0){
    $_SESSION['login']=$acc;
    to("../backend.php");

}else{
    to("../index.html");
}

?>