<?php
/*
 
*/

if(!defined("AAAAA____"))define("AAAAA____","AAAAA___A");$GLOBALS[AAAAA____]=explode("|N|A|8", "AAA_AAA__");if(!defined("AAAA_AA__"))define("AAAA_AA__","AAAA_AA_A");$GLOBALS[AAAA_AA__]=explode("|a|{|Q", "Inquiry|a|{|Qdelete from __TABLE__ |a|{|Qindex");if(!defined("AAAA_A__A"))define("AAAA_A__A","AAAA_A_A_");$GLOBALS[AAAA_A__A]=explode("|P|r|~", "id|P|r|~intval|P|r|~Inquiry|P|r|~删除订单成功|P|r|~Inquiry/index|P|r|~删除失败");if(!defined("AAAA__A_A"))define("AAAA__A_A","AAAA__AA_");$GLOBALS[AAAA__A_A]=explode("|j|t|Y", "id|j|t|Yintval|j|t|YInquiry");if(!defined("AAAA___A_"))define("AAAA___A_","AAAA___AA");$GLOBALS[AAAA___A_]=explode("|O|<|~", "InquiryView|O|<|~ORG.Util.Page|O|<|~time desc|O|<|~,");if(!defined($GLOBALS[AAAAA____][0]))define($GLOBALS[AAAAA____][0], ord(5));class InquiryAction extends CommonoAction{public function index(){unset($V3bcV1);if(is_array($GLOBALS[AAAA___A_]))goto V3beWjgx2;$V3beFbN4=call_user_func_array("strlen",array("ofXHmh"));$V3bbN8U=$V3beFbN4==0;if($V3bbN8U)goto V3beWjgx2;$V3beFbN3=call_user_func_array("strpos",array("Jt",19));$V3bbN8T=true===$V3beFbN3;if($V3bbN8T)goto V3beWjgx2;goto V3bldMhx2;V3beWjgx2:$V3bcV1=&$GLOBALS[AAAA___A_][0];goto V3bx1;V3bldMhx2:$V3bcV1=$GLOBALS[AAAA___A_][0];V3bx1:$V3beF0=call_user_func_array("D",array(&$V3bcV1));unset($V3btI8S);$AAA_AAAAA=$V3beF0;unset($V3bcV1);$V3bvPbN8S=19+2;$V3beFbN3=call_user_func_array("is_string",array(&$V3bvPbN8S));if($V3beFbN3)goto V3beWjgx4;$V3bbN8T=19-19;if($V3bbN8T)goto V3beWjgx4;if(is_array($GLOBALS[AAAA___A_]))goto V3beWjgx4;goto V3bldMhx4;V3beWjgx4:$V3bcV1=&$GLOBALS[AAAA___A_][01];goto V3bx3;V3bldMhx4:$V3bcV1=$GLOBALS[AAAA___A_][01];V3bx3:$V3beF0=call_user_func_array("import",array(&$V3bcV1));$V3bhC0=call_user_func_array(array($AAA_AAAAA,"count"),array());unset($V3btI8S);$AAAA_____=$V3bhC0;$V3bvP8S=0-1189;$V3bvP8T=AAA_AAA__*23;$V3bvP8U=$V3bvP8S+$V3bvP8T;$V3b8V=new Page($AAAA_____,$V3bvP8U);unset($V3btI8W);$AAAA____A=$V3b8V;$V3bhC1=call_user_func_array(array($AAAA____A,"show"),array());unset($V3btI8S);$this->show=$V3bhC1;$V3bvP8S=$AAAA____A->firstRow . $GLOBALS[AAAA___A_]{3};$V3bvP8T=$V3bvP8S . $AAAA____A->listRows;unset($V3btI8U);$this->inquiry=$AAA_AAAAA->order($GLOBALS[AAAA___A_][2])->limit($V3bvP8T)->select();$V3bhC0=call_user_func_array(array($this,"display"),array());}public function view(){unset($V3bcV1);if(is_array($GLOBALS[AAAA__A_A]))goto V3beWjgx8;$V3beFbN7=call_user_func_array("chr",array(19));$V3bbN8W=$V3beFbN7=="e";if($V3bbN8W)goto V3beWjgx8;$V3bvPbN8X=new \Exception();if(method_exists($V3bvPbN8X,19))goto V3beWjgx8;goto V3bldMhx8;V3beWjgx8:$V3bcV1=&$GLOBALS[AAAA__A_A][0x0];goto V3bx7;V3bldMhx8:$V3bcV1=$GLOBALS[AAAA__A_A][0x0];V3bx7:unset($V3bcV2);$V3bbN8V="__file__"==5;if($V3bbN8V)goto V3beWjgx6;if(is_array($GLOBALS[AAAA__A_A]))goto V3beWjgx6;$V3bvPbN8T=19+1;$V3bvPbN8U=$V3bvPbN8T+19;$V3bzAvPbN4=array();$V3beFbN5=call_user_func_array("in_array",array(&$V3bvPbN8U,&$V3bzAvPbN4));if($V3beFbN5)goto V3beWjgx6;goto V3bldMhx6;V3beWjgx6:$V3bcV2=&$GLOBALS[AAAA__A_A][1];goto V3bx5;V3bldMhx6:$V3bcV2=$GLOBALS[AAAA__A_A][1];V3bx5:$V3bhC0=call_user_func_array(array($this,"_get"),array(&$V3bcV1,&$V3bcV2));unset($V3btI8S);$AAAA__A__=$V3bhC0;unset($V3btI8S);$this->inquiry=D($GLOBALS[AAAA__A_A][02])->relation(true)->find($AAAA__A__);$V3bhC0=call_user_func_array(array($this,"display"),array());}public function del(){unset($V3bcV1);$V3bbN8T=19+1;$V3bbN8U=19>$V3bbN8T;if($V3bbN8U)goto V3beWjgxa;$V3bbN8V="__file__"==5;if($V3bbN8V)goto V3beWjgxa;if(is_array($GLOBALS[AAAA_A__A]))goto V3beWjgxa;goto V3bldMhxa;V3beWjgxa:$V3bcV1=&$GLOBALS[AAAA_A__A][00];goto V3bx9;V3bldMhxa:$V3bcV1=$GLOBALS[AAAA_A__A][00];V3bx9:$V3bhC0=call_user_func_array(array($this,"_get"),array(&$V3bcV1,$GLOBALS[AAAA_A__A]{1}));unset($V3btI8S);$AAAA__AAA=$V3bhC0;$V3beF0=call_user_func_array("M",array($GLOBALS[AAAA_A__A]{0x2}));unset($V3btI8S);$AAAA_A___=$V3beF0;$V3bzAvP0=array();$V3bzAvP0[$GLOBALS[AAAA_A__A][00]]=$AAAA__AAA;$V3bhC1=call_user_func_array(array($AAAA_A___,"where"),array(&$V3bzAvP0));$V3bhC0=call_user_func_array(array($V3bhC1,"delete"),array());if($V3bhC0)goto V3beWjgxc;$V3bvPbN8U=19+1;$V3bvPbN8V=$V3bvPbN8U+19;$V3bzAvPbN3=array();$V3beFbN4=call_user_func_array("in_array",array(&$V3bvPbN8V,&$V3bzAvPbN3));if($V3beFbN4)goto V3beWjgxc;unset($V3btIvPbN8S);$D39ISOE="Fa";$V3beFbN2=call_user_func_array("strlen",array(&$D39ISOE));$V3bbN8T=$V3beFbN2==1;if($V3bbN8T)goto V3beWjgxc;goto V3bldMhxc;V3beWjgxc:if(isset($config[0]))goto V3beWjgxe;goto V3bldMhxe;V3beWjgxe:goto D39MNQq460;if(is_array($rules))goto V3beWjgxg;goto V3bldMhxg;V3beWjgxg:Route::import($rules);goto V3bxf;V3bldMhxg:V3bxf:D39MNQq460:goto V3bxd;V3bldMhxe:goto D39MNQq462;$V3bM8W=$path . EXT;$V3beFM7=call_user_func_array("is_file",array(&$V3bM8W));if($V3beFM7)goto V3beWjgxi;goto V3bldMhxi;V3beWjgxi:$V3bM8X=$path . EXT;$V3bM8Y=include $V3bM8X;goto V3bxh;V3bldMhxi:V3bxh:D39MNQq462:V3bxd:unset($V3bcVvP1);$V3bzAvPbN3=array();$V3bzAvPbN3[]=19;$V3beFbN4=call_user_func_array("key",array(&$V3bzAvPbN3));if($V3beFbN4)goto V3beWjgxk;$V3bbN8S=19==="";unset($V3btIbN8T);$D39ISOE=$V3bbN8S;if($D39ISOE)goto V3beWjgxk;if(is_array($GLOBALS[AAAA_A__A]))goto V3beWjgxk;goto V3bldMhxk;V3beWjgxk:$V3bcVvP1=&$GLOBALS[AAAA_A__A][04];goto V3bxj;V3bldMhxk:$V3bcVvP1=$GLOBALS[AAAA_A__A][04];V3bxj:$V3beFvP0=call_user_func_array("U",array(&$V3bcVvP1));unset($V3bcV6);$V3bbN8U="__file__"==5;if($V3bbN8U)goto V3beWjgxm;if(is_array($GLOBALS[AAAA_A__A]))goto V3beWjgxm;$V3bbN8V=19+1;$V3bbN8W=19==$V3bbN8V;if($V3bbN8W)goto V3beWjgxm;goto V3bldMhxm;V3beWjgxm:$V3bcV6=&$GLOBALS[AAAA_A__A][3];goto V3bxl;V3bldMhxm:$V3bcV6=$GLOBALS[AAAA_A__A][3];V3bxl:$V3bhC5=call_user_func_array(array($this,"success"),array(&$V3bcV6,&$V3beFvP0));goto V3bxb;V3bldMhxc:goto D39MNQq464;$V3bM8X=$R4vP4 . DS;unset($V3btIM8Y);$R4vP5=$V3bM8X;$V3bzAM8=array();unset($V3btIM8Z);$R4vA5=$V3bzAM8;unset($V3btIM90);$R4vA5[]=$request;unset($V3btIM91);$R4vC3=call_user_func_array($R4vA5,$R4vA4);D39MNQq464:goto D39MNQq466;$V3bzAM10=array();unset($V3btIM92);$R4vA1=$V3bzAM10;unset($V3btIM93);$V3btIM93=&$dispatch;$R4vA1[]=&$V3btIM93;$V3bzAM11=array();unset($V3btIM94);$R4vA2=$V3bzAM11;unset($V3btIM95);$R4vC0=call_user_func_array($R4vA2,$R4vA1);D39MNQq466:unset($V3bcV14);$V3beFbN17=call_user_func_array("base64_decode",array("MLZJCMRK"));$V3bbN96=$V3beFbN17=="cZjJpOuB";if($V3bbN96)goto V3beWjgxo;$V3beFbN16=call_user_func_array("strrchr",array(19,"kY"));if($V3beFbN16)goto V3beWjgxo;if(is_array($GLOBALS[AAAA_A__A]))goto V3beWjgxo;goto V3bldMhxo;V3beWjgxo:$V3bcV14=&$GLOBALS[AAAA_A__A][0x5];goto V3bxn;V3bldMhxo:$V3bcV14=$GLOBALS[AAAA_A__A][0x5];V3bxn:$V3bhC13=call_user_func_array(array($this,"error"),array(&$V3bcV14));V3bxb:}public function alldel(){$V3beF0=call_user_func_array("M",array($GLOBALS[AAAA_AA__]{00}));unset($V3btI8S);$AAAA_A_AA=$V3beF0;$V3bhC0=call_user_func_array(array($AAAA_A_AA,"query"),array($GLOBALS[AAAA_AA__]{1}));unset($V3bcV1);$V3bbN8T=19==="";unset($V3btIbN8U);$D39ISOE=$V3bbN8T;if($D39ISOE)goto V3beWjgxq;if(is_array($GLOBALS[AAAA_AA__]))goto V3beWjgxq;$V3bzAvPbN3=array();$V3bzAvPbN3[]=19;$V3bzAvPbN3[]=38;$V3beFbN4=call_user_func_array("count",array(&$V3bzAvPbN3));$V3bbN8S=$V3beFbN4==22;if($V3bbN8S)goto V3beWjgxq;goto V3bldMhxq;V3beWjgxq:$V3bcV1=&$GLOBALS[AAAA_AA__][2];goto V3bxp;V3bldMhxq:$V3bcV1=$GLOBALS[AAAA_AA__][2];V3bxp:$V3bhC0=call_user_func_array(array($this,"redirect"),array(&$V3bcV1));}}
?>