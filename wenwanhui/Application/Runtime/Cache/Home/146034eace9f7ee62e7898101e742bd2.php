<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title><?php echo ($title); ?>--会员中心</title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="/Public/css/weblr.css">

		<script type="text/javascript" src="/Public/js/angular.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				

				<div id="webCenter" class="col-md-6 alert-success" style="height: 100%;">
					<nav class="navbar navbar-default alert-success">
						<div>
							<a href="<?php echo U('Home/Index/index');?>">
								<div class="glyphicon glyphicon-chevron-left pull-left"></div>
							</a>
							<div class="text-center"><h3>会员中心</h3></div>
						</div>
					</nav>
					<div class="row-fluid">
						<h4>
							<img src="/Public/images/tou.png" alt="头像 " style="width: 20%;" class="img-circle">
                            你好，<?php echo ((isset($session) && ($session !== ""))?($session):"陌生人"); ?>
							<span class="alert-danger">普通会员</span>
						</h4>
					</div><hr>
					<ul ng-app="myApp" ng-controller="myProfile">

						<div class="span12">
							<div class="accordion" id="accordion-391839">
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-391839" href="#accordion-element-39273">
											<li>
												<h4>

													<div style="color: rgb(200, 0, 0);" class="glyphicon glyphicon-user">个人资料</div>
													<div class="pull-right">></div>

												</h4>
											</li>
										</a>
									</div>
									<div id="accordion-element-39273" class="accordion-body in collapse">
										<div class="accordion-inner">
											用户名：<?php echo ($umsg["username"]); ?><br>
											密码：<?php echo ($umsg["passwd"]); ?><br>
											邮箱：<?php echo ((isset($umsg["email"]) && ($umsg["email"] !== ""))?($umsg["email"]):'null'); ?><br>
											手机：<?php echo ((isset($umsg["phone"]) && ($umsg["phone"] !== ""))?($umsg["phone"]):'null'); ?><br>
											个性签名：<?php echo ((isset($umsg["sign"]) && ($umsg["sign"] !== ""))?($umsg["sign"]):'null'); ?><br>
										</div>
									</div>
								</div>
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-391839" href="#accordion-element-441589">
											<li>
												<h4>
													<div style="color: rgb(255, 140, 60);" class="glyphicon glyphicon-lock">修改信息</div>
													<div class="pull-right">></div>
												</h4>
											</li>
										</a>
									</div>
									<div id="accordion-element-441589" class="accordion-body collapse">
										<div class="accordion-inner">
											<form action="/Home/Index/profile.shtml" method="post">
												<div class="form-group">
													<div class="input-group input-group-lg">
														<span class="input-group-addon">&nbsp;账&nbsp; 号：</span>
														<input name="name" class="form-control" type="text" placeholder="请输入账号（必填）" required />
													</div>
													<div class="input-group input-group-lg">
														<span class="input-group-addon">&nbsp;账&nbsp; 号：</span>
														<input name="name" class="form-control" type="text" placeholder="请输入账号（必填）" required />
													</div>
													<div class="input-group input-group-lg">
														<span class="input-group-addon">&nbsp;账&nbsp; 号：</span>
														<input name="name" class="form-control" type="text" placeholder="请输入账号（必填）" required />
													</div>
													<div class="input-group input-group-lg">
														<span class="input-group-addon">&nbsp;账&nbsp; 号：</span>
														<input name="name" class="form-control" type="text" placeholder="请输入账号（必填）" required />
													</div>
													<div class="control-group">
														<div class="controls text-center">
															<button type="submit" class="btn btn-primary btn-lg btn-block">确定修改</button><br>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>

						
					</ul>
						
						
					<hr>

				</div>

				
			</div>

		</div>

	</body>
	<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
</html>