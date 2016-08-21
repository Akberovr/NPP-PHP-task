<?php
session_start();
$name  =$_POST['name'];
$place = $_POST['place'];
// $picture = filesize($_POST['photos']);

$arr=[];
$arrHead=[];
if(isset($_POST['upload'])){

$uploadedFiles = fopen('upload.txt', 'a+') or die("Unable to open file!");

$uploadedFilesSSS = fread($uploadedFiles , filesize('upload.txt'));
fwrite($uploadedFiles , $name.'|'.$place.'@@@_$$+%');
array_push($arr,$uploadedFilesSSS);
fclose($uploadedFiles);
    foreach($arr as $a){
        $arr_ex1=explode('@@@_$$+%',$a);
    }
    foreach($arr_ex1 as $a){

        $arr_ex2=explode('|',$a);
        array_push($arrHead,$arr_ex2);
    }
    echo '<pre>';
        var_dump($arrHead);
    echo '</pre>';
// header ('Location: index.php');

}else{
    header ('Location: index.php');
}
