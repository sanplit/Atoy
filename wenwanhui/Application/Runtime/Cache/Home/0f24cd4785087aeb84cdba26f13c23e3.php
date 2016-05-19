<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title><?php echo ($title); ?>--留言板</title>
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
						<div class="row-fluid">
							<span class="glyphicon glyphicon-list"></span>
							留言板
							<span class="pull-right">
								<a href="">>></a>
							</span>
						</div><hr>
						<div class="row-fluid text-center">
							<span class="glyphicon glyphicon-edit">发表留言</span><br>
							<div class="row-fluid">
								<form method="post" action="<?php echo U('Home/User/mb');?>">
									<div class="form-group">
					                    <div class="input-group input-group-lg">
					                        <span class="input-group-addon">账 号：</span>
					                        <input value="<?php echo ((isset($session) && ($session !== ""))?($session):'你还未登录，请先登录后在留言'); ?>" name="username" class="form-control" type="text" ng-model="user.name" placeholder="请输入账号（必填）" disabled required />
					                    </div>
					                </div>
					                <div class="form-group">
					                    <div class="input-group input-group-lg">
					                        <span class="input-group-addon">标 题：</span>
					                        <input name="title" class="form-control" type="text" ng-model="user.title" placeholder="请输入标题（必填）" ng-disabled="inProgress" required />
					                    </div>
					                </div>
					                <div class="form-group">
					                    <div class="input-group">
					                        <span class="input-group-addon">留言内容：</span>
					                        <textarea name="msg" class="form-control" rows="4" type="text" ng-model="user.msg" placeholder="请输入留言（必填）" ng-disabled="inProgress" required></textarea>
					                    </div>
					                </div>

									<div class="control-group">
										<div class="controls text-center">									
											<button type="submit" class="btn btn-primary btn-lg btn-block">提交</button><br>
											
										</div>

									</div>
									
								</form>
							</div>
								
						</div>
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

					<div id="footer" class="row-fluid text-center">
						©2016 Sanplit 版权所有<br><br>
					</div>
					
				</div>
				
			</div>
		</div>

		<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
		<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	</body>
</html>