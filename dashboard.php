<script>
function noBack(){window.history.forward()}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack()}
window.onunload=function(){void(0)}
</script>
<html>
	<body>
	<?php include('layout/header.php');?>
        <!-- tobar :: end -->
        <!-- main-container :: start -->
		<?php include('layout/side-bar.php');?>
            <!-- sidebar :: end -->
            <!-- content area :: start -->
            <section id="main-content" class=" ">
                <div class="wrapper main-wrapper row" style=''>
                    <div class='col-xs-12'>
                        <div class="page-title">
                            <div class="pull-left">
                                <h1 class="title">Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                <div class="r4_counter db_box has-gradient-to-right-bottom">
                                    <div class="icon-after cc fa fa-users"></div>
                                    <i class="pull-left icon-md icon-white mt-20 fa fa-users"></i>
                                    <div class="stats">
                                        <h2 class="color-white mb-5">70,000</h2>
                                        <span>Total Users</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                <div class="r4_counter db_box has-gradient-to-right-bottom">
                                    <div class="icon-after cc fa fa-users"></div>
                                    <i class="pull-left icon-md icon-white mt-20 fa fa-users"></i>
                                    <div class="stats">
                                        <h2 class="color-white mb-5">60,000</h2>
                                        <span>Active Users</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                <div class="r4_counter db_box has-gradient-to-right-bottom">
                                    <div class="icon-after cc fa fa-file-text-o"></div>
                                    <i class="pull-left icon-md icon-white mt-20 fa fa-file-text-o"></i>
                                    <div class="stats">
                                        <h2 class="color-white mb-5">2,000</h2>
                                        <span>Reports</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-xs-6">
                                <div class="r4_counter db_box has-gradient-to-right-bottom">
                                    <div class="icon-after cc fa fa-download"></div>
                                    <i class="pull-left icon-md icon-white mt-20 fa fa-download"></i>
                                    <div class="stats">
                                        <h2 class="color-white mb-5">10,000</h2>
                                        <span>App Downloads</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- content area :: end -->
        </div>
        <!-- main-container :: end -->
        <!-- js -->
        <?php include('layout/footer.php');?>

        <script type="text/javascript">
            /*--------------------------------
             Last 6 Months Activity :: Start
             --------------------------------*/

            Highcharts.chart('container1', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Downloads'
                },
                xAxis: {
                    categories: [
                        'Jan',
                        'Feb',
                        'Mar',
                        'Apr',
                        'May',
                        'Jun',
                        'Jul',
                        'Aug',
                        'Sep',
                        'Oct',
                        'Nov',
                        'Dec'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Downloads'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b>{point.y} Downloads</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                        name: 'Android',
                        color: '#0d3a61',
                        data: [1340, 1560, 4300, 8854, 5600, 4378, 1340, 1560, 4300, 8854, 5600, 4378, ]
                    }, {
                        name: 'IOS',
                        color: '#2196F3',
                        data: [943, 1232, 543, 2498, 4590, 7609, 454, 1324, 4300, 8854, 5600, 4378, ]
                    }]
            });
        </script>
    </body>
</html>