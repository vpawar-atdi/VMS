<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Kamala Mills</title>
        <meta name="description" content="and Validation" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/css/select2.min.css" />
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
                                <a href="#">Admin</a>
                            </li>
                            <li class="active">Vendor Registration</li>
                        </ul><!-- /.breadcrumb -->

                        <!--						<div class="nav-search" id="nav-search">
                                                                                <form class="form-search">
                                                                                        <span class="input-icon">
                                                                                                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                                                                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                                                                                        </span>
                                                                                </form>
                                                                        </div> /.nav-search -->
                    </div>

                    <div class="page-content">
                        <!--						<div class="ace-settings-container" id="ace-settings-container">
                                                                                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                                                                                        <i class="ace-icon fa fa-cog bigger-130"></i>
                                                                                </div>
                        
                                                                                <div class="ace-settings-box clearfix" id="ace-settings-box">
                                                                                        <div class="pull-left width-50">
                                                                                                <div class="ace-settings-item">
                                                                                                        <div class="pull-left">
                                                                                                                <select id="skin-colorpicker" class="hide">
                                                                                                                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                                                                                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                                                                                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                                                                                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                                                                                                </select>
                                                                                                        </div>
                                                                                                        <span>&nbsp; Choose Skin</span>
                                                                                                </div>
                        
                                                                                                <div class="ace-settings-item">
                                                                                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                                                                                                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                                                                                </div>
                        
                                                                                                <div class="ace-settings-item">
                                                                                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                                                                                                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                                                                                </div>
                        
                                                                                                <div class="ace-settings-item">
                                                                                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                                                                                                        <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                                                                                </div>
                        
                                                                                                <div class="ace-settings-item">
                                                                                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                                                                                                        <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                                                                                </div>
                        
                                                                                                <div class="ace-settings-item">
                                                                                                        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                                                                                                        <label class="lbl" for="ace-settings-add-container">
                                                                                                                Inside
                                                                                                                <b>.container</b>
                                                                                                        </label>
                                                                                                </div>
                                                                                        </div> /.pull-left 
                        
                                                                                        <div class="pull-left width-50">
                                                                                                <div class="ace-settings-item">
                                                                                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                                                                                        <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                                                                                </div>
                        
                                                                                                <div class="ace-settings-item">
                                                                                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                                                                                        <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                                                                                </div>
                        
                                                                                                <div class="ace-settings-item">
                                                                                                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                                                                                        <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                                                                                </div>
                                                                                        </div> /.pull-left 
                                                                                </div> /.ace-settings-box 
                                                                        </div> /.ace-settings-container -->

                        <!--						<div class="page-header">
                                                                                <h1>
                                                                                        Form Wizard
                                                                                        <small>
                                                                                                <i class="ace-icon fa fa-angle-double-right"></i>
                                                                                                and Validation
                                                                                        </small>
                                                                                </h1>
                                                                        </div> /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <h4 class="lighter">
                                    <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                                    <a href="#modal-wizard" data-toggle="modal" class="pink">Vendor Registration </a>
                                </h4>

                                <div class="hr hr-18 hr-double dotted"></div>

                                <div class="widget-box">
                                    <div class="widget-header widget-header-blue widget-header-flat">
                                        <h4 class="widget-title lighter">New Item Wizard</h4>
                                        <!--
                                                                                                                        <div class="widget-toolbar">
                                                                                                                                <label>
                                                                                                                                        <small class="green">
                                                                                                                                                <b>Validation</b>
                                                                                                                                        </small>
                                        
                                                                                                                                        <input id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4" />
                                                                                                                                        <span class="lbl middle"></span>
                                                                                                                                </label>
                                                                                                                        </div>-->
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div id="fuelux-wizard-container">
                                                <div>
                                                    <ul class="steps">
                                                        <li data-step="1" class="active">
                                                            <span class="step">1</span>
                                                            <span class="title">Company Details</span>
                                                        </li>
                                                        <li data-step="2">
                                                            <span class="step">2</span>
                                                            <span class="title">Contact Persons</span>
                                                        </li>
                                                        <li data-step="3">
                                                            <span class="step">3</span>
                                                            <span class="title">Bank Details</span>
                                                        </li>

                                                        <li data-step="4">
                                                            <span class="step">4</span>
                                                            <span class="title">Attachments</span>
                                                        </li>

                                                        <!--														<li data-step="4">
                                                                                                                                                                                <span class="step">4</span>
                                                                                                                                                                                <span class="title">Other Info</span>
                                                                                                                                                                        </li>-->
                                                    </ul>
                                                </div>

                                                <hr />

                                                <div class="step-content pos-rel">
                                                    <div class="step-pane active" data-step="1">
                                                        <!--                                                        <h3 class="lighter block green">Enter the following information</h3>-->

                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <form class="form-horizontal" role="form">
                                                                    <div class="row">
                                                                        <div class="col-xs-12">
                                                                            <div class="col-xs-6">
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1"> Company Name </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter Company Name" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1"> Registered Address</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Line 1" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">&nbsp;&nbsp;&nbsp;</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Line 2" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">&nbsp;&nbsp;&nbsp;</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Line 3" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">City </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter City" class="form-control">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">State</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <select class="form-control">
                                                                                            <option value="Select state">------Select state------</option>
                                                                                            <option value="Maharashtra">Maharashtra</option>
                                                                                            <option value="Gujrat">Gujrat</option>
                                                                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">PIN </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter PIN" class="form-control">
                                                                                    </div>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1"> CIN </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter CIN" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">GST</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter GST No" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">PAN</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter PAN No" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1"> TAN </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter TAN No" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">IEC</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter IEC No" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-6">
<!--                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1"> &nbsp;&nbsp;&nbsp;</label>
                                                                                                                                                                         <label class="col-sm-9" for="form-field-1-1">Shipping Address</label>
                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <h5>Shipping Address</h5>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">City </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter City" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">State</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter State" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Pin No</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">

                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter Pin No" class="form-control">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right">
                                                                                        &nbsp;&nbsp;&nbsp; 
                                                                                    </label>
                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="checkbox" name="file-format" id="id-file-format" class="ace">
                                                                                        <span class="lbl"> Billing address similar to Shipping address</span>
                                                                                    </div>
                                                                                </div>-->                                                                 <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right">
                                                                                        &nbsp;&nbsp;&nbsp; 
                                                                                    </label>
                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="checkbox" name="file-format" id="id-file-format" class="ace">
                                                                                        <span class="lbl"> Similar to registered address</span>
                                                                                    </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1"> &nbsp;&nbsp;&nbsp; </label>
                                                                                    <!--                                                                                     <label class="col-sm-9" for="form-field-1-1">Billing Address</label>-->
                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <h5>Current address</h5>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Line 1 </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Line 1" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Line 2 </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Line 2" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Line 3 </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Line 3" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">City </label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter City" class="form-control">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">State</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <select class="form-control">
                                                                                            <option value="Select state">------Select state------</option>
                                                                                            <option value="Maharashtra">Maharashtra</option>
                                                                                            <option value="Gujrat">Gujrat</option>
                                                                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Pin No</label>

                                                                                    <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                        <input type="text" id="form-field-1-1" placeholder="Enter Pin No" class="form-control">
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="step-pane" data-step="2">
                                                        <form class="form-horizontal" role="form">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="col-xs-6">
                                                                        Primary Contact 
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Name</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Bank Name" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Email ID</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Branch Name" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Designation</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Account No" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Mobile</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Account No" class="form-control">
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        Secondary Contact
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Name</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Bank Name" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Email ID</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Branch Name" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Designation</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Account No" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Mobile</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Account No" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                    <div class="step-pane" data-step="3">
                                                        <form class="form-horizontal" role="form">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <div class="col-xs-6">
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Name Of Bank</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Bank Name" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Branch Name</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Branch Name" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Branch Address</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Branch address" class="form-control">
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">A/c No</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Account No" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">A/c Type</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter Account type" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="form-group">
                                                                            <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">IFSC/MICR</label>

                                                                            <div class="col-sm-8 col-lg-8 col-md-8">
                                                                                <input type="text" id="form-field-1-1" placeholder="Enter IFSC/MICR" class="form-control">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>

                                                    <div class="step-pane" data-step="4">
                                                        <div class="center">
                                                            <form class="form-horizontal" role="form">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <div class="col-xs-6">
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">CIN Attachment &nbsp;</label>
                                                                                <label class="col-sm-8 col-lg-8 col-md-8 ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">GST Attachment &nbsp;</label>
                                                                                <label class="col-sm-8 col-lg-8 col-md-8 ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">PAN Attachment &nbsp;</label>
                                                                                <label class="col-sm-8 col-lg-8 col-md-8 ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-6">

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">TAN Attachment &nbsp;</label>
                                                                                <label class="col-sm-8 col-lg-8 col-md-8 ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">IEC Attachment &nbsp;</label>
                                                                                <label class="col-sm-8 col-lg-8 col-md-8 ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 col-lg-4 col-md-4 control-label no-padding-right" for="form-field-1-1">Void Cheque &nbsp;</label>
                                                                                <label class="col-sm-8 col-lg-8 col-md-8 ace-file-input"><input type="file" id="id-input-file-2"><span class="ace-file-container" data-title="Choose"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon fa fa-upload"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="step-pane" data-step="5">
                                                        <div class="center">
                                                            <h3 class="green">Congrats!</h3>
                                                            Your product is ready to ship! Click finish to continue!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="wizard-actions">
                                                <button class="btn btn-prev">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Prev
                                                </button>

                                                <button class="btn btn-success btn-next" data-last="Finish">
                                                    Next
                                                    <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">

            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div>


        <script src="assets/js/wizard.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/jquery-additional-methods.min.js"></script>
        <script src="assets/js/bootbox.js"></script>
        <script src="assets/js/jquery.maskedinput.min.js"></script>
        <script src="assets/js/select2.min.js"></script>
        <script type="text/javascript">
                jQuery(function ($) {

                    $('[data-rel=tooltip]').tooltip();

                    $('.select2').css('width', '200px').select2({allowClear: true})
                            .on('change', function () {
                                $(this).closest('form').validate().element($(this));
                            });


                    var $validation = false;
                    $('#fuelux-wizard-container')
                            .ace_wizard({
                                //step: 2 //optional argument. wizard will jump to step "2" at first
                                //buttons: '.wizard-actions:eq(0)'
                            })
                            .on('actionclicked.fu.wizard', function (e, info) {
                                if (info.step == 1 && $validation) {
                                    if (!$('#validation-form').valid())
                                        e.preventDefault();
                                }
                            })
                            //.on('changed.fu.wizard', function() {
                            //})
                            .on('finished.fu.wizard', function (e) {
                                bootbox.dialog({
                                    message: "Thank you! Your information was successfully saved!",
                                    buttons: {
                                        "success": {
                                            "label": "OK",
                                            "className": "btn-sm btn-primary"
                                        }
                                    }
                                });
                            }).on('stepclick.fu.wizard', function (e) {
                        //e.preventDefault();//this will prevent clicking and selecting steps
                    });


                    //jump to a step
                    /**
                     var wizard = $('#fuelux-wizard-container').data('fu.wizard')
                     wizard.currentStep = 3;
                     wizard.setState();
                     */

                    //determine selected step
                    //wizard.selectedItem().step



                    //hide or show the other form which requires validation
                    //this is for demo only, you usullay want just one form in your application
                    $('#skip-validation').removeAttr('checked').on('click', function () {
                        $validation = this.checked;
                        if (this.checked) {
                            $('#sample-form').hide();
                            $('#validation-form').removeClass('hide');
                        } else {
                            $('#validation-form').addClass('hide');
                            $('#sample-form').show();
                        }
                    })

                    $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                        no_file: 'No File ...',
                        btn_choose: 'Choose',
                        btn_change: 'Change',
                        droppable: false,
                        onchange: null,
                        thumbnail: false //| true | large
                                //whitelist:'gif|png|jpg|jpeg'
                                //blacklist:'exe|php'
                                //onchange:''
                                //
                    });


                    //documentation : http://docs.jquery.com/Plugins/Validation/validate


                    $.mask.definitions['~'] = '[+-]';
                    $('#phone').mask('(999) 999-9999');

                    jQuery.validator.addMethod("phone", function (value, element) {
                        return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
                    }, "Enter a valid phone number.");

                    $('#validation-form').validate({
                        errorElement: 'div',
                        errorClass: 'help-block',
                        focusInvalid: false,
                        ignore: "",
                        rules: {
                            email: {
                                required: true,
                                email: true
                            },
                            password: {
                                required: true,
                                minlength: 5
                            },
                            password2: {
                                required: true,
                                minlength: 5,
                                equalTo: "#password"
                            },
                            name: {
                                required: true
                            },
                            phone: {
                                required: true,
                                phone: 'required'
                            },
                            url: {
                                required: true,
                                url: true
                            },
                            comment: {
                                required: true
                            },
                            state: {
                                required: true
                            },
                            platform: {
                                required: true
                            },
                            subscription: {
                                required: true
                            },
                            gender: {
                                required: true,
                            },
                            agree: {
                                required: true,
                            }
                        },

                        messages: {
                            email: {
                                required: "Please provide a valid email.",
                                email: "Please provide a valid email."
                            },
                            password: {
                                required: "Please specify a password.",
                                minlength: "Please specify a secure password."
                            },
                            state: "Please choose state",
                            subscription: "Please choose at least one option",
                            gender: "Please choose gender",
                            agree: "Please accept our policy"
                        },

                        highlight: function (e) {
                            $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                        },

                        success: function (e) {
                            $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                            $(e).remove();
                        },

                        errorPlacement: function (error, element) {
                            if (element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                                var controls = element.closest('div[class*="col-"]');
                                if (controls.find(':checkbox,:radio').length > 1)
                                    controls.append(error);
                                else
                                    error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                            } else if (element.is('.select2')) {
                                error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                            } else if (element.is('.chosen-select')) {
                                error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                            } else
                                error.insertAfter(element.parent());
                        },

                        submitHandler: function (form) {
                        },
                        invalidHandler: function (form) {
                        }
                    });




                    $('#modal-wizard-container').ace_wizard();
                    $('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');


                    /**
                     $('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
                     $(this).closest('form').validate().element($(this));
                     });
                     
                     $('#mychosen').chosen().on('change', function(ev) {
                     $(this).closest('form').validate().element($(this));
                     });
                     */


                    $(document).one('ajaxloadstart.page', function (e) {
                        //in ajax mode, remove remaining elements before leaving page
                        $('[class*=select2]').remove();
                    });
                })
        </script>
    </body>
</html>
