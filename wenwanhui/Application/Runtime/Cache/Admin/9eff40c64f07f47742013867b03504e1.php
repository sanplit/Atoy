<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>文玩汇系统管理</title>

    <!-- Bootstrap Core CSS -->
    <link href="/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/Public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/Public/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/Public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/Public/css/page.css" rel="stylesheet" type="text/css">

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
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> 档案</a>
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
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
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
                <h3 class="page-header">商品属性管理</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                       <?php echo ($shop_title); ?>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" enctype="multipart/form-data" name="attrform" class="form-horizontal" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="pr_cate">商品种类</label>
                                    <div class="col-sm-4">
                                        <select name="cate" id="pr_cate">
                                            <?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option name="cate" value='<?php echo ($vo["name"]); ?>'><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 control-label" for="pr_title">商品名</label>
                                    <div class="col-sm-4">
                                        <input name="title" value="<?php echo ($attr["title"]); ?>" class="form-control" id="pr_title" type="text" placeholder="请输入商品名" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="pr_num">商品数量</label>
                                    <div class="col-sm-4">
                                        <input name="count" onkeyup='this.value=this.value.replace(/\D/gi,"")' value="<?php echo ($attr["count"]); ?>" class="form-control" id="pr_num" type="text" placeholder="请输入商品数量" required />
                                    </div>
                                    <label class="col-sm-2 control-label" for="pr_price">商品价格</label>
                                    <div class="col-sm-4">
                                        <input name="price" onkeyup='this.value=this.value.replace(/\D/gi,"")' value="<?php echo ($attr["price"]); ?>" class="form-control" id="pr_price" type="text" placeholder="请输入商品价格" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="pr_dec">商品描述</label>
                                    <div class="col-md-4">
                                        <textarea class="form-control" name="decription" id="pr_dec" cols="20" rows="6"  placeholder="请输入商品描述"><?php echo ($attr["decription"]); ?></textarea>
                                    </div>
                                    <label class="col-md-2 control-label" for="pr_pic">商品样图</label>
                                    <div class="col-md-4">
                                        <form enctype="multipart/form-data" method="post" name="upform">
                                            <input name="upfile" type="file" id="pr_pic">
                                            允许上传的文件类型为:<?=implode(', ',$uptype)?>
                                        </form>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-sm-12">
                                       <input type="submit" name="attr" class="btn btn-primary btn-lg" value="<?php echo ($shop_title); ?>">
                                       <button type="reset" class="btn btn-info btn-lg">重置</button>
                                    </div>
                                </div>
                            </fieldset>

                        </form>

                    </div>
                    <div class="panel-footer">
                        <ul class="pagination pages">
                            <?php echo ($page); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
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