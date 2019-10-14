<?php /*a:6:{s:94:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/navigation/index.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/header.html";i:1563161086;s:92:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/navigation/nav.html";i:1563161086;s:89:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/lib/is_show.html";i:1563161086;s:100:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/lib/is_new_window_open.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
		<!-- table nav start -->
		<ul class="am-nav am-nav-pills table-nav m-b-10">
	<li <?php if($nav_type == 'header'): ?>class="am-active"<?php endif; ?> data-type="header">
		<a href="<?php echo MyUrl('admin/navigation/index', ['nav_type'=>'header']); ?>">中间导航</a>
	</li>
	<li <?php if($nav_type == 'footer'): ?>class="am-active"<?php endif; ?> data-type="footer">
		<a href="<?php echo MyUrl('admin/navigation/index', ['nav_type'=>'footer']); ?>">底部导航</a>
	</li>
</ul>
		<!-- table nav end -->

		<!-- operation start -->
		<div class="am-g">
			<button class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus submit-add" data-am-modal="{target: '#nav-custom-save-win'}" data-tag="nav-custom-save-win"> 自定义</button>
			<button class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus submit-add" data-am-modal="{target: '#nav-article-save-win'}" data-tag="nav-article-save-win"> 文章</button>
			<button class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus submit-add" data-am-modal="{target: '#nav-customview-save-win'}" data-tag="nav-customview-save-win"> 自定义页面</button>
			<button class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus submit-add" data-am-modal="{target: '#nav-goods_category-save-win'}" data-tag="nav-goods_category-save-win"> 商品分类</button>
		</div>
		<!-- operation end -->

		<!-- list start -->
		<table class="am-table am-table-striped am-table-hover am-text-middle m-t-10">
			<thead>
				<tr>
					<th>导航名称</th>
					<th>导航数据类型</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($data_list)): foreach($data_list as $v): ?>
						<tr id="data-list-<?php echo htmlentities($v['id']); ?>" <?php if($v['is_show'] == 0): ?>class="am-active"<?php endif; ?>>
							<td><?php echo htmlentities($v['name']); ?>
								<a href="<?php echo htmlentities($v['url']); ?>" target="_blank">
									<i class="am-icon-external-link"></i>
								</a>
							</td>
							<td><?php echo lang('common_nav_type_list')[$v['data_type']]; ?></td>
							<td>
								<a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_show'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/navigation/statusupdate'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-state="<?php echo htmlentities($v['is_show']); ?>" data-is-update-status="1"></a>
							</td>
							<td>
								<button class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-edit submit-edit" data-am-modal="{target: '#nav-<?php echo htmlentities($v['data_type']); ?>-save-win'}" data-json='<?php echo json_encode($v); ?>' data-tag="nav-<?php echo htmlentities($v['data_type']); ?>-save-win"> 编辑</button>
								<button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/navigation/delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>"> 删除</button>
							</td>
						</tr>
						<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
								<tr id="data-list-<?php echo htmlentities($vs['id']); ?>" <?php if($vs['is_show'] == 0): ?>class="am-active"<?php endif; ?>>
									<td class="p-l-30"><?php echo htmlentities($vs['name']); ?>
										<a href="<?php echo htmlentities($vs['url']); ?>" target="_blank">
											<i class="am-icon-external-link"></i>
										</a>
									</td>
									<td><?php echo lang('common_nav_type_list')[$vs['data_type']]; ?></td>
									<td>
										<a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($vs['is_show'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/navigation/statusupdate'); ?>" data-id="<?php echo htmlentities($vs['id']); ?>" data-state="<?php echo htmlentities($vs['is_show']); ?>" data-is-update-status="1"></a>
									</td>
									<td>
										<button class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-edit submit-edit" data-am-modal="{target: '#nav-<?php echo htmlentities($vs['data_type']); ?>-save-win'}" data-json='<?php echo json_encode($vs); ?>' data-tag="nav-<?php echo htmlentities($vs['data_type']); ?>-save-win"> 编辑</button>
										<button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/navigation/delete'); ?>" data-id="<?php echo htmlentities($vs['id']); ?>"> 删除</button>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>
		<?php if(empty($data_list)): ?>
            <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
        <?php endif; ?>
		<!-- list end -->

		<!-- custom save win start -->
		<div class="am-popup am-radius" id="nav-custom-save-win">
			<div class="am-popup-inner">
				<div class="am-popup-hd">
					<h4 class="am-popup-title" data-add-title="自定义导航添加" data-edit-title="自定义导航编辑">自定义导航添加</h4>
					<span data-am-modal-close class="am-close">&times;</span>
				</div>
				<div class="am-popup-bd">
					<!-- form start -->
					<form class="am-form form-validation" action="<?php echo MyUrl('admin/navigation/save'); ?>" method="POST" request-type="ajax-reload" request-value="">
						<div class="am-form-group">
							<label>导航级别</label>
							<select class="am-radius c-p chosen-select" name="pid" data-placeholder="一级栏目..." data-validation-message="导航级别选择错误">
								<option value="">一级栏目...</option>
								<?php foreach($nav_header_pid_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="am-form-group">
							<label>导航名称</label>
							<input type="text" placeholder="导航名称" name="name" minlength="2" maxlength="16" data-validation-message="导航名称格式 2~16 个字符" class="am-radius" required />
						</div>
						<div class="am-form-group">
							<label>url地址<span class="am-form-group-label-tips">带http://或https://</span></label>
							<input type="url" placeholder="url地址" name="url"  data-validation-message="url格式有误" class="am-radius" required />
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
						<!-- 是否新窗口打开 开始 -->
<div class="am-form-group">
	<label>是否新窗口打开</label>
	<div>
        <?php foreach(lang('common_is_new_window_open_list') as $v): ?>
			<label class="am-radio-inline m-r-10">
				<input type="radio" name="is_new_window_open" value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['is_new_window_open']) and $data['is_new_window_open'] == $v['id']): ?>checked="checked"<?php else: if(!isset($data['is_new_window_open']) and isset($v['checked']) and $v['checked'] == true): ?>checked="checked"<?php endif; ?><?php endif; ?> data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
			</label>
		<?php endforeach; ?>
	</div>
</div>
<!-- 是否新窗口打开 结束 -->
						<div class="am-form-group am-form-group-refreshing">
							<input type="hidden" name="id" />
							<input type="hidden" name="data_type" value="custom" />
							<input type="hidden" name="nav_type" value="<?php echo htmlentities($nav_type); ?>" />
							<button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
						</div>
					</form>
					<!-- form end -->
				</div>
			</div>
		</div>
		<!-- custom save win end -->

		<!-- article save win start -->
		<div class="am-popup am-radius" id="nav-article-save-win">
			<div class="am-popup-inner">
				<div class="am-popup-hd">
					<h4 class="am-popup-title" data-add-title="文章导航添加" data-edit-title="文章导航编辑">文章导航添加</h4>
					<span data-am-modal-close class="am-close">&times;</span>
				</div>
				<div class="am-popup-bd">
					<!-- form start -->
					<form class="am-form form-validation-article" action="<?php echo MyUrl('admin/navigation/save'); ?>" method="POST" request-type="ajax-reload" request-value="">
						<div class="am-form-group">
							<label>导航级别</label>
							<select class="am-radius c-p chosen-select" name="pid" data-placeholder="一级栏目..." data-validation-message="导航级别选择错误">
								<option value="">一级栏目...</option>
								<?php foreach($nav_header_pid_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="am-form-group">
							<label>文章</label>
							<select class="am-radius c-p chosen-select" name="value" data-placeholder="请选择..." data-validation-message="文章选择有误" required>
								<option value="">请选择...</option>
								<?php foreach($article_list as $v): ?>
									<optgroup label="<?php echo htmlentities($v['name']); ?>">
										<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
												<option value="<?php echo htmlentities($vs['id']); ?>"><?php echo htmlentities($vs['title']); ?></option>
											<?php endforeach; ?>
										<?php endif; ?>
									</optgroup>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="am-form-group">
							<label>导航名称<span class="am-form-group-label-tips">默认文章名称</span></label>
							<input type="text" placeholder="导航名称" name="name" maxlength="16" data-validation-message="导航名称格式 2~16 个字符" class="am-radius" />
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
						<!-- 是否新窗口打开 开始 -->
<div class="am-form-group">
	<label>是否新窗口打开</label>
	<div>
        <?php foreach(lang('common_is_new_window_open_list') as $v): ?>
			<label class="am-radio-inline m-r-10">
				<input type="radio" name="is_new_window_open" value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['is_new_window_open']) and $data['is_new_window_open'] == $v['id']): ?>checked="checked"<?php else: if(!isset($data['is_new_window_open']) and isset($v['checked']) and $v['checked'] == true): ?>checked="checked"<?php endif; ?><?php endif; ?> data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
			</label>
		<?php endforeach; ?>
	</div>
</div>
<!-- 是否新窗口打开 结束 -->
						<div class="am-form-group am-form-group-refreshing">
							<input type="hidden" name="id" />
							<input type="hidden" name="data_type" value="article" />
							<input type="hidden" name="nav_type" value="<?php echo htmlentities($nav_type); ?>" />
							<button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
						</div>
					</form>
					<!-- form end -->
				</div>
			</div>
		</div>
		<!-- article save win end -->

		<!-- customview save win start -->
		<div class="am-popup am-radius" id="nav-customview-save-win">
			<div class="am-popup-inner">
				<div class="am-popup-hd">
					<h4 class="am-popup-title" data-add-title="自定义页面导航添加" data-edit-title="自定义页面导航编辑">自定义页面导航添加</h4>
					<span data-am-modal-close
					class="am-close">&times;</span>
					</div>
				<div class="am-popup-bd">
					<!-- form start -->
					<form class="am-form form-validation-customview" action="<?php echo MyUrl('admin/navigation/save'); ?>" method="POST" request-type="ajax-reload" request-value="">
						<div class="am-form-group">
							<label>导航级别</label>
							<select class="am-radius c-p chosen-select" name="pid" data-placeholder="一级栏目..." data-validation-message="导航级别选择错误">
								<option value="">一级栏目...</option>
								<?php foreach($nav_header_pid_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="am-form-group">
							<label>自定义页面</label>
							<select class="am-radius c-p chosen-select" name="value" data-placeholder="请选择..." data-validation-message="自定义页面选择有误" required>
								<option value="">请选择...</option>
								<?php foreach($customview_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['title']); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="am-form-group">
							<label>导航名称<span class="am-form-group-label-tips">默认自定义页面名称</span></label>
							<input type="text" placeholder="导航名称" name="name" maxlength="16" data-validation-message="导航名称格式 2~16 个字符" class="am-radius" />
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
						<!-- 是否新窗口打开 开始 -->
<div class="am-form-group">
	<label>是否新窗口打开</label>
	<div>
        <?php foreach(lang('common_is_new_window_open_list') as $v): ?>
			<label class="am-radio-inline m-r-10">
				<input type="radio" name="is_new_window_open" value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['is_new_window_open']) and $data['is_new_window_open'] == $v['id']): ?>checked="checked"<?php else: if(!isset($data['is_new_window_open']) and isset($v['checked']) and $v['checked'] == true): ?>checked="checked"<?php endif; ?><?php endif; ?> data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
			</label>
		<?php endforeach; ?>
	</div>
</div>
<!-- 是否新窗口打开 结束 -->
						<div class="am-form-group am-form-group-refreshing">
							<input type="hidden" name="id" />
							<input type="hidden" name="data_type" value="customview" />
							<input type="hidden" name="nav_type" value="<?php echo htmlentities($nav_type); ?>" />
							<button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
						</div>
					</form>
					<!-- form end -->
				</div>
			</div>
		</div>
		<!-- customview save win end -->

		<!-- goods_category save win start -->
		<div class="am-popup am-radius" id="nav-goods_category-save-win">
			<div class="am-popup-inner">
				<div class="am-popup-hd">
					<h4 class="am-popup-title" data-add-title="商品分类导航添加" data-edit-title="商品分类导航编辑">商品分类导航添加</h4>
					<span data-am-modal-close class="am-close">&times;</span>
				</div>
				<div class="am-popup-bd">
					<!-- form start -->
					<form class="am-form form-validation-goods_category" action="<?php echo MyUrl('admin/navigation/save'); ?>" method="POST" request-type="ajax-reload" request-value="">
						<div class="am-form-group">
							<label>导航级别</label>
							<select class="am-radius c-p chosen-select" name="pid" data-placeholder="一级栏目..." data-placeholder="一级栏目..." data-validation-message="导航级别选择错误">
								<option value="">一级栏目...</option>
								<?php foreach($nav_header_pid_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>"><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="am-form-group">
							<label>商品分类</label>
							<select class="am-radius c-p chosen-select" name="value" data-placeholder="请选择..." data-validation-message="商品分类选择有误" required>
								<option value="">请选择...</option>
								<?php foreach($goods_category_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(!empty($data['category_ids']) and in_array($v['id'], $data['category_ids'])): ?>selected<?php endif; ?>>一级 - <?php echo htmlentities($v['name']); ?></option>
									<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
											<option style="padding-left: 30px;" value="<?php echo htmlentities($vs['id']); ?>" <?php if(!empty($data['category_ids']) and in_array($vs['id'], $data['category_ids'])): ?>selected<?php endif; ?>>二级 - <?php echo htmlentities($vs['name']); ?></option>
											<?php if(!empty($vs['items'])): foreach($vs['items'] as $vss): ?>
													<option style="padding-left: 60px;" value="<?php echo htmlentities($vss['id']); ?>" <?php if(!empty($data['category_ids']) and in_array($vss['id'], $data['category_ids'])): ?>selected<?php endif; ?>>三级 - <?php echo htmlentities($vss['name']); ?></option>
												<?php endforeach; ?>
											<?php endif; ?>
										<?php endforeach; ?>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="am-form-group">
							<label>导航名称<span class="am-form-group-label-tips">默认商品分类名称</span></label>
							<input type="text" placeholder="导航名称" name="name" maxlength="16" data-validation-message="导航名称格式 2~16 个字符" class="am-radius" />
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
						<!-- 是否新窗口打开 开始 -->
<div class="am-form-group">
	<label>是否新窗口打开</label>
	<div>
        <?php foreach(lang('common_is_new_window_open_list') as $v): ?>
			<label class="am-radio-inline m-r-10">
				<input type="radio" name="is_new_window_open" value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['is_new_window_open']) and $data['is_new_window_open'] == $v['id']): ?>checked="checked"<?php else: if(!isset($data['is_new_window_open']) and isset($v['checked']) and $v['checked'] == true): ?>checked="checked"<?php endif; ?><?php endif; ?> data-am-ucheck /> <?php echo htmlentities($v['name']); ?>
			</label>
		<?php endforeach; ?>
	</div>
</div>
<!-- 是否新窗口打开 结束 -->
						<div class="am-form-group am-form-group-refreshing">
							<input type="hidden" name="id" />
							<input type="hidden" name="data_type" value="goods_category" />
							<input type="hidden" name="nav_type" value="<?php echo htmlentities($nav_type); ?>" />
							<button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
						</div>
					</form>
					<!-- form end -->
				</div>
			</div>
		</div>
		<!-- goods_category save win end -->
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