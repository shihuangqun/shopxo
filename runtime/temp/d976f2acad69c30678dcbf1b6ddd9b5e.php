<?php /*a:5:{s:76:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/index\index.html";i:1563161086;s:78:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\header.html";i:1563161086;s:82:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\header_nav.html";i:1563161086;s:78:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\footer.html";i:1563161086;s:82:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\footer_nav.html";i:1563161086;}*/ ?>
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
<div class="am-g inside agreement">
    <h2>安装协议</h2>
    <ul>
        <li class="title">ShopXO遵循Apache2开源协议发布</li>
        <li>1.Apache Licence是著名的非盈利开源组织Apache采用的协议</li>
        <li>2.该协议和BSD类似，鼓励代码共享和尊重原作者的著作权，同样允许代码修改，再作为开源或商业软件发布</li>
        <li class="title">需要满足的条件也和BSD类似</li>
        <li>1.需要给代码的用户一份Apache Licence</li>
        <li>2.如果你修改了代码，需要在被修改的文件中说明</li>
        <li>3.在延伸的代码中（修改和有源代码衍生的代码中）需要带有原来代码中的协议，商标，专利声明和其他原来作者规定需要包含的说明</li>
        <li>4.如果再发布的产品中包含一个Notice文件，则在Notice文件中需要带有Apache icence</li>
        <li>5.你可以在Notice中增加自己的许可，但不可以表现为对Apache Licence构成更改</li>
        <li>6.Apache Licence也是对商业应用友好的许可，使用者也可以在需要的时候修改代码来满足需要并作为开源或商业产品发布/销售</li>
        <li>7.英文原文：<a href="http://www.apache.org/licenses/LICENSE-2.0.html" target="_blank">http://www.apache.org/licenses/LICENSE-2.0.html</a></li>
    </ul>

    <div class="agree">
        <a href="<?php echo MyUrl('install/index/check'); ?>" class="am-btn am-btn-success am-radius">同意</a>
    </div>
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