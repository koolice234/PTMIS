<?php include("header.php"); 
 $patient_ID = $_GET['patient_id'];
?>
            <!-- CONTENT-->

            <section class="section">

                <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Patient Registration</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Transaction - Patient Registration</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->

<?php include_once("config.php"); 
 
    $edit=mysqli_query($mysqli,"select * from patient where PatientID='$patient_ID'");
    $erow=mysqli_fetch_array($edit);
                    
?>            
                 
                 <div class="card-panel">
                    <h4 class="header2">UPDATE PATIENT RECORD</h4>
                        <div class="divider"></div>
                        <div class="row">
                            <form class="col s12" action="PatientActionEdit.php" method="post">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input id="patientID" type="hidden" name="patientID" value="<?php echo $erow['PatientID']; ?>">
                                       <input id="patientName" type="text" name="patientName" value="<?php echo $erow['PatientName']; ?>" required>
                                        <label for="patientName">Patient Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <select name="patientAddress">
                                            <option value="<?php echo $erow['PatientAddress']; ?>"><?php echo $erow['PatientAddress']; ?></option>
                                            <option value="Bacolod">Bacolod</option>
                                            <option value="Bago">Bago</option>
                                            <option value="Cadiz">Cadiz</option>
                                            <option value="Escalante">Escalante</option>
                                            <option value="Himamaylan">Himamaylan</option>
                                           <option value="Kabankalan">Kabankalan</option>
                                           <option value="La Carlota">La Carlota</option>
                                           <option value="Sagay">Sagay</option>
                                           <option value="San Carlos">San Carlos</option>
                                           <option value="Silay">Silay</option>
                                           <option value="Sipalay">Sipalay</option>
                                           <option value="Talisay">Talisay</option>
                                           <option value="Victorias">Victorias</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s3">
                                        <select name="patientGender" >
                                            <option value="Male" <?php if($erow['PatientGender']=="Male") echo "selected=selected"; ?>>Male</option>
                                            <option value="Female" <?php if($erow['PatientGender']=="Fenale") echo "selected=selected"; ?>>Female</option>
                                        </select>
                                        <label for="patientGender">Gender And Birthday</label>
                                    </div>
                                    <div class="input-field col s9">
                                        <input id="patientBday" type="date" name="patientBday" >
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="input-field col s6">
                                            <select name="patientCivilStatus">
                                                <option value="Single" <?php if($erow['PatientCivilStatus']=="Single") echo "selected=selected"; ?>>Single</option>
                                                <option value="Married" <?php if($erow['PatientCivilStatus']=="Married") echo "selected=selected"; ?>>Married</option>
                                                <option value="Widowed" <?php if($erow['PatientCivilStatus']=="Widowed") echo "selected=selected"; ?>>Widowed</option>
                                                <option value="Separated" <?php if($erow['PatientCivilStatus']=="Separated") echo "selected=selected"; ?>>Separated</option>
                                            </select>
                                            <label for="patientCivilStatus">Civil Status</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="patientProfession" type="text" name="patientProfession" value="<?php echo $erow['PatientProfession']; ?>" required>
                                            <label for="patientProfession">Profession</label>
                                        </div>
                                </div>
                                <div class="divider"></div>
                                    <h4 class="header2">Patient Referral Form</h4>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <input name="doctor" type="text" value="<?php echo $erow['PatientDoctor']; ?>">
                                                <label for="doctor">Referring Doctor(Optional)</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input name="hospital" type="text" value="<?php echo $erow['PatientHospital']; ?>">
                                                <label for="hospital">Hospital(Optional)</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input name="hospitalAddress" type="text" value="<?php echo $erow['PatientReferralAddress']; ?>">
                                                <label for="hospitalAddress">Hospital Address(Optional)</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <input name="telephone" type="text" value="<?php echo $erow['PatientTelephone']; ?>">
                                                <label for="telephone">Telephone(Optional)</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <input name="contactPerson" type="text" value="<?php echo $erow['PatientContactPerson']; ?>">
                                                <label for="contactPerson">Contact Person(Optional)</label>
                                            </div>
                                            <div class="input-field col s4">
                                            <select id="cases" name="cases" >
                                                <option value="" disabled selected><?php echo $erow['PatientCases']; ?></option>
                                                <option value="Stroke">Stroke</option>
                                                <option value="Spinal Cord Injuries">Spinal Cord Injuries</option>
                                                <option value="Traumatic Brain Injuries">Traumatic Brain Injuries</option>
                                                <option value="Peripheral Nerve Injuries">Peripheral Nerve Injuries</option>
                                                <option value="Low Back Pains">Low Back Pains</option>
                                                <option value="Scoliosis">Scoliosis</option>
                                                <option value="Myofascial Pain Syndrome">Myofascial Pain Syndrome</option>
                                                <option value="Frozen Shoulder">Frozen Shoulder</option>
                                                <option value="Fracture">Fracture</option>
                                                <option value="Arthritis">Arthritis</option>
                                                <option value="Bells Palsy">Bells Palsy</option>
                                                <option value="Cerebral Palsy">Cerebral Palsy</option>
                                                <option value="Parkinsons Disease">Parkinsons Disease</option>
                                                <option value="Guillane Barre Syndorme">Guillane Barre Syndorme</option>
                                            </select><label for="cases">Choose Case</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s10">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="Submit" value="add">Update Patient<i class="mdi-content-send right"></i></button>
                                        </div>
                                        <div class="input-field col s2">
                                            <a href="patient.php" class="btn red waves-effect waves-light right" >Cancel</i></a>
                                        </div>
                                </div>
                            </div>
                       </form>  
                    
                </div>
   
            </section>
    
        </div>

    </div>
            <!-- END LEFT SIDEBAR NAV-->




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
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- Toast Notification -->
    
</body>

</html>