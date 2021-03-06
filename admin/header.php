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
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">



  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/fullcalendar/css/fullcalendar.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
 <script type="text/javascript" src="js/searchscript.js"></script>
<script type="text/javascript" src="js/searchJS.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


</head>

<body>
    <!-- Start Page Loading -->
   
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                <div class="nav-wrapper">
                     <h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="images/logo.png" style="width:65px;height:20;"" alt="PTMIS-logo"> </h1></a><a href="index.php"> <span class="black-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BPTRCC - PHYSICAL THERAPY MANAGMENT INFORMATION SYSTEM</span></a>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="../logout.php" class="waves-effect waves-block waves-light"><i class="mdi-action-settings-power"></i></a>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/user.png" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light black-text profile-btn"  href="#" data-activates="profile-dropdown">Admin<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal black-text">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">

                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-file-folder"></i> Data Entry<i class="mdi-hardware-keyboard-arrow-down right"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="patient.php">Patient</a></li>
                                        <li><a href="AddTrans.php">Add Transactions</a></li>        
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-mode-edit"></i> Transaction<i class="mdi-hardware-keyboard-arrow-down right"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="Referral.php">Manage Referral</a></li>
                                        <li><a href="ManageEvaluation.php">Manage Evaluation</a>
                                        </li>
                                        <li><a href="ManagePlanCare.php">Manage PT Notes</a>
                                        </li>
                                        <li><a href="Transaction.php">Billing</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Reports<i class="mdi-hardware-keyboard-arrow-down right"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="dateReport.php">Patient Record</a>
                                        </li>
                                         <li><a href="#" onclick="openCases()">Cases</a>
                                        </li>
                                        <li><a href="#" onclick="openPatient()">Patient</a>
                                        </li>
                                        <li><a href="statementReport.php">Statement of Account</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-settings"></i> Maintenance<i class="mdi-hardware-keyboard-arrow-down right"></i></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="export/export.php">Export Database</a>
                                        </li>
                                        <li><a href="export/import.php">Import Database</a>
                                        </li>
                                        <li><a href="user.php">User</a>
                                        </li>
                                        <li><a href="physicalTherapist.php">Physical Therapists</a>
                                        </li>
                                        <li><a href="training.php">Trainings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>

            <script>
            function openCases() {
                myWindow = window.open("cases.php?year=2018", "", "width=1350, height=650");
            }
            function openPatient() {
                myWindow = window.open("patient_total.php?year=2018", "", "width=1350, height=650");
            }

            </script>