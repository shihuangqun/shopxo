<?php /*a:1:{s:83:"C:/phpStudy/PHPTutorial/WWW/shopxo/application/admin/view/default/user\buyinfo.html";i:1566267485;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    .items{
        padding: 3px 0;
        overflow: hidden;font-size: 14px;

    }
    .am-fl{
        float: left;
    }
    .items-detail{
        color: #666;
    }
</style>
<body>
<div class="am-panel am-panel-default">

    <div class="am-panel-bd">
        <div class="items am-cf" style="">
            <div class="items-title am-fl">收货地址：</div>
            <div class="items-detail am-fl"><?php echo htmlentities($data['receive_name']); ?>, <?php echo htmlentities($data['receive_tel']); ?>, <?php echo htmlentities($data['receive_province_name']); ?> <?php echo htmlentities($data['receive_city_name']); ?> <?php echo htmlentities($data['receive_county_name']); ?> <?php echo htmlentities($data['receive_address']); ?></div>
        </div>
        <div class="items am-cf">
            <div class="items-title am-fl">订单编号：</div>
            <div class="items-detail am-fl"><?php echo htmlentities($data['order_no']); ?></div>
        </div>
        <div class="items am-cf">
            <div class="items-title am-fl">订单状态：</div>
            <div class="items-detail am-fl"><?php echo htmlentities($data['status_name']); ?></div>
        </div>
        <div class="items am-cf">
            <div class="items-title am-fl">支付状态：</div>
            <div class="items-detail am-fl"><?php echo htmlentities($data['pay_status_name']); ?></div>
        </div>
        <?php if(!empty($data['payment_name'])): ?>
        <div class="items am-cf">
            <div class="items-title am-fl">支付方式：</div>
            <div class="items-detail am-fl"><?php echo htmlentities($data['payment_name']); ?></div>
        </div>
        <?php endif; ?>
        <div class="items am-cf">
            <div class="items-title am-fl">购买数量：</div>
            <div class="items-detail am-fl"><?php echo htmlentities($data['buy_number_count']); ?></div>
        </div>
        <?php if(!empty($data['returned_quantity'])): ?>
        <div class="items am-cf">
            <div class="items-title am-fl">退货数量：</div>
            <div class="items-detail am-fl"><?php echo htmlentities($data['returned_quantity']); ?></div>
        </div>
        <?php endif; if(!empty($data['user_note'])): ?>
        <div class="items am-cf">
            <div class="items-title am-fl">用户留言：</div>
            <div class="items-detail am-fl"><?php echo htmlentities($data['user_note']); ?></div>
        </div>
        <?php endif; ?>
        <div class="items am-cf">
            <div class="items-title am-fl">下单时间：</div>
            <div class="items-detail am-fl">2019-08-20 09:24:15</div>
        </div>
        <?php if(!empty($data['pay_time'])): ?>
        <div class="items am-cf">
            <div class="items-title am-fl">付款时间：</div>
            <div class="items-detail am-fl"><?php echo htmlentities($data['pay_time']); ?></div>
        </div>
        <?php endif; ?>
<!--        <?php if(!empty($data['delivery_time'])): ?>-->
<!--        <div class="items am-cf">-->
<!--            <div class="items-title am-fl">发货时间：</div>-->
<!--            <div class="items-detail am-fl"><?php echo htmlentities($data['delivery_time']); ?></div>-->
<!--        </div>-->
<!--        <?php endif; ?>-->
<!--        <?php if(!empty($data['collect_time'])): ?>-->
<!--        <div class="items am-cf">-->
<!--            <div class="items-title am-fl">收货时间：</div>-->
<!--            <div class="items-detail am-fl"><?php echo htmlentities($data['collect_time']); ?></div>-->
<!--        </div>-->
<!--        <?php endif; ?>-->
<!--        <?php if(!empty($data['user_is_comments_time'])): ?>-->
<!--        <div class="items am-cf">-->
<!--            <div class="items-title am-fl">评论时间：</div>-->
<!--            <div class="items-detail am-fl"><?php echo htmlentities($data['user_is_comments_time']); ?></div>-->
<!--        </div>-->
<!--        <?php endif; ?>-->
<!--        <?php if(in_array($data['status'], [5]) and !empty($data['cancel_time'])): ?>-->
<!--        <div class="items am-cf">-->
<!--            <div class="items-title am-fl">取消时间：</div>-->
<!--            <div class="items-detail am-fl"><?php echo htmlentities($data['cancel_time']); ?></div>-->
<!--        </div>-->
<!--        <?php endif; ?>-->
<!--        <?php if(in_array($data['status'], [6]) and !empty($data['close_time'])): ?>-->
<!--        <div class="items am-cf">-->
<!--            <div class="items-title am-fl">关闭时间：</div>-->
<!--            <div class="items-detail am-fl"><?php echo htmlentities($data['close_time']); ?></div>-->
<!--        </div>-->
<!--        <?php endif; ?>-->

    </div>
</div>
</body>
</html>