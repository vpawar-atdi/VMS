
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>http://stackoverflow.com/a/13083174/315935</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >

    <meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/ui.jqgrid.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.24/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://www.ok-soft-gmbh.com/jqGrid/jquery.jqGrid-4.4.1/js/i18n/grid.locale-en.js"></script>
    <script type="text/javascript">
        $.jgrid.no_legacy_api = true;
        $.jgrid.useJSON = true;
    </script>
    <script type="text/javascript" src="http://www.ok-soft-gmbh.com/jqGrid/jquery.jqGrid-4.4.1/js/jquery.jqGrid.src.js"></script>

    <script type="text/javascript">
    //<![CDATA[
        /*global $ */
        /*jslint unparam: true, plusplus: true, browser: true */
        $(function () {
            'use strict';
            var myData = [
                    { id: "1",  invdate: "2007-10-01", name: "test",   note: "note",   amount: "200.00", tax: "10.00", closed: true,  ship_via: "TN", total: "210.00" },
                    { id: "2",  invdate: "2007-10-02", name: "test2",  note: "note2",  amount: "300.00", tax: "20.00", closed: false, ship_via: "FE", total: "320.00" },
                    { id: "3",  invdate: "2007-09-01", name: "test3",  note: "note3",  amount: "400.00", tax: "30.00", closed: false, ship_via: "FE", total: "430.00" },
                    { id: "4",  invdate: "2007-10-04", name: "test4",  note: "note4",  amount: "200.00", tax: "10.00", closed: true,  ship_via: "TN", total: "210.00" },
                    { id: "5",  invdate: "2007-10-31", name: "test5",  note: "note5",  amount: "300.00", tax: "20.00", closed: false, ship_via: "FE", total: "320.00" },
                    { id: "6",  invdate: "2007-09-06", name: "test6",  note: "note6",  amount: "400.00", tax: "30.00", closed: false, ship_via: "FE", total: "430.00" },
                    { id: "7",  invdate: "2007-10-04", name: "test7",  note: "note7",  amount: "200.00", tax: "10.00", closed: true,  ship_via: "TN", total: "210.00" },
                    { id: "8",  invdate: "2007-10-03", name: "test8",  note: "note8",  amount: "300.00", tax: "20.00", closed: false, ship_via: "FE", total: "320.00" },
                    { id: "9",  invdate: "2007-09-01", name: "test9",  note: "note9",  amount: "400.00", tax: "30.00", closed: false, ship_via: "TN", total: "430.00" },
                    { id: "10", invdate: "2007-09-08", name: "test10", note: "note10", amount: "500.00", tax: "30.00", closed: true,  ship_via: "TN", total: "530.00" },
                    { id: "11", invdate: "2007-09-08", name: "test11", note: "note11", amount: "500.00", tax: "30.00", closed: false, ship_via: "FE", total: "530.00" },
                    { id: "12", invdate: "2007-09-10", name: "test12", note: "note12", amount: "500.00", tax: "30.00", closed: false, ship_via: "FE", total: "530.00" }
                ],
                $grid = $("#list"),
                initDate = function (elem) {
                    setTimeout(function () {
                        $(elem).datepicker({
                            dateFormat: 'dd-M-yy',
                            autoSize: true,
                            changeYear: true,
                            changeMonth: true,
                            showWeek: true,
                            showButtonPanel: true
                        });
                    }, 100);
                },
                numberTemplate = {formatter: 'number', align: 'right', sorttype: 'number',
                    editrules: {number: true, required: true},
                    searchoptions: { sopt: ['eq', 'ne', 'lt', 'le', 'gt', 'ge', 'nu', 'nn', 'in', 'ni'] }};

            $.extend($.jgrid.inlineEdit, {
                keys: true
            });
            $grid.jqGrid({
                datatype: 'local',
                data: myData,
                colNames: ['Client', 'Date', 'Amount', 'Tax', 'Total', 'Closed', 'Shipped via', 'Notes'],
                colModel: [
                    {name: 'name', width: 65},
                    {name: 'invdate', width: 80, align: 'center', sorttype: 'date',
                        formatter: 'date', formatoptions: {newformat: 'd-M-Y'}, datefmt: 'd-M-Y',
                        editoptions: { dataInit: initDate },
                        searchoptions: { sopt: ['eq', 'ne', 'lt', 'le', 'gt', 'ge'], dataInit: initDate }},
                    {name: 'amount', width: 75, template: numberTemplate },
                    {name: 'tax', width: 52, template: numberTemplate },
                    {name: 'total', width: 65, template: numberTemplate },
                    {name: 'closed', width: 80, align: 'center', formatter: 'checkbox',
                        edittype: 'checkbox', editoptions: {value: 'Yes:No', defaultValue: 'Yes'},
                        stype: 'select',
                        searchoptions: {
                            sopt: ['eq', 'ne'],
                            value: 'true:Yes;false:No'
                        }},
                    {name: 'ship_via', width: 100, align: 'center', formatter: 'select',
                        edittype: 'select',
                        editoptions: {
                            value: 'FE:FedEx;TN:TNT;IN:Intim',
                            defaultValue: 'Intime'
                        },
                        stype: 'select',
                        searchoptions: {
                            sopt: ['eq', 'ne'],
                            value: 'FE:FedEx;TN:TNT;IN:Intim'
                        }},
                    {name: 'note', width: 100, sortable: false}
                ],
                cmTemplate: {editable: true},
                rowNum: 10,
                rowList: [5, 10, 20],
                pager: '#pager',
                gridview: true,
                ignoreCase: true,
                rownumbers: true,
                sortname: 'invdate',
                viewrecords: true,
                sortorder: 'desc',
                height: '100%',
                editurl: 'clientArray',
                caption: 'Usage of inlineNav for inline editing'
            });
            $grid.jqGrid('navGrid', '#pager', {add: true, edit: false, del: false});
            $grid.jqGrid('inlineNav', '#pager', {addParams: {position: "last"}});
        });
    //]]>
    </script>
</head>
<body>
    <table id="list"><tr><td></td></tr></table>
    <div id="pager"></div>
</body>
</html>