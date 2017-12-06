<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Kamla Mills - Purchase Requisition</title>

        <meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
        <script src="assets/js/ace-extra.min.js"></script>

    </head>

    <body class="no-skin">
        <?php include('Navigation.php'); ?>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Site Incharge</a>
                            </li>

                            <li>
                                <a href="#">Create PR</a>
                            </li>

                        </ul>

                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div>
                    </div>

                    <div class="page-content">

                        <div class="page-header">
                            <h1>
                                Site Incharge
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    Purchase requisition form
                                </small>
                            </h1>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="alert alert-info">
                                    <button class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>

                                    <i class="ace-icon fa fa-hand-o-right"></i>
                                    Requisitioner Information.
                                </div>
                                <form class="form-horizontal" role="form">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Name </label>

                                                    <div class="col-sm-9">
                                                        <input type="text" id="form-field-1-1" placeholder="Requisitioner Name" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Department </label>

                                                    <div class="col-sm-9">
                                                        <input type="text" id="form-field-1-1" placeholder="Department" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Mobile</label>

                                                    <div class="col-sm-9">
                                                        <input type="text" id="form-field-1-1" placeholder="Enter Mobile Number" class="form-control input-mask-phone">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xs-6">

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Delivery Location </label>

                                                    <div class="col-sm-9">
                                                        <input type="text" id="form-field-1-1" placeholder="Delivery Location" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Due Date </label>

                                                    <div class="col-sm-9">
                                                        <input class="form-control input-mask-date" type="text" id="form-field-mask-1">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">PO</label>

                                                    <div class="col-sm-9">
                                                        <input type="text" id="form-field-1-1" placeholder="PO Number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hr hr-24"></div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">

                                <table id="grid-table"></table>

                                <div id="grid-pager"></div>
                            </div>
                           
                            
                            
                                                                <div class="clearfix form-actions">
                                        <center>
                                            <div class="">
                                                <button class="btn btn-info" type="button">
                                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                                    Raise PR
                                                </button>

                                                &nbsp; &nbsp; &nbsp;
                                                <button class="btn" type="reset">
                                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                                    Reset
                                                </button>
                                            </div>
                                        </center>
                                    </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Ace</span>
                            Application &copy; 2013-2014
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>


        <script src="assets/js/jquery-2.1.4.min.js"></script>

        <script type="text/javascript">
                if ('ontouchstart' in document.documentElement)
                    document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/jquery.jqGrid.min.js"></script>
        <script src="assets/js/grid.locale-en.js"></script>

        <!-- ace scripts -->
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>
        <script src="assets/js/jquery.maskedinput.min.js"></script>


        <script src="assets/js/jquery-ui.custom.min.js"></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="assets/js/chosen.jquery.min.js"></script>
        <script src="assets/js/spinbox.min.js"></script>
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/bootstrap-timepicker.min.js"></script>
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/daterangepicker.min.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
        <script src="assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/js/jquery.knob.min.js"></script>
        <script src="assets/js/autosize.min.js"></script>
        <script src="assets/js/jquery.inputlimiter.min.js"></script>
        <script src="assets/js/jquery.maskedinput.min.js"></script>
        <script src="assets/js/bootstrap-tag.min.js"></script>


        <script type="text/javascript">
                jQuery(function ($) {
                    $('#id-disable-check').on('click', function () {
                        var inp = $('#form-input-readonly').get(0);
                        if (inp.hasAttribute('disabled')) {
                            inp.setAttribute('readonly', 'true');
                            inp.removeAttribute('disabled');
                            inp.value = "This text field is readonly!";
                        } else {
                            inp.setAttribute('disabled', 'disabled');
                            inp.removeAttribute('readonly');
                            inp.value = "This text field is disabled!";
                        }
                    });


                    if (!ace.vars['touch']) {
                        $('.chosen-select').chosen({allow_single_deselect: true});

                        $(window)
                                .off('resize.chosen')
                                .on('resize.chosen', function () {
                                    $('.chosen-select').each(function () {
                                        var $this = $(this);
                                        $this.next().css({'width': $this.parent().width()});
                                    })
                                }).trigger('resize.chosen');
                        $(document).on('settings.ace.chosen', function (e, event_name, event_val) {
                            if (event_name != 'sidebar_collapsed')
                                return;
                            $('.chosen-select').each(function () {
                                var $this = $(this);
                                $this.next().css({'width': $this.parent().width()});
                            })
                        });


                        $('#chosen-multiple-style .btn').on('click', function (e) {
                            var target = $(this).find('input[type=radio]');
                            var which = parseInt(target.val());
                            if (which == 2)
                                $('#form-field-select-4').addClass('tag-input-style');
                            else
                                $('#form-field-select-4').removeClass('tag-input-style');
                        });
                    }


                    $('[data-rel=tooltip]').tooltip({container: 'body'});
                    $('[data-rel=popover]').popover({container: 'body'});

                    autosize($('textarea[class*=autosize]'));

                    $('textarea.limited').inputlimiter({
                        remText: '%n character%s remaining...',
                        limitText: 'max allowed : %n.'
                    });

                    $.mask.definitions['~'] = '[+-]';
                    $('.input-mask-date').mask('99/99/9999');
                    $('.input-mask-phone').mask('9999999999');
                    $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
                    $(".input-mask-product").mask("a*-999-a999", {placeholder: " ", completed: function () {
                            alert("You typed the following: " + this.val());
                        }});

                    $('#id-input-file-3').ace_file_input({
                        style: 'well',
                        btn_choose: 'Drop files here or click to choose',
                        btn_change: null,
                        no_icon: 'ace-icon fa fa-cloud-upload',
                        droppable: true,
                        thumbnail: 'small'//large | fit
                                //,icon_remove:null//set null, to hide remove/reset button
                                /**,before_change:function(files, dropped) {
                                 //Check an example below
                                 //or examples/file-upload.html
                                 return true;
                                 }*/
                                /**,before_remove : function() {
                                 return true;
                                 }*/
                        ,
                        preview_error: function (filename, error_code) {
                            //name of the file that failed
                            //error_code values
                            //1 = 'FILE_LOAD_FAILED',
                            //2 = 'IMAGE_LOAD_FAILED',
                            //3 = 'THUMBNAIL_FAILED'
                            //alert(error_code);
                        }

                    }).on('change', function () {
                        //console.log($(this).data('ace_input_files'));
                        //console.log($(this).data('ace_input_method'));
                    });





                    $('.date-picker').datepicker({
                        autoclose: true,
                        todayHighlight: true
                    })
                            //show datepicker when clicking on the icon
                            .next().on(ace.click_event, function () {
                        $(this).prev().focus();
                    });

                    //or change it into a date range picker
                    $('.input-daterange').datepicker({autoclose: true});

                    if (!ace.vars['old_ie'])
                        $('#date-timepicker1').datetimepicker({
                            //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
                            icons: {
                                time: 'fa fa-clock-o',
                                date: 'fa fa-calendar',
                                up: 'fa fa-chevron-up',
                                down: 'fa fa-chevron-down',
                                previous: 'fa fa-chevron-left',
                                next: 'fa fa-chevron-right',
                                today: 'fa fa-arrows ',
                                clear: 'fa fa-trash',
                                close: 'fa fa-times'
                            }
                        }).next().on(ace.click_event, function () {
                            $(this).prev().focus();
                        });

                });
        </script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            var grid_data =
                    [
                        {}
                    ];


            var subgrid_data =
                    [
                        {id: "1", name: "sub grid item 1", qty: 11}

                    ];

            jQuery(function ($) {
                var grid_selector = "#grid-table";
                var pager_selector = "#grid-pager";


                var parent_column = $(grid_selector).closest('[class*="col-"]');
                //resize to fit page size
                $(window).on('resize.jqGrid', function () {
                    $(grid_selector).jqGrid('setGridWidth', parent_column.width());
                })

                //resize on sidebar collapse/expand
                $(document).on('settings.ace.jqGrid', function (ev, event_name, collapsed) {
                    if (event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed') {
                        //setTimeout is for webkit only to give time for DOM changes and then redraw!!!
                        setTimeout(function () {
                            $(grid_selector).jqGrid('setGridWidth', parent_column.width());
                        }, 20);
                    }
                })

                //if your grid is inside another element, for example a tab pane, you should use its parent's width:
                /**
                 $(window).on('resize.jqGrid', function () {
                 var parent_width = $(grid_selector).closest('.tab-pane').width();
                 $(grid_selector).jqGrid( 'setGridWidth', parent_width );
                 })
                 //and also set width when tab pane becomes visible
                 $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                 if($(e.target).attr('href') == '#mygrid') {
                 var parent_width = $(grid_selector).closest('.tab-pane').width();
                 $(grid_selector).jqGrid( 'setGridWidth', parent_width );
                 }
                 })
                 */


                jQuery(grid_selector).jqGrid({

                    //direction: "rtl",

                    //subgrid options
                    subGrid: true,
                    //subGridModel: [{ name : ['No','Item Name','Qty'], width : [55,200,80] }],
                    //datatype: "xml",
                    subGridOptions: {
                        plusicon: "ace-icon fa fa-plus center bigger-110 blue",
                        minusicon: "ace-icon fa fa-minus center bigger-110 blue",
                        openicon: "ace-icon fa fa-chevron-right center orange"
                    },
                    //for this example we are using local data
                    subGridRowExpanded: function (subgridDivId, rowId) {
                        var subgridTableId = subgridDivId + "_t";
                        $("#" + subgridDivId).html("<table id='" + subgridTableId + "'></table>");
                        $("#" + subgridTableId).jqGrid({
                            datatype: 'local',
                            data: subgrid_data,
                            colNames: ['No', 'Item Name', 'Qty'],
                            colModel: [
                                {name: 'id', width: 50},
                                {name: 'name', width: 150},
                                {name: 'qty', width: 50}
                            ]
                        });
                    },

                    data: grid_data,
                    datatype: "local",
                    height: 250,
                    colNames: [' ', 'Sr', 'Item Code', 'Description', 'Quantity', 'Unit', 'Make / OEM'],

                    colModel: [
                        {name: 'myac', index: '', width: 80, fixed: true, sortable: false, resize: false,
                            formatter: 'actions',

                            formatoptions: {
                                keys: true,

                                //delbutton: false,//disable delete button

                                delOptions: {recreateForm: true, beforeShowForm: beforeDeleteCallback},
                                //editformbutton:true, editOptions:{recreateForm: true, beforeShowForm:beforeEditCallback}

                            }
                        },
                        {name: 'id', index: 'id', width: 30, sorttype: "int", editable: false},
                        {name: 'Item_Code', index: 'Item_Code', width: 60, editable: true, sorttype: "int", editable: true},
                        {name: 'Description', index: 'Description', width: 150, sortable: false, editable: true, edittype: "textarea", editoptions: {rows: "2", cols: "30"}},
                        {name: 'Quantity', index: 'Quantity', width: 30, editable: true, editoptions: {size: "10", maxlength: "10"}},
                        {name: 'Unit', index: 'Unit', width: 90, editable: true, edittype: "select", editoptions: {value: "Kg:Kg;Meter:Meter;Feet:Feet;Inch:Inch"}},
                        {name: 'Make_OEM', index: 'Make_OEM', width: 150, editable: true, editoptions: {size: "20", maxlength: "30"}}

                    ],

                    viewrecords: true,
                    rowNum: 10,
                    rowList: [10, 20, 30],
                    pager: pager_selector,
                    altRows: true,
                    //toppager: true,

                    multiselect: true,
                    //multikey: "ctrlKey",
                    multiboxonly: true,

                    loadComplete: function () {
                        var $this = $(this), rows = this.rows, l = 2, i, row;
                        for (i = 0; i < l; i++) {
                            row = rows[i];
                            if ($.inArray('jqgrow', row.className.split(' ')) >= 0) {
                                $this.jqGrid('editRow', row.id, true);
                            }
                        }
                        document.getElementById("grid-table").deleteRow(1);

                    },
                    editurl: "test.php", //nothing is saved
                    caption: "jqGrid with inline editing",

                    //,autowidth: true,


                    /**
                     ,
                     grouping:true, 
                     groupingView : { 
                     groupField : ['name'],
                     groupDataSorted : true,
                     plusicon : 'fa fa-chevron-down bigger-110',
                     minusicon : 'fa fa-chevron-up bigger-110'
                     },
                     caption: "Grouping"
                     */
                });

                $(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size

                function aceSwitch(cellvalue, options, cell) {
                    setTimeout(function () {
                        $(cell).find('input[type=checkbox]')
                                .addClass('ace ace-switch ace-switch-5')
                                .after('<span class="lbl"></span>');
                    }, 0);
                }
                //enable datepicker
                function pickDate(cellvalue, options, cell) {
                    setTimeout(function () {
                        $(cell).find('input[type=text]')
                                .datepicker({format: 'yyyy-mm-dd', autoclose: true});
                    }, 0);
                }
                //navButtons

                jQuery(grid_selector).jqGrid('navGrid', pager_selector,
                        {//navbar options
                            edit: true,
                            editicon: 'ace-icon fa fa-pencil blue',
                            add: true,
                            addicon: 'ace-icon fa fa-plus-circle purple',
                            del: true,
                            delicon: 'ace-icon fa fa-trash-o red',

                        },
                        {
                            //edit record form
                            //closeAfterEdit: true,
                            //width: 700,
                            recreateForm: true,
                            beforeShowForm: function (e) {
                                var form = $(e[0]);
                                form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                                style_edit_form(form);
                            }
                        },
                        {
                            //new record form
                            //width: 700,
                            closeAfterAdd: true,
                            recreateForm: true,
                            viewPagerButtons: false,
                            beforeShowForm: function (e) {

                                var form = $(e[0]);
                                form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar')
                                        .wrapInner('<div class="widget-header" />')
                                style_edit_form(form);
                            }
                        },
                        {
                            //delete record form
                            recreateForm: true,
                            beforeShowForm: function (e) {
                                var form = $(e[0]);
                                if (form.data('styled'))
                                    return false;

                                form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                                style_delete_form(form);

                                form.data('styled', true);
                            },
                            onClick: function (e) {

                            }
                        },
                        {
                            //search form
                            recreateForm: true,
                            afterShowSearch: function (e) {
                                var form = $(e[0]);
                                form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                                style_search_form(form);
                            },
                            afterRedraw: function () {
                                style_search_filters($(this));
                            }
                            ,
                            multipleSearch: true,
                            /**
                             multipleGroup:true,
                             showQuery: true
                             */
                        },
                        {
                            //view record form
                            recreateForm: true,
                            beforeShowForm: function (e) {
                                var form = $(e[0]);
                                form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                            }
                        }
                )

                jQuery(grid_selector).jqGrid('inlineNav', '#pager', {addParams: {position: "last"}});


                function style_edit_form(form) {
                    //enable datepicker on "sdate" field and switches for "stock" field
                    var ele = {id: "2", Item_Code: "", Description: "", quantity: "", unit: "", Make_OEM: ""}
                    grid_data.push(ele);

                    $(grid_selector).trigger('reloadGrid');
                    $(grid_selector).trigger('closeModal');
                    form.find('input[name=sdate]').datepicker({format: 'yyyy-mm-dd', autoclose: true})

                    form.find('input[name=stock]').addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');
                    //don't wrap inside a label element, the checkbox value won't be submitted (POST'ed)
                    //.addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');


                    //update buttons classes
                    var buttons = form.next().find('.EditButton .fm-button');
                    buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide();//ui-icon, s-icon
                    buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
                    buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>')

                    buttons = form.next().find('.navButton a');
                    buttons.find('.ui-icon').hide();
                    buttons.eq(0).append('<i class="ace-icon fa fa-chevron-left"></i>');
                    buttons.eq(1).append('<i class="ace-icon fa fa-chevron-right"></i>');
                }

                function style_delete_form(form) {
                    var buttons = form.next().find('.EditButton .fm-button');
                    buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide();//ui-icon, s-icon
                    buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
                    buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>')
                }

                function style_search_filters(form) {
                    form.find('.delete-rule').val('X');
                    form.find('.add-rule').addClass('btn btn-xs btn-primary');
                    form.find('.add-group').addClass('btn btn-xs btn-success');
                    form.find('.delete-group').addClass('btn btn-xs btn-danger');
                }
                function style_search_form(form) {
                    var dialog = form.closest('.ui-jqdialog');
                    var buttons = dialog.find('.EditTable')
                    buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
                    buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
                    buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
                }

                function beforeDeleteCallback(e) {
                    var form = $(e[0]);
                    if (form.data('styled'))
                        return false;

                    form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                    style_delete_form(form);

                    form.data('styled', true);
                }

                function beforeEditCallback(e) {
                    var form = $(e[0]);
                    form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                    style_edit_form(form);
                }

                //it causes some flicker when reloading or navigating grid
                //it may be possible to have some custom formatter to do this as the grid is being created to prevent this
                //or go back to default browser checkbox styles for the grid
                function styleCheckbox(table) {
                    /**
                     $(table).find('input:checkbox').addClass('ace')
                     .wrap('<label />')
                     .after('<span class="lbl align-top" />')
                     
                     
                     $('.ui-jqgrid-labels th[id*="_cb"]:first-child')
                     .find('input.cbox[type=checkbox]').addClass('ace')
                     .wrap('<label />').after('<span class="lbl align-top" />');
                     */
                }


                //unlike navButtons icons, action icons in rows seem to be hard-coded
                //you can change them like this in here if you want
                function updateActionIcons(table) {
                    /**
                     var replacement = 
                     {
                     'ui-ace-icon fa fa-pencil' : 'ace-icon fa fa-pencil blue',
                     'ui-ace-icon fa fa-trash-o' : 'ace-icon fa fa-trash-o red',
                     'ui-icon-disk' : 'ace-icon fa fa-check green',
                     'ui-icon-cancel' : 'ace-icon fa fa-times red'
                     };
                     $(table).find('.ui-pg-div span.ui-icon').each(function(){
                     var icon = $(this);
                     var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
                     if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
                     })
                     */
                }

                //replace icons with FontAwesome icons like above
                function updatePagerIcons(table) {
                    var replacement =
                            {
                                'ui-icon-seek-first': 'ace-icon fa fa-angle-double-left bigger-140',
                                'ui-icon-seek-prev': 'ace-icon fa fa-angle-left bigger-140',
                                'ui-icon-seek-next': 'ace-icon fa fa-angle-right bigger-140',
                                'ui-icon-seek-end': 'ace-icon fa fa-angle-double-right bigger-140'
                            };
                    $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function () {
                        var icon = $(this);
                        var $class = $.trim(icon.attr('class').replace('ui-icon', ''));

                        if ($class in replacement)
                            icon.attr('class', 'ui-icon ' + replacement[$class]);
                    })
                }

                function enableTooltips(table) {
                    $('.navtable .ui-pg-button').tooltip({container: 'body'});
                    $(table).find('.ui-pg-div').tooltip({container: 'body'});
                }

                //var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');

                $(document).one('ajaxloadstart.page', function (e) {
                    $.jgrid.gridDestroy(grid_selector);
                    $('.ui-jqdialog').remove();
                });
            });
        </script>
    </body>
</html>
