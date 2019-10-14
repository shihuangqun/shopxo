<?php /*a:5:{s:77:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/index\create.html";i:1563161086;s:78:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\header.html";i:1563161086;s:82:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\header_nav.html";i:1563161086;s:78:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\footer.html";i:1563161086;s:82:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\footer_nav.html";i:1563161086;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>ShopXO安装程序</title>
	<meta name="description" content="ShopXO是国内领先的商城系统提供商，为企业提供php商城系统、微信商城、小程序。" />
    <meta name="keywords" content="ShopXO,开源电商系统,开源商城,开源B2C,免费商城系统,商城系统,B2C商城,微信商城,支付宝小程序,微信小程序,微信公众号,支付宝生活号" />
	<meta name="generator" content="<?php echo __MY_URL__; ?>" />
	<meta name="application-name" content="ShopXO" />
	<meta name="msapplication-tooltip" content="ShopXO" />
	<meta name="msapplication-starturl" content="<?php echo __MY_URL__; ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo __MY_URL__; ?>favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/assets/css/amazeui.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-switch/amazeui.switch.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/cropper/cropper.min.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/css/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/install/css/index.css" />
<body>

<!-- header nav -->
<div class="header-nav">
    <div class="inside">
        <p class="logo-name">ShopXO<span>安装向导 <?php echo htmlentities(APPLICATION_VERSION); ?></span></p>
        <ul class="schedule <?php if(isset($action) && $action == 'index'): ?>active<?php endif; ?>">
            <li class="number">1</li>
            <li class="word">使用协议</li>
        </ul>
        <ul class="schedule <?php if(isset($action) && $action == 'check'): ?>active<?php endif; ?>">
            <li class="number">2</li>
            <li class="word">环境检测</li>
        </ul>
        <ul class="schedule <?php if(isset($action) && $action == 'create'): ?>active<?php endif; ?>">
            <li class="number">3</li>
            <li class="word">创建数据</li>
        </ul>
        <ul class="schedule <?php if(isset($action) && $action == 'success'): ?>active<?php endif; ?>">
            <li class="number">4</li>
            <li class="word">安装完成</li>
        </ul>
    </div>
</div>

<!-- conntent start  -->
<div class="am-g inside create">
    <h2>数据库信息</h2>
    <div class="am-alert am-alert-warning am-radius" data-am-alert>
        <button type="button" class="am-close">&times;</button>
        <p class="fs-12">温馨提示</p>
        <p class="fs-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;建议采用utf8mb4编码、MySQL版本5.6或5.7</p>
        <?php if(!empty($charset_type_list)): foreach($charset_type_list as $v): ?>
                <p class="fs-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo htmlentities($v['charset']); ?>编码、MySQL版本需 <?php echo htmlentities($v['version']); ?> 及以上版本 （<?php echo htmlentities($v['collate']); ?>）</p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <form class="am-form am-form-horizontal form-validation" method="post" action="<?php echo MyUrl('install/index/add'); ?>" request-type="ajax-url" request-value="<?php echo MyUrl('install/index/successful'); ?>" timeout="60000">
        <div class="am-form-group">
            <label class="am-u-sm-2 am-form-label">数据库类型</label>
            <div class="am-u-sm-10">
                <input type="text" name="DB_TYPE" placeholder="数据库类型" value="mysql" class="am-radius am-input-sm" disabled data-validation-message="请选择数据库类型" required />
            </div>
        </div>

        <div class="am-form-group am-form-select">
            <label class="am-u-sm-2 am-form-label">数据库编码</label>
            <div class="am-u-sm-10">
                <select class="am-input-sm am-radius chosen-select" name="DB_CHARSET" data-validation-message="请选择数据编码" required>
                    <?php if(!empty($charset_type_list)): foreach($charset_type_list as $v): ?>
                            <option value="<?php echo htmlentities($v['charset']); ?>"><?php echo htmlentities($v['charset']); ?> - <?php echo htmlentities($v['collate']); ?> （mysql版本>=<?php echo htmlentities($v['version']); ?>）</option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>

        <div class="am-form-group">
            <label class="am-u-sm-2 am-form-label">数据库服务器</label>
            <div class="am-u-sm-10">
                <input type="text" name="DB_HOST" placeholder="数据库服务器" value="127.0.0.1" class="am-radius am-input-sm" data-validation-message="请填写数据库服务器地址" required />
            </div>
        </div>

        <div class="am-form-group">
            <label class="am-u-sm-2 am-form-label">数据库端口</label>
            <div class="am-u-sm-10">
                <input type="number" name="DB_PORT" placeholder="数据库端口" value="3306" class="am-radius am-input-sm" data-validation-message="请填写数据库端口" required />
            </div>
        </div>

        <div class="am-form-group">
            <label class="am-u-sm-2 am-form-label">数据库名</label>
            <div class="am-u-sm-10">
                <input type="text" name="DB_NAME" placeholder="数据库名" value="shopxo" class="am-radius am-input-sm" data-validation-message="请填写数据库名" required />
            </div>
        </div>

        <div class="am-form-group">
            <label class="am-u-sm-2 am-form-label">数据库用户名</label>
            <div class="am-u-sm-10">
                <input type="text" name="DB_USER" placeholder="数据库用户名" value="" class="am-radius am-input-sm" data-validation-message="请填写数据库用户名" required />
            </div>
        </div>

        <div class="am-form-group">
            <label class="am-u-sm-2 am-form-label">数据库密码</label>
            <div class="am-u-sm-10">
                <input type="text" name="DB_PWD" placeholder="数据库密码" value="" class="am-radius am-input-sm" data-validation-message="请填写数据库密码" required />
            </div>
        </div>

        <div class="am-form-group">
            <label class="am-u-sm-2 am-form-label">数据表前缀</label>
            <div class="am-u-sm-10">
                <input type="text" name="DB_PREFIX" placeholder="数据表前缀" value="s_" class="am-radius am-input-sm" data-validation-message="请填写数据表前缀" required />
            </div>
        </div>

        <div class="am-form-group am-form-group-refreshing agree ongoing-button">
            <a href="<?php echo MyUrl('install/index/check'); ?>" class="am-btn am-btn-secondary am-radius">上一步</a>
            <button type="submit" class="am-btn am-btn-success am-radius btn-loading-example" data-am-loading="{spinner:'circle-o-notch', loadingText:'安装中...'}">确认</button>
        </div>
    </form>
</div>
<!-- conntent end  -->

<!-- footer start -->
<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
    <div class="am-footer-switch">
        <span class="am-footer-ysp" data-rel="mobile" data-am-modal="{target: '#am-switch-mode'}">
        <a href="http://shopxo.net/" target="_blank" title="ShopXO官网">ShopXO官网</a>
        </span>
        <span class="am-footer-divider"> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; </span>
        <span class="am-footer-ysp" data-rel="mobile" data-am-modal="{target: '#am-switch-mode'}">
        <a href="http://store.shopxo.net/" target="_blank" title="ShopXO应用商店">ShopXO应用商店</a>
        </span>
        <span class="am-footer-divider"> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp; </span>
        <a href="http://ask.shopxo.net/" target="_blank" title="官方论坛">官方论坛</a>
    </div>
    <div class="am-footer-miscs">
        <p>由 <a href="http://shopxo.net/" title="ShopXO" target="_blank" class="">ShopXO</a> 提供技术支持</p>
        <p>CopyRight©<?php echo date('Y'); ?> ShopXO <?php echo htmlentities(APPLICATION_VERSION); ?> Inc.</p>
        <p>黔ICP备15003530号-5</p>
    </div>
</footer>
<!-- footer end -->

</body>
</html>

<!-- 类库 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/jquery/jquery-2.1.0.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/assets/js/amazeui.min.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/js/common.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/install/js/index.js"></script>

<!-- amazeui插件 -->
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-chosen/amazeui.chosen.min.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/amazeui-dialog/amazeui.dialog.min.js"></script>