<?php

function getUser($id) {
    $conn = mysqli_connect('localhost','root','','qwench');
	global $helper;

	$id = sanitize($id,"int");
	$sql = ("select * from users where id = '".escape($id)."'");
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);
	
	$helper->set('user',$result);
	return $helper->render();
}

 