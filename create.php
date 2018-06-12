<!DOCTYPE html>
<?php
	$conn = mysqli_connect("localhost","root","134330","rnc_cplus");
	$sql = "UPDATE member SET phone='{$_POST['PHONE']}' WHERE name='{$_POST['NAME']}' AND id='{$_POST['ID']}'";
	mysqli_query($conn,$sql);
?>