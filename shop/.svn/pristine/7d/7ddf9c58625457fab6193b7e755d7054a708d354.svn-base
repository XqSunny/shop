<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            X-admin v1.0
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/Public/Admin/css/x-admin.css" media="all">
    </head>
    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
              <a><cite>首页</cite></a>
              <a><cite>会员管理</cite></a>
              <a><cite>分类管理</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <form class="layui-form x-center" action="" method="post" style="width:50%">
                <div class="layui-form-pane" style="margin-top: 15px;">
                  <div class="layui-form-item">
                   
                    <div class="layui-input-inline" style="width:120px">
                        <input type="text" name="type_name"  placeholder="分类名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <a  href="<?php echo U('Goods/add');?>" class="layui-btn"><i class="layui-icon">&#xe608;</i>增加</a>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
						<th>
                            所属分类
                        </th>
                        <th>
                            产品名
                        </th>
						<th>
                            品牌
                        </th>
						<th>
                            原件/售价
                        </th>
						<th>
                            库存
                        </th>
						<th>
                            添加时间
                        </th>
						<th>
                            精品/最新/热销
                        </th>
						<th>
                            促销
                        </th>
						<th>
                            促销时间
                        </th>
						<th>
                            促销价格
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody id="x-link">
				<?php if(is_array($res)): foreach($res as $key=>$v): ?><tr>
                        <td>
                            <input type="checkbox" value="<?php echo ($v["goods_id"]); ?>" name="goods_type_id">
                        </td>
                        <td>
                            <?php echo ($v["goods_id"]); ?>
                        </td>
                        <td>
                            <?php if(array_key_exists($v['cat_id'],$arr)): echo ($arr[$v['cat_id']]); endif; ?>
                        </td>
						<td>
                            <?php echo ($v["goods_name"]); ?>
                        </td>
						<td>
                           <?php if(array_key_exists($v['brand_id'],$arr1)): echo ($arr1[$v['brand_id']]); endif; ?>
                        </td>
						<td>
                            <?php echo ($v["market_price"]); ?>/<?php echo ($v["shop_price"]); ?>
                        </td>
						<td>
                            <?php echo ($v["goods_number"]); ?>
                        </td>
						<td>
                            <?php echo ($v["add_time"]); ?>
                        </td>
						<td>
                            <?php if($v['is_best'] == 0): ?>是<?php else: ?>不是<?php endif; ?>/<?php if($v['is_new'] == 0): ?>是<?php else: ?>不是<?php endif; ?>/<?php if($v['is_hot'] == 0): ?>是<?php else: ?>不是<?php endif; ?>
                        </td>
						<td>
                            <?php if($v['is_promote'] == 0): ?>是<?php else: ?>不是<?php endif; ?>
                        </td>
						<td>
                            <?php echo ($v["promote_start_date"]); ?>--<?php echo ($v["promote_end_date"]); ?>
                        </td>
						<td>
                            <?php echo ($v["promote_price"]); ?>
                        </td>
                        <td class="td-manage">
                            <a title="编辑" href="javascript:;" onclick="cate_edit('编辑','cate-edit.html','4','','510')"
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a title="删除" href="javascript:;" onclick="cate_del(this,'1')" 
                            style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
							<a title="属性" href="<?php echo U('Goods/addsttr','goods_id='.$v['goods_id']);?>" 
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">+</i>
                            </a>
							<a title="属性列表" href="<?php echo U('Goods/attr','goods_id='.$v['goods_id']);?>" 
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">💬</i>
                            </a>
							<a title="货品列表" href="<?php echo U('Goods/products','goods_id='.$v['goods_id']);?>" 
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">🚛</i>
                            </a>
							<a title="相册" href="<?php echo U('Goods/gallery','goods_id='.$v['goods_id']);?>" 
                            class="ml-5" style="text-decoration:none">
                                <i class="layui-icon">🖼</i>
                            </a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
        <script src="/Public/Admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="/Public/Admin/js/x-layui.js" charset="utf-8"></script>
        <script>
            layui.use(['element','layer','form'], function(){
                $ = layui.jquery;//jquery
              lement = layui.element();//面包导航
              layer = layui.layer;//弹出层
              form = layui.form();

              //监听提交
              form.on('submit(add)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("增加成功", {icon: 6});
                $('#x-link').prepend('<tr><td><input type="checkbox"value="1"name=""></td><td>1</td><td>1</td><td>'+data.field.name+'</td><td class="td-manage"><a title="编辑"href="javascript:;"onclick="cate_edit(\'编辑\',\'cate-edit.html\',\'4\',\'\',\'510\')"class="ml-5"style="text-decoration:none"><i class="layui-icon">&#xe642;</i></a><a title="删除"href="javascript:;"onclick="cate_del(this,\'1\')"style="text-decoration:none"><i class="layui-icon">&#xe640;</i></a></td></tr>');
                return false;
              });


            })



              
            //批量删除提交
             function delAll () {
                layer.confirm('确认要删除吗？',function(index){
                    //捉到所有被选中的，发异步进行删除
                    layer.msg('删除成功', {icon: 1});
                });
             }

             //-编辑
            function cate_edit (title,url,id,w,h) {
                x_admin_show(title,url,w,h); 
            }
           
            /*-删除*/
            function cate_del(obj,id){
                layer.confirm('确认要删除吗？',function(index){
                    //发异步删除数据
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                });
            }
            </script>
            <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>
</html>