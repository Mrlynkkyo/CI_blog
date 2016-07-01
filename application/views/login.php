<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Tg's博客后台登录</title>
		<meta name="keywords" content="唐钢 博客 个人博客 技术博客" />
		<meta name="description" content="唐钢 博客 个人博客 技术博客" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/reset.css">
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <style>
            body{
                background-color: #adc6ff;
            }
             a:link {text-decoration:none;color: #ff7380;padding: 0px 25px; display: inline-block;}
             a:visited {text-decoration:none;color: #ff7a7c;}
             a:hover {text-decoration:none; color: #975785; }
        </style>
    </head>

    <body>

   <a href="/"><b>返回主页</b></a>

    <div class="page-container">
        <h1>登录</h1>
        <div class="connect">
            <p><?php echo $log;?></p>
        </div>
        <form action="<?php echo PATH3;?>login" method="post">
            <input type="text" name="username" class="username" placeholder="用户名">
            <input type="password" name="password" class="password" placeholder="密码">
            <button type="submit" name="bt">登录</button>
            <div class="error"><span>+</span></div>
        </form>

    </div>

    <!-- Javascript -->
    <script src="<?php echo base_url();?>public/assets/js/jquery-1.8.2.min.js"></script>
    <script src="<?php echo base_url();?>public/assets/js/supersized.3.2.7.min.js"></script>
    <script src="<?php echo base_url();?>public/assets/js/supersized-init.js"></script>
    <script src="<?php echo base_url();?>public/assets/js/scripts.js"></script>



</html>


