<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title><?php echo ($title); ?>--购物车</title>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="/Public/css/weblr.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                
                <div id="webCenter" class="col-md-6 alert-success">
                    <nav class="navbar navbar-default alert-success" role="navigation">
    <div class="navbar-header" name="top">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo U('Home/Index/index');?>"><?php echo ($title); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="<?php echo U('Home/Index/index');?>">
                    <span class="glyphicon glyphicon-home">首页</span>
                </a>
            </li>
            <li><a href="<?php echo U('Home/Index/product');?>"><!--  class="active"-->
                <span class="glyphicon glyphicon-th-list">产品展示</span></a>
            </li>
            <li><a href="<?php echo U('Home/Index/register');?>">
                <span class="glyphicon glyphicon-user">登录/注册</span></a>
            </li>
            <li><a href="<?php echo U('Home/Index/mb');?>">
                <span class="glyphicon glyphicon-edit">留言板</span></a>
            </li>
            <li><a href="<?php echo U('Home/Index/about');?>">
                <span class="glyphicon glyphicon-user">关于我们</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="fa fa-user"><b>你好，<?php echo ((isset($session) && ($session !== ""))?($session):"游客"); ?></b></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo U('Home/Index/profile');?>">档案</a></li>

                    <li class="divider"></li>
                    <li><a href="<?php echo U('Home/User/logout');?>">注销</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


                    <div class="row-fluid">
                        <div class="">
                            <span class="glyphicon glyphicon-list"></span>
                            购物车
                            <span class="pull-right">
                                <a href="">>></a>
                            </span>
                        </div><hr>
                        <div class="row-fluid">
                            <table class="table table-strip table-responsive" >
                                <thead>
                                    <tr>
                                        <th>商品编号</th>
                                        <th>商品名</th>
                                        <th>商品图</th>
                                        <th>商品价</th>
                                        <th>购买数</th>
                                        <th>总金额</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php if(is_array($cart_list)): foreach($cart_list as $key=>$cart): if($cart["sid"] != 0): ?><tr>
                                        <td><?php echo ($cart["sid"]); ?></td>
                                        <td><?php echo ($cart["pname"]); ?></td>
                                        <td >
                                            <img style="width:88px" src="/Public/images/<?php echo ($cart["pic"]); ?>" alt="商品图" >
                                        </td>
                                        <td>￥<?php echo ($cart["price"]); ?></td>
                                        <td><?php echo ($cart["count"]); ?></td>
                                        <td>￥<?php echo ((isset($cart["total"]) && ($cart["total"] !== ""))?($cart["total"]):0); ?></td>
                                        <td>
                                            <form action="/Home/Cart/delCart/pid/<?php echo ($cart["pid"]); ?>" method="get">
                                                <button type="submit" class="btn btn-danger">删除</button>
                                            </form>

                                        </td>
                                    </tr>
                                    <?php else: ?>
                                    <tr>
                                        <td class="text-center"> 购物车为空~</td>

                                    </tr><?php endif; endforeach; endif; ?>

                                </tbody>

                            </table>
                            <nav>
                                <ul class="pagination pages">
                                    <?php echo ($page); ?>
                                </ul>
                            </nav>

                            <span class="pull-right">
                                应付金额：￥<?php echo ((isset($all_total) && ($all_total !== ""))?($all_total):0); ?>

                                &nbsp;<button class="btn btn-warning">去支付</button>

                            </span>

                        </div>

                        <div id="low" class="row-fluid">
                            <ul class="nav nav-list">
                                <li class="divider"></li>
                            </ul><hr>
                            <blockquote class="pull-right">
                                <a href="">
                                    Top<span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                            </blockquote>
                        </div><br><hr>

                        <div id="footer" class="row-fluid text-center">
                            ©2016 Sanplit 版权所有<br><br>
                        </div>

                    </div>
                    


                </div>
            </div>
        </div>

        <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
        <script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
    </body>
</html>