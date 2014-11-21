<?php
require_once '../include.php';

$act = $_REQUEST['act'];
if($act == "logout") {
	logout();
} elseif($act == "addtext") {
	$mes = add_text();
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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navid">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapsed">
                    <span class="sr-only">toggle nav</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">iMessage</a>
            </div>
            <!-- header over -->
            <div class="collapse navbar-collapse" id="nav-collapsed">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">概况</a>
                    </li>
                    <li><a href="#">简述</a>
                    </li>
                    <li><a href="#">关于</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    <?php 
                    	if(isset($_SESSION['adname'])) {
                    		echo "<a href='#'>".$_SESSION['adname']."</a>";
                    	} else {
                    		echo "<a href='#'>登陆</a>";
                    	}
                    ?></li>
                    <li>
 						 <?php 
                    	if(isset($_SESSION['adname'])) {
                    		echo "<a href='do_admin_act.php?act=logout'>退出</a>";
                    	} else {
                    		echo "<a href='#'>注册</a>";
                    	}
                    	?>                  
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav over -->
    <div class="container">
        <div class="formarea">
        	<p>
            <?php 
            	if($mes) {
            		echo $mes;
            	}
            ?>
            </p>
        </div>
    </div> 
    <div class="container">
        <div class="row">
            <hr class="divider">
            <footer>
                <p class="pull-right"><a href="#top">Back top</a></p>
                <p>© 2014 Write by Chris Yang</p>
            </footer>
        </div>
    </div>
<script>
</script>
</body>

</html>