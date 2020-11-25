<?php

$sqls[]="CREATE TABLE IF NOT EXISTS `td_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(1000) NOT NULL DEFAULT '',
  `buyname` varchar(50) NOT NULL DEFAULT '',
  `buylink` varchar(2000) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `pid` int(11) NOT NULL COMMENT '关联栏目ID',
  `bid` int(11) NOT NULL,
  `photo` varchar(1000) NOT NULL DEFAULT '' COMMENT '产品图',
  `thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `introduce` varchar(3000) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `featured` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否推荐',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `photo` varchar(1000) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL DEFAULT '0',
  `bid` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url_2` (`url`),
  KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(300) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  `filename` varchar(400) NOT NULL DEFAULT '',
  `link` varchar(3000) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text0` varchar(200) NOT NULL DEFAULT '',
  `text1` varchar(200) NOT NULL DEFAULT '',
  `text2` varchar(200) NOT NULL DEFAULT '',
  `text3` varchar(200) NOT NULL DEFAULT '',
  `text4` varchar(200) NOT NULL DEFAULT '',
  `text5` varchar(200) NOT NULL DEFAULT '',
  `text6` varchar(200) NOT NULL DEFAULT '',
  `text7` varchar(200) NOT NULL DEFAULT '',
  `text8` varchar(200) NOT NULL DEFAULT '',
  `text9` varchar(200) NOT NULL DEFAULT '',
  `email` varchar(200) NOT NULL DEFAULT '',
  `radio` varchar(100) NOT NULL DEFAULT '',
  `select0` varchar(200) NOT NULL DEFAULT '',
  `select1` varchar(200) NOT NULL DEFAULT '',
  `select2` varchar(200) NOT NULL DEFAULT '',
  `textarea` varchar(3000) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_flash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `link` varchar(300) NOT NULL DEFAULT '',
  `photo` varchar(100) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `isdel` tinyint(1) NOT NULL DEFAULT '0',
  `description` varchar(400) DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT 'flash',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_inquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `contents` varchar(3000) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_inside` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `number` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(500) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `photo` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `pid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(300) NOT NULL DEFAULT '',
  `keywords` varchar(200) NOT NULL DEFAULT '',
  `description` varchar(400) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '1',
  `nav` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(30) NOT NULL DEFAULT '',
  `link` varchar(200) NOT NULL DEFAULT '',
  `contents` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(10) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(30) NOT NULL DEFAULT '',
  `fieldname` varchar(30) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;";


$sqls[]="CREATE TABLE IF NOT EXISTS `td_foot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(3000) NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;";


$intosqls[]="INSERT INTO `td_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');";

$intosqls[]="INSERT INTO `td_list` (`id`, `name`, `pid`, `bid`, `title`, `url`, `keywords`, `description`, `sort`, `nav`, `type`, `link`, `contents`) VALUES
(1, '产品中心', 0, 1, '产品中心-SEO标题优化', 'product', '产品中心', '产品中心产品中心', 2, 1, 'product', '', ''),
(2, '新闻资讯', 0, 2, '新闻优化标题', 'new', '新闻关键字优化', '新闻描述优化', 3, 1, 'new', '', ''),
(3, '下载中心', 0, 3, '下载中心', 'download', '下载中心', '下载中心', 4, 1, 'download', '', ''),
(4, '联系我们', 0, 4, '联系我们', 'Contact-us', '联系我们', '联系我们 联系我们', 9, 1, 'page', '', '<p>联系我们联系我们联系我们</p><p>联系我们联系我们联系我们</p><p><br/></p>'),
(5, '产品大类1', 1, 1, '产品大类1产品大类1', '1', '产品大类1产品大类1', '产品大类1产品大类1', 1, 1, 'product', '', ''),
(6, '产品大类2', 1, 1, '产品大类2-SEO标题优化', '2', '产品大类2', '产品大类2', 2, 1, 'product', '', ''),
(7, '产品大类3', 1, 1, '产品大类3-SEO标题优化', '3', '产品大类3', '产品大类3', 3, 1, 'product', '', ''),
(8, '产品小类1_1', 5, 1, '', '4', '', '', 1, 1, 'product', '', ''),
(9, '产品小类1_2', 5, 1, '', '5', '', '', 2, 1, 'product', '', ''),
(10, '产品小类2_1', 6, 1, '', '7', '', '', 1, 1, 'product', '', ''),
(11, '产品小类2_2', 6, 1, '', '8', '', '', 2, 1, 'product', '', ''),
(12, '公司新闻', 2, 2, '公司新闻', '10', '公司新闻', '公司新闻公司新闻', 1, 1, 'new', '', ''),
(13, '行业新闻', 2, 2, '行业新闻', '11', '行业新闻', '行业新闻行业新闻', 2, 1, 'new', '', ''),
(14, '产品小类1_3', 5, 1, '333', '6', '33', '3333', 3, 1, 'product', '', ''),
(15, '客户案例', 0, 15, '客户案例', 'photo', '客户案例', '客户案例，客户案例', 5, 1, 'photo', '', ''),
(25, '公司简介', 0, 25, '通达企业网站系统tdCMS', 'About-us', '通达,tdCMS', '通达企业网站系统tdCMS是采用PHP+MYSQL技术和MVC模式进行开发的，架构清晰，代码易于维护。支持伪静态功能，可生成google和百度地图，支持自定义url、关键字和描述，符合SEO标准。', 1, 1, 'page', '', '<p>通达企业网站系统tdCMS是采用PHP+MYSQL技术和MVC模式进行开发的，架构清晰，代码易于维护。支持伪静态功能，可生成google和百度地图，支持自定义url、关键字和描述，符合SEO标准。拥有企业网站常用的模块功能(企业简介模块、新闻模块、产品模块、下载模块、图片模块、在线留言、在线订单、友情链接、网站地图等)，强大灵活的后台管理功能，可为企业打造出专业且具有营销力的标准网站。</p>'),
(26, '最新案例', 15, 15, '最新案例-SEO标题', '15', '最新案例', '最新案例最新案例最新案例最新案例', 1, 1, 'photo', '', ''),
(27, '经典案例', 15, 15, '经典案例-SEO标题', '16', '经典案例', '经典案例经典案例', 2, 1, 'photo', '', ''),
(28, '帮助文档', 3, 3, '帮助文档帮助文档帮助文档', '13', 'SEO关键字SEO关键字', 'SEO描述SEO描述SEO描述', 1, 1, 'download', '', ''),
(29, '档案下载', 3, 3, '档案下载档案下载档案下载档案下载', '14', 'SEO关键字SEO关键字', 'SEO描述SEO描述SEO描述', 2, 1, 'download', '', ''),
(30, '在线留言', 0, 30, '', 'Feedback', '', '', 7, 1, 'link', '/Feedback/', ''),
(39, '常见问答', 2, 2, '常见问答', '12', '常见问答', '常见问答', 3, 1, 'new', '', ''),
(40, '部门新闻', 12, 2, '部门新闻', '9', '部门新闻部门新闻', '部门新闻部门新闻部门新闻', 1, 1, 'new', '', '');";		

$intosqls[]="INSERT INTO `td_new` (`id`, `title`, `url`, `keywords`, `description`, `contents`, `thumb`, `pid`, `bid`, `sort`, `time`) VALUES
(1, '导电PC塑料广泛应用于电子行业', '1', '油价上涨', '在电子电器行业中，由于聚碳酸酯在较宽的温、湿度范围内具有良好而恒定的电绝缘性，普骏导电PC塑料是优良的绝缘材料。同时，由于具备良好的难燃性和尺寸稳定性，在电子电器行业广泛应用，包括电动工具外壳、机体、支架、冰箱冷冻室抽屉和真空吸尘器零件等。计算机、视频录像机和彩色电视机中的重要零部件方面，导电防静电PC材料的应用也很多。', '<p>在电子电器行业中，由于聚碳酸酯在较宽的温、湿度范围内具有良好而恒定的电绝缘性，普骏导电PC塑料是优良的绝缘材料。同时，由于具备良好的难燃性和尺寸稳定性，在电子电器行业广泛应用，包括电动工具外壳、机体、支架、冰箱冷冻室抽屉和真空吸尘器零件等。计算机、视频录像机和彩色电视机中的重要零部件方面，导电防静电PC材料的应用也很多。</p><p><br/></p>', '5b631637cd957.jpg', 12, 2, 1, 1533052800),
(22, '如何解决导电PC注塑件熔接痕问题？', '2', '如何解决导电PC注塑件熔接痕问题？', '导电PC塑胶颗粒用于注塑工艺的产品有：电子周转箱、电子托盘、安全帽等。导电PC塑胶颗粒在注塑过程中有可能出现熔接痕现象。熔接痕是指通过高温熔融的塑料在模具腔体内因遇到孔洞、流速不连贯', '<p>导电PC塑胶颗粒用于注塑工艺的产品有：电子周转箱、电子托盘、安全帽等。导电PC塑胶颗粒在注塑过程中有可能出现熔接痕现象。熔接痕是指通过高温熔融的塑料在模具腔体内因遇到孔洞、流速不连贯、充模料流中断的区域时以多股形式汇合在一起时产生的线状痕迹，熔接痕会影响注塑件的机械强度，造成熔接痕的最根本问题在于模具，那么我们可从以下四点避免熔接痕问题。</p><p>', '', 39, 2, 9, 1392480000);";

$intosqls[]="INSERT INTO `td_product` (`id`, `name`, `title`, `url`, `keywords`, `description`, `buyname`, `buylink`, `contents`, `pid`, `bid`, `photo`, `thumb`, `introduce`, `sort`, `featured`) VALUES
(2, 'PAPAGO行车记录仪1080P全高清', 'PAPAGO行车记录仪1080P全高清WDR宽动态影像处理技术', '1', '全高清', 'PAPAGO行车记录仪1080P全高清WDR宽动态影像处理技术', '', '', '<p><span>PAPAGO P1 PRO白色款智能提示行车记录仪，前车起步提醒、限速标志检测、疲劳驾驶警示、开灯提醒、1080P全高清行车记录仪，很时尚，很智能。重要提示：官方标配不含内存卡，本描述介绍内存卡部分是建议选配说明，请注意内存卡需要单独购买！ 关于录制时间长短说明：8G卡一般可录制2-3小时，16G卡一般可录制5-6小时，32G卡一般可录制8-10小时，录制时间长短也会因录制环境、画面色彩等因素而不同，以上数值仅为参考，请以实际录制时间长短为准，或以内存卡销售商标注为准。更多问题咨询建议您咨询页面在线客服回复更及时更全面。22222</span></p><p><br/></p>', 8, 1, '530860294daf2.jpg', '5b4dfc1bb2668.jpg', '', 7, 1);";

$intosqls[]="INSERT INTO `td_photo` (`id`, `name`, `title`, `url`, `keywords`, `description`, `contents`, `thumb`, `photo`, `pid`, `bid`, `sort`) VALUES
(1, '农业机械农业机械', '农业机械农业机械', 'case-1', '农业机械农业机械', '本案坐落于繁华市区的江景房，业主为年轻的海归人士，在尊重建筑结构的基础上，巧妙运用西方的理性结构与现代文化元素，成就出符合人性使用的机能空间。', '<p>本案坐落于繁华市区的江景房，业主为年轻的海归人士，在尊重建筑结构的基础上，巧妙运用西方的理性结构与现代文化元素，成就出符合人性使用的机能空间。本案坐落于繁华市区的江景房，业主为年轻的海归人士，在尊重建筑结构的基础上，巧妙运用西方的理性结构与现代文化元素，成就出符合人性使用的机能空间。222222</p>', '5a465bfe6d9a1.jpg', '5a465bf9ab4da.jpg,5a465bf9bc64e.jpg', 15, 15, 1);";

$intosqls[]="INSERT INTO `td_flash` (`id`, `title`, `link`, `photo`, `sort`, `isdel`, `description`, `type`) VALUES
(1, '电脑幻灯片一', 'http://www.tdcms.com/', '53007d7931975.jpg', 1, 0, '第一个幻灯广告\r\n第二行第二行', 'flash'),
(2, '电脑幻灯片二', 'http://www.tdcms.com/', '5300811240d99.jpg', 2, 0, '', 'flash'),
(5, '快：交货速度快', 'http://v3.tdcms.com/product.html', '5ce63e4615349.png', 1, 0, '第一天下单，第二天排产\r\n标准规格 库存充足 当天发货\r\n机动人员储备 加班加点及时交', 'adv'),
(8, '列表页背景图', '无需填写', '5780c309432c5.jpg', 1, 0, '无需填写', 'page'),
(7, '省：性价比高', 'http://v3.tdcms.com/product.html', '5ce63eb6bd487.jpg', 2, 0, '厂家直销 无差价\r\n批量生产 薄利多销\r\n一站式采购 省钱更省心\r\n服务上100多家电商平台', 'adv'),
(10, '好：运旺品质 值得信赖', 'http://v3.tdcms.com/product.html', '5ce63fb8908b1.jpg', 3, 0, '卫浴五金12年，用质量说话\r\n以制造实力赢得市场', 'adv'),
(21, '底部LOGO', '无需填写', '5b9139150cec0.png', 3, 0, '无需填写', 'page'),
(14, '首页案例背景图', '无需填写', '5b5499b7e2093.jpg', 0, 1, '无需填写', 'page'),
(15, '强：强服务大企业', 'http://v3.tdcms.com/product.html', '5ce6401362b13.jpg', 4, 0, '售前耐心沟通定制合作方案，售后24小时在线\r\n五金产品辐射全国20多个省\r\n自主品牌，实力背书', 'adv'),
(17, '手机幻灯片一', 'http://www.tdcms.com', '5b93e56bdcd8e.jpg', 1, 0, '手机幻灯片一', 'app'),
(18, '手机幻灯片二', 'http://tdcms.taobao.com', '5b93e583ba833.jpg', 2, 0, '手机幻灯片二', 'app');";

$intosqls[]="INSERT INTO `td_link` (`id`, `name`, `url`, `sort`, `type`, `photo`) VALUES
(1, '顺林模型', 'http://www.tdcms.com', 2, 2, '5b69ae40208ad.jpg');";

$intosqls[]="INSERT INTO `td_foot` (`id`, `name`, `url`, `sort`, `pid`) VALUES
(1, '产品中心', 'http://v3.tdcms.com/product.html', 1, 0),
(2, '产品小类1', 'http://v3.tdcms.com/product.html', 1, 1),
(7, '部门新闻', 'http://v3.tdcms.com/new.html', 1, 6),
(6, '新闻中心', 'http://v3.tdcms.com/new.html', 2, 0),
(9, '产品小类2', 'http://v3.tdcms.com/product.html', 2, 1),
(10, '公司简介', 'http://v3.tdcms.com/About-us.html', 3, 0),
(11, '资质证书', 'http://v3.tdcms.com/About-us.html', 1, 10);";

$intosqls[]="INSERT INTO `td_form` (`id`, `name`, `type`, `fieldname`, `sort`, `pid`, `hide`, `required`) VALUES
(1, '姓名', 'text', 'text0', 1, 0, 0, 1),
(2, '手机', 'text', 'text1', 2, 0, 0, 1),
(3, '邮箱', 'email', 'email', 3, 0, 0, 1),
(4, '电话', 'text', 'text2', 9, 0, 1, 0),
(5, '公司', 'text', 'text3', 5, 0, 1, 0),
(6, '地址', 'text', 'text4', 5, 0, 1, 0),
(7, '传真', 'text', 'text5', 6, 0, 1, 0),
(8, '微信', 'text', 'text6', 7, 0, 1, 0),
(9, '学历', 'text', 'text7', 8, 0, 1, 0),
(10, '各个表单名可在后台修改', 'text', 'text8', 4, 0, 0, 1),
(11, '微博', 'text', 'text9', 10, 0, 1, 0),
(12, '性别', 'radio', 'radio', 11, 0, 0, 1),
(13, '男', 'radio', 'radio', 1, 12, 0, 1),
(14, '女', 'radio', 'radio', 2, 12, 0, 0),
(15, '品牌', 'select', 'select0', 12, 0, 1, 1),
(16, '联想', 'select', 'select0', 1, 15, 0, 0),
(17, '戴尔', 'select', 'select0', 2, 15, 0, 0),
(18, '华硕', 'select', 'select0', 3, 15, 0, 0),
(19, '风格', 'select', 'select1', 13, 0, 1, 1),
(20, '简约', 'select', 'select1', 1, 19, 0, 0),
(21, '欧式', 'select', 'select1', 2, 19, 0, 0),
(22, '车型', 'select', 'select2', 14, 0, 1, 1),
(23, '微型车', 'select', 'select2', 1, 22, 0, 0),
(24, '跑车', 'select', 'select2', 2, 22, 0, 0),
(25, '详细内容', 'textarea', 'textarea', 15, 0, 0, 0),
(28, '单车', 'select', 'select2', 3, 22, 0, 0);";

?>