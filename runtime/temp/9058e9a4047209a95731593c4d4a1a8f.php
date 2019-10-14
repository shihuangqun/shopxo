<?php /*a:4:{s:93:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/goods/save_info.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/header.html";i:1563161086;s:85:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/lib/seo.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
		<form class="am-form form-validation view-save" action="<?php echo MyUrl('admin/goods/save'); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/goods/index', $params); ?>" enctype="multipart/form-data">
			<legend>
				<span class="fs-16">
					<?php if(empty($data['id'])): ?>
						商品添加
					<?php else: ?>
						商品编辑
					<?php endif; ?>
				</span>
				<a href="<?php echo MyUrl('admin/goods/index', $params); ?>" class="fr fs-14 m-t-5 am-icon-mail-reply"> 返回</a>
			</legend>

			<nav class="goods-nav">
				<ul>
					<li>
						<a href="#goods-nav-base">基础信息</a>
					</li>
					<li>
						<a href="#goods-nav-operations">商品规格</a>
					</li>
					<li>
						<a href="#goods-nav-photo">商品相册</a>
					</li>
					<li>
						<a href="#goods-nav-video">商品视频</a>
					</li>
					<li>
						<a href="#goods-nav-app">手机端详情</a>
					</li>
					<li>
						<a href="#goods-nav-web">电脑端详情</a>
					</li>
					<li>
						<a href="#goods-nav-seo">SEO</a>
					</li>
				</ul>
			</nav>

			<!-- 基础信息 -->
			<div id="goods-nav-base" class="division-block">
				<label class="block nav-detail-title">基础信息</label>
				<div class="am-form-group">
					<label>标题名称</label>
					<div class="am-input-group am-input-group-sm">
						<input type="hidden" name="title_color" value="<?php if(!empty($data['title_color'])): ?><?php echo htmlentities($data['title_color']); ?><?php endif; ?>" />
						<input type="text" name="title" placeholder="标题名称" minlength="2" maxlength="60" data-validation-message="标题名称格式 2~60 个字符" class="am-form-field am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['title']); ?>" <?php endif; if(!empty($data['title_color'])): ?> style="color:<?php echo htmlentities($data['title_color']); ?>;" <?php endif; ?> required />
						<span class="am-input-group-btn">
							<button class="am-btn am-btn-default am-btn-xs colorpicker-submit" type="button" data-input-tag="input[name='title']" data-color-tag="input[name='title_color']">
								<img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/colorpicker.png" />
							</button>
						</span>
					</div>
				</div>
				<div class="am-form-group">
					<label>商品简述</label>
					<input type="text" name="simple_desc" placeholder="商品简述" maxlength="60" data-validation-message="商品简述格式 最多60个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['simple_desc']); ?>"<?php endif; ?> />
				</div>
				<div class="am-form-group">
					<label>商品型号</label>
					<input type="text" name="model" placeholder="商品型号" maxlength="30" data-validation-message="商品型号格式 最多30个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['model']); ?>"<?php endif; ?> />
				</div>
				<div class="am-form-group">
					<label>商品分类</label>
					<br />
					<select name="category_id" class="am-radius chosen-select c-p" multiple="multiple" minchecked="1" data-placeholder="请选择..." data-validation-message="请至少选择一个商品分类" required>
						<?php if(!empty($category_list)): foreach($category_list as $v): ?>
								<option value="<?php echo htmlentities($v['id']); ?>" <?php if(!empty($data['category_ids']) and in_array($v['id'], $data['category_ids'])): ?>selected<?php endif; ?>>一级 - <?php echo htmlentities($v['name']); ?></option>
								<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
										<option style="padding-left: 30px;" value="<?php echo htmlentities($vs['id']); ?>" <?php if(!empty($data['category_ids']) and in_array($vs['id'], $data['category_ids'])): ?>selected<?php endif; ?>>二级-<?php echo htmlentities($vs['name']); ?></option>
										<?php if(!empty($vs['items'])): foreach($vs['items'] as $vss): ?>
												<option style="padding-left: 60px;" value="<?php echo htmlentities($vss['id']); ?>" <?php if(!empty($data['category_ids']) and in_array($vss['id'], $data['category_ids'])): ?>selected<?php endif; ?>>三级-<?php echo htmlentities($vss['name']); ?></option>
											<?php endforeach; ?>
										<?php endif; ?>
									<?php endforeach; ?>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
				</div>
				<div class="am-form-group">
					<label>品牌</label>
					<br />
					<select name="brand_id" class="am-radius chosen-select c-p" data-placeholder="请选择..." data-validation-message="请至少选择一个商品分类">
						<?php if(!empty($brand_list)): ?>
							<option value="0">请选择...</option>
							<?php foreach($brand_list as $v): ?>
								<optgroup label="<?php echo htmlentities($v['name']); ?>">
									<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
											<option style="padding-left: 30px;" value="<?php echo htmlentities($vs['id']); ?>" <?php if(isset($data['brand_id']) and $data['brand_id'] == $vs['id']): ?>selected<?php endif; ?>><?php echo htmlentities($vs['name']); ?></option>
										<?php endforeach; ?>
									<?php endif; ?>
								</optgroup>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
				</div>
				<div class="am-form-group">
					<label>生产地</label>
					<br />
					<select name="place_origin" class="am-radius chosen-select c-p" data-placeholder="请选择..." data-validation-message="请选择生产地">
						<option value="0">请选择...</option>
						<?php if(!empty($region_province_list)): foreach($region_province_list as $v): ?>
								<option value="<?php echo htmlentities($v['id']); ?>" <?php if(!empty($data['place_origin']) and $v['id'] == $data['place_origin']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
				</div>
				<div class="am-form-group">
					<label>库存单位</label>
					<input type="text" name="inventory_unit" placeholder="库存单位" minlength="1" maxlength="6" data-validation-message="库存单位格式 1~6 个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['inventory_unit']); ?>"<?php endif; ?> required />
				</div>
				<div class="am-form-group">
					<label>购买赠送积分</label>
					<input type="number" name="give_integral" placeholder="购买赠送积分" max="100000000" data-validation-message="购买赠送积分 0~100000000" class="am-radius" value="<?php if(empty($data)): ?>0<?php else: ?><?php echo htmlentities($data['give_integral']); ?><?php endif; ?>" required />
				</div>
				<div class="am-form-group">
					<label>最低起购数量<span class="am-form-group-label-tips">默认数值 1</span></label>
					<input type="number" name="buy_min_number" placeholder="最低起购数量" min="1" max="100000000" data-validation-message="最低起购数量 1~100000000" class="am-radius" value="<?php if(empty($data)): ?>1<?php else: ?><?php echo htmlentities($data['buy_min_number']); ?><?php endif; ?>" required />
				</div>
				<div class="am-form-group">
					<label>单次最大购买数量<span class="am-form-group-label-tips">单次最大数值 100000000, 小于等于0或空则不限</span></label>
					<input type="number" name="buy_max_number" placeholder="单次最大购买数量" min="0" max="100000000" data-validation-message="单次最大购买数量 1~100000000" class="am-radius" <?php if(!empty($data['buy_max_number'])): ?> value="<?php echo htmlentities($data['buy_max_number']); ?>"<?php endif; ?> />
				</div>
				<div class="am-form-group am-form-file">
					<label class="block">首页推荐图片<span class="am-form-group-label-tips">留空则取相册第一张图</span></label>
					<ul class="plug-file-upload-view goods-recommended-images-view" data-form-name="home_recommended_images" data-max-number="1" data-dialog-type="images">
						<?php if(!empty($data['home_recommended_images'])): ?>
							<li>
								<input type="text" name="home_recommended_images" value="<?php echo htmlentities($data['home_recommended_images']); ?>" />
								<img src="<?php echo htmlentities($data['home_recommended_images']); ?>" />
								<i>×</i>
							</li>
						<?php endif; ?>
					</ul>
					<div class="plug-file-upload-submit" data-view-tag="ul.goods-recommended-images-view">+上传图片</div>
				</div>
				<div class="am-form-group">
					<label class="block">扣减库存<span class="am-form-group-label-tips">扣除规则根据后台配置->扣除库存规则而定</span></label>
					<input name="is_deduction_inventory" value="1" type="checkbox" data-off-text="否" data-on-text="是" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if((isset($data['is_deduction_inventory']) and $data['is_deduction_inventory'] == 1) or empty($data)): ?>checked="true"<?php endif; ?> />
				</div>
				<div class="am-form-group">
					<label class="block">上下架<span class="am-form-group-label-tips">下架后用户不可见</span></label>
					<input name="is_shelves" value="1" type="checkbox" data-off-text="下架" data-on-text="上架" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if((isset($data['is_shelves']) and $data['is_shelves'] == 1) or empty($data)): ?>checked="true"<?php endif; ?> />
				</div>
				<div class="am-form-group">
					<label class="block">首页推荐<span class="am-form-group-label-tips">推荐后在首页展示</span></label>
					<input name="is_home_recommended" value="1" type="checkbox" data-off-text="否" data-on-text="是" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if(isset($data['is_home_recommended']) and $data['is_home_recommended'] == 1): ?>checked="true"<?php endif; ?> />
				</div>
			</div>

			<!-- 规格 -->
			<div id="goods-nav-operations" class="division-block" data-spec-add-max-number="<?php echo MyC('common_spec_add_max_number', 3, true); ?>">
				<label class="block nav-detail-title">商品规格</label>
				<span class="business-operations-submit specifications-nav-title-add">+添加规格</span>
				<div class="goods-specifications">
					<table class="am-table am-table-bordered am-table-centered specifications-table m-t-10 m-b-10">
						<thead class="title-nav">
							<tr>
								<?php if(!empty($specifications['type'])): foreach($specifications['type'] as $type_v): ?>
										<th class="table-title table-title-<?php echo htmlentities($type_v['id']); ?>">
											<i class="am-close am-close-spin title-nav-remove" data-index="<?php echo htmlentities($type_v['id']); ?>">×</i>
											<input type="text" name="specifications_name_<?php echo htmlentities($type_v['id']); ?>" placeholder="规格名" value="<?php echo htmlentities($type_v['name']); ?>" data-validation-message="请填写规格名" required />
										</th>
									<?php endforeach; ?>
								<?php endif; ?>
								<th class="title-start">价格(元)</th>
								<th>库存</th>
								<th>重量(kg)</th>
								<th>规格编码</th>
								<th>条形码</th>
								<th>原价(元)</th>
								<th class="operation-btn">操作</th>
							</tr>
						</thead>
						<tbody>
							<?php if(empty($specifications['value'])): ?>
								<tr>
									<td class="value-start">
										<input type="text" name="specifications_price[]" placeholder="价格" class="am-radius" pattern="^([0-9]{1}\d{0,6})(\.\d{1,2})?$" data-validation-message="请填写有效的销售金额" required />
									</td>
									<td>
										<input type="number" name="specifications_number[]" placeholder="库存" class="am-radius" min="1" max="100000000" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$" data-validation-message="库存数量 1~100000000" required />
									</td>
									<td>
										<input type="number" name="specifications_weight[]" placeholder="重量" class="am-radius" maxlength="80" min="0.00" max="100000000.00" step="0.01" data-validation-message="规格重量 0.00~100000000.00" />
									</td>
									<td>
										<input type="text" name="specifications_coding[]" placeholder="编码" class="am-radius" maxlength="80" data-validation-message="规格编码最多80个字符" />
									</td>
									<td>
										<input type="text" name="specifications_barcode[]" placeholder="条形码" class="am-radius" maxlength="80" data-validation-message="条形码最多80个字符" />
									</td>
									<td>
										<input type="text" name="specifications_original_price[]" placeholder="原价" class="am-radius" pattern="^([0-9]{1}\d{0,6})(\.\d{1,2})?$" data-validation-message="请填写有效的销售金额" />
									</td>
									<td>
										<!--operation-->
									</td>
								</tr>
							<?php endif; if(!empty($specifications['value'])): foreach($specifications['value'] as $line_k=>$line_v): ?>
									<tr <?php if($line_k > 0): ?> class="line-not-first"<?php endif; ?>>
									<?php foreach($line_v as $v): if(isset($v['data_type'])): switch($v['data_type']): case "spec": ?>
													<td class="table-value table-value-<?php echo htmlentities($v['data']['key']); ?>">
														<input type="text" name="specifications_value_<?php echo htmlentities($v['data']['key']); ?>[]" placeholder="规格值" value="<?php echo htmlentities($v['data']['value']); ?>" data-validation-message="请填写规格值" required />
													</td>
												<?php break; case "base": ?>
													<td class="value-start">
														<input type="text" name="specifications_price[]" placeholder="价格" class="am-radius" pattern="^([0-9]{1}\d{0,6})(\.\d{1,2})?$" data-validation-message="请填写有效的销售金额" value="<?php echo htmlentities($v['data']['price']); ?>" required />
													</td>
													<td>
														<input type="number" name="specifications_number[]" placeholder="库存" class="am-radius" min="0" max="100000000" data-validation-message="库存数量 0~100000000" value="<?php echo htmlentities($v['data']['inventory']); ?>" required />
													</td>
													<td>
														<input type="number" name="specifications_weight[]" placeholder="重量" class="am-radius" min="0.00" max="100000000.00" step="0.01" data-validation-message="规格重量 0.00~100000000.00" value="<?php if($v['data']['weight'] > 0): ?><?php echo htmlentities($v['data']['weight']); ?><?php endif; ?>" />
													</td>
													<td>
														<input type="text" name="specifications_coding[]" placeholder="编码" class="am-radius" maxlength="80" data-validation-message="规格编码最多80个字符" value="<?php echo htmlentities($v['data']['coding']); ?>" />
													</td>
													<td>
														<input type="text" name="specifications_barcode[]" placeholder="条形码" class="am-radius" maxlength="80" data-validation-message="条形码最多80个字符" value="<?php echo htmlentities($v['data']['barcode']); ?>" />
													</td>
													<td>
														<input type="text" name="specifications_original_price[]" placeholder="原价" class="am-radius" pattern="^([0-9]{1}\d{0,6})(\.\d{1,2})?$" data-validation-message="请填写有效的销售金额" value="<?php if($v['data']['original_price'] > 0): ?><?php echo htmlentities($v['data']['original_price']); ?><?php endif; ?>" />
													</td>
													<td>
														<?php if($line_k > 0): ?>
															<span class="fs-12 cr-blue c-p m-r-5 line-copy">复制</span>
															<span class="fs-12 cr-red c-p line-remove">移除</span>
														<?php else: ?>
															<!--operation-->
														<?php endif; ?>
													</td>
												<?php break; ?>
											<?php endswitch; ?>
										<?php endif; ?>
									<?php endforeach; ?>
									</tr>
								<?php endforeach; ?>
							<?php endif; ?>
						</tbody>
					</table>
					<span class="business-operations-submit specifications-line-add">+添加一行</span>
					<span class="business-operations-submit specifications-line-images-add m-l-10">+添加规格图片</span>
					<ul class="spec-images-list">
						<div class="am-alert am-alert-warning am-radius" data-am-alert>
						    规格名称与规格值保持一致，相同规格名称添加一次即可，重复添加则后面覆盖前面，顺序不影响前端展示效果。
						</div>
						<?php if(!empty($specifications['type'])): foreach($specifications['type'] as $type): if(!empty($type['value'])): foreach($type['value'] as $spec_key=>$spec): if(!empty($spec['images'])): ?>
											<li class="spec-images-items spec-images-items-<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>">
												<input type="text" name="spec_images_name[<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>]" placeholder="规格名称" class="am-radius t-c" data-validation-message="请填写规格名称" value="<?php echo htmlentities($spec['name']); ?>" required >
												<ul class="plug-file-upload-view spec-images-view-<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>" data-form-name="spec_images[<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>]" data-max-number="1" data-delete='0' data-dialog-type="images">
													<li>
														<input type="hidden" name="spec_images[<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>]" value="<?php echo htmlentities($spec['images_old']); ?>" data-validation-message="请上传规格图片" required />
														<img src="<?php echo htmlentities($spec['images']); ?>" />
														<i>×</i>
													</li>
												</ul>
												<div class="plug-file-upload-submit" data-view-tag="ul.spec-images-view-<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>">+上传图片</div>
											</li>
										<?php endif; ?>
									<?php endforeach; ?>
								<?php endif; ?>
							<?php endforeach; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>

			<!-- 相册 -->
			<div id="goods-nav-photo" class="division-block">
				<label class="block nav-detail-title">商品相册<span class="am-form-group-label-tips">可拖拽图片进行排序，建议图片尺寸一致</span></label>
				<ul class="plug-file-upload-view goods-photo-view" data-form-name="photo[]" data-max-number="5" data-dialog-type="images">
					<?php if(!empty($data['photo'])): foreach($data['photo'] as $v): ?>
							<li>
								<input type="text" name="photo[]" value="<?php echo htmlentities($v['images_old']); ?>" />
								<img src="<?php echo htmlentities($v['images']); ?>" />
								<i>×</i>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
				<div class="plug-file-upload-submit" data-view-tag="ul.goods-photo-view">+上传相册</div>
			</div>

			<!-- 视频 -->
			<div id="goods-nav-video" class="division-block">
				<label class="block nav-detail-title">商品视频</label>
				<div class="am-form-group am-form-file">
					<label class="block">短视频<span class="am-form-group-label-tips">视频比图文更有具带入感，仅支持 mp4 格式</span></label>
					<ul class="plug-file-upload-view plug-file-upload-view-video goods-video-view" data-form-name="video" data-max-number="1" data-dialog-type="video">
						<?php if(!empty($data['video'])): ?>
							<li>
								<input type="text" name="video" value="<?php echo htmlentities($data['video']); ?>" />
								<video src="<?php echo htmlentities($data['video']); ?>" controls>your browser does not support the video tag</video>
								<i>×</i>
							</li>
						<?php endif; ?>
					</ul>
					<div class="plug-file-upload-submit" data-view-tag="ul.goods-video-view">+上传视频</div>
				</div>
			</div>

			<!-- app内容 -->
			<div id="goods-nav-app" class="division-block">
				<label class="block nav-detail-title">手机端详情</label>
				<ul class="content-app-items" data-max-count="10" data-required="1" data-images-name="content_app_images" data-content-name="content_app_text" data-images-text="图片" data-content-text="文本内容" data-delete-text="删除" data-drag-sort-text="拖拽排序">
					<?php if(!empty($data['content_app'])): foreach($data['content_app'] as $v): ?>
							<li>
								<div>
									<div class="content-app-left">
										<label class="block">图片</label>
										<ul class="plug-file-upload-view goods-content-app-images-view-<?php echo htmlentities($v['id']); ?>" data-form-name="content_app_images_<?php echo htmlentities($v['id']); ?>" data-max-number="1" data-dialog-type="images">
											<?php if(!empty($v['images'])): ?>
												<li>
													<input type="text" name="content_app_images_<?php echo htmlentities($v['id']); ?>" value="<?php echo htmlentities($v['images_old']); ?>" />
													<img src="<?php echo htmlentities($v['images']); ?>" />
													<i>×</i>
												</li>
											<?php endif; ?>
										</ul>
										<div class="plug-file-upload-submit" data-view-tag="ul.goods-content-app-images-view-<?php echo htmlentities($v['id']); ?>">+上传图片</div>
									</div>
									<div class="am-form-group content-app-right fr">
										<label>文本内容</label>
										<textarea rows="5" name="content_app_text_<?php echo htmlentities($v['id']); ?>" maxlength="105000" class="am-radius" placeholder="文本内容" data-validation-message="文本内容最多 105000 个字符"><?php if(!empty($v)): ?><?php echo $v['content_old']; ?><?php endif; ?></textarea>
									</div>
								</div>
								<i class="c-p fs-12 cr-red content-app-items-rem-sub">删除</i>
								<i class="c-m fs-12 drag-sort-submit">拖拽排序</i>
							</li>
						<?php endforeach; ?>
					<?php endif; ?>
				</ul>
				<span class="business-operations-submit content-app-items-add-sub">+添加手机详情</span>
			</div>

			<!-- web内容 -->
			<div id="goods-nav-web" class="division-block">
				<label class="block nav-detail-title">电脑端详情</label>
				<div class="am-form-group">
					<textarea class="am-radius am-validate" name="content_web" maxlength="105000" id="editor-tag" data-validation-message="电脑端详情内容最多 105000 个字符"><?php if(!empty($data)): ?><?php echo htmlentities($data['content_web']); ?><?php endif; ?></textarea>
				</div>
			</div>

			<!-- seo -->
			<div id="goods-nav-seo" class="division-block">
				<label class="block nav-detail-title">SEO</label>
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

<!-- 拖拽排序初始化 -->
<script type="text/javascript">
$(function()
{
	<?php if(!empty($data['attribute'])): foreach($data['attribute'] as $v): ?>
			$('ul.attribute-items-ul-<?php echo htmlentities($v['id']); ?>').dragsort({ dragSelector: 'i.drag-sort-submit', placeHolderTemplate: '<li class="drag-sort-dotted"></li>'});
		<?php endforeach; ?>
	<?php endif; ?>
});
</script>