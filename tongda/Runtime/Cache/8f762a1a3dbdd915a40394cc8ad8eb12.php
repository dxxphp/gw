<?php if (!defined('THINK_PATH')) exit();?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>添加产品</title>
<script type="text/javascript" charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/lang/zh-cn/zh-cn.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/webuploader.css" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/webuploader.min.js"></script>
<script type="text/javascript" >
function CheckJob(){
	if (document.myform.name.value.length==""){
		alert ("产品名称不能为空！");
		document.myform.name.focus();
		return false;
	}
	if (document.myform.title.value.length==""){
		alert ("SEO标题不能为空！");
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
 }

 var uploadurl = "<?php echo U('doUploads');?>",uploadswf="../Public/Uploader.swf";
</script>
<script type="text/javascript" src="../Public/js/upload.js"></script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td class="LineRightBlue1">
      <table width="95%" border="0" cellpadding="0" cellspacing="0" style="margin-left:20px;">
      <tr>
        <td width="88%" height="24">添加产品 【<a href="<?php echo U('Product/index');?>">返回产品列表</a>】</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form  method="post" name="myform" id="myform" enctype="multipart/form-data" onSubmit="return CheckJob()">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="9%">产品名称：</td>
    <td width="91%" height="35"><input name="name" type="text" class="FormSmall" style="width: 320px;" value="产品名称">
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>产品分类:</td>
    <td height="35">
      <select name="pid" style="height:28px;">
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["html"]); if($vo["level"] > 0): ?>┕<?php endif; echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" id="sort" value="0" class="FormSmall" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必须为数字</span><a title='只可填数字，数字越小排序越靠前。'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td>首页推荐：</td>
    <td height="35">
      <select name="featured" style="height:28px;">
          <option value="1">是</option>
          <option value="0">否</option>
      </select>
    </td>
  </tr>
  
  <tr>
    <td>产品简介：</td>
    <td height="110"><textarea name="introduce" class="FormSmall" style="width: 320px; height: 120px;"></textarea>
    </td>
  </tr>

  <tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" class="FormSmall" style="width: 320px;"> <a title='URL只能是字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td width="9%">SEO标题：</td>
    <td width="91%" height="35"><input name="title" type="text" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
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
    <td>购买链接：</td>
    <td height="35"><input name="buyname" type="text" class="FormSmall" style="width: 100px;" placeholder="按钮名称">&nbsp;&nbsp;
    <input name="buylink" type="text" class="FormSmall" value="http://" style="width: 336px;">
    </td>
  </tr>
  
  <tr>
    <td style="padding:10px 0px;">缩略图：</td>
    <td height="35"><input type='file' name='thumb'></td>
  </tr>
  
  <tr>
    <td>产品主图：</td>
    <td style="padding:10px 0px;">
      <div class="uploader-list-container">
        <div class="queueList">
          <div id="dndArea" class="placeholder">
            <div id="filePicker-2"></div>
          </div>
        </div>
        <div class="statusBar" style="display:none;">
          <div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
          <div class="info"></div>
          <div class="btns">
            <div id="filePicker2"></div>
            <div class="uploadBtn">开始上传</div>
          </div>
        </div>
      </div>

      <div class="photoname"></div>
      <script type="text/javascript" >
      var version = IEVersion();
      if (version >-1 && version < 10) {
        document.write("<p>您的IE浏览器版本过低，不支持此插件，请升级IE版本或使用非IE的浏览器。</p>");
      };
      </script>
    </td>
  </tr>
  
  <tr>
    <td>产品内容：</td>
    <td style="padding:10px 0px;">
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