<?php if (!defined('THINK_PATH')) exit(); if($photo): if(is_array($photo)): $i = 0; $__LIST__ = array_slice($photo,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-4 col-md-4 col-mm-12 case_img" data-move-y="50px">
      	<div class="thumbnail">
                  <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Photo'));?>">
                        <img src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" class="opacity_img" alt="<?php echo ($vo["name"]); ?>"/>
                  </a>
                  <h4 class="case_title">
                        <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Photo'));?>"><?php echo (mb_substr($vo["name"],0,22,'utf-8')); ?></a>
                  </h4>
                  <p class="case_des"><?php echo (mb_substr($vo["description"],0,64,'utf-8')); ?></p>
            </div>
      </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>