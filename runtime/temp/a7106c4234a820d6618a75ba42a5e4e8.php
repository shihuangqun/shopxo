<?php /*a:3:{s:87:"/data/home/byu3076970001/htdocs/application/admin/view/default/goodscomments/index.html";i:1563161086;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/header.html";i:1566177930;s:81:"/data/home/byu3076970001/htdocs/application/admin/view/default/public/footer.html";i:1563161086;}*/ ?>
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
        <form class="am-form form-validation form-search" method="post" action="<?php echo MyUrl('admin/goodscomments/index'); ?>" request-type="form">
            <div class="thin">
                <div class="am-input-group am-input-group-sm am-fl so">
                    <input type="text" autocomplete="off" name="keywords" class="am-radius" placeholder="用户名/昵称/手机/邮箱/商品标题" value="<?php if(!empty($params['keywords'])): ?><?php echo htmlentities($params['keywords']); ?><?php endif; ?>" />
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
                            <span>显隐：</span>
                            <select name="is_show" class="chosen-select" data-placeholder="是否显示...">
                                <option value="-1">是否显示...</option>
                                <?php foreach($common_is_show_list as $v): ?>
                                    <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['is_show']) and $params['is_show'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <span>回复：</span>
                            <select name="is_reply" class="chosen-select" data-placeholder="是否回复...">
                                <option value="-1">是否回复...</option>
                                <?php if(!empty($common_is_text_list)): foreach($common_is_text_list as $v): ?>
                                        <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['is_reply']) and $params['is_reply'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>匿名：</span>
                            <select name="is_anonymous" class="chosen-select" data-placeholder="是否匿名...">
                                <option value="-1">是否匿名...</option>
                                <?php foreach($common_is_text_list as $v): ?>
                                    <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($params['is_anonymous']) and $params['is_anonymous'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <span>类型：</span>
                            <select name="business_type" class="chosen-select" data-placeholder="业务类型...">
                                <option value="">业务类型...</option>
                                <?php if(!empty($common_goods_rating_business_type_list)): foreach($common_goods_rating_business_type_list as $k=>$v): ?>
                                        <option value="<?php echo htmlentities($k); ?>" <?php if(isset($params['business_type']) and $params['business_type'] == $k): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
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
                            <a href="<?php echo MyUrl('admin/goodscomments/index'); ?>" class="am-btn am-btn-warning am-radius am-btn-sm reset-submit">清除条件</a>
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
                    <th class="am-hide-md-down">商品信息</th>
                    <th class="am-hide-md-down">用户信息</th>
                    <th class="am-hide-sm-only">业务类型</th>
                    <th>评论内容</th>
                    <th class="am-hide-sm-only">评分</th>
                    <th class="am-hide-sm-only">回复</th>
                    <th class="am-hide-sm-only">匿名</th>
                    <th class="am-hide-sm-only">显示</th>
                    <th>更多</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data_list)): foreach($data_list as $v): ?>
                        <tr id="data-list-<?php echo htmlentities($v['id']); ?>" <?php if($v['is_show'] == 0): ?>class="am-active"<?php endif; ?>>
                            <td class="goods-info am-hide-md-down">
                                <?php if(!empty($v['goods'])): ?>
                                    <div class="base">
                                        <a href="<?php echo htmlentities($v['goods']['goods_url']); ?>" target="_blank">
                                            <img src="<?php echo htmlentities($v['goods']['images']); ?>" alt="<?php echo htmlentities($v['goods']['title']); ?>" class="am-img-thumbnail am-radius am-align-left" />
                                        </a>
                                        <a class="am-text-top" href="<?php echo htmlentities($v['goods']['goods_url']); ?>" target="_blank"><?php echo htmlentities($v['goods']['title']); ?></a>
                                    </div>
                                    <p>￥<?php echo htmlentities($v['goods']['price']); ?></p>
                                <?php else: ?>
                                    商品信息异常
                                <?php endif; ?>
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
                            <td class="am-hide-sm-only"><?php echo htmlentities($v['business_type_text']); ?></td>
                            <td class="content-info">
                                <div class="reply-content">
                                    <?php echo htmlentities($v['content']); ?>
                                </div>
                            </td>
                            <td class="am-hide-sm-only">
                                <span class="am-badge am-radius <?php echo htmlentities($common_goods_comments_rating_list[$v['rating']]['badge']); ?>"><?php echo htmlentities($v['rating_text']); ?></span>
                            </td>
                            <td class="am-hide-sm-only">
                                <a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_reply'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/goodscomments/statusupdate'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-state="<?php echo htmlentities($v['is_reply']); ?>" data-field="is_reply"></a>
                            </td>
                            <td class="am-hide-sm-only">
                                <a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_anonymous'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/goodscomments/statusupdate'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-state="<?php echo htmlentities($v['is_anonymous']); ?>" data-field="is_anonymous"></a>
                            </td>
                            <td class="am-hide-sm-only">
                                <a href="javascript:;" class="am-icon-btn am-icon-check submit-state <?php if($v['is_show'] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>" data-url="<?php echo MyUrl('admin/goodscomments/statusupdate'); ?>" data-id="<?php echo htmlentities($v['id']); ?>" data-state="<?php echo htmlentities($v['is_show']); ?>" data-field="is_show" data-is-update-status="1"></a>
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
                                                <dd class="goods-info am-hide-md-down">
                                                    <?php if(!empty($v['goods'])): ?>
                                                        <div class="base">
                                                            <a href="<?php echo htmlentities($v['goods']['goods_url']); ?>" target="_blank">
                                                                <img src="<?php echo htmlentities($v['goods']['images']); ?>" alt="<?php echo htmlentities($v['goods']['title']); ?>" class="am-img-thumbnail am-radius am-align-left" />
                                                            </a>
                                                            <a class="am-text-top" href="<?php echo htmlentities($v['goods']['goods_url']); ?>" target="_blank"><?php echo htmlentities($v['goods']['title']); ?></a>
                                                        </div>
                                                        <p>￥<?php echo htmlentities($v['goods']['price']); ?></p>
                                                    <?php else: ?>
                                                        商品信息异常
                                                    <?php endif; ?>
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

                                                <dt>业务类型</dt>
                                                <dd><?php echo htmlentities($v['business_type_text']); ?></dd>

                                                <dt>评论内容</dt>
                                                <dd><?php echo htmlentities($v['content']); ?></dd>

                                                <dt>评分</dt>
                                                <dd>
                                                    <span class="am-badge am-radius <?php echo htmlentities($common_goods_comments_rating_list[$v['rating']]['badge']); ?>"><?php echo htmlentities($v['rating_text']); ?></span>
                                                </dd>

                                                <dt>是否匿名</dt>
                                                <dd><?php echo htmlentities($v['is_anonymous_text']); ?></dd>

                                                <dt>是否显示</dt>
                                                <dd><?php if(empty($v['is_show_text'])): ?><span class="cr-ddd">未填写</span><?php else: ?><?php echo htmlentities($v['is_show_text']); ?><?php endif; ?></dd>

                                                <dt>是否回复</dt>
                                                <dd><?php echo htmlentities($v['is_reply_text']); ?></dd>

                                                <dt>回复内容</dt>
                                                <dd>
                                                    <?php if($v['is_reply'] == 1 and !empty($v['reply'])): ?>
                                                        <div class="reply-content">
                                                            <?php echo htmlentities($v['reply']); ?>
                                                        </div>
                                                    <?php else: ?>
                                                        <span class="cr-ddd">未回复</span>
                                                    <?php endif; ?>
                                                </dd>

                                                <dt>回复时间</dt>
                                                <dd><?php echo htmlentities($v['reply_time_time']); ?></dd>

                                                <dt>更新时间</dt>
                                                <dd><?php echo htmlentities($v['upd_time_time']); ?></dd>

                                                <dt>创建时间</dt>
                                                <dd><?php echo htmlentities($v['add_time_time']); ?></dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="view-operation">
                                <a href="<?php echo MyUrl('admin/goodscomments/saveinfo', array_merge($params, ['id'=>$v['id']])); ?>" class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block am-icon-edit"> 编辑</a>
                                <?php if($v['is_reply'] == 0): ?>
                                    <button class="am-btn am-btn-success am-btn-xs am-radius am-btn-block submit-reply am-icon-gavel" data-am-modal="{target: '#my-popup-reply'}" data-json='<?php echo json_encode($v); ?>'> 回复</button>
                                <?php endif; ?>
                                <button class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/goodscomments/delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>"> 删除</button>
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

        <!-- 处理窗口 -->
        <div class="am-popup am-radius" id="my-popup-reply">
            <div class="am-popup-inner">
                <div class="am-popup-hd">
                    <h4 class="am-popup-title">回复</h4>
                    <span data-am-modal-close class="am-close">&times;</span>
                </div>
                <div class="am-popup-bd">
                    <dl class="dl-content">
                        <dt>商品信息</dt>
                        <dd class="goods-info">
                            <div class="base">
                                <a href="javascript:;" target="_blank">
                                    <img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/user-img-sm.gif" class="am-img-thumbnail am-radius am-align-left" />
                                </a>
                                <a class="am-text-top title" href="javascript:;" target="_blank">...</a>
                            </div>
                            <p class="price">...</p>
                        </dd>

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
                        <dt>评论内容</dt>
                        <dd class="content">...</dd>
                    </dl>

                    <form class="am-form form-validation-reply" action="<?php echo MyUrl('admin/goodscomments/reply'); ?>" method="POST" request-type="ajax-reload">
                        <div class="am-form-group">
                            <label>回复内容</label>
                            <textarea name="reply" rows="5" class="am-radius" placeholder="回复内容格式 1~230 个字符" data-validation-message="回复内容格式 1~230 个字符" minlength="1" maxlength="230" required></textarea>
                        </div>

                        <div class="am-form-group reply-submit am-form-group-refreshing t-c">
                            <input type="hidden" name="id" value="" />
                            <button type="submit" class="am-btn am-btn-success am-radius am-btn-sm" data-am-loading="{loadingText:'处理中...'}">回复</button>
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