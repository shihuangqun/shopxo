<?php /*a:4:{s:86:"/data/home/byu3076970001/htdocs/application/admin/view/default/pluginsadmin/index.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/header.html";i:1566177930;s:84:"/data/home/byu3076970001/htdocs/application/admin/view/default/pluginsadmin/nav.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
        <!-- nav start -->
        <ul class="am-nav am-nav-pills table-nav">
    <li <?php if($view_type == 'home'): ?>class="am-active"<?php endif; ?>>
        <a href="<?php echo MyUrl('admin/pluginsadmin/index', ['view_type'=>'home']); ?>">应用管理</a>
    </li>
    <li <?php if($view_type == 'upload'): ?>class="am-active"<?php endif; ?>>
        <a href="<?php echo MyUrl('admin/pluginsadmin/index', ['view_type'=>'upload']); ?>">上传安装</a>
    </li>
</ul>
        <!-- nav end -->

        <!-- operation start -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="am-g m-b-10 m-t-10">
                <a href="<?php echo MyUrl('admin/pluginsadmin/saveinfo'); ?>" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus"> 新增</a>
            </div>
        <?php endif; ?>
        <!-- operation end -->

        <?php if(!empty($data_list)): ?>
            <ul data-am-widget="gallery" class="am-gallery am-avg-sm-1 am-avg-md-2 am-avg-lg-3 am-gallery-bordered" data-am-gallery="{}">
                <?php foreach($data_list as $v): ?>
                    <li>
                        <div id="data-list-<?php echo htmlentities($v['id']); ?>" class="am-gallery-item <?php if($v['is_enable'] != 1): ?>am-active<?php endif; ?>">
                            <img src="<?php echo htmlentities($v['logo']); ?>" class="icon" />
                            <div class="base">
                                <h3 class="name"><?php echo htmlentities($v['name']); ?></h3>
                                <p>作者：<?php echo htmlentities($v['author']); ?></p>
                                <p>主页：<a href="<?php echo htmlentities($v['author_url']); ?>" target="_blank"><?php echo htmlentities($v['author_url']); ?></a></p>
                                <p>版本：<?php echo htmlentities($v['version']); ?></p>
                            </div>
                            <div class="am-gallery-desc"><?php echo htmlentities($v['desc']); ?></div>
                            <div class="operation">
                                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                    <a href="<?php echo MyUrl('admin/pluginsadmin/saveinfo', array('id'=>$v['id'])); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-edit" title="编辑"></a>
                                    <a href="<?php echo MyUrl('admin/pluginsadmin/download', array('id'=>$v['id'])); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-download" title="打包"></a>
                                <?php endif; ?>

                                <a href="<?php echo PluginsAdminUrl($v['plugins'], 'admin', 'index'); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-gear" title="设置"></a>
                                <button class="am-btn am-btn-default am-btn-xs am-radius am-icon-remove submit-delete-modal" data-url="<?php echo MyUrl('admin/pluginsadmin/delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" title="删除"></button>
                                <a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_enable'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/pluginsadmin/statusupdate'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-state="<?php echo htmlentities($v['is_enable']); ?>" data-is-update-status="1" title="状态"></a>

                                <?php if(isset($v['is_home']) and $v['is_home'] == true): ?>
                                    <a href="<?php echo PluginsHomeUrl($v['plugins'], 'index', 'index'); ?>" class="am-btn am-btn-default am-btn-xs am-radius am-icon-home" title="首页" target="_blank"></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- page start -->
            <?php if(!empty($data_list)): ?>
                <?php echo $page_html; ?>
            <?php endif; ?>
            <!-- page end -->

            <div class="am-modal am-modal-no-btn" tabindex="-1" id="plugins-delete-modal">
                <div class="am-modal-dialog">
                    <div class="am-modal-hd">
                        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                    </div>
                    <div class="am-modal-bd am-margin-top-sm">
                        <div class="am-alert  am-text-left" data-am-alert>
                            <p>1. 仅删除应用<span class="am-text-warning">（仅删除应用代码，保留应用数据）</span></p>
                            <p>2. 删除应用并删除数据<span class="am-text-warning">（将删除应用代码和应用数据）</span></p>
                        </div>
                        <p class="am-text-danger am-margin-top">PS：以下操作后均不可恢复，请谨慎操作！</p>
                        <div class="am-margin-top-sm">
                            <button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-circle-o submit-ajax" data-url="<?php echo MyUrl('admin/pluginsadmin/delete'); ?>" data-id="0" data-value="1" data-view="reload" data-msg="删除后不可恢复、确认操作吗？" title="删除"> 删除应用和数据</button>
                            <button class="am-btn am-btn-warning am-btn-xs am-radius am-icon-remove submit-ajax" data-url="<?php echo MyUrl('admin/pluginsadmin/delete'); ?>" data-id="0" data-value="0" data-view="reload" data-msg="删除后不可恢复、确认操作吗？" title="删除"> 仅删除应用</button>

                            <button class="am-btn am-btn-success am-btn-xs am-radius am-icon-reply" data-am-modal-close> 再考虑一下</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="table-no">
                <i class="am-icon-warning"></i> 还没有相关应用
                <a href="<?php echo htmlentities($store_url); ?>" class="am-margin-left-xs">到应用商店看看 >></a>
            </div>
        <?php endif; ?>
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