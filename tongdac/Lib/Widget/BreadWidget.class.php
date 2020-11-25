<?php

class BreadWidget extends Widget{

	public function render($data){

		if (S('Bread')) {
			$result=S('Bread');
		}else{
			$result=M('List')->field('id,name,pid,url,sort,link')->order('sort asc,id desc')->select();
			S('Bread',$result,3600 * 24 * 30);
		}

		$data['Bread']=get_all_parent($result,$data['id']);

		$content=$this->renderFile('Bread',$data);
		return $content;
	}


}



?>