<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{ //对应数据库中的表user

	/**
	 * 自动验证
	 * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
	 * self::MUST_VALIDATE 或者1 必须验证
	 * self::VALUE_VALIDATE或者2 值不为空的时候验证
	 */
	protected $_validate = array(
		//array('验证字段','验证规则','错误提示','验证条件','附加规则','验证时间')
		array('username', 'require', '用户名不能为空!'),
		array('username', 'checklen', '用户名长度过长或过短', 0, 'callback'),
		array('passwd', 'checklen', '密码长度过长或过短', 0, 'callback'),
		array('username', '', '该用户名已被注册！', 0, 'unique', 1), // 在新增的时候验证name字段是否唯一
		array('passwd', 'require', '请认真填写密码'),
		array('repass', 'require', '重复密码不能为空'),
		array('passwd', 'repass', '两次密码不一致', 0, 'confirm'),
		array('phone', '/^1[3|4|5|8]\d{9}$/', '手机格式不正确'),
		array('email', 'email', '邮箱格式不正确'),
		array('verify', 'verify_check', '验证码错误', 0, 'function'), // 判断验证码是否正确
	);

	function checklen($data){
		if(strlen($data) > 16 || strlen($data) < 4){
			return false;
		}else{
			return true;
		}
	}

	/**
	 * 自动完成（自动填充）
	 * @var array
	 */
	protected $_anto = array(

		array('passwd', 'md5', 1, 'function'),  // 对passwd字段在新增和编辑的时候使md5函数处理
		array('repass', 'md5', 1, 'function'),
		array('frist_date', 'forTime', 3, 'function'),   //字段在新增的时候写入当前时间戳
	);

	public function forTime(){
		return date('Y-m-d H:i:s', time());
	}

	/**
	 * 自动映射（字段映射）
	 * @var array
	 */
	protected $_map = array(


	);

}

