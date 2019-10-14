<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:78:"D:\www\FastAdmin\mannerjh\public/../application/admin\view\shop\shop\edit.html";i:1571023170;s:68:"D:\www\FastAdmin\mannerjh\application\admin\view\layout\default.html";i:1571018976;s:65:"D:\www\FastAdmin\mannerjh\application\admin\view\common\meta.html";i:1571018976;s:67:"D:\www\FastAdmin\mannerjh\application\admin\view\common\script.html";i:1571018976;}*/ ?>
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
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-name" data-rule="required" class="form-control" name="row[name]" type="text" value="<?php echo htmlentities($row['name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Area_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-area_id" data-rule="required" data-source="area/index" class="form-control selectpage" name="row[area_id]" type="text" value="<?php echo htmlentities($row['area_id']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Area_name'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-area_name" class="form-control" name="row[area_name]" type="text" value="<?php echo htmlentities($row['area_name']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Address'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-address" class="form-control" name="row[address]" type="text" value="<?php echo htmlentities($row['address']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Begin_time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-begin_time" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[begin_time]" type="text" value="<?php echo $row['begin_time']?datetime($row['begin_time']):''; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('End_time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-end_time" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[end_time]" type="text" value="<?php echo $row['end_time']?datetime($row['end_time']):''; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Type'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-type" class="form-control" name="row[type]" type="number" value="<?php echo htmlentities($row['type']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Main_image'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <div class="input-group">
                <input id="c-main_image" class="form-control" size="50" name="row[main_image]" type="text" value="<?php echo htmlentities($row['main_image']); ?>">
                <div class="input-group-addon no-border no-padding">
                    <span><button type="button" id="plupload-main_image" class="btn btn-danger plupload" data-input-id="c-main_image" data-mimetype="image/gif,image/jpeg,image/png,image/jpg,image/bmp" data-multiple="false" data-preview-id="p-main_image"><i class="fa fa-upload"></i> <?php echo __('Upload'); ?></button></span>
                    <span><button type="button" id="fachoose-main_image" class="btn btn-primary fachoose" data-input-id="c-main_image" data-mimetype="image/*" data-multiple="false"><i class="fa fa-list"></i> <?php echo __('Choose'); ?></button></span>
                </div>
                <span class="msg-box n-right" for="c-main_image"></span>
            </div>
            <ul class="row list-inline plupload-preview" id="p-main_image"></ul>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Lat'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-lat" class="form-control" step="0.000001" name="row[lat]" type="number" value="<?php echo htmlentities($row['lat']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Lng'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-lng" class="form-control" step="0.000001" name="row[lng]" type="number" value="<?php echo htmlentities($row['lng']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Create_time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-create_time" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[create_time]" type="text" value="<?php echo $row['create_time']?datetime($row['create_time']):''; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Update_time'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-update_time" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[update_time]" type="text" value="<?php echo $row['update_time']?datetime($row['update_time']):''; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Summary'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-summary" class="form-control" name="row[summary]" type="text" value="<?php echo htmlentities($row['summary']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Main_image_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-main_image_id" data-rule="required" data-source="main/image/index" class="form-control selectpage" name="row[main_image_id]" type="text" value="<?php echo htmlentities($row['main_image_id']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Maincontent'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-maincontent" class="form-control editor" rows="5" name="row[maincontent]" cols="50"><?php echo htmlentities($row['maincontent']); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Sale'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-sale" class="form-control" name="row[sale]" type="number" value="<?php echo htmlentities($row['sale']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Collect'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-collect" class="form-control" name="row[collect]" type="number" value="<?php echo htmlentities($row['collect']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Shop_time_gap'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea id="c-shop_time_gap" data-rule="required" class="form-control " rows="5" name="row[shop_time_gap]" cols="50"><?php echo htmlentities($row['shop_time_gap']); ?></textarea>
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