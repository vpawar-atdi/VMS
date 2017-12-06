<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Kamala Mills</title>
        <?php $current="siteIncharge";?>
        <meta name="description" content="Common UI Features &amp; Elements" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="assets/css/jquery.gritter.min.css" />
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
        <style>
            /* some elements used in demo only */
            .spinner-preview {
                width: 100px;
                height: 100px;
                text-align: center;
                margin-top: 60px;
            }

            .dropdown-preview {
                margin: 0 5px;
                display: inline-block;
            }
            .dropdown-preview  > .dropdown-menu {
                display: block;
                position: static;
                margin-bottom: 5px;
            }
        </style>

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
                                <a href="#">Dashboard</a>
                            </li>
                        </ul>
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                Summary Table
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="tabbable">
                                            <ul class="nav nav-tabs" id="myTab">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#summary">
                                                        <i class="green ace-icon fa fa-home bigger-120"></i>
                                                        Summary
                                                    </a>
                                                </li>

                                                <li>
                                                    <a data-toggle="tab" href="#purchase-requisition">
                                                         <i class="green ace-icon fa fa-home bigger-120"></i>
                                                        Purchase Requisition
                                                    </a>
                                                </li>

                                                <li>
                                                    <a data-toggle="tab" href="#inquiry">
                                                         <i class="green ace-icon fa fa-home bigger-120"></i>
                                                        Inquiry
                                                    </a>
                                                </li>

                                                <li>
                                                    <a data-toggle="tab" href="#purchase-order">
                                                         <i class="green ace-icon fa fa-home bigger-120"></i>
                                                        Purchase order
                                                    </a>
                                                </li>

                                                <li>
                                                    <a data-toggle="tab" href="#delivery">
                                                         <i class="green ace-icon fa fa-home bigger-120"></i>
                                                        Delivery
                                                    </a>
                                                </li>

                                                <li>
                                                    <a data-toggle="tab" href="#payment">
                                                         <i class="green ace-icon fa fa-home bigger-120"></i>
                                                        Payment
                                                    </a>
                                                </li>

                                                <li>
                                                    <a data-toggle="tab" href="#rejected">
                                                         <i class="green ace-icon fa fa-home bigger-120"></i>
                                                        Rejected
                                                    </a>
                                                </li>

                                            </ul>
                                            <div class="tab-content">
                                                <div id="summary" class="tab-pane fade in active">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clearfix">
                                                                <div class="pull-right tableTools-container-summary"></div>
                                                            </div>
                                                            <div class="table-header">
                                                                Results
                                                            </div>
                                                            <div style="overflow: auto;">
                                                                <table id="dynamic-table-summary" class="table table-striped table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Sr.No.</th>
                                                                            <th>Status</th>
                                                                            <th>Purchase Requisition No.</th>
                                                                            <th>Initiated By</th>
                                                                            <th>Initiated Date</th>
                                                                            <th>Required Date</th>
                                                                            <th>Purchase Requisition ID</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-01</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U441</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-02</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U442</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-03</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U443</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-04</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U444</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-05</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U445</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-06</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U446</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-07</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U447</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-08</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U448</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-09</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U449</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-10</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U450</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-11</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U451</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-12</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U452</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="purchase-requisition" class="tab-pane fade">

                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clearfix">
                                                                <div class="pull-right tableTools-container-pr"></div>
                                                            </div>
                                                            <div class="table-header">
                                                                Results
                                                            </div>
                                                            <div style="overflow: auto;">
                                                                <table id="dynamic-table-pr" class="table table-striped table-bordered table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Sr.No.</th>
                                                                            <th>Action</th>
                                                                            <th>Status</th>
                                                                            <th>Purchase Requisition No.</th>
                                                                            <th>Initiated By</th>
                                                                            <th>Initiated Date</th>
                                                                            <th>Required Date</th>
                                                                            <th>Purchase Requisition ID</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-01</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U441</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-02</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U442</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-03</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U443</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-04</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U444</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-05</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U445</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-06</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U446</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-07</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U447</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-08</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U448</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-09</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U449</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-10</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U450</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-11</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U451</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >Edit</option>
                                                                                                <option value="Delete" >Delete</option>
                                                                                                <option value="Submit" >Submit</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-12</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U452</td>
                                                                        </tr>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="inquiry" class="tab-pane fade">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clearfix">
                                                                <div class="pull-right tableTools-container-inquiry"></div>
                                                            </div>
                                                            <div class="table-header">
                                                                Results
                                                            </div>
                                                            <div style="overflow: auto;">
                                                                <table id="dynamic-table-inquiry" class="table table-striped table-bordered table-hover">
                                                                     <thead>
                                                                        <tr>
                                                                            <th>Sr.No.</th>
                                                                            <th>Action</th>
                                                                            <th>Status</th>
                                                                            <th>Purchase Requisition No.</th>
                                                                            <th>Initiated By</th>
                                                                            <th>Initiated Date</th>
                                                                            <th>Required Date</th>
                                                                            <th>Purchase Requisition ID</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-01</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U441</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-02</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U442</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-03</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U443</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-04</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U444</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-05</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U445</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-06</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U446</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-07</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U447</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-08</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U448</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-09</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U449</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-10</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U450</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-11</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U451</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View quote</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-12</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U452</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="purchase-order" class="tab-pane fade">

                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clearfix">
                                                                <div class="pull-right tableTools-container-po"></div>
                                                            </div>
                                                            <div class="table-header">
                                                                Results
                                                            </div>
                                                            <div style="overflow: auto;">
                                                                <table id="dynamic-table-po" class="table table-striped table-bordered table-hover">
                                                                     <thead>
                                                                        <tr>
                                                                            <th>Sr.No.</th>
                                                                            <th>Action</th>
                                                                            <th>Status</th>
                                                                            <th>Purchase Requisition No.</th>
                                                                            <th>Initiated By</th>
                                                                            <th>Initiated Date</th>
                                                                            <th>Required Date</th>
                                                                            <th>Purchase Requisition ID</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-01</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U441</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-02</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U442</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-03</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U443</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-04</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U444</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-05</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U445</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-06</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U446</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-07</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U447</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-08</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U448</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-09</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U449</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-10</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U450</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-11</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U451</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >Request for delete</option>
                                                                                                <option value="Submit" >View PO</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-12</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U452</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="delivery" class="tab-pane fade">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clearfix">
                                                                <div class="pull-right tableTools-container-delivery"></div>
                                                            </div>
                                                            <div class="table-header">
                                                                Results
                                                            </div>
                                                            <div style="overflow: auto;">
                                                                <table id="dynamic-table-delivery" class="table table-striped table-bordered table-hover">
                                                                     <thead>
                                                                        <tr>
                                                                            <th>Sr.No.</th>
                                                                            <th>Action</th>
                                                                            <th>Status</th>
                                                                            <th>Purchase Requisition No.</th>
                                                                            <th>Initiated By</th>
                                                                            <th>Initiated Date</th>
                                                                            <th>Required Date</th>
                                                                            <th>Purchase Requisition ID</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-01</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U441</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-02</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U442</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-03</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U443</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-04</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U444</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-05</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U445</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-06</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U446</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-07</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U447</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-08</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U448</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-09</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U449</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-10</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U450</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                             <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-11</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U451</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Approve Payment</option>
                                                                                                <option value="Submit" >Hold Payment</option>
                                                                                                <option value="Submit" >Reject Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-12</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U452</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="payment" class="tab-pane fade">

                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clearfix">
                                                                <div class="pull-right tableTools-container-payment"></div>
                                                            </div>
                                                            <div class="table-header">
                                                                Results
                                                            </div>
                                                            <div style="overflow: auto;">
                                                                <table id="dynamic-table-payment" class="table table-striped table-bordered table-hover">
                                                                     <thead>
                                                                        <tr>
                                                                            <th>Sr.No.</th>
                                                                            <th>Action</th>
                                                                            <th>Status</th>
                                                                            <th>Purchase Requisition No.</th>
                                                                            <th>Initiated By</th>
                                                                            <th>Initiated Date</th>
                                                                            <th>Required Date</th>
                                                                            <th>Purchase Requisition ID</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-01</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U441</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-02</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U442</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-03</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U443</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-04</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U444</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-05</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U445</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-06</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U446</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-07</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U447</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-08</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U448</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-09</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U449</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-10</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U450</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-11</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U451</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >View Delivery Doc</option>
                                                                                                <option value="Submit" >View Payment Slip</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                           <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-12</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U452</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="rejected" class="tab-pane fade in">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="clearfix">
                                                                <div class="pull-right tableTools-container-rejected"></div>
                                                            </div>
                                                            <div class="table-header">
                                                                Results
                                                            </div>
                                                            <div style="overflow: auto;">
                                                                <table id="dynamic-table-rejected" class="table table-striped table-bordered table-hover">
                                                                     <thead>
                                                                        <tr>
                                                                            <th>Sr.No.</th>
                                                                            <th>Action</th>
                                                                            <th>Status</th>
                                                                            <th>Purchase Requisition No.</th>
                                                                            <th>Initiated By</th>
                                                                            <th>Initiated Date</th>
                                                                            <th>Required Date</th>
                                                                            <th>Purchase Requisition ID</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-01</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U441</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-02</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U442</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>3</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-03</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U443</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>4</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-04</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U444</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>5</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-05</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U445</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>6</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-06</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U446</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>7</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-07</td>
                                                                            <td>ksadigale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U447</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>8</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-08</td>
                                                                            <td>vpawar@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U448</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>9</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-09</td>
                                                                            <td>nhiwrale@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U449</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>10</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-10</td>
                                                                            <td>nghadge@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U450</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>11</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-warning">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-11</td>
                                                                            <td>kishan@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U451</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>12</td>
                                                                            <td>
                                                                                <div>
                                                                                    <div>
                                                                                        <div class="input-group">
                                                                                            <select>
                                                                                                <option value="Edit" >View PR</option>
                                                                                                <option value="Delete" >View PO</option>
                                                                                                <option value="Submit" >Send to Delivery</option>
                                                                                                </select>
                                                                                            <span class="input-group-addon" style="color:#ffffff;background-color: #D15B47;"><i class="fa fa-caret-right"></i></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <span class="label label-sm label-success">PR-01</span>
                                                                            </td>
                                                                            <td>FY/PR/YYMM-12</td>
                                                                            <td>cdadia@atdi.in</td>
                                                                            <td>12-11-2017</td>
                                                                            <td>22-12-2017</td>
                                                                            <td>CN676545U452</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
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
                </div>
            </div>
        </div>

        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="assets/js/dataTables.buttons.min.js"></script>
        <script src="assets/js/buttons.flash.min.js"></script>
        <script src="assets/js/buttons.html5.min.js"></script>
        <script src="assets/js/buttons.print.min.js"></script>
        <script src="assets/js/buttons.colVis.min.js"></script>
        <script src="assets/js/dataTables.select.min.js"></script>
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>

 <script type="text/javascript">

                jQuery(function ($) {

                    //initiate dataTables plugin
                    var myTable =
                            $('#dynamic-table-summary')

                            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                            .DataTable({
                                bAutoWidth: false,
                                "aoColumns": [
                                    {"bSortable": true},
                                    null, null, null, null, null,
                                    {"bSortable": true}
                                ],
                                "aaSorting": [],
                                //"bProcessing": true,
                                //"bServerSide": true,
                                //"sAjaxSource": "http://127.0.0.1/table.php"	,

                                //,
                                //"sScrollY": "200px",
                                //"bPaginate": false,

                                //"sScrollX": "100%",
                                //"sScrollXInner": "120%",
                                //"bScrollCollapse": true,
                                //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                                //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                                //"iDisplayLength": 50


                                select: {
                                    style: 'multi'
                                }
                            });
                    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                    new $.fn.dataTable.Buttons(myTable, {
                        buttons: [
                            {
                                "extend": "colvis",
                                "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                columns: ':not(:first):not(:last)'
                            },
                            {
                                "extend": "copy",
                                "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "csv",
                                "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "excel",
                                "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "pdf",
                                "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "print",
                                "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                autoPrint: false,
                                message: 'This print was produced using the Print button for DataTables'
                            }
                        ]
                    });
                    myTable.buttons().container().appendTo($('.tableTools-container-summary'));
                    //style the message box
                    var defaultCopyAction = myTable.button(1).action();
                    myTable.button(1).action(function (e, dt, button, config) {
                        defaultCopyAction(e, dt, button, config);
                        $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                    });
                    var defaultColvisAction = myTable.button(0).action();
                    myTable.button(0).action(function (e, dt, button, config) {

                        defaultColvisAction(e, dt, button, config);
                        if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                            $('.dt-button-collection')
                                    .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                    .find('a').attr('href', '#').wrap("<li />")
                        }
                        $('.dt-button-collection').appendTo('.tableTools-container-summary .dt-buttons')
                    });
                    ////

                    setTimeout(function () {
                        $($('.tableTools-container-summary')).find('a.dt-button').each(function () {
                            var div = $(this).find(' > div').first();
                            if (div.length == 1)
                                div.tooltip({container: 'body', title: div.parent().text()});
                            else
                                $(this).tooltip({container: 'body', title: $(this).text()});
                        });
                    }, 500);
                    myTable.on('select', function (e, dt, type, index) {
                        if (type === 'row') {
                            $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                        }
                    });
                    myTable.on('deselect', function (e, dt, type, index) {
                        if (type === 'row') {
                            $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                        }
                    });
                    /////////////////////////////////
                    //table checkboxes
                    $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                    //select/deselect all rows according to table header checkbox
                    $('#dynamic-table-summary > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                        var th_checked = this.checked; //checkbox inside "TH" table header

                        $('#dynamic-table-summary').find('tbody > tr').each(function () {
                            var row = this;
                            if (th_checked)
                                myTable.row(row).select();
                            else
                                myTable.row(row).deselect();
                        });
                    });
                    //select/deselect a row when the checkbox is checked/unchecked
                    $('#dynamic-table-summary').on('click', 'td input[type=checkbox]', function () {
                        var row = $(this).closest('tr').get(0);
                        if (this.checked)
                            myTable.row(row).deselect();
                        else
                            myTable.row(row).select();
                    });
                    $(document).on('click', '#dynamic-table-summary .dropdown-toggle', function (e) {
                        e.stopImmediatePropagation();
                        e.stopPropagation();
                        e.preventDefault();
                    });
                    //And for the first simple table, which doesn't have TableTools or dataTables
                    //select/deselect all rows according to table header checkbox
                    var active_class = 'active';
                    $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                        var th_checked = this.checked; //checkbox inside "TH" table header

                        $(this).closest('table').find('tbody > tr').each(function () {
                            var row = this;
                            if (th_checked)
                                $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                            else
                                $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                        });
                    });
                    //select/deselect a row when the checkbox is checked/unchecked
                    $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                        var $row = $(this).closest('tr');
                        if ($row.is('.detail-row '))
                            return;
                        if (this.checked)
                            $row.addClass(active_class);
                        else
                            $row.removeClass(active_class);
                    });
                    /********************************/
                    //add tooltip for small view action buttons in dropdown menu
                    $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                    //tooltip placement on right or left
                    function tooltip_placement(context, source) {
                        var $source = $(source);
                        var $parent = $source.closest('table')
                        var off1 = $parent.offset();
                        var w1 = $parent.width();
                        var off2 = $source.offset();
                        //var w2 = $source.width();

                        if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                            return 'right';
                        return 'left';
                    }




                    /***************/
                    $('.show-details-btn').on('click', function (e) {
                        e.preventDefault();
                        $(this).closest('tr').next().toggleClass('open');
                        $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                    });
                    /***************/





                    /**
                     //add horizontal scrollbars to a simple table
                     $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                     {
                     horizontal: true,
                     styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                     size: 2000,
                     mouseWheelLock: true
                     }
                     ).css('padding-top', '12px');
                     */

                })


        </script>

        <script type="text/javascript">
            jQuery(function ($) {
                //initiate dataTables plugin
                var myTable =
                        $('#dynamic-table-pr')
                        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"bSortable": true},
                                null, null, null, null, null,null,
                                {"bSortable": true}
                            ],
                            "aaSorting": [],
                            //"bProcessing": true,
                            //"bServerSide": true,
                            //"sAjaxSource": "http://127.0.0.1/table.php"	,

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50


                            select: {
                                style: 'multi'
                            }
                        });
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                new $.fn.dataTable.Buttons(myTable, {
                    buttons: [
                        {
                            "extend": "colvis",
                            "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            columns: ':not(:first):not(:last)'
                        },
                        {
                            "extend": "copy",
                            "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "csv",
                            "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "excel",
                            "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "pdf",
                            "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "print",
                            "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            autoPrint: false,
                            message: 'This print was produced using the Print button for DataTables'
                        }
                    ]
                });
                myTable.buttons().container().appendTo($('.tableTools-container-pr'));
                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {

                    defaultColvisAction(e, dt, button, config);
                    if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                                .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container-pr .dt-buttons')
                });


                setTimeout(function () {
                    $($('.tableTools-container-pr')).find('a.dt-button').each(function () {
                        var div = $(this).find(' > div').first();
                        if (div.length == 1)
                            div.tooltip({container: 'body', title: div.parent().text()});
                        else
                            $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                myTable.on('select', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                    }
                });
                myTable.on('deselect', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                    }
                });
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table-pr > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $('#dynamic-table-pr').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            myTable.row(row).select();
                        else
                            myTable.row(row).deselect();
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table-pr').on('click', 'td input[type=checkbox]', function () {
                    var row = $(this).closest('tr').get(0);
                    if (this.checked)
                        myTable.row(row).deselect();
                    else
                        myTable.row(row).select();
                });
                $(document).on('click', '#dynamic-table-pr .dropdown-toggle', function (e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else
                            $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                    var $row = $(this).closest('tr');
                    if ($row.is('.detail-row '))
                        return;
                    if (this.checked)
                        $row.addClass(active_class);
                    else
                        $row.removeClass(active_class);
                });
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }




                /***************/
                $('.show-details-btn').on('click', function (e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/





                /**
                 //add horizontal scrollbars to a simple table
                 $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                 {
                 horizontal: true,
                 styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                 size: 2000,
                 mouseWheelLock: true
                 }
                 ).css('padding-top', '12px');
                 */


            })
        </script>

        <script type="text/javascript">

            jQuery(function ($) {

                //initiate dataTables plugin
                var myTable =
                        $('#dynamic-table-inquiry')
                        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"bSortable": true},
                                null, null, null, null, null,null,
                                {"bSortable": true}
                            ],
                            "aaSorting": [],
                            //"bProcessing": true,
                            //"bServerSide": true,
                            //"sAjaxSource": "http://127.0.0.1/table.php"	,

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50


                            select: {
                                style: 'multi'
                            }
                        });
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                new $.fn.dataTable.Buttons(myTable, {
                    buttons: [
                        {
                            "extend": "colvis",
                            "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            columns: ':not(:first):not(:last)'
                        },
                        {
                            "extend": "copy",
                            "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "csv",
                            "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "excel",
                            "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "pdf",
                            "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                        },
                        {
                            "extend": "print",
                            "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            autoPrint: false,
                            message: 'This print was produced using the Print button for DataTables'
                        }
                    ]
                });
                myTable.buttons().container().appendTo($('.tableTools-container-inquiry'));
                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {

                    defaultColvisAction(e, dt, button, config);
                    if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                                .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container-inquiry .dt-buttons')
                });
                ////

                setTimeout(function () {
                    $($('.tableTools-container-inquiry')).find('a.dt-button').each(function () {
                        var div = $(this).find(' > div').first();
                        if (div.length == 1)
                            div.tooltip({container: 'body', title: div.parent().text()});
                        else
                            $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                myTable.on('select', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                    }
                });
                myTable.on('deselect', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                    }
                });
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table-inquiry > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $('#dynamic-table-inquiry').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            myTable.row(row).select();
                        else
                            myTable.row(row).deselect();
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table-inquiry').on('click', 'td input[type=checkbox]', function () {
                    var row = $(this).closest('tr').get(0);
                    if (this.checked)
                        myTable.row(row).deselect();
                    else
                        myTable.row(row).select();
                });
                $(document).on('click', '#dynamic-table-inquiry .dropdown-toggle', function (e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else
                            $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                    var $row = $(this).closest('tr');
                    if ($row.is('.detail-row '))
                        return;
                    if (this.checked)
                        $row.addClass(active_class);
                    else
                        $row.removeClass(active_class);
                });
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }




                /***************/
                $('.show-details-btn').on('click', function (e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/





                /**
                 //add horizontal scrollbars to a simple table
                 $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                 {
                 horizontal: true,
                 styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                 size: 2000,
                 mouseWheelLock: true
                 }
                 ).css('padding-top', '12px');
                 */

            })


        </script>

        <script type="text/javascript">

            jQuery(function ($) {

                //initiate dataTables plugin
                var myTable =
                        $('#dynamic-table-po')
                        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"bSortable": true},
                                null, null, null, null, null,null,
                                {"bSortable": true}
                            ],
                            "aaSorting": [],
                            //"bProcessing": true,
                            //"bServerSide": true,
                            //"sAjaxSource": "http://127.0.0.1/table.php"	,

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50


                            select: {
                                style: 'multi'
                            }
                        });
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                    new $.fn.dataTable.Buttons(myTable, {
                        buttons: [
                            {
                                "extend": "colvis",
                                "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                columns: ':not(:first):not(:last)'
                            },
                            {
                                "extend": "copy",
                                "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "csv",
                                "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "excel",
                                "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "pdf",
                                "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "print",
                                "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                autoPrint: false,
                                message: 'This print was produced using the Print button for DataTables'
                            }
                        ]
                    });
                myTable.buttons().container().appendTo($('.tableTools-container-po'));
                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {

                    defaultColvisAction(e, dt, button, config);
                    if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                                .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container-po .dt-buttons')
                });
                ////

                setTimeout(function () {
                    $($('.tableTools-container-po')).find('a.dt-button').each(function () {
                        var div = $(this).find(' > div').first();
                        if (div.length == 1)
                            div.tooltip({container: 'body', title: div.parent().text()});
                        else
                            $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                myTable.on('select', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                    }
                });
                myTable.on('deselect', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                    }
                });
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table-po > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $('#dynamic-table-po').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            myTable.row(row).select();
                        else
                            myTable.row(row).deselect();
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table-po').on('click', 'td input[type=checkbox]', function () {
                    var row = $(this).closest('tr').get(0);
                    if (this.checked)
                        myTable.row(row).deselect();
                    else
                        myTable.row(row).select();
                });
                $(document).on('click', '#dynamic-table-po .dropdown-toggle', function (e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else
                            $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                    var $row = $(this).closest('tr');
                    if ($row.is('.detail-row '))
                        return;
                    if (this.checked)
                        $row.addClass(active_class);
                    else
                        $row.removeClass(active_class);
                });
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }




                /***************/
                $('.show-details-btn').on('click', function (e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/





                /**
                 //add horizontal scrollbars to a simple table
                 $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                 {
                 horizontal: true,
                 styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                 size: 2000,
                 mouseWheelLock: true
                 }
                 ).css('padding-top', '12px');
                 */

            })


        </script>

        <script type="text/javascript">

            jQuery(function ($) {

                //initiate dataTables plugin
                var myTable =
                        $('#dynamic-table-delivery')
                        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"bSortable": true},
                                null, null, null, null, null,null,
                                {"bSortable": true}
                            ],
                            "aaSorting": [],
                            //"bProcessing": true,
                            //"bServerSide": true,
                            //"sAjaxSource": "http://127.0.0.1/table.php"	,

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50


                            select: {
                                style: 'multi'
                            }
                        });
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                   new $.fn.dataTable.Buttons(myTable, {
                    buttons: [
                    {
                    "extend": "colvis",
                            "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            columns: ':not(:first):not(:last)'
                    },
                    {
                    "extend": "copy",
                            "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                    "extend": "csv",
                            "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                    "extend": "excel",
                            "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                    "extend": "pdf",
                            "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                            "className": "btn btn-white btn-primary btn-bold"
                    },
                    {
                    "extend": "print",
                            "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                            "className": "btn btn-white btn-primary btn-bold",
                            autoPrint: false,
                            message: 'This print was produced using the Print button for DataTables'
                    }
                    ]
                    });
                myTable.buttons().container().appendTo($('.tableTools-container-delivery'));
                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {

                    defaultColvisAction(e, dt, button, config);
                    if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                                .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container-delivery .dt-buttons')
                });
                ////

                setTimeout(function () {
                    $($('.tableTools-container-delivery')).find('a.dt-button').each(function () {
                        var div = $(this).find(' > div').first();
                        if (div.length == 1)
                            div.tooltip({container: 'body', title: div.parent().text()});
                        else
                            $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                myTable.on('select', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                    }
                });
                myTable.on('deselect', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                    }
                });
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table-delivery > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $('#dynamic-table-delivery').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            myTable.row(row).select();
                        else
                            myTable.row(row).deselect();
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table-delivery').on('click', 'td input[type=checkbox]', function () {
                    var row = $(this).closest('tr').get(0);
                    if (this.checked)
                        myTable.row(row).deselect();
                    else
                        myTable.row(row).select();
                });
                $(document).on('click', '#dynamic-table-delivery .dropdown-toggle', function (e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else
                            $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                    var $row = $(this).closest('tr');
                    if ($row.is('.detail-row '))
                        return;
                    if (this.checked)
                        $row.addClass(active_class);
                    else
                        $row.removeClass(active_class);
                });
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }




                /***************/
                $('.show-details-btn').on('click', function (e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/





                /**
                 //add horizontal scrollbars to a simple table
                 $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                 {
                 horizontal: true,
                 styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                 size: 2000,
                 mouseWheelLock: true
                 }
                 ).css('padding-top', '12px');
                 */

            })


        </script>

        <script type="text/javascript">

            jQuery(function ($) {

                //initiate dataTables plugin
                var myTable =
                        $('#dynamic-table-payment')
                        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"bSortable": true},
                                null, null, null, null, null,null,
                                {"bSortable": true}
                            ],
                            "aaSorting": [],
                            //"bProcessing": true,
                            //"bServerSide": true,
                            //"sAjaxSource": "http://127.0.0.1/table.php"	,

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50


                            select: {
                                style: 'multi'
                            }
                        });
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                    new $.fn.dataTable.Buttons(myTable, {
                        buttons: [
                            {
                                "extend": "colvis",
                                "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                columns: ':not(:first):not(:last)'
                            },
                            {
                                "extend": "copy",
                                "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "csv",
                                "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "excel",
                                "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "pdf",
                                "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "print",
                                "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                autoPrint: false,
                                message: 'This print was produced using the Print button for DataTables'
                            }
                        ]
                    });
                myTable.buttons().container().appendTo($('.tableTools-container-payment'));
                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {

                    defaultColvisAction(e, dt, button, config);
                    if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                                .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container-payment .dt-buttons')
                });
                ////

                setTimeout(function () {
                    $($('.tableTools-container-payment')).find('a.dt-button').each(function () {
                        var div = $(this).find(' > div').first();
                        if (div.length == 1)
                            div.tooltip({container: 'body', title: div.parent().text()});
                        else
                            $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                myTable.on('select', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                    }
                });
                myTable.on('deselect', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                    }
                });
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table-payment > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $('#dynamic-table-payment').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            myTable.row(row).select();
                        else
                            myTable.row(row).deselect();
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table-payment').on('click', 'td input[type=checkbox]', function () {
                    var row = $(this).closest('tr').get(0);
                    if (this.checked)
                        myTable.row(row).deselect();
                    else
                        myTable.row(row).select();
                });
                $(document).on('click', '#dynamic-table-payment .dropdown-toggle', function (e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else
                            $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                    var $row = $(this).closest('tr');
                    if ($row.is('.detail-row '))
                        return;
                    if (this.checked)
                        $row.addClass(active_class);
                    else
                        $row.removeClass(active_class);
                });
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }




                /***************/
                $('.show-details-btn').on('click', function (e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/





                /**
                 //add horizontal scrollbars to a simple table
                 $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                 {
                 horizontal: true,
                 styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                 size: 2000,
                 mouseWheelLock: true
                 }
                 ).css('padding-top', '12px');
                 */

            })


        </script>


        <script type="text/javascript">

            jQuery(function ($) {

                //initiate dataTables plugin
                var myTable =
                        $('#dynamic-table-rejected')
                        //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                        .DataTable({
                            bAutoWidth: false,
                            "aoColumns": [
                                {"bSortable": true},
                                null, null, null, null, null,null,
                                {"bSortable": true}
                            ],
                            "aaSorting": [],
                            //"bProcessing": true,
                            //"bServerSide": true,
                            //"sAjaxSource": "http://127.0.0.1/table.php"	,

                            //,
                            //"sScrollY": "200px",
                            //"bPaginate": false,

                            //"sScrollX": "100%",
                            //"sScrollXInner": "120%",
                            //"bScrollCollapse": true,
                            //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                            //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                            //"iDisplayLength": 50


                            select: {
                                style: 'multi'
                            }
                        });
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                    new $.fn.dataTable.Buttons(myTable, {
                        buttons: [
                            {
                                "extend": "colvis",
                                "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                columns: ':not(:first):not(:last)'
                            },
                            {
                                "extend": "copy",
                                "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "csv",
                                "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "excel",
                                "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "pdf",
                                "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                                "className": "btn btn-white btn-primary btn-bold"
                            },
                            {
                                "extend": "print",
                                "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                                "className": "btn btn-white btn-primary btn-bold",
                                autoPrint: false,
                                message: 'This print was produced using the Print button for DataTables'
                            }
                        ]
                    });
                myTable.buttons().container().appendTo($('.tableTools-container-rejected'));
                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {

                    defaultColvisAction(e, dt, button, config);
                    if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                                .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container-rejected .dt-buttons')
                });
                ////

                setTimeout(function () {
                    $($('.tableTools-container-rejected')).find('a.dt-button').each(function () {
                        var div = $(this).find(' > div').first();
                        if (div.length == 1)
                            div.tooltip({container: 'body', title: div.parent().text()});
                        else
                            $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                myTable.on('select', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                    }
                });
                myTable.on('deselect', function (e, dt, type, index) {
                    if (type === 'row') {
                        $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                    }
                });
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table-rejected > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $('#dynamic-table-rejected').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            myTable.row(row).select();
                        else
                            myTable.row(row).deselect();
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table-rejected').on('click', 'td input[type=checkbox]', function () {
                    var row = $(this).closest('tr').get(0);
                    if (this.checked)
                        myTable.row(row).deselect();
                    else
                        myTable.row(row).select();
                });
                $(document).on('click', '#dynamic-table-rejected .dropdown-toggle', function (e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                    var th_checked = this.checked; //checkbox inside "TH" table header

                    $(this).closest('table').find('tbody > tr').each(function () {
                        var row = this;
                        if (th_checked)
                            $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else
                            $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                    var $row = $(this).closest('tr');
                    if ($row.is('.detail-row '))
                        return;
                    if (this.checked)
                        $row.addClass(active_class);
                    else
                        $row.removeClass(active_class);
                });
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
                    var off2 = $source.offset();
                    //var w2 = $source.width();

                    if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                        return 'right';
                    return 'left';
                }




                /***************/
                $('.show-details-btn').on('click', function (e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/





                /**
                 //add horizontal scrollbars to a simple table
                 $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                 {
                 horizontal: true,
                 styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                 size: 2000,
                 mouseWheelLock: true
                 }
                 ).css('padding-top', '12px');
                 */

            })


        </script>

        <script type="text/javascript">
            jQuery(function ($) {
                /**
                 $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                 //console.log(e.target.getAttribute("href"));
                 })
                 
                 $('#accordion').on('shown.bs.collapse', function (e) {
                 //console.log($(e.target).is('#collapseTwo'))
                 });
                 */

                $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                    //if($(e.target).attr('href') == "#home") doSomethingNow();
                })


                /**
                 //go to next tab, without user clicking
                 $('#myTab > .active').next().find('> a').trigger('click');
                 */


                $('#accordion-style').on('click', function (ev) {
                    var target = $('input', ev.target);
                    var which = parseInt(target.val());
                    if (which == 2)
                        $('#accordion').addClass('accordion-style2');
                    else
                        $('#accordion').removeClass('accordion-style2');
                });
                //$('[href="#collapseTwo"]').trigger('click');


                $('.easy-pie-chart.percentage').each(function () {
                    $(this).easyPieChart({
                        barColor: $(this).data('color'),
                        trackColor: '#EEEEEE',
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: 8,
                        animate: ace.vars['old_ie'] ? false : 1000,
                        size: 75
                    }).css('color', $(this).data('color'));
                });
                $('[data-rel=tooltip]').tooltip();
                $('[data-rel=popover]').popover({html: true});
                $('#gritter-regular').on(ace.click_event, function () {
                    $.gritter.add({
                        title: 'This is a regular notice!',
                        text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                        image: 'assets/images/avatars/avatar1.png', //in Ace demo ./dist will be replaced by correct assets path
                        sticky: false,
                        time: '',
                        class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
                    });
                    return false;
                });
                $('#gritter-sticky').on(ace.click_event, function () {
                    var unique_id = $.gritter.add({
                        title: 'This is a sticky notice!',
                        text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                        image: 'assets/images/avatars/avatar.png',
                        sticky: true,
                        time: '',
                        class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                    });
                    return false;
                });
                $('#gritter-without-image').on(ace.click_event, function () {
                    $.gritter.add({
                        // (string | mandatory) the heading of the notification
                        title: 'This is a notice without an image!',
                        // (string | mandatory) the text inside the notification
                        text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                        class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                    });
                    return false;
                });
                $('#gritter-max3').on(ace.click_event, function () {
                    $.gritter.add({
                        title: 'This is a notice with a max of 3 on screen at one time!',
                        text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                        image: 'assets/images/avatars/avatar3.png', //in Ace demo ./dist will be replaced by correct assets path
                        sticky: false,
                        before_open: function () {
                            if ($('.gritter-item-wrapper').length >= 3)
                            {
                                return false;
                            }
                        },
                        class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                    });
                    return false;
                });
                $('#gritter-center').on(ace.click_event, function () {
                    $.gritter.add({
                        title: 'This is a centered notification',
                        text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                        class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                    });
                    return false;
                });
                $('#gritter-error').on(ace.click_event, function () {
                    $.gritter.add({
                        title: 'This is a warning notification',
                        text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                        class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
                    });
                    return false;
                });
                $("#gritter-remove").on(ace.click_event, function () {
                    $.gritter.removeAll();
                    return false;
                });
                ///////


                $("#bootbox-regular").on(ace.click_event, function () {
                    bootbox.prompt("What is your name?", function (result) {
                        if (result === null) {

                        } else {

                        }
                    });
                });
                $("#bootbox-confirm").on(ace.click_event, function () {
                    bootbox.confirm("Are you sure?", function (result) {
                        if (result) {
                            //
                        }
                    });
                });
                /**
                 $("#bootbox-confirm").on(ace.click_event, function() {
                 bootbox.confirm({
                 message: "Are you sure?",
                 buttons: {
                 confirm: {
                 label: "OK",
                 className: "btn-primary btn-sm",
                 },
                 cancel: {
                 label: "Cancel",
                 className: "btn-sm",
                 }
                 },
                 callback: function(result) {
                 if(result) alert(1)
                 }
                 }
                 );
                 });
                 **/


                $("#bootbox-options").on(ace.click_event, function () {
                    bootbox.dialog({
                        message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
                        buttons:
                                {
                                    "success":
                                            {
                                                "label": "<i class='ace-icon fa fa-check'></i> Success!",
                                                "className": "btn-sm btn-success",
                                                "callback": function () {
                                                    //Example.show("great success");
                                                }
                                            },
                                    "danger":
                                            {
                                                "label": "Danger!",
                                                "className": "btn-sm btn-danger",
                                                "callback": function () {
                                                    //Example.show("uh oh, look out!");
                                                }
                                            },
                                    "click":
                                            {
                                                "label": "Click ME!",
                                                "className": "btn-sm btn-primary",
                                                "callback": function () {
                                                    //Example.show("Primary button");
                                                }
                                            },
                                    "button":
                                            {
                                                "label": "Just a button...",
                                                "className": "btn-sm"
                                            }
                                }
                    });
                });
                $('#spinner-opts small').css({display: 'inline-block', width: '60px'})

                var slide_styles = ['', 'green', 'red', 'purple', 'orange', 'dark'];
                var ii = 0;
                $("#spinner-opts input[type=text]").each(function () {
                    var $this = $(this);
                    $this.hide().after('<span />');
                    $this.next().addClass('ui-slider-small').
                            addClass("inline ui-slider-" + slide_styles[ii++ % slide_styles.length]).
                            css('width', '125px').slider({
                        value: parseInt($this.val()),
                        range: "min",
                        animate: true,
                        min: parseInt($this.attr('data-min')),
                        max: parseInt($this.attr('data-max')),
                        step: parseFloat($this.attr('data-step')) || 1,
                        slide: function (event, ui) {
                            $this.val(ui.value);
                            spinner_update();
                        }
                    });
                });
                //CSS3 spinner
                $.fn.spin = function (opts) {
                    this.each(function () {
                        var $this = $(this),
                                data = $this.data();
                        if (data.spinner) {
                            data.spinner.stop();
                            delete data.spinner;
                        }
                        if (opts !== false) {
                            data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
                        }
                    });
                    return this;
                };
                function spinner_update() {
                    var opts = {};
                    $('#spinner-opts input[type=text]').each(function () {
                        opts[this.name] = parseFloat(this.value);
                    });
                    opts['left'] = 'auto';
                    $('#spinner-preview').spin(opts);
                }



                $('#id-pills-stacked').removeAttr('checked').on('click', function () {
                    $('.nav-pills').toggleClass('nav-stacked');
                });
                ///////////
                $(document).one('ajaxloadstart.page', function (e) {
                    $.gritter.removeAll();
                    $('.modal').modal('hide');
                });
            });
        </script>
    </body>
</html>
