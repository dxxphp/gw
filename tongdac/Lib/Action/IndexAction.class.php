<?php
class IndexAction extends CommonAction{
    public function index(){
	$titledata=include'./title.php';
	$this->assign('titledata',$titledata);
	$template = (LankeMobile() == 'm') ? 'm_index' : 'index' ;
	$this->display($template);
    }
}
?>