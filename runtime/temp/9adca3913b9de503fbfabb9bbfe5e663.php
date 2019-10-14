<?php /*a:4:{s:92:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/user\modal_login_info.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\header.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\footer.html";i:1563161086;s:88:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/index/view/default/public\footer_nav.html";i:1563161086;}*/ ?>
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

<!-- conntent start  -->
<div class="am-g my-content login-modal-container">
    <!-- form start -->
    <form class="am-form form-validation" method="post" action="<?php echo MyUrl('index/user/login'); ?>" request-type="ajax-fun" request-value="ViewModalBack">
        <div class="xo-padding-horizontal-md-sm login-modal-container-top">
            <?php if(in_array('sms', MyC('home_user_reg_state')) or in_array('email', MyC('home_user_reg_state'))): ?>
                <span class="">还没有帐号？</span>
                <a href="<?php echo MyUrl('index/user/reginfo'); ?>" target="_blank" class="am-btn am-btn-secondary am-btn-xs am-radius">立即注册</a>
            <?php endif; ?>

            <!-- 用户登录页面顶部钩子 -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_user_login_info_top</span>
                </div>
            <?php endif; if(!empty($plugins_view_user_login_info_top_data) and is_array($plugins_view_user_login_info_top_data)): foreach($plugins_view_user_login_info_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="am-form-group am-form-group-refreshing">
            <label>登录账号</label>
            <input type="text" name="accounts" class="am-radius" minlength="1" placeholder="用户名/手机/邮箱" data-validation-message="请填写登录账号" required />
        </div>

        <div class="am-form-group am-form-group-refreshing">
            <label>登录密码</label>
            <input type="password" name="pwd" class="am-radius" placeholder="登录密码" pattern="<?php echo lang('common_regex_pwd'); ?>" data-validation-message="密码格式 6~18 个字符之间" required />
        </div>

        <?php if(MyC('home_user_login_img_verify_state') == 1): ?>
            <div class="am-form-group am-form-group-refreshing business-form-block">
                <label>验证码</label>
                <div class="am-input-group am-input-group-sm">
                    <input type="text" name="verify" class="am-radius" placeholder="验证码" minlength="6" maxlength="6" data-validation-message="请输入图片验证码" required />
                    <span class="am-input-group-btn">
                        <span class="am-btn am-btn-default am-radius form-verify">
                            <img src="<?php echo MyUrl('index/user/userverifyentry', ['type'=>'login']); ?>" class="am-radius c-p" id="form-verify-img" onClick="this.src=this.src+'#'+Math.random();" />
                            <a href="javascript:;" class="form-verify-tips" onClick="document.getElementById('form-verify-img').src='<?php echo MyUrl('index/user/userverifyentry', ['type'=>'login']); ?>#'+Math.random();">更换一张</a>
                        </span>
                    </span>
                </div>
            </div>
        <?php endif; ?>
        
        <div class="am-form-group am-form-group-refreshing">
            <button type="submit" class="am-btn am-btn-primary am-radius am-btn-sm btn-loading-example" data-am-loading="{loadingText: '登录中...'}">登录</button>
            <a href="<?php echo MyUrl('index/user/forgetpwdinfo'); ?>" target="_blank" class="am-fr">忘记密码？</a>
        </div>
    </form>
    <!-- form end -->
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
    // 返回处理
    function ViewModalBack(e)
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
                window.parent.location.reload();
            }, 1500);
        } else {
            $('form.form-validation').find('button[type="submit"]').button('reset');
            $.AMUI.progress.done();
            Prompt(e.msg);
        }
    }
</script>

