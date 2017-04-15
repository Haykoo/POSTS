<?php
	// print_r($_FILES);
	// print_r($_POST);
	// die;
session_start(); 
include "function.php";
if($_POST['title']=="" || $_POST['textarea']==""){ 
	$_SESSION['msg']='Fill up the blank spaces'; 
	header('location:index.php'); 
} 
$action=$_POST['action'];
if($action=='Add'){
	$title=$_POST['title'];
	$textarea=$_POST['textarea'];
	$image=$_FILES['image'];
	if(isset($_FILES['image'])){
		$dir="images/";
		  $errors= array();
		  $file_name = $_FILES['image']['name'];
		  $file_size =$_FILES['image']['size'];
		  $file_tmp =$_FILES['image']['tmp_name'];
		  $file_type=$_FILES['image']['type'];
		  $a=explode(".", $file_name);
		  $file_ext=strtolower(end($a));
		  $expensions= array("jpg","png");
      	if(in_array($file_ext,$expensions)=== false){
         	$errors[]="extension not allowed, please choose a JPG or PNG file.";
      	}
      	if(empty($errors)==true){
         	move_uploaded_file($file_tmp,"images/".$file_name);
        	$image=$_FILES["image"]["name"]; 
        }
        else{
        	print_r($errors);
        }
    } 

	$query="INSERT INTO news(Title,Textarea,Image) values('$title','$textarea','$image')";
	query($query);
}
$id=$_POST["id"];
if($action=='delete'){
	$query4="DELETE FROM news WHERE ID=$id";
	query($query4);
}
if($action=='edit'){
	$title=$_POST['title'];
	$id=$_POST['id'];
	$textarea=$_POST['textarea'];
	$query2="UPDATE news SET Title='$title',Textarea='$textarea' WHERE ID=$id";
	query($query2);
}
header('location:home.php');