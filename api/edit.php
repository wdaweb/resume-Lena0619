<!-- 1. 把資料送到資料庫更新 -->
<!-- 2. 再導回原本頁面 -->

<?php
include "../base.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<br>";

print_r($_POST['id']);

$table=$_POST['table'];   //讓他傳回原本頁面的變數
$db=new DB($table);

foreach($_POST['id'] as $key => $id){
  if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
     $db->del($id);
  }else{
     $row=$db->find($id);
   //   echo "<br>";
   //   print_r($row); 
   //   print_r($_POST['sh'][$key]); 
   //   print_r($_POST['sh']); 
   //   echo "<br>";
   //   print_r($id);

      switch($table){
         // case "introductions":
         //    if(!empty($_POST['text'])){
         //       $row['text']=$_POST['text'][$key];
         //    }
         //    $row['sh']=($_POST['sh']==$id)?1:0;    //如果sh[]陣列裡有id,這個id的sh值就等於1
         // break;

        //  case "admin":
        //     $row['acc']=$_POST['acc'][$key];
        //     $row['pw']=$_POST['pw'][$key];
        //  break;
         case "skills":
            $row['ski']=$_POST['ski'][$key];
            $row['percentage']=$_POST['percentage'][$key];
         break;
         case "profile":
            $row['descri']=$_POST['descri'][$key];
            $row['link']=$_POST['link'][$key];
         break;
         default:
         // case "introductions":
            if(!empty($_POST['text'])){
               $row['text']=$_POST['text'][$key];
            }
            $row['sh']=(!empty($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
         break;
      }

      $db->save($row);
  }
}



// to("../backend.php?do=$table");
to("../backend.php?do=main");
?>