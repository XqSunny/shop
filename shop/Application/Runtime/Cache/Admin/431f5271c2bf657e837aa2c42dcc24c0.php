<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
	<meta charset="utf-8">
	</head>
	<body>
		<form action="<?php echo U('Goods/doaddpro');?>" method="post">
		<input type="hidden" name="goods_id" value="<?php echo ($goods_id); ?>">
		货号:<input type='text' name="product_sn">
		<?php if(is_array($res1)): foreach($res1 as $key=>$v1): echo ($v1["attr_name"]); ?>:
			<?php if(is_array($res)): foreach($res as $key=>$v): if($v1['attr_id'] == $v['attr_id']): ?><input type="radio" name="attr_list[<?php echo ($v["attr_id"]); ?>]" value="<?php echo ($v["attr_value"]); ?>"><?php echo ($v["attr_value"]); ?>  &nbsp;&nbsp;<?php endif; endforeach; endif; ?>
			<br/><?php endforeach; endif; ?>
		库存:<input name="sku">
		<input type='submit' value="添加">
		</form>
	</body>
</html>