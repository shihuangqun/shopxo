<?php /*a:9:{s:83:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/order\detail.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\header.html";i:1563161086;s:92:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\header_top_nav.html";i:1563161086;s:88:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\nav_search.html";i:1563161086;s:88:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\header_nav.html";i:1563161086;s:92:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\goods_category.html";i:1563161086;s:87:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\user_menu.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\footer.html";i:1563161086;s:88:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\footer_nav.html";i:1563161086;}*/ ?>
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
            <!-- 进度环节 -->
            <?php if(!in_array($data['status'], [5,6])): ?>
                <ul class="progress">
                    <li class="steps-success <?php if($data['status'] < 2): ?> current<?php endif; ?>">
                        <p class="digital">
                            <i class="am-icon-check"></i>
                        </p>
                        <div class="base">
                            <p class="title">拍下商品</p>
                            <?php if(!empty($data['add_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['add_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="<?php if($data['status'] > 1): ?>steps-success<?php endif; if($data['status'] == 2): ?> current<?php endif; ?>">
                        <i class="step"></i>
                        <p class="digital">
                            <?php if($data['status'] > 1): ?><i class="am-icon-check"></i><?php else: ?>2<?php endif; ?>
                        </p>
                        <div class="base">
                            <p class="title">付款</p>
                            <?php if(!empty($data['pay_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['pay_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="<?php if($data['status'] > 2): ?>steps-success<?php endif; if($data['status'] == 3): ?> current<?php endif; ?>">
                        <i class="step"></i>
                        <p class="digital">
                            <?php if($data['status'] > 2): ?><i class="am-icon-check"></i><?php else: ?>3<?php endif; ?>
                        </p>
                        <div class="base">
                            <p class="title">卖家发货</p>
                            <?php if(!empty($data['delivery_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['delivery_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="<?php if($data['status'] > 3): ?>steps-success<?php endif; if($data['status'] == 4 and $data['user_is_comments'] == 0): ?> current<?php endif; ?>">
                        <i class="step"></i>
                        <p class="digital">
                            <?php if($data['status'] > 3): ?><i class="am-icon-check"></i><?php else: ?>4<?php endif; ?>
                        </p>
                        <div class="base">
                            <p class="title">确认收货</p>
                            <?php if(!empty($data['collect_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['collect_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="<?php if($data['user_is_comments'] > 0): ?>steps-success<?php endif; if($data['user_is_comments'] > 0): ?> current<?php endif; ?>">
                        <i class="step"></i>
                        <p class="digital">
                            <?php if($data['user_is_comments'] > 0): ?><i class="am-icon-check"></i><?php else: ?>5<?php endif; ?>
                        </p>
                        <div class="base">
                            <p class="title">评价</p>
                            <?php if(!empty($data['user_is_comments_time'])): ?>
                                <p class="date"><?php echo htmlentities($data['user_is_comments_time']); ?></p>
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            <?php endif; ?>

            <!-- 基础信息 -->
            <div class="order-base">
                <div class="base-left">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">订单信息</div>
                        <div class="am-panel-bd">
                            <div class="items am-cf">
                                <div class="items-title am-fl">收货地址：</div>
                                <div class="items-detail am-fl"><?php echo htmlentities($data['receive_name']); ?>, <?php echo htmlentities($data['receive_tel']); ?>, <?php echo htmlentities($data['receive_province_name']); ?> <?php echo htmlentities($data['receive_city_name']); ?> <?php echo htmlentities($data['receive_county_name']); ?> <?php echo htmlentities($data['receive_address']); ?></div>
                            </div>
                            <div class="items am-cf">
                                <div class="items-title am-fl">订单编号：</div>
                                <div class="items-detail am-fl"><?php echo htmlentities($data['order_no']); ?></div>
                            </div>
                            <?php if(!empty($data['status_name'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">订单状态：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['status_name']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['pay_status_name'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">支付状态：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['pay_status_name']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['payment_name'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">支付方式：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['payment_name']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['buy_number_count'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">购买数量：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['buy_number_count']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['returned_quantity'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">退货数量：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['returned_quantity']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['user_note'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">用户留言：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['user_note']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['add_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">下单时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['add_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['confirm_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">确认时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['confirm_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['pay_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">付款时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['pay_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['delivery_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">发货时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['delivery_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['collect_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">收货时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['collect_time']); ?></div>
                                </div>
                            <?php endif; if(!empty($data['user_is_comments_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">评论时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['user_is_comments_time']); ?></div>
                                </div>
                            <?php endif; if(in_array($data['status'], [5]) and !empty($data['cancel_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">取消时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['cancel_time']); ?></div>
                                </div>
                            <?php endif; if(in_array($data['status'], [6]) and !empty($data['close_time'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">关闭时间：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['close_time']); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="base-right">
                    <div class="status">
                        <?php if($data['status'] == 4): ?>
                            <i class="am-icon-check-circle icon-success am-fl"></i>
                        <?php else: ?>
                            <i class="am-icon-info-circle icon-tips am-fl"></i>
                        <?php endif; ?>
                        <p class="status-name am-fl"><?php echo htmlentities($data['status_name']); ?></p>
                    </div>
                    <div class="operation">
                        <!-- 0待确认, 1已确认/待支付, 2已支付/待发货, 3已发货/待收货, 4已完成, 5已取消, 6已关闭 -->
                        <?php if($data['status'] != 2): ?>
                            <span>您可以</span>
                        <?php endif; if(in_array($data['status'], [0,1])): ?>
                            <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-icon-paint-brush submit-ajax submit-cancel" data-url="<?php echo MyUrl('index/order/cancel'); ?>" data-id="<?php echo htmlentities($data['id']); ?>" data-view="reload"> 取消</button>
                        <?php endif; if(in_array($data['status'], [1])): ?>
                            <button class="am-btn am-btn-primary am-btn-xs am-radius am-icon-paypal submit-pay" data-id="<?php echo htmlentities($data['id']); ?>" data-payment-id="<?php echo htmlentities($data['payment_id']); ?>" data-am-modal="{target: '#order-pay-popup'}" data-is-auto="<?php if(isset($params['is_pay_auto']) and $params['is_pay_auto'] == 1): ?>1<?php else: ?>0<?php endif; ?>" data-is-pay="<?php if(isset($params['is_pay_submit']) and $params['is_pay_submit'] == 1): ?>1<?php else: ?>0<?php endif; ?>"> 支付</button>
                        <?php endif; if(in_array($data['status'], [3])): ?>
                            <button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-check-circle-o submit-ajax submit-confirm" data-url="<?php echo MyUrl('index/order/collect'); ?>" data-id="<?php echo htmlentities($data['id']); ?>" data-view="reload" data-msg="请仔细确认已收到货物、确认继续吗？"> 收货</button>
                        <?php endif; if(in_array($data['status'], [4]) and $data['user_is_comments'] == 0): ?>
                            <a href="<?php echo MyUrl('index/order/comments', ['id'=>$data['id']]); ?>" target="_blank" class="am-btn am-btn-primary am-btn-xs am-radius am-icon-heart-o"> 评价</a>
                        <?php endif; if(in_array($data['status'], [4,5,6])): ?>
                            <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('index/order/delete'); ?>" data-id="<?php echo htmlentities($data['id']); ?>" data-view="jump" data-value="<?php echo MyUrl('index/order/index'); ?>"> 删除</button>
                        <?php endif; ?>

                        <!-- 钩子订单操作 -->
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                            <div class="plugins-tag">
                                <span>plugins_service_order_handle_operation_html</span>
                            </div>
                        <?php endif; if(!empty($data['plugins_service_order_handle_operation_html']) and is_array($data['plugins_service_order_handle_operation_html'])): foreach($data['plugins_service_order_handle_operation_html'] as $hook): if(is_string($hook) or is_int($hook)): ?>
                                    <?php echo $hook; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <?php if(in_array($data['status'], [3,4])): ?>
                        <div class="logistics">
                            <div class="items am-cf">
                                <div class="items-title am-fl">快递公司：</div>
                                <div class="items-detail am-fl">
                                    <?php if(!empty($data['express_name'])): ?><?php echo htmlentities($data['express_name']); ?><?php endif; ?>
                                </div>
                            </div>
                            <?php if(!empty($data['express_number'])): ?>
                                <div class="items am-cf">
                                    <div class="items-title am-fl">快递单号：</div>
                                    <div class="items-detail am-fl"><?php echo htmlentities($data['express_number']); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- 商品列表 -->
            <?php if(!empty($data['items'])): ?>
                <div class="order-goods">
                    <table class="am-table am-table-centered">
                        <thead>
                            <tr>
                                <th>商品信息</th>
                                <th class="am-hide-sm-only">单价</th>
                                <th class="am-hide-sm-only">数量</th>
                                <th class="am-hide-sm-only">金额</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['items'] as $goods): ?>
                                <tr id="data-list-<?php echo htmlentities($goods['id']); ?>" data-id="<?php echo htmlentities($goods['id']); ?>" data-goods-id="<?php echo htmlentities($goods['goods_id']); ?>">
                                    <td class="base">
                                        <div class="goods-detail">
                                            <a href="<?php echo htmlentities($goods['goods_url']); ?>" target="_blank">
                                                <img src="<?php echo htmlentities($goods['images']); ?>" alt="<?php echo htmlentities($goods['title']); ?>" class="am-img-thumbnail am-radius" />
                                            </a>
                                            <div class="goods-base">
                                                <a href="<?php echo htmlentities($goods['goods_url']); ?>" target="_blank" class="goods-title"><?php echo htmlentities($goods['title']); ?></a>
                                                <?php if(!empty($goods['spec']) or !empty($goods['model'])): ?>
                                                    <ul class="am-margin-top-xs am-text-left goods-attr">
                                                        <?php if(!empty($goods['model'])): ?>
                                                            <li>型号：<?php echo htmlentities($goods['model']); ?></li>
                                                        <?php endif; if(!empty($goods['spec'])): foreach($goods['spec'] as $spec): ?>
                                                                <li><?php echo htmlentities($spec['type']); ?>：<?php echo htmlentities($spec['value']); ?></li>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="wap-base am-show-sm-only">
                                            <?php if($goods['original_price'] > 0): ?>
                                                <span class="original-price">￥<?php echo htmlentities($goods['original_price']); ?></span>
                                            <?php endif; ?>
                                            <strong class="total-price-content">￥<?php echo htmlentities($goods['price']); ?></strong>
                                            <span class="wap-number">x<?php echo htmlentities($goods['buy_number']); ?></span>
                                            <?php if(isset($goods['returned_quantity']) and $goods['returned_quantity'] > 0): ?>
                                                <span class="am-badge am-round am-badge-warning">已退 <?php echo htmlentities($goods['returned_quantity']); ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td class="price am-hide-sm-only">
                                        <?php if($goods['original_price'] > 0): ?>
                                            <p class="original-price">￥<?php echo htmlentities($goods['original_price']); ?></p>
                                        <?php endif; ?>
                                        <p class="line-price">￥<?php echo htmlentities($goods['price']); ?></p>
                                    </td>
                                    <td class="number am-hide-sm-only">
                                        <span>x<?php echo htmlentities($goods['buy_number']); ?></span>
                                        <?php if(isset($goods['returned_quantity']) and $goods['returned_quantity'] > 0): ?>
                                            <br /><span class="am-badge am-round am-badge-warning">已退 <?php echo htmlentities($goods['returned_quantity']); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="total-price am-hide-sm-only">
                                        <strong class="total-price-content">￥<?php echo htmlentities($goods['total_price']); ?></strong>
                                        <?php if(isset($goods['refund_price']) and $goods['refund_price'] > 0): ?>
                                            <br /><span class="am-badge am-round am-badge-warning">已退 <?php echo htmlentities($goods['refund_price']); ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <?php if(!empty($data['extension_data'])): ?>
                    <div class="am-alert am-alert-warning">
                        <?php foreach($data['extension_data'] as $ertk=>$ext): ?>
                            <div class="items am-cf">
                                <div class="items-title am-fl"><?php echo htmlentities($ext['name']); ?>：</div>
                                <div class="items-detail am-fl"><?php echo htmlentities($ext['tips']); ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="am-alert am-alert-secondary">
                  <?php if(!empty($data['price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">商品总价：</div>
                            <div class="items-detail am-fl">￥<?php echo htmlentities($data['price']); ?></div>
                        </div>
                    <?php endif; if(!empty($data['increase_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">增加金额：</div>
                            <div class="items-detail am-fl">+￥<?php echo htmlentities($data['increase_price']); ?></div>
                        </div>
                    <?php endif; if(!empty($data['preferential_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">优惠金额：</div>
                            <div class="items-detail am-fl">-￥<?php echo htmlentities($data['preferential_price']); ?></div>
                        </div>
                    <?php endif; if(!empty($data['refund_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">退款金额：</div>
                            <div class="items-detail am-fl">
                                <span class="am-text-danger">-￥<?php echo htmlentities($data['refund_price']); ?></span>
                            </div>
                        </div>
                    <?php endif; if(!empty($data['total_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">订单总价：</div>
                            <div class="items-detail am-fl line-price">￥<?php echo htmlentities($data['total_price']); ?></div>
                        </div>
                    <?php endif; if(!empty($data['pay_price'])): ?>
                        <div class="items am-cf">
                            <div class="items-title am-fl">支付金额：</div>
                            <div class="items-detail am-fl">
                                <strong class="total-price-content">￥<?php echo htmlentities($data['pay_price']); ?></strong>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- 支付弹窗 -->
        <div class="am-popup am-radius" id="order-pay-popup">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">支付</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                    <form class="am-form pay-form" method="post" action="<?php echo MyUrl('index/order/pay'); ?>">
                        <!-- 支付方式 -->
                        <div class="business-item">
                            <h3>选择支付</h3>
                            <?php if(!empty($buy_payment_list)): ?>
                                <ul class="payment-list" data-type="payment">
                                    <?php foreach($buy_payment_list as $payment): ?>
                                        <li class="payment-items-<?php echo htmlentities($payment['id']); ?>" data-value="<?php echo htmlentities($payment['id']); ?>">
                                            <?php if(!empty($payment['logo'])): ?>
                                                <img src="<?php echo htmlentities($payment['logo']); ?>" />
                                            <?php endif; ?>
                                            <span><?php echo htmlentities($payment['name']); ?></span>
                                            <i class="icon-active"></i>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; if(empty($buy_payment_list)): ?>
                                <div class="table-no"><i class="am-icon-warning"></i> 没有支付方式</div>
                            <?php endif; ?>
                        </div>
                        <div class="am-form-group am-form-group-refreshing">
                            <input type="hidden" name="id" value="0" />
                            <input type="hidden" name="payment_id" value="0" />
                            <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认支付</button>
                        </div>
                    </form>
                </div>
            </div>
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