<?php if (!defined('THINK_PATH')) exit();?><div class="tabs_btn" data-move-y="40px">
      <ul class="nav nav-tabs" role="tablist">
      <?php if(is_array($flash)): $i = 0; $__LIST__ = array_slice($flash,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li role="presentation" <?php if($i == 1): ?>class="active"<?php endif; ?>><a href="#gotab<?php echo ($i); ?>" aria-controls="gotab<?php echo ($i); ?>" role="tab" data-toggle="tab"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
</div>
<div class="col-xs-12 col-sm-12 col-md-12"> 
      <div class="tab-content">
      <?php if(is_array($flash)): $i = 0; $__LIST__ = array_slice($flash,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div role="tabpanel" class="tab-pane <?php if($i == 1): ?>active<?php endif; ?>" id="gotab<?php echo ($i); ?>">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                        <img src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" class="tab_img" alt="<?php echo ($vo["title"]); ?>">
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 tab_text">
                        <h3 class="tab_h3"><?php echo ($vo["title"]); ?></h3>
                        <p class="tab_p"><?php echo (nl2br($vo["description"])); ?></p>
                        <a href="<?php echo ($vo["link"]); ?>" target="_blank" class="tab_more">查看详细</a>
                  </div>
                  <div class="clear"></div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
</div>