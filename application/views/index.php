<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="Keywords" content="Tg Blog">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tg‘s 博客</title>
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
            color: #ff7a79;
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
    <h6 align="right">人生原则--滴水之恩,滴水相报.<br>滴水之仇,不共戴天.</h6>
    <h2>
        <p>文章<span>推荐</span></p>
    </h2>
<?php


    //获取ip和ip地址
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $cip = $_SERVER["HTTP_CLIENT_IP"];
    }else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
        $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }else if(!empty($_SERVER["REMOTE_ADDR"])){
        $cip = $_SERVER["REMOTE_ADDR"];
    }else{
        $cip = "无法获取！";
    }
    $url = 'http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json&ip='.$cip;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_ENCODING ,'utf8');
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回
    $location = curl_exec($ch);
    $location = json_decode($location);
    curl_close($ch);
    $loc = "";
    if($location===FALSE) $loc = "";
    if (empty($location->desc)) {
    $loc = $location->province.$location->city.$location->district.$location->isp;
    }else{
    $loc = $location->desc;
    }


//保存数据到数据库
    $con = new mysqli('localhost','root','844385','ci_blog');
    $con->query("insert into visitor VALUE (0,'$cip','$loc',now())");
    $con->close();



foreach ($log as $row){
    echo "<div class='cen'>";
    echo "<h2><a href=".PATH2."articlelook?id=".$row['id'].">".$row['title']."</a></h2><br>";
    if(strlen($row['content'])>=700){
        $row['content']=substr($row['content'],0,690);
        $row['content'].='......';
    }
    echo "<p>".$row['content']."</p>";
    echo $row['time']."<br>";
    echo "</div>";
}


 ?>



</div>


<div class=bottom>
    <div height=120>
        <h4 style="align=left;color:white" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;没有梦想，和咸鱼有什么区别. </h4>
    </div>
    <div class=astyle>
        <h5 style="align=left;color:white">
            &copy; 2016 Tg |&nbsp;  湘ICP备16004202号 &nbsp;|&nbsp;
            <a href=<?php echo PATH1.'admin/login';?>>管理</a>
        </h5>
    </div>
</div>
    <audio autoplay="autoplay" loop="loop">
      <source src="<?php echo base_url();?>public/bjyinyue.mp3" type="audio/mp3" />
</body>
</html>
