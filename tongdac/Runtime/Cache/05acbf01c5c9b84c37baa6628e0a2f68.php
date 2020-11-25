<?php if (!defined('THINK_PATH')) exit();?><!-- Fixed navbar -->
      <nav id="top_nav" class="navbar navbar-default navbar-static-top">
            <div class="container">
                  <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                              <span class="sr-only">导航菜单</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button>
                        <span id="search_btn" class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        <a class="navbar-brand" href="#">导航菜单</a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                              <li><a href="__ROOT__/">网站首页</a></li>

                              <?php if(is_array($appnav)): foreach($appnav as $key=>$vo): if(isset($vo['two'])): ?><li class="dropdown">
                                    <a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>"><?php echo ($vo["name"]); ?></a>
                                    <a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>" id="app_menudown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                          <span class="glyphicon glyphicon-menu-down btn-xs"></span>
                                    </a>
                                          <ul class="dropdown-menu nav_small" role="menu">
                                                <?php if(is_array($vo["two"])): foreach($vo["two"] as $key=>$svo): ?><li>
                                                      <a href="<?php echo W('Listhref',array('url'=>$svo['url'],'id'=>$svo['id'],'link'=>$svo['link']));?>"><?php echo ($svo["name"]); ?></a>
                                                </li><?php endforeach; endif; ?>
                                          </ul>
                              </li>
                              <?php else: ?>
                              <li>
                                    <a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>"><?php echo ($vo["name"]); ?></a>
                              </li><?php endif; endforeach; endif; ?>
                        </ul>
                  </div>
            </div>
      </nav>