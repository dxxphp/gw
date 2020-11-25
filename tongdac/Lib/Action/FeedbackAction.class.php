<?php
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
class FeedbackAction extends CommonAction{
	public function index(){
		C('TOKEN_ON',true);
		$this->bigform=M('form')->field('id,name,type,fieldname,sort,pid,required')->where('hide <> 1 AND pid = 0')->order('sort asc')->select();
		$this->smallform=M('form')->field('id,name,type,fieldname,sort,pid,required')->where('hide <> 1 AND pid <> 0')->order('sort asc')->select();
		$this->display();
	}
	
	public function check(){
		$_POST=array_map(htmlspecialchars, $_POST);
		
		$code_msg = (C('CNEN')=='cn') ? '验证码错误!' : 'Captcha error!' ;
		$success_msg=(C('CNEN')=='cn') ? '留言成功' : 'Message success' ;

		if($this->_post('button')!="" && $this->isPost()){
			$code=$this->_post('code');
			if($_SESSION['verify']!==md5($code)){
				$this->error($code_msg);
			}
			
			$db=D('Feedback');
			if($data=$db->create()){	

			$sendtitle= '留言内容：'.mb_substr($data['textarea'], 0,16,'utf-8').'...'; 

			  if($db->data($data)->add()){
				  
				  if(C('IS_EMAIL')){

				  	$formdata=M('form')->field('id,name,fieldname')->where('hide <> 1 AND pid = 0')->order('sort asc')->select();
				  	foreach ($formdata as $v) {
				  		$sendcontents.='<p>'.$v['name'].'：'.$data[$v['fieldname']].'</p>';
				  	}

				  	switch (C('SEND_WAY')) {
				  		case '1':
				  		if ($this->smtpsendmail($sendtitle,$sendcontents)) {
				  			$this->success($success_msg);
				  		}else{
				  			$this->error('留言成功,但邮件发送失败!');
				  		}
				  			break;

				  		case '2':
				  		if ($this->mailfunction($data['title'],$sendcontents)) {
				  			$this->success($success_msg.'!!');
				  		}else{
				  			$this->error('留言成功,但邮件发送失败!!');
				  		}
				  			break;

				  		case '3':
				  		$phpmailer=$this->phpmailersend($data['title'],$sendcontents);
				  		if ($phpmailer===1) {
				  			$this->success($success_msg.'...');
				  		}else{
				  			$this->error('留言成功,但邮件发送失败：'.$phpmailer);
				  		}
				  			break;

				  		default:
				  			exit('邮件发送方式设置错误!');
				  			break;
				  	}
				  }else{
					  $this->success($success_msg);
				  }
				  	  
			   }else{
				  $this->error('错误：留言失败!');  
			   }	
			}else{
			  $this->error($db->getError());
			}
		}else{
			$this->error('非法提交');	
		}		
	}


	
	
}
?>