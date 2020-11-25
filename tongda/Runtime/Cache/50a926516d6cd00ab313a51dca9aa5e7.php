<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript">
//<!CDATA[ 
var box_height  = new Array(375,400,260,260,350,410);
var object = new Array();
function Slide(N,oCont){

	this.N  	= N;
	this.S  	= 1.1;
	this.object = new Array();
	
	this.CObj 	= function (parent,N){
		this.parent = parent;
		this.N = N;
		this.obj = parent.frm[N];
		this.tit = this.obj.firstChild;
		this.div = this.obj.getElementsByTagName("div")[1];
		this.div.style.visibility = "hidden";
		this.y0 = N * 35;
		this.Y1 = this.y0;
		this.obj.style.top = this.y0;
		this.obj.style.height = parent.H - (parent.NF-1) * 35 - 3;
		this.obj.style.visibility = "visible";
		this.obj.parent = this;
		this.run = false;
  		
		this.move = function(){
			with(this){
				dy = (y1-y0)/parent.S;
				if(Math.abs(dy)>.1){
					y0+=dy;
					obj.style.top = Math.round(y0);
					setTimeout("object["+parent.N+"].object["+N+"].move();", 16);
				} else {
					run = false;
					if(dy>0)
						div.style.visibility="hidden";

				}
			}
		}

		this.obj.onclick = function(){
			parent.H=box_height[N];
			with(this.parent){
				if(!run){
					run = true;
					div.style.visibility="visible";				
					for(i=0;i<parent.NF;i++){
						document.getElementById("tit"+i).className= "title"+i;
						if(document.getElementById("tit"+N).className=="title"+i) {
							document.getElementById("tit"+i).className="title_o"+i;
						}
					}
					for(i=0;i<=N;i++){
						parent.object[i].y1 = i*35;
						parent.object[i].move();
					}
					for(i=N+1;i<parent.NF;i++){
						parent.object[i].y1 = parent.H-(parent.NF-i)*35;
						parent.object[i].move();
					}
					if(N==0){
						parent.object[5].div.style.visibility="hidden";
					}
				}
			}
		}
	}

	this.frm 	= document.getElementById(oCont);
	this.H 		= parseInt(this.frm.style.height);
	this.frm 	= this.frm.getElementsByTagName("span");
	this.NF 	= this.frm.length;
	for(i=0;i<this.NF;i++) this.object[i] = new this.CObj(this, i);
	this.object[0].obj.onclick();
	this.S = 10;
}

onload = function() {
	object[0] = new Slide(0, "frames");
}
//]]>
</script>
</head>
<body style="background:url(../Public/images/blue_2010/left_bg.jpg) repeat-y;">
<div style="height:15px;"></div>
<div class="BodyLeft">
  <div id="frames" style="width:198px;height:500px;overflow:hidden;"> 
  	<span class="link">
    <div class="title" id="tit0">网站管理</div>
    <div class="text">
      <ul>
        <li><a href="<?php echo U('Config/index');?>" target="main">网站设置</a></li>
        <li><a href="<?php echo U('List/index');?>" target="main">栏目管理</a></li>
        <!--<li><a href="<?php echo U('inquiry/index');?>" target="main">查看询价</a></li>-->
        <li><a href="<?php echo U('Feedback/index');?>" target="main">查看留言</a></li>
        <li><a href="<?php echo U('Form/index');?>" target="main">留言表单</a></li>
        <li><a href="<?php echo U('Foot/index');?>" target="main">底部菜单</a></li>
        <li><a href="<?php echo U('Config/title');?>" target="main">版块标题</a></li>
      </ul>
    </div>
    </span> 
	<span class="link">
    <div class="title" id="tit1" title="点击展开">信息管理</div>
    <div class="text">
      <ul>

        <li><a href="<?php echo U('New/add');?>" target="main">添加新闻</a></li>
        <li><a href="<?php echo U('New/index');?>" target="main">管理新闻</a></li>
        <li><a href="<?php echo U('Photo/add');?>" target="main">添加产品</a></li>
		<li><a href="<?php echo U('Photo/index');?>" target="main">管理产品</a></li>
		<!--<li><a href="<?php echo U('Download/add');?>" target="main">添加下载</a></li>-->
        <!--<li><a href="<?php echo U('Download/index');?>" target="main">管理下载</a></li>-->
      </ul>
    </div>
    </span> 
	<span class="link">
    <div class="title" id="tit2" title="点击展开">广告管理</div>
    <div class="text">
      <ul>
        <li><a href="<?php echo U('Flash/add');?>" target="main">添加广告</a></li>
        <li><a href="<?php echo U('Flash/index');?>" target="main">广告管理</a></li>
      </ul>
    </div>
    </span> 
	<span class="link">
    <div class="title" id="tit3" title="点击展开">友情链接</div>
    <div class="text">
      <ul>
        <li><a href="<?php echo U('Link/index');?>" target="main">文字链接</a></li>
        <li><a href="<?php echo U('Link/photo');?>" target="main">图片链接</a></li>
      </ul>
    </div>
    </span> 
	<span class="link">
    <div class="title" id="tit4" title="点击展开">SEO优化</div>
    <div class="text">
      <ul>
      	<li><a href="<?php echo U('Config/setstatic');?>" target="main">伪静态设置</a></li>
        <li><a href="__ROOT__/index.php?m=Sitemap&a=index" target="main">生成站点地图</a></li>
        <li><a href="__ROOT__/index.php?m=Sitemap&a=baidu" target="main">百度Sitemap</a></li>
        <li><a href="__ROOT__/index.php?m=Sitemap&a=google" target="main">谷歌Sitemap</a></li>
        <li><a href="<?php echo U('Tags/index');?>" target="main">Tag标签优化</a></li>
        <li><a href="<?php echo U('Inside/index');?>" target="main">内链优化管理</a></li>
      </ul>
    </div>
    </span> 
	<span class="link">
    <div class="title" id="tit5" title="点击展开">其它功能</div>
    <div class="text" id="text5">
      <ul>
        <li><a href="<?php echo U('User/index');?>" target="main">用户管理</a></li>
        <li><a href="<?php echo U('User/add');?>" target="main">添加用户</a></li>
        <li><a href="<?php echo U('Config/water');?>" target="main">水印设置</a></li>
        <li><a href="<?php echo U('Index/debugindex');?>" target="main">调试模式</a></li>
        <li><a href="<?php echo U('Deltemp/index');?>" target="main">清除缓存</a></li>
      </ul>
    </div>
    </span> 
   </div>
</div>
</body>
</html>