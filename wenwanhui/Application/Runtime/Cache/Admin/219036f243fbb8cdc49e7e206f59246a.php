<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo ($title); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/Public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="/Public/css/page.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Admin/Index/index');?>"><?php echo ($title); ?></a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo ($user); ?> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i>档案</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo U('Admin/Login/logout');?>"><i class="fa fa-sign-out fa-fw"></i> 注销</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo U('Admin/Index/index');?>"><i class="fa fa-系统总览 fa-fw"></i> 系统总览</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 商品信息<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active">
                                <a href="<?php echo U('Admin/Index/pro_list');?>">商品列表</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Admin/Index/pro_attr');?>">商品属性</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list fa-fw"></i> 订单管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo U('Admin/Order/order_list');?>">订单列表</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Admin/Order/order_add');?>">添加订单</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Admin/Order/order_null');?>">缺货登记</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users"></i> 会员管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo U('Admin/User/vip_list');?>">会员列表</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Admin/User/vip_add');?>">添加会员</a>
                            </li>
                            <li>
                                <a href="#">待定<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Up 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Up 2</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope  fa-fw"></i> 留言管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo U('Admin/Message/msg_view');?>">查看留言</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Admin/Message/msg_manage');?>">留言管理</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog fa-fw"></i> 基础设置<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo U('Admin/Index/environment');?>">环境配置</a>
                            </li>
                            <li>
                                <a href="<?php echo U('Admin/Index/sql');?>">SQL操作</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">会员添加</h2>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        添加会员信息
                    </div><br>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <form role="form" class="form-inline" action="" method="post">
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">用户名</label>
                                    <div class="col-sm-9">
                                        <input name="name" type="text" class="form-control" id="name"
                                               placeholder="请输入用户名（必填）">
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label for="phone" class="col-sm-3 control-label">手 &nbsp;  机</label>
                                    <div class="col-sm-9">
                                        <input name="phone" type="text" class="form-control" id="phone"
                                               placeholder="请输入手机号">
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label for="passwd" class="col-sm-3 control-label">密 &nbsp;  码</label>
                                    <div class="col-sm-9">
                                        <input name="repass" type="text" class="form-control" id="passwd"
                                               placeholder="请输入密码（必填）">
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label for="repass" class="col-sm-3 control-label">密 &nbsp;  码</label>
                                    <div class="col-sm-9">
                                        <input name="repass" type="text" class="form-control" id="repass"
                                               placeholder="请输入重复密码（必填）">
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <label for="sign" class="col-sm-3 control-label">签 &nbsp;  名</label>
                                    <div class="col-sm-9">
                                        <textarea name="sign" type="text" class="form-control" id="sign"
                                               placeholder="请输入签名">
                                            </textarea>
                                    </div>
                                </div><br><br>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-success">添加</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="reset" class="btn btn-success">重置</button>
                                    </div>
                                </div>
                             </form>
                        <div class="col-md-3"></div>
                    </div>

                </div><br>

                <div class="panel-footer">

                </div>
            </div>
        </div>


    </div>


</div>
    <!-- footer -->
    <div class="row">
        <div class="col-md-12 text-center">
    <h4>©2016 Sanplit 版权所有</h4>

</div>

    </div>
</div>
<!-- jQuery -->
<script src="/Public/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/Public/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/Public/dist/js/sb-admin-2.js"></script>
</body>

</html>