<?php /*a:1:{s:80:"/data/home/byu3076970001/htdocs/application/admin/view/default/user/ranking.html";i:1567503767;}*/ ?>
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
        a{
            color:black;
            text-decoration: none;
        }
    </style>
    <title>Title</title>
</head>
<body>
<div class="content-right">
    <div class="content"><br>

        <table class="am-table am-table-striped am-table-hover am-text-middle m-t-10 m-l-5" style="text-align: center;font-size: 10px;">

            <thead>

            <tr>
                <th>排名</th>
                <th>商品名</th>
                <th>商品图</th>
                <th class="am-hide-sm-only">地理位置</th>
                <th class="am-hide-sm-only">浏览次数</th>
                <!--        <th>更多</th>-->
<!--                <th>操作</th>-->
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($data_list)): foreach($data_list as $k => $v): ?>
            <tr id="data-list-">
                <td class="am-hide-sm-only"><?php echo htmlentities($k+1); ?></td>
                <td class="user-info"><a href="index.php?s=/index/goods/index/id/<?php echo htmlentities($v['goods_id']); ?>" target="_blank"><?php echo htmlentities($v['title']); ?></a>
                </td>
                <td class="am-hide-sm-only">
                    <img src="https://<?php echo $_SERVER['HTTP_HOST']?>/public<?php echo htmlentities($v['images']); ?>" alt="" width="50">
                </td>
                <td class="am-hide-sm-only">
                    <?php if(!empty($v['province'])): ?> <?php echo htmlentities($v['province']); ?> <?php endif; if(!empty($v['city'])): ?> <?php echo htmlentities($v['city']); ?> <?php endif; if(!empty($v['district'])): ?><?php echo htmlentities($v['district']); ?> <?php endif; if(!empty($v['street_number'])): ?> <?php echo htmlentities($v['street_number']); ?> <?php endif; ?>
                </td>
                <td class="am-hide-sm-only">
                    <?php echo htmlentities($v['browse_num']); ?>
                </td>


                <td class="view-operation">


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