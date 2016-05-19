<?php
/**
 * author: Sanplit
 * CreateTime: 16/04/29 15:22
 * Description:
 */

namespace Admin\Controller;


class MessageController extends CommonController
{

	/**
	 * 查看留言信息
	 */
	public function msg_view(){
		$m = M('message');

		//分页操作
		$msg_count = $m->where(true)->count();
		$p = getpage($msg_count, 6);

		//留言列表
		$msg_list = $m->where(true)->limit($p->firstRow, $p->listRows)->join('user on message.uid = user.uid')->order('mid desc')->select();

		$this->assign('msg_page', $p->show());
		$this->assign('msg_list', $msg_list);

		$this->display();
	}

	/**
	 * 留言管理
	 */
	public function msg_manage(){
		$m = M('message');

		//分页操作
		$msg_count = $m->where(true)->count();
		$p = getpage($msg_count, 6);

		//获取留言列表信息
		$msg_list = $m->where(true)->limit($p->firstRow, $p->listRows)->join('user on message.uid = user.uid')->order('mid desc')->select();

		$this->assign('msg_page', $p->show());
		$this->assign('msg_list', $msg_list);

		$this->display();
	}

	/**
	 * 删除留言
	 */
	public function msg_del(){
		//获取留言ID
		$mid = I('get.mid');
		//删除留言操作
		$m = M('message');
		$msg_del = $m->where('mid = "'.$mid.'"')->delete();

		if($msg_del > 0){
			$this->success('留言删除成功');
		}else{
			$this->error('留言删除失败！');
		}
	}
}