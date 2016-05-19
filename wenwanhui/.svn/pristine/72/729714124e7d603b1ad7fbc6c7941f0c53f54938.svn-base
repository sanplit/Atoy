<?php
/**
 * author: Sanplit
 * CreateTime: 16/04/25 11:09
 * Description:
 */
namespace Admin\Model;
use Think\Model;

class LoginModel extends Model {
	// 重新定义表
	protected $tableName = 'admin';

	/**
	 * 自动验证
	 * self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
	 * self::MUST_VALIDATE 或者1 必须验证
	 * self::VALUE_VALIDATE或者2 值不为空的时候验证
	 */
	protected $_validate = array(
		array('admin_name', 'require', '用户名不能为空！'), //默认情况下用正则进行验证
		array('passwd', 'require', '登录密码不能为空！'), // 默认情况下用正则进行验证
		array('verify', 'verify_check', '验证码错误', 0, 'function'), // 判断验证码是否正确
	);

	/**
	 * 自动完成
	 */
	protected $_auto = array (
		/* 登录的时候自动完成 */
		array('passwd', 'md5', 3, 'function') , // 对passwd字段使用md5函数处理
		array('last_date', 'fortime', 1, 'function'), // 对last_date字段在登录的时候写入当前时间戳
		array('last_ip', 'get_client_ip', 1, 'function'), // 对last_ip字段在登录的时候写入当前登录ip地址
	);

	public function forTime(){
		return date('Y-m-d H:i:s', time());
	}
}