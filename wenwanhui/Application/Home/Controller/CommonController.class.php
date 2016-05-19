<?php
/**
 * author: Sanplit
 * CreateTime: 16/04/26 12:24
 * Description:
 */

namespace Home\Controller;
use Think\Controller;
use Think\Think;

class CommonController extends Controller{

	/**
	 * 自动执行
	 */
	public function _initialize(){

		$this->assign('title', C('WEB_TITLE'));
		$this->assign('info', C('WEB_INFO'));
		$this->assign('session', $_SESSION['username']);
	}

}