<?php
/**
 * User: Sanplit
 * Date: 16/04/25
 * Time: 10:36
 */
namespace Admin\Controller;
use Think\Controller;
/**
 * Class UsersController
 * @package Home\Controller
 */
class UserController extends CommonController {
	/**
	 * get users list
	 */
	public function vip_list()
	{
		$vip = M('user');

		$count = $vip->where(true)->count();
		$p = getpage($count, 8);
		$list = $vip->where(true)->order('uid')->limit($p->firstRow, $p->listRows)->select();

		$this->assign('page', $p->show());
		$this->assign('vip_list', $list);

		$this->display();
	}

	/**
	 * 会员删除
	 */
	public function user_del(){
		$uid = I('get.uid');

		$user = M('user');
		$user_del = $user->where('uid = "'.$uid.'"')->delete();

		if($user_del > 0){
			$this->success('会员删除成功！');
		}else{
			$this->error('会员删除失败！');
		}
	}
}