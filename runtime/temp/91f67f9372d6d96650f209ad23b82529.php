<?php /*a:1:{s:76:"/data/home/byu3076970001/htdocs/application/admin/view/default/user/buy.html";i:1567503596;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/static/admin/default/layui-v2.5.4/layui/css/layui.css">
    <meta charset="utf-8"><link rel="icon" href="https://jscdn.com.cn/highcharts/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.highcharts.com.cn/highcharts/highcharts.js"></script>
    <script src="https://code.highcharts.com.cn/highcharts/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com.cn/highcharts/modules/exporting.js"></script>
    <script src="https://img.hcharts.cn/highcharts-plugins/highcharts-zh_CN.js"></script>
    <style>
        tr th{
            width: 16%;
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
<div id="container" style="height: 300px;"></div>
<div class="content-right">
    <div class="content"><br>

        <table class="am-table am-table-striped am-table-hover am-text-middle m-t-10 m-l-5" style="text-align: center;font-size: 10px;">

            <thead>

            <tr>
<!--                <th>商品ID</th>-->
                <th class="am-hide-sm-only">商品名</th>
                <th class="am-hide-sm-only">商品图片</th>
                <th class="am-hide-sm-only">价格</th>
                <th class="am-hide-sm-only">数量</th>
                <th class="am-hide-sm-only">下单时间</th>

<!--                        <th>更多</th>-->
                <!--                <th>操作</th>-->

            </tr>
            </thead>
            <tbody>
            <?php if(!empty($data_list)): foreach($data_list as $v): ?>
            <tr id="data-list-<?php echo htmlentities($v['id']); ?>">
<!--                <td><?php echo htmlentities($v['goods_id']); ?></td>-->
                <td class="am-hide-sm-only"><a href="index.php?s=/index/goods/index/id/<?php echo htmlentities($v['goods_id']); ?>" target="_blank"><?php echo htmlentities(mb_substr($v['title'],0,100)); ?></a>
                </td>
                <td class="am-hide-sm-only">
                    <img src="https://<?php echo $_SERVER['HTTP_HOST']?>/public<?php echo htmlentities($v['images']); ?>" alt="" width="50">
                </td>
                <td class="am-hide-sm-only">
                    <?php echo htmlentities($v['total_price']); ?>
                </td>
                <td class="am-hide-sm-only">
                    ×<?php echo htmlentities($v['buy_number']); ?>
                </td>


                <td class="am-hide-sm-only">
                    <?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($v['add_time'])? strtotime($v['add_time']) : $v['add_time'])); ?>
                </td>

                <!--                <td class="am-hide-sm-only">-->
                <!--                    <button class="am-btn am-btn-danger am-btn-xs am-radius am-icon-trash-o submit-delete" data-url="<?php echo MyUrl('admin/user/delete'); ?>" data-id="<?php echo htmlentities($v['id']); ?>"> 删除</button>-->
                <!--                </td>-->


            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>

    </div>
</div>

</body>
<script src="/static/admin/default/layui-v2.5.4/layui/layui.js"></script>
<script type='text/javascript' src="<?php echo htmlentities(__MY_ROOT_PUBLIC__); ?>static/common/lib/jquery/jquery-2.1.0.js"></script>
<script>
    var id = <?php echo htmlentities($id); ?>;
    $.ajax({
        type:'post',
        data:{id:id},
        dataType:'json',
        url:'admin.php?s=/user/buyCount',
        success: function(data){
            console.log(JSON.parse(data));
            var chart = Highcharts.chart('container', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45,
                        beta: 0
                    }
                },
                title: {
                    text: '购买记录'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        depth: 35,
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}'
                        }
                    }
                },

                series: [{
                    type: 'pie',
                    name: '商品占比',
                    data: JSON.parse(data)

                }]

            });

        }
    })
</script>
<script>
    layui.use(['layer', 'form'], function(){
        var layer = layui.layer
            ,form = layui.form;

        // layer.msg('Hello World');
    });
    function buyinfo(id){
        layer.open({
            type: 2,
            skin: 'layui-layer-demo', //样式类名
            title: '订单信息',
            closeBtn: 0, //不显示关闭按钮
            anim: 2,
            area: ['600px', '500px'],
            shadeClose: true, //开启遮罩关闭
            content: 'admin.php?s=/user/buyinfo/id/'+id
        });

    }

</script>

</html>