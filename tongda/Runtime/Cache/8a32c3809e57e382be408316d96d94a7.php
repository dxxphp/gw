<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>添加新闻</title>
<script type="text/javascript" charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/lang/zh-cn/zh-cn.js"></script>
<SCRIPT language=javaScript>
function CheckJob()
{
    if (document.myform.title.value.length==""){
      alert ("新闻标题不能为空！");
      document.myform.title.focus();
      return false;
    }
    var number = document.getElementById('sort').value;
    var reg = /^\d+$/;
    if (!number.match(reg)){
      alert ("排序号必须为数字!");
      document.myform.sort.focus();
      return false;
    }
    //日期的正则表达式
    if (document.myform.time.value.length!=""){
      var timevalue = document.getElementById('time').value;
      var timereg = /^[1-9]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/;
      if (!timevalue.match(timereg)){
        alert ("日期格式不正确，正确格式为：2017-01-01");
        document.myform.time.focus();
        return false;
      }
    }
 }
</SCRIPT>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">添加新闻 【<a href="<?php echo U('New/index');?>">返回新闻列表</a>】</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form action="<?php echo U('savenew');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" onSubmit="return CheckJob()">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="9%">新闻标题：</td>
    <td width="91%" height="35"><input name="title" type="text" class="FormSmall" style="width: 320px;"> 
  <span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>新闻分类:</td>
    <td height="35">
      <select name="pid" style="height:28px;">
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["html"]); if($vo["level"] > 0): ?>┕<?php endif; echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>发布时间：</td>
    <td height="35"><input name="time" id="time" type="date" class="FormSmall"  style="width: 140px; height:18px;"/></td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" id="sort" value="0" type="text" class="FormSmall" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必填</span><a title='只可填数字，数字越小排序越靠前。'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>

  <tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" class="FormSmall" style="width: 320px;"> <a title='URL只能是字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>SEO描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"></textarea>
    </td>
  </tr>

  <tr>
    <td>缩略图：</td>
    <td height="35"><input type='file' name='thumb'> <span style="color:#F00; font-size:12px;">非必填</span></td>
  </tr>
  
  <tr>
    <td>新闻内容：</td>
    <td>
      <script id="contents" type="text/plain" style="width:98%;height:400px;"></script>
   </td>
  </tr>
  <tr>
    <td height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="submit" value="提交" class="bginput">&nbsp;&nbsp;
    <input name="reset" type="reset"  class="bginput" value="重置" />
    </td>
    </tr>
</table>
</DIV>
</form>
<script type="text/javascript">
  //实例化编辑器
  var ue = UE.getEditor('contents');
</script>
</body>
</html>