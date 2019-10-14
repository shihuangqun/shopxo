<?php /*a:5:{s:85:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/user\save_info.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/public\header.html";i:1566177929;s:81:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/lib\gender.html";i:1563161086;s:86:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/lib\user_status.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/public\footer.html";i:1563161086;}*/ ?>
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
		<!-- form start -->
		<form class="am-form form-validation view-save" action="<?php echo MyUrl('admin/user/save'); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/user/index', $params); ?>">
			<legend>
				<span class="fs-16">
					<?php if(empty($data['id'])): ?>
						成员添加
					<?php else: ?>
						成员编辑
					<?php endif; ?>
				</span>
				<a href="<?php echo MyUrl('admin/user/index', $params); ?>" class="fr fs-14 m-t-5 am-icon-mail-reply"> 返回</a>
			</legend>
			<div class="am-form-group">
				<label>用户名</label>
				<input type="text" name="username" class="am-radius" placeholder="用户名" data-validation-message="用户名 2~30 个字符" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['username']); ?>"<?php endif; ?> />
			</div>
			<div class="am-form-group">
				<label>昵称</label>
				<input type="text" name="nickname" class="am-radius" placeholder="昵称" data-validation-message="昵称最多 16 个字符" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['nickname']); ?>"<?php endif; ?> />
			</div>

			<div class="am-form-group">
				<label>手机号码</label>
				<input type="text" name="mobile" class="am-radius" placeholder="手机号码" pattern="<?php echo lang('common_regex_mobile'); ?>" data-validation-message="手机号码格式错误" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['mobile']); ?>"<?php endif; ?> />
			</div>
			<div class="am-form-group">
				<label>电子邮箱</label>
				<input type="email" name="email" class="am-radius" placeholder="电子邮箱" data-validation-message="电子邮箱格式错误" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['email']); ?>"<?php endif; ?> />
			</div>

			<div class="am-form-group">
				<label>支付宝openid</label>
				<input type="text" name="alipay_openid" class="am-radius" placeholder="支付宝openid" data-validation-message="请填写支付宝openid" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['alipay_openid']); ?>"<?php endif; ?> />
			</div>
			<div class="am-form-group">
				<label>微信openid</label>
				<input type="text" name="weixin_openid" class="am-radius" placeholder="微信openid" data-validation-message="请填写微信openid" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['weixin_openid']); ?>"<?php endif; ?> />
			</div>
			<div class="am-form-group">
				<label>百度openid</label>
				<input type="text" name="baidu_openid" class="am-radius" placeholder="百度openid" data-validation-message="请填写百度openid" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['baidu_openid']); ?>"<?php endif; ?> />
			</div>

			<div class="am-form-group">
				<label>生日</label>
				<input type="text" name="birthday" class="am-radius Wdate" placeholder="生日" pattern="<?php echo lang('common_regex_date'); ?>" data-validation-message="生日格式有误" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['birthday_text']); ?>" <?php endif; ?> onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd'})" />
			</div>
			<div class="am-form-group">
				<label>详细地址</label>
				<input type="text" placeholder="详细地址" name="address" data-validation-message="详细地址2~60 个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['address']); ?>"<?php endif; ?> />
			</div>
			<!-- 性别 开始 -->
<div class="am-form-group">
	<label>性别</label>
	<div>
		<?php foreach(lang('common_gender_list') as $v): ?>
			<label class="am-radio-inline m-r-10">
				<input type="radio" name="gender" value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['gender']) and $data['gender'] == $v['id']): ?>checked="checked"<?php else: if(!isset($data['gender']) and isset($v['checked']) and $v['checked'] == true): ?>checked="checked"<?php endif; ?><?php endif; ?> data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
			</label>
		<?php endforeach; ?>
	</div>
</div>
<!-- 性别 结束 -->
			<div class="am-form-group">
				<label>积分</label>
				<input type="number" placeholder="积分" name="integral" data-validation-message="详细地址2~60 个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['integral']); ?>"<?php endif; ?> />
			</div>

			<!-- 用户状态 开始 -->
<div class="am-form-group">
	<label>用户状态</label>
	<select name="status" class="am-radius chosen-select c-p" data-validation-message="请选择用户状态" required>
		<?php foreach(lang('common_user_status_list') as $v): ?>
			<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['status']) and $data['status'] == $v['id']): ?>selected<?php else: if(!isset($data['status']) and isset($v['checked']) and $v['checked'] == true): ?>selected<?php endif; ?><?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
		<?php endforeach; ?>
	</select>
</div>
<!-- 用户状态 结束 -->

			<div class="am-form-group">
				<label>登录密码</label>
				<input type="text" placeholder="登录密码" name="pwd" pattern="<?php echo lang('common_regex_pwd'); ?>" data-validation-message="登录密码格式 6~18 个字符之间" class="am-radius" value="" />
			</div>

			<div class="am-form-group am-form-group-refreshing">
				<input type="hidden" name="id" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['id']); ?>"<?php endif; ?> />
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
<!-- footer end -->