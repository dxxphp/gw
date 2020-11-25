<?php
class FootWidget extends Widget{
	public function render($data){

		if (S('footdata')) {
			$data=S('footdata');
		} else {
			$footnav=M('Foot')->order('sort asc')->select();
			$data['footnav']=recursive($footnav);
			S('footdata',$data,3600 * 24 * 30);
		}

		$content=$this->renderFile('foot',$data);
		return $content;
	}



}
?>