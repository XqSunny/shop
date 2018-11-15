<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<title>购物车</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action="<?php echo U('Goods/order');?>" method="post">
			<input type="button" value="全选">
			<table>
				<?php if(is_array($res)): foreach($res as $k=>$v): ?><tr>
					<td><input type="checkbox" name="cart_id" value="<?php echo ($v["cart_id"]); ?>"></td>
					<td><span><img src=""></span></td>
					<td><?php echo (urldecode($v['goods_name'])); ?></td>
					<td><?php echo (urldecode($v["goods_attr"])); ?></td>
					<td>原价：<?php echo ($v["market_price"]); ?>   现价：<?php echo ($v["goods_price"]); ?></td>
					<td><button>-</button><input type="text" name="number" value="<?php echo ($v["buy_number"]); ?>"/><button>+</button></td>
					<td>￥<?php echo ($v['goods_price']*$v['buy_number']); ?></td>
					<td><a>删除</a></td>
				</tr><?php endforeach; endif; ?>
			</table>
			<input type="submit" value="购买">
		</form>
	</body>

</html>