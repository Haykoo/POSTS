<?php
include "index.html";
session_start();
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
}
?>
