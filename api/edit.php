<?php
include "../base.php";

$table = $_POST['table'];
$db = new DB($table);

foreach ($_POST['id'] as $key => $id) {
   if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
      $db->del($id);
   } else {
      $row = $db->find($id);

      switch ($table) {
         case "experience":
            $row['work'] = $_POST['work'][$key];
            $row['period'] = $_POST['period'][$key];
            $row['detail'] = $_POST['detail'][$key];
            break;
         case "myinfo":
            $row['name'] = $_POST['name'][$key];
            $row['tel'] = $_POST['tel'][$key];
            $row['birth'] = $_POST['birth'][$key];
            $row['hobby'] = $_POST['hobby'][$key];
            break;
         case "skills":
            $row['ski'] = $_POST['ski'][$key];
            $row['percentage'] = $_POST['percentage'][$key];
            break;
         case "profile":
            $row['descri'] = $_POST['descri'][$key];
            $row['link'] = $_POST['link'][$key];
            break;
         case "job":
            $row['reqname'] = $_POST['reqname'][$key];
            $row['condi'] = $_POST['condi'][$key];
            $row['sh'] = (!empty($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
            break;
         default:
            // case "introductions":
            if (!empty($_POST['text'])) {
               $row['text'] = $_POST['text'][$key];
            }
            $row['sh'] = (!empty($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
            break;
      }

      $db->save($row);
   }
}



to("../backend.php?do=main");

?>
