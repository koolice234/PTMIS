<?php include("header.php"); ?>
            <!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content darken-2 blue black-text">
                                        <i class="mdi-action-account-child" style="font-size: 300%"></i>
                                        <p class="card-stats-title"> Total Users</p>
                                        <h4 class="card-stats-number">1</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content darken-2 blue black-text">
                                        <i class="mdi-social-person" style="font-size: 300%"></i>
                                        <p class="card-stats-title"> Physical Therapist</p>
                                        <h4 class="card-stats-number">4</h4>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content darken-2 blue black-text">
                                        <i class="mdi-maps-location-history" style="font-size: 300%"></i>
                                        <p class="card-stats-title"> Patients</p>
                                        <h4 class="card-stats-number">7</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content darken-2 blue black-text">
                                        <i class="mdi-image-timer" style="font-size: 300%"></i>
                                        <p class="card-stats-title"> <div id="MyDateDisplay"></div></p>
                                        <h4 class="card-stats-number"><div id="MyClockDisplay"></div></h4>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                                <div class="divider"></div>
                                <div id="full-calendar">              
                                  <div class="row">
                                    <div class="col s12 m8 l7">
                                      <div id='calendar'></div>
                                    </div>
                                    <div class="col s12 m4 l5">
                                        <h5>Consultation Treatment Follow-up</h5>
                                        <table class="striped">
                                            <thead>
                                              <tr>
                                                <th data-field="id">Name</th>
                                                <th data-field="name">Date</th>
                                                <th data-field="price">Time</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            date_default_timezone_set('Asia/Bangkok');
                                            $date = date("Y-m-d");
                                                include("config.php");

                                                    $result = mysqli_query($mysqli, "SELECT * FROM planofcare where POCDateSched = '$date'");
                                                    $events = array();
                                                    if(mysqli_num_rows($result)== 0){
                                                        echo "There is No Treatment today";
                                                    }else{
                                                    while ($res = mysqli_fetch_array($result)) { 
                                                    $patientID = $res['PatientID'];
                                                      
                                                    $result1 = mysqli_query($mysqli, "SELECT * FROM patient where PatientID = '$patientID'");
                                                    
                                                    while ($res1 = mysqli_fetch_array($result1)) {
                                            ?>
                                              <tr>
                                                <td><?php echo $res1['PatientName']; ?></td>
                                                <td><?php echo $res['POCDateSched']; ?></td>
                                                <td><?php echo $res['POCTime']; ?></td>
                                              </tr>
                                              <?php 
                                                }
                                                }
                                            }
                                              ?>
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>
                                </div>
                            </div>


                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->
        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        
        <div class="footer-copyright">
            <div class="container">
                <span class="right">  Copyright © 2018 Design and Developed by Mighty Conquerors</span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/date.js"></script>      
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
       

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>
    
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <?php 
                $result = mysqli_query($mysqli, "SELECT * FROM planofcare");
                $events = array();
                while ($res = mysqli_fetch_array($result)) { 
                $patientID = $res['PatientID'];
                  
                $result1 = mysqli_query($mysqli, "SELECT * FROM patient where PatientID = '$patientID'");
                
                while ($res1 = mysqli_fetch_array($result1)) {
                    

                        $e = array();
                        $e['title'] = $res1['PatientName']." - ".$res['POCTreatment'];
                        $e['start'] = $res['POCDateSched'];
                        $e['color'] = '#0000FF';

                        // Merge the event array into the return array
                        array_push($events, $e);

                }

                    // Output json for our calendar
                    
            }
            
    ?>


    <script type="text/javascript">var jArray =<?php echo json_encode($events); ?></script>
    <script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar-script.js"></script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    
</body>

</html>