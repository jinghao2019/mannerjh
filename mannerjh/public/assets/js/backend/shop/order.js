define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'shop/order/index' + location.search,
                    add_url: 'shop/order/add',
                    edit_url: 'shop/order/edit',
                    del_url: 'shop/order/del',
                    multi_url: 'shop/order/multi',
                    table: 'order',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {field: 'order_no', title: __('Order_no')},
                        {field: 'user_id', title: __('User_id')},
                        {field: 'user_name', title: __('User_name')},
                        {field: 'tel', title: __('Tel')},
                        {field: 'shop_id', title: __('Shop_id')},
                        {field: 'wait_time', title: __('Wait_time')},
                        {field: 'shop_sep_id', title: __('Shop_sep_id')},
                        {field: 'delivery_id', title: __('Delivery_id')},
                        {field: 'finish_time', title: __('Finish_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'delete_time', title: __('Delete_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'dining_type', title: __('Dining_type')},
                        {field: 'print_status', title: __('Print_status')},
                        {field: 'create_time', title: __('Create_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'total_price', title: __('Total_price'), operate:'BETWEEN'},
                        {field: 'status', title: __('Status')},
                        {field: 'pay_type', title: __('Pay_type')},
                        {field: 'qrImg', title: __('Qrimg')},
                        {field: 'snap_name', title: __('Snap_name')},
                        {field: 'total_count', title: __('Total_count')},
                        {field: 'update_time', title: __('Update_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'prepay_id', title: __('Prepay_id')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});