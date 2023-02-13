<?php include 'header.php';?>

<?php
    //Intialize varables.
    $globalNewConfirmed = "";
    $globalTotalConfirmed = "";
    $globalNewDeaths = "";
    $globalTotalDeaths = "";
    $globalNewRec = "";
    $globalTotalRec = "";
     //Countries
     $counCountry = "";
     $counCountryCode = "";
     $counNewConfirmed = "";
     $counTotalConfirmed = "";
     $counNewDeaths = "";
     $counTotalDeaths = "";
     $counNewRec = "";
     $counTotalRec = "";
     $counDate = "";
     //date
     $globalDate = "";

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.covid19api.com/summary",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        
        $data = json_decode($response, true);
        
       $globalNewConfirmed = $data ['Global']['NewConfirmed'];
       $globalTotalConfirmed = $data ['Global']['TotalConfirmed'];
       $globalNewDeaths = $data ['Global']['NewDeaths'];
       $globalTotalDeaths = $data ['Global']['TotalDeaths'];
       $globalNewRec = $data ['Global']['NewRecovered'];
       $globalTotalRec = $data ['Global']['TotalRecovered'];
        // Countries
        $counCountry = $data['Countries']===['Country'];
        $counCountryCode = $data['Countries']['CountryCode'];
        $counNewConfirmed = $data['Countries']['NewConfirmed'];
        $counTotalConfirmed = $data['Countries']['TotalConfirmed'];
        $counNewDeaths = $data['Countries']['NewDeaths'];
        $counTotalDeaths = $data['Countries']['TotalDeaths'];
        $counNewRec = $data['Countries']['NewRecovered'];
        $counTotalRec = $data['Countries']['TotalRecovered'];
        $counDate = $data['Countries']['Date'];
        //date
        $globalDate = $data['Date'];
       
    }
   // print_r($data) ;
?>

 <div class="main-content-inner">
        <div class="container">
            <!-- Header intro-->
            
                <div class="row">
                                <!-- heading area start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="header-title">COVID-19 Global Statics <span class="badge badge-primary">Last Updated on <?php echo date('d F, Y h:i:s', strtotime($globalDate));?></span></h2>
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
            
            <!-- sales report area start -->
            <div class="sales-report-area mb-5 mt-5 ">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="background: rgb(53,203,250);" class=" rounded shadow-sm  single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-asterisk"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Total Confirmed Cases</h4>
                                        <p>10 mins</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h4><?php echo number_format($globalTotalConfirmed); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div style="background: rgb(255,194,58); " class="sbg4 rounded shadow-sm single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-asterisk"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Newly Confirmed Cases</h4>
                                        <p>10 mins</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h4><?php echo number_format($globalNewConfirmed) ; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="background: rgb(53,203,250);" class="rounded shadow-sm single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-asterisk"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Total Deaths</h4>
                                        <p>10 mins</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h4><?php echo number_format($globalTotalDeaths) ;?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sales report area end -->

                <!-- sales report area start -->
            <div class="sales-report-area mt-5 ">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="background: rgb(220,59,69);" class="rounded shadow-sm  single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-asterisk"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">New Deaths</h4>
                                        <p>10 mins</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h4><?php echo number_format($globalNewDeaths); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div style="background: rgb(53,203,250);" class="rounded shadow-sm single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-asterisk"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Total Recovered</h4>
                                        <p>10 mins</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h4><?php echo number_format($globalTotalRec); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div style="background: rgb(65,168,70);" class=" rounded single-report">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon "><i class="fa fa-asterisk"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Newly Recovered</h4>
                                        <p>10 mins</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h4><?php echo number_format($globalNewRec); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- sales report area end -->
                
            <div class="row">
                    <!-- heading area start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="header-title">Reported Cases and Deaths by Country, Territory, or Conveyance
                                     <span class="badge badge-primary">Last Updated on 
                                         <?php echo date('d F, Y h:i:s', strtotime($globalDate));?></span>
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
                    <!-- Corona virus countries table -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Countries Statistics</h4>
                                <div class=" datatable-primary">
                                   <table id="dataTable2"  class="text-center datatable table" >
                                        <thead class="text-capitalize">
                                            <tr class="text-center">
                                                <th>Country</th>
                                                <th>Total Cases</th>
                                                <th>New Cases</th>
                                                <th>Total Death</th>
                                                <th>New Death</th>
                                                <th>Total Recovered</th>
                                                <th>Newly Recovered</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- STOPPED HERE STUCKED AT ECHOING ARRAY-->
                                <?php
                                         foreach($data['Countries'] as $country):
                                ?>
                                            <tr>
                                                <td><?php echo $country['Country']; ?></td>
                                                <td><?php echo $country['TotalConfirmed']; ?></td>
                                                <td><?php echo $country['NewConfirmed']; ?></td>
                                                <td><?php echo $country['TotalDeaths']; ?></td>
                                                <td><?php echo $country['NewDeaths']; ?></td>
                                                <td><?php echo $country['TotalRecovered']; ?></td>
                                                <td><?php echo $country['NewRecovered']; ?></td>
                                            </tr>

                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


    

<?php include 'footer.php';?>