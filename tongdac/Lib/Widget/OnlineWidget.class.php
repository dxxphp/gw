<?php
class OnlineWidget extends Widget{
	public function render($data){
		$qq_name=explode(",",C('QQ_NAME'));
		$qq_account=explode(",",C('QQ_ACCOUNT'));
		$data['online_qq']=array_combine($qq_name,$qq_account);
		
		$skype_name=explode(",",C('SKYPE_NAME'));
		$skype_account=explode(",",C('SKYPE_ACCOUNT'));
		$data['online_skype']=array_combine($skype_name,$skype_account);
		
		$data['online_taobao']=explode(",",C('TAOBAO_ACCOUNT'));
		$data['online_1688']=explode(",",C('1688_ACCOUNT'));
		
		$alibaba_name=explode(",",C('ALIBABA_NAME'));
		$alibaba_account=explode(",",C('ALIBABA_ACCOUNT'));
		$data['online_alibaba']=array_combine($alibaba_name,$alibaba_account);
		
		$contents=$this->renderFile('online',$data);
		return $contents;
	}
	
	
}
?>