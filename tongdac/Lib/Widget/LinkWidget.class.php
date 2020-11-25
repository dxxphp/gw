<?php
class LinkWidget extends Widget{
	public function render($data){
		$type = (!empty($data['type'])) ? $data['type'] : 1 ;
		if(S('linksdata'.$type)){
			$data=S('linksdata'.$type);
		}else{
			$data['links']=$this->links=M('Link')->field('id,name,url,sort,photo')->where('type ='.$type)->order('sort')->select();
			S('linksdata'.$type,$data,3600 * 24 * 30);
		}
		$template = ($type == 2) ? 'photo' : 'link' ;
		$content=$this->renderFile($template,$data);
		return $content;
	}

}
?>