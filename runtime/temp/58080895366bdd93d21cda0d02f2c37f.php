<?php /*a:4:{s:82:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/power\index.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/public\header.html";i:1566177929;s:82:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/lib\is_show.html";i:1563161086;s:84:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/public\footer.html";i:1563161086;}*/ ?>
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
		<!-- operation start -->
		<div class="am-g">
			<button class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus submit-add" data-am-modal="{target: '#power-save-win'}"> 新增</button>
		</div>
		<!-- operation end -->

		<!-- save win start -->
		<div class="am-popup am-radius" id="power-save-win">
			<div class="am-popup-inner">
				<div class="am-popup-hd">
					<h4 class="am-popup-title" data-add-title="权限添加" data-edit-title="权限编辑">权限添加</h4>
					<span data-am-modal-close class="am-close">&times;</span>
				</div>
				<div class="am-popup-bd">
					<!-- form start -->
					<form class="am-form form-validation admin-save" action="<?php echo MyUrl('admin/power/powersave'); ?>" method="POST" request-type="ajax-reload" request-value="">
						<div class="am-form-group">
							<label>栏目级别</label>
							<select  class="am-radius c-p chosen-select" name="pid" data-validation-message="栏目级别选择错误">
								<option value="0">一级栏目...</option>
								<?php foreach($data as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="am-form-group">
							<label>权限名称</label>
							<input type="text" placeholder="权限名称" name="name" minlength="2" maxlength="16" data-validation-message="权限名称格式 2~8 个字符之间" class="am-radius" required />
						</div>
						<div class="am-form-group">
							<label>控制器名称</label>
							<input type="text" placeholder="控制器名称" name="control" pattern="<?php echo lang('common_regex_control'); ?>"  data-validation-message="控制器名格式 1~30 个字符之间（必须以字母开始，可以是字母数字下划线）" class="am-radius" required />
						</div>
						<div class="am-form-group">
							<label>方法名称</label>
							<input type="text" placeholder="方法名称" name="action" pattern="<?php echo lang('common_regex_action'); ?>"  data-validation-message="方法名格式 1~30 个字符之间（必须以字母开始，可以是字母数字下划线）" class="am-radius" required />
						</div>
						<div class="am-form-group">
							<label>图标class<span class="am-form-group-label-tips">参考 http://www.iconfont.cn/ 将icon放到 [ /static/admin/default/css/iconfontmenu.css ] 文件中</span></label>
							<input type="text" placeholder="图标class" name="icon" maxlength="60" data-validation-message="图标格式 0~30 个字符之间" class="am-radius" />
						</div>
						<div class="am-form-group">
							<label>顺序</label>
							<input type="number" placeholder="顺序" name="sort" min="0" max="255" data-validation-message="顺序 0~255 之间的数值" class="am-radius" value="0" required />
						</div>
						<!-- 是否显示 开始 -->
<div class="am-form-group">
	<label>是否显示</label>
	<div>
		<?php foreach(lang('common_is_show_list') as $v): ?>
			<label class="am-radio-inline m-r-10">
				<input type="radio" name="is_show" value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['is_show']) and $data['is_show'] == $v['id']): ?>checked="checked"<?php else: if(!isset($data['is_show']) and isset($v['checked']) and $v['checked'] == true): ?>checked="checked"<?php endif; ?><?php endif; ?> data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
			</label>
		<?php endforeach; ?>
	</div>
</div>
<!-- 是否显示 结束 -->
						<div class="am-form-group am-form-group-refreshing">
							<input type="hidden" name="id" />
							<button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
						</div>
					</form>
					<!-- form end -->
				</div>
			</div>
		</div>
		<!-- save win end -->

        <!-- content start -->
		<ul class="tree-list p-0 m-t-15">
			<?php foreach($data as $v): ?>
				<li id="data-list-<?php echo htmlentities($v['id']); ?>" <?php if($v['is_show'] == 0): ?>class="bk-cr-ffd"<?php endif; ?>>
					<?php if(!empty($v['item'])): ?>
						<i class="am-icon-plus c-p m-r-5"></i>
						<label class="c-p">
					<?php else: ?>
						<label class="c-p m-l-20">
					<?php endif; ?>
						<span><?php if(!empty($v['icon'])): ?><span class="iconfont <?php echo htmlentities($v['icon']); ?>"></span><?php endif; ?> <?php echo htmlentities($v['name']); ?></span>
					</label>
					<div class="fr m-r-20 list-submit">
						<span class="am-icon-edit am-icon-md c-p submit-edit <?php if(!empty($v['item'])): ?>m-r-5<?php endif; ?>" data-am-modal="{target: '#power-save-win'}" data-json='<?php echo json_encode($v); ?>' data-tag="power-save-win" data-item="<?php if(!empty($v['item'])): ?>ok<?php else: ?>no<?php endif; ?>"></span>
						<?php if(empty($v['item'])): ?>
							<span class="am-icon-trash-o am-icon-md c-p m-l-20 m-r-15 submit-delete" data-url="<?php echo MyUrl('admin/power/powerdelete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>"></span>
						<?php endif; ?>
					</div>
				</li>
				<?php if(!empty($v['item'])): ?>
					<ul class="list-find p-0 m-t-5" style="display:none;">
						<?php foreach($v['item'] as $vs): ?>
							<li id="data-list-<?php echo htmlentities($vs['id']); ?>" <?php if($vs['is_show'] == 0): ?>class="bk-cr-ffd"<?php endif; ?>>
								<label class="c-p">
									<span><?php if(!empty($vs['icon'])): ?><span class="iconfont <?php echo htmlentities($vs['icon']); ?>"></span><?php endif; ?> <?php echo htmlentities($vs['name']); ?></span>
								</label>
								<div class="fr m-l-10 find-submit">
									<span class="am-icon-edit am-icon-sm c-p submit-edit" data-am-modal="{target: '#power-save-win'}" data-json='<?php echo json_encode($vs); ?>' data-tag="power-save-win" data-item="no"></span>
									<span class="am-icon-trash-o am-icon-sm c-p m-l-10 m-r-10 submit-delete" data-url="<?php echo MyUrl('admin/power/powerdelete'); ?>" data-id="<?php echo htmlentities($vs['id']); ?>"></span>
								</div>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
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