<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Kamala Mills</title>
        <?php $current="Dashboard";?>
        <meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0 , minimum-scale=1.0" />
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
        <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
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
                                <a href="#">Dashboard</a>
                            </li>

                        </ul>
                    </div>
                    <div class="page-content">
                        <div class="alert alert-block alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>

                            <h4><i class="fa fa-thumbs-up"></i>
                                Welcome to Kamala Mills
                            </h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-xs-6">
                                <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <center><h4>Site Manager</h4></center>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                    <a href="GeneralForm.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <center><h4>Purchase Manager</h4></center>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="Purchasemanager.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <center><h4>Management Approval</h4></center>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="ManagementApproval.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-xs-6">
                                <div class="small-box bg-red">
                                    <div class="inner">
                                        <center><h4>Account Department</h4></center>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Monthly Report</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="text-center">
                                                    <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                                </p>
                                                <div class="chart">
                                                    <canvas id="salesChart" style="height: 180px;"></canvas>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <!--                                            <div class="col-md-4">
                                                                                            <p class="text-center">
                                                                                                <strong>Goal Completion</strong>
                                                                                            </p>
                                            
                                                                                            <div class="progress-group">
                                                                                                <span class="progress-text">Add Products to Cart</span>
                                                                                                <span class="progress-number"><b>160</b>/200</span>
                                            
                                                                                                <div class="progress sm">
                                                                                                    <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                             /.progress-group 
                                                                                            <div class="progress-group">
                                                                                                <span class="progress-text">Complete Purchase</span>
                                                                                                <span class="progress-number"><b>310</b>/400</span>
                                            
                                                                                                <div class="progress sm">
                                                                                                    <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                             /.progress-group 
                                                                                            <div class="progress-group">
                                                                                                <span class="progress-text">Visit Premium Page</span>
                                                                                                <span class="progress-number"><b>480</b>/800</span>
                                            
                                                                                                <div class="progress sm">
                                                                                                    <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                             /.progress-group 
                                                                                            <div class="progress-group">
                                                                                                <span class="progress-text">Send Inquiries</span>
                                                                                                <span class="progress-number"><b>250</b>/500</span>
                                            
                                                                                                <div class="progress sm">
                                                                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                             /.progress-group 
                                                                                        </div>-->
                                            <!-- /.col -->
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="description-block border-right">
                                                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                                                    <h5 class="description-header">$35,210.43</h5>
                                                    <span class="description-text">TOTAL REVENUE</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="description-block border-right">
                                                    <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                                                    <h5 class="description-header">$10,390.90</h5>
                                                    <span class="description-text">TOTAL COST</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="description-block border-right">
                                                    <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                                                    <h5 class="description-header">$24,813.53</h5>
                                                    <span class="description-text">TOTAL PROFIT</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-6">
                                                <div class="description-block">
                                                    <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                                                    <h5 class="description-header">1200</h5>
                                                    <span class="description-text">GOAL COMPLETIONS</span>
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

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>

        <script src="assets/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/jquery.jqGrid.min.js"></script>
        <script src="assets/js/grid.locale-en.js"></script>
        <script src="assets/js/Chart.min.js"></script>
        <script src="assets/js/dashboard2.js"></script>
    </body>
</html>
