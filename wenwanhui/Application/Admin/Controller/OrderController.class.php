<?php
/**
 * author: Sanplit
 * CreateTime: 16/04/29 15:16
 * Description:
 */

namespace Admin\Controller;
use Think\Controller;

class OrderController extends CommonController
{
	public function index(){
		$this->display();
	}

	/**
	 * 订单列表
	 */
	public function order_list(){
		$order = M('cart');
		//分页操作
		$msg_count = $order->where(true)->count();
		$p = getpage($msg_count, 6);

		//订单列表
		$list = $order->where(true)->limit($p->firstRow, $p->listRows)->select();

		//用户信息
		foreach($list as $k => $v){
			$uid = $list[$k]['uid'];
			$user = M('user')->where('uid = "'.$uid.'"')->field('username')->select();

			$a = array_merge($list, $user[0]);
			$chunk = array_chunk($list, $k);

			$list[$k]['username'] = $user[0]['username'];
		}

		$this->assign('page', $p->show());
		$this->assign('order_list', $list);
		$this->display();
	}

	/**
	 * 订单删除
	 * @param null $id 订单ID
	 */
	public function order_del($id = null){
        $sid = I('sid', 'get');
        $uid = I('uid', 'get');

        $order = M('cart');
        $order_del = $order->where('sid = "'.$sid.'" and uid = "'.$uid.'"')->delete();

        if($order_del > 0){
            $this->success('订单删除成功');
        }else{
            $this->error('订单删除失败！');
        }
	}

    /**
     * 审核发货
     */
    public function order_send()
    {
        $sid = I('sid', 'get');
        $uid = I('uid', 'get');

        $order = M('cart');
        $status_arr = $order->where('sid = "' . $sid . '" and uid = "' . $uid . '"')->field('status')->select();
        $status = $status_arr[0]['status'];

        switch ($status) {
            case 0:
                echo "<script>alert('订单尚未审核，无法发货！');history.back(-1);</script>";
                break;
            case 1:
                echo "<script>alert('订单审核中，请稍后再试~');history.back();</script>";
                break;
            case 2:
                $send = $order->where('sid = "' . $sid . '" and uid = "' . $uid . '"')->data(array('status' => '3'))->save();
                if ($send > 0) {
                    $this->success('发货成功');
                } else {
                    $this->error('发货失败！');
                }
                break;
            case 3:
                echo "<script>alert('订单已发货！');history.back();</script>";
                break;
            default:
                $this->error('操作失败！');
        }
    }
    /**
     * 添加订单
     */
    public function order_add(){

        echo "<script>alert('待完善，请稍后~');history.back(0);</script>";
    }




}