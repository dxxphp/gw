<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>修改图片</title>
<script type="text/javascript" charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/lang/zh-cn/zh-cn.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/webuploader.css" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/webuploader.min.js"></script>
<script type="text/javascript" >
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
        <td width="88%" height="24">修改图片 【<a href="<?php echo U('Photo/index');?>">返回图片列表</a>】</td>
        <td width="12%" align="right" class="bt_add"></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<form action="<?php echo U('updatephoto');?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
<DIV class="PageContent">
<table width="98%" border="0" style="margin:20px;" class="ListCategory">
  <tr>
    <td width="9%">图片名称：</td>
    <td width="91%" height="35"><input name="name" type="text" class="FormSmall" value="<?php echo ($photolist["name"]); ?>" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>图片分类:</td>
    <td height="35">
      <select name="pid" style="height:28px;">
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $photolist["pid"]): ?>selected="selected"<?php endif; ?>><?php echo ($vo["html"]); if($vo["level"] > 0): ?>┕<?php endif; echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" class="FormSmall" value="<?php echo ($photolist["sort"]); ?>" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必填</span></td>
  </tr>

  <tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" value="<?php echo ($photolist["url"]); ?>" class="FormSmall" style="width: 320px;"> <a title='URL只能是字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td width="9%">SEO标题：</td>
    <td width="91%" height="35"><input name="title" type="text" value="<?php echo ($photolist["title"]); ?>" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" class="FormSmall" value="<?php echo ($photolist["keywords"]); ?>" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>SEO描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($photolist["description"]); ?></textarea>
    </td>
  </tr>
  
  <tr>
    <td>缩略图：</td>
    <td height="35">
    <?php if(empty($photolist["thumb"])): ?><input type='file' name='thumb'>
    <?php else: ?>
        <div id="thumbs" style="padding:4px 0;"><img src="__ROOT__/Uploads/<?php echo ($photolist["thumb"]); ?>" width="60" height="60"/>
        <a href="javascript:;" onclick="delete_order('<?php echo ($photolist['thumb']); ?>','<?php echo ($photolist['id']); ?>','thumb')">删除该图片</a>
        </div><?php endif; ?> 
    </td>
  </tr>
  
  <tr>
    <td>图片主图：</td>
    <td style="padding:10px 0px;">
      <?php if(!empty($photo)): ?><div id="imgall">
        <?php if(is_array($photo)): $k = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><p id="photo<?php echo ($k); ?>" class="productimg"><img src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" width="60" height="60"/>
          <a href="javascript:;" onclick="delete_order2('<?php echo ($photo[$key]); ?>','<?php echo ($photolist['id']); ?>','photo',<?php echo ($k); ?>)">删除该图片</a>
          </p><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>

        <a href="javascript:;" id="delallimg" onclick="delete_all('<?php echo ($photolist['id']); ?>')">删除</br>全部主图</a><?php endif; ?> 

      <div class="uploader-list-container" style="margin-top:95px;">
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

    </td>
  </tr>
  
  <tr>
    <td>图片内容：</td>
    <td>
      <script id="contents" type="text/plain" style="width:98%;height:400px;"><?php echo ($photolist["contents"]); ?></script>
    </td>
  </tr>
  
  <tr>
    <td height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="hidden" name="id" value="<?php echo ($photolist["id"]); ?>">
    <input type="submit" value="确认修改" class="bginput">&nbsp;&nbsp;
    </td>
    </tr>
</table>
</DIV>
</form>
<script type="text/javascript">
  //实例化编辑器
  var ue = UE.getEditor('contents');

      function delete_order(name,id,field){    
          confirm_ = confirm('您确认删除?');
          if(confirm_){
              $.ajax({
                  type:"GET",
                  url:'__APP__?m=Photo&a=delphoto&name='+name+'&id='+id+'&field='+field,
                  success:function(msg){
                      $("#thumbs").empty();
                      $("#thumbs").html("<input type='file' name='thumb'><input type='hidden' name='tnum' value='1'>");
                  }
              });
          }
      };

      function delete_order2(name,id,field,k){    
          confirm_ = confirm('您确认删除?');
          if(confirm_){
              $.ajax({
                  type:"GET",
                  url:'__APP__?m=Photo&a=delphoto&name='+name+'&id='+id+'&field='+field,
                  success:function(msg){
                      $("#photo"+k).empty();
                  }
              });
          }
      };

      function delete_all(id){    
          confirm_ = confirm('您确认删除?');
          if(confirm_){
              $.ajax({
                  type:"GET",
                  url:'__APP__?m=Photo&a=delmain&id='+id,
                  success:function(msg){
                      $("#imgall").empty();
                  }
              });
          }
      };


</script>
</body>
</html>