<?php

//获取用户名
function check_dmin($sql) {
	return fetch_one($sql);
}

//检测是否已经登录, 用于接受ajax的请求
function check_logined() {
	if(isset($_SESSION['adminid'])) {
		return 1;	
	}
	return -1;
}

/**
 * 添加文章
 * @return string
 */
function add_text() {
	$arr = $_POST;
	if(insert("user_msg", $arr)) {
		$mes = "添加成功<br/><a href='addText.php'>继续添加</a>";
	} else {
		$mes = "添加失败<br/><a href='addText.php'>重新添加</a>";
	}
	return $mes;
}

/**
 * 获取所有文章的标题
 * @return multitype:
 */
function get_all_title() {
	
	$sql = "select title from user_msg";
	$rows = fetch_all($sql);
	return $rows;
}

/**
 * 得到指定用户的文章
 * @param string $title
 * @return multitype:
 */
function get_user_text($title) {
	$sql = "select msg from user_msg where title='{$title}';";
	$row = fetch_one($sql);
	return $row;
}



//注销用户
function logout() {
	$_SESSION = array();
	if(isset($_COOKIE[session_name()])) {
		setcookie(session_name(), "", time()-100);
	}
	if(isset($_COOKIE['adname'])) {
		setcookie("adname", "", time()-100);
	}
	if(isset($_COOKIE['adminid'])) {
		setcookie("adminid", "", time()-100);
	}
	session_destroy();
	header("location: login.php");
}



