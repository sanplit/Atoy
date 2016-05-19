<?php
/**
 * author: Sanplit
 * Date: 16/04/25
 * Time: 10:43
 */
namespace Admin\Controller;
use Think\Controller;

class LoginController   extends Controller {
	/**
	 * 管理登录
	 */
	public function login(){
		//判断提交方式
		if(IS_POST){

			$name = I('post.admin_name');
			$passwd = md5(I('post.passwd'));

			//实例化Login对象
			$login = D('login');

			//自动验证 创建数据集
			if(!$data = $login->create()){
				//防止输出中文
				header("Content-type:text/html; charset=utf-8");
				exit($login->getError());
			}
			//var_dump($data);
			//组合查询条件
			$where = array();
//			$where['name'] = $data['admin_name'];
			$result = $login->where('name = "'.$name.'" and passwd = "'.$passwd.'"')->field('aid, name, passwd, last_date, last_ip')->find();

			//验证用户名 对比 密码
			if($result && $result['passwd'] == $result['passwd']){
				//存储session
				session('aid', $result['aid']);
				session('sys_admin', $result['aid']);
				session('name', $result['name']);
				session('last_date', $result['last_date']);
				session('last_ip', $result['last_ip']);

				//更新用户登录信息
				$where['aid'] = session('aid');
				$data['last_date'] = date('Y-m-d H:i:s', time());
				$data['last_ip'] = get_client_ip();


				M('admin')->where($where)->setInc('loginnum', 1);  // 登录次数加 1
				M('admin')->where($where)->save($data);   // 更新登录时间和登录ip

				$this->success('登录成功,正跳转至系统首页...', U('Index/index'));
			} else {
				$this->error('登录失败,用户名或密码不正确!');
			}
		} else {
			$this->display();
		}
	}

	/**
	 * 用户注销
	 */
	public function logout(){
		//清楚所有session
		session(null);
		redirect(U('Login/login'), 2, '正在注销，请稍候...');
	}

	/**
	 * 验证码
	 */
	public function verify(){
		//实例化Verify对象
		$verify = new \Think\Verify();

		//配置验证码参数
		$verify->fontSize = 14;     // 验证码字体大小
		$verify->length = 4;        // 验证码位数
		$verify->imageH = 34;       // 验证码高度
		$verify->useImgBg = true;   // 开启验证码背景
		$verify->useNoise = false;  // 关闭验证码干扰杂点
		$verify->entry();
	}
}