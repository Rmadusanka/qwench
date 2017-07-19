<?php

function login() {
	global $template;
	$template->set('loginpage','1');
}

function view() {
    $conn = mysqli_connect('localhost','root','','qwench');
	global $path;
	global $template;

	$userid = sanitize($path[2],"int");

	$sql = ("select * from users where id = '".escape($userid)."'");
	$query = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($query);

	$basePath = basePath();

	$template->set('user',$user);
}

function edit() {
    $conn = mysqli_connect('localhost','root','','qwench');
	authenticate(1);
	global $template;
	$sql = ("select * from users where id = '".escape($_SESSION['userid'])."'");
	$query = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($query,MYSQLI_ASSOC);
	$basePath = basePath();
	$template->set('user',$user);
}

function update() {
	authenticate(1);
	global $template;

	$name = sanitize($_POST['name'],"string");
	$email = sanitize($_POST['email'],"email");
	$password = sanitize($_POST['password'],"string");
	$password = sha1(SALT.$password.$email);

	if (!empty($_POST['password'])) {
		$sql = ("update users set password = '".escape($password)."' where id = '".escape($_SESSION['userid'])."'");
		$query = mysql_query($sql);
	}

	$sql = ("update users set name = '".escape($name)."', email = '".escape($email)."' where id = '".escape($_SESSION['userid'])."'");
	$query = mysql_query($sql);

	$slug = createslug($name);

	$basePath = basePath();
	header("Location: $basePath/users/view/{$_SESSION['userid']}/$slug");
}

function validate() {
    $conn = mysqli_connect('localhost','root','','qwench');
	$email = sanitize($_POST['email'],"email");
	$password = sanitize($_POST['password'],"string");
	$password = sha1(SALT.$password.$email);

	$sql = "select * from users where email = '".escape($email)."' and password = '".escape($password)."'";
	$query_result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($query_result,MYSQLI_ASSOC);

	$basePath = basePath();

	if ($user['id'] > 0) {
		$_SESSION['userid'] = $user['id'];
		$_SESSION['name'] = $user['name'];
		$_SESSION['email'] = $user['email'];
		$_SESSION['password'] = $user['password'];
		$_SESSION['points'] = $user['points'];

		if (!empty($_POST['returnurl'])) {
			$url = sanitize($_POST['returnurl'],"url");
			header("Location: {$url}");
		}  else {

			header("Location: $basePath");
		}
	} else {
		header("Location: $basePath/users/login");
	}
}

function register() {

}

function create() {
    $conn = mysqli_connect('localhost','root','','qwench');
	$name = sanitize($_POST['name'],"string");
	$email = sanitize($_POST['email'],"email");
	$password = sanitize($_POST['password'],"string");
	$password = sha1(SALT.$password.$email);

	$sql = ("insert into users (name,email,password,points,moderator,created,lastactivity) values ('".escape($name)."','".escape($email)."','".escape($password)."','1','0',NOW(),NOW())");
	$query = mysqli_query($conn,$sql);

	validate();

}

function logout() {
	session_destroy();
	session_start();
	$_SESSION['userid'] = '';

}

function index() {
    $conn = mysqli_connect('localhost','root','','qwench');
	global $template;

	$sql = ("select count(id) count from users");
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);
	$template->set('count',$result['count']);

	$sql = ("select * from users order by points desc, name asc");
	$query = mysqli_query($conn,$sql);

	$users = array();

	while ($result = mysqli_fetch_array($query)) {
		$users[] = array ("id" => $result['id'], "name" => $result['name'], "points" => $result['points']);
	}

	$template->set('users',$users);

	/* Add Pagination Later */
}