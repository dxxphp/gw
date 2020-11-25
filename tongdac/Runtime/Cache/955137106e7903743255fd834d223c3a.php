<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo ($news["title"]); ?></title>
    <meta name="keywords" content="<?php echo ($news["keywords"]); ?>" />
    <meta name="description" content="<?php echo ($news["description"]); ?>" />
    <meta name="applicable-device"content="pc,mobile">
	<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
	<link href="../Public/css/bxslider.css" rel="stylesheet">
	<link href="../Public/css/style.css" rel="stylesheet">
	<script src="__PUBLIC__/js/jquery.min.js"></script>
	<script src="../Public/js/bxslider.min.js"></script>
	<script src="../Public/js/common.js"></script>
	<script src="__PUBLIC__/js/bootstrap.js"></script>
	<!--[if lt IE 9]>
	  <script src="https://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>
  <body>
  
      <header> 
      <div class="top_bg">
            <div class="container">
                  <div class="col-xs-12 col-sm-9 col-md-9">
                    <span class="top_welcome">欢迎光临~<?php echo (C("web_name")); ?></span>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3">
                      <form id="searchform" method="get" action="<?php echo U('Search/index');?>">
                          <div class="input-group search_group">
                              <input type="text" name="name" class="form-control input-sm" placeholder="产品搜索">
                                    <span class="input-group-btn">
                                          <span id="search_submit" onclick="searchform.submit();" title="产品搜索" class="glyphicon glyphicon-search btn-lg" aria-hidden="true"></span>
                                    </span>
                          </div>
                      </form>
                  </div>
            </div>
      </div>

      <div class="container">
            <div class="row">
                  <div class="col-xs-12 col-sm-9 col-md-9">
                         <a href="<?php echo (C("web_url")); ?>"><img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" class="logo" style="width: 150px;height: 20xp;" alt="<?php echo (C("web_name")); ?>"/></a>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 tel_box">
                        <div class="top_tel">
                              <img src="../Public/images/tel.jpg" alt="服务热线">
                              <span>全国服务热线：</span>
                              <p><?php echo (C("web_hot")); ?></p>
                        </div>
                  </div>
            </div>
      </div>

      <?php echo W('Nav');?>
</header>
      <div class="page_bg" style="background: url(__ROOT__/Uploads/<?php echo W('Flash',array('id'=>8));?>) center top no-repeat;"></div>

      <div class="bread_bg">
            <div class="container">    
                  <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="bread_nav">
                                    <span>您的位置：</span> <?php echo W('Bread',array('id'=>$news['pid']));?>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
   
      <div class="container">    
            <div class="row">

                  <!-- right -->
                  <div class="col-xs-12 col-sm-8 col-md-9" style="float:right">
                        <div class="right_head">
                              <h2><span><?php echo ($newlist["name"]); ?></span></h2>
                        </div>
                        <div class="right_contents">
                              <h1 class="right_contents_h1"><?php echo ($news["title"]); ?></h1>
                              <?php echo ($news["contents"]); ?>
                        </div>
                        <div class="point">
                            <span class="to_prev col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["prev"]); ?></span>
                            <span class="to_next col-xs-12 col-sm-6 col-md-6"><?php echo ($prevnext["next"]); ?></span>
                        </div>
                        <div class="relevant_new"> 
                              <h3 class="left_h3"><span>相关新闻</span></h3>
                              <ul class="right_new">
                                    <?php if(is_array($related)): $i = 0; $__LIST__ = array_slice($related,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                          <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'New'));?>" title="<?php echo ($vo["title"]); ?>"><?php echo (mb_substr($vo["title"],0,40,'utf-8')); ?></a>
                                          <span class="news_time"><?php echo (date('Y-m-d',$vo["time"])); ?></span>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                              </ul>
                        </div>
                  </div>

                  <!-- left -->
                  <div class="col-xs-12 col-sm-4 col-md-3">
                        <h3 class="left_h3"><span>导航栏目</span></h3>
                        <div class="left_column">
                              <?php echo W('Left',array('id'=>$news['bid'],'type'=>'new'));?>
                        </div>
                        <div class="left_news">
                              <h3 class="left_h3"><span>新闻中心</span></h3>
                              <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>2));?>
                        </div>
                        <div class="left_contact">
      <h3 class="left_h3"><span>联系我们</span></h3>
      <p style="padding-top:8px;">联系人：<?php echo (C("web_contacts")); ?></p>
      <p>手 机：<?php echo (C("web_phone")); ?></p>
      <p>邮 箱：<?php echo (C("web_email")); ?></p>
      <p>公 司：<?php echo (C("web_name")); ?></p>
      <p>地 址：<?php echo (C("web_add")); ?></p>
</div>
                  </div>

            </div>
      </div> 

      <nav class="navbar navbar-default navbar-fixed-bottom mfoot_box">
      <div class="mfoot_nav btn-group dropup">
            <a class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                  <span class="glyphicon glyphicon-share btn-lg" aria-hidden="true"></span>分享
            </a>  
            <div class="dropdown-menu mfoot_share">
                  <div class="bdsharebuttonbox" style="display: inline-block; float:left;">
                        <a href="#" class="bds_more" data-cmd="more"></a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                        <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                  </div>
                  <script>
                        window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='//bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
                  </script>
            </div>
      </div>
      <div class="mfoot_nav">
            <a href="tel:<?php echo (C("web_phone")); ?>">
                  <span class="glyphicon glyphicon-phone btn-lg" aria-hidden="true"></span>手机
            </a>
      </div>
      <div class="mfoot_nav"  aria-hidden="true"  data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="glyphicon glyphicon-th-list btn-lg"></span>分类
      </div>
      <div class="mfoot_nav">
            <a id="gototop" href="#">
                  <span class="glyphicon glyphicon-circle-arrow-up btn-lg" aria-hidden="true"></span>顶部
            </a>
      </div>
</nav>

<footer>
      <div class="container">    
            <div class="row">
                  <div class="col-xs-12 col-sm-3 col-md-3">
                        <img class="footer_logo" style="height: 150px; width: 150px;" src="__ROOT__/Uploads/<?php echo W('Flash',array('type'=>3,'id'=>21));?>" alt="底部LOGO">
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 footer_contact">
                        <p>电话：<?php echo (C("web_tel")); ?></p>
                        <p>手机：<?php echo (C("web_phone")); ?></p>
                        <p>邮箱：<?php echo (C("web_email")); ?></p>
                        <p>地址：<?php echo (C("web_add")); ?></p>

                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4">
                        <p>&nbsp&nbsp山西棣雅棠茶酒文化有限公司</p>
                        <p class="footer_logo_text"><?php echo (C("web_copyright")); ?></p>

                  </div>
                  <div class="col-xs-12 col-sm-2 col-md-2">
                        <img class="footer_qrcode" src="__ROOT__/Uploads/<?php echo (C("web_qrcode")); ?>" alt="二维码图片">
                        <p class="footer_qrcode_text">联系我们</p>
                  </div>

            </div>
      </div> 
</footer>

<?php if(C("is_translate")!= 0): ?><div class="translate">
      <div class="translate_btn">
            <div id='MicrosoftTranslatorWidget' class='Dark' style='color:white;background-color:#555555'>
            </div>
            <script type='text/javascript'>setTimeout(function(){{var s=document.createElement('script');s.type='text/javascript';s.charset='UTF-8';s.src=((location && location.href && location.href.indexOf('https') == 0)?'https://ssl.microsofttranslator.com':'http://www.microsofttranslator.com')+'/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=False&ui=true&settings=Manual&from=';var p=document.getElementsByTagName('head')[0]||document.documentElement;p.insertBefore(s,p.firstChild); }},0);</script>
      </div>
</div><?php endif; ?>

<?php echo W('Online');?>

<?php echo (C("web_baidu")); ?>
    
  </body>
</html>