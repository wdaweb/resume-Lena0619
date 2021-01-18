<?php

include_once "../base.php";

$acc = $_POST['acc'];
$pw = $_POST['pw'];

echo $acc;
echo "<br>";
echo $pw;
echo "<br>";


// $logins = $Login->all();
// print_r($logins);

// if(!empty($_POST)){
  // if($_POST['acc']=="admin" && $_POST['pw']="8888"){
  //   header("location:../backend.php");
  // }else{
  //   header("location:../index.html");
  // }
// }

$check=$Login->count(['acc'=>$acc,'pw'=>$pw]);
echo $check;
if($check>0){
    $_SESSION['login']=$acc;
    to("../backend.php");

}else{
    to("../index.html");
}

// print_r($_SESSION['login']);


?>