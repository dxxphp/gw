<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo (C("seo_title")); ?></title>
    <meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
    <meta name="description" content="<?php echo (C("seo_description")); ?>" />
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

      <?php echo W('Flash');?>
      <script type="text/javascript">
          $('.bxslider').bxSlider({
            adaptiveHeight: true,
            infiniteLoop: true,
            hideControlOnEnd: true,
            auto:true
          });
      </script>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="case_head" data-move-y="-40px">
                      <h2><?php echo ($titledata["NAME3"]); ?></h2>
                      <p>
                          <span>————————————</span>
                          &nbsp;&nbsp;<?php echo ($titledata["NAME4"]); ?>&nbsp;&nbsp;
                          <span>————————————</span>
                      </p>
                  </div>
                  <div class="case_list">
                      <?php echo W('List',array('table'=>'Photo','bid'=>15,'id'=>15));?>
                  </div>
              </div>
          </div>
      </div>

      <div class="tabs_bg">
            <div class="container">
                  <div class="row">
                        <div class="tabs_head" data-move-y="-40px">
                              <h2><?php echo ($titledata["NAME5"]); ?></h2>
                              <p>
                                <span>————————————</span>
                                &nbsp;&nbsp;<?php echo ($titledata["NAME6"]); ?>&nbsp;&nbsp;
                                <span>————————————</span>
                              </p>
                        </div>
                        <?php echo W('Flash',array('type'=>'adv'));?>
                  </div>
            </div>
      </div>


      
      <div class="about_bg">
            <div class="container">    
                  <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="about_head" data-move-y="-40px">
                                    <h2><?php echo ($titledata["NAME11"]); ?></h2>
                                    <p>
                                      <span>————————————</span>
                                      &nbsp;&nbsp;<?php echo ($titledata["NAME12"]); ?>&nbsp;&nbsp;
                                      <span>————————————</span>
                                    </p>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 js_about_left" data-move-y="-40px">
                                    <h3 class="about_h3"><?php echo ($titledata["NAME13"]); ?></h3>
                                    <p class="about_p"><?php echo ($titledata["NAME14"]); ?></p>
                                    <?php echo W('About',array('id'=>25,'len'=>160));?>
                                    <a href="<?php echo W('Listhref',array('id'=>25));?>" class="about_btn">了解更多</a>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 js_about_right" data-move-y="40px">
                                    <video class="about_video" poster="" controls>
                                          <source src="<?php echo (C("web_video")); ?>" type="video/mp4">
                                    </video>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <div class="container">    
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="news_head" data-move-y="-40px">
                                    <h2><?php echo ($titledata["NAME7"]); ?></h2>
                                    <p>
                                      <span>————————————</span>
                                      &nbsp;&nbsp;<?php echo ($titledata["NAME8"]); ?>&nbsp;&nbsp;
                                      <span>————————————</span>
                                    </p>
                              </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                              <h3 class="news_h3"><?php echo ($titledata["NAME9"]); ?></h3>
                              <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>12,'moban'=>'index_new'));?>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <h3 class="news_h3"><?php echo ($titledata["NAME10"]); ?></h3>
                            <?php echo W('List',array('table'=>'New','bid'=>2,'id'=>39,'moban'=>'answer'));?>
                        </div>
                  </div>
            </div>
      </div>

      <div class="container">    
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="cooperation_head" data-move-y="-40px">
                              <h2><?php echo ($titledata["NAME15"]); ?></h2>
                              <p>
                                <span>————————————</span>
                                &nbsp;&nbsp;<?php echo ($titledata["NAME16"]); ?>&nbsp;&nbsp;
                                <span>————————————</span>
                              </p>
                        </div>
                        <?php echo W('Link',array('type'=>2));?>
                  </div>
            </div>
      </div>

      <script src="../Public/js/jquery.smoove.min.js"></script>
      <script>$('.product_head,.product_img,.left_nav,.case_head,.case_img,.tabs_head,.tabs_btn,.news_ul,.answer_ul,.about_head,.js_about_left,.js_about_right,.cooperation_head,.cooperation_img').smoove({offset:'10%'});</script>
      
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

      <?php echo W('Link',array('type'=>1));?>
      <?php echo W('Tags');?>

  </body>
</html>