<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title><?php echo ($title); ?> -- 首页</title>
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
						<img src="/Public/images/banner.jpg" width="100%" height="10%" alt="">
					</div><br>

					<div class="row-fluid alert-info">
						<div class="col-md-4  text-center">
							<a href="<?php echo U('Home/Index/login');?>">
								<span class="glyphicon glyphicon-user"></span>
								<div><h4>登录</h4></div>
							</a>
							
						</div>
						<div class="col-md-4  text-center">
							<a href="<?php echo U('Home/Index/category');?>">
								<span class="glyphicon glyphicon-th-list"></span>
								<div><h4>分类</h4></div>
							</a>

						</div>
						<div class="col-md-4  text-center">
							<a href="<?php echo U('Home/Cart/getCart');?>">
								<span class="glyphicon glyphicon-shopping-cart"></span>
								<div><h4>购物车</h4></div>	
							</a>

						</div>
						<div class="col-md-4  text-center">
							<a href="<?php echo U('Home/Index/mb');?>">
								<span class="glyphicon glyphicon-question-sign"></span>
								<div><h4>反馈</h4></div>
							</a>

						</div>
						<div class="col-md-4  text-center">
							<a href="<?php echo U('Home/Index/search');?>">
								<span class="glyphicon glyphicon-search"></span>
								<div><h4>搜索</h4></div>
							</a>

						</div>
						<div class="col-md-4  text-center">
							<a href="<?php echo U('Home/Index/profile');?>">
								<span class="glyphicon glyphicon-heart-empty"></span>
								<div><h4>个人中心</h4></div>
							</a>

						</div>

					</div><br>

					<div class="row-fluid">
						<div class="">
							<span class="glyphicon glyphicon-list"></span>
							推荐产品
							<span class="pull-right">
								<a href="<?php echo U('Home/Index/product');?>">>></a>
							</span>
						</div><hr>
						<div class="row-fluid">
							<?php if(is_array($re_list)): foreach($re_list as $key=>$data): ?><form action="/Home/Cart/addCart" method="post">
								<div class="col-md-6">
									<div class="row-fluid">
										<input type="hidden" name="pid" value="<?php echo ($data["pid"]); ?>">
										<input type="hidden" name="img" value="<?php echo ($data["pic"]); ?>">
										<img style="height: 200px; width: 60%;" src="/Public/images/<?php echo ((isset($data["pic"]) && ($data["pic"] !== ""))?($data["pic"]):'dan.png'); ?>"><br>

										<input type="hidden" name="title" value="<?php echo ($data["title"]); ?>">
										<?php echo ($data["title"]); ?>&nbsp;

										<input type="hidden" name="price" value="<?php echo ($data["price"]); ?>">
										￥<?php echo ($data["price"]); ?> &nbsp;

										<input type="hidden" name="count" value="<?php echo ($data["count"]); ?>">
										剩余:<?php echo ($data["count"]); ?>

										<div class="pull-right">
											<input type="number" name="num" min="1" value="1" style="width: 45px;;"/>
												<button type="submit" class="btn btn-warning  btn-xs">
													<span class="glyphicon glyphicon-shopping-cart">购买</span>
												</button>
										</div>
										<hr>

									</div>

								</div>
								</form><?php endforeach; endif; ?>
						</div>
					</div><br>

					<div class="row-fluid">
						<div class="row-fluid">
							<span class="glyphicon glyphicon-list"></span>
							最新动态
							<span class="pull-right">
								<a href="">>></a>
							</span>
						</div><hr>
						<div class="row-fluid">
							<ul>
								<li>
									<a href="#">第一篇
										<div class="pull-right">></div>
									</a>
								</li>
								<hr>
								<li>
									<a href="">第二篇
										<div class="pull-right">></div>
									</a>
								</li>
								<hr>
								<li>
									<a href="">第三篇
										<div class="pull-right">></div>
									</a>
								</li>
								<hr>
							</ul>
							
						</div>
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