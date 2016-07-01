<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="Keywords" content="Tg Blog">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tg‘s 博客</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
</head>

<style>
    * {
        margin: 0;
    }
    body {
        margin-top: 0px;
        color:#505050;
        background: #ddd;
        font-family: "寰蒋闆呴粦","Helvetica Neue",Helvetica,Arial,sans-serif;
        overflow-x: hidden;
    }

    .cen{
        background: #f8f8f8;
        margin-bottom: 30px;
        padding: 20px 35px;
        box-shadow: 0 1px 4px #aaa;
        overflow: hidden;
    }
    h2 {
        color:red;
        display: block;
        font-size: 1.5em;
        -webkit-margin-before: 0.83em;
        -webkit-margin-after: 0.83em;
        -webkit-margin-start: 0px;
        -webkit-margin-end: 0px;
        font-weight: bold;
    }
    .bottom a:link {text-decoration:none;color:white;}
    .header1 a:link {text-decoration:none;color:white;padding: 0px 25px; display: inline-block;}
    .header1 a:visited {text-decoration:none;color:#F8FFC0;background-color:00FF00;}
    .header1 a:hover {text-decoration:none; color: #975785; background-color: #bceeca;}
    .header1 a:active {text-decoration:none;background-color:00FF00;}
    .cen a:link{  text-decoration:none;color: #ad2028; }
    .cen a:hover {text-decoration:none; color: #973890; background-color: #c3dedf;}
    .header1{
        width: 100%;
        background: #6db79c;
        background-size: cover;
        margin-bottom:30px;
        box-shadow: 2px 4px 5px #aaa;
    }
    .bottom{
        width: 100%;
        background: #233d33;
        background-size: cover;
        margin-bottom:30px;
        box-shadow: 3px 4px 5px #aaa;

    }
    .astyle{
        text-align: center;
        letter-spacing:0px;
    }
    .h{
        text-shadow: 0px 0px 10px #f4645f;

    }
</style>
<body>
<div class=header1>
    <div height=120>
        <h2 align=center><b style=color:#98FFEC>Tg's博客</b ></h2>
        <h4 align=center>Time will prove everything </h4>
    </div>
    <div class=astyle>
        <h2><a href=<?php echo PATH2."index" ?> >主页<a/>
                <a href= <?php echo PATH2."article" ?> >文章<a/>
                    <a href=<?php echo PATH2."life" ?> >生活<a/>
                        <a href=<?php echo PATH2."message" ?> >留言<a/>
        </h2>
    </div>
</div>


<div class="cen">
    <h6 align="right">学无止境.<br>但却无法回头.</h6>
    <?php
    echo "<h2 align='center'>".$title."</h2><br>";
    echo $content;
    echo "<br><br><h5 align='right'>".$time."</h5>";
        ?>



</div>


<div class=bottom>
    <div height=120>
        <h4 style="align=left;color:white" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;没有梦想，和咸鱼有什么区别. </h4>
    </div>
    <div class=astyle>
        <h5 style="align=left;color:white">
            &copy; 2016 Tg |&nbsp;  湘ICP备16004202号 &nbsp;|&nbsp;
            <a href=<?php echo PATH1.'Admin/login';?>>管理</a>
        </h5>
    </div>
</div>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
