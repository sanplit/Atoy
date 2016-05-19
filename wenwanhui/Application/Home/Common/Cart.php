<?php

/**
 * author: Sanplit
 * CreateTime: 16/04/28 17:22
 * Description:
 */
class Cart  extends Think
{
	//当前购物车名
	public $sessionName;

	//购物车总价格
	public $totalPrice;

	public function __construct($sessionName)
	{
		$this->sessionName = $sessionName;

		if (!isset($_SESSION[$this->sessionName])) {
			$_SESSION[$this->sessionName] = '';
		}
	}

	//获取购物车信息
	public function getCart()
	{
		$cur_cart_array = $_SESSION[$this->sessionName];

		return $cur_cart_array;
	}

	//获取购物车商品清单
	public function getCartList()
	{
		$cur_cart_array = $_SESSION[$this->sessionName];
		if($cur_cart_array == ''){

			$goods_data = M('cart');
			$len = count($cur_cart_array);

			for($i = 0; $i < $len, $i ++){
				$goods_id = $cur_cart_array[$i]['pid'];
				$num = $cur_cart_array[$i]['count'];

				$list = $goods_data->where()->select();


			}
		}

	}

}