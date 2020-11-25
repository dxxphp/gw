<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>友情链接管理</title>
<script type="text/javascript">
	$(function () {
		$( '.del' ).click( function () {
			return confirm('确认删除该链接？');
		} );
	});
</script>
<style type="text/css">
.tablelist li{padding:0.95em 0;}
.tablelist input{width:28px; height:20px; color:#666;}
.proimg{float:left;width:90px; height:40px; margin:-6px 0 0 5px; padding: 1px; background-color:#c2c2c2;}
.proimg:hover{background-color:#045ace;}
.tablelist li a:hover{color: #045ace; text-decoration: none;}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
        <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">快捷操作：【<a href="<?php echo U('Link/addphoto');?>">添加图片链接</a>】</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<form name="theForm" method="post" action="<?php echo U('uporder',array('url'=>'photo'));?>">
  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10">排序</li>
      <li class="li_30">名称</li>
      <li class="li_25">链接</li>
      <li class="li_35">编辑</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:55px;">
          <li class="li_10">
            <input type="text" value="<?php echo ($vo["sort"]); ?>" name="sort[<?php echo ($vo["id"]); ?>]" class="listinput"/>
          </li>
          <li class="li_30">
            <img src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" class="proimg"/>
            <?php echo ($vo["name"]); ?>
          </li>
          <li class="li_25"><?php echo ($vo["url"]); ?></li>
          <li class="li_35">
            <a href="<?php echo U('modphoto',array('id'=>$vo['id']));?>" >修改</a> | 
            <a href="<?php echo U('del',array('id'=>$vo['id'],'type'=>'photo'));?>" class='del'>删除</a>
          </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%" style="padding-left:5px;">
            <input type="submit" value="更新排序" class="bginput">
            </td>
            <td width="92%" align="center">
            <div class="page"><?php echo ($show); ?></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</form>
</body>
</html>