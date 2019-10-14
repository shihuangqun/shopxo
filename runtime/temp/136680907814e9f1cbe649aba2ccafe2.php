<?php /*a:8:{s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/user/reg_info.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/header.html";i:1563161086;s:99:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/header_top_nav.html";i:1563161086;s:95:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/nav_search.html";i:1563161086;s:95:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/header_nav.html";i:1563161086;s:99:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/goods_category.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/footer.html";i:1563161086;s:95:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/footer_nav.html";i:1563161086;}*/ ?>
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

<!-- conntent start  -->
<div class="am-g my-content user-register-container" <?php if(!empty($user_register_bg_images)): ?>style="background: #FAFAFA url(<?php echo htmlentities($attachment_host); ?><?php echo htmlentities($user_register_bg_images); ?>);"<?php endif; ?>>
    <div class="am-container">
        <!-- 用户注册页面顶部钩子 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_user_reg_info_top</span>
            </div>
        <?php endif; if(!empty($plugins_view_user_reg_info_top_data) and is_array($plugins_view_user_reg_info_top_data)): foreach($plugins_view_user_reg_info_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="am-u-sm-12 am-u-md-6 am-u-lg-5 am-u-sm-centered">
            <div class="register-container">
                <div class="register-top">
                    <?php if(MyC('home_user_login_state') == 1): ?>
                        <span>我已经注册，现在就</span>
                        <a href="<?php echo MyUrl('index/user/logininfo'); ?>" class="am-btn am-btn-secondary am-btn-xs am-radius">登录</a>
                    <?php endif; ?>

                    <!-- 用户注册页面钩子 -->
                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                        <div class="plugins-tag">
                            <span>plugins_view_user_reg_info</span>
                        </div>
                    <?php endif; if(!empty($plugins_view_user_reg_info_data) and is_array($plugins_view_user_reg_info_data)): foreach($plugins_view_user_reg_info_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                <?php echo $hook; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <div class="register-content">
                    <?php if(in_array('sms', MyC('home_user_reg_state')) or in_array('email', MyC('home_user_reg_state')) or in_array('username', MyC('home_user_reg_state'))): ?>
                        <div data-am-widget="tabs" class="am-tabs am-tabs-d2" data-am-tabs="{noSwipe: 1}">
                            <ul class="am-tabs-nav am-cf">
                                <?php if(in_array('username', MyC('home_user_reg_state'))): ?>
                                    <li class="am-active"><a href="[data-tab-panel-0]">账号注册</a></li>
                                <?php endif; if(in_array('sms', MyC('home_user_reg_state'))): ?>
                                    <li class="<?php if(!in_array('username', MyC('home_user_reg_state'))): ?>am-active<?php endif; ?>"><a href="[data-tab-panel-1]">手机注册</a></li>
                                <?php endif; if(in_array('email', MyC('home_user_reg_state'))): ?>
                                    <li class="<?php if(!in_array('username', MyC('home_user_reg_state')) and !in_array('sms', MyC('home_user_reg_state'))): ?>am-active<?php endif; ?>"><a href="[data-tab-panel-2]">邮箱注册</a></li>
                                <?php endif; ?>
                            </ul>
                            <div class="am-tabs-bd">
                                <?php if(in_array('username', MyC('home_user_reg_state'))): ?>
                                    <div data-tab-panel-0 class="am-tab-panel am-active">
                                        <!-- form start -->
                                        <form class="am-form form-validation-username" method="post" action="<?php echo MyUrl('index/user/reg'); ?>" request-type="ajax-fun" request-value="RegisterSuccessBack">
                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <label>用户名</label>
                                                <input type="text" name="accounts" class="am-radius" placeholder="请使用字母、数字、下划线 2~18 个字符" pattern="<?php echo lang('common_regex_username'); ?>" data-validation-message="用户名格式由 字母数字下划线 2~18 个字符" required />
                                            </div>

                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <label>设置登录密码</label>
                                                <div class="am-input-group am-input-group-sm">
                                                    <input type="password" name="pwd" class="am-radius" placeholder="设置登录密码" pattern="<?php echo lang('common_regex_pwd'); ?>" data-validation-message="密码格式 6~18 个字符之间" required />
                                                    <span class="am-input-group-btn">
                                                        <button class="am-btn am-btn-default am-radius am-icon-eye eye-submit" type="button"></button>
                                                    </span>
                                                </div>
                                            </div>

                                            <?php if(MyC('home_user_register_img_verify_state') == 1): ?>
                                                <div class="am-form-group am-form-group-refreshing business-form-block">
                                                    <label>验证码</label>
                                                    <div class="am-input-group am-input-group-sm">
                                                        <input type="text" name="verify" class="am-radius" placeholder="验证码" minlength="6" maxlength="6" data-validation-message="请输入图片验证码" required />
                                                        <span class="am-input-group-btn">
                                                            <span class="am-btn am-btn-default am-radius form-verify">
                                                                <img src="<?php echo MyUrl('index/user/userverifyentry', ['type'=>'images_verify_reg']); ?>" class="am-radius c-p" id="form-verify-img" onClick="this.src=this.src+'#'+Math.random();" />
                                                                <a href="javascript:;" class="form-verify-tips" onClick="document.getElementById('form-verify-img').src='<?php echo MyUrl('index/user/userverifyentry', ['type'=>'images_verify_reg']); ?>#'+Math.random();">更换一张</a>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            <?php endif; if(MyC('home_is_enable_userregister_agreement') == 1): ?>
                                                <div class="agreement am-padding-horizontal-sm">
                                                    <label class="am-checkbox am-success c-p">
                                                        <input type="checkbox" value="1" name="is_agree_agreement" data-validation-message="请同意注册协议" data-am-ucheck required /> 阅读并同意
                                                    </label>
                                                    <a href="<?php echo MyUrl('index/agreement/index', ['document'=>'userregister']); ?>" target="_blank">《服务协议》</a>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <input type="hidden" name="type" value="username" />
                                                <button type="submit" class="am-btn am-btn-primary am-btn-block am-radius am-btn-sm btn-loading-example" data-am-loading="{loadingText: '处理中...'}">注册</button>
                                            </div>
                                        </form>
                                        <!-- form end -->
                                    </div>
                                <?php endif; if(in_array('sms', MyC('home_user_reg_state'))): ?>
                                    <div data-tab-panel-1 class="am-tab-panel <?php if(!in_array('username', MyC('home_user_reg_state'))): ?>am-active<?php endif; ?>">
                                        <!-- form start -->
                                        <form class="am-form form-validation-sms" method="post" action="<?php echo MyUrl('index/user/reg'); ?>" request-type="ajax-fun" request-value="RegisterSuccessBack">
                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <label>手机号码</label>
                                                <input type="text" name="accounts" class="am-radius" placeholder="请输入手机号码" pattern="<?php echo lang('common_regex_mobile'); ?>" data-validation-message="手机号码格式错误" required />
                                            </div>

                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <label>验证码</label>
                                                <div class="am-input-group am-input-group-sm">
                                                    <input type="number" name="verify" class="am-radius" placeholder="验证码" minlength="6" maxlength="6" data-validation-message="验证码格式 6 位数字" required />
                                                    <span class="am-input-group-btn">
                                                        <button class="am-btn am-btn-default am-radius btn-loading-example verify-submit" type="button" data-am-loading="{spinner:'circle-o-notch', loadingText:'发送中...'}" data-url="<?php echo MyUrl('index/user/regverifysend'); ?>" data-verify="<?php echo MyC('home_img_verify_state'); ?>" data-text="获取验证码" data-send-text="还有 {time} 秒" data-time="<?php echo MyC('common_verify_time_interval', 30, true); ?>" data-form-tag="form.form-validation-sms">获取验证码</button>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <label>设置登录密码</label>
                                                <div class="am-input-group am-input-group-sm">
                                                    <input type="password" name="pwd" class="am-radius" placeholder="设置登录密码" pattern="<?php echo lang('common_regex_pwd'); ?>" data-validation-message="密码格式 6~18 个字符之间" required />
                                                    <span class="am-input-group-btn">
                                                        <button class="am-btn am-btn-default am-radius am-icon-eye eye-submit" type="button"></button>
                                                    </span>
                                                </div>
                                            </div>

                                            <?php if(MyC('home_is_enable_userregister_agreement') == 1): ?>
                                                <div class="agreement am-padding-horizontal-sm">
                                                    <label class="am-checkbox am-success c-p">
                                                        <input type="checkbox" value="1" name="is_agree_agreement" data-validation-message="请同意注册协议" data-am-ucheck required /> 阅读并同意
                                                    </label>
                                                    <a href="<?php echo MyUrl('index/agreement/index', ['document'=>'userregister']); ?>" target="_blank">《服务协议》</a>
                                                </div>
                                            <?php endif; ?>

                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <input type="hidden" name="type" value="sms" />
                                                <button type="submit" class="am-btn am-btn-primary am-btn-block am-radius am-btn-sm btn-loading-example" data-am-loading="{loadingText: '处理中...'}">注册</button>
                                            </div>
                                        </form>
                                        <!-- form end -->
                                    </div>
                                <?php endif; if(in_array('email', MyC('home_user_reg_state'))): ?>
                                    <div data-tab-panel-2 class="am-tab-panel <?php if(!in_array('username', MyC('home_user_reg_state')) and !in_array('sms', MyC('home_user_reg_state'))): ?>am-active<?php endif; ?>">
                                        <!-- form start -->
                                        <form class="am-form form-validation-email" method="post" action="<?php echo MyUrl('index/user/reg'); ?>" request-type="ajax-fun" request-value="RegisterSuccessBack">
                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <label>电子邮箱</label>
                                                <input type="email" name="accounts" class="am-radius" placeholder="请输入电子邮箱" data-validation-message="电子邮箱格式错误" required />
                                            </div>

                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <label>验证码</label>
                                                <div class="am-input-group am-input-group-sm">
                                                    <input type="number" name="verify" class="am-radius" placeholder="验证码" minlength="6" maxlength="6" data-validation-message="验证码格式 6 位数字" required />
                                                    <span class="am-input-group-btn">
                                                        <button class="am-btn am-btn-default am-radius btn-loading-example verify-submit" type="button" data-am-loading="{spinner:'circle-o-notch', loadingText:'发送中...'}" data-url="<?php echo MyUrl('index/user/regverifysend'); ?>" data-verify="<?php echo MyC('home_img_verify_state'); ?>" data-text="获取验证码" data-send-text="还有 {time} 秒" data-time="<?php echo MyC('common_verify_time_interval', 30, true); ?>" data-form-tag="form.form-validation-email">获取验证码</button>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <label>设置登录密码</label>
                                                <div class="am-input-group am-input-group-sm">
                                                    <input type="password" name="pwd" class="am-radius" placeholder="设置登录密码" pattern="<?php echo lang('common_regex_pwd'); ?>" data-validation-message="密码格式 6~18 个字符之间" required />
                                                    <span class="am-input-group-btn">
                                                        <button class="am-btn am-btn-default am-radius am-icon-eye eye-submit" type="button"></button>
                                                    </span>
                                                </div>
                                            </div>

                                            <?php if(MyC('home_is_enable_userregister_agreement') == 1): ?>
                                                <div class="agreement am-padding-horizontal-sm">
                                                    <label class="am-checkbox am-success c-p">
                                                        <input type="checkbox" value="1" name="is_agree_agreement" data-validation-message="请同意注册协议" data-am-ucheck required /> 阅读并同意
                                                    </label>
                                                    <a href="<?php echo MyUrl('index/agreement/index', ['document'=>'userregister']); ?>" target="_blank">《服务协议》</a>
                                                </div>
                                            <?php endif; ?>

                                            <div class="am-form-group am-form-group-refreshing business-form-block">
                                                <input type="hidden" name="type" value="email" />
                                                <button type="submit" class="am-btn am-btn-primary am-btn-block am-radius am-btn-sm btn-loading-example" data-am-loading="{loadingText: '处理中...'}">注册</button>
                                            </div>
                                        </form>
                                        <!-- form end -->
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if(MyC('home_img_verify_state') == 1): ?>
                            <!-- verify win start -->
                            <div class="am-modal am-modal-no-btn" tabindex="-1" id="verify-win">
                                <div class="am-modal-dialog am-radius">
                                    <div class="am-modal-hd">
                                        <a href="javascript:;" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                                    </div>
                                    <div class="am-modal-bd">
                                        <div class="base">
                                            <input type="text" placeholder="图形验证码" minlength="6" maxlength="6" id="verify-img-value" data-validation-message="请输入有效的图形验证码" class="am-form-field am-radius" />
                                            <div class="am-fl">
                                                <img src="<?php echo MyUrl('index/user/userverifyentry', ['type'=>'reg']); ?>" class="am-radius c-p" id="verify-img" onClick="this.src=this.src+'#'+Math.random();" />
                                                <a href="javascript:;" class="verify-tips" onClick="document.getElementById('verify-img').src='<?php echo MyUrl('index/user/userverifyentry', ['type'=>'reg']); ?>#'+Math.random();">看不清换一张</a>
                                            </div>
                                        </div>
                                        <button type="button" class="am-btn am-btn-secondary am-radius am-btn-sm block m-t-20 btn-loading-example verify-submit-win" data-am-loading="{spinner:'circle-o-notch', loadingText:'发送中...'}" data-win="1">确认</button>
                                    </div>
                                </div>
                            </div>
                            <!-- verify win end -->
                        <?php endif; else: ?>
                        <div class="am-text-center am-padding-vertical-lg register-close"><i class="am-icon-warning"></i> 暂时关闭了注册</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- 用户注册页面底部钩子 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_user_reg_info_bottom</span>
            </div>
        <?php endif; if(!empty($plugins_view_user_reg_info_bottom_data) and is_array($plugins_view_user_reg_info_bottom_data)): foreach($plugins_view_user_reg_info_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!-- conntent end  -->

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

<script type="text/javascript">
// 注册成功回调
function RegisterSuccessBack(e)
{
    if(e.code == 0)
    {
        $.AMUI.progress.done();
        Prompt(e.msg, 'success');

        // 登录返回html处理
        if((e.data.body_html || null) != null)
        {
            $('body').append(e.data.body_html);
        }

        setTimeout(function()
        {
            window.location.href = '<?php echo htmlentities($referer_url); ?>';
        }, 1500);
    } else {
        $('.register-container form.am-form').find('button[type="submit"]').button('reset');
        $.AMUI.progress.done();
        Prompt(e.msg);
    }
}
</script>