<?php /*a:3:{s:88:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/user/index.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/header.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
		<form class="am-form form-validation form-search" method="post" action="<?php echo MyUrl('admin/user/index'); ?>" request-type="form">
			<div class="thin">
                <div class="am-input-group am-input-group-sm am-fl so">
                    <input type="text" autocomplete="off" name="keywords" class="am-radius" placeholder="姓名/手机/邮箱/昵称" value="<?php if(!empty($params['keywords'])): ?><?php echo htmlentities($params['keywords']); ?><?php endif; ?>" />
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
                			<span>性别：</span>
							<select name="gender" class="chosen-select" data-placeholder="性别...">
								<option value="-1">性别...</option>
								<?php foreach($common_gender_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['gender']) and $params['gender'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
                		</td>
                		<td>
                			<span>状态：</span>
							<select name="status" class="chosen-select" data-placeholder="状态...">
								<option value="-1">状态...</option>
								<?php foreach($common_user_status_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['status']) and $params['status'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
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
                            <a href="<?php echo MyUrl('admin/user/index'); ?>" class="am-btn am-btn-warning am-radius am-btn-sm reset-submit">清除条件</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!-- form end -->

        <!-- operation start -->
        <div class="am-g m-t-15">
            <a href="<?php echo MyUrl('admin/user/saveinfo'); ?>" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-plus"> 新增</a>
            <?php if(!IsMobile()): ?>
            	<a href="<?php echo htmlentities($excel_url); ?>" class="am-btn am-btn-success am-btn-xs m-l-10 am-icon-file-excel-o am-radius"> 导出Excel</a>
            <?php endif; ?>
        </div>
        <!-- operation end -->

		<!-- list start -->
		<table class="am-table am-table-striped am-table-hover am-text-middle m-t-10 m-l-5">
			<thead>
				<tr>
					<th>编号</th>
					<th>基础信息</th>
					<th class="am-hide-sm-only">积分</th>
					<th class="am-hide-sm-only">性别</th>
					<th class="am-hide-sm-only">状态</th>
					<th class="am-hide-sm-only">生日</th>
					<th>更多</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($data_list)): foreach($data_list as $v): ?>
						<tr id="data-list-<?php echo htmlentities($v['id']); ?>">
							<td><?php echo htmlentities($v['id']); ?></td>
							<td class="user-info">
								<img src="<?php echo htmlentities($v['avatar']); ?>" class="am-fl am-img-thumbnail am-radius am-hide-sm-only" />
                                <ul class="user-base am-fl">
                                    <li>名称：<?php if(empty($v['username'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['username']); ?><?php endif; ?></li>
                                    <li>昵称：<?php if(empty($v['nickname'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['nickname']); ?><?php endif; ?></li>
                                    <li>手机：<?php if(empty($v['mobile'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['mobile']); ?><?php endif; ?></li>
                                    <li>邮箱：<?php if(empty($v['email'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['email']); ?><?php endif; ?></li>
                                </ul>
							</td>
							<td class="am-hide-sm-only">
								<?php if(empty($v['integral'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['integral']); ?><?php endif; ?>
							</td>
							<td class="am-hide-sm-only">
								<?php if(empty($v['gender_text'])): ?><span class="cr-ddd">未设置</span><?php else: ?><?php echo htmlentities($v['gender_text']); ?><?php endif; ?>
							</td>
							<td class="am-hide-sm-only">
								<?php if(empty($v['status_text'])): ?><span class="cr-ddd">未知</span><?php else: ?><?php echo htmlentities($v['status_text']); ?><?php endif; ?>
							</td>
							<td class="am-hide-sm-only">
								<?php if(empty($v['birthday_text'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['birthday_text']); ?><?php endif; ?>
							</td>
							<td>
								<span class="am-icon-caret-down c-p" data-am-modal="{target: '#my-popup<?php echo htmlentities($v['id']); ?>'}"> 查看更多</span>
								<div class="am-popup am-radius" id="my-popup<?php echo htmlentities($v['id']); ?>">
									<div class="am-popup-inner">
										<div class="am-popup-hd">
											<h4 class="am-popup-title">详情内容</h4>
											<span data-am-modal-close class="am-close">&times;</span>
										</div>
										<div class="am-popup-bd">
											<dl class="dl-content">
												<dt>用户名</dt>
												<dd><?php if(empty($v['username'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['username']); ?><?php endif; ?></dd>

												<dt>昵称</dt>
												<dd><?php if(empty($v['nickname'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['nickname']); ?><?php endif; ?></dd>

												<dt>手机号码</dt>
												<dd><?php if(empty($v['mobile'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['mobile']); ?><?php endif; ?></dd>

												<dt>电子邮箱</dt>
												<dd><?php if(empty($v['email'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['email']); ?><?php endif; ?></dd>

												<dt>状态</dt>
												<dd><?php if(empty($v['status_text'])): ?><span class="cr-ddd">未知</span><?php else: ?><?php echo htmlentities($v['status_text']); ?><?php endif; ?></dd>

												<dt>支付宝openid</dt>
												<dd><?php if(empty($v['alipay_openid'])): ?><span class="cr-ddd">未知</span><?php else: ?><?php echo htmlentities($v['alipay_openid']); ?><?php endif; ?></dd>

												<dt>微信openid</dt>
												<dd><?php if(empty($v['weixin_openid'])): ?><span class="cr-ddd">未知</span><?php else: ?><?php echo htmlentities($v['weixin_openid']); ?><?php endif; ?></dd>

												<dt>百度openid</dt>
												<dd><?php if(empty($v['baidu_openid'])): ?><span class="cr-ddd">未知</span><?php else: ?><?php echo htmlentities($v['baidu_openid']); ?><?php endif; ?></dd>

												<dt>性别</dt>
												<dd><?php if(empty($v['gender_text'])): ?><span class="cr-ddd">未设置</span><?php else: ?><?php echo htmlentities($v['gender_text']); ?><?php endif; ?></dd>

												<dt>生日</dt>
												<dd><?php if(empty($v['birthday_text'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['birthday_text']); ?><?php endif; ?></dd>

												<dt>所在省</dt>
												<dd><?php if(empty($v['province'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['province']); ?><?php endif; ?></dd>

												<dt>所在市</dt>
												<dd><?php if(empty($v['city'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['city']); ?><?php endif; ?></dd>

												<dt>详细地址</dt>
												<dd><?php if(empty($v['address'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['address']); ?><?php endif; ?></dd>

												<dt>积分</dt>
												<dd><?php if(empty($v['integral'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['integral']); ?><?php endif; ?></dd>

												<dt>用户头像</dt>
												<dd>
													<?php if(!empty($v['avatar'])): ?>
														<img src="<?php echo htmlentities($v['avatar']); ?>" class="am-img-thumbnail am-radius" width="100" height="100" />
													<?php else: ?>
														<span class="cr-ddd">暂无图片</span>
													<?php endif; ?>
												</dd>

												<dt>注册时间</dt>
												<dd><?php echo htmlentities($v['add_time']); ?></dd>

												<dt>更新时间</dt>
												<dd><?php echo htmlentities($v['upd_time']); ?></dd>
											</dl>
										</div>
									</div>
								</div>
							</td>
							<td class="view-operation">
								<a href="<?php echo MyUrl('admin/user/saveinfo', array_merge($params,array('id'=>$v['id']))); ?>">
									<button class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-edit"> 编辑</button>
								</a>
								<button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/user/delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>"> 删除</button>
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