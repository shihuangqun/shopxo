<?php /*a:5:{s:87:"/data/home/byu3076970001/htdocs/application/admin/view/default/goodscategory/index.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/header.html";i:1566177930;s:78:"/data/home/byu3076970001/htdocs/application/admin/view/default/lib/enable.html";i:1563161086;s:75:"/data/home/byu3076970001/htdocs/application/admin/view/default/lib/seo.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
            <button class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus tree-submit-add" data-am-modal="{target: '#data-save-win'}"> 新增</button>
        </div>
        <!-- operation end -->

        <!-- save win start -->
        <div class="am-popup am-radius" id="data-save-win">
			<div class="am-popup-inner">
				<div class="am-popup-hd">
					<h4 class="am-popup-title" data-add-title="分类添加" data-edit-title="分类编辑">分类添加</h4>
					<span data-am-modal-close class="am-close">&times;</span>
				</div>
				<div class="am-popup-bd">
					<!-- form start -->
					<form class="am-form form-validation admin-save" action="<?php echo MyUrl('admin/goodscategory/save'); ?>" method="POST" request-type="ajax-reload" request-value="">
						<div class="am-form-group">
							<label class="block">父级</label>
							<select name="pid" class="am-radius c-p chosen-select forth-selection-form-category" data-placeholder="可选择..." data-validation-message="请选择商品分类">
	                            <option value="0">可选择...</option>
	                            <?php if(!empty($goods_category_list)): foreach($goods_category_list as $v): ?>
	                                    <option value="<?php echo htmlentities($v['id']); ?>">一级 - <?php echo htmlentities($v['name']); ?></option>
	                                    <?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
	                                            <option style="padding-left: 30px;" value="<?php echo htmlentities($vs['id']); ?>">二级 - <?php echo htmlentities($vs['name']); ?></option>
	                                            <?php if(!empty($vs['items'])): foreach($vs['items'] as $vss): ?>
	                                                    <option style="padding-left: 60px;" value="<?php echo htmlentities($vss['id']); ?>">三级 - <?php echo htmlentities($vss['name']); ?></option>
	                                                <?php endforeach; ?>
	                                            <?php endif; ?>
	                                        <?php endforeach; ?>
	                                    <?php endif; ?>
	                                <?php endforeach; ?>
	                            <?php endif; ?>
	                        </select>
	                    </div>

						<div class="am-form-group am-form-file">
							<label class="block">icon图标</label>
							<ul class="plug-file-upload-view goods-category-icon-images-view" data-form-name="icon" data-max-number="1" data-dialog-type="images">
								<li>
									<input type="hidden" name="icon" value="" />
									<img src="<?php echo htmlentities($attachment_host); ?>/static/admin/default/images/default-images.jpg" />
									<i>×</i>
								</li>
							</ul>
							<div class="plug-file-upload-submit" data-view-tag="ul.goods-category-icon-images-view">+上传图片</div>
						</div>
						<div class="am-form-group am-form-file">
							<label class="block">大图片</label>
							<ul class="plug-file-upload-view goods-category-big_images-images-view" data-form-name="big_images" data-max-number="1" data-dialog-type="images">
								<li>
									<input type="hidden" name="big_images" value="" />
									<img src="<?php echo htmlentities($attachment_host); ?>/static/admin/default/images/default-images.jpg" />
									<i>×</i>
								</li>
							</ul>
							<div class="plug-file-upload-submit" data-view-tag="ul.goods-category-big_images-images-view">+上传图片</div>
						</div>
						<div class="am-form-group">
							<label>背景色</label>
							<input type="hidden" name="bg_color" value="" />
							<button class="am-btn am-btn-default am-btn-xs colorpicker-submit bg-color-tag am-btn-block bk-cr-white t-r" type="button" data-input-tag="button.bg-color-tag" data-color-tag="input[name='bg_color']" data-color-style="background-color">
								<img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/colorpicker.png" />
							</button>
						</div>
						<div class="am-form-group">
							<label>名称</label>
							<input type="text" placeholder="名称" name="name" minlength="2" maxlength="16" data-validation-message="名称格式 2~16 个字符" class="am-radius" required />
						</div>
						<div class="am-form-group">
							<label>副名称</label>
							<input type="text" placeholder="副名称" name="vice_name" minlength="0" maxlength="60" data-validation-message="副名称最大60个字符" class="am-radius" />
						</div>
						<div class="am-form-group">
							<label>描述</label>
							<textarea rows="5" name="describe" maxlength="200" class="am-radius" placeholder="描述" data-validation-message="描述最大200个字符"></textarea>
						</div>
						<div class="am-form-group">
						    <label>首页推荐</label>
						    <div>
						        <?php foreach($common_is_text_list as $v): ?>
						            <label class="am-radio-inline m-r-10">
						                <input type="radio" name="is_home_recommended" value="<?php echo htmlentities($v['id']); ?>" data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
						            </label>
						        <?php endforeach; ?>
						    </div>
						</div>
						<div class="am-form-group">
							<label>顺序</label>
							<input type="number" placeholder="顺序" name="sort" min="0" max="255" data-validation-message="顺序 0~255 之间的数值" class="am-radius" value="0" required />
						</div>
						<!-- 是否启用 开始 -->
<div class="am-form-group">
    <label>是否启用</label>
    <div>
        <?php foreach(lang('common_is_enable_list') as $v): ?>
            <label class="am-radio-inline m-r-10">
                <input type="radio" name="is_enable" value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['is_enable']) and $data['is_enable'] == $v['id']): ?>checked="checked"<?php else: if(!isset($data['is_enable']) and isset($v['checked']) and $v['checked'] == true): ?>checked="checked"<?php endif; ?><?php endif; ?> data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
            </label>
        <?php endforeach; ?>
    </div>
</div>
<!-- 是否启用 结束 -->
						<div class="am-alert am-alert-secondary">
							<div class="am-form-group">
    <label>SEO标题<span class="am-form-group-label-tips">一般不超过80个字符</span></label>
    <input type="text" name="seo_title" placeholder="SEO标题" maxlength="100" data-validation-message="SEO标题格式 最多80个字符" class="am-radius" <?php if(!empty($data['seo_title'])): ?> value="<?php echo htmlentities($data['seo_title']); ?>"<?php endif; ?> />
</div>
<div class="am-form-group">
    <label>SEO关键字<span class="am-form-group-label-tips">一般不超过100个字符，多个关键字以半圆角逗号 [ , ] 隔开</span></label>
    <input type="text" name="seo_keywords" placeholder="SEO关键字" maxlength="130" data-validation-message="SEO关键字格式 最多130个字符" class="am-radius" <?php if(!empty($data['seo_keywords'])): ?> value="<?php echo htmlentities($data['seo_keywords']); ?>"<?php endif; ?> />
</div>
<div class="am-form-group">
    <label>SEO描述<span class="am-form-group-label-tips">一般不超过200个字符</span></label>
    <textarea rows="4" name="seo_desc" maxlength="230" class="am-radius" placeholder="SEO描述" data-validation-message="SEO描述格式 最多230个字符"><?php if(!empty($data['seo_desc'])): ?><?php echo htmlentities($data['seo_desc']); ?><?php endif; ?></textarea>
</div>
						</div>
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

        <!-- list start -->
		<div id="tree" class="m-t-15" data-rank="3" data-additional='[{"field":"bg_color", "value":"", "type":"input"}, {"field":"bg_color", "value":"", "type":"css", "tag":"button.colorpicker-submit", "style":"background-color"}, {"field":"icon", "value":"", "type":"input"}, {"field":"icon_url", "value":"<?php echo htmlentities($attachment_host); ?>/static/admin/default/images/default-images.jpg", "type":"attr", "tag":"ul.goods-category-icon-images-view li img", "style":"src"}, {"field":"big_images", "value":"", "type":"input"}, {"field":"big_images_url", "value":"<?php echo htmlentities($attachment_host); ?>/static/admin/default/images/default-images.jpg", "type":"attr", "tag":"ul.goods-category-big_images-images-view li img", "style":"src"}, {"field":"vice_name", "value":"", "type":"input"}, {"field":"describe", "value":"", "type":"textarea"}, {"field":"is_home_recommended", "value":"0", "type":"input"}, {"field":"seo_title", "value":"", "type":"input"}, {"field":"seo_keywords", "value":"", "type":"input"}, {"field":"seo_desc", "value":"", "type":"textarea"}]'>
			<div class="m-t-30 t-c">
				<img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/loading.gif" />
				<p>处理中...</p>
			</div>
		</div>
		<!-- list end -->
	</div>
</div>
<!-- right content end -->
		
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
	Tree(0, "<?php echo MyUrl('admin/goodscategory/getnodeson'); ?>", 0, 1, 1);
</script>