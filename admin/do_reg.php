<?php
require_once '../include.php';

$arr = $_POST;
array_splice($arr, 2, 2);
// var_dump($arr); 
$arr['password'] = md5($_POST['password']);
$vcode = strtolower($_POST['vcode']);
$verify1 = $_SESSION['verify'];

if($verify1 == $vcode) {
	if(insert("msg_admin", $arr)) {
		$mes="注册成功!<br/>3秒钟后跳转到登陆页面!<meta http-equiv='refresh' content='3;url=login.php'/>";
	} else {
		alert_msg("注册失败", "reg.php");
	}
} else {
	alert_msg("验证码错误", "reg.php");
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>iMessage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="images/new.ico">
        <!-- Bootstrap -->
        <link href="styles/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="styles/reset.css" rel="stylesheet" media="screen">
        <link href="styles/main.css" rel="stylesheet" media="screen">
        <script src="scripts/jquery-1.11.1.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="header">
            <div class="content">
                <a href=""><img src="images/logo.png" alt="logo"></a>
                <h3>iMessage</h3>
            </div>
        </div>
        <div class="main">
            <p id="bigfont">
            	<?php 
					if($mes){
						echo $mes;
					}
				?>
            </p>
        </div>
        
    </body>
</html>