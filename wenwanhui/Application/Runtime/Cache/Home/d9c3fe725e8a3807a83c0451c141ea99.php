<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title><?php echo C('WEB_TITLE');?>--产品分类</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/Public/css/weblr-home.css">
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
                    产品分类 <br>

                    <span class="pull-right">
                        <a href="">>></a>
                    </span>

                    <?php if(is_array($cate_list)): foreach($cate_list as $k=>$cate): ?><div class="accordion" id="accordion-677527">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                               <a  href="#<?php echo ($cate["cid"]); ?>" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-677527">
                                    <h3>
                                        <ul>
                                            <li><?php echo ($cate["name"]); ?></li>

                                        </ul>
                                    </h3>
                               </a>
                            </div>
                            <?php if(is_array($pro_list)): foreach($pro_list as $key=>$pro): ?><div id="<?php echo ($cate["cid"]); ?>" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="row-fluid">
                                        <form action="/Home/Cart/addCart" method="post">
                                            <div class="col-md-6">
                                                <div class="row-fluid">

                                                    <img style="height: 150px; width: 60%;" src="/Public/images/<?php echo ((isset($pro["pic"]) && ($pro["pic"] !== ""))?($pro["pic"]):'dan.png'); ?>"><br>
                                                    <?php echo ($pro["title"]); ?>&nbsp;
                                                    ￥<?php echo ($pro["price"]); ?> &nbsp;
                                                    剩余:<?php echo ($pro["count"]); ?>

                                                    <div class="pull-right">
                                                        <input type="number" name="num" min="1" value="1" style="width: 45px;;"/>
                                                        <button type="submit" class="btn btn-warning  btn-xs">
                                                            <span class="glyphicon glyphicon-shopping-cart">购买</span>
                                                        </button>
                                                    </div>
                                                    <hr>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; ?>
                        </div>
                    </div><?php endforeach; endif; ?>
                    <br>

                </div><hr>
            </div><br>


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

            <div id="footer" class="row-fluid text-center ">
                ©2016 Sanplit 版权所有<br><br>
            </div>

        </div>
        


    </div>
</div>
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
</body>
</html>