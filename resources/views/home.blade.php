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
                                           data-original-title="Enter username">{!! '' !!}</a></td>
                                </tr>
                                <tr>
                                    <td>Ambition</td>
                                    <td><a href="#" class="myeditable editable editable-click editable-empty"
                                           id="ambition" data-type="textarea" data-name="ambition"
                                           data-original-title="Enter firstname">{!! '' !!}</a></td>
                                </tr>
                                <tr>
                                    <td>Interest / Hobby</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <input type="text" class="form-control small" style="border-bottom: #0000cc dashed thin;
                                        border-top:none; border-right:none;border-left:none; background: inherit"
                                                       id="new_interest">
                                            </div>

                                            <button class="btn btn-sm btn-primary new_interest" id="add_interest"><span
                                                        class="fa fa-plus"></span></button>
                                        </div>
                                        <div id="interest">

                                        </div>

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
                                           id="birth-date" data-type="date" data-name="dob"
                                                {{--                                           data-url="{{ url('user-profile/update') }}" data-pk="{{$user->id}}"--}}
                                           data-original-title="Enter comments">{{$user->dob}}</a></td>
                                </tr>
                                <tr>
                                    <td>Birth Year</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="birth-year" data-type="text" data-name="comments"
                                           data-url="{{ url('user-profile/update') }}"

                                           data-original-title="Enter comments">{{ $user->first_name }}</a></td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           data-type="text" id="age" data-name="comments"
                                           data-url="{{ url('user-profile/update') }}"
                                           data-original-title="Enter comments">{{ $user->dob }}</a></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           data-type="select" id="gender" data-name="gender"
                                           data-original-title="Enter comments">{{ $user->gender ==1 ? 'Male' : 'Female'}}</a>
                                    </td>
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
                                           id="phone" data-type="textarea" data-name="dob"
                                           data-original-title="Enter comments">{{Auth::user()->phone}}</a></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="email" data-type="textarea" data-name="comments"
                                           data-original-title="Enter comments">{{Auth::user()->email}}</a></td>
                                </tr>
                                <tr>
                                    <td>Social Media</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="social-media" data-type="textarea" data-name="social_media"
                                           data-original-title="Enter comments">{{ Auth::user()->social_media }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><a href="#"
                                           class="myeditable editable editable-pre-wrapped editable-click editable-empty"
                                           id="address" data-type="textarea" data-name="address"
                                           data-original-title="Enter comments">{{ $user->address }}</a></td>
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
                            <td>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <input type="text" class="form-control small" style="border-bottom: #0000cc dashed thin;
                                        border-top:none; border-right:none;border-left:none; background: inherit"
                                               id="new_employment">
                                    </div>

                                    <button class="btn btn-sm btn-primary new_employment" id="add_employment"><span
                                                class="fa fa-plus"></span></button>
                                </div>
                                <div id="employment">

                                </div>

                            </td>
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

@section('scripts')
    <script src="{{ asset('assets/js/ajax-functions.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        {{--$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });--}}
        $(document).ready(function () {

            var csrfToken = '{{csrf_token()}}';

            //toggle `popup` / `inline` mode
            $.fn.editable.defaults.mode = 'popup';

            $('#username').editable();

            //make username editable
            $('#ambition').editable();

            $('#hoby').editable({
                type: 'select',
                title: 'Select status',
                placement: 'right',
                value: 2,
                source: [
                    {value: 1, text: 'status 1'},
                    {value: 2, text: 'status 2'},

                ]

            });

            $('#achievements').editable();


            $('#Educational-Goals').editable();


            $('#birth-date').editable({

                url: 'http://' + window.location.host +'/ambition/public/' + '/user-profile/update',
                pk: 1,
                success: function (response, newValue) {
                    if (response.status == 'error') return response.msg; //msg will be shown in editable form
//                    userModel.set('username', newValue);
                }

            });

            $('#birth-year').editable();

            $('#age').editable();

            $('#gender').editable({
                type: 'select',
                title: 'Select status',
                placement: 'right',
                source: [
//                    {value: null, text: '0'},
                    {value: 1, text: 'Male'},
                    {value: 0, text: 'Female'},
                ],
                url: 'http://' + window.location.host +'/ambition/public/' + '/user-profile/update',
                pk: 1,

            });

            $('#membership').editable();

            $('#professional-skills').editable();

            $('#languages').editable({
                type: 'select',
                title: 'Select status',
                placement: 'right',
                value: 1,
                source: [
                    {value: 1, text: 'Sinhala'},
                    {value: 2, text: 'Tamil'},
                    {value: 2, text: 'English'},


                ]

            });

            $('#schools').editable();

            $('#lived-places').editable();

            $('#phone').editable({
                url: 'http://' + window.location.host +'/ambition/public/' + '/user-profile/update',
                pk: 1,
                success: function (response, newValue) {
                    if (response.status == 'error') return response.msg; //msg will be shown in editable form
//                    userModel.set('username', newValue);
                }
            });

            $('#email').editable();

            $('#social-media').editable({
                url: 'http://' + window.location.host +'/ambition/public/' + '/user-profile/update',
                pk: 1,
                success: function (response, newValue) {
                    if (response.status == 'error') return response.msg; //msg will be shown in editable form
//                    userModel.set('username', newValue);
                }

            });

            $('#address').editable({
                url: 'http://' + window.location.host +'/ambition/public/' + '/user-profile/update',
                pk: 1,
                success: function (response, newValue) {
                    if (response.status == 'error') return response.msg; //msg will be shown in editable form
//                    userModel.set('username', newValue);
                }
            });

            $('#degree').editable();

            $('#certification').editable();

//            $('#employment').editable();

            /**
             * Employment Details
             */
            var employment_url = 'http://' + window.location.host +'/ambition/public/' + '/user/employment';
            superFunction(employment_url, 'employment', 'employment', 'employment', 'new_employment');

            var interests_url = 'http://' + window.location.host +'/ambition/public/' + '/user/interests';
            superFunction(interests_url, 'interest', 'interest', 'interest', 'new_interest');
/*
Membership Details
 */
            var memebership_url = 'http://' + window.location.host +'/ambition/public/' + '/user/memberships';
            superFunction(memebership_url, 'membership', 'membership', 'membership', 'new_membership');


            $('#internship').editable();

        });
    </script>
@stop
