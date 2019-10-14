<?php /*a:4:{s:85:"/data/home/byu3076970001/htdocs/application/admin/view/default/site/imagesverify.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/header.html";i:1566177930;s:76:"/data/home/byu3076970001/htdocs/application/admin/view/default/site/nav.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo config('木督府.default_charset', 'utf-8'); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
	<title>你的后衣橱后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/assets/css/amazeui.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-switch/amazeui.switch.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/css/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/iconfontmenu.css" />
    <?php if(!empty($plugins_css)): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/<?php echo htmlentities($plugins_css); ?>" />
    <?php endif; if(!empty($module_css)): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/<?php echo htmlentities($module_css); ?>" />
	<?php endif; ?>

	<!-- css钩子 -->
    <?php if(!empty($plugins_admin_css_data) and is_array($plugins_admin_css_data)): foreach($plugins_admin_css_data as $hook): if(is_string($hook)): ?>
                <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
            <?php elseif(is_array($hook)): foreach($hook as $hook_css): if(is_string($hook_css)): ?>
                        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- 公共header内钩子 -->
	<?php if(!empty($plugins_admin_common_header_data) and is_array($plugins_admin_common_header_data)): foreach($plugins_admin_common_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
</head>
<script type="text/javascript">
	var __attachment_host__ = '<?php echo htmlentities($attachment_host); ?>';
</script>
<body>
<!-- 公共顶部钩子 -->
<?php if(!empty($plugins_admin_view_common_top_data) and is_array($plugins_admin_view_common_top_data) and (!isset($is_header) or $is_header == 1)): foreach($plugins_admin_view_common_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			<?php echo $hook; ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>

<!-- right content start  -->
<div class="content-right">
    <div class="content">
        <!-- table nav start -->
        <ul class="am-nav am-nav-pills table-nav m-b-10">
    <li <?php if($nav_type == 'base'): ?>class="am-active"<?php endif; ?> data-type="base">
        <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>'base']); ?>">基础配置</a>
    </li>
    <li <?php if($nav_type == 'register'): ?>class="am-active"<?php endif; ?> data-type="register">
        <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>'register']); ?>">用户注册</a>
    </li>
    <li <?php if($nav_type == 'login'): ?>class="am-active"<?php endif; ?> data-type="login">
        <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>'login']); ?>">用户登录</a>
    </li>
    <li <?php if($nav_type == 'forgetpwd'): ?>class="am-active"<?php endif; ?> data-type="forgetpwd">
        <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>'forgetpwd']); ?>">密码找回</a>
    </li>
    <li <?php if($nav_type == 'attachment'): ?>class="am-active"<?php endif; ?> data-type="attachment">
        <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>'attachment']); ?>">附件</a>
    </li>
    <li <?php if($nav_type == 'imagesverify'): ?>class="am-active"<?php endif; ?> data-type="imagesverify">
        <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>'imagesverify']); ?>">图片验证码</a>
    </li>
    <li <?php if($nav_type == 'orderaftersale'): ?>class="am-active"<?php endif; ?> data-type="orderaftersale">
        <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>'orderaftersale']); ?>">订单售后</a>
    </li>
    <li <?php if($nav_type == 'search'): ?>class="am-active"<?php endif; ?> data-type="search">
        <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>'search']); ?>">搜索</a>
    </li>
</ul>

<?php if(in_array($nav_type, ['login', 'forgetpwd'])): ?>
    <!-- 登录/密码找回提示 -->
    <div class="am-alert am-alert-warning am-radius" data-am-alert>
        <button type="button" class="am-close">&times;</button>
        <p class="fs-12">左侧图片最多可上传3张图片、每次随机展示其中一张</p>
    </div>
<?php elseif(in_array($nav_type, ['register'])): ?>
    <!-- 注册提示 -->
    <div class="am-alert am-alert-warning am-radius" data-am-alert>
        <button type="button" class="am-close">&times;</button>
        <p class="fs-12">可自定义背景图片、默认底灰色</p>
    </div>
<?php endif; ?>
        <!-- table nav end -->

        <!-- form start -->
        <form class="am-form form-validation view-save" action="<?php echo MyUrl('admin/site/save'); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/site/index', ['nav_type'=>'imagesverify']); ?>" enctype="multipart/form-data">
            <div class="am-form-group">
                <label><?php echo htmlentities($data['common_verify_expire_time']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_verify_expire_time']['describe']); ?></span></label>
                <input type="number" name="<?php echo htmlentities($data['common_verify_expire_time']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_verify_expire_time']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_verify_expire_time']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_verify_expire_time']['value']); ?>"<?php endif; ?> required />
            </div>
            <div class="am-form-group">
                <label><?php echo htmlentities($data['common_verify_time_interval']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_verify_time_interval']['describe']); ?></span></label>
                <input type="number" name="<?php echo htmlentities($data['common_verify_time_interval']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_verify_time_interval']['name']); ?>" data-validation-message="<?php echo htmlentities($data['common_verify_time_interval']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_verify_time_interval']['value']); ?>"<?php endif; ?> required />
            </div>
            <div class="am-form-group">
                <label><?php echo htmlentities($data['home_img_verify_state']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_img_verify_state']['describe']); ?></span></label>
                <select name="<?php echo htmlentities($data['home_img_verify_state']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['home_img_verify_state']['error_tips']); ?>" required>
                    <?php foreach($site_img_verify_state_list as $v): ?>
                        <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['home_img_verify_state']['value']) and $data['home_img_verify_state']['value'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="am-form-group">
                <label><?php echo htmlentities($data['common_images_verify_rules']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_images_verify_rules']['describe']); ?></span></label>
                <select name="<?php echo htmlentities($data['common_images_verify_rules']['only_tag']); ?>" multiple="multiple" class="am-radius chosen-select" data-placeholder="<?php echo htmlentities($data['common_images_verify_rules']['name']); ?>" >
                    <?php foreach($site_images_verify_rules_list as $v): ?>
                        <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['common_images_verify_rules']['value']) and in_array($v['value'], explode(',', $data['common_images_verify_rules']['value']))): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="am-form-group am-form-group-refreshing">
                <input type="hidden" name="nav_type" value="<?php echo htmlentities($nav_type); ?>" />
                <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
            </div>
        </form>
        <!-- form end -->
    </div>
</div>
<!-- right content end  -->
        
<!-- footer start -->
<!-- commom html -->
<textarea id="upload-editor-view" data-url="<?php echo MyUrl('api/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?>" style="display: none;"></textarea>

<!-- 公共底部钩子 -->
<?php if(!empty($plugins_admin_view_common_bottom_data) and is_array($plugins_admin_view_common_bottom_data) and (!isset($is_footer) or $is_footer == 1)): foreach($plugins_admin_view_common_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

</body>
</html>

<!-- 类库 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/jquery/jquery-2.1.0.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/assets/js/amazeui.min.js"></script>

<!-- echarts 图表 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/echarts/echarts.min.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/echarts/macarons.js"></script>

<!-- ueditor 编辑器 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/ueditor/ueditor.config.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/ueditor/ueditor.all.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/ueditor/lang/zh-cn/zh-cn.js"></script>

<!-- 颜色选择器 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/colorpicker/jquery.colorpicker.js"></script>

<!-- 元素拖拽排序插件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/dragsort/jquery.dragsort-0.5.2.min.js"></script>

<!-- 动画数数 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/animation-count-to/animation.count.to.js"></script>

<!-- amazeui插件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-chosen/amazeui.chosen.min.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-dialog/amazeui.dialog.min.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.min.js"></script>

<!-- 日期组件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/My97DatePicker/WdatePicker.js"></script>

<!-- 元素拖动 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/tdrag/tdrag.min.js"></script>

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
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/js/common.js"></script>

<!-- 应用插件公共js -->
<?php if(!empty($plugins_js)): ?>
    <script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/<?php echo htmlentities($plugins_js); ?>"></script>
<?php endif; ?>

<!-- 当前控制器js -->
<?php if(!empty($module_js)): ?>
    <script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/<?php echo htmlentities($module_js); ?>"></script>
<?php endif; ?>

<!-- js钩子 -->
<?php if(!empty($plugins_admin_js_data) and is_array($plugins_admin_js_data)): foreach($plugins_admin_js_data as $hook): if(is_string($hook)): ?>
            <script type='text/javascript' src="<?php echo htmlentities($hook); ?>"></script>
        <?php elseif(is_array($hook)): foreach($hook as $hook_js): if(is_string($hook_js)): ?>
                    <script type='text/javascript' src="<?php echo htmlentities($hook_js); ?>"></script>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- 公共页面底部钩子 -->
<?php if(!empty($plugins_admin_common_page_bottom_data) and is_array($plugins_admin_common_page_bottom_data)): foreach($plugins_admin_common_page_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
<!-- footer end