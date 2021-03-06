<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>BPTRCC - PTMIS</title>

    <!-- Favicons-->
    <link rel="icon" href="images/logo.png" sizes="40x40">

    <!-- CORE CSS-->    
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
</head>

<body>
<?php 
include("config.php");
  $id = $_GET['id']; 
    $result = mysqli_query($mysqli, "SELECT * FROM evaluation WHERE EvalID = $id");
     while ($res = mysqli_fetch_array($result)) { 
            $patientID = $res['PatientID'];
                                                  
  $result1 = mysqli_query($mysqli, "SELECT * FROM patient WHERE PatientID = '$patientID'");
      while ($res1 = mysqli_fetch_array($result1)) { 
          $PName =  $res1['PatientName']; 

        $EvalPT =  $res['EvalPT'];
        $EvalSessionQty = $res['EvalSessionQty'];
        $EvalChiefComplaint =   $res['EvalChiefComplaint'];
        $EvalHistoryIllness = $res['EvalHistoryIllness'];
        $EvalSpeech = $res['EvalSpeech'];
        $EvalEdema = $res['EvalEdema'];
        $EvalEndurance = $res['EvalEndurance'];
        $EvalVision =  $res['EvalVision'];
        $EvalMuscleTone = $res['EvalMuscleTone'];
        $EvalPosture =   $res['EvalPosture'];
        $EvalHearing = $res['EvalHearing'];
        $EvalCoordination = $res['EvalCoordination'];
        $EvalSkin = $res['EvalSkin'];
        $Eval_Date = $res['Eval_Date'];
    }}
?>

      <section id="content">
        <!--start container-->
        <div class="container">
              <div class="row">
                <div class="col s12 m6 l6">
                  <img src="images/logo11.png" width="250" height="200" style="position: absolute;" alt="company logo">
                </div>

                <div class="col s12 m6 l6">
                  <div class="invoice-company-address right-align">
                    <span class="invoice-icon"><i class="mdi-social-location-city cyan-text"></i></span>

                    <p><span class="strong">Bago Physical Therapy</span>
                      <br/>
                      <span class="strong">Rehab Care Center</span>
                      <br/>
                      <span>San Esteban Subd, Phase 1,</span>
                      <br/>
                      <span>Bago City</span>
                      <br/>
                      <span>+639-25-861-8550</span>
                    </p>
                  </div>

                </div>
            </div>
            <br>
            <div id="print">
                <div class="col s12 m12 l6">
                  <h4 class="header">Patient Evaluation</h4>
                  <ul id="projects-collection" class="collection">
                    <li class="collection-item avatar">
                      <i class="mdi-action-assignment-ind circle light-blue"></i>
                      <span class="collection-header strong">Patient Name</span>
                      <p><?php echo $PName; ?></p>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s3">
                          <p class="collections-title strong">Physical Therapist</p>
                          <p class="collections-content"><?php echo $EvalPT; ?></p>
                        </div>
                        <div class="col s3">
                          <p class="collections-title strong">Number of Session</p>
                          <p class="collections-content"><?php echo $EvalSessionQty; ?></p>
                        </div>
                        <div class="col s3">
                          <p class="collections-title strong">Complaint</p>
                          <p class="collections-content"><?php echo $EvalChiefComplaint; ?></p>
                        </div>
                        <div class="col s3">
                          <p class="collections-title strong">History Patient Illnesses</p>
                          <p class="collections-content"><?php echo $EvalHistoryIllness; ?></p>
                        </div>
                      </div>
                        
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s3">
                          <p class="collections-title strong">Vision</p>
                          <p class="collections-content"><?php echo $EvalVision; ?></p>
                        </div>
                        <div class="col s2">
                          <p class="collections-title strong">Speech</p>
                          <p class="collections-content"><?php echo $EvalSpeech; ?></p>
                        </div>
                        <div class="col s3">
                          <p class="collections-title strong">Edema</p>
                          <p class="collections-content"><?php echo $EvalEdema; ?></p>
                        </div>
                        <div class="col s2">
                          <p class="collections-title strong">Endurance</p>
                          <p class="collections-content"><?php echo $EvalEndurance; ?></p>
                        </div>
                        <div class="col s2">
                          <p class="collections-title strong">Muscle Tone</p>
                          <p class="collections-content"><?php echo $EvalMuscleTone; ?></p>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s3">
                          <p class="collections-title strong">Posture</p>
                          <p class="collections-content"><?php echo $EvalPosture; ?></p>
                        </div>
                        <div class="col s3">
                          <p class="collections-title strong">Hearing</p>
                          <p class="collections-content"><?php echo $EvalHearing; ?></p>
                        </div>
                        <div class="col s3">
                          <p class="collections-title strong">Coordination</p>
                          <p class="collections-content"><?php echo $EvalCoordination; ?></p>
                        </div>
                        <div class="col s3">
                          <p class="collections-title strong">Skin</p>
                          <p class="collections-content"><?php echo $EvalSkin; ?></p>
                        </div>
                      </div>
                    </li>
                  </ul>
                <div class="col s12 m6 l12 center-align">
                  <p>Approved By</p>
                  <p>_____________________________________</p>
                  <p class="header">Joe Depp</p>
                  <p>Administrator</p>
                </div>

              </div>
            </div>
          </div>
        <!--end container-->

      </section>

          <!-- jQuery Library -->
          <script type="text/javascript">
 window.onload = function() { window.print(); window.close();}
</script>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--prism-->
    <script type="text/javascript" src="js/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    
</body>

</html>