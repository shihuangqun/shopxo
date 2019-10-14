<?php /*a:3:{s:79:"/data/home/byu3076970001/htdocs/application/admin/view/default/order/index.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/header.html";i:1566177930;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
		<form class="am-form form-validation form-search" method="post" action="<?php echo MyUrl('admin/order/index'); ?>" request-type="form">
			<div class="thin">
                <div class="am-input-group am-input-group-sm am-fl so">
                    <input type="text" autocomplete="off" name="keywords" class="am-radius" placeholder="订单号/姓名/手机/地址/快递单号" value="<?php if(!empty($params['keywords'])): ?><?php echo htmlentities($params['keywords']); ?><?php endif; ?>" />
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
							<span>状态：</span>
							<select name="status" class="chosen-select" data-placeholder="订单状态...">
								<option value="-1">订单状态...</option>
								<?php foreach($common_order_admin_status as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['status']) and $params['status'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
                		</td>
                		<td>
                			<span>快递：</span>
							<select name="express_id" class="chosen-select" data-placeholder="快递公司...">
								<option value="-1">快递公司...</option>
								<?php foreach($express_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['express_id']) and $params['express_id'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
                		</td>
                	</tr>
                	<tr>
                		<td>
                			<span>支付：</span>
							<select name="payment_id" class="chosen-select" data-placeholder="支付方式...">
								<option value="-1">支付方式...</option>
								<?php foreach($payment_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['payment_id']) and $params['payment_id'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
                		</td>
                		<td>
                			<span>付款：</span>
							<select name="pay_status" class="chosen-select" data-placeholder="支付状态...">
								<option value="-1">支付状态...</option>
								<?php foreach($common_order_pay_status as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['pay_status']) and $params['pay_status'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							</select>
                		</td>
                	</tr>
                    <tr>
                        <td>
                            <span>来源：</span>
                            <select name="client_type" class="chosen-select" data-placeholder="来源客户端...">
                                <option value="">来源客户端...</option>
                                <?php foreach($common_platform_type as $v): ?>
                                    <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($params['client_type']) and $params['client_type'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
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
                    </tr>
					<tr>
                        <td></td>
                        <td>
                            <button type="submit" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example" data-am-loading="{spinner:'circle-o-notch', loadingText:'搜索中...'}">搜索</button>
                            <a href="<?php echo MyUrl('admin/order/index'); ?>" class="am-btn am-btn-warning am-radius am-btn-sm reset-submit">清除条件</a>
                        </td>
                    </tr>
                </tbody>
			</table>
        </form>
        <!-- form end -->

        <!-- operation start -->
        <div class="am-g m-t-15">
            <?php if(!IsMobile()): ?>
            	<a href="<?php echo htmlentities($excel_url); ?>" class="am-btn am-btn-success am-btn-xs am-icon-file-excel-o am-radius"> 导出Excel</a>
            <?php endif; ?>
        </div>
        <!-- operation end -->

		<!-- list start -->
		<table class="am-table am-table-striped am-table-hover am-text-middle m-t-10">
			<thead>
				<tr>
					<th class="am-hide-sm-only th-goods">基础信息</th>
                    <th class="am-hide-md-down">用户信息</th>
					<th class="am-hide-sm-only th-receive-address">收件信息</th>
					<th class="am-hide-md-down">快递信息</th>
					<th>订单状态</th>
					<th>订单金额(元)</th>
					<th class="am-hide-sm-only">扩展数据</th>
					<th>更多</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($data_list)): foreach($data_list as $v): ?>
						<tr id="data-list-<?php echo htmlentities($v['id']); ?>" <?php if($v['pay_status'] == 1 and $v['total_price'] > $v['pay_price']): ?>class="am-danger"<?php endif; ?>>
							<td class="am-hide-sm-only">
								<div class="order-no"><?php echo htmlentities($v['order_no']); ?></div>
								<?php foreach($v['items'] as $vs): ?>
									<div class="goods-item">
										<div class="base">
											<a href="<?php echo MyUrl('index/goods/index', ['id'=>$vs['goods_id']]); ?>" target="_blank" title="<?php echo htmlentities($vs['title']); ?>">
												<img src="<?php echo htmlentities($vs['images']); ?>" class="am-img-thumbnail am-radius goods-images am-hide-sm-only" />
											</a>
											<a href="<?php echo MyUrl('index/goods/index', ['id'=>$vs['goods_id']]); ?>" target="_blank" title="<?php echo htmlentities($vs['title']); ?>" <?php if(!empty($vs['title_color'])): ?> style="color:<?php echo htmlentities($vs['title_color']); ?>;" <?php endif; ?> ><?php echo htmlentities($vs['title']); ?></a>
										</div>
										<div class="other">
											<span class="fl fs-12">
												<?php if(!empty($vs['spec_text'])): ?>
													<?php echo htmlentities($vs['spec_text']); ?>
												<?php endif; ?>
											</span>
                                            <?php if($vs['returned_quantity'] > 0 or $vs['refund_price'] > 0): ?>
                                                <span class="am-text-danger am-fr am-margin-left-sm">已退 <?php echo htmlentities($vs['returned_quantity']); ?> / <?php echo htmlentities($vs['refund_price']); ?></span>
                                            <?php endif; ?>
                                            <span class="am-fr"><?php echo htmlentities($vs['price']); ?>x<?php echo htmlentities($vs['buy_number']); ?></span>
										</div>
									</div>
								<?php endforeach; ?>
								<div class="goods-item"><?php echo htmlentities($v['describe']); ?></div>
							</td>
                            <td class="user-info am-hide-md-down">
                                <?php if(!empty($v['user'])): ?>
                                    <img src="<?php echo htmlentities($v['user']['avatar']); ?>" alt="<?php echo htmlentities($v['user']['user_name_view']); ?>" class="am-img-thumbnail am-radius am-align-left" />
                                    <ul class="user-base">
                                        <li>名称：<?php if(empty($v['user']['username'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['user']['username']); ?><?php endif; ?></li>
                                        <li>昵称：<?php if(empty($v['user']['nickname'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['user']['nickname']); ?><?php endif; ?></li>
                                        <li>手机：<?php if(empty($v['user']['mobile'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['user']['mobile']); ?><?php endif; ?></li>
                                        <li>邮箱：<?php if(empty($v['user']['email'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['user']['email']); ?><?php endif; ?></li>
                                    </ul>
                                <?php else: ?>
                                    用户信息异常
                                <?php endif; ?>
                            </td>
							<td class="am-hide-sm-only">
								<?php echo htmlentities($v['receive_name']); ?><br />
								<?php echo htmlentities($v['receive_tel']); ?><br />
								<?php echo htmlentities($v['receive_province_name']); ?><br />
								<?php echo htmlentities($v['receive_city_name']); ?><br />
								<?php echo htmlentities($v['receive_county_name']); ?><br />
								<?php echo htmlentities($v['receive_address']); ?>
							</td>
							<td class="am-hide-md-down">
								<?php if(empty($v['express_name'])): ?>
									<span class="cr-ddd">未填写</span>
								<?php else: ?>
									<?php echo htmlentities($v['express_name']); ?><br /><?php echo htmlentities($v['express_number']); ?>
								<?php endif; ?>
							</td>
							<td>
								<span class="block"><?php echo htmlentities($v['status_name']); ?></span>
								
								<?php if($v['pay_status'] == 1): ?>
									<span class="block am-text-success fs-12"><?php echo htmlentities($v['pay_status_name']); ?></span>
								<?php elseif($v['pay_status'] > 1): ?>
									<span class="block am-text-danger fs-12"><?php echo htmlentities($v['pay_status_name']); ?></span>
								<?php else: ?>
									<span class="block fs-12"><?php echo htmlentities($v['pay_status_name']); ?></span>
								<?php endif; if($v['user_is_delete_time'] != 0): ?>
									<span class="block am-text-warning fs-12">用户已删除</span>
								<?php endif; ?>
							</td>
							<td>
								金额：<?php echo htmlentities($v['price']); ?><br />
								增加：<?php echo htmlentities($v['increase_price']); ?><br />
								优惠：<?php echo htmlentities($v['preferential_price']); ?><br />
								总价：<?php echo htmlentities($v['total_price']); ?><br />
								支付：<?php echo htmlentities($v['pay_price']); ?><br />
                                退款：<?php if($v['refund_price'] > 0): ?><span class="am-text-danger"><?php echo htmlentities($v['refund_price']); ?></span><?php else: ?><?php echo htmlentities($v['refund_price']); ?><?php endif; ?>
							</td>
							<td class="am-hide-sm-only">
								<?php if(empty($v['extension_data'])): ?>
									<span class="cr-ddd">无</span>
								<?php else: foreach($v['extension_data'] as $extk=>$ext): if($extk > 0): ?><br /><?php endif; ?>
										<?php echo htmlentities($ext['name']); ?> [<?php echo htmlentities($ext['tips']); ?>]
									<?php endforeach; ?>
								<?php endif; ?>
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
												<dt>订单号</dt>
												<dd><?php if(empty($v['order_no'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['order_no']); ?><?php endif; ?></dd>

												<dt>基础信息</dt>
												<dd>
													<?php foreach($v['items'] as $vs): ?>
														<div class="goods-item">
															<div class="base">
																<a href="<?php echo MyUrl('index/goods/index', ['id'=>$vs['goods_id']]); ?>" target="_blank" title="<?php echo htmlentities($vs['title']); ?>">
																	<img src="<?php echo htmlentities($vs['images']); ?>" class="am-img-thumbnail am-radius goods-images am-hide-sm-only" />
																</a>
																<a href="<?php echo MyUrl('index/goods/index', ['id'=>$vs['goods_id']]); ?>" target="_blank" title="<?php echo htmlentities($vs['title']); ?>" <?php if(!empty($vs['title_color'])): ?> style="color:<?php echo htmlentities($vs['title_color']); ?>;" <?php endif; ?> ><?php echo htmlentities($vs['title']); ?></a>
															</div>
															<div class="other">
                                                                <span class="fl fs-12">
                                                                    型号：
                                                                    <?php if(!empty($vs['model'])): ?>
                                                                        <?php echo htmlentities($vs['model']); ?>
                                                                    <?php endif; ?>
                                                                </span>
																<span class="fl fs-12">
																	规格：
																	<?php if(!empty($vs['spec_text'])): ?>
																		<?php echo htmlentities($vs['spec_text']); ?>
																	<?php endif; ?>
																</span>
																<span class="fl fs-12">
																	重量：<?php echo htmlentities($vs['spec_weight']); ?>
																</span>
																<span class="fl fs-12">
																	编码：<?php echo htmlentities($vs['spec_coding']); ?>
																</span>
                                                                <?php if($vs['returned_quantity'] > 0 or $vs['refund_price'] > 0): ?>
                                                                    <span class="am-text-danger am-fr am-margin-left-sm">已退 <?php echo htmlentities($vs['returned_quantity']); ?> / <?php echo htmlentities($vs['refund_price']); ?></span>
                                                                <?php endif; ?>
																<span class="fr"><?php echo htmlentities($vs['price']); ?>x<?php echo htmlentities($vs['buy_number']); ?></span>
															</div>
														</div>
													<?php endforeach; ?>
													<div class="goods-item"><?php echo htmlentities($v['describe']); ?></div>
												</dd>

                                                <dt>用户信息</dt>
                                                <dd class="user-info">
                                                    <?php if(!empty($v['user'])): ?>
                                                        <img src="<?php echo htmlentities($v['user']['avatar']); ?>" alt="<?php echo htmlentities($v['user']['user_name_view']); ?>" class="am-img-thumbnail am-radius am-align-left" />
                                                        <ul class="user-base">
                                                            <li>名称：<?php if(empty($v['user']['username'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['user']['username']); ?><?php endif; ?></li>
                                                            <li>昵称：<?php if(empty($v['user']['nickname'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['user']['nickname']); ?><?php endif; ?></li>
                                                            <li>手机：<?php if(empty($v['user']['mobile'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['user']['mobile']); ?><?php endif; ?></li>
                                                            <li>邮箱：<?php if(empty($v['user']['email'])): ?><span class="cr-ccc">未填写</span><?php else: ?><?php echo htmlentities($v['user']['email']); ?><?php endif; ?></li>
                                                        </ul>
                                                    <?php else: ?>
                                                        用户信息异常
                                                    <?php endif; ?>
                                                </dd>

												<dt>收件信息</dt>
												<dd>
													<?php if(empty($v['receive_address'])): ?>
														<span class="cr-ddd">未填写</span>
													<?php else: ?>
														<?php echo htmlentities($v['receive_name']); ?><br />
														<?php echo htmlentities($v['receive_tel']); ?><br />
														<?php echo htmlentities($v['receive_province_name']); ?>
														<?php echo htmlentities($v['receive_city_name']); ?>
														<?php echo htmlentities($v['receive_county_name']); ?>
														<?php echo htmlentities($v['receive_address']); ?>
													<?php endif; ?>
												</dd>

												<dt>快递信息</dt>
												<dd><?php if(empty($v['express_name'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['express_name']); ?><br /><?php echo htmlentities($v['express_number']); ?><?php endif; ?></dd>

                                                <dt>客户端类型</dt>
                                                <dd><?php if(empty($v['client_type_name'])): ?><span class="cr-ddd">未知</span><?php else: ?><span class="am-badge am-badge-secondary am-radius"><?php echo htmlentities($v['client_type_name']); ?><?php endif; ?></span></dd>

												<dt>支付状态</dt>
												<dd><?php if(empty($v['pay_status_name'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['pay_status_name']); ?><?php endif; ?></dd>

												<dt>订单状态</dt>
												<dd><?php if(empty($v['status_name'])): ?><span class="cr-ddd">未设置</span><?php else: ?><?php echo htmlentities($v['status_name']); ?><?php endif; ?></dd>

												<dt>支付方式</dt>
												<dd><?php if(empty($v['payment_name'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['payment_name']); ?><?php endif; ?></dd>

												<dt>用户备注</dt>
												<dd><?php if(empty($v['user_note'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['user_note']); ?><?php endif; ?></dd>

												<dt>订单金额(元)</dt>
												<dd>
													<?php if(empty($v['price'])): ?>
														<span class="cr-ddd">未填写</span>
													<?php else: ?>
														金额：<?php echo htmlentities($v['price']); ?><br />
														增加：<?php echo htmlentities($v['increase_price']); ?><br />
														优惠：<?php echo htmlentities($v['preferential_price']); ?><br />
														总价：<?php echo htmlentities($v['total_price']); ?><br />
														支付：<?php echo htmlentities($v['pay_price']); ?><br />
                                                        退款：<?php if($v['refund_price'] > 0): ?><span class="am-text-danger"><?php echo htmlentities($v['refund_price']); ?></span><?php else: ?><?php echo htmlentities($v['refund_price']); ?><?php endif; ?>
													<?php endif; ?>
												</dd>

												<dt>扩展数据</dt>
												<dd>
													<?php if(empty($v['extension_data'])): ?>
														<span class="cr-ddd">无</span>
													<?php else: foreach($v['extension_data'] as $extk=>$ext): if($extk > 0): ?><br /><?php endif; ?>
															<?php echo htmlentities($ext['name']); ?> [<?php echo htmlentities($ext['tips']); ?>]
														<?php endforeach; ?>
													<?php endif; ?>
												</dd>

                                                <dt>购买数量</dt>
                                                <dd><?php if(empty($v['buy_number_count'])): ?><span class="cr-ddd">未知</span><?php else: ?><?php echo htmlentities($v['buy_number_count']); ?><?php endif; ?></dd>

                                                <dt>退货数量</dt>
                                                <dd><?php if(empty($v['returned_quantity'])): ?><span class="cr-ddd">未退货</span><?php else: ?><?php echo htmlentities($v['returned_quantity']); ?><?php endif; ?></dd>

                                                <dt>退款金额</dt>
                                                <dd><?php if(empty($v['refund_price']) or $v['refund_price'] <= 0.00): ?><span class="cr-ddd">未退款</span><?php else: ?><span class="am-text-danger"><?php echo htmlentities($v['refund_price']); ?><?php endif; ?></span></dd>

												<dt>确认时间</dt>
												<dd><?php if(empty($v['confirm_time'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['confirm_time']); ?><?php endif; ?></dd>

												<dt>支付时间</dt>
												<dd><?php if(empty($v['pay_time'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['pay_time']); ?><?php endif; ?></dd>

												<dt>发货时间</dt>
												<dd><?php if(empty($v['delivery_time'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['delivery_time']); ?><?php endif; ?></dd>

												<dt>完成时间</dt>
												<dd><?php if(empty($v['collect_time'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['collect_time']); ?><?php endif; ?></dd>

												<dt>取消时间</dt>
												<dd><?php if(empty($v['cancel_time'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['cancel_time']); ?><?php endif; ?></dd>

												<dt>创建时间</dt>
												<dd><?php echo htmlentities($v['add_time']); ?></dd>

												<dt>更新时间</dt>
												<dd><?php echo htmlentities($v['upd_time']); ?></dd>
											</dl>
										</div>
									</div>
								</div>
							</td>
							<td class="view-operation">
								<?php if(in_array($v['status'], [0])): ?>
									<button class="am-btn am-btn-primary am-btn-xs am-radius am-icon-check-circle-o am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/order/confirm'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-value="<?php echo htmlentities($v['user_id']); ?>" data-view="reload" data-msg="是否操作收货，操作后不可恢复！"> 确认</button>
								<?php endif; if(in_array($v['status'], [0,1])): ?>
									<button class="am-btn am-btn-warning am-btn-xs am-radius am-icon-paint-brush am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/order/cancel'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-value="<?php echo htmlentities($v['user_id']); ?>" data-view="reload" data-msg="取消后无法恢复，确定继续吗？"> 取消</button>
									<?php if(in_array($v['status'], [1])): ?>
                                        <button class="am-btn am-btn-success am-btn-xs am-radius am-icon-paypal am-btn-block submit-pay" data-id="<?php echo htmlentities($v['id']); ?>" data-payment-id="<?php echo htmlentities($v['payment_id']); ?>" data-am-modal="{target: '#order-pay-popup'}"> 支付</button>
                                    <?php endif; ?>
								<?php endif; if($v['status'] == 2): ?>
									<button class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-send-o am-btn-block submit-delivery" data-url="<?php echo MyUrl('admin/order/delivery'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-user-id="<?php echo htmlentities($v['user_id']); ?>" data-express-id="<?php echo htmlentities($v['express_id']); ?>" data-am-modal="{target: '#order-delivery-popup'}"> 发货</button>
								<?php endif; if($v['status'] == 3): ?>
									<button class="am-btn am-btn-success am-btn-xs am-radius am-icon-check-circle-o am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/order/collect'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-value="<?php echo htmlentities($v['user_id']); ?>" data-view="reload" data-msg="是否操作收货，操作后不可恢复！"> 收货</button>
								<?php endif; if(in_array($v['status'], [5,6])): ?>
									<button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/order/delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-value="<?php echo htmlentities($v['user_id']); ?>" data-view="delete" data-msg="删除后无法恢复，确定继续吗？"> 删除</button>
								<?php endif; ?>

								<!-- 钩子订单操作 -->
                                <?php if(!empty($v['plugins_service_order_handle_operation_html']) and is_array($v['plugins_service_order_handle_operation_html'])): foreach($v['plugins_service_order_handle_operation_html'] as $hook): if(is_string($hook) or is_int($hook)): ?>
                                            <?php echo $hook; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
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

		<!-- 发货弹窗 -->
		<div class="am-popup" id="order-delivery-popup">
			<div class="am-popup-inner">
				<div class="am-popup-hd">
					<h4 class="am-popup-title">发货操作</h4>
					<span data-am-modal-close class="am-close">&times;</span>
				</div>
				<div class="am-popup-bd">
	                <form class="am-form form-validation-delivery delivery-form" method="post" action="<?php echo MyUrl('admin/order/delivery'); ?>" request-type="ajax-reload">
	                    <!-- 支付方式 -->
	                    <div class="business-item">
	                        <h3>选择快递</h3>
	                        <?php if(!empty($express_list)): ?>
	                            <ul class="express-list" data-type="express">
	                                <?php foreach($express_list as $express): if($express['is_enable'] == 1): ?>
		                                    <li class="express-items-<?php echo htmlentities($express['id']); ?>" data-value="<?php echo htmlentities($express['id']); ?>">
		                                        <?php if(!empty($express['icon'])): ?>
		                                            <img src="<?php echo htmlentities($express['icon']); ?>" />
		                                        <?php endif; ?>
		                                        <span><?php echo htmlentities($express['name']); ?></span>
		                                        <i class="icon-active"></i>
		                                    </li>
		                                <?php endif; ?>
	                                <?php endforeach; ?>
	                            </ul>
	                        <?php endif; if(empty($express_list)): ?>
	                            <div class="table-no"><i class="am-icon-warning"></i> 没有快递方式</div>
	                        <?php endif; ?>
	                    </div>

	                    <div class="am-form-group">
							<label>快递单号</label>
							<input type="text" autocomplete="off" name="express_number" placeholder="快递单号" minlength="1" data-validation-message="请填写快递单号" class="am-radius" required />
	                    </div>
	                    <div class="am-form-group am-form-group-refreshing">
	                        <input type="hidden" name="id" value="0" />
	                        <input type="hidden" name="express_id" value="0" />
	                        <input type="hidden" name="user_id" value="0" />
	                        <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认</button>
	                    </div>
	                </form>
	            </div>
	        </div>
		</div>

		<!-- 支付弹窗 -->
        <div class="am-popup" id="order-pay-popup">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">支付操作</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                	<form class="am-form form-validation-pay pay-form" action="<?php echo MyUrl('admin/order/pay'); ?>" method="POST" request-type="ajax-reload">
                        <!-- 支付方式 -->
                        <div class="business-item">
                            <h3>选择支付</h3>
                            <?php if(!empty($buy_payment_list)): ?>
                                <ul class="payment-list" data-type="payment">
                                    <?php foreach($buy_payment_list as $payment): ?>
                                        <li class="payment-items-<?php echo htmlentities($payment['id']); ?>" data-value="<?php echo htmlentities($payment['id']); ?>">
                                            <?php if(!empty($payment['logo'])): ?>
                                                <img src="<?php echo htmlentities($payment['logo']); ?>" />
                                            <?php endif; ?>
                                            <span><?php echo htmlentities($payment['name']); ?></span>
                                            <i class="icon-active"></i>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; if(empty($buy_payment_list)): ?>
                                <div class="table-no"><i class="am-icon-warning"></i> 没有支付方式</div>
                            <?php endif; ?>
                        </div>
                        <div class="am-form-group am-form-group-refreshing">
                            <input type="hidden" name="id" value="0" />
                            <input type="hidden" name="payment_id" value="0" />
                            <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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