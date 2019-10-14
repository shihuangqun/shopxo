<?php /*a:3:{s:98:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/orderaftersale/index.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/header.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
        <form class="am-form form-validation form-search" method="post" action="<?php echo MyUrl('admin/orderaftersale/index'); ?>" request-type="form">
            <div class="thin">
                <div class="am-input-group am-input-group-sm am-fl so">
                    <input type="text" autocomplete="off" name="keywords" class="am-radius" placeholder="订单号/快递单号" value="<?php if(!empty($params['keywords'])): ?><?php echo htmlentities($params['keywords']); ?><?php endif; ?>" />
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
                            <span>类型：</span>
                            <select name="type" class="chosen-select" data-placeholder="类型...">
                                <option value="-1">类型...</option>
                                <?php if(!empty($common_order_aftersale_type_list)): foreach($common_order_aftersale_type_list as $v): ?>
                                        <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($params['type']) and $params['type'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </td>
                        <td>
                            <span>状态：</span>
                            <select name="status" class="chosen-select" data-placeholder="状态...">
                                <option value="-1">状态...</option>
                                <?php if(!empty($common_order_aftersale_status_list)): foreach($common_order_aftersale_status_list as $v): ?>
                                        <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($params['status']) and $params['status'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>退款：</span>
                            <select name="refundment" class="chosen-select" data-placeholder="退款...">
                                <option value="-1">退款...</option>
                                <?php if(!empty($common_order_aftersale_refundment_list)): foreach($common_order_aftersale_refundment_list as $v): ?>
                                        <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($params['refundment']) and $params['refundment'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </td>
                        <td>
                            <button type="submit" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example" data-am-loading="{spinner:'circle-o-notch', loadingText:'搜索中...'}">搜索</button>
                            <a href="<?php echo MyUrl('admin/orderaftersale/index'); ?>" class="am-btn am-btn-warning am-radius am-btn-sm reset-submit">清除条件</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <!-- form end -->

        <!-- list start -->
        <table class="am-table am-table-striped am-table-hover am-text-middle m-t-10">
            <thead>
                <tr>
                    <th class="row-goods am-hide-sm-only">商品信息</th>
                    <th class="row-user-info am-hide-md-down">用户信息</th>
                    <th class="row-apply">申请信息</th>
                    <th class="am-hide-sm-only">凭证</th>
                    <th class="am-hide-sm-only">状态</th>
                    <th class="am-hide-sm-only">快递信息</th>
                    <th class="row-more">更多</th>
                    <th class="row-operation">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data_list)): foreach($data_list as $v): ?>
                        <tr id="data-list-<?php echo htmlentities($v['id']); ?>">
                            <td class="am-hide-sm-only">
                                <div class="goods-detail">
                                    <a href="<?php echo htmlentities($v['order_data']['items']['goods_url']); ?>" target="_blank">
                                        <img src="<?php echo htmlentities($v['order_data']['items']['images']); ?>" class="am-img-thumbnail am-radius" />
                                    </a>
                                    <div class="goods-base">
                                        <a href="<?php echo htmlentities($v['order_data']['items']['goods_url']); ?>" target="_blank" class="goods-title"><?php echo htmlentities($v['order_data']['items']['title']); ?></a>
                                        <?php if(!empty($v['order_data']['items']['spec'])): ?>
                                            <ul class="goods-attr">
                                                <?php foreach($v['order_data']['items']['spec'] as $spec): ?>
                                                    <li><?php echo htmlentities($spec['type']); ?>：<?php echo htmlentities($spec['value']); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php if($v['order_data']['items']['original_price'] > 0): ?>
                                    <p class="original-price">￥<?php echo htmlentities($v['order_data']['items']['original_price']); ?></p>
                                <?php endif; ?>
                                <p class="line-price">￥<?php echo htmlentities($v['order_data']['items']['price']); ?> x <?php echo htmlentities($v['order_data']['items']['buy_number']); ?></p>
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
                            <td>
                                类型：<?php echo htmlentities($v['type_text']); ?><br />
                                原因：<?php echo htmlentities($v['reason']); ?><br />
                                数量：<?php echo htmlentities($v['number']); ?><br />
                                金额：<span class="am-text-danger">￥<?php echo htmlentities($v['price']); ?></span><br />
                                说明：<?php echo htmlentities($v['msg']); ?><br />
                                时间：<?php echo htmlentities($v['apply_time_time']); ?>
                            </td>
                            <td class="am-hide-sm-only">
                                <?php if(!empty($v['images'])): ?>
                                    <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{&quot;directionNav&quot;:false, slideshow:false}' >
                                        <ul class="am-slides">
                                            <?php foreach($v['images'] as $img): ?>
                                                <li>
                                                    <img src="<?php echo htmlentities($img); ?>" />
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                            </td>
                            <td class="am-hide-sm-only">
                                <p><?php echo htmlentities($v['status_text']); ?></p>
                                <?php if($v['status'] == 3 and !empty($v['refundment_text'])): ?>
                                    <span class="am-badge am-badge-success am-radius am-margin-top-xs"><?php echo htmlentities($v['refundment_text']); ?></span>
                                <?php endif; if($v['status'] == 4 and !empty($v['refuse_reason'])): ?>
                                    <span class="am-text-danger"><?php echo htmlentities($v['refuse_reason']); ?></span>
                                <?php endif; ?>
                            </td>
                            <td class="am-hide-sm-only">
                                <?php if($v['type'] == 1 and in_array($v['status'], [2,3])): ?>
                                    快递：<?php echo htmlentities($v['express_name']); ?><br />
                                    单号：<?php echo htmlentities($v['express_number']); ?><br />
                                    时间：<?php echo htmlentities($v['delivery_time_time']); ?>
                                <?php endif; ?>
                            </td>
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
                                                <dt>商品信息</dt>
                                                <dd>
                                                    <div class="goods-detail">
                                                        <a href="<?php echo htmlentities($v['order_data']['items']['goods_url']); ?>" target="_blank">
                                                            <img src="<?php echo htmlentities($v['order_data']['items']['images']); ?>" class="am-img-thumbnail am-radius" />
                                                        </a>
                                                        <div class="goods-base">
                                                            <a href="<?php echo htmlentities($v['order_data']['items']['goods_url']); ?>" target="_blank" class="goods-title"><?php echo htmlentities($v['order_data']['items']['title']); ?></a>
                                                            <?php if(!empty($v['order_data']['items']['spec'])): ?>
                                                                <ul class="goods-attr">
                                                                    <?php foreach($v['order_data']['items']['spec'] as $spec): ?>
                                                                        <li><?php echo htmlentities($spec['type']); ?>：<?php echo htmlentities($spec['value']); ?></li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <?php if($v['order_data']['items']['original_price'] > 0): ?>
                                                        <p class="original-price">￥<?php echo htmlentities($v['order_data']['items']['original_price']); ?></p>
                                                    <?php endif; ?>
                                                    <p class="line-price">￥<?php echo htmlentities($v['order_data']['items']['price']); ?> x <?php echo htmlentities($v['order_data']['items']['buy_number']); ?></p>
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

                                                <dt>申请信息</dt>
                                                <dd>
                                                    类型：<?php echo htmlentities($v['type_text']); ?><br />
                                                    原因：<?php echo htmlentities($v['reason']); ?><br />
                                                    数量：<?php echo htmlentities($v['number']); ?><br />
                                                    金额：<span class="am-text-danger">￥<?php echo htmlentities($v['price']); ?></span><br />
                                                    说明：<?php echo htmlentities($v['msg']); ?><br />
                                                    时间：<?php echo htmlentities($v['apply_time_time']); ?>
                                                </dd>

                                                <dt>凭证</dt>
                                                <dd>
                                                    <?php if(!empty($v['images'])): foreach($v['images'] as $img): ?>
                                                            <a href="<?php echo htmlentities($img); ?>" target="_blank">
                                                                <img src="<?php echo htmlentities($img); ?>" class="am-img-thumbnail" width="80" height="80" />
                                                            </a>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </dd>

                                                <dt>状态</dt>
                                                <dd>
                                                    <p><?php echo htmlentities($v['status_text']); ?></p>
                                                    <?php if($v['status'] == 3 and !empty($v['refundment_text'])): ?>
                                                        <span class="am-badge am-badge-success am-margin-top-xs"><?php echo htmlentities($v['refundment_text']); ?></span>
                                                    <?php endif; ?>
                                                </dd>
                                                <dt>拒绝原因</dt>
                                                <dd class="am-text-danger"><?php echo htmlentities($v['refuse_reason']); ?></dd>

                                                <dt>快递信息</dt>
                                                <dd>
                                                    <?php if($v['type'] == 1 and in_array($v['status'], [2,3])): ?>
                                                        快递：<?php echo htmlentities($v['express_name']); ?><br />
                                                        单号：<?php echo htmlentities($v['express_number']); ?><br />
                                                        时间：<?php echo htmlentities($v['delivery_time_time']); ?>
                                                    <?php endif; ?>
                                                </dd>

                                                <dt>申请时间</dt>
                                                <dd><?php echo htmlentities($v['apply_time_time']); ?></dd>

                                                <dt>确认时间</dt>
                                                <dd><?php echo htmlentities($v['confirm_time_time']); ?></dd>

                                                <dt>退货时间</dt>
                                                <dd><?php echo htmlentities($v['delivery_time_time']); ?></dd>

                                                <dt>审核时间</dt>
                                                <dd><?php echo htmlentities($v['audit_time_time']); ?></dd>

                                                <dt>取消时间</dt>
                                                <dd><?php echo htmlentities($v['cancel_time_time']); ?></dd>

                                                <dt>添加时间</dt>
                                                <dd><?php echo htmlentities($v['add_time_time']); ?></dd>

                                                <dt>更新时间</dt>
                                                <dd><?php echo htmlentities($v['upd_time_time']); ?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <?php if($v['status'] == 0 and $v['type'] == 1): ?>
                                    <button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-check am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/orderaftersale/confirm'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-view="reload"> 确认</button>
                                <?php endif; if($v['status'] == 2): ?>
                                    <button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-gavel am-btn-block submit-audit" data-json='<?php echo str_replace("'", '', json_encode($v)); ?>'> 审核</button>
                                <?php endif; if(in_array($v['status'], [0,2])): ?>
                                    <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-icon-warning am-btn-block submit-refuse" data-json='<?php echo str_replace("'", '', json_encode($v)); ?>'> 拒绝</button>
                                <?php endif; if(in_array($v['status'], [1,2])): ?>
                                    <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-icon-paint-brush am-btn-block submit-ajax submit-cancel" data-url="<?php echo MyUrl('admin/orderaftersale/cancel'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-view="reload"> 取消</button>
                                <?php endif; if(in_array($v['status'], [4,5])): ?>
                                    <button class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/orderaftersale/delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>"> 删除</button>
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

        <!-- 审核弹窗 -->
        <div class="am-popup" id="order-audit-popup">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">审核操作</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                    <dl class="dl-content">
                        <dt>用户信息</dt>
                        <dd class="user-info">
                            <img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/user-img-sm.gif" class="am-img-thumbnail am-radius am-align-left" />
                            <ul class="user-base">
                                <li class="username">名称：<span>...</span></li>
                                <li class="nickname">昵称：<span>...</span></li>
                                <li class="mobile">手机：<span>...</span></li>
                                <li class="email">邮箱：<span>...</span></li>
                            </ul>
                        </dd>
                        <dt>申请信息</dt>
                        <dd class="apply-info">
                            <ul>
                                <li class="type">类型：<span>...</span></li>
                                <li class="reason">原因：<span>...</span></li>
                                <li class="number">数量：<span>...</span></li>
                                <li class="price">金额：<span class="am-text-warning">...</span></li>
                                <li class="msg">说明：<span>...</span></li>
                            </ul>
                        </dd>
                    </dl>

                    <form class="am-form form-validation-audit" action="<?php echo MyUrl('admin/orderaftersale/audit'); ?>" method="POST" request-type="ajax-reload">
                        <div class="am-form-group">
                            <label class="am-block">退款方式</label>
                            <?php if(!empty($common_order_aftersale_refundment_list)): foreach($common_order_aftersale_refundment_list as $v): ?>
                                    <label class="am-radio-inline am-success">
                                        <input type="radio" name="refundment" value="<?php echo htmlentities($v['value']); ?>" data-am-ucheck data-validation-message="请选择退款方式" required /> <?php echo htmlentities($v['name']); ?>
                                    </label>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="am-form-group reply-submit am-form-group-refreshing">
                            <input type="hidden" name="id" value="" />
                            <button type="submit" class="am-btn am-btn-primary am-radius am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- 拒绝弹窗 -->
        <div class="am-popup" id="order-refuse-popup">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">拒绝操作</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                    <dl class="dl-content">
                        <dt>用户信息</dt>
                        <dd class="user-info">
                            <img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/user-img-sm.gif" class="am-img-thumbnail am-radius am-align-left" />
                            <ul class="user-base">
                                <li class="username">名称：<span>...</span></li>
                                <li class="nickname">昵称：<span>...</span></li>
                                <li class="mobile">手机：<span>...</span></li>
                                <li class="email">邮箱：<span>...</span></li>
                            </ul>
                        </dd>
                        <dt>申请信息</dt>
                        <dd class="apply-info">
                            <ul>
                                <li class="type">类型：<span>...</span></li>
                                <li class="reason">原因：<span>...</span></li>
                                <li class="number">数量：<span>...</span></li>
                                <li class="price">金额：<span class="am-text-warning">...</span></li>
                                <li class="msg">说明：<span>...</span></li>
                            </ul>
                        </dd>
                    </dl>

                    <form class="am-form form-validation-refuse" action="<?php echo MyUrl('admin/orderaftersale/refuse'); ?>" method="POST" request-type="ajax-reload">
                        <div class="am-form-group">
                            <label>拒绝原因</label>
                            <textarea name="refuse_reason" rows="5" class="am-radius" placeholder="拒绝原因格式 2~230 个字符" data-validation-message="拒绝原因格式 2~230 个字符" minlength="2" maxlength="230" required></textarea>
                        </div>

                        <div class="am-form-group reply-submit am-form-group-refreshing">
                            <input type="hidden" name="id" value="" />
                            <button type="submit" class="am-btn am-btn-danger am-radius am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认</button>
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