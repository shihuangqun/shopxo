<?php /*a:9:{s:82:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/order\index.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\header.html";i:1563161086;s:92:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\header_top_nav.html";i:1563161086;s:88:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\nav_search.html";i:1563161086;s:88:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\header_nav.html";i:1563161086;s:92:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\goods_category.html";i:1563161086;s:87:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\user_menu.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\footer.html";i:1563161086;s:88:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\footer_nav.html";i:1563161086;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo config('shopxo.default_charset', 'utf-8'); ?>" />
	<title><?php echo htmlentities($home_seo_site_title); ?></title>
	<meta name="keywords" content="<?php echo htmlentities($home_seo_site_keywords); ?>" />
	<meta name="description" content="<?php echo htmlentities($home_seo_site_description); ?>" />
	<meta name="generator" content="<?php echo __MY_URL__; ?>" />
	<meta name="application-name" content="<?php echo htmlentities($home_seo_site_title); ?>" />
	<meta name="msapplication-tooltip" content="<?php echo htmlentities($home_seo_site_title); ?>" />
	<meta name="msapplication-starturl" content="<?php echo __MY_URL__; ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo __MY_PUBLIC_URL__; ?>favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">

	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php echo MyC('home_site_name'); ?>">
    <link rel="apple-touch-icon" href="<?php echo htmlentities($attachment_host); ?><?php echo MyC('home_site_desktop_icon'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo htmlentities($attachment_host); ?><?php echo MyC('home_site_desktop_icon'); ?>">
    
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/assets/css/amazeui.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-switch/amazeui.switch.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/cropper/cropper.min.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/index/<?php echo htmlentities($default_theme); ?>/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php if(!empty($plugins_css)): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/<?php echo htmlentities($plugins_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; if(!empty($module_css)): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/<?php echo htmlentities($module_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<?php endif; ?>

	<!-- css钩子 -->
    <?php if(!empty($plugins_css_data) and is_array($plugins_css_data)): foreach($plugins_css_data as $hook): if(is_string($hook)): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
            <?php elseif(is_array($hook)): foreach($hook as $hook_css): if(is_string($hook_css)): ?>
                        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

	<script type="text/javascript">
		var __root__ = '<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>';
		var __my_url__ = '<?php echo __MY_URL__; ?>';
		var __public__ = '<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>';
		var __default_theme__ = '<?php echo htmlentities($default_theme); ?>';
		var __modal_login_url__ = '<?php echo Url("index/user/modallogininfo"); ?>';
		var __attachment_host__ = '<?php echo htmlentities($attachment_host); ?>';
        var __seo_url_suffix__ = '<?php echo MyC("home_seo_url_html_suffix", "html", true); ?>';
		var __user_id__ = <?php if(empty($user['id'])): ?>0<?php else: ?><?php echo htmlentities($user['id']); ?><?php endif; ?>;
	</script>
	
	<!-- 公共header内钩子 -->
	<?php if(!empty($plugins_common_header_data) and is_array($plugins_common_header_data)): foreach($plugins_common_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
</head>
<body>
<!-- css钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_header) or $is_header == 1)): ?>
    <div class="plugins-tag">
        <span>plugins_css</span>
    </div>
<?php endif; ?>

<!-- 公共header内钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_header) or $is_header == 1)): ?>
	<div class="plugins-tag">
		<span>plugins_common_header</span>
	</div>
<?php endif; ?>

<!-- 公共顶部钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_header) or $is_header == 1)): ?>
	<div class="plugins-tag">
		<span>plugins_view_common_top</span>
	</div>
<?php endif; if(!empty($plugins_view_common_top_data) and is_array($plugins_view_common_top_data) and (!isset($is_header) or $is_header == 1)): foreach($plugins_view_common_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			<?php echo $hook; ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>

<!-- header top nav -->
<!-- 顶部导航条 start -->
<div class="header-top">
    <div class="am-container header">
        <ul class="top-nav-left">
            <div class="top-nav-items">
                <div class="menu-hd">
                    <?php if(empty($user)): ?>
                        <em>您好，欢迎来到</em>
                        <em><?php echo MyC('home_site_name'); ?></em>
                        <?php if(MyC('home_user_login_state') == 1): ?>
                            [<a href="<?php echo MyUrl('index/user/logininfo'); ?>">登录</a>]
                        <?php endif; if(in_array('sms', MyC('home_user_reg_state')) or in_array('email', MyC('home_user_reg_state')) or in_array('username', MyC('home_user_reg_state'))): ?>
                            [<a href="<?php echo MyUrl('index/user/regInfo'); ?>">注册</a>]
                        <?php endif; else: ?>
                        <em>您好</em>
                        <?php if(!empty($user['icon'])): ?>
                            <img src="<?php echo htmlentities($user['icon']); ?>" class="common-user-icon" <?php if(!empty($user['icon_title'])): ?>title="<?php echo htmlentities($user['icon_title']); ?>"<?php endif; ?> />
                        <?php endif; ?>
                        <em><?php echo htmlentities($user['user_name_view']); ?>，欢迎来到</em>
                        <em><?php echo MyC('home_site_name'); ?></em>
                        [<a href="<?php echo MyUrl('index/user/logout'); ?>">退出</a>]
                    <?php endif; ?>

                    <!-- 公共顶部小导航钩子-左侧 -->
                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                        <div class="plugins-tag">
                            <span>plugins_view_header_navigation_top_left</span>
                        </div>
                    <?php endif; if(!empty($plugins_view_header_navigation_top_left_data) and is_array($plugins_view_header_navigation_top_left_data) and (!isset($is_footer) or $is_footer == 1)): foreach($plugins_view_header_navigation_top_left_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                <?php echo $hook; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </ul>
        <ul class="top-nav-right">
            <?php foreach($common_nav_top_right_list as $nav): if(empty($nav['items'])): ?>
                    <div class="top-nav-items">
                        <div class="menu-hd <?php if(isset($nav['is_login']) and $nav['is_login'] == 1 and empty($user)): ?>login-event<?php endif; ?>">
                            <a href="<?php if(empty($user)): ?>javascript:;<?php else: ?><?php echo htmlentities($nav['url']); ?><?php endif; ?>" target="_top">
                                <i class="am-icon-fw <?php echo htmlentities($nav['icon']); ?>"></i>
                                <span><?php echo htmlentities($nav['name']); ?></span>
                                <?php if(isset($nav['badge']) and $nav['badge'] > -1): if($nav['badge'] > 0): ?>
                                        <strong class="am-badge am-badge-danger am-round common-cart-total"><?php echo htmlentities($nav['badge']); ?></strong>
                                    <?php else: ?>
                                        <strong class="common-cart-total am-round"><?php echo htmlentities($nav['badge']); ?></strong>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="top-nav-items">
                        <div class="am-dropdown menu-hd <?php if(isset($nav['is_login']) and $nav['is_login'] == 1 and empty($user)): ?>login-event<?php endif; ?>" data-am-dropdown>
                            <a class="am-dropdown-toggle" href="javascript:;" target="_top" data-am-dropdown-toggle>
                                <i class="am-icon-fw <?php echo htmlentities($nav['icon']); ?>"></i>
                                <span><?php echo htmlentities($nav['name']); ?></span>
                                <i class="am-icon-angle-down"></i>
                            </a>
                            <?php if(!empty($user)): ?>
                                <ul class="am-dropdown-content">
                                    <?php foreach($nav['items'] as $navs): ?>
                                        <li>
                                            <a href="<?php if(empty($user)): ?>javascript:;<?php else: ?><?php echo htmlentities($navs['url']); ?><?php endif; ?>"><?php echo htmlentities($navs['name']); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<!-- 顶部导航条 end

<!-- search -->
<!-- 搜索框 start -->
<div class="nav-search white am-hide-sm-only">
    <div class="logo am-show-sm-only">
        <a href="<?php echo htmlentities(__MY_URL__); ?>">
            <img src="<?php echo htmlentities($attachment_host); ?><?php echo MyC('home_site_logo_wap'); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
        </a>
    </div>
    <div class="logo-big am-hide-sm-only">
        <a href="<?php echo htmlentities(__MY_URL__); ?>">
            <img src="<?php echo htmlentities($attachment_host); ?><?php echo MyC('home_site_logo'); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
        </a>
    </div>

    <div class="search-bar">
        <form action="<?php echo MyUrl('index/search/index'); ?>" method="POST">
            <div class="search-group">
                <input id="search-input" name="wd" type="text" placeholder="其实搜索很简单^_^ !" value="<?php if(!empty($params['wd'])): ?><?php echo htmlentities($params['wd']); ?><?php endif; ?>" autocomplete="off" />
                <input id="ai-topsearch" class="submit am-btn" index="1" type="submit" value="搜索" />
            </div>
            <?php if(!empty($home_search_keywords)): ?>
                <ul class="search-hot-keywords">
                    <?php foreach($home_search_keywords as $v): ?>
                        <li><a href="<?php echo MyUrl('index/search/index', ['wd'=>StrToAscii($v)]); ?>" target="_blank"><?php echo htmlentities($v); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </form>
    </div>
</div>
<!-- 搜索框 end -->

<!-- header nav -->
<header class="am-topbar shop-navigation">
    <div class="am-container">
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only switch-submit" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

        <h1 class="am-topbar-brand wap-logo am-show-sm-only">
            <a href="<?php echo htmlentities(__MY_URL__); ?>">
                <img src="<?php echo htmlentities($attachment_host); ?><?php echo MyC('home_site_logo_wap'); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
            </a>
        </h1>

        <a href="<?php echo MyUrl('index/category/index'); ?>" class="am-show-md-only">
            <div class="goods-category-title am-hide-sm-only">
                <span class="all-goods">全部分类</span>
            </div>
        </a>

        <form class="am-topbar-form am-topbar-left am-form-inline am-show-sm-only navigation-search" role="search" action="<?php echo MyUrl('index/search/index'); ?>" method="POST">
            <div class="am-input-group am-input-group-sm">
                <input type="text" name="wd" class="am-form-field" placeholder="其实搜索很简单^_^ !" value="<?php if(!empty($params['wd'])): ?><?php echo htmlentities($params['wd']); ?><?php endif; ?>" autocomplete="off" />
                <span class="am-input-group-btn">
                    <button class="am-btn am-btn-default" type="submit">
                        <span class="am-icon-search am-icon-xs"></span>
                    </button>
                </span>
            </div>
        </form>

        <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
            <?php if(empty($user)): ?>
                <!-- 未登录 -->
                <div class="navigation-button am-show-sm-only">
                    <?php if(MyC('home_user_login_state') == 1): ?>
                        <a href="<?php echo MyUrl('index/user/logininfo'); ?>" class="am-btn am-btn-primary am-topbar-btn am-btn-sm">登录</a>
                    <?php endif; if(in_array('sms', MyC('home_user_reg_state')) or in_array('email', MyC('home_user_reg_state')) or in_array('username', MyC('home_user_reg_state'))): ?>
                        <a href="<?php echo MyUrl('index/user/regInfo'); ?>" class="am-btn am-btn-success am-topbar-btn am-btn-sm">注册</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- 主导航 -->
            <ul class="am-nav am-nav-pills am-topbar-nav">
                <li><a href="<?php echo htmlentities(__MY_URL__); ?>">首页</a></li>
                <?php if(!empty($nav_header)): foreach($nav_header as $nav): if(empty($nav['items'])): ?>
                            <li>
                                <a href="<?php echo htmlentities($nav['url']); ?>" <?php if($nav['is_new_window_open'] == 1): ?>target="_blank"<?php endif; ?> title="<?php echo htmlentities($nav['name']); ?>"><?php echo htmlentities($nav['name']); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="am-dropdown" data-am-dropdown>
                            <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                                <?php echo htmlentities($nav['name']); ?> <span class="am-icon-angle-down"></span>
                            </a>
                            <ul class="am-dropdown-content">
                                <?php foreach($nav['items'] as $navs): ?>
                                    <li>
                                        <a href="<?php echo htmlentities($navs['url']); ?>" title="<?php echo htmlentities($navs['name']); ?>"><?php echo htmlentities($navs['name']); ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>

            <div class="am-topbar-right am-hide-sm-only">
                <div class="navigation-user <?php if(empty($user)): ?>login-event<?php endif; ?>">
                    <a href="<?php if(empty($user)): ?>javascript:;<?php else: ?><?php echo MyUrl('index/user/index'); ?><?php endif; ?>">
                        <img src="<?php if(!empty($user['avatar'])): ?><?php echo htmlentities($user['avatar']); else: ?><?php echo htmlentities($attachment_host); ?>/static/<?php echo htmlentities($module_name); ?>/<?php echo htmlentities($default_theme); ?>/images/default-user-avatar.jpg<?php endif; ?>" class="nav-user" />
                        <b></b>
                        <span>我的商城</span>
                        <i class="am-icon-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- goods category -->
<!-- 商品分类  -->
<div id="goods-category" class="am-container am-hide-sm-only am-hide-md-only" data-controller-name="<?php echo htmlentities($controller_name); ?>">
    <div class="goods-category-s">
        <a href="<?php echo MyUrl('index/category/index'); ?>">
            <div class="goods-category-title">
                <span class="all-goods">全部分类</span>
            </div>
        </a>
        <div class="category-content" <?php if(isset($controller_name) and $controller_name != 'index'): ?>style="display:none;"<?php endif; ?>>
            <div class="category">
                <ul class="category-list" id="js_climit_li">
                    <?php if(!empty($goods_category_list) and is_array($goods_category_list)): foreach($goods_category_list as $v): ?>
                            <li class="appliance js_toggle relative first">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name">
                                        <?php if(!empty($v['icon'])): ?>
                                            <img src="<?php echo htmlentities($v['icon']); ?>" />
                                        <?php endif; ?>
                                        <a href="<?php echo MyUrl('index/search/index', ['category_id'=>$v['id']]); ?>" class="ml-22" title="<?php echo htmlentities($v['name']); ?>"><?php echo htmlentities($v['name']); ?></a>
                                    </h3>
                                    <em>&gt;</em>
                                </div>
                                <div class="menu-item menu-in top">
                                    <div class="area-in">
                                        <div class="area-bg">
                                            <div class="menu-srot">
                                                <div class="sort-side">
                                                    <?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
                                                            <dl class="dl-sort">
                                                                <dt>
                                                                    <a href="<?php echo MyUrl('index/search/index', ['category_id'=>$vs['id']]); ?>" title="<?php echo htmlentities($vs['name']); ?>">
                                                                        <span title="<?php echo htmlentities($vs['name']); ?>"><?php echo htmlentities($vs['name']); ?></span>
                                                                    </a>
                                                                </dt>
                                                                <?php if(!empty($vs['items'])): foreach($vs['items'] as $vss): ?>
                                                                        <dd>
                                                                            <a href="<?php echo MyUrl('index/search/index', ['category_id'=>$vss['id']]); ?>" title="<?php echo htmlentities($vss['name']); ?>">
                                                                                <span><?php echo htmlentities($vss['name']); ?></span>
                                                                            </a>
                                                                        </dd>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </dl>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- content -->
<div class="am-container user-main">

    <!-- user menu start -->
    <!-- 用户中心菜单 -->
<div class="user-sidebar am-offcanvas" id="user-offcanvas">
  <div class="am-offcanvas-bar user-offcanvas-bar">
    <ul class="am-list user-sidebar-list">
      <?php if(!empty($user_left_menu) and is_array($user_left_menu)): foreach($user_left_menu as $k=>$v): if($v['is_show'] == 1): if(empty($v['item'])): ?>
              <li class="<?php if(isset($v['contains']) and ((in_array(strtolower($controller_name.$action_name), $v['contains']) and isset($v['is_system']) and $v['is_system'] == 1 and !isset($params['pluginscontrol'])) or (isset($params['pluginscontrol']) and isset($params['pluginsaction']) and in_array(strtolower($params['pluginscontrol'].$params['pluginsaction']), $v['contains']) and (!isset($v['is_system']) or $v['is_system'] != 1)))): ?> am-active<?php endif; ?>" >
                <a href="<?php echo htmlentities($v['url']); ?>"><?php if(!empty($v['icon'])): ?><i class="<?php echo htmlentities($v['icon']); ?>"></i><?php endif; ?> <?php echo htmlentities($v['name']); ?></a>
              </li>
            <?php else: ?>
              <li>
                <a class="am-cf user-item-parent" data-am-collapse="{target: '#collapse-nav-<?php echo htmlentities($k); ?>'}"><?php if(!empty($v['icon'])): ?><i class="<?php echo htmlentities($v['icon']); ?>"></i><?php endif; ?> <?php echo htmlentities($v['name']); ?><span class="am-icon-angle-down am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse user-sidebar-sub am-in" id="collapse-nav-<?php echo htmlentities($k); ?>">
                  <?php foreach($v['item'] as $vs): if($vs['is_show'] == 1): ?>
                      <li class="<?php if(isset($vs['contains']) and ((in_array(strtolower($controller_name.$action_name), $vs['contains']) and isset($vs['is_system']) and $vs['is_system'] == 1 and !isset($params['pluginscontrol'])) or (isset($params['pluginscontrol']) and isset($params['pluginsaction']) and in_array(strtolower($params['pluginscontrol'].$params['pluginsaction']), $vs['contains']) and (!isset($vs['is_system']) or $vs['is_system'] != 1)))): ?> am-active<?php endif; ?>">
                        <a href="<?php echo htmlentities($vs['url']); ?>" class="am-cf"><?php if(!empty($vs['icon'])): ?><i class="<?php echo htmlentities($vs['icon']); ?>"></i><?php endif; ?> <?php echo htmlentities($vs['name']); ?></a>
                      </li>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php endif; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>
<a href="javascript:;" class="am-icon-btn am-icon-th-list am-show-sm-only user-menu" data-am-offcanvas="{target: '#user-offcanvas'}"></a>

<!-- 用户头像修改 -->
<div class="am-popup common-cropper-popup" id="user-avatar-popup">
    <div class="am-popup-inner">
        <div class="am-popup-hd meila-radius">
            <h4 class="am-popup-title">头像上传</h4>
            <span data-am-modal-close class="am-close">&times;</span>
        </div>
        <div class="am-popup-bd">
            <form class="am-form form-validation-user-avatar view-save" action="<?php echo MyUrl('index/user/useravatarupload'); ?>" method="POST" request-type="ajax-reload" enctype="multipart/form-data">
                <div class="cropper-images-view">
                    <div class="img-container am-fl user-avatar-img-container">
                        <img src="<?php echo htmlentities($attachment_host); ?>/static/<?php echo htmlentities($module_name); ?>/<?php echo htmlentities($default_theme); ?>/images/default-user-avatar.jpg" alt="Picture" />
                    </div>
                    <div class="img-preview preview-lg am-fl am-radius user-avatar-img-preview am-hide-sm-only"></div>
                    <div class="img-preview preview-md am-fl am-radius user-avatar-img-preview "></div>
                    <div class="img-preview preview-sm am-fl am-radius user-avatar-img-preview "></div>
                    <input type="hidden" name="img_x" id="user-avatar-img_x" />
                    <input type="hidden" name="img_y" id="user-avatar-img_y" />
                    <input type="hidden" name="img_width" id="user-avatar-img_width" />
                    <input type="hidden" name="img_height" id="user-avatar-img_height" />
                    <input type="hidden" name="img_rotate" id="user-avatar-img_rotate" />
                </div>
                <div class="submit-operation">
                    <button type="button" class="am-btn am-btn-default am-fl am-icon-search-plus am-icon-sm am-btn-xs am-radius" data-method="zoom" data-option="0.1"></button>
                    <div class="am-form-group am-form-file am-fl am-form-group-refreshing">
                        <button type="button" class="am-btn am-btn-default am-btn-sm cropper-input-images-submit">
                        <i class="am-icon-cloud-upload"></i> 选择图片</button>
                        <input type="file" name="file" multiple accept="image/gif,image/jpeg,image/jpg,image/png" data-validation-message="请选择需要上传的图片" required  />
                    </div>
                    <button type="button" class="am-btn am-btn-default am-fl am-icon-search-minus am-icon-sm am-btn-xs am-radius" data-method="zoom" data-option="-0.1"></button>
                </div>

                <button type="submit" class="am-btn am-btn-primary am-btn-sm am-radius head-submit btn-loading-example" data-am-loading="{loadingText: '上传中...'}">确认</button>
            </form>
            <div class="am-alert am-alert-secondary" data-am-alert>
              <p>请在工作区域放大缩小及移动选取框，选择要裁剪的范围，裁切宽高比例固定；</p>
              <p>裁切后的效果为右侧预览图所显示；</p>
              <p>确认提交后生效。</p>
            </div>
        </div>
    </div>
</div>
    <!-- user menu end -->

    <!-- content start -->
    <div class="user-content">
        <div class="user-content-body">
            <form class="am-form form-validation form-search" method="post" action="<?php echo MyUrl('index/order/index'); ?>" request-type="form">
                <div class="thin">
                    <div class="am-input-group am-input-group-sm am-fl so">
                        <input type="text" autocomplete="off" name="keywords" class="am-radius" placeholder="订单号/收件信息" value="<?php if(!empty($params['keywords'])): ?><?php echo htmlentities($params['keywords']); ?><?php endif; ?>" />
                        <span class="am-input-group-btn">
                            <button class="am-btn am-btn-default am-radius" type="submit" data-am-loading="{spinner:'circle-o-notch', loadingText:'搜索中...'}">搜索</button>
                        </span>
                    </div>
                    <label class="am-fl thin_sub more-submit">
                        更多筛选条件
                        <?php if(isset($params['is_more']) and $params['is_more'] == 1): ?>
                            <input type="checkbox" name="is_more" value="1" id="is_more" checked />
                            <i class="am-icon-angle-up"></i>
                        <?php else: ?>
                            <input type="checkbox" name="is_more" value="1" id="is_more" />
                            <i class="am-icon-angle-down"></i>
                        <?php endif; ?>
                    </label>
                </div>
                <table class="so-list more-where <?php if(!isset($params['is_more'])): ?>none<?php endif; ?>">
                    <tbody>
                        <tr>
                            <td class="time">
                                <span>时间：</span>
                                <span>
                                    <input type="text" autocomplete="off" name="time_start" class="am-form-field am-input-sm am-radius Wdate" placeholder="起始时间" value="<?php if(!empty($params['time_start'])): ?><?php echo htmlentities($params['time_start']); ?><?php endif; ?>" data-validation-message="日期格式有误" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd'})" autocomplete="off" /><i class="am-icon-calendar"></i>
                                </span>
                                <em class="text-grey">~</em>
                                <span>
                                    <input type="text" autocomplete="off" name="time_end" class="am-form-field am-input-sm am-radius Wdate" placeholder="结束时间" value="<?php if(!empty($params['time_end'])): ?><?php echo htmlentities($params['time_end']); ?><?php endif; ?>" pattern="^[0-9]{4}-[0-9]{2}-[0-9]{2}$" data-validation-message="日期格式有误" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd'})" autocomplete="off" /><i class="am-icon-calendar"></i>
                                </span>
                            </td>
                            <td class="price">
                                <span>价格：</span>
                                <span>
                                    <input type="text" autocomplete="off" name="price_start" class="am-form-field am-input-sm am-radius" placeholder="最小价格" pattern="^([0-9]{1}\d{0,6})(\.\d{1,2})?$" data-validation-message="价格0~9之间的数字" value="<?php if(!empty($params['price_start'])): ?><?php echo htmlentities($params['price_start']); ?><?php endif; ?>" />
                                </span>
                                <em class="text-grey">~</em>
                                <span>
                                    <input type="text" autocomplete="off" name="price_end" class="am-form-field am-input-sm am-radius" placeholder="最大价格" pattern="^([0-9]{1}\d{0,6})(\.\d{1,2})?$" data-validation-message="价格0~9之间的数字" value="<?php if(!empty($params['price_end'])): ?><?php echo htmlentities($params['price_end']); ?><?php endif; ?>" />
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>支付：</span>
                                <select name="payment_id" class="chosen-select" data-placeholder="支付方式...">
                                    <option value="-1">支付方式...</option>
                                    <?php if(!empty($payment_list)): foreach($payment_list as $payment): ?>
                                            <option value="<?php echo htmlentities($payment['id']); ?>" <?php if(isset($params['payment_id']) and $params['payment_id'] == $payment['id']): ?>selected<?php endif; ?>><?php echo htmlentities($payment['name']); ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                            <td>
                                <span>付款：</span>
                                <select name="pay_status" class="chosen-select" data-placeholder="付款状态...">
                                    <option value="-1">付款状态...</option>
                                    <?php if(!empty($common_order_pay_status)): foreach($common_order_pay_status as $pay): ?>
                                            <option value="<?php echo htmlentities($pay['id']); ?>" <?php if(isset($params['pay_status']) and $params['pay_status'] == $pay['id']): ?>selected<?php endif; ?>><?php echo htmlentities($pay['name']); ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>状态：</span>
                                <select name="status" class="chosen-select" data-placeholder="订单状态...">
                                    <option value="-1">订单状态...</option>
                                    <?php if(!empty($common_order_user_status)): foreach($common_order_user_status as $status): ?>
                                            <option value="<?php echo htmlentities($status['id']); ?>" <?php if(isset($params['status']) and $params['status'] == $status['id']): ?>selected<?php endif; ?>><?php echo htmlentities($status['name']); ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                            <td>
                                <span>评论：</span>
                                <select name="is_comments" class="chosen-select" data-placeholder="评论状态...">
                                    <option value="-1">评论状态...</option>
                                    <?php if(!empty($common_comments_status_list)): foreach($common_comments_status_list as $comments): ?>
                                            <option value="<?php echo htmlentities($comments['value']); ?>" <?php if(isset($params['is_comments']) and $params['is_comments'] == $comments['value']): ?>selected<?php endif; ?>><?php echo htmlentities($comments['name']); ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example" data-am-loading="{spinner:'circle-o-notch', loadingText:'搜索中...'}">搜索</button>
                                <a href="<?php echo MyUrl('index/order/index'); ?>" class="am-btn am-btn-warning am-radius am-btn-sm reset-submit">清除条件</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <!-- 订单抬头 -->
            <div class="am-alert am-alert-secondary meila-radius">
                <table class="content-title">
                    <tbody>
                        <tr>
                            <th class="row-content">商品</th>
                            <th class="row-price am-hide-sm-only">单价</th>
                            <th class="row-number am-hide-sm-only">数量</th>
                            <th class="row-goods-operate">商品操作</th>
                            <th class="row-total-price am-hide-sm-only">合计</th>
                            <th class="row-status">状态</th>
                            <th class="row-operate">操作</th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- 订单列表 -->
            <?php if(!empty($data_list)): foreach($data_list as $order): ?>
                    <table id="data-list-<?php echo htmlentities($order['id']); ?>" class="data-list <?php if($order['status'] < 4): ?>data-ongoing<?php endif; ?>">
                        <tr class="content-hd">
                            <td colspan="7">
                                <span class="am-icon-bookmark-o am-fl"> <?php echo htmlentities($order['order_no']); ?></span>
                                <span class="am-icon-calendar-check-o am-fr"> <?php echo htmlentities($order['add_time']); ?></span>
                            </td>
                        </tr>
                        <?php foreach($order['items'] as $keys=>$goods): ?>
                            <tr>
                                <td class="base row-content">
                                    <div class="goods-detail">
                                        <a href="<?php echo htmlentities($goods['goods_url']); ?>" target="_blank" class="goods-images">
                                            <img src="<?php echo htmlentities($goods['images']); ?>" alt="<?php echo htmlentities($goods['title']); ?>" class="am-img-thumbnail am-radius"  />
                                        </a>
                                        <div class="goods-base">
                                            <a href="<?php echo htmlentities($goods['goods_url']); ?>" target="_blank" class="goods-title"><?php echo htmlentities($goods['title']); ?></a>
                                            <?php if(!empty($goods['spec'])): ?>
                                                <ul class="goods-attr">
                                                    <?php foreach($goods['spec'] as $spec): ?>
                                                        <li><?php echo htmlentities($spec['type']); ?>：<?php echo htmlentities($spec['value']); ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="wap-base am-show-sm-only">
                                        <?php if($goods['original_price'] > 0): ?>
                                            <span class="original-price">￥<?php echo htmlentities($goods['original_price']); ?></span>
                                        <?php endif; ?>
                                        <strong class="line-price">￥<?php echo htmlentities($goods['price']); ?></strong>
                                        <span class="wap-number">x<?php echo htmlentities($goods['buy_number']); ?></span>
                                        <?php if(isset($goods['returned_quantity']) and $goods['returned_quantity'] > 0): ?>
                                            <span class="am-badge am-round am-badge-warning">已退 <?php echo htmlentities($goods['returned_quantity']); ?></span>
                                        <?php endif; ?>
                                    </div>
                                </td>
                                <td class="row-price am-hide-sm-only">
                                    <?php if($goods['original_price'] > 0): ?>
                                        <p class="original-price">￥<?php echo htmlentities($goods['original_price']); ?></p>
                                    <?php endif; ?>
                                    <p class="line-price">￥<?php echo htmlentities($goods['price']); ?></p>
                                </td>
                                <td class="row-number am-hide-sm-only">
                                    <span>x<?php echo htmlentities($goods['buy_number']); ?></span>
                                    <?php if(isset($goods['returned_quantity']) and $goods['returned_quantity'] > 0): ?>
                                        <br /><span class="am-badge am-round am-badge-warning">已退 <?php echo htmlentities($goods['returned_quantity']); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td class="row-number">
                                    <a href="<?php echo MyUrl('index/orderaftersale/aftersale', ['oid'=>$order['id'], 'did'=>$goods['id']]); ?>" target="_blank">
                                        <?php switch($order['status']): case "2":case "3": if(empty($goods['orderaftersale'])): ?>
                                                    退款/退货
                                                <?php else: if($goods['orderaftersale']['status'] == 3): ?>
                                                        <span class="am-text-success">查看退款</span>
                                                    <?php else: ?>
                                                        <span class="am-text-secondary">查看进度</span>
                                                    <?php endif; ?>
                                                <?php endif; break; case "4":case "6": if(empty($goods['orderaftersale'])): if($order['status'] == 4): ?>
                                                        申请售后
                                                    <?php endif; else: if($goods['orderaftersale']['status'] == 3): ?>
                                                        <span class="am-text-success">查看退款</span>
                                                    <?php else: ?>
                                                        <span class="am-text-secondary">查看进度</span>
                                                    <?php endif; ?>
                                                <?php endif; break; ?>
                                        <?php endswitch; ?>
                                    </a>
                                </td>
                                <?php if($keys == 0): ?>
                                    <td class="row-total-price am-hide-sm-only" rowspan="<?php echo htmlentities($order['items_count']); ?>">
                                        <strong class="total-price-content">￥<?php echo htmlentities($order['total_price']); ?></strong>
                                        <?php if(isset($order['refund_price']) and $order['refund_price'] > 0): ?>
                                            <br /><span class="am-badge am-round am-badge-warning">已退 <?php echo htmlentities($order['refund_price']); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="row-status" rowspan="<?php echo htmlentities($order['items_count']); ?>">
                                        <?php echo htmlentities($order['status_name']); ?>
                                        <div class="base-operate">
                                            <a class="block" href="<?php echo MyUrl('index/order/detail', ['id'=>$order['id']]); ?>" target="_blank">订单详情</a>
                                        </div>
                                    </td>
                                    <td class="row-operate" rowspan="<?php echo htmlentities($order['items_count']); ?>">
                                        <!-- 0待确认, 1已确认/待支付, 2已支付/待发货, 3已发货/待收货, 4已完成, 5已取消, 6已关闭 -->
                                        <?php if(in_array($order['status'], [0,1])): ?>
                                            <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-icon-paint-brush am-btn-block submit-ajax submit-cancel" data-url="<?php echo MyUrl('index/order/cancel'); ?>" data-id="<?php echo htmlentities($order['id']); ?>" data-view="reload"> 取消</button>
                                        <?php endif; if(in_array($order['status'], [1])): ?>
                                            <a class="am-btn am-btn-primary am-btn-xs am-radius am-icon-paypal am-btn-block" href="<?php echo MyUrl('index/order/detail', ['id'=>$order['id'], 'is_pay_auto'=>1]); ?>" target="_blank"> 支付</a>
                                        <?php endif; if(in_array($order['status'], [3])): ?>
                                            <button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-check-circle-o am-btn-block submit-ajax submit-confirm" data-url="<?php echo MyUrl('index/order/collect'); ?>" data-id="<?php echo htmlentities($order['id']); ?>" data-view="reload" data-msg="请仔细确认已收到货物、确认继续吗？"> 收货</button>
                                        <?php endif; if(in_array($order['status'], [4]) and $order['user_is_comments'] == 0): ?>
                                            <a href="<?php echo MyUrl('index/order/comments', ['id'=>$order['id']]); ?>" target="_blank" class="am-btn am-btn-primary am-btn-xs am-radius am-icon-heart-o am-btn-block"> 评论</a>
                                        <?php endif; if(in_array($order['status'], [4,5,6])): ?>
                                            <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o am-btn-block submit-delete" data-url="<?php echo MyUrl('index/order/delete'); ?>" data-id="<?php echo htmlentities($order['id']); ?>" data-view="reload"> 删除</button>
                                        <?php endif; ?>

                                        <!-- 钩子订单操作 -->
                                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                            <div class="plugins-tag">
                                                <span>plugins_service_order_handle_operation_html</span>
                                            </div>
                                        <?php endif; if(!empty($order['plugins_service_order_handle_operation_html']) and is_array($order['plugins_service_order_handle_operation_html'])): foreach($order['plugins_service_order_handle_operation_html'] as $hook): if(is_string($hook) or is_int($hook)): ?>
                                                    <?php echo $hook; ?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php endforeach; ?>

                <!-- 分页 -->
                <?php echo $page_html; else: ?>
                <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
            <?php endif; ?>
        </div>
    </div>
    <!-- content end -->
</div>

<!-- footer start -->
<!-- commom html -->
<textarea id="upload-editor-view" data-url="<?php echo MyUrl('api/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?>" style="display: none;"></textarea>

<!-- footer start -->
<?php if(!isset($is_footer) or $is_footer == 1): ?>
	<!-- 友情链接 -->
<?php if(!empty($link_list)): ?>
	<div class="friendship-list">
		<div class="am-container">
			<h2>友情链接</h2>
			<ul>
				<?php foreach($link_list as $v): ?>
					<li>
						<a href="<?php echo htmlentities($v['url']); ?>" <?php if($v['is_new_window_open'] == 1): ?> target="_blank"<?php endif; ?> title="<?php echo htmlentities($v['describe']); ?>"><?php echo htmlentities($v['name']); ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
<?php endif; ?>

<!-- 底部导航上面钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
    <div class="plugins-tag">
        <span>plugins_view_common_footer_top</span>
    </div>
<?php endif; if(!empty($plugins_view_common_footer_top_data) and is_array($plugins_view_common_footer_top_data)): foreach($plugins_view_common_footer_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>


<!-- 底部导航 -->
<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{}">
	<div class="am-container">
		<!-- 底部导航 -->
		<?php if(!empty($nav_footer)): ?>
			<ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-4 am-avg-lg-4 am-gallery-overlay am-no-layout am-u-md-8 footer-nav-list" data-am-gallery="{}">
				<?php foreach($nav_footer as $k=>$v): if($k < 4): ?>
						<li>
							<div class="am-gallery-item">
								<p class="footer-nav-title am-text-truncate"><?php echo htmlentities($v['name']); ?></p>
								<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
										<p class="am-text-truncate">
											<a href="<?php echo htmlentities($vs['url']); ?>" <?php if($vs['is_new_window_open'] == 1): ?>target="_blank"<?php endif; ?>><?php echo htmlentities($vs['name']); ?></a>
										</p>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>

		<!-- 商店信息 -->
		<ul class="footer-about am-u-md-4">
			<?php if(!empty($common_customer_store_tel)): ?>
				<li class="tel">
					<i class="am-icon-volume-control-phone"></i>
					<a href="tel:<?php echo htmlentities($common_customer_store_tel); ?>"><?php echo htmlentities($common_customer_store_tel); ?></a>
				</li>
			<?php endif; if(!empty($common_customer_store_address)): ?>
				<li class="address">
					<i class="am-icon-map-marker"></i>
					<span><?php echo htmlentities($common_customer_store_address); ?></span>
				</li>
			<?php endif; if(!empty($common_customer_store_email)): ?>
				<li class="email">
					<i class="am-icon-envelope"></i>
					<span><?php echo htmlentities($common_customer_store_email); ?></span>
				</li>
			<?php endif; if(!empty($common_customer_store_qrcode)): ?>
				<li class="qrcode">
					<img src="<?php echo htmlentities($attachment_host); ?><?php echo htmlentities($common_customer_store_qrcode); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
				</li>
			<?php endif; ?>
		</ul>
	</div>
	
	<div class="am-footer-miscs">
		<div class="am-container">
			<p class="powered">
				Powered by <a href="http://shopxo.net/" title="ShopXO电商系统" target="_blank">
					<span class="b">Shop</span><span class="o">XO</span>
				</a> <?php echo htmlentities(APPLICATION_VERSION); ?>
			</p>
			<p>
				<a href="http://www.beian.miit.gov.cn/" target="_blank"><?php echo MyC('home_site_icp'); ?></a>
			</p>
		</div>
	</div>
</footer>
<?php endif; ?>
<!-- footer end -->

<!-- 公共底部钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
    <div class="plugins-tag">
        <span>plugins_view_common_bottom</span>
    </div>
<?php endif; if(!empty($plugins_view_common_bottom_data) and is_array($plugins_view_common_bottom_data) and (!isset($is_footer) or $is_footer == 1)): foreach($plugins_view_common_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>

<!-- 类库 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/jquery/jquery-2.1.0.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/assets/js/amazeui.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 图片放大镜 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/imagezoom/jquery.imagezoom.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- echarts 图表 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/echarts/echarts.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/echarts/macarons.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- amazeui插件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-chosen/amazeui.chosen.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-dialog/amazeui.dialog.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 图像裁剪插件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/cropper/cropper.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 复制插件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/clipboard/clipboard.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ueditor 编辑器 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/ueditor/ueditor.config.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/ueditor/ueditor.all.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/ueditor/lang/zh-cn/zh-cn.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 颜色选择器 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/colorpicker/jquery.colorpicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 日期组件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/My97DatePicker/WdatePicker.js"></script>

<!-- 隐藏编辑器初始化 -->
<script type="text/javascript">
    var upload_editor = UE.getEditor("upload-editor-view", {
        isShow: false,
        focus: false,
        enableAutoSave: false,
        autoSyncData: false,
        autoFloatEnabled:false,
        wordCount: false,
        sourceEditor: null,
        scaleEnabled:true,
        toolbars: [["insertimage", "insertvideo", "attachment"]]
    });
</script>

<!-- 项目公共 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/index/<?php echo htmlentities($default_theme); ?>/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 应用插件公共js -->
<?php if(!empty($plugins_js)): ?>
    <script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/<?php echo htmlentities($plugins_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 当前控制器js -->
<?php if(!empty($module_js)): ?>
	<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/<?php echo htmlentities($module_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 底部信息 --> 
<?php echo MyC('home_footer_info'); ?>

<!-- js钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
    <div class="plugins-tag">
        <span>plugins_js</span>
    </div>
<?php endif; if(!empty($plugins_js_data) and is_array($plugins_js_data)): foreach($plugins_js_data as $hook): if(is_string($hook)): ?>
            <script type='text/javascript' src="<?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
        <?php elseif(is_array($hook)): foreach($hook as $hook_js): if(is_string($hook_js)): ?>
                    <script type='text/javascript' src="<?php echo htmlentities($hook_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- 公共页面底部钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
    <div class="plugins-tag">
        <span>plugins_common_page_bottom</span>
    </div>
<?php endif; if(!empty($plugins_common_page_bottom_data) and is_array($plugins_common_page_bottom_data)): foreach($plugins_common_page_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
<!-- footer end -->