<?php /*a:3:{s:88:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/index/init.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/header.html";i:1563161086;s:91:"/www/wwwroot/s.justwaityou1314.com/shopxo/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
		<!-- 基础统计 -->
		<div class="echarts-container shopxo-base">
			<div class="echarts-title">
				<span class="icon"></span>
				<span class="title">商城统计</span>
			</div>
			<ul class="am-avg-sm-2 am-avg-lg-4">
				<li>
					<div class="li-content">
						<p class="name">用户总量</p>
						<p class="total animation-count-to" data-to="<?php echo htmlentities($user['total_count']); ?>" data-speed="1500">0</p>
						<div class="yesterday">
							<span>昨日</span>
							<span class="animation-count-to" data-to="<?php echo htmlentities($user['yesterday_count']); ?>" data-speed="1500">0</span>
						</div>
						<div class="today">
							<span>今日</span>
							<span class="animation-count-to" data-to="<?php echo htmlentities($user['today_count']); ?>" data-speed="1500">0</span>
						</div>
						<i class="am-icon-user am-icon-lg bg-icon"></i>
					</div>
				</li>
				<li>
					<div class="li-content">
						<p class="name">订单总量</p>
						<p class="total animation-count-to" data-to="<?php echo htmlentities($order_number['total_count']); ?>" data-speed="1500">0</p>
						<div class="yesterday">
							<span>昨日</span>
							<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['yesterday_count']); ?>" data-speed="1500">0</span>
						</div>
						<div class="today">
							<span>今日</span>
							<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['today_count']); ?>" data-speed="1500">0</span>
						</div>
						<i class="am-icon-list-alt am-icon-lg bg-icon"></i>
					</div>
				</li>
				<li>
					<div class="li-content">
						<p class="name">成交总量</p>
						<p class="total animation-count-to" data-to="<?php echo htmlentities($order_complete_number['total_count']); ?>" data-speed="1500">0</p>
						<div class="yesterday">
							<span>昨日</span>
							<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['yesterday_count']); ?>" data-speed="1500">0</span>
						</div>
						<div class="today">
							<span>今日</span>
							<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['today_count']); ?>" data-speed="1500">0</span>
						</div>
						<i class="am-icon-gg am-icon-lg bg-icon"></i>
					</div>
				</li>
				<li>
					<div class="li-content">
						<p class="name">收入总计</p>
						<p class="total animation-count-to" data-to="<?php echo htmlentities($order_complete_money['total_count']); ?>" data-speed="1500" data-decimals="2">0.00</p>
						<div class="yesterday">
							<span>昨日</span>
							<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['yesterday_count']); ?>" data-speed="1500" data-decimals="2">0.00</span>
						</div>
						<div class="today">
							<span>今日</span>
							<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['today_count']); ?>" data-speed="1500" data-decimals="2">0.00</span>
						</div>
						<i class="am-icon-gift am-icon-lg bg-icon"></i>
					</div>
				</li>
			</ul>
		</div>


		<!-- 近7日订单交易走势 -->
		<div class="echarts-container">
			<div class="echarts-title">
				<span class="icon"></span>
				<span class="title">近7日订单交易走势</span>
			</div>
			<div id="echarts-order-trading"></div>
		</div>

		<!-- 组合 -->
		<ul class="am-avg-sm-1 am-avg-sm-2 am-avg-lg-2 echarts-combination-container-2">
			<li>
				<!-- 近7日热销商品 -->
				<div class="echarts-title">
					<span class="icon"></span>
					<span class="title">近7日热销商品</span>
				</div>
				<div id="echarts-goods-hot"></div>
			</li>

			<li>
				<!-- 近7日订单支付方式 -->
				<div class="echarts-title">
					<span class="icon"></span>
					<span class="title">近7日订单支付方式</span>
				</div>
				<div id="echarts-order-pay-type"></div>
			</li>
		</ul>

		<!-- 系统信息 -->
		<ul class="am-avg-sm-1 am-avg-sm-2 am-avg-lg-2 echarts-combination-container-2">
			<li>
				<div class="echarts-title">
					<span class="icon"></span>
					<span class="title">系统信息</span>
				</div>
				<dl class="dl-content">
					<dt>软件版本</dt>
					<dd><?php echo htmlentities($data['ver']); ?></dd>

					<dt>操作系统</dt>
					<dd><?php echo htmlentities($data['os_ver']); ?></dd>

					<dt>PHP版本</dt>
					<dd><?php echo htmlentities($data['php_ver']); ?></dd>

					<dt>MySQL版本</dt>
					<dd><?php echo htmlentities($data['mysql_ver']); ?></dd>

					<dt>服务器端信息</dt>
					<dd><?php echo htmlentities($data['server_ver']); ?></dd>

					<dt>当前域名</dt>
					<dd><?php echo htmlentities($data['host']); ?></dd>
				</dl>
			</li>

			<li>
				<div class="echarts-title">
					<span class="icon"></span>
					<span class="title">开发团队</span>
				</div>
				<dl class="dl-content">
					<dt>技术支持</dt>
					<dd><a href="http://shopxo.net/" target="_blank">ShopXO企业级电商系统提供商</a></dd>

					<dt>研发成员</dt>
					<dd>
						<a href="http://gong.gg/" target="_blank">龚哥哥</a>
					</dd>
				</dl>
			</li>
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

<script type="text/javascript">
$(function()
{
	// 近7日订单交易走势
    var order_trading_chart = echarts.init(document.getElementById('echarts-order-trading'), 'macarons');
    var option = {
	    tooltip : {
	        trigger: 'axis',
	        axisPointer: {
	            type: 'cross',
	            label: {
	                backgroundColor: '#6a7985'
	            }
	        }
	    },
	    legend: {
	        data: <?php echo json_encode($order_trading_trend['title_arr']); ?>
	    },
	    toolbox: {
	        show : true,
	        feature : {
	            mark : {show: true},
	            dataView : {show: true, readOnly: false},
	            magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
	            restore : {show: true},
	            saveAsImage : {name:'近7日订单交易走势', show: true}
	        }
	    },
	    grid: {
	        left: '3%',
	        right: '4%',
	        bottom: '3%',
	        containLabel: true
	    },
	    xAxis : [
	        {
	            type : 'category',
	            boundaryGap : false,
	            data : <?php echo json_encode($order_trading_trend['name_arr']); ?>
	        }
	    ],
	    yAxis : [
	        {
	            type : 'value'
	        }
	    ],
	    series : <?php echo json_encode($order_trading_trend['data']); ?>
	};
	order_trading_chart.setOption(option);


    // 近7日热销商品
    var goods_hot_chart = echarts.init(document.getElementById('echarts-goods-hot'), 'macarons');
    var option = {
    	title : {
	        subtext: '仅显示前10条商品',
	        x:'center'
	    },
	    tooltip : {
	        trigger: 'item',
	        formatter: "{b} : {c} ({d}%)"
	    },
	    toolbox: {
	        show : true,
	        feature : {
	            mark : {show: true},
	            dataView : {show: true, readOnly: false},
	            magicType : {
	                show: true, 
	                type: ['pie', 'funnel'],
	                option: {
	                    funnel: {
	                        x: '25%',
	                        width: '50%',
	                        funnelAlign: 'left',
	                        max: 1548
	                    }
	                }
	            },
	            restore : {show: false},
	            saveAsImage : {name:'近7日热销商品', show: true}
	        }
	    },
	    calculable : true,
	    series : [
	        {
	            type:'pie',
	            radius : '55%',
	            center: ['50%', '60%'],
	            data: <?php echo json_encode($goods_hot_sale['data']); ?>
	        }
	    ]
	};
    goods_hot_chart.setOption(option);

    // 近7日订单支付方式
    var order_pay_type_chart = echarts.init(document.getElementById('echarts-order-pay-type'), 'macarons');
    var option = {
	    tooltip : {
	        trigger: 'axis'
	    },
	    legend: {
	        data: <?php echo json_encode($order_type_number['title_arr']); ?>
	    },
	    toolbox: {
	        show : true,
	        feature : {
	            mark : {show: true},
	            dataView : {show: true, readOnly: false},
	            magicType : {show: true, type: ['line', 'bar']},
	            restore : {show: false},
	            saveAsImage : {name:'近7日订单支付方式', show: true}
	        }
	    },
	    calculable : true,
	    xAxis : [
	        {
	            type : 'category',
	            boundaryGap : false,
	            data : <?php echo json_encode($order_type_number['name_arr']); ?>
	        }
	    ],
	    yAxis : [
	        {
	            type : 'value'
	        }
	    ],
	    series : <?php echo json_encode($order_type_number['data']); ?>
	};
    order_pay_type_chart.setOption(option);

	// 浏览器大小改变则实时更新图表大小
	window.onresize = function ()
	{
	    order_pay_type_chart.resize();
	    goods_hot_chart.resize();
	    order_trading_chart.resize();
	};
});
</script>