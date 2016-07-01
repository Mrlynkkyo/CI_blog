<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="Keywords" content="Tg Blog">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tg‘s 博客</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="/var/www/html/CI/store/message.css" type="text/css">

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

    .dark-matter {
        margin: 1%;
        background: #555;
        padding: 20px 30px 20px 30px;
        font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #D3D3D3;
        text-shadow: 1px 1px 1px #444;
        border: none;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
    }
    .dark-matter h1 {
        padding: 0px 0px 10px 40px;
        display: block;
        border-bottom: 1px solid #444;
        margin: -10px -30px 30px -30px;
    }
    .dark-matter h1>span {
        display: block;
        font-size: 11px;
    }
    .dark-matter label {
        display: block;
        margin: 0px 0px 5px;
    }
    .dark-matter label>span {
        float: left;
        width: 20%;
        text-align: right;
        padding-right: 10px;
        margin-top: 10px;
        font-weight: bold;
    }
    .dark-matter input[type="text"], .dark-matter input[type="email"], .dark-matter textarea, .dark-matter select {
        border: none;
        color: #525252;
        height: 25px;
        line-height:15px;
        margin-bottom: 16px;
        margin-right: 6px;
        margin-top: 2px;
        outline: 0 none;
        padding: 5px 0px 5px 5px;
        width: 70%;
        border-radius: 2px;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        background: #DFDFDF;
    }
    .dark-matter select {
        background: #DFDFDF url('down-arrow.png') no-repeat right;
        background: #DFDFDF url('down-arrow.png') no-repeat right;
        appearance:none;
        -webkit-appearance:none;
        -moz-appearance: none;
        text-indent: 0.01px;
        text-overflow: '';
        width: 70%;
        height: 35px;
        color: #525252;
        line-height: 25px;
    }
    .dark-matter textarea{
        height:100px;
        padding: 5px 0px 0px 5px;
        width: 70%;
    }
    .dark-matter .button {
        background: #FFCC02;
        border: none;
        padding: 10px 25px 10px 25px;
        color: #585858;
        border-radius: 4px;
        -moz-border-radius: 4px;
        -webkit-border-radius: 4px;
        text-shadow: 1px 1px 1px #FFE477;
        font-weight: bold;
        box-shadow: 1px 1px 1px #3D3D3D;
        -webkit-box-shadow:1px 1px 1px #3D3D3D;
        -moz-box-shadow:1px 1px 1px #3D3D3D;
    }
    .dark-matter .button:hover {
        color: #333;
        background-color: #EBEBEB;
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
    <h6 align="right">唯有梦想和好女孩不能辜负.</h6>

    <!--留言表单-->
    <div style="width:30%;float:left;box-shadow: 0 1px 4px #aaa;">
    <form action="" method="post" class="dark-matter" name="ly">
        <h1>我要留言
        </h1>
        <label>
            <span>你是 :</span>
            <input id="name" type="text" name="name" placeholder="Who are you"/>
        </label>
        <label>
            <span>想说 :</span>
            <textarea id="message" name="message" placeholder="Your Message to me"></textarea>
        </label>
        <label>
            <span>&nbsp;</span>
            <input type="button"  class="button" value="留言" onclick="document.ly.submit()" />
        </label>
    </form>
        </div>


    <!--留言数据-->
    <div style="width:70%;float:right;box-shadow: 0 1px 4px #aaa;">

        <?php

        foreach ($log as $row){
            echo "<div class='cen' style='margin-top:1% '><b>".$row['name'].":</b><br>";
            echo $row['content']."<br>";
             echo "<h5 align='right';>".$row['time']."</h5>";
             echo "</div>";
        }
            echo $page;

        ?>
        </div>


</div>






<!--底部-->
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

