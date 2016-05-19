<?php

namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {

	public function index(){
		$this->display();
	}

	/**
	 * 用户登录
	 */
	public function checkLogin(){

		if(IS_POST) {
			$name = I('post.name');
			$pwd = I('post.pwd', '');
			$code = I('post.verify');

			$verify = new \Think\Verify();

			$m = D('user');
			$count = $m->where("username = '" . $name . "'")->count();
			$msg = $m->where("username = '" . $name . "'")->find();

			if($count < 1){
				$this->error("该用户不存在 ");
			}else{
				if ($msg['passwd'] == $pwd){
					if(!$verify->check($code)){
						$this->error("验证码错误 ");
					}else{
						session("uid", $msg['uid']);
						session("username", $name);
						$this->success("登录成功", __APP__ . "/Home/Index/index");
					}
				}else {
					$this->error("密码错误 ");
				}
			}
		}
	}

	/**
	 * 用户注册
	 */
	public function checkReg(){
		if(IS_POST) {
			$user = D('user');
			if ($user->create()) {
				if ($user->add()) {
					$this->success('注册成功');
				} else {
					$this->error('注册失败');
				}
			} else {
				$this->error($user->getError());
			}
		}
	}

	/**
	 * 用户留言
	 */
	public function mb(){

		if(IS_POST){
			$data['user'] = $_SESSION['username'];
			$data['title'] = I('post.title');
			$data['content'] = I('post.msg');
			$data['date'] = date('Y-m-d H:i:s');

			$uid = M('user')->where('username = "'.$data["user"].'"')->field('uid')->select();

			$data['uid'] = $uid[0]['uid'];

			$m = M('message');
			if($m->create() && !empty($data['user'])){
				if($m->add($data)){
					$this->success('留言成功！', __APP__ . "/Home/Index/mb");
				} else {
					$this->error('留言失败');
				}

			}else{
				$this->error('留言失败,请登录后再试');
			}
		} else {
			//$this->display('Home/Index/mb');
			redirect(U('Home/Index/mb'));
		}

	}

	/**
	 * 用户注销
	 */
	public function logout(){

		if(isset($_SESSION['username'])){
			// 清楚所有session
			session(null);
			redirect(U('Home/Index/login'), 2, '正在注销，请稍后...');
		}else{
			$this->display('Index:index');
		}

	}

	/**
	 * 验证码
	 */
	public function verify()
	{
		// 实例化Verify对象
		$verify = new \Think\Verify();

		// 配置验证码参数
		$verify->fontSize = 14;     // 验证码字体大小
		$verify->length = 4;        // 验证码位数
		$verify->imageH = 34;       // 验证码高度
		$verify->useImgBg = false;   // 开启验证码背景
		$verify->useNoise = false;  // 关闭验证码干扰杂点
		$verify->entry();
	}
}