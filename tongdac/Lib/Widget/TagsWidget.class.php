<?php
class TagsWidget extends Widget{
	public function render($data){
		if (S('tagsdata')) {
			$data=S('tagsdata');
		} else {
			$num=C('INDEX_TAGS');
			$tags = ($num > 0) ? M('Tags')->field('id,name,type,sort')->order('sort')->limit($num)->select() : null ;
			$data['tags']=$tags;
			S('tagsdata',$data,3600 * 24 * 30);
		}
		$content=$this->renderFile('tags',$data);
		return $content;
	}

}
?>