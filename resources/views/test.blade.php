<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=description content="">
    <meta name=author content="">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=csrf-token content="X1rOGzfUiT5oqD6bknJhlkqdy0Ibv8ADuXdBkR8N"><input name=_token
        value="X1rOGzfUiT5oqD6bknJhlkqdy0Ibv8ADuXdBkR8N" hidden>
    <title>Sell3Sixty</title>
    <link href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type=text/css href="/css/bootstrap.min.css">
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type=text/css> <link rel="stylesheet"
        type=text/css href="/css/datatables.min.css?v=2.1.3">
    <link rel="stylesheet" type=text/css href="/css/select2.min.css">
    <link rel="stylesheet" type=text/css href="/css/select2-bootstrap4.css">
    <link rel="stylesheet" type=text/css href="/css/dropify.min.css">
    <link href="/css/datepicker.css?v=2.1.3.0" rel="stylesheet">
    <link rel="stylesheet" type=text/css href="/css/dropzone.css">
    <link rel="stylesheet" type=text/css href="/css/wizard.css">
    <link rel="stylesheet" type=text/css href="/css/jquery.steps.css">
    <link rel="stylesheet" type=text/css href="/css/style.css?v=2.1.4.9">
    <link rel="preconnect" href="//fonts.gstatic.com">
    <link href="//fonts.googleapis.com/css2?family=Rationale&display=swap" rel="stylesheet">
</head>

<body id="page-top">
    <div class="overlay"></div>
    <div id="notifDiv"
        style="z-index:10000; display: none; background: green; font-weight: 450; width: 350px; position: fixed; top: 80%; left: 5%; color: white; padding: 5px 20px">
    </div>
    <nav class="navbar navbar-expand static-top"><a class="hamburger" href="#" id="sidebarToggle"><i
                class="fas fa-bars"></i></a><a class="_logo" href="/"><img src=/images/sell-360.svg alt=""></a>
        <ul class="navbar-nav ml-auto top_nav">
            <li class="nav-item TM_icon"><a class="nav-link" href="#"><img src=/images/q-link-icon.svg alt=""></a></li>
            <li class="nav-item TM_icon"><a class="nav-link" href="#"><img src=/images/settings-icon.svg alt=""></a>
            </li>
            <li class="nav-item TM_icon"><a class="nav-link" href="#"><span class="badge">5</span><img
                        src=/images/bell-icon.svg alt=""></a></li>
            <li class="nav-item dropdown no-arrow"><a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                        src=/images/avatar.svg class="user_log" alt=""><span>Irfan Nabi</span></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown"><span
                        class="dropdown-item usernamelab">Irfan Nabi</span><a class="dropdown-item"
                        href="/edit_profile"><i class="fa fa-user"></i> Profile</a><a class="dropdown-item" href="#"><i
                            class="fa fa-cogs"></i> Settings</a><a class="dropdown-item" href="/logout"><i
                            class="fa fa-power-off"></i> Logout</a></div>
            </li>
        </ul>
    </nav>
    <div id="wrapper">
        <ul class="sidebar navbar-nav toggled">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navi-l1" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                        src=/images/icon-dash-board.svg alt=""><span>Dashboard</span></a>
                <div class="dropdown-menu" aria-labelledby="navi-l1"><a class="dropdown-item"
                        href="/dashboard">Dashboard</a></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navi-l1" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                        src=/images/icon-organization.svg alt=""><span>Employee</span></a>
                <div class="dropdown-menu" aria-labelledby="navi-l1"><a class="dropdown-item" href="/register">Employees
                        List</a><a class="dropdown-item" href="/manage_team">Delivery Team</a><a class="dropdown-item"
                        href="/select_employee">Access Rights</a></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navi-l1" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                        src=/images/icon-customer-management.svg alt=""><span>Customer</span></a>
                <div class="dropdown-menu" aria-labelledby="navi-l1"><a class="dropdown-item"
                        href="/Customer_area_list">Customer List</a></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navi-17" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                        src=/images/city-area-icon.svg alt=""><span>City/Area/Zone</span></a>
                <div class="dropdown-menu" aria-labelledby="navi-l7"><a class="dropdown-item"
                        href="/manage_cities">City</a><a class="dropdown-item" href="/manage_area">Area</a><a
                        class="dropdown-item" href="/manage_zone">Zone</a></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navi-l1" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                        src=/images/inventory-icon.svg alt=""><span>Inventory</span></a>
                <div class="dropdown-menu" aria-labelledby="navi-l1"><a class="dropdown-item"
                        href="/inventory_list">Inventory List</a><a class="dropdown-item" href="/add-ons">Add-Ons</a><a
                        class="dropdown-item" href="/stock_managment">Stock Management</a><a class="dropdown-item"
                        href="/assests_management">Assests Management</a></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navi-l1" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src=/images/icon-inv.svg
                        alt=""><span>Product</span></a>
                <div class="dropdown-menu" aria-labelledby="navi-l1"><a class="dropdown-item" href="/add_product">Rate
                        list</a><a class="dropdown-item" href="/product_stock_management">Stock Management</a></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navi-l1" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                        src=/images/icon-ecommerce.svg alt=""><span>Order</span></a>
                <div class="dropdown-menu" aria-labelledby="navi-l1"><a class="dropdown-item" href="/order">Order</a><a
                        class="dropdown-item" href="/teams_monthly_order">Orders List</a></div>
            </li>
        </ul>
        <div id="content-wrapper">
            <div class="container max-1200">
                <style>
                    .Datefilter-Dash {
                        float: right;
                        margin-top: -4px
                    }

                    .Datefilter-Dash div {
                        float: right;
                        width: 100px;
                        margin-left: 10px
                    }

                    .Datefilter-Dash div input,
                    .Datefilter-Dash div input:focus {
                        border: 1px solid #d3d8e2;
                        background-color: #fff;
                        height: 30px;
                        box-shadow: none
                    }

                    ._dash-select {
                        width: 150px;
                        float: right
                    }

                    ._dash-select .custom-select {
                        border: 1px solid #d3d8e2;
                        border-radius: 0;
                        margin-top: -4px
                    }

                </style>
                <div class="row mt-2 mb-3">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <h2 class="_head01">Dashboard <span></span></h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="Datefilter-Dash dashboard_date_filter" style="display:none">
                            <div><input type=text class="form-control datepicker" id="end_date" placeholder="End Date"
                                    style="font-size: 13px"></div>
                            <div><input type=text class="form-control datepicker" id="start_date"
                                    placeholder="Start Date" style="font-size: 13px"></div>
                        </div>
                        <div class="_dash-select"><select
                                class="custom-select custom-select-sm select_report_time_period">
                                <option value="1">Current Month</option>
                                <option value="2">Last Month</option>
                                <option value="3" selected>Overall</option>
                                <option value="4">Custom</option>
                            </select></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="row">
                            <div class="col-md-6 mb-30">
                                <div class="card cp-stats">
                                    <div class="cp-stats-icon"><img src=/images/totalreveneue.svg alt=""></div>
                                    <h5 class="text-muted">Total Reveneue</h5>
                                    <h3 class="cp-stats-value total_rev_dashboard" style="margin-top: 50px;">Loading...
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="card cp-stats">
                                    <div class="cp-stats-icon"><img src=/images/totalbookings.svg alt=""></div>
                                    <h5 class="text-muted">Total Visits</h5>
                                    <h3 class="cp-stats-value total_bookings_dashboard" style="margin-top: 50px;">
                                        Loading... </h3>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="card cp-stats">
                                    <div class="cp-stats-icon"><img src=/images/active-cust.svg alt=""></div>
                                    <h5 class="text-muted">Active Customers</h5>
                                    <h3 class="cp-stats-value active_cust_dashboard" style="margin-top: 50px;">
                                        Loading... </h3>
                                </div>
                            </div>
                            <div class="col-md-6 mb-30">
                                <div class="card cp-stats">
                                    <div class="cp-stats-icon"><img src=/images/avg-rv-cust.svg alt=""></div>
                                    <h5 class="text-muted">AVG. REV. / Cust</h5>
                                    <h3 class="cp-stats-value avg_rev_cust_dashboard" style="margin-top: 50px;">
                                        Loading... </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 mb-30">
                        <div class="card _grap-bar pt-0" style="padding:15px; padding-top: 0px;">
                            <div class="mt-3 chartjs-chart">
                                <div id="e_chart_1" class="e_chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card _grayB">
                    <div class="row m-0">
                        <div class="col-md-3 _amState">
                            <p class="opening_bal_heading">Opening Balance</p>
                            <h3><small class="fa fa-circle align-middle text-warning"></small><span
                                    class="outstanding_dashboard opening_balance">Loading... </span></h3>
                        </div>
                        <div class="col-md-3 _amState">
                            <p>New Sales Revenue</p>
                            <h3><small class="fa fa-circle align-middle text-warning"></small><span
                                    class="outstanding_dashboard new_sale_revenue">Loading... </span></h3>
                        </div>
                        <div class="col-md-3 _amState BLight _borL B_border">
                            <p>Amount Received </p>
                            <h3><small class="fa fa-circle align-middle text-success"></small><span
                                    class="amount_rec_dashboard">Loading... </span></h3>
                        </div>
                        <div class="col-md-3 _amState _borL">
                            <p>Total Outstanding</p>
                            <h3><small class="fa fa-circle align-middle text-danger"></small><span
                                    class="remaining_amount_dashboard">Loading... </span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 mb-30">
                        <div class="card _grap-bar"><canvas id="line-chart-example" class="line-chart"></canvas></div>
                    </div>
                    <div class="col-md-3 mb-30">
                        <div class="row _RVperDay">
                            <div class="col-12">
                                <div class="card cp-stats">
                                    <div class="cp-stats-icon"><img src=/images/avg-revenue.svg alt=""></div>
                                    <h3 class="cp-stats-value avg_rev_day_dashboard">Loading... </h3>
                                    <h5 class="text-muted">AVG Revenue Per Day</h5>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card cp-stats">
                                    <div class="cp-stats-icon"><img src=/images/avg-revenue-shipment.svg alt=""></div>
                                    <h3 class="cp-stats-value avg_rev_shipment_dashboard">Loading... <h5
                                            class="text-muted">AVG Revenue Per Team</h5>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card cp-stats">
                                    <div class="cp-stats-icon"><img src=/images/avg-shipment-day.svg alt=""></div>
                                    <h3 class="cp-stats-value avg_shipment_day_dashboard"> Loading... </h3>
                                    <h5 class="text-muted">AVG Visits Per Day</h5>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card cp-stats">
                                    <div class="cp-stats-icon"><img src=/images/weight-shipment.svg alt=""></div>
                                    <h3 class="cp-stats-value avg_weight_shipment_dashboard">Loading... </h3>
                                    <h5 class="text-muted">AVG Bottles Per Order</h5>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card cp-stats border-0">
                                    <div class="cp-stats-icon"><img src=/images/avg-delivery-time.svg alt=""></div>
                                    <h3 class="cp-stats-value total_expense">Loading...</h3>
                                    <h5 class="text-muted">Total Expense</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-30">
                        <div class="card p-20 top_border consignments_by_dest_dashboard">
                            <h2 class="_head03 border-0">Zone <span>Wise Report</span></h2>
                            <div class="consignment_designation_div"></div>
                        </div>
                    </div>
                    <div class="col-md-8 mb-30">
                        <div class="card p-20 top_border">
                            <h2 class="_head03 border-0 pb-0">Day <span>Wise Report</span></h2>
                            <div class="table-responsive _dash-table day_wise_report_dashboard">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>SERVICE</th>
                                            <th>W.Bott</th>
                                            <th>B.Bott</th>
                                            <th>Amt Recvd</th>
                                        </tr>
                                    </thead>
                                    <tbody class="day_wise_body"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto"> 2019 © Fine Water. All Rights Reserved. </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src=//www.gstatic.com/firebasejs/7.14.6/firebase-app.js> </script> <script>
        var whiteBottle = '13';
        var blueBottle =
        '12'; // Initialize Firebase var config = { apiKey: "AIzaSyAXbacHCBvZssw_iHKYfaNsYQJwtXqfoPU", authDomain: "apptry-cbc7b.firebaseapp.com", databaseURL: "//apptry-cbc7b.firebaseio.com", projectId: "apptry-cbc7b", storageBucket: "apptry-cbc7b.appspot.com", messagingSenderId: "705729749392", appId: "1:705729749392:web:5bc7817b009086ce599315" }; firebase.initializeApp(config); 

    </script>
    <script src=/js/jquery-3.3.1.slim.min.js> </script> <script src=/js/popper.min.js></script>
    <script src=/js/bootstrap.min.js></script>
    <script src=/js/datatables.min.js></script>
    <script src=/js/select2.min.js></script>
    <script src=/js/dropify.min.js> </script> <script src=/js/form-file-upload-data.js> </script> <script
        src=/js/custom.js></script>
    <script src=/js/bootstrap-datepicker.js> </script> <script src=/js/master.js?v=2.4></script>
    <script src=/js/jquery.form.min.js></script>
    <script src=/js/chart.bundle.min.js> </script> <script src=/js/chartjs.js> </script> <script
        src=/js/echarts-en.min.js> </script> <script src=/js/echarts-liquidfill.min.js> </script> <script
        src=/js/dashboard-data.js?v=1.5> </script> <script src=/js/form-wizard-data.js> </script> <script
        src=/js/meter-d3.min.js> </script> <script src=//momentjs.com/downloads/moment.min.js> </script> <script
        src=/js/dropzone.js> </script> <script src=/js/jquery.steps.min.js> </script> <script async defer
        src=//maps.googleapis.com/maps/api/js?key=AIzaSyBIVKbBIT2jNQdypQjStGfp3j5P6lNG6N0> </script> <script
        type=text/javascript> $(document).ready(function(){ $('#dataSidebarLoader').hide(); }); </script> </body>
        </html>
