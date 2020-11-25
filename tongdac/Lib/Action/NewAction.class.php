<?php
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
class NewAction extends CommonAction{
	public function index(){
		$id=$this->_get('id','intval');
		$this->doNew($id,"id =%d");
	}

	public function html(){
		$url=$this->_get('url');
		$this->doNew($url,"url ='%s'");
	}

	protected function doNew($var,$where){
		$db=M('New');
		$newdata=$db->field('id,bid,pid,title,keywords,description,contents,time')->where($where,array($var))->find();
		if($newdata){
			$newdata['contents']=$this->doInside($newdata['contents']);
			$this->news=$newdata;
			$this->newlist=M('list')->field('id,pid,bid,type,name')->find($newdata['pid']);
			//相关新闻
			$this->related=$db->field('id,url,title,time')->where("pid = $newdata[pid] and id <> $newdata[id]")->order('sort asc,id desc')->select();
		}else{
			$this->_empty();
			exit;
		}	
		$this->prevnext=$this->prevnext('New',$newdata['id'],'title','条');
		$this->display('index');
	}

	public function tags(){
		$this->doTags('New');
	}
	
}
?>