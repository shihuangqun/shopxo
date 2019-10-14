<?php /*a:9:{s:82:"/data/home/byu3076970001/htdocs/application/index/view/default/category/index.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/index/view/default/public/header.html";i:1563161086;s:78:"/data/home/byu3076970001/htdocs/application/index/view/default/public/nav.html";i:1563161086;s:89:"/data/home/byu3076970001/htdocs/application/index/view/default/public/header_top_nav.html";i:1563161086;s:85:"/data/home/byu3076970001/htdocs/application/index/view/default/public/nav_search.html";i:1563161086;s:85:"/data/home/byu3076970001/htdocs/application/index/view/default/public/header_nav.html";i:1563161086;s:89:"/data/home/byu3076970001/htdocs/application/index/view/default/public/goods_category.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/index/view/default/public/footer.html";i:1563161086;s:85:"/data/home/byu3076970001/htdocs/application/index/view/default/public/footer_nav.html";i:1563161086;}*/ ?>
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

<!-- nav start -->
<div class="mobile-navigation">
    <li <?php if($controller_name.$action_name == 'indexindex'): ?>class="active"<?php endif; ?>>
        <a href="<?php echo htmlentities(__MY_URL__); ?>" class="am-block">
            <img src="<?php echo htmlentities($attachment_host); ?>/static/<?php echo htmlentities($module_name); ?>/<?php echo htmlentities($default_theme); ?>/images/<?php if($controller_name.$action_name == 'indexindex'): ?>nav-icon-home-active.png<?php else: ?>nav-icon-home.png<?php endif; ?>" class="am-block" alt="首页" />
            <p>首页</p>
        </a>
    </li>
    <li <?php if($controller_name.$action_name == 'categoryindex'): ?>class="active"<?php endif; ?>>
        <a href="<?php echo MyUrl('index/category/index'); ?>" class="am-block">
            <img src="<?php echo htmlentities($attachment_host); ?>/static/<?php echo htmlentities($module_name); ?>/<?php echo htmlentities($default_theme); ?>/images/<?php if($controller_name.$action_name == 'categoryindex'): ?>nav-icon-category-active.png<?php else: ?>nav-icon-category.png<?php endif; ?>" class="am-block" alt="分类" />
            <p>分类</p>
        </a>
    </li>
    <li <?php if($controller_name.$action_name == 'cartindex'): ?>class="active"<?php endif; ?>>
        <a <?php if(empty($user)): ?>href="javascript:;" class="login-event am-block"<?php else: ?> href="<?php echo MyUrl('index/cart/index'); ?>" class="am-block"<?php endif; ?>>
            <img src="<?php echo htmlentities($attachment_host); ?>/static/<?php echo htmlentities($module_name); ?>/<?php echo htmlentities($default_theme); ?>/images/<?php if($controller_name.$action_name == 'cartindex'): ?>nav-icon-cart-active.png<?php else: ?>nav-icon-cart.png<?php endif; ?>" class="am-block" alt="购物车" />
            <p>购物车</p>
        </a>
    </li>
    <li <?php if($controller_name.$action_name == 'userindex'): ?>class="active"<?php endif; ?>>
        <a <?php if(empty($user)): ?>href="javascript:;" class="login-event am-block"<?php else: ?> href="<?php echo MyUrl('index/user/index'); ?>" class="am-block"<?php endif; ?>>
            <img src="<?php echo htmlentities($attachment_host); ?>/static/<?php echo htmlentities($module_name); ?>/<?php echo htmlentities($default_theme); ?>/images/<?php if($controller_name.$action_name == 'userindex'): ?>nav-icon-user-active.png<?php else: ?>nav-icon-user.png<?php endif; ?>" class="am-block" alt="我的" />
            <p>我的</p>
        </a>
    </li>
</div>
<!-- nav end -->

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
<div class="am-container category-list">
    <?php if(!empty($goods_category_list)): ?>
          <section data-am-widget="accordion" class="am-accordion am-accordion-gapped" data-am-accordion='{}'>
                <?php foreach($goods_category_list as $v): ?>
                    <dl class="am-accordion-item am-active">
                        <dt class="am-accordion-title">
                            <a href="<?php echo MyUrl('index/search/index', ['category_id'=>$v['id']]); ?>" title="<?php echo htmlentities($v['name']); ?>"><?php echo htmlentities($v['name']); ?></a>
                        </dt>
                        <dd class="am-accordion-bd am-collapse am-in">
                            <div class="am-accordion-content">
                                <?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
                                        <div class="title">
                                            <a href="<?php echo MyUrl('index/search/index', ['category_id'=>$vs['id']]); ?>" title="<?php echo htmlentities($vs['name']); ?>"><?php echo htmlentities($vs['name']); ?></a>
                                        </div>
                                        <?php if(!empty($vs['items'])): ?>
                                            <ul>
                                                <?php foreach($vs['items'] as $keyss=>$vss): ?>
                                                    <li class="am-fl">
                                                        <a <?php if($keyss == 0): ?>class="first"<?php endif; ?> href="<?php echo MyUrl('index/search/index', ['category_id'=>$vss['id']]); ?>" title="<?php echo htmlentities($vss['name']); ?>"><?php echo htmlentities($vss['name']); ?></a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </dd>
                    </dl>
              <?php endforeach; ?>
          </section>
    <?php else: ?>
        <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
    <?php endif; ?>
</div>

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