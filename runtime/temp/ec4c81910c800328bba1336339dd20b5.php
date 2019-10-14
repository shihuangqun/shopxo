<?php /*a:3:{s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/payment/index.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/header.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo config('shopxo.default_charset', 'utf-8'); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
	<title>ShopXO后台管理系统</title>
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
            <a href="javascript:;" class="am-btn am-btn-secondary am-btn-xs m-l-10 am-icon-cloud-upload am-radius" data-am-modal="{target: '#payment-upload-win'}"> 上传</a>
        </div>
        <!-- operation end -->

        <!-- list start -->
        <table class="am-table am-table-striped am-table-hover am-text-middle m-t-10">
            <thead>
                <tr>
                    <th>名称</th>
                    <th class="am-hide-sm-only">LOGO</th>
                    <th class="am-hide-sm-only">适用版本</th>
                    <th>适用终端</th>
                    <th class="am-hide-sm-only">作者</th>
                    <th class="am-hide-sm-only th-desc">描述</th>
                    <th>启用</th>
                    <th>用户放开</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data_list)): foreach($data_list as $v): ?>
                        <tr id="data-list-<?php echo htmlentities($v['payment']); ?>" <?php if($v['is_install'] == 0): ?>class="am-warning"<?php elseif($v['is_enable'] == 0): ?>class="am-active"<?php endif; ?> >
                            <td>
                                <?php echo htmlentities($v['name']); if(!empty($v['version'])): ?>
                                    <p class="td-version">v <?php echo htmlentities($v['version']); ?></p>
                                <?php endif; ?>
                            </td>
                            <td class="am-hide-sm-only">
                                <?php if(!empty($v['logo'])): ?>
                                    <a href="<?php echo htmlentities($v['logo']); ?>" target="_blank">
                                        <img src="<?php echo htmlentities($v['logo']); ?>" class="am-radius" width="100" />
                                    </a>
                                <?php else: ?>
                                    <span class="cr-ddd">暂无LOGO</span>
                                <?php endif; ?>
                            </td>
                            <td class="am-hide-sm-only">
                                <?php if(empty($v['apply_version'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['apply_version']); ?><?php endif; ?>
                            </td>
                            <td>
                                <?php if(!empty($v['apply_terminal'])): foreach($v['apply_terminal'] as $terminal_k=>$terminal_v): ?>
                                        <?php echo htmlentities($common_platform_type[$terminal_v]['name']); if($terminal_k < count($v['apply_terminal'])-1): ?><br /><?php endif; ?>
                                    <?php endforeach; else: ?>
                                    <span class="cr-ddd">未填写</span>
                                <?php endif; ?>
                            </td>
                            <td class="am-hide-sm-only">
                                <?php if(empty($v['author'])): ?>
                                    <span class="cr-ddd">未填写</span>
                                <?php else: ?>
                                    <?php echo htmlentities($v['author']); if(!empty($v['author_url'])): ?>
                                        <a href="<?php echo htmlentities($v['author_url']); ?>" target="_blank">
                                            <i class="am-icon-external-link"></i>
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </td>
                            <td class="am-hide-sm-only td-desc">
                                <?php if(empty($v['desc'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo $v['desc']; ?><?php endif; ?>
                            </td>
                            <td>
                                <?php if($v['is_install'] == 1): ?>
                                    <a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_enable'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/payment/StatusUpdate'); ?>" data-id="<?php echo htmlentities($v['payment']); ?>" data-field="is_enable" data-state="<?php echo htmlentities($v['is_enable']); ?>" data-is-update-status="1"></a>
                                <?php else: ?>
                                    <span class="cr-ddd">未安装</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($v['is_install'] == 1): ?>
                                    <a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_open_user'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/payment/StatusUpdate'); ?>" data-id="<?php echo htmlentities($v['payment']); ?>" data-field="is_open_user" data-state="<?php echo htmlentities($v['is_open_user']); ?>"></a>
                                <?php else: ?>
                                    <span class="cr-ddd">未安装</span>
                                <?php endif; ?>
                            </td>
                            <td class="view-operation">
                                <?php if($v['is_install'] == 0): ?>
                                    <button class="am-btn am-btn-success am-btn-xs am-radius am-icon-cubes submit-ajax" data-url="<?php echo MyUrl('admin/payment/install'); ?>" data-id="<?php echo htmlentities($v['payment']); ?>" data-view="reload" data-msg="安装进行中、确认操作吗？"> 安装</button>

                                    <?php if(!in_array($v['payment'], $cannot_deleted_list)): ?>
                                        <button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/payment/delete'); ?>" data-id="<?php echo htmlentities($v['payment']); ?>"> 删除</button>
                                    <?php endif; else: ?>
                                    <a href="<?php echo MyUrl('admin/payment/saveinfo', array('id'=>$v['id'])); ?>">
                                        <button class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-edit"> 编辑</button>
                                    </a>

                                    <button class="am-btn am-btn-warning am-btn-xs am-radius am-icon-remove submit-ajax" data-url="<?php echo MyUrl('admin/payment/uninstall'); ?>" data-id="<?php echo htmlentities($v['payment']); ?>" data-view="reload" data-msg="卸载后不可恢复、确认操作吗？"> 卸载</button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <?php if(empty($data_list)): ?>
            <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
        <?php endif; ?>
        <!-- list end -->

        <!-- upload start -->
        <div class="am-popup am-radius" id="payment-upload-win">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">上传</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                    <!-- win form start -->
                    <form class="am-form form-validation" action="<?php echo MyUrl('admin/payment/upload'); ?>" method="POST" request-type="ajax-reload" enctype="multipart/form-data">
                        <div class="am-alert am-radius am-alert-tips m-t-0" data-am-alert>
                            <p class="m-t-10">
                                1 类名必须于文件名一致（去除 .php ），如 Alipay.php 则取 Alipay<br />
                                2 类必须定义三个方法<br />
                                &nbsp;&nbsp;&nbsp; 2.1 Config 配置方法<br />
                                &nbsp;&nbsp;&nbsp; 2.2 Pay 支付方法<br />
                                &nbsp;&nbsp;&nbsp; 2.3 Respond 回调方法<br />
                                &nbsp;&nbsp;&nbsp; 2.4 Refund 退款方法（可选）
                            </p>
                            <p class="cr-red">PS：以上条件不满足则无法查看插件，将插件放入.zip压缩包中、支持一个压缩中包含多个支付插件</p>
                        </div>
                        <div class="am-form-group am-form-file">
                            <button type="button" class="am-btn am-btn-default am-btn-sm am-radius"><i class="am-icon-cloud-upload"></i> 选择文件</button>
                            <input type="file" name="file" class="file-event" data-tips-tag="#form-payment-tips" data-validation-message="请选择需要上传的文件" accept=".zip" multiple required />
                            <div id="form-payment-tips" class="am-margin-top-xs"></div>
                        </div>
                        <div class="am-form-group am-form-group-refreshing">
                            <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认</button>
                        </div>
                    </form>
                    <!-- win form end -->
                </div>
            </div>
        </div>
        <!-- upload end -->
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