<?php if (!defined('THINK_PATH')) exit(); if(C("is_online")!= 0): ?><!--客服面板-->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/online.css" />
    <div id="cmsFloatPanel">
         <div class="ctrolPanel">
               <a class="service" href="#"></a>
               <a class="message" href="#"></a>
               <a class="qrcode" href="#"></a>
               <a class="arrow" title="返回顶部" href="#"></a>
         </div>
         <div class="servicePanel">
              <div class="servicePanel-inner">
                   <div class="serviceMsgPanel">
                        <div class="serviceMsgPanel-hd"><a href="#"><span>关闭</span></a></div>
                        <div class="serviceMsgPanel-bd">
                          <!--在线QQ-->
                          <?php if(C("qq_account")!= ''): if(is_array($online_qq)): foreach($online_qq as $key=>$vo): ?><div class="msggroup">
                                    <a target="_blank" href="https://wpa.qq.com/msgrd?v=3&uin=<?php echo ($online_qq["$key"]); ?>&site=qq&menu=yes"><img class="qqimg" src="https://wpa.qq.com/pa?p=2:<?php echo ($online_qq["$key"]); ?>:52" alt="QQ在线客服"/><?php echo ($key); ?></a>
                                </div><?php endforeach; endif; endif; ?>
                          <!--在线SKYPE--> 
                          <?php if(C("skype_account")!= ''): if(is_array($online_skype)): foreach($online_skype as $key=>$vo): ?><div class="msggroup">
                                <a href="skype:<?php echo ($online_skype["$key"]); ?>?chat"><img  class="qqimg" src="__PUBLIC__/images/skype.gif" alt="SKYPE在线客服"> <?php echo ($key); ?></a>
                              </div><?php endforeach; endif; endif; ?>
                          <!--淘宝旺旺--> 
                          <?php if(C("taobao_account")!= ''): if(is_array($online_taobao)): foreach($online_taobao as $key=>$vo): ?><div class="msggroup">
                                <a target=blank href="https://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo ($online_taobao["$key"]); ?>&site=cntaobao&s=1&charset=utf-8"><img SRC="https://amos.im.alisoft.com/online.aw?v=2&uid=<?php echo ($online_taobao["$key"]); ?>&site=cntaobao&s=1&charset=utf-8" alt="点击联系我"></a>
                               </div><?php endforeach; endif; endif; ?>
                          <!--旺旺国内版--> 
                          <?php if(C("1688_account")!= ''): if(is_array($online_1688)): foreach($online_1688 as $key=>$vo): ?><div class="msggroup">
                                <a target="_blank" href="https://amos.alicdn.com/msg.aw?v=2&uid=<?php echo ($online_1688["$key"]); ?>&site=cnalichn&s=10&charset=UTF-8" ><img src="https://amos.alicdn.com/online.aw?v=2&uid=<?php echo ($online_1688["$key"]); ?>&site=cnalichn&s=10&charset=UTF-8" alt="点击联系我"/></a>
                              </div><?php endforeach; endif; endif; ?>
                          <!--旺旺国际版-->
                          <?php if(C("alibaba_account")!= ''): if(is_array($online_alibaba)): foreach($online_alibaba as $key=>$vo): ?><div class="msggroup">
                                <a class="alitalk-link" data-uid="<?php echo ($online_alibaba["$key"]); ?>" target="_blank" href="https://amos.alicdn.com/msg.aw?v=2&uid=<?php echo ($online_alibaba["$key"]); ?>&site=enaliint&s=22&charset=UTF-8"><img class="qqimg" src="https://amos.alicdn.com/online.aw?v=2&uid=<?php echo ($online_alibaba["$key"]); ?>&site=enaliint&s=22&charset=UTF-8" alt="点击联系我"/> <?php echo ($key); ?></a>
                               </div><?php endforeach; endif; endif; ?>
                          
                        </div>
                        <div class="serviceMsgPanel-ft"></div>
                    </div>
                    <div class="arrowPanel">
                         <div class="arrow02"></div>
                    </div>
              </div>
         </div>
         <div class="messagePanel">
              <div class="messagePanel-inner">
                   <div class="formPanel">
                        
                         <div class="formPanel-bd">
<div class="bdsharebuttonbox" style="display: inline-block; float:left;"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                            <a type="button" class="btn btn-default btn-xs" href="#" style="margin: 12px 0px 0px 10px;">关闭</a>
                         </div>

                   </div>
                   <div class="arrowPanel">
                        <div class="arrow01"></div>
                        <div class="arrow02"></div>
                   </div>
              </div>
         </div>
         <?php if(C("web_qrcode")!= ''): ?><div class="qrcodePanel">
              <div class="qrcodePanel-inner">
                   <div class="codePanel">
                         <div class="codePanel-hd"><span style="float:left">用手机扫描二维码</span><a href="#"><span>关闭</span></a></div>
                         <div class="codePanel-bd">
                              <img src="__ROOT__/Uploads/<?php echo (C("web_qrcode")); ?>" alt="二维码"/>
                         </div>
                   </div>
                   <div class="arrowPanel">
                        <div class="arrow01"></div>
                        <div class="arrow02"></div>
                   </div>
              </div>
         </div><?php endif; ?>
    </div>
    <script type="text/javascript" src="__PUBLIC__/js/online.js"></script><?php endif; ?>