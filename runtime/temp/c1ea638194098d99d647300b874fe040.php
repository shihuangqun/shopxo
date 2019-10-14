<?php /*a:8:{s:89:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/goods/index.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/header.html";i:1563161086;s:99:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/header_top_nav.html";i:1563161086;s:95:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/nav_search.html";i:1563161086;s:95:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/header_nav.html";i:1563161086;s:99:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/goods_category.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/footer.html";i:1563161086;s:95:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/index/view/default/public/footer_nav.html";i:1563161086;}*/ ?>
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

<div class="goods-detail" data-id="<?php echo htmlentities($goods['id']); ?>" data-spec-detail-ajax-url="<?php echo MyUrl('index/goods/specdetail'); ?>" data-spec-type-ajax-url="<?php echo MyUrl('index/goods/spectype'); ?>">
    <!-- 轮播 -->
    <div class="scoll">
        <div class="slider-content">
            <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{"directionNav":false}' >
                <ul class="am-slides">
                    <?php if(!empty($goods['photo'])): foreach($goods['photo'] as $photo): ?>
                            <li>
                                <img src="<?php echo htmlentities($photo['images']); ?>" title="<?php echo htmlentities($goods['title']); ?>" />
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- 视频 -->
            <?php if(!empty($goods['video'])): ?>
                <i class="am-icon-play-circle-o goods-video-submit-start"></i>
                <i class="goods-video-submit-close none">&times;</i>
                <video class="goods-video-container none" src="<?php echo htmlentities($goods['video']); ?>" controls="controls" preload="auto">
                    your browser does not support the video tag
                </video>
            <?php endif; ?>

            <!-- 商品页面相册内部钩子 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                <div class="plugins-tag">
                    <span>plugins_view_goods_detail_photo_within</span>
                </div>
            <?php endif; if(!empty($plugins_view_goods_detail_photo_within_data) and is_array($plugins_view_goods_detail_photo_within_data)): foreach($plugins_view_goods_detail_photo_within_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- 商品页面相册底部钩子 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
            <div class="plugins-tag">
                <span>plugins_view_goods_detail_photo_bottom</span>
            </div>
        <?php endif; if(!empty($plugins_view_goods_detail_photo_bottom_data) and is_array($plugins_view_goods_detail_photo_bottom_data)): foreach($plugins_view_goods_detail_photo_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- 基础信息 -->
    <div class="item-inform am-container">
        <!-- pc放大镜 / 左侧 -->
        <div class="clearfix-left" id="clearcontent">
            <div class="box">
                <div class="tb-booth tb-pic tb-s310">
                    <?php if(!empty($goods['photo'][0])): ?>
                        <img src="<?php echo htmlentities($goods['photo'][0]['images']); ?>" alt="<?php echo htmlentities($goods['title']); ?>" rel="<?php echo htmlentities($goods['photo'][0]['images']); ?>" class="jqzoom" />
                    <?php endif; ?>
                </div>
                <ul class="tb-thumb" id="thumblist">
                    <?php if(!empty($goods['photo'])): foreach($goods['photo'] as $photo_key=>$photo): ?>
                            <li class="<?php if($photo_key == 0): ?>tb-selected<?php else: ?> tb-pic<?php endif; ?>">
                                <div class="tb-pic tb-s40">
                                    <a href="javascript:;">
                                        <img src="<?php echo htmlentities($photo['images']); ?>" mid="<?php echo htmlentities($photo['images']); ?>" big="<?php echo htmlentities($photo['images']); ?>" class="tb-s40" />
                                    </a>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <!-- 视频 -->
                <?php if(!empty($goods['video'])): ?>
                    <i class="am-icon-play-circle-o goods-video-submit-start"></i>
                    <i class="goods-video-submit-close none">&times;</i>
                    <video class="goods-video-container none" src="<?php echo htmlentities($goods['video']); ?>" controls="controls" preload="auto">
                        your browser does not support the video tag
                    </video>
                <?php endif; ?>

                <!-- 商品页面相册内部钩子 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_goods_detail_photo_within</span>
                    </div>
                <?php endif; if(!empty($plugins_view_goods_detail_photo_within_data) and is_array($plugins_view_goods_detail_photo_within_data)): foreach($plugins_view_goods_detail_photo_within_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- 商品页面相册底部钩子 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                <div class="plugins-tag">
                    <span>plugins_view_goods_detail_photo_bottom</span>
                </div>
            <?php endif; if(!empty($plugins_view_goods_detail_photo_bottom_data) and is_array($plugins_view_goods_detail_photo_bottom_data)): foreach($plugins_view_goods_detail_photo_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- 右侧 -->
        <div class="clearfix-right">
            <!--规格-->
            <!--名称-->
            <div class="tb-detail-hd">
                <h1 class="detail-title am-margin-bottom-xs" <?php if(!empty($goods['title_color'])): ?>style="color:<?php echo htmlentities($goods['title_color']); ?>;"<?php endif; ?>>
                    <?php echo htmlentities($goods['title']); ?>
                    <!-- 商品页面基础信息标题里面钩子 -->
                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                        <div class="plugins-tag">
                            <span>plugins_view_goods_detail_title</span>
                        </div>
                    <?php endif; if(!empty($plugins_view_goods_detail_title_data) and is_array($plugins_view_goods_detail_title_data)): foreach($plugins_view_goods_detail_title_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                <?php echo $hook; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </h1>
                <?php if(!empty($goods['simple_desc'])): ?>
                    <p class="simple-desc am-margin-bottom-xs"><?php echo htmlentities($goods['simple_desc']); ?></p>
                <?php endif; ?>
            </div>
            <div class="tb-detail-list">
                <!-- 商品页面基础信息顶部钩子 -->
                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                    <div class="plugins-tag">
                        <span>plugins_view_goods_detail_base_top</span>
                    </div>
                <?php endif; if(!empty($plugins_view_goods_detail_base_top_data) and is_array($plugins_view_goods_detail_base_top_data)): foreach($plugins_view_goods_detail_base_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                            <?php echo $hook; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- 基础面板 -->
                <div class="tb-detail-price">
                    <?php if(isset($goods['original_price']) and $goods['original_price'] > 0 and !empty($goods['show_field_original_price_text'])): ?>
                        <div class="items price iteminfo_price">
                            <dt><?php echo $goods['show_field_original_price_text']; ?></dt>
                            <dd>
                                <b class="sys_item_mktprice">¥ <?php echo htmlentities($goods['original_price']); ?></b>
                            </dd>
                        </div>
                    <?php endif; ?>
                    <div class="items price iteminfo_mktprice">
                        <dt><?php if(empty($goods['show_field_price_text'])): ?>销售价<?php else: ?><?php echo $goods['show_field_price_text']; ?><?php endif; ?></dt>
                        <dd>
                            <em>¥</em>
                            <b class="sys_item_price" data-original-price="<?php echo htmlentities($goods['price']); ?>"><?php echo htmlentities($goods['price']); ?></b>
                        </dd>                                 
                    </div>
                    <div class="goods-qrcode am-hide-sm-only">
                        <i class="am-icon-qrcode am-icon-sm"></i>
                        <img class="qrcode-images am-img-thumbnail" src="<?php echo htmlentities($qrcode_url); ?>" />
                    </div>

                    <!-- 商品页面基础信息面板底部钩子 -->
                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                        <div class="plugins-tag">
                            <span>plugins_view_goods_detail_panel_bottom</span>
                        </div>
                    <?php endif; if(!empty($plugins_view_goods_detail_panel_bottom_data) and is_array($plugins_view_goods_detail_panel_bottom_data)): foreach($plugins_view_goods_detail_panel_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                <?php echo $hook; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <!--销量-->
                <ul class="tm-ind-panel">
                    <li class="tm-ind-item">
                        <div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count"><?php echo htmlentities($goods['sales_count']); ?></span></div>
                    </li>
                    <li class="tm-ind-item">
                        <div class="tm-indcon"><span class="tm-label">浏览次数</span><span class="tm-count"><?php echo htmlentities($goods['access_count']); ?></span></div>
                    </li>
                    <li class="tm-ind-item ind-panel-comment">
                        <div class="tm-indcon"><span class="tm-label">累计评论</span><span class="tm-count"><?php echo htmlentities($goods['comments_count']); ?></span></div>
                    </li>
                </ul>

                <!--各种规格-->
                <?php if($goods['is_shelves'] == 1 and $goods['inventory'] > 0): ?>
                    <dl class="iteminfo_parameter sys_item_specpara">
                        <dt class="buy-event login-event" data-type="buy">
                            <div class="cart-title">
                                <span class="specpara-title">可选规格</span>
                                <span class="am-icon-angle-right"></span>
                            </div>
                        </dt>
                        <dd>
                            <!--操作页面-->
                            <div class="theme-popover-mask"></div>
                            <div class="theme-popover">
                                <div class="theme-span"></div>
                                <div class="theme-poptit">
                                    <a href="javascript:;" title="关闭" class="close am-icon-close am-icon-sm"></a>
                                </div>
                                <div class="theme-popbod dform">
                                    <form class="theme-signin" name="loginform" action="javascript:;">
                                        <div class="theme-signin-left">
                                            <?php if(!empty($goods['specifications']['choose'])): foreach($goods['specifications']['choose'] as $key=>$spec): if(!empty($spec['value'])): ?>
                                                        <div class="theme-options sku-items">
                                                            <div class="cart-title"><?php echo htmlentities($spec['name']); ?></div>
                                                            <ul>
                                                                <?php foreach($spec['value'] as $keys=>$specs): ?>
                                                                    <li class="sku-line <?php if(!empty($specs['images'])): ?> sku-line-images<?php endif; if($key > 0): ?> sku-dont-choose<?php endif; if(isset($specs['is_only_level_one']) and isset($specs['inventory']) and $specs['inventory'] <= 0): ?> sku-items-disabled<?php endif; ?>" data-type-value="<?php echo htmlentities($spec['name']); ?>" data-value="<?php echo htmlentities($specs['name']); ?>" <?php if(!empty($specs['images'])): ?> data-type-images="<?php echo htmlentities($specs['images']); ?>"<?php endif; ?>>
                                                                        <?php if(!empty($specs['images'])): ?>
                                                                            <img src="<?php echo htmlentities($specs['images']); ?>" />
                                                                        <?php endif; ?>
                                                                        <?php echo htmlentities($specs['name']); ?><i></i>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                            <div class="theme-options">
                                                <div class="cart-title number">数量</div>
                                                <dd>
                                                    <div class="am-input-group am-input-group-sm number-tag">
                                                        <button class="am-input-group-label" id="min" type="button">-</button>
                                                        <input type="number" class="am-form-field" value="1" id="text_box" min="1" max="<?php echo htmlentities($goods['inventory']); ?>" data-original-max="<?php echo htmlentities($goods['inventory']); ?>" />
                                                        <button class="am-input-group-label" id="add" type="button">+</button>
                                                    </div>
                                                    <span class="tb-hidden stock-tips">库存<span class="stock" data-original-stock="<?php echo htmlentities($goods['inventory']); ?>"><?php echo htmlentities($goods['inventory']); ?></span><?php echo htmlentities($goods['inventory_unit']); ?></span>
                                                </dd>
                                            </div>

                                            <div class="btn-op">
                                                <span class="btn am-btn am-btn-default confirm login-event" data-type="cart" data-ajax-url="<?php echo MyUrl('index/Cart/Save'); ?>">确认</span>
                                                <span class="btn close am-btn am-btn-danger cancel">取消</span>
                                            </div>
                                        </div>
                                        <div class="theme-signin-right">
                                            <div class="img-info">
                                                <img src="<?php echo htmlentities($goods['images']); ?>" />
                                            </div>
                                            <div class="text-info">
                                                <span class="price-now" data-original-price="<?php echo htmlentities($goods['price']); ?>">¥<?php echo htmlentities($goods['price']); ?></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </dd>
                    </dl>
                <?php endif; ?>
            </div>

            <!-- 购买导航 -->
            <div class="buy-nav">
                <?php if(!empty($goods['is_shelves'])): if($goods['inventory'] > 0): ?>
                        <div class="buy-nav-opt">
                            <a href="<?php echo htmlentities(__MY_URL__); ?>">
                                <span class="am-icon-home am-icon-fw"> 首页</span>
                            </a>
                            <?php if(isset($goods['is_favor']) and $goods['is_favor'] == 1): ?>
                                <span class="am-icon-heart am-icon-fw login-event favor-submit text-active" data-ajax-url="<?php echo MyUrl('index/goods/favor'); ?>">
                                    <em class="goods-favor-text">已收藏</em>
                                    <em class="goods-favor-count">(<?php echo htmlentities($goods['favor_count']); ?>)</em>
                                </span>
                            <?php else: ?>
                                <span class="am-icon-heart am-icon-fw favor-submit login-event" data-ajax-url="<?php echo MyUrl('index/goods/favor'); ?>">    <em class="goods-favor-text">收藏</em>
                                    <em class="goods-favor-count">(<?php echo htmlentities($goods['favor_count']); ?>)</em>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="submit">
                            <div class="clearfix tb-btn tb-btn-buy buy-event login-event buy-submit" data-type="buy">
                                <button title="点此按钮到下一步确认购买信息" href="javascript:;" type="button">立即购买</button>
                            </div>
                        </div>
                        <div class="submit">
                            <div class="clearfix tb-btn tb-btn-basket buy-event login-event cart-submit" data-type="cart"  data-ajax-url="<?php echo MyUrl('index/Cart/Save'); ?>">
                                <button title="加入购物车" href="javascript:;" type="button"><i></i>加入购物车</button>
                            </div>
                        </div>

                        <!-- 购买表单 -->
                        <form action="<?php echo MyUrl('index/buy/index'); ?>" method="post" class="buy-form">
                            <input type="hidden" name="goods_id" value="<?php echo htmlentities($goods['id']); ?>" />
                            <input type="hidden" name="buy_type" value="goods" />
                            <input type="hidden" name="stock" value="1" />
                            <input type="hidden" name="spec" value="" />
                            <button type="submit"></button>
                        </form>
                    <?php else: ?>
                        <p class="goods-not-buy-tips">商品卖光了</p>
                    <?php endif; ?>
                <?php endif; if($goods['is_shelves'] != 1): ?>
                    <p class="goods-not-buy-tips">商品已下架</p>
                <?php endif; ?>
            </div>

            <!-- 商品页面基础信息底部钩子 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                <div class="plugins-tag">
                    <span>plugins_view_goods_detail_base_bottom</span>
                </div>
            <?php endif; if(!empty($plugins_view_goods_detail_base_bottom_data) and is_array($plugins_view_goods_detail_base_bottom_data)): foreach($plugins_view_goods_detail_base_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- 左侧-->
    <div class="introduce am-container">
        <div class="browse">
            <!-- 商品页面左侧顶部钩子 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                <div class="plugins-tag">
                    <span>plugins_view_goods_detail_left_top</span>
                </div>
            <?php endif; if(!empty($plugins_view_goods_detail_left_top_data) and is_array($plugins_view_goods_detail_left_top_data)): foreach($plugins_view_goods_detail_left_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- 详情/推荐商品-->
            <div class="mc"> 
                 <ul>                       
                    <div class="mt">            
                        <h2>看了又看</h2>        
                    </div>
                    <?php if(!empty($left_goods)): foreach($left_goods as $key=>$v): ?>
                            <li <?php if($key == 0): ?>class="first"<?php endif; ?>>
                                <div class="p-img">                    
                                    <a href="<?php echo $v['goods_url']; ?>">
                                        <img alt="<?php echo htmlentities($v['title']); ?>" src="<?php echo htmlentities($v['images']); ?>">
                                    </a>               
                                </div>
                                <div class="p-name">
                                    <a href="<?php echo $v['goods_url']; ?>" <?php if(!empty($v['title_color'])): ?>style="color:<?php echo htmlentities($v['title_color']); ?>;"<?php endif; ?>><?php echo htmlentities($v['title']); ?></a>
                                </div>
                                <div class="p-price"><strong>￥<?php echo htmlentities($v['price']); ?></strong></div>
                            </li>
                          <?php endforeach; ?>
                      <?php endif; ?>
                 </ul>
            </div>
        </div>

        <!-- 右侧内容 -->
        <div class="introduce-main">
            <!-- 商品页面tabs顶部钩子 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                <div class="plugins-tag">
                    <span>plugins_view_goods_detail_tabs_top</span>
                </div>
            <?php endif; if(!empty($plugins_view_goods_detail_tabs_top_data) and is_array($plugins_view_goods_detail_tabs_top_data)): foreach($plugins_view_goods_detail_tabs_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- tab -->
            <div class="am-tabs" data-am-tabs="{noSwipe: 1}">
                <ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs" data-am-sticky="{animation: 'slide-top'}">
                    <li class="am-active">
                        <a href="javascript:;">
                            <span class="index-needs-dt-txt">详情</span>
                        </a>
                    </li>
                    <li class="tabs-comment">
                        <a href="javascript:;">
                            <span class="index-needs-dt-txt">评论(<?php echo htmlentities($goods['comments_count']); ?>)</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="index-needs-dt-txt">猜你喜欢</span>
                        </a>
                    </li>
                </ul>

                <!-- 详情 -->
                <div class="am-tabs-bd">
                    <div class="am-tab-panel am-fade am-in am-active">
                        <?php if(!empty($goods['attribute'])): ?>
                            <div class="specifications">
                                <div class="spacing-nav-title">
                                    <span class="line"></span>
                                    <span class="text-wrapper">产品参数</span>
                                </div>
                                <ul class="detail-attr">
                                    <?php if(!empty($goods['attribute'])): foreach($goods['attribute'] as $key=>$attribute): ?>
                                            <li><?php echo htmlentities($attribute['name']); ?>:&nbsp;<?php echo implode(',', array_column($attribute['find'], 'name')); ?></li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <div class="details">
                            <div class="spacing-nav-title">
                                <span class="line"></span>
                                <span class="text-wrapper">商品细节</span>
                            </div>
                            <div class="detail-content"><?php echo $goods['content_web']; ?></div>
                        </div>
                    </div>

                    <!-- 评论 -->
                    <div class="am-tab-panel am-fade goods-comment" data-goods-id="<?php echo htmlentities($goods['id']); ?>" data-url="<?php echo MyUrl('index/goods/comment'); ?>">
                        <div class="am-cf score-container">
                            <div class="score am-fl">
                                <p class="name">动态评分</p>
                                <p class="value"><?php echo htmlentities($goods_score['avg']); ?></p>
                            </div>
                            <div class="am-progress am-fr">
                                <?php if(isset($goods_score['avg']) and $goods_score['avg'] > 0 and !empty($goods_score['rating'])): foreach($goods_score['rating'] as $score): ?>
                                        <div class="am-progress-bar 
                                            <?php switch($score['rating']): case "1": ?>
                                                    am-progress-bar-danger
                                                <?php break; case "2": ?>
                                                    am-progress-bar-warning
                                                <?php break; case "3": ?>
                                                    am-progress-bar-secondary
                                                <?php break; case "5": ?>
                                                    am-progress-bar-success
                                                <?php break; ?>
                                            <?php endswitch; ?>"
                                            style="width: <?php echo htmlentities($score['portion']); ?>%"><?php echo htmlentities($score['name']); ?>(<?php echo htmlentities($score['portion']); ?>%)</div>
                                    <?php endforeach; else: ?>
                                    没有评分数据
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="goods-comment-content"></div>
                        <div class="goods-page-container"></div>
                        <div class="table-no goods-page-no-data none">
                            <i class="am-icon-warning"></i>
                            <span>没有评论数据</span>
                        </div>
                    </div>

                    <!-- 猜你喜欢 -->
                    <div class="am-tab-panel am-fade">
                        <div class="like">
                            <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
                                <?php if(!empty($detail_like_goods)): foreach($detail_like_goods as $key=>$v): ?>
                                        <li>
                                            <div class="i-pic limit">
                                                <a href="<?php echo $v['goods_url']; ?>">
                                                    <img alt="<?php echo htmlentities($v['title']); ?>" src="<?php echo htmlentities($v['home_recommended_images']); ?>" />
                                                </a>
                                                <a href="<?php echo $v['goods_url']; ?>">
                                                    <p class="am-text-truncate" <?php if(!empty($v['title_color'])): ?>style="color:<?php echo htmlentities($v['title_color']); ?>;"<?php endif; ?>><?php echo htmlentities($v['title']); ?></p>
                                                </a>
                                                <p class="price fl">
                                                    <strong>¥<?php echo htmlentities($v['price']); ?></strong>
                                                </p>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 商品页面tabs底部钩子 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true and (!isset($is_footer) or $is_footer == 1)): ?>
                <div class="plugins-tag">
                    <span>plugins_view_goods_detail_tabs_bottom</span>
                </div>
            <?php endif; if(!empty($plugins_view_goods_detail_tabs_bottom_data) and is_array($plugins_view_goods_detail_tabs_bottom_data)): foreach($plugins_view_goods_detail_tabs_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
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