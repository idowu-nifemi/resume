
<?php 
    require_once('utilities/appServer.php');
    require_once('objects/covidSummaryRESTful.php')
?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">COVID 19 TRACKER</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a href="#" class="fw-normal">Dashboard</a></li>
                        </ol>
                        <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                            class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                            to Pro</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="header-title">COVID-19 Global Statics <span class="text-danger lead small badge badge-primary">Last Updated on <?php echo date('d F, Y h:i:s', strtotime($data_response_summary['Date']));?></span></h2>
                                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                                    Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness 
                                    and recover without requiring special treatment.  Older people, and those with underlying medical problems
                                    like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop 
                                    serious illness.
                                    
                                </p>           
                            </div>
                        </div>
                    </div>
            </div>    
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Confirmed Cases</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-primary"><?php echo number_format($data_response_summary['Global']['TotalConfirmed']) ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Newly Confirmed Cases</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash2"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-muted"><?php echo number_format($data_response_summary['Global']['NewConfirmed']) ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total deaths</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash3"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-info"><?php echo number_format($data_response_summary['Global']['TotalDeaths']) ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">New deaths</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash4"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-success"><?php echo number_format($data_response_summary['Global']['NewDeaths']) ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Newly Recovered</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash5"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-purple"><?php echo number_format($data_response_summary['Global']['NewRecovered']) ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="white-box analytics-info">
                        <h3 class="box-title">Total Recovered</h3>
                        <ul class="list-inline two-part d-flex align-items-center mb-0">
                            <li>
                                <div id="sparklinedash6"><canvas width="67" height="30"
                                        style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                </div>
                            </li>
                            <li class="ms-auto"><span class="counter text-danger"><?php echo number_format($data_response_summary['Global']['TotalRecovered']) ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        
         
            <div class="row">
                <!-- heading area start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="header-title">Reported Cases and Deaths by Country & Territory.
                                <span class="text-success lead small badge badge-primary">Last Updated on 
                                    <?php echo date('d F, Y h:i:s', strtotime($data_response_summary['Date']));?></span>
                            </h2>
                            <p>The coronavirus COVID-19 is affecting 210 countries and territories
                                around the world and 2 international conveyances.
                                The day is reset after midnight GMT+0. 
                                The list of countries and territories and their continental regional classification is based on th
                                e United Nations Geoscheme.
                            </p>           
                        </div>
                    </div>
                </div>
                <!-- COUNTRIES INFOS-->
                <!-- ============================================================== -->
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="d-md-flex mb-3">
                            <h3 class="box-title mb-0">Countries Statistics</h3>
                        </div>
                        
                        <div class="table-responsive datatable-primary">
                            <table class="table no-wrap text-center datatable table-bordered table-striped table-hover" id="covidData">
                                <thead class="text-capitalize">
                                    <tr class="text-center border-top-0">
                                        <th class="">Country</th>
                                        <th class="">Total Cases</th>
                                        <th class="">New Cases</th>
                                        <th class="">Total Deaths</th>
                                        <th class="">New Deaths</th>
                                        <th class="">Newly Recovered</th>
                                        <th class="">Total Recovered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                         foreach($data_response_summary['Countries'] as $country):
                                    ?>
                                            <tr>
                                                <td><?php echo $country['Country']; ?></td>
                                                <td><?php echo $country['TotalConfirmed']; ?></td>
                                                <td><?php echo $country['NewConfirmed']; ?></td>
                                                <td><?php echo $country['TotalDeaths']; ?></td>
                                                <td><?php echo $country['NewDeaths']; ?></td>
                                                <td><?php echo $country['NewRecovered']; ?></td>
                                                <td><?php echo $country['TotalRecovered']; ?></td>
                                            </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Container fluid  -->
<?php include('footer.php');?> 