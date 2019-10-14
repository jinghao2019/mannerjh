<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\www\FastAdmin\mannerjh\public/../application/admin\view\shop\order\add.html";i:1571024534;s:68:"D:\www\FastAdmin\mannerjh\application\admin\view\layout\default.html";i:1571018976;s:65:"D:\www\FastAdmin\mannerjh\application\admin\view\common\meta.html";i:1571018976;s:67:"D:\www\FastAdmin\mannerjh\application\admin\view\common\script.html";i:1571018976;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Order_no'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-order_no" data-rule="required" class="form-control" name="row[order_no]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('User_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-user_id" data-rule="required" data-source="user/user/index" data-field="nickname" class="form-control selectpage" name="row[user_id]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('User_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-user_name" class="form-control" name="row[user_name]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Tel'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-tel" class="form-control" name="row[tel]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Shop_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-shop_id" data-rule="required" data-source="shop/index" class="form-control selectpage" name="row[shop_id]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Wait_time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-wait_time" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[wait_time]" type="text" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Shop_sep_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-shop_sep_id" data-rule="required" data-source="shop/sep/index" class="form-control selectpage" name="row[shop_sep_id]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Delivery_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-delivery_id" data-rule="required" data-source="delivery/index" class="form-control selectpage" name="row[delivery_id]" type="text" value="">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Finish_time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-finish_time" data-rule="required" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[finish_time]" type="text" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Delete_time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-delete_time" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[delete_time]" type="text" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Dining_type'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-dining_type" data-rule="required" class="form-control" name="row[dining_type]" type="number" value="0">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Print_status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-print_status" data-rule="required" class="form-control" name="row[print_status]" type="number" value="0">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Create_time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-create_time" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[create_time]" type="text" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Total_price'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-total_price" data-rule="required" class="form-control" step="0.01" name="row[total_price]" type="number">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-status" data-rule="required" class="form-control" name="row[status]" type="number" value="0">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Pay_type'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-pay_type" data-rule="required" class="form-control" name="row[pay_type]" type="number" value="1">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Snap_img'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-snap_img" class="form-control " rows="5" name="row[snap_img]" cols="50"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Qrimg'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-qrImg" class="form-control" name="row[qrImg]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Snap_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-snap_name" class="form-control" name="row[snap_name]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Total_count'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-total_count" data-rule="required" class="form-control" name="row[total_count]" type="number" value="0">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Update_time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-update_time" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[update_time]" type="text" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Snap_items'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-snap_items" class="form-control " rows="5" name="row[snap_items]" cols="50"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Prepay_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-prepay_id" data-rule="required" data-source="prepay/index" class="form-control selectpage" name="row[prepay_id]" type="text" value="">
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>