<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title><?php echo ($title); ?>--会员注册</title>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="/Public/css/weblr.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid">
				

				<div id="webCenter" class="col-md-6 alert-success" style="height: 100%;">
					<nav class="navbar navbar-default alert-success">
						<div>
							<a href="index">
								<div class="glyphicon glyphicon-chevron-left pull-left"></div>
							</a>
							<div class="text-center"><h3>会员注册</h3></div>
						</div>
					</nav>
					<div class="row-fluid">
						<form method="post" action="/Home/User/checkReg">
							<div class="form-group">
			                    <div class="input-group input-group-lg">
			                        <span class="input-group-addon">账 号：</span>
			                        <input name="username" class="form-control" type="text" ng-model="user.name" placeholder="请输入账号（必填）" ng-disabled="inProgress" ng-minlength=3 ng-maxlength=20 required tabindex="1" />
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="input-group input-group-lg">
			                        <span class="input-group-addon">密 码：</span>
			                        <input name="passwd" class="form-control" type="password" ng-model="user.pass" placeholder="请输入密码（必填）" ng-disabled="inProgress" ng-minlength=3 ng-maxlength=20 required tabindex="2" />
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="input-group input-group-lg">
			                        <span class="input-group-addon">密 码：</span>
			                        <input name="repass" class="form-control" type="password" ng-model="user.rePass" placeholder="请输入确认密码（必填）" ng-disabled="inProgress" ng-minlength=3 ng-maxlength=20 required tabindex="3" />
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="input-group input-group-lg">
			                        <span class="input-group-addon">邮 箱：</span>
			                        <input name="email" class="form-control" type="text" ng-model="user.email" placeholder="请输入邮箱" ng-disabled="inProgress"  />
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="input-group input-group-lg">
			                        <span class="input-group-addon">电 话：</span>
			                        <input name="phone" class="form-control" type="text" ng-model="user.phone" placeholder="请输入电话" ng-disabled="inProgress"/>
			                    </div>
			                </div>
			                 <div class="form-group">
			                    <div class="input-group">
			                        <span class="input-group-addon">个性签名：</span>
			                        <textarea name="sign" class="form-control" rows="4" type="text" ng-model="user.sign" placeholder="请留下你的个性签名"></textarea>
			                    </div>
			                </div>

							<div class="control-group">
								<div class="controls text-center">									
									<button type="submit" class="btn btn-primary btn-lg btn-block">注册</button><br>
									已有账号？立即<a href="login">登录</a>
								</div>

							</div>
							
						</form>


					</div>

				</div>

				
			</div>

		</div>

	</body>

</html>