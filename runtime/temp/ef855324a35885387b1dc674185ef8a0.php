<?php /*a:3:{s:88:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/payment\save_info.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/public\header.html";i:1566177929;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/public\footer.html";i:1563161086;}*/ ?>
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
		<form class="am-form form-validation view-save" action="<?php echo MyUrl('admin/payment/save'); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/payment/index'); ?>" enctype="multipart/form-data">
			<legend>
				<span class="fs-16">支付方式编辑</span>
				<a href="<?php echo MyUrl('admin/payment/index'); ?>" class="fr fs-14 m-t-5 am-icon-mail-reply"> 返回</a>
			</legend>
			<div class="am-form-group">
				<label>名称</label>
				<input type="text" name="name" placeholder="名称" minlength="2" maxlength="60" data-validation-message="名称格式 2~30 个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['name']); ?>"<?php endif; ?> required />
			</div>
			<div class="am-form-group">
				<label>适用终端</label>
			    <select name="apply_terminal" class="am-radius c-p chosen-select" multiple="multiple" minchecked="1" data-placeholder="可选择..." data-validation-message="至少选择一个适用终端" required>
					<?php foreach($common_platform_type as $v): ?>
						<option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['apply_terminal']) and in_array($v['value'], $data['apply_terminal'])): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="am-form-group am-form-file">
				<label class="block">LOGO</label>
				<ul class="plug-file-upload-view logo-images-view" data-form-name="logo" data-max-number="1" data-dialog-type="images">
					<?php if(!empty($data['logo'])): ?>
						<li>
							<input type="text" name="logo" value="<?php echo htmlentities($data['logo']); ?>" />
							<img src="<?php echo htmlentities($data['logo']); ?>" />
							<i>×</i>
						</li>
					<?php endif; ?>
				</ul>
				<div class="plug-file-upload-submit" data-view-tag="ul.logo-images-view">+上传图片</div>
			</div>

			<!-- plugins config start -->
			<?php if(!empty($data['element'])): ?>
				<div class="am-alert am-alert-secondary">
					<label class="am-text-sm am-text-warning">该区域为插件配置填写项，请按照插件文档填写相应的值。</label>
					<?php foreach($data['element'] as $element): ?>
						<div class="am-form-group">
							<label class="block"><?php echo htmlentities($element['title']); ?></label>
							<?php switch($element['element']): case "input": if(in_array($element['type'], ['radio', 'checkbox']) and !empty($element['element_data']) and is_array($element['element_data'])): foreach($element['element_data'] as $element_data_key=>$element_data): ?>
											<label class="<?php if(isset($element['is_block']) and $element['is_block'] == 1): ?>am-<?php echo htmlentities($element['type']); else: ?>am-<?php echo htmlentities($element['type']); ?>-inline<?php endif; ?>">
												<input
													type="<?php echo htmlentities($element['type']); ?>"
													name="plugins_<?php echo htmlentities($element['name']); ?>"
													value="<?php echo htmlentities($element_data['value']); ?>"

													<?php if(isset($data['config'][$element['name']]) and in_array($element_data['value'], explode(',', $data['config'][$element['name']]))): ?> checked<?php endif; if(isset($element['minchecked']) and $element['type'] == 'checkbox'): ?> minchecked="<?php echo htmlentities($element['minchecked']); ?>"<?php endif; if(isset($element['maxchecked']) and $element['type'] == 'checkbox'): ?> maxchecked="<?php echo htmlentities($element['maxchecked']); ?>"<?php endif; if(isset($element['message'])): ?> data-validation-message="<?php echo htmlentities($element['message']); ?>"<?php endif; if($element_data_key == 0 and isset($element['is_required']) and $element['is_required'] == 1): ?>required<?php endif; ?>
													data-am-ucheck />
													<?php echo htmlentities($element_data['name']); ?>
											</label>
										<?php endforeach; else: ?>
										<input
											class="am-radius"
											type="<?php echo htmlentities($element['type']); ?>"
											name="plugins_<?php echo htmlentities($element['name']); ?>"
											value="<?php if(isset($data['config'][$element['name']])): ?><?php echo htmlentities($data['config'][$element['name']]); else: if(isset($element['default'])): ?><?php echo htmlentities($element['default']); ?><?php endif; ?><?php endif; ?>"

											<?php if(isset($element['placeholder'])): ?> placeholder="<?php echo htmlentities($element['placeholder']); ?>"<?php endif; if(isset($element['message'])): ?> data-validation-message="<?php echo htmlentities($element['message']); ?>"<?php endif; if(isset($element['is_required']) and $element['is_required'] == 1): ?> required<?php endif; ?>
											/>
									<?php endif; break; case "select": if(!empty($element['element_data']) and is_array($element['element_data'])): ?>
										<select
											class="chosen-select am-radius"
											name="plugins_<?php echo htmlentities($element['name']); ?>"

											<?php if(isset($element['message'])): ?> data-validation-message="<?php echo htmlentities($element['message']); ?>"<?php endif; if(!empty($element['placeholder'])): ?> data-placeholder="<?php echo htmlentities($element['placeholder']); ?>"<?php endif; if(isset($element['is_multiple']) and $element['is_multiple'] == 1): ?>
												multiple
												<?php if(isset($element['minchecked'])): ?> minchecked="<?php echo htmlentities($element['minchecked']); ?>"<?php endif; if(isset($element['maxchecked'])): ?> maxchecked="<?php echo htmlentities($element['maxchecked']); ?>"<?php endif; ?>
											<?php endif; if(isset($element['is_required']) and $element['is_required'] == 1): ?>required<?php endif; ?>
										>
										<?php if(!isset($element['is_multiple']) or $element['is_multiple'] != 1): if(!empty($element['placeholder'])): ?>
												<option value=""><?php echo htmlentities($element['placeholder']); ?></option>
											<?php endif; ?>
										<?php endif; foreach($element['element_data'] as $element_data_key=>$element_data): ?>
												<option
													value="<?php echo htmlentities($element_data['value']); ?>"
													<?php if(isset($data['config'][$element['name']]) and in_array($element_data['value'], explode(',', $data['config'][$element['name']]))): ?>selected<?php endif; ?>
													><?php echo htmlentities($element_data['name']); ?></option>
											<?php endforeach; ?>
										</select>
									<?php endif; break; case "textarea": ?>
									<textarea
										class="am-radius"
										name="plugins_<?php echo htmlentities($element['name']); ?>"

										<?php if(isset($element['rows'])): ?> rows="<?php echo htmlentities($element['rows']); ?>"<?php endif; if(isset($element['placeholder'])): ?> placeholder="<?php echo htmlentities($element['placeholder']); ?>"<?php endif; if(isset($element['is_required']) and $element['is_required'] == 1): if(isset($element['minlength'])): ?> minlength="<?php echo htmlentities($element['minlength']); ?>"<?php endif; if(isset($element['maxlength'])): ?> maxlength="<?php echo htmlentities($element['maxlength']); ?>"<?php endif; ?>
											required
										<?php endif; ?>
									><?php if(isset($data['config'][$element['name']])): ?><?php echo htmlentities($data['config'][$element['name']]); else: if(isset($element['default'])): ?><?php echo htmlentities($element['default']); ?><?php endif; ?><?php endif; ?></textarea>
								<?php break; ?>
							<?php endswitch; ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<!-- plugins config end -->

			<div class="am-form-group">
				<label>顺序</label>
				<input type="number" placeholder="顺序" name="sort" min="0" max="255" data-validation-message="顺序 0~255 之间的数值" class="am-radius" value="<?php if(isset($data['sort'])): ?><?php echo htmlentities($data['sort']); else: ?>0<?php endif; ?>" required />
			</div>

			<div class="am-form-group">
			    <label class="block">对用户放开</label>
			    <input name="is_open_user" value="1" type="checkbox" data-off-text="否" data-on-text="是" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if((isset($data['is_open_user']) and $data['is_open_user'] == 1) or !isset($data['is_open_user'])): ?>checked="true"<?php endif; ?> />
			</div>

			<div class="am-form-group">
			    <label class="block">是否启用</label>
			    <input name="is_enable" value="1" type="checkbox" data-off-text="否" data-on-text="是" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if((isset($data['is_enable']) and $data['is_enable'] == 1) or !isset($data['is_enable'])): ?>checked="true"<?php endif; ?> />
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
<script>
$('.select-maxchecked').on('checkedOverflow.selected.amui', function() {
  Prompt('最多选择' + this.getAttribute('maxchecked') + '项');
});
</script>