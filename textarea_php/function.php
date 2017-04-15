<?php
function connect(){
	$conn=mysqli_connect("localhost","root","","posts");
	if(!$conn){
		die(mysqli_connect_error());
	}
	return $conn;
}

function query($sql){
	$conn=connect();
	$res=mysqli_query($conn,$sql);
	if(!$res) die(mysqli_error($conn));
	if(preg_match('/select/i', $sql)){
		if(mysqli_num_rows($res))
			return mysqli_fetch_all($res,MYSQLI_ASSOC);
	}
}