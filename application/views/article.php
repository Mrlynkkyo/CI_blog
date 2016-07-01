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
        color: #ff7461;
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
    .sidebar-form {
        border-radius: 3px;
        border: 1px solid #374850;
        margin: 10px 10px;
    }
    .sidebar-form, .sidebar-menu>li.header {
        overflow: hidden;
        text-overflow: clip;
    }
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    form {
        display: block;
        margin-top: 0em;
    }
    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }
    .input-group .form-control, .input-group-addon, .input-group-btn {
        display: table-cell;
    }
    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    .input-group-addon, .input-group-btn {
        width: 1%;
        white-space: nowrap;
        vertical-align: middle;
    }
    .btn {
        box-shadow: none;
        background-color: #adb09a;
        border: 1px solid transparent;
        height: 35px;
        -webkit-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .btn.btn-flat {
        border-radius: 0;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-width: 1px;
    }
</style>
<body>
<div class=header1>
    <div height=120>
        <h2 align=center><b style=color:#98FFEC>Tg's博客</b ></h2>
        <h4 align=center>Time will prove everything </h4>
    </div>
    <div class=astyle>
        <h2><a href=<?php echo PATH2."index"; ?> >主页<a/>
                <a href= <?php echo PATH2."article"; ?> >文章<a/>
                    <a href=<?php echo PATH2."life"; ?> >生活<a/>
                        <a href=<?php echo PATH2."message"; ?> >留言<a/>
        </h2>
    </div>
</div>


<div class="cen">
    <h6 align="right">害怕失败,害怕尴尬.<br>向往成功,向往希望.</h6>
    <h2>文章</h2>
    <div style="width: 20%">
        <form action = "<?php echo PATH2."search"; ?>"  method = "post" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><b style="color: #728270">搜索</b><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        </div>


        <?php
        if(!empty($log)){
            foreach ($log as $row) {
                if(!empty($q)){
                $row['title'] = str_replace($q, '<b style="background-color:#9bd7ff">'.$q.'</b>',$row['title']);
                $row['content'] = str_replace($q, '<b style="background-color:#9bd7ff">'.$q.'</b>',$row['content']);
                }
                echo "<div class='cen'>";
                echo "<h2><a href=" . PATH2 . "articlelook?id=" . $row['id'] . " >" . $row['title'] . "</a></h2><br>";
                if (strlen($row['content']) >= 700) {
                    $row['content'] = substr($row['content'], 0, 690);
                    $row['content'] .= '......';
                }
                echo "<p>" . $row['content'] . "</p><br><br>";
                echo "<p align='right'>".$row['time'] . "</p>";
                echo "</div>";
            }
            if(!empty($page))
            echo $page;}
        else
        echo $key;
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

