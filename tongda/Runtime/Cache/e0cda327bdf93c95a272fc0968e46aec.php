<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>后台管理</title>
</head>

<body style='background: url("../Public/images/blue_2010/head_bg.jpg") repeat-x 0px -144px; overflow: hidden;'>
<DIV class="Head">
<DIV style="width: 200px; height: 86px; overflow: hidden;">
<DIV class="TopList"></DIV>
<DIV class="Clear"></DIV>
<DIV class="Version">
<DIV class="Namber">
<H1>&nbsp;</H1>
<P class="TopName">&nbsp;</P></DIV>
</DIV></DIV><p class="top_info">网站后台管理系统 ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ 管理员:<?php echo (session('uname')); ?> ]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Index/main');?>" target="main">后台首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="__ROOT__/" target="_blank">打开网站首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Deltemp/index');?>" target="main">清空网站缓存</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo U('Index/loginOut');?>" target="_top">退出登录</a></p></DIV>
</body>
</html>