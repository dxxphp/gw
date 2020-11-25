<?php if (!defined('THINK_PATH')) exit();?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/select.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>后台首页</title>
</head>
<body>
  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_15">&nbsp;系统基本信息</li>
      <li class="li_40"></li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">

        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="height:30px; padding-top:5px;">
            <li class="li_15">&nbsp;<?php echo ($key); ?>：</li>
            <li class="li_40"><?php echo ($v); ?></li>
        </ul><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
  </div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%" style="padding-left:5px;">
            
            </td>
            <td width="92%" align="center">
 
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>