<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Kamala Mills</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
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
                                <a href="#">Home</a>
                            </li>

                            <li>
                                <a href="#">Purchase Order</a>
                            </li>
                            
                        </ul>
                    </div>

                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="space-6"></div>

                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-large">
                                                <h3 class="widget-title grey lighter">
                                                    <i class="ace-icon fa fa-leaf green"></i>
                                                    Purchase Order
                                                </h3>

                                                <div class="widget-toolbar no-border invoice-info">
                                                    <span class="invoice-info-label">Invoice:</span>
                                                    <span class="red">#121212</span>

                                                    <br />
                                                    <span class="invoice-info-label">Date:</span>
                                                    <span class="blue">28/11/2017</span>
                                                </div>

                                                <div class="widget-toolbar hidden-480">
                                                    <a href="#">
                                                        <i class="ace-icon fa fa-print"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main padding-24">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
                                                                    <b>Company Info</b>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <ul class="list-unstyled spaced">
                                                                    <li>
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>Street, City
                                                                    </li>

                                                                    <li>
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>Zip Code
                                                                    </li>

                                                                    <li>
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>State, Country
                                                                    </li>

                                                                    <li>
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>
                                                                        Phone:
                                                                        <b class="red">111-111-111</b>
                                                                    </li>

                                                                    <li class="divider"></li>

                                                                    <li>
                                                                        <i class="ace-icon fa fa-caret-right blue"></i>
                                                                        Paymant Info
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <div class="row">
                                                                <div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
                                                                    <b>Customer Info</b>
                                                                </div>
                                                            </div>

                                                            <div>
                                                                <ul class="list-unstyled  spaced">
                                                                    <li>
                                                                        <i class="ace-icon fa fa-caret-right green"></i>Street, City
                                                                    </li>

                                                                    <li>
                                                                        <i class="ace-icon fa fa-caret-right green"></i>Zip Code
                                                                    </li>

                                                                    <li>
                                                                        <i class="ace-icon fa fa-caret-right green"></i>State, Country
                                                                    </li>

                                                                    <li class="divider"></li>

                                                                    <li>
                                                                        <i class="ace-icon fa fa-caret-right green"></i>
                                                                        Contact Info
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="space"></div>

                                                    <div>
                                                        <table class="table table-striped table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th class="center">Sr.No</th>
                                                                    <th>Qty</th>
                                                                    <th class="hidden-xs">Item</th>
                                                                    <th class="hidden-480">Description</th>
                                                                    <th>Unit</th>
                                                                    <th>Sub Total</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td class="center">1</td>
                                                                    <td>10</td>
                                                                    <td>
                                                                        <a href="#">Item Name</a>
                                                                    </td>
                                                                    <td class="hidden-xs">
                                                                        Item Description
                                                                    </td>
                                                                    <td class="hidden-480"> --- </td>
                                                                    
                                                                    <td>1000</td>
                                                                </tr>
                                                                 <tr>
                                                                    <td class="center">2</td>
                                                                    <td>20</td>

                                                                    <td>
                                                                        <a href="#">Item Name</a>
                                                                    </td>
                                                                    <td class="hidden-xs">
                                                                        Item Description
                                                                    </td>
                                                                    <td class="hidden-480"> --- </td>
                                                                    
                                                                    <td>2000</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                    <div class="hr hr8 hr-double hr-dotted"></div>
                                                    <div class="row">
                                                        <div class="col-sm-5 pull-right">
                                                            <h4 class="pull-right">
                                                                Sub Total :
                                                                <span class="red">3000</span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-5 pull-right">
                                                            <h4 class="pull-right">
                                                                Tax :
                                                                <span class="red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-5 pull-right">
                                                            <h4 class="pull-right">
                                                                Total amount :
                                                                <span class="red">3000</span>
                                                            </h4>
                                                        </div>
                                                    </div>

                                                    <div class="space-6"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>
    </body>
</html>
