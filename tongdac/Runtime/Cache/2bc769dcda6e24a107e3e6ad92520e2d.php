<?php if (!defined('THINK_PATH')) exit(); if($new): ?><ul class="news_ul" data-move-y="40px">
      <?php if(is_array($new)): $i = 0; $__LIST__ = array_slice($new,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1): ?><li>
            <div class="news_img">
                  <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'new'));?>">
                        <img src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" alt="<?php echo ($vo["title"]); ?>">
                  </a>
                  <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'new'));?>" title="<?php echo ($vo["title"]); ?>"><?php echo (mb_substr($vo["title"],0,15,'utf-8')); ?></a>
                  <p class="news_time_p"><?php echo (date('Y-m-d',$vo["time"])); ?></p>
                  <p class="news_des"><?php echo (mb_substr($vo["description"],0,50,'utf-8')); ?></p>
                  <div class="clear"></div>
            </div>
      </li>
      <?php else: ?>
      <li>
            <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'new'));?>" title="<?php echo ($vo["title"]); ?>"><?php echo (mb_substr($vo["title"],0,30,'utf-8')); ?></a>
            <span class='news_time'><?php echo (date('Y-m-d',$vo["time"])); ?></span>
      </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</ul><?php endif; ?>