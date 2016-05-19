<?php
namespace Home\Controller;
use Think\Controller;
use Think\Think;

class IndexController extends CommonController {

	/**
	 * 商城主页
	 */
    public function index(){

	    $m = M('product');
	    $list = $m->where(true)->order('date')->limit(4)->select();
        $this->assign('re_list', $list);
        $this->display();
    }

	/**
	 * 登录页
	 */
    public function login(){
        $this->display();
    }

	/**
	 * 商品列表
	 */
    public function product(){
	    $m = M('product');
		//获取商品总数
	    $count = $m->where(true)->count();
		//分页查询
	    $p = getpage($count, 4);
	    $list = $m->where(true)->order('pid')->limit($p->firstRow, $p->listRows)->select();
	    $this->assign('page', $p->show());

	    $this->assign('pro_list', $list);
        $this->display();
    }

	/**
	 * 产品分类
	 */
	public  function category(){
		//获取分类信息
		$cm = M('category');
		$clist = $cm->where(true)->select();

		//获取关联分类数据
		$pm = M('product');
		foreach($clist as $k => $v){
			$plist[$k] = $pm->join('__CATEGORY__ ON product.cid =  category.cid', 'left')
							->where('category.cid = "'.$v['cid'].'"')
							->select();

			//var_dump($clist[$k]);
		}

		$p1 = $pm->where('cid = 1')->select();
		$p2 = $pm->where('cid = 2')->select();
		$p3 = $pm->where('cid = 3')->select();
$pp = array_merge($plist, $p1);


		foreach($plist as $k => $v){
//			var_dump($plist[$k][0]['name']);
//			var_dump($plist[$k][0]['cid']);

			$re[$k['cid']][] = $v;
		}

		//$plist = array_chunk($plist, 2);
		$this->assign('cate_list', $clist);  //分类列表
		$this->assign('pro_list', $plist);  //分类商品列表
		$this->assign('test', $re);
		$this->assign('pro1', $p1);
		$this->assign('pro2', $p2);
		$this->assign('pro3', $p3);

		$this->display();
	}

	/**
	 * 产品搜索
	 */
	public function  getSearch(){
		$m = M('product');

		$plist = $m->where()->select();

		var_dump($plist);
	}

	/**
	 * 用户资料
	 */
	public function profile(){
		if(!isset($_SESSION['username'])){
			$this->success("你还未登录哦~请登录后查看", __APP__ . "/Home/Index/login");
		}else{

			$user = M('user');
			$umsg = $user->where('uid = "'.$_SESSION['uid'].'"')->select();

			$this->assign('umsg', $umsg[0]);
			$this->display();
		}
	}





}