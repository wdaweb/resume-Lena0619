<?php
include_once "../base.php";

$table=$_POST['table'];
$db=new DB($table);

$data=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}

if(!empty($_POST['text'])){

    $data['text']=$_POST['text'];
}

    switch($table){
        case "title":
            $data['sh']=0;
        break;
        case "admin":
            $data['acc']=$_POST['acc'];
            $data['pw']=$_POST['pw'];
        break;
        case "experience":
            $data['work']=$_POST['work'];
            $data['period']=$_POST['period'];
            $data['detail']=$_POST['detail'];
        break;
        case "skills":
            $data['ski']=$_POST['ski'];
            $data['percentage']=$_POST['percentage'];
        break;
        case "profile":
            $data['descri']=$_POST['descri'];
            $data['link']=$_POST['link'];
        break;
        case "job":
            $data['reqname']=$_POST['reqname'];
            $data['condi']=$_POST['condi'];
         break;
        default:
        $data['sh']=1;

    }



$db->save($data);

to("../backend.php?do=$table");

?>
