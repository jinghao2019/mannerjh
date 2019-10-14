<?php

return [
    'Order_no'     => '订单号',
    'User_id'      => '外键,用户id,注意并不是openid',
    'User_name'    => '用户名称',
    'Tel'          => '联系电话,必填的',
    'Shop_id'      => '外键,这个是店铺id',
    'Wait_time'    => '取餐时间  1 半小时 2 一个小时  剩下自己加',
    'Shop_sep_id'  => '外键,这个是店铺取货地点id',
    'Delivery_id'  => '配送员id',
    'Finish_time'  => '完成时间 最终完成的时间',
    'Dining_type'  => '用餐类型 后期待定',
    'Print_status' => '打印状态 0 未打印 1 打印',
    'Status'       => '1:未支付, 2：已支付 3 已完成 只有我们核验通知才能完成订单',
    'Pay_type'     => '1:微信支付,别的支付方式不知道了',
    'Snap_img'     => '订单快照图片',
    'Qrimg'        => '订单核销二维码',
    'Snap_name'    => '订单快照名称',
    'Snap_items'   => '订单其他信息快照（json)',
    'Prepay_id'    => '订单微信支付的预订单id（用于发送模板消息）'
];
