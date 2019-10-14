<?php /*a:3:{s:94:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/customview/index.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/header.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
		<!-- form start -->
		<form class="am-form form-validation form-search" method="post" action="<?php echo MyUrl('admin/customview/index'); ?>" request-type="form">
			<div class="thin">
                <div class="am-input-group am-input-group-sm am-fl so">
                    <input type="text" autocomplete="off" name="keywords" class="am-radius" placeholder="标题/型号" value="<?php if(!empty($params['keywords'])): ?><?php echo htmlentities($params['keywords']); ?><?php endif; ?>" />
                    <span class="am-input-group-btn">
                        <button class="am-btn am-btn-default am-radius" type="submit" data-am-loading="{spinner:'circle-o-notch', loadingText:'搜索中...'}">搜索</button>
                    </span>
                </div>
                <label class="am-fl thin_sub more-submit">
                    更多筛选条件
                    <?php if(isset($params['is_more']) and $params['is_more'] == 1): ?>
                        <input type="checkbox" name="is_more" value="1" id="is_more" checked />
                        <i class="am-icon-angle-up"></i>
                    <?php else: ?>
                        <input type="checkbox" name="is_more" value="1" id="is_more" />
                        <i class="am-icon-angle-down"></i>
                    <?php endif; ?>
                </label>
            </div>
            <table class="so-list more-where <?php if(!isset($params['is_more'])): ?>none<?php endif; ?>">
                <tbody>
                	<tr>
                		<td>
                			<span>头部：</span>
							<select name="is_header" class="chosen-select" data-placeholder="包含头部...">
								<option value="-1">包含头部...</option>
								<?php foreach($common_is_header_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['is_header']) and $params['is_header'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
                		</td>
                		<td>
							<span>尾部：</span>
							<select name="is_footer" class="chosen-select" data-placeholder="包含尾部...">
								<option value="-1">包含尾部...</option>
								<?php foreach($common_is_footer_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['is_footer']) and $params['is_footer'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
                		</td>
                	</tr>
                	<tr>
                		<td>
                			<span>启用：</span>
                			<select name="is_enable" class="chosen-select" data-placeholder="是否启用...">
								<option value="-1">是否启用...</option>
								<?php foreach($common_is_enable_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['is_enable']) and $params['is_enable'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
                		</td>
                		<td>
                            <span>满屏：</span>
                            <select name="is_full_screen" class="chosen-select" data-placeholder="是否满屏...">
                                <option value="-1">是否满屏...</option>
                                <?php foreach($common_is_full_screen_list as $v): ?>
                                    <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['is_full_screen']) and $params['is_full_screen'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                	</tr>
                    <tr>
                        <td class="time">
                            <span>时间：</span>
                            <span>
                                <input type="text" autocomplete="off" name="time_start" class="am-form-field am-input-sm am-radius Wdate" placeholder="起始时间" value="<?php if(!empty($params['time_start'])): ?><?php echo htmlentities($params['time_start']); ?><?php endif; ?>" data-validation-message="日期格式有误" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd'})" autocomplete="off" /><i class="am-icon-calendar"></i>
                            </span>
                            <em class="text-grey">~</em>
                            <span>
                                <input type="text" autocomplete="off" name="time_end" class="am-form-field am-input-sm am-radius Wdate" placeholder="结束时间" value="<?php if(!empty($params['time_end'])): ?><?php echo htmlentities($params['time_end']); ?><?php endif; ?>" pattern="^[0-9]{4}-[0-9]{2}-[0-9]{2}$" data-validation-message="日期格式有误" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd'})" autocomplete="off" /><i class="am-icon-calendar"></i>
                            </span>
                        </td>
                        <td>
                            <button type="submit" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example" data-am-loading="{spinner:'circle-o-notch', loadingText:'搜索中...'}">搜索</button>
                            <a href="<?php echo MyUrl('admin/customview/index'); ?>" class="am-btn am-btn-warning am-radius am-btn-sm reset-submit">清除条件</a>
                        </td>
                    </tr>
                </tbody>
			</table>
		</form>
		<!-- form end -->

		<!-- operation start -->
		<div class="am-g m-t-15">
			<a href="<?php echo MyUrl('admin/customview/saveinfo'); ?>" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus"> 新增</a>
		</div>
		<!-- operation end -->

		<!-- list start -->
		<table class="am-table am-table-striped am-table-hover am-text-middle m-t-10">
			<thead>
				<tr>
					<th>标题</th>
					<th>启用</th>
					<th class="am-hide-sm-only">是否含头部</th>
					<th class="am-hide-sm-only">是否含尾部</th>
					<th class="am-hide-sm-only">是否满屏</th>
					<th class="am-hide-sm-only">访问次数</th>
					<th>更多</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($data_list)): foreach($data_list as $v): ?>
						<tr id="data-list-<?php echo htmlentities($v['id']); ?>" <?php if($v['is_enable'] == 0): ?>class="am-active"<?php endif; ?>>
							<td  class="td-title">
								<a href="<?php echo str_replace('admin.php', 'index.php', MyUrl('index/customview/index', array('id'=>$v['id']))); ?>" target="_blank" title="<?php echo htmlentities($v['title']); ?>"><?php echo htmlentities($v['title']); ?></a>
							</td>
							<td>
								<a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_enable'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/customview/statusupdate'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-state="<?php echo htmlentities($v['is_enable']); ?>" data-field="is_enable" data-is-update-status="1"></a>
							</td>
							<td class="am-hide-sm-only">
								<a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_header'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/customview/statusupdate'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-state="<?php echo htmlentities($v['is_header']); ?>" data-field="is_header"></a>
							</td>
							<td class="am-hide-sm-only">
								<a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_footer'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/customview/statusupdate'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-state="<?php echo htmlentities($v['is_footer']); ?>" data-field="is_footer"></a>
							</td>
							<td class="am-hide-sm-only">
								<a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_full_screen'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/customview/statusupdate'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-state="<?php echo htmlentities($v['is_full_screen']); ?>" data-field="is_full_screen"></a>
							</td>
							<td class="am-hide-sm-only"><?php echo htmlentities($v['access_count']); ?></td>
							<td>
								<span class="am-icon-caret-down c-p" data-am-modal="{target: '#my-popup<?php echo htmlentities($v['id']); ?>'}"> 查看更多</span>
								<div class="am-popup am-radius" id="my-popup<?php echo htmlentities($v['id']); ?>">
									<div class="am-popup-inner">
										<div class="am-popup-hd">
											<h4 class="am-popup-title">详情内容</h4>
											<span data-am-modal-close
											class="am-close">&times;</span>
										</div>
										<div class="am-popup-bd">
											<dl class="dl-content">
												<dt>标题</dt>
												<dd><?php echo htmlentities($v['title']); ?></dd>

												<dt>是否启用</dt>
												<dd><?php echo htmlentities($v['is_enable_text']); ?></dd>

												<dt>是否含头部</dt>
												<dd><?php echo lang('common_is_header_list')[$v['is_header']]['name']; ?></dd>

												<dt>是否含尾部</dt>
												<dd><?php echo lang('common_is_footer_list')[$v['is_footer']]['name']; ?></dd>

												<dt>是否满屏</dt>
												<dd><?php echo lang('common_is_full_screen_list')[$v['is_full_screen']]['name']; ?></dd>

												<dt>访问次数</dt>
												<dd><?php echo htmlentities($v['access_count']); ?></dd>

												<dt>创建时间</dt>
												<dd><?php echo htmlentities($v['add_time_time']); ?></dd>

												<dt>更新时间</dt>
												<dd><?php echo htmlentities($v['upd_time_time']); ?></dd>
											</dl>
										</div>
									</div>
								</div>
							</td>
							<td class="view-operation">
								<a href="<?php echo MyUrl('admin/customview/saveinfo', array('id'=>$v['id'])); ?>">
									<button class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-edit"> 编辑</button>
								</a>
								<button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/customview/Delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>"> 删除</button>
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

		<!-- page start -->
		<?php if(!empty($data_list)): ?>
			<?php echo $page_html; ?>
		<?php endif; ?>
		<!-- page end -->
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