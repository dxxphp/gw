<?php if (!defined('THINK_PATH')) exit(); if($new): ?><ul class="left_news">
    <?php if(is_array($new)): $i = 0; $__LIST__ = array_slice($new,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'new'));?>" title="<?php echo ($vo["title"]); ?>"><?php echo (mb_substr($vo["title"],0,17,'utf-8')); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul><?php endif; ?>