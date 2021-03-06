<?php
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
class InquiryAction extends CommonAction{
	public function index(){
		C('TOKEN_ON',true);
		$this->ordername=$this->_post('ordername','htmlspecialchars');
		$this->pid = $this->_post('pid','intval');
		$this->display();
	}
	
	public function check(){
		$code_msg = (C('CNEN')=='cn') ? '验证码错误!' : 'Captcha error!' ;
		if (!$this->isPost()) {
			$this->error('非法提交!');die();
		}
		$code=$this->_post('code');
		if($_SESSION['verify']!==md5($code)){
			$this->error($code_msg);
		}
		
		$db=D('Inquiry');
		if($data=$db->create()){
			$data['name'] = $this->_post('name','htmlspecialchars');
			$data['contents'] = $this->_post('contents','htmlspecialchars');
			$data['pid'] = $this->_post('pid','intval');

			if (C('CNEN')=='cn') {
				$success_msg = '询价发送成功';
				$sendcontents = '<p>微信号：'.$data['name'].'</p><p>询价内容：'.$data['contents'].'</p>';
			} else {
				$success_msg = 'Send success';
				$data['email'] = $this->_post('email','htmlspecialchars');
				$sendcontents = '<p>WhatsApp：'.$data['name'].'</p><p>邮箱：'.$data['email'].'</p><p>询价内容：'.$data['contents'].'</p>';
			}

			$sendtitle= $data['name']."的询价"; 

			if($db->data($data)->add()){
				
			  if(C('IS_EMAIL')){
			  	switch (C('SEND_WAY')) {
			  		case '1':
			  		if ($this->smtpsendmail($sendtitle,$sendcontents)) {
			  			$this->success($success_msg);
			  		}else{
			  			$this->error('提交订单成功,但邮件发送失败!');
			  		}
			  			break;

			  		case '2':
			  		if ($this->mailfunction($sendtitle,$sendcontents)) {
			  			$this->success($success_msg.'!!');
			  		}else{
			  			$this->error('提交订单成功,但邮件发送失败!!');
			  		}
			  			break;

			  		case '3':
			  		$phpmailer=$this->phpmailersend($sendtitle,$sendcontents);
			  		if ($phpmailer===1) {
			  			$this->success($success_msg.'...');
			  		}else{
			  			$this->error('提交订单成功,但邮件发送失败：'.$phpmailer);
			  		}
			  			break;

			  		default:
			  			exit('邮件发送方式设置错误!');
			  			break;
			  	}
			  }else{
				$this->success('提交订单成功!');
			  }	
				
			}else{
				$this->error('错误：提交订单失败');
			}
		}else{
			$this->error($db->getError());	
		}		
	}



	
}
?>