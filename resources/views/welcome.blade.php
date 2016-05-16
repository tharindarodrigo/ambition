@extends('layouts.app')

@section('content')
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
                                    <td><a href="#" class="myeditable editable editable-click editable-empty"
                                           id="username" data-type="textarea" data-name="username"
                                           data-original-title="Enter username">Change me</a></td>
                                </tr>
                                <tr>
                                    <td>Ambition</td>
                                    <td><a href="#" class="myeditable editable editable-click editable-empty"
                                           id="ambition" data-type="textarea" data-name="ambition"
                                           data-original-title="Enter firstname">Change me</a></td>
                                </tr>
                                <tr>
                                    <td>Interest / Hobby</td>
                                    <td><a href="#" class="myeditable editable editable-click editable-empty"
                                           id="hoby" data-type="checklist" data-name="group"
                                           data-source="/groups" data-original-title="Select group">Change
                                            me</a></td>
                                </tr>
                                <tr>
                                    <td>Achievements</td>
                                    <td><a href="#" class="myeditable editable editable-click editable-empty"
                                           id="achievements" data-type="text" data-name="dob"
                                           data-original-title="Select Date of birth">Change me</a></td>
                                </tr>
                                <tr>
                                    <td>Educational Goals</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="Educational-Goals" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">Change me</a></td>
                                </tr>
                                </tbody>
                            </table>

                            <h3>Basic Info</h3>

                            <table id="user2" class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <td>Birth Date</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="birth-date" data-type="text" data-name="comments"
                                           data-original-title="Enter comments">Change me</a></td>
                                </tr>
                                <tr>
                                    <td>Birth Year</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="birth-year" data-type="text" data-name="comments"
                                           data-original-title="Enter comments">Change me</a></td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           data-type="text" id="age" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           data-type="checklist" id="gender" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Memberships</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           data-type="textarea" id="membership" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Professional Skills</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           data-type="textarea" id="professional-skills" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Languages</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="languages" data-type="checklist" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Schools</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="schools" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Lived Places</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="lived-places" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
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
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="phone" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="email" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Social Media</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="social-media" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="address" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
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
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="degree" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
                                </tr>
                                <tr>
                                    <td>Certification</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="certification" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">Empty</a></td>
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
                            <td><a href="#"
                                   class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                   id="employment" data-type="textarea" data-name="comments"
                                   data-original-title="Enter comments">Empty</a></td>
                        </tr>
                        <tr>
                            <td> Internship</td>
                            <td><a href="#"
                                   class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                   id="internship" data-type="textarea" data-name="comments"
                                   data-original-title="Enter comments">Empty</a></td>
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
@endsection
