<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<title>商城系统管理后台</title>
<meta charset="UTF-8">
<frameset rows="60,*,30">
    <frame frameborder="0" noresize="noresize" name="top" src="<?php echo U('Admin/Index/top');?>" scrolling="no" framespacing="0">
    <frameset cols="200,*" >
        <frame frameborder="0" noresize="noresize" name="left" src="<?php echo U('Admin/Index/left');?>" scrolling="auto" framespacing="0">
        <frame frameborder="0" noresize="noresize" name="right" src="<?php echo U('Admin/Index/right');?>" scrolling="auto" framespacing="0">
    </frameset>
    <frame frameborder="0" noresize="noresize" name="bottom" src="<?php echo U('Admin/Index/bottom');?>" scrolling="no" framespacing="0">
</frameset>
</html>