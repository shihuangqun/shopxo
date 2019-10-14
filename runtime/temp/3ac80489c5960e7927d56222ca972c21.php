<?php /*a:1:{s:86:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/user\collection.html";i:1566207729;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/admin/default/layui-v2.5.4/layui/css/layui.css">
    <style>
        tr th{
            width: 15%;
        }
        .pagination {text-align: center;}

        .pagination li {display: inline-block;margin-right: -1px;padding: 5px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;}

        .pagination li.active {background: #009688;color: #fff;border: 1px solid #009688;}

        .pagination li a {display: block;text-align: center;}
    </style>
    <title>Title</title>
</head>
<body>
<div class="content-right">
    <div class="content"><br>

        <table class="am-table am-table-striped am-table-hover am-text-middle m-t-10 m-l-5" style="text-align: center;font-size: 10px;">

            <thead>

            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th class="am-hide-sm-only">商品图片</th>
                <th class="am-hide-sm-only">收藏时间</th>

                <!--        <th>更多</th>-->
                <!--                <th>操作</th>-->
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($data_list)): foreach($data_list as $v): ?>
            <tr id="data-list-<?php echo htmlentities($v['id']); ?>">
                <td><?php echo htmlentities($v['goods_id']); ?></td>
                <td class="user-info"><a href="index.php?s=/index/goods/index/id/<?php echo htmlentities($v['goods_id']); ?>" target="_blank"><?php echo htmlentities($v['title']); ?></a>
                </td>
                <td class="am-hide-sm-only">
                    <img src="<?php echo htmlentities($v['images']); ?>" alt="" width="50">
                </td>


                <td class="am-hide-sm-only">
                    <?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($v['add_time'])? strtotime($v['add_time']) : $v['add_time'])); ?>
                </td>

                <!--                <td class="am-hide-sm-only">-->
                <!--                    <button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/user/delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>"> 删除</button>-->
                <!--                </td>-->

                <td class="view-operation">

                    <!--            <a href="<?php echo MyUrl('admin/user/saveinfo', array('id'=>$v['id'])); ?>">-->
                    <!--                <button class="am-btn am-btn-secondary am-btn-xs am-radius am-icon-edit"> 编辑</button>-->
                    <!--            </a>-->
                    <!--            <button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/user/delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>"> 删除</button>-->

                </td>

            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>

    </div>
</div>
</body>
<script src="/static/admin/default/layui-v2.5.4/layui/layui.js"></script>

</html>