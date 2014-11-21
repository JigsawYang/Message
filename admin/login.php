<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>iMessage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <form action="do_login.php" role="form" method="post">
                <div class="form-group">
                    <label for="adname">管理员账号</label>
                    <input type="text" class="form-control" name="adname" placeholder="请输入管理员账号">
                </div>
                <div class="form-group">
                    <label for="psd">密码</label>
                    <input type="password" class="form-control" name="psd" placeholder="密码">
                </div>
                <div class="form-group">
                    <label for="vcode">验证码</label>
                    <input type="text" class="form-control" name="vcode" placeholder="验证码">
                    <img src="get_verify.php" alt="vcode">
                </div>
                <div class="checkbox">
                    <label id="ckb">
                        <input type="checkbox" name="auto_flag" value="1"> 自动登陆(一周内自动登陆)
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">登陆</button>
            </form>
        </div>
        <div class="hr_25"></div>
        <div class="footer">
            <p><a href="#">iMessage简介</a><i>|</i><a href="#">iMessage公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-123-1234</p>
            <p>Copyright &copy; 2006 - 2014 iMessage版权所有&nbsp;&nbsp;&nbsp;京ICP备12312323号&nbsp;&nbsp;&nbsp;京ICP证xxxxx-xxxx号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
            <p class="web"><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="images/webLogo.jpg" alt="logo"></a></p>
        </div>
    </body>
</html>

