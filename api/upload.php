<?php
include_once "base.php";
$table=$_POST['table'];
// dd($_POST);
$row=$$table->find($_POST['id']);
// dd($_FILES);
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $row['img']=$_FILES['img']['name'];
    $$table->save($row);
}
to("../back.php?do=".lcfirst($table));
?>