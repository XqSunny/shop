<?php
namespace Home\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function list1(){
		$res = M('goods')->join('ds_brand on ds_goods.brand_id=ds_brand.brand_id')->select();
		$this->assign('res',$res);
		$this->display('list');
	}
	public function goodsdata(){
		$goods_id = I('get.goods_id');
		$res = M('goods')->join('ds_brand on ds_goods.brand_id=ds_brand.brand_id')->where("goods_id=$goods_id")->find();
		//查出商品属性
		$res1 = M('goods_attr')->alias('a')->join("ds_attribute b on a.attr_id=b.attr_id")->where('goods_id='.$goods_id)->order('a.attr_id')->select();
		//商品属性分组
		$res2 = M('goods_attr')->alias('a')->join("ds_attribute b on a.attr_id=b.attr_id")->where('goods_id='.$goods_id)->group('a.attr_id')->select();
		$res3 = M('goods_gallery')->where("goods_id=$goods_id")->select();
		$this->assign("res3",$res3);
		$this->assign("res2",$res2);
		$this->assign("res1",$res1);
		$this->assign("goods",$res);
		$this->display('shopdetail');
	}
	function che(){
		$goods_id = I('post.goods_id');
		$number = I('post.number');
		$attr_list = I('post.attr_list');
		$str = "";
		foreach($attr_list as $k=>$v){
			$str .= $v.",";
		}
		//商品属性
		$str = rtrim($str,",");
		$P = M('products')->where("goods_id=$goods_id and attr_list='$str'")->find();
		//库存
		$sku = $P['sku'];
		//商品价钱
		$goods_price = $P['goods_price'];
		//货品货号
		$goods_sn = $P['product_sn'];
		$products_id = $P['product_id'];
		$G = M('goods')->where("goods_id=$goods_id")->find();
		$market_price = $G['market_price'];
		$goods_name = $G['goods_name'];
		$arr = array(
			"goods_id"=>$goods_id,
			"goods_sn"=>$goods_sn,
			"goods_name"=>$goods_name,
			"product_id"=>$products_id,
			"market_price"=>$market_price,
			"goods_price"=>$goods_price,
			"goods_attr"=>$str,
			"buy_number"=>$number
		);
		//判断登没登陆
		if(empty(session("user"))){
			//先看购物车内是否有值
			$num = count(cookie('car'));
			//$num>0 查询购物车内是否有当前货品id 如果有 cookie里的buy_number = cookie里的$buy_number  +  现在的number
			cookie("car[$num]",$arr,time()+3600*24);
			echo "加入购物车成功";
		}else{
			$user = session('user');
			$user_id = $user['user_id'];
			$arr['user_id'] = $user['user_id'];
			//查询购物车内是否有当前商品
			$res1 = M("cart")->where("user_id='$user_id' and goods_sn='$goods_sn'")->select();
			if(!empty($res1)){
				//原数量
				$yuan_num = $res1[0]['buy_number'];
				//新数量
				$xin_num = $yuan_num + $number;
				//购物车id
				$id= $res1[0]['cart_id'];
				$arr = array("buy_number"=>$xin_num,"cart_id"=>$id);
				$res = M("cart")->save($arr);
			}else{
				$res = M('cart')->add($arr);
			}
			if($res){
				echo "加入购物车成功";
			}else{
				echo "加入购物车失败";
			}
		}
		

	}
	function car(){
		if(session('user')){
			$user= session('user');
			$user_id = $user['user_id'];
			$arr = M("cart")->where("user_id=$user_id")->select();
			
		}else{
			$car = cookie("car");
			$arr =array();
			foreach($car as $v){
				$x = substr($v,6);
				$arr[] = json_decode($x,true);
			}
		}
        $this->assign("res",$arr);
		$this->display("mycart");
	}
	function order(){
		//查询订单详细信息
		$cart_id = I("post.cart_id");
		$res = M("cart")->where("cart_id=$cart_id")->select();
		//查询配送方式
		$res1=M("shipping")->select();
		//查询支付方式
		$res2 = M("pay")->select();
		//查询地址
		$res3 = M("user_address")->where("parent_id=0")->select();
		$this->assign("res",$res);
		$this->assign("res1",$res1);
		$this->assign("res2",$res2);
		$this->assign("res3",$res3);
		$this->display();
	}
	//四级联动
	function dong(){
		//接下来的下拉框id
		$type = I('post.type');
		//给出name
		switch($type){
			case 1:
			$ji = "sheng";
			$name = "province";
			break;
			case 2:
			$ji = "shi";
			$name = "city";
			break;
			case 3:
			$ji = "xian";
			$name = "district";
			break;
		}
		$id = I('post.id');
		$res = M("user_address")->where("parent_id=$id")->select();
		$ji1 = $type +1;
		$str = "<select id='$ji' name='$name'";
		if($type==3){
			$str .=" >";
		}else{
			$str .="onchange='dong(this,$ji1)'>";
		}
		
		foreach($res as $v){
			$str .= "<option value='".$v['region_id']."'>".$v['region_name']."</option>";
		}
		$str .= "</select>";
		echo $str;
	}
	//下订单
	function buy(){
		$arr = I('post.');
		$cart_id = I("post.cart_id");
		//邮寄方式
		$shipping_id = I("post.shipping_id");
		//支付方式
		$pay_id = I("post.pay_id");
		//订单生成时间
		$arr['add_time'] = date("Y-m-d H:i:s");
		//订单号
		$arr['order_sn'] = "abcdefbg".$cart_id;
		$user = session('user');
		$arr['user_id'] = $user['user_id'];
		$res=M('shipping')->where("shipping_id=$shipping_id")->find();
		$arr['shipping_name'] = $res['shipping_name'];
		$arr['shipping_fee'] = $res['insure'];
		$res1=M('pay')->where("pay_id=$pay_id")->find();
		$arr['pay_name'] = $res1['pay_name'];
		//添加订单
		$res2 = M("order_info")->add($arr);
		if($res2){
		//将订单商品信息保存起来 
		//将购物车内的当条数据取出来
		$che = M('cart')->where("cart_id=$cart_id")->find();
		$che['order_id'] = $res2;
		//添加进订单详情信息中
		$res4 = M("order_goods")->add($che);
		if($res4){
			//删除购物车内的当条数据
			$res3 = M('cart')->where("cart_id=$cart_id")->delete();
			if($res3){
				$this->success("订单生成成功",U("Index/index"));
			}else{
				$this->error("购物车清空失败");
			}
		}else{
			M("order_info")->delete($res2);
			$this->error("订单生成失败");
		}
		}else{
			$this->error("订单生成失败");
		}
		
	}
	
}