<?php /*a:5:{s:76:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/index\check.html";i:1563161086;s:78:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\header.html";i:1563161086;s:82:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\header_nav.html";i:1563161086;s:78:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\footer.html";i:1563161086;s:82:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/install/view/public\footer_nav.html";i:1563161086;}*/ ?>
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
<div class="am-g inside check">
    <h2>环境检查</h2>
    <table class="am-table">
        <tr>
            <th width="25%">环境</th>
            <th width="25%">程序所需</th>
            <th width="25%">当前服务器</th>
            <th width="25%">是否符合</th>
        </tr>
        <tr class="<?php if(function_exists('php_uname')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>操作系统</td>
            <td>无限制</td>
            <td><?php echo function_exists('php_uname') ? php_uname('s') : '未知（php_uname函数未启用）'; ?></td>
            <td><?php echo function_exists('php_uname') ? '√' : '×'; ?></td>
        </tr>

        <?php $php_version = explode('.', PHP_VERSION); ?>
        <tr class="<?php if(($php_version['0'] >= 7) || ($php_version['0'] >=5 && $php_version['1'] >=6 )){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>PHP版本</td>
            <td>>=5.6</td>
            <td><?php echo PHP_VERSION ?></td>
            <td>
                <?php if(($php_version['0']>=7) || ($php_version['0']>=5 && $php_version['1']>=6)): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>

        <?php
            if(function_exists('gd_info'))
            {
                $tmp = gd_info();
                preg_match("/[\d.]+/", $tmp['GD Version'], $match);
                unset($tmp);
            }
        ?>
        <tr class="<?php if(isset($match[0]) && $match[0] > 2){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>GD库</td>
            <td>2.0</td>
            <td><?php echo isset($match[0]) ? $match[0] : '未知（gd_info函数未启用）'; ?></td>
            <td>
                <?php if(isset($match[0]) && $match[0] > 2): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
    </table>

    <h2>目录/文件权限检查</h2>
    <table class="am-table">
        <tr>
            <th width="25%">环境</th>
            <th width="25%">所需状态</th>
            <th width="25%">当前状态</th>
            <th width="25%">是否符合</th>
        </tr>
        <tr class="<?php if(is_writable(ROOT)){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT)): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT)): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'config')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./config</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'config')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'config')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'route')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./route</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'route')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'route')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'runtime')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./runtime</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'runtime')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'runtime')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/upload/file')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/upload/file</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/file')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/file')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/upload/images')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/upload/images</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/images')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/images')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/upload/video')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/upload/video</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/video')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/upload/video')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/appmini/new')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/appmini/new</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/appmini/new')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/appmini/new')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'extend/payment')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./extend/payment</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'extend/payment')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'extend/payment')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'application/index/view')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./application/index/view</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'application/index/view')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'application/index/view')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'application/tags.php')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./application/tags.php</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'application/tags.php')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'application/tags.php')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'application/plugins')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./application/plugins</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'application/plugins')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'application/plugins')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/plugins/css')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/plugins/css</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/css')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/css')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/plugins/js')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/plugins/js</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/js')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/js')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(is_writable(ROOT.'public/static/plugins/images')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>./public/static/plugins/images</td>
            <td>可写</td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/images')): ?>
                    可写
                <?php else: ?>
                    不可写
                <?php endif ?>
            </td>
            <td>
                <?php if (is_writable(ROOT.'public/static/plugins/images')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
    </table>

    <h2>函数/类</h2>
    <table class="am-table">
        <tr>
            <th width="25%">环境</th>
            <th width="25%">所需状态</th>
            <th width="25%">当前状态</th>
            <th width="25%">是否符合</th>
        </tr>
        <tr class="<?php if(function_exists('curl_init')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>curl_init 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('curl_init')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('curl_init')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('fsockopen')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>fsockopen 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('fsockopen')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('fsockopen')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('file_get_contents')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>file_get_contents 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('file_get_contents')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('file_get_contents')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('mb_convert_encoding')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>mb_convert_encoding 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('mb_convert_encoding')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('mb_convert_encoding')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('json_encode')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>json_encode 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('json_encode')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('json_encode')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('json_decode')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>json_decode 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('json_decode')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('json_decode')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('simplexml_load_string')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>simplexml_load_string 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('simplexml_load_string')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('simplexml_load_string')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('mb_substr')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>mb_substr 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('mb_substr')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('mb_substr')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(function_exists('mb_strlen')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>mb_strlen 函数</td>
            <td>支持</td>
            <td>
                <?php if (function_exists('mb_strlen')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (function_exists('mb_strlen')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(class_exists('mysqli')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>mysqli 类</td>
            <td>支持</td>
            <td>
                <?php if (class_exists('mysqli')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (class_exists('mysqli')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(class_exists('pdo')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>pdo 类</td>
            <td>支持</td>
            <td>
                <?php if (class_exists('pdo')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (class_exists('pdo')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
        <tr class="<?php if(class_exists('ZipArchive')){ echo 'yes'; } else { echo 'am-danger'; } ?>">
            <td>ZipArchive 类</td>
            <td>支持</td>
            <td>
                <?php if (class_exists('ZipArchive')): ?>
                    支持
                <?php else: ?>
                    不支持
                <?php endif ?>
            </td>
            <td>
                <?php if (class_exists('ZipArchive')): ?>
                    √
                <?php else: ?>
                    ×
                <?php endif ?>
            </td>
        </tr>
    </table>

    <div class="agree ongoing-button">
        <a href="<?php echo MyUrl('install/index/index'); ?>" class="am-btn am-btn-secondary am-radius">上一步</a>
        <button type="button" class="am-btn am-btn-success am-radius check-submit" data-url="<?php echo MyUrl('install/index/create'); ?>">下一步</button>
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