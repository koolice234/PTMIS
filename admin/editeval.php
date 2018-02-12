<?php include("header.php"); ?>
            <!-- CONTENT-->
            <section class="section">

                        <!--breadcrumbs start-->
                <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                  <div class="container">
                    <div class="row">
                      <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Evaluation</h5>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Dashboard</a></li>
                            <li class="active">Transaction - Manage Evaluation</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
                <!--breadcrumbs end-->
                
             <?php include("config.php"); 
                $id = $_GET['id'];
                 $edit=mysqli_query($mysqli,"select * from evaluation INNER JOIN patient ON evaluation.PatientID = patient.PatientID where EvalID='$id'");
                $erow=mysqli_fetch_array($edit); 
            ?>
                <div class="card-panel">
                     <form class="col s12" action="evaluationActionEdit.php" method="post" >
                    <h4 class="header2">Evaluation Form</h4>
                        <div class="divider"></div>
                           
                                <div class="row">
                                    <div class="input-field col s6">

                                        <input type="hidden" name="evalid" value="<?php echo $erow['EvalID']; ?>">
                                        <input type="hidden" name="PatientID" value="<?php echo $erow['PatientID']; ?>">
                                        <input id="patientName" name="patientName" value="<?php echo $erow['PatientName']; ?>" type="text"   style="color: black;">
                                        <div id="patientList"></div>
                                        <label for="patientName" style="color: black;">Patient Name</label>
                                    </div>
                                    <div class="input-field col s4">
                                       <select id="PTName" name="PTName">
                                            <option value="<?php echo $erow['EvalPT']; ?>" disabled selected>Choose Physical Therapist</option>
                                            <?php
                                                    $result = mysqli_query($mysqli, "SELECT * FROM PT ORDER BY PT_ID DESC");
                                                    while ($res = mysqli_fetch_array($result)) { ?>
                                            
                                            <option value="<?php echo $res['PT_Name']; ?>"><?php echo $res['PT_Name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="input-field col s2">
                                        <input name="evalSession" type="number" required   style="color: black;" value="<?php echo $erow['EvalSessionQty']; ?>" style="color: black;">
                                        <label for="evalSession" style="color: black;">Number of Session</label>
                                    </div>
                                </div>
                                    <h4 class="header">Chief Complaint</h4>
                                    <div class="divider"></div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <textarea id="caseDescription" name="caseDescription" class="materialize-textarea"  style="color: black;"><?php echo $erow['EvalChiefComplaint']; ?></textarea>
                                                    <label for="caseDescription" style="color: black;">Chief Complaint</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <textarea id="PatientIllness" name="PatientIllness" class="materialize-textarea"  style="color: black;"><?php echo $erow['EvalHistoryIllness']; ?></textarea>
                                                    <label for="PatientIllness" style="color: black;">History Patient Illness</label>
                                                </div>
                                        </div>
                                </div>
                                
                                
                            </div>
                                <div class="card-panel">
                                    <h4 class="header">Occular Inspection</h4>
                                    <div class="divider"></div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <textarea name="Speech" class="materialize-textarea" required  style="color: black;"><?php echo $erow['EvalSpeech']; ?></textarea>
                                                <label for="Speech" style="color: black;">Speech</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Edema" class="materialize-textarea" required  style="color: black;"><?php echo $erow['EvalEdema']; ?></textarea>
                                                <label for="Edema" style="color: black;">Edema</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Endurance" class="materialize-textarea" required  style="color: black;"><?php echo $erow['EvalEndurance']; ?></textarea>
                                                <label for="Endurance" style="color: black;">Endurance</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <textarea name="Vision" class="materialize-textarea" required  style="color: black;"><?php echo $erow['EvalVision']; ?></textarea>
                                                <label for="Vision" style="color: black;">Vision</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="MuscleTone" class="materialize-textarea" required  style="color: black;"><?php echo $erow['EvalMuscleTone']; ?></textarea>
                                                <label for="MuscleTone" style="color: black;">Muscle Tone</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Posture" class="materialize-textarea" required  style="color: black;"><?php echo $erow['EvalPosture']; ?></textarea>
                                                <label for="Posture" style="color: black;">Posture</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <textarea name="Hearing" class="materialize-textarea" required  style="color: black;"><?php echo $erow['EvalHearing']; ?></textarea>
                                                <label for="Hearing" style="color: black;">Hearing</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Coordination" class="materialize-textarea"  required><?php echo $erow['EvalCoordination']; ?></textarea>
                                                <label for="Coordination" style="color: black;">Coordination</label>
                                            </div>
                                            <div class="input-field col s4">
                                                <textarea name="Skin" class="materialize-textarea" required  style="color: black;"><?php echo $erow['EvalSkin']; ?></textarea>
                                                <label for="Skin" style="color: black;">Skin</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <textarea name="EvalAssessment" class="materialize-textarea"  required style="color: black;"><?php echo $erow['EvalAssessment']; ?></textarea>
                                                <label for="Assessment" style="color: black;">Assessment</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <textarea name="EvalPlan" class="materialize-textarea" required  style="color: black;"><?php echo $erow['EvalPlan']; ?></textarea>
                                                <label for="Plan" style="color: black;">Plan</label>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-panel">
                           <h4 class="header">Range of Motion</h4>
                                    <div class="divider"></div>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Shoulder</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="ROMLeftShoulder"  id="test5" min="0" max="10"  value="<?php echo $erow['ROMLeftShoulder']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Shoulder</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="ROMRightShoulder" id="test5" min="0" max="10"  value="<?php echo $erow['ROMRightShoulder']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Elbow</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftElbow" id="test5" min="0" max="10"  value="<?php echo $erow['ROMLeftElbow']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Elbow</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightElbow" id="test5" min="0" max="10"  value="<?php echo $erow['ROMRightElbow']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Forearm</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftForearm" id="test5" min="0" max="10"  value="<?php echo $erow['ROMLeftForearm']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Forearm</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightForearm" id="test5" min="0" max="10"  value="<?php echo $erow['ROMRightForearm']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Lefthand Fingers</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLefthandFingers" id="test5" min="0" max="10"  value="<?php echo $erow['ROMLefthandFingers']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Righthand Fingers</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRighthandFingers" id="test5" min="0" max="10"  value="<?php echo $erow['ROMRighthandFingers']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Wrist</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftWrist" id="test5" min="0" max="10"  value="<?php echo $erow['ROMLeftWrist']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Wrist</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightWrist" id="test5" min="0" max="10"  value="<?php echo $erow['ROMRightWrist']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Trunk</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftTrunk" id="test5" min="0" max="10"  value="<?php echo $erow['ROMLeftTrunk']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Trunk</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightTrunk" id="test5" min="0" max="10"  value="<?php echo $erow['ROMRightTrunk']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Knee</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftKnee" id="test5" min="0" max="10"  value="<?php echo $erow['ROMHip']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Knee</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightKnee" id="test5" min="0" max="10"  value="<?php echo $erow['ROMRightKnee']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Ankle</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMLeftAnkle" id="test5" min="0" max="10"  value="<?php echo $erow['ROMLeftAnkle']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Ankle</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMRightAnkle" id="test5" min="0" max="10"  value="<?php echo $erow['ROMRightAnkle']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Neck</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMNeck" id="test5" min="0" max="10"  value="<?php echo $erow['ROMNeck']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Hip</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    
                                                    <input type="text" name="ROMHip" id="test5" min="0" max="10"  value="<?php echo $erow['ROMHip']; ?>" style="color: black;"  />
                                                </p>
                                            </div>
                                        </div>
                            </div>
                            <div class="divider"></div>
                            <div class="card-panel">
                            <h4 class="header">Manual Muscle Test</h4>
                                    <div class="body">
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Shoulder</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftShoulder" value="<?php echo $erow['MMTLeftShoulder']; ?>"  min="1" max="5"  style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Shoulder</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightShoulder" value="<?php echo $erow['MMTRightShoulder']; ?>" min="1" max="5"  style="color: black;" />
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Elbow</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftElbow" value="<?php echo $erow['MMTLeftElbow']; ?>"  min="1" max="5"  style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Elbow</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightElbow" value="<?php echo $erow['MMTRightElbow']; ?>"  min="1" max="5"  style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Forearm</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftForearm" value="<?php echo $erow['MMTLeftForearm']; ?>"  min="1" max="5"  style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Forearm</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightForearm" value="<?php echo $erow['MMTRightForearm']; ?>" min="1" max="5"  style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Hand Fingers</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLefthandFingers" value="<?php echo $erow['MMTLefthandFingers']; ?>"  min="1" max="5"  style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Hand Fingers</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRighthandFingers" value="<?php echo $erow['MMTRighthandFingers']; ?>" min="1" max="5"  style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Wrist</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftWrist" value="<?php echo $erow['MMTLeftWrist']; ?>"  min="1" max="5"  style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Wrist</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightWrist" value="<?php echo $erow['MMTRightWrist']; ?>"  min="1" max="5"  style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Trunk</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftTrunk" value="<?php echo $erow['MMTLeftTrunk']; ?>"   min="1" max="5"  style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Trunk</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightTrunk" value="<?php echo $erow['MMTRightTrunk']; ?>" min="1" max="5"  style="color: black;" />
                                                </p>
                                            </div>
                                        </div>                                        
                                        
                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Knee</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftKnee" value="<?php echo $erow['MMTLeftKnee']; ?>" min="1" max="5"  style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Knee</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightKnee" value="<?php echo $erow['MMTRightKnee']; ?>" min="1" max="5"  style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Left Ankle</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTLeftAnkle" value="<?php echo $erow['MMTLeftAnkle']; ?>" min="1" max="5"  style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Right Ankle</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTRightAnkle" value="<?php echo $erow['MMTRightAnkle']; ?>" min="1" max="5"  style="color: black;" />
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Neck</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text" name="MMTNeck" value="<?php echo $erow['MMTNeck']; ?>"  min="1" max="5"  style="color: black;"  />
                                                </p>
                                            </div>
                                            <div class="col s3">
                                                <p style="margin:35px 0px 0px 55px;">Hip</p>
                                            </div>
                                            <div class="input-field col s3">
                                                <p class="range-field">
                                                    <input type="text"  name="MMTHip" value="<?php echo $erow['MMTHip']; ?>"  min="1" max="5"  style="color: black;" />
                                                </p>
                                            </div>
                                            <div class="row">
                                            <div class="input-field col s10">
                                             <button class="btn cyan waves-effect waves-light right " type="submit" name="Submit" style="margin-right:20px;">Submit</button>
                                            </div>
                                            <div class="input-field col s2">
                                                 <a class="btn red waves-effect waves-light right modal-close" href="manageevaluation.php" style="margin-right:20px;">Back</a>
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                            
                                </div>
                    </div>
                </form>
            </div>
        </section>
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/clock.js"></script>
    <script type="text/javascript" src="js/date.js"></script>      
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
     
    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script> 

    <!-- datatables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>    

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
