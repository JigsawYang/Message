<?php 
require_once '../include.php';
$rows = get_all_title();
if(!$rows) {
	alert_msg("还没有人写文章请添加", "addText.php");
}
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title>iMessage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/jigsaw.png">
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
        <div class="jumbotron" id="jumbo">
            <h1>Leave Your Message</h1>
            <p class="lead">Everyone have somewords wanted to say, here you can share your joy and sorrow, let's open up!</p>
            <p><a href="#" class="btn btn-primary btn-lg" id="ajaxbt" role="button">Let's GO</a></p>
            <p><a href="addText.php" class="btn btn-primary btn-lg" role="button">Say OUT</a></p>
        </div><!-- jumbotron over -->
        <div class="row" id="pan" style="display:none">
        <?php foreach($rows as $row):?>
            <div class="col-md-4">
                <h2><?php echo $row['title'];?></h2>
<!--                 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p> -->
                <p><a href="listtext.php?ti=<?php echo $row['title'];?>" class="btn btn-success" role="button">View details</a></p>
            </div>
        <?php endforeach;?>
        </div>
        <p class="pull-right"><a href="#top">Back top</a></p> 
    </div> 
    
   
    <div class="hr_25"></div>
        <div class="footer">
            <p><a href="#">iMessage简介</a><i>|</i><a href="#">iMessage公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-123-1234</p>
            <p>Copyright &copy; 2006 - 2014 iMessage版权所有&nbsp;&nbsp;&nbsp;京ICP备12312323号&nbsp;&nbsp;&nbsp;京ICP证xxxxx-xxxx号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
            <p class="web"><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a></p>
        </div>
<script>
    $(function(){
        $("#ajaxbt").click(function(event) {
            /* Act on the event */
            $.ajax({
                url: 'logined.php',
                type: 'POST',
                dataType: 'text',
                success: function(data) {
                    if(data == 1) {
                        $("#pan").fadeToggle('slow');
                    } else {
                        alert("请先登录");
                    }
                }
            });
            
        });

    });
</script>
</body>

</html>
