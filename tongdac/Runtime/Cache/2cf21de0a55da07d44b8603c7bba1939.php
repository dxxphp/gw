<?php if (!defined('THINK_PATH')) exit(); if($new): ?><ul class="answer_ul" data-move-y="40px">
      <?php if(is_array($new)): $i = 0; $__LIST__ = array_slice($new,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'new'));?>" title="<?php echo ($vo["title"]); ?>"><?php echo (mb_substr($vo["title"],0,34,'utf-8')); ?></a>
            <p><?php echo (mb_substr($vo["description"],0,50,'utf-8')); ?></p>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul><?php endif; ?>