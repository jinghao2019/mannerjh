define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'shop/shop/index' + location.search,
                    add_url: 'shop/shop/add',
                    edit_url: 'shop/shop/edit',
                    del_url: 'shop/shop/del',
                    multi_url: 'shop/shop/multi',
                    table: 'shop',
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
                        {field: 'name', title: __('Name')},
                        {field: 'area_id', title: __('Area_id')},
                        {field: 'area_name', title: __('Area_name')},
                        {field: 'address', title: __('Address')},
                        {field: 'begin_time', title: __('Begin_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'end_time', title: __('End_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'type', title: __('Type')},
                        {field: 'main_image', title: __('Main_image'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'lat', title: __('Lat'), operate:'BETWEEN'},
                        {field: 'lng', title: __('Lng'), operate:'BETWEEN'},
                        {field: 'create_time', title: __('Create_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'update_time', title: __('Update_time'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'summary', title: __('Summary')},
                        {field: 'main_image_id', title: __('Main_image_id')},
                        {field: 'sale', title: __('Sale')},
                        {field: 'collect', title: __('Collect')},
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