<?php include 'header.php';?>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://covid19project.org.ng/api/endpoints/affected_states",
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
    $states = $data['Countries']['Country'];
    $cases = $data['Countries']['CountryCode'];
    $recovered = $data['Countries']['NewConfirmed'];
    $deaths = $data['Countries']['TotalConfirmed'];
}
?>

 <div class="main-content-inner">

    <div class="container">
        <div class="row">

        <div class="sales-report-area col-12 mb-5 mt-5 ">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="background: rgb(53,203,250);" class=" rounded shadow-sm single-report mb-xs-30">
                                <div class="s-report-inner pr--20 pt--30 mb-3">
                                    <div class="icon"><i class="fa fa-asterisk"></i></div>
                                    <div class="s-report-title d-flex justify-content-between">
                                        <h4 class="header-title mb-0">Total Confirmed Cases</h4>
                                        <p>10 mins</p>
                                    </div>
                                    <div class="d-flex justify-content-between pb-2">
                                        <h4><?php  $sum = 0;

                                            foreach($data['Covid19NG'] as $ngstates) {
                                              $sum += $ngstates['name'];
                                            }
 
                                            echo $sum; ?>
                                        </h4>
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
            
            <!-- Corona virus countries table -->
            <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Affected States Statistics</h4>
                                <div class=" datatable-primary">
                                   <table id="dataTable2"  class="text-center datatable table" >
                                        <thead class="text-capitalize">
                                            <tr class="text-center">
                                                <th>States</th>
                                                <th>Total Cases</th>
                                                <th>Total Recovered</th>
                                                <th>Total Death</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- STOPPED HERE STUCKED AT ECHOING ARRAY-->
                                <?php
                                        foreach($data['Covid19NG'] as $ngstates):
                                ?>
                                            <tr>
                                                <td><?php echo $ngstates['name']; ?></td>
                                                <td><?php echo $ngstates['cases']; ?></td>
                                                <td><?php echo $ngstates['recovered']; ?></td>
                                                <td><?php echo $ngstates['death']; ?></td>
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


