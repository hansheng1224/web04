<?php
include_once "base.php";

$table=$_POST['table'];
$data=[];
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);
    $data['img']=$_FILES['img']['name'];
}

switch($table){
    case "Admin":
        $data['acc']=$_POST['acc'];
        $data['pw']=$_POST['pw'];
    break;
    case "Menu":
        $data['name']=$_POST['name'];
        $data['href']=$_POST['href'];
        $data['sh']=1;
        $data['parent']=0;
    break;
    default:
    if(isset($_POST['text'])){
        $data['text']=$_POST['text'];
    }
    $data['sh']=($table=='Title')?1:0;
}
$$table->save($data);
to('../back.php?do='.lcfirst($table));
?>