<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>购物车</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action="<?php echo U('Goods/buy');?>" method="post">
			<table>
				<?php if(is_array($res)): foreach($res as $k=>$v): ?><tr>
					<td><input type="hidden" name="cart_id" value="<?php echo ($v["cart_id"]); ?>"></td>
					<td><span><img src=""></span></td>
					<td><?php echo (urldecode($v['goods_name'])); ?></td>
					<td><?php echo (urldecode($v["goods_attr"])); ?></td>
					<td>原价：<?php echo ($v["market_price"]); ?>   现价：<?php echo ($v["goods_price"]); ?></td>
					<td><button>-</button><input type="text" name="number" value="<?php echo ($v["buy_number"]); ?>"/><button>+</button></td>
					<td>￥<?php echo ($v['goods_price']*$v['buy_number']); ?></td>
					<input type="hidden" name="goods_amount" value="<?php echo ($v['goods_price']*$v['buy_number']); ?>">
					
				</tr><?php endforeach; endif; ?>
				<tr>
					<td>收货地址：
					<div>
						<span id="guo1">
							<select id="guo" name="country" onchange="dong(this,1)">
							<option value="0">未选择</option >
							<?php if(is_array($res3)): foreach($res3 as $key=>$v3): ?><option value="<?php echo ($v3["region_id"]); ?>"><?php echo ($v3["region_name"]); ?></option ><?php endforeach; endif; ?>
							</select>
						</span>
						
					</div>
					</td>
				</tr>
				<tr>
				<td>详细地址：<textarea name="address">
				</textarea></td>
				</tr>
				<tr>
				<td>邮编：<input name="zipcode"/></td>
				</tr>
				<tr>
				<td>姓名：<input name="consignee"/></td>
				</tr>
				<tr>
				<td>手机号：<input name="mobile"/></td>
				</tr>
				<tr>
				<td>配送方式：<?php if(is_array($res1)): foreach($res1 as $key=>$v1): ?><input type="radio" name="shipping_id" value="<?php echo ($v1["shipping_id"]); ?>"><?php echo ($v1["shipping_name"]); endforeach; endif; ?></td>
				</tr>
				<tr>
					<td>支付方式：<?php if(is_array($res2)): foreach($res2 as $key=>$v2): ?><input type="radio" name="pay_id" value="<?php echo ($v2["pay_id"]); ?>"><?php echo ($v2["pay_name"]); endforeach; endif; ?></td>
				</tr>
				<tr>
					<td>应付：￥<?php echo ($v['goods_price']*$v['buy_number']); ?><input type="hidden" name="order_amount" value="<?php echo ($v['goods_price']*$v['buy_number']); ?>"></td>
				</tr>
				<tr>
					<td>
					留言：<textarea name="message">
					</textarea>
					</td>
				</tr>
			</table>
			<input type="submit" value="提交订单">
		</form>
	</body>
	<script type="text/javascript" src="/Public/Admin/js/jquery.min.js"></script>
	<script>
		function dong(obj,ji){
			var id = $(obj).val();
			$.post("<?php echo U('Goods/dong');?>","id="+id+"&type="+ji,function(res){
				//删除同级后面的元素
				$(obj).nextAll().remove();
				//将数据压入到标签内 html 清空写入  append 写入原有内容后
				$("#guo1").append(res);
			})
		}
	</script>
</html>