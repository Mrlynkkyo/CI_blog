<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>博客后台管理</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href='<?php echo base_url();?>public/bootstrap/css/bootstrap.min.css' rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/dist/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/dist/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>public/dist/js/html5shiv.min.js"></script>
    <script src="<?php echo base_url();?>public/dist/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper">


    <header class="main-header">


        <nav class="navbar navbar-static-top" role="navigation">

            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <aside class="main-sidebar">

        <section class="sidebar">

            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url();?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Tg</p>
                    <!-- Status -->
                    <a href="<?PHP echo PATH3;?>logout"><i class="fa fa-circle text-success"></i> 博客主页</a>
                </div>
            </div>


            <ul class="sidebar-menu">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li ><a href="<?php echo PATH3;?>index"><i class='fa fa-link'></i> <span>控制台</span></a></li>
                <li ><a href="<?php echo PATH3;?>visit"><i class='fa fa-link'></i> <span></span>访客</a></li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span>管理</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo PATH3;?>article">文章管理</a></li>
                        <li><a href="<?php echo PATH3;?>message">留言管理</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                控制台
                <small>Time will prove everything</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>


        <!-- Main content -->
        <section class="content">
            <table class="table table-hover">
                <tr>
                <td colspan="5"><a href="<?php echo PATH3;?>handle?type=5"><b style="color:#ca5649;font-size:20px">发表文章</b></a><td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>类别</td>
                    <td>主题</td>
                    <td>内容</td>
                    <td>时间</td>
                    <td colspan="2">操作<td>
                </tr>

                <?php
                if(!empty($log)){
                foreach ($log as $row){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    if($row['bid']==1)
                        echo "<td>推荐</td>";
                    else
                        echo "<td>普通</td>";
                    echo "<td>".$row['title']."</td>";
                    echo "<td>".substr($row['content'],0,700)."</td>";
                    echo "<td>".$row['time']."</td>";
                    echo "<td><a href=".PATH3."handle?id=".$row['id']."&type=4>修改</a></td>";
                    echo "<td><a href=".PATH3."handle?id=".$row['id']."&type=2>删除</a></td>";
                    echo "</tr>";
                }
                    echo "<td colspan='5'>".$page."</td>";
                   }
                else
                    echo "<b style='color: #728270'>没有信息</b>";
                ?>




            </table>

            <!-- Your Page Content Here -->

        </section>
    </div>



    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            you can do everythings
        </div>
        <strong> &copy; 2016.唐钢.</strong>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class='control-sidebar-menu'>
                    <li>
                        <a href='javascript::;'>
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class='control-sidebar-menu'>
                    <li>
                        <a href='javascript::;'>
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked />
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </aside>
    <div class='control-sidebar-bg'></div>
</div>
<script src="<?php echo base_url();?>public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>public/dist/js/app.min.js" type="text/javascript"></script>
</html>