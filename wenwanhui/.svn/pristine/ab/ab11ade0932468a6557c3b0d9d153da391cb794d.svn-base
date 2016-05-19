<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends CommonController {

    /**
     * 系统首页
     * @package Home\Controller
     */
    public function index(){
        //获取当前账户的登录信息
        //$info = M('admin')->field('name, loginnum, last_ip, last_date')->where(array('aid' => parent::$userid))->find();
        $info = M('admin')->field('name, loginnum, last_ip, last_date')->where('aid = "'.session('aid').'"')->select();

        $this->assign('info', $info);
        $this->assign('SERVER_SOFTWARE', $_SERVER['SERVER_SOFTWARE']);
        $this->display();
    }

    /**
     * 商品列表
     */
    public function pro_list(){
        $pro = M('product');

        $count = $pro->where(true)->count();
        $p = getpage($count, 4);
        $list = $pro->where(true)->order('pid')->limit($p->firstRow, $p->listRows)->select();

        //$s = M('category')->join('product on category.cid = product.cid')->where('product.cid = 3')->field('name')->select();

        //分类信息
        foreach($list as $k => $v){
            $cate[$k] = M('category')->field('name')->where('cid = "'.$list[$k]['cid'].'"')->select();

            $list[$k]['cate'] = $cate[0][0]['name'];
        }

        session('attr', $list); //商品属性
        $this->assign('page', $p->show());
        $this->assign('pro_list', $list);

        $this->display();
    }

    /**
     * 商品属性：1 商品修改 2 商品添加
     */
    public function pro_attr(){
        $pro = M('product');
        //获取商品种类
        $cate = M('category');
        $cate_list = $cate->where()->field('name')->select();

        //判断跳入方式 修改 or 添加
        if($_POST['alter']){
            $shop_title = "商品修改";
            $attr = "mod";

            //获取修改信息
            $pid = I('post.pid')-1;
            $shop_attr = $_SESSION['attr'][$pid];

            if($_POST['attr']){
                if($pro->create()) {
                    $update = $pro->where()->data($shop_attr)->save();

                    if($update){
                        $this->success('修改成功');
                    }else{
                        $this->error('修改失败！');
                    }

                }else{
                    $this->error('修改失败！！');
                }
            }

        }else{
            $shop_title = "商品添加";
            $attr = "add";

            //获取添加数据
            $data['cate'] = I('post.cate');
            $data['title'] = I('post.title');
            $data['count'] = I('post.count');
            $data['price'] = I('post.price');
            $data['des'] = I('post.decription');
            $data['pic'] = I('post.pic');
            $data['date'] = date('Y-m-d H:i:s', time());
            $cid = M('category')->where('name = "'.$data['cate'].'"')->select();
            $data['cid'] = $cid[0]['cid'];

            $shop_attr = array();

            if($_POST['attr']){
                if($pro->create()){
                    $res = $pro->add($data);

                    if($res){
                        echo "<script>alert('商品添加成功！');</script>";
                    }else{
                        $this->error('商品添加失败！');
                    }
                }else{
                    $this->error('操作失败！！');
                }
            }

        }

        //上传图片操作
        $this->upimage();

        $this->assign('cate_list', $cate_list);
        $this->assign('shop_title', $shop_title);
        $this->assign('attr', $shop_attr);

        $this->display();
    }

    /**
     * 产品删除
     * @param null $id 产品ID
     */
    public function pro_del($id = null){
        $pid = I('pid', 'get');

        $pro = M('product');
        $pro_del = $pro->where('pid = "'.$pid.'"')->delete();

        if($pro_del > 0){
            $this->success('产品删除成功');
        }else{
            $this->error('产品删除失败！');
        }
    }

    public function upimage(){
        //上传文件类型列表
        $uptypes=array(
            'image/jpg',
            'image/jpeg',
            'image/png',
            'image/pjpeg',
            'image/gif',
            'image/bmp',
            'image/x-png'
        );

        $max_file_size = 2000000;     //上传文件大小限制, 单位BYTE
        $destination_folder = "uploadimg/"; //上传文件路径
        $watermark = 1;      //是否附加水印(1为加水印,其他为不加水印);
        $watertype = 1;      //水印类型(1为文字,2为图片)
        $waterposition = 1;     //水印位置(1为左下角,2为右下角,3为左上角,4为右上角,5为居中);
        $waterstring = "文玩汇";  //水印字符串
        //$waterimg="xplore.gif";    //水印图片
        $imgpreview = 1;      //是否生成预览图(1为生成,其他为不生成);
        $imgpreviewsize = 1/2;    //缩略图比例

//        if($_POST['attr']){
//            if(!@is_uploaded_file($_FILES['upfile'][tmp_name])){
//                echo '图片不存在';
//                exit;
//            }
//        }


        $this->assign('uptype', $uptypes);
    }


}