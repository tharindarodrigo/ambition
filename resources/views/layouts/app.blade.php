<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>MyAmbition.lk DashBoard</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/dashboard.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />





</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-2.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->


    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> <i class="fa fa-dashboard"></i> About</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">


                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Ahamed Faheem
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li class="divider"></li>
                                <li><a href="#"> Log Out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="">

            <div class="col-md-10 col-md-push-1 ">

                <div class="nav-container">
                    <ul class="nav nav-icons" role="tablist">
                        <li class=" nav-li">
                            <a href="#description-logo" role="tab" data-toggle="tab" aria-expanded="false">
                                <i style="color: #709623; font-size: 18px;" class="fa fa-info-circle"></i>
                                <h5 style="display: inline-block;color: #709623;">Overview</h5>
                            </a>
                        </li>
                        <li class="nav-li">
                            <a href="#map-logo" role="tab" data-toggle="tab" aria-expanded="false">
                                <i style="color: #709623; font-size: 18px;" class="fa fa-map-marker"></i>
                                <h5 style="display: inline-block;color: #709623;">Contact</h5>
                            </a>
                        </li>
                        <li class="nav-li">
                            <a href="#legal-logo" role="tab" data-toggle="tab" aria-expanded="false">
                                <i style="color: #709623; font-size: 18px;" class="fa fa-legal"></i>
                                <h5 style="display: inline-block;color: #709623;">Education</h5>
                            </a>
                        </li>
                        <li class="nav-li">
                            <a href="#legal-logo2" role="tab" data-toggle="tab" aria-expanded="false">
                                <i style="color: #709623; font-size: 18px;" class="fa fa-legal"></i>
                                <h5 style="display: inline-block;color: #709623;">Work Experience </h5>
                            </a>

                        <li class=" nav-li">
                            <a href="#project" role="tab" data-toggle="tab" aria-expanded="true">
                                <i style="color: #709623; font-size: 18px;" class="fa fa-life-ring"></i>
                                <h5 style="display: inline-block;color: #709623;">Project</h5>
                            </a>
                        </li>

                        <li class=" nav-li">
                            <a href="#honors-wards" role="tab" data-toggle="tab" aria-expanded="true">
                                <i style="color: #709623; font-size: 18px;" class="fa fa-life-ring"></i>
                                <h5 style="display: inline-block;color: #709623;">Honors & Awards </h5>
                            </a>
                        </li>

                        <li class=" nav-li">
                            <a href="#volunteer-experience" role="tab" data-toggle="tab" aria-expanded="true">
                                <i style="color: #709623; font-size: 18px;" class="fa fa-life-ring"></i>
                                <h5 style="display: inline-block;color: #709623;"> Volunteer </h5>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active" id="description-logo">
                        <div class="card">
                            <div class="col-md-12" style="padding-top: 10px;">
                                <div class="card">

                                    <table id="user" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td width="40%">Summary</td>
                                            <td><a href="#" class="myeditable editable editable-click editable-empty" id="username" data-type="textarea" data-name="username" data-original-title="Enter username">Change me</a></td>
                                        </tr>
                                        <tr>
                                            <td>Ambition</td>
                                            <td><a href="#" class="myeditable editable editable-click editable-empty" id="ambition" data-type="textarea" data-name="ambition" data-original-title="Enter firstname">Change me</a></td>
                                        </tr>
                                        <tr>
                                            <td>Interest / Hobby</td>
                                            <td><a href="#" class="myeditable editable editable-click editable-empty" id="hoby" data-type="checklist" data-name="group" data-source="/groups" data-original-title="Select group">Change me</a></td>
                                        </tr>
                                        <tr>
                                            <td>Achievements</td>
                                            <td><a href="#" class="myeditable editable editable-click editable-empty"  id="achievements" data-type="text" data-name="dob"  data-original-title="Select Date of birth">Change me</a></td>
                                        </tr>
                                        <tr>
                                            <td>Educational Goals</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="Educational-Goals" data-type="textarea" data-name="comments" data-original-title="Enter comments">Change me</a></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <h3>Basic Info</h3>

                                    <table id="user2" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td>Birth Date</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="birth-date" data-type="text"  data-name="comments" data-original-title="Enter comments">Change me</a></td>
                                        </tr>
                                        <tr>
                                            <td>Birth Year</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="birth-year" data-type="text"  data-name="comments" data-original-title="Enter comments">Change me</a></td>
                                        </tr>
                                        <tr>
                                            <td>Age</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" data-type="text"  id="age" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" data-type="checklist" id="gender"  data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Memberships</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" data-type="textarea"  id="membership" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Professional Skills</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" data-type="textarea" id="professional-skills" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Languages</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="languages" data-type="checklist" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Schools</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="schools" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Lived Places</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="lived-places" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="map-logo">
                        <div class="card">
                            <div class="col-md-12" style="padding-top: 10px;">
                                <div class="card">

                                    <h3>Basic Info</h3>

                                    <table id="user" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td>Phone</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="phone" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="email" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Social Media</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="social-media" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="address" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="legal-logo">
                        <div class="card">
                            <div class="col-md-12" style="padding-top: 10px;">
                                <div class="card">

                                    <table id="user" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td>Degree</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="degree" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>
                                        <tr>
                                            <td>Certification</td>
                                            <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="certification" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="legal-logo2">
                        <div class="card">

                            <table id="user" class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <td>Employment</td>
                                    <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="employment" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td> Internship </td>
                                    <td><a href="#" class="myeditable editable editable-pre-wrapped editable-click editable-empty" id="internship" data-type="textarea" data-name="comments" data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="tab-pane " id="project">

                        <div class="tab-pane " id="honors-wards">
                            <div class="tab-pane " id="volunteer-experience">

                            </div>

                        </div> <!-- end tab content -->

                    </div> <!-- end col-md-8 -->

                </div>

            </div>

        </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script src="assets/js/dashboard.js"></script>

<script src="assets/js/bootstrap-editable.min.js" type="text/javascript"></script>

<script src="assets/js/editable.js"></script>

<link href="assets/css/bootstrap-editable.css" rel="stylesheet"/>

</html>
