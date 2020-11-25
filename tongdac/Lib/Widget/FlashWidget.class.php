<?php
class FlashWidget extends Widget{
	public function render($data){
		$type = (isset($data['type'])) ? $data['type'] : 'flash' ;

		if (isset($data['id'])) {
			$nickname = M('Flash')->where('id='.$data['id'].' and isdel =0')->getField('photo');
			return $nickname;
		} else {
			if(S('flashdata'.$type)){
				$data=S('flashdata'.$type);
			}else{
				$data['flash']=$this->flash=M('Flash')->where("type='".$type."' and isdel =0")->field('id,title,type,sort,link,photo,description')->order('sort')->select();
				S('flashdata'.$type,$data,3600 * 24 * 30);
			}

			$content=$this->renderFile($type,$data);
			return $content;
		}
			
	}


}
?>