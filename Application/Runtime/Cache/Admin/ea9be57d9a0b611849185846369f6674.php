<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border="1px" cellspacing="0">
        <tr>
            <td>文章ID</td>
            <td>文章标题</td>
            <td>栏目ID</td>
            <td>标题</td>
            <td>描述</td>
            <td>添加时间</td>
            <td>内容</td>
            <td>是否显示</td>
            <td>排序</td>
            <td>操作</td>
        </tr>

        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["aid"]); ?></td>
            <td><?php echo ($vo["title"]); ?></td>
            <td><?php echo ($vo["cid"]); ?></td>
            <td><?php echo ($vo["descrption"]); ?></td>
            <td><?php echo ($vo["author"]); ?></td>
            <td><?php echo ($vo["addtime"]); ?></td>
            <td><?php echo ($vo["content"]); ?></td>
            <td><?php echo ($vo["status"]); ?></td>
            <td><?php echo ($vo["a_ord"]); ?></td>
            <td><a href="">更新</a><a href="">删除</a></td>

        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>

</body>
</html>