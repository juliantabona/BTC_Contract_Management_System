@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/plugins/dropify/dist/css/dropify.min.css') }}">
    <style>
        
            .process_notice {
                color: #ffab00;
                font-size: 25px;
                position: absolute;
                top: -13px;
                right: 15px;
            }
        
            .process_notice > a{
                position: absolute;
                font-size: 14px;
                top: 8px;
                right: 0;
            }
        
            .process_notice > i {
                top: 0;
                right: 68px;
                position: absolute;
                animation: beat 0.5s infinite alternate;
            }
        
        </style>
@endsection

@section('content')

<div class="row">
        <a href="/jobcards" class="btn btn-primary mt-3 ml-2 mb-2">
            <i class="icon-arrow-left icons"></i>
            Go Back
        </a>
        <a href="/jobcards/1/viewers" class="btn btn-inverse-light mt-3 ml-2 mb-2">
            <i class="icon-eye icons"></i>
            6 viewers
        </a>
    
        <div class="col-lg-12 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 col-md-8 col-lg-8 grid-margin stretch-card">
                    <div class="card card-hoverable">
                        <div class="card-body p-3 pt-4">
                            <div class="row">
                                <div class="col-12">
                                                                                                                        <div class="badge badge-warning">7 days until deadline</div>
                                                                                                                <span class="process_notice">
                                        <i class="icon-exclamation icons" style="
        right: 100px;
    "></i>
                                        <a href="#" class="text-warning" style="
    width: 90px;
    color: #f59603 !important;
    ">Request Help</a>
                                    </span>
                                                                            <nav aria-label="breadcrumb" role="navigation">
                                            <ol class="breadcrumb breadcrumb-custom pt-2">
                                                                                                            <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs active" data-target="#exampleModal-1" data-original-title="Requires admin to authorize">
                                                            <span>Authorised</span>
                                                            <input type="hidden" class="process_step_id" value="1">
                                                            <input type="hidden" class="plugin" value="[]">
                                                        </li>
                                                                                                            <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs active" data-target="#exampleModal-2" data-original-title="The job deposit has been paid">
                                                            <span>Assigned</span>
                                                            <input type="hidden" class="process_step_id" value="2">
                                                            <input type="hidden" class="plugin" value="[{&quot;id&quot;:&quot;p_s_12312123&quot;,&quot;tag&quot;:&quot;alert&quot;,&quot;type&quot;:&quot;info&quot;,&quot;icon&quot;:&quot;icon-info&quot;,&quot;message&quot;:&quot;Answer all questions&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:false},{&quot;id&quot;:&quot;p_s_123123096&quot;,&quot;tag&quot;:&quot;input&quot;,&quot;type&quot;:&quot;text&quot;,&quot;label&quot;:&quot;Deposit Paid&quot;,&quot;placeholder&quot;:&quot;Please enter deposit amount paid&quot;,&quot;optional&quot;:false,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123139&quot;,&quot;tag&quot;:&quot;select&quot;,&quot;label&quot;:&quot;Select Payment Method&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;options&quot;:[{&quot;id&quot;:&quot;1&quot;,&quot;label&quot;:&quot;Cash&quot;},{&quot;id&quot;:&quot;2&quot;,&quot;label&quot;:&quot;Cheque&quot;},{&quot;id&quot;:&quot;3&quot;,&quot;label&quot;:&quot;Bank Transfer&quot;}],&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123145&quot;,&quot;tag&quot;:&quot;textarea&quot;,&quot;label&quot;:&quot;Comments (Optional)&quot;,&quot;placeholder&quot;:&quot;Additional comments&quot;,&quot;optional&quot;:true,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123423&quot;,&quot;tag&quot;:&quot;date&quot;,&quot;label&quot;:&quot;Deposit Date&quot;,&quot;placeholder&quot;:&quot;Enter deposit date&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123231&quot;,&quot;tag&quot;:&quot;attach&quot;,&quot;label&quot;:&quot;Attach deposit slip&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}}]">
                                                        </li>
                                                                                                            <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs active" data-target="#exampleModal-3" data-original-title="The job was started by selected contractor">
                                                            <span>Reviewed</span>
                                                            <input type="hidden" class="process_step_id" value="3">
                                                            <input type="hidden" class="plugin" value="[{&quot;id&quot;:&quot;p_s_12312456&quot;,&quot;tag&quot;:&quot;alert&quot;,&quot;type&quot;:&quot;info&quot;,&quot;icon&quot;:&quot;icon-info&quot;,&quot;message&quot;:&quot;Complete the information below to verify that the job was stated&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:false},{&quot;id&quot;:&quot;p_s_123123423&quot;,&quot;tag&quot;:&quot;date&quot;,&quot;label&quot;:&quot;Start Date&quot;,&quot;placeholder&quot;:&quot;Enter the date the job was started&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123145&quot;,&quot;tag&quot;:&quot;textarea&quot;,&quot;label&quot;:&quot;Additional Notes (Optional)&quot;,&quot;placeholder&quot;:&quot;Additional comments...&quot;,&quot;optional&quot;:true,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}}]">
                                                        </li>
                                                                                                            <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs" data-target="#exampleModal-4" data-original-title="The work done by contractor has been inspected and approved">
                                                            <span>Inspected</span>
                                                            <input type="hidden" class="process_step_id" value="4">
                                                            <input type="hidden" class="plugin" value="[{&quot;id&quot;:&quot;p_s_12312678&quot;,&quot;tag&quot;:&quot;alert&quot;,&quot;type&quot;:&quot;info&quot;,&quot;icon&quot;:&quot;icon-info&quot;,&quot;message&quot;:&quot;Complete the information below to verify that the job was completed&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:false},{&quot;id&quot;:&quot;p_s_123123096&quot;,&quot;tag&quot;:&quot;input&quot;,&quot;type&quot;:&quot;text&quot;,&quot;label&quot;:&quot;Inspector Name&quot;,&quot;placeholder&quot;:&quot;Enter inspector full name&quot;,&quot;optional&quot;:false,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123139&quot;,&quot;tag&quot;:&quot;select&quot;,&quot;label&quot;:&quot;Quality of work&quot;,&quot;full_width&quot;:true,&quot;options&quot;:[{&quot;id&quot;:&quot;1&quot;,&quot;label&quot;:&quot;Bad&quot;},{&quot;id&quot;:&quot;2&quot;,&quot;label&quot;:&quot;Good&quot;},{&quot;id&quot;:&quot;3&quot;,&quot;label&quot;:&quot;Excellent&quot;}],&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123145&quot;,&quot;tag&quot;:&quot;textarea&quot;,&quot;label&quot;:&quot;Comments (Optional)&quot;,&quot;placeholder&quot;:&quot;Additional comments&quot;,&quot;optional&quot;:true,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123423&quot;,&quot;tag&quot;:&quot;date&quot;,&quot;label&quot;:&quot;Inspection Date&quot;,&quot;placeholder&quot;:&quot;Enter deposit date&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123231&quot;,&quot;tag&quot;:&quot;attach&quot;,&quot;label&quot;:&quot;Attach inspection sheet&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}}]">
                                                        </li>
                                                                                                            <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs" data-target="#exampleModal-5" data-original-title="This job is completed">
                                                            <span>Completed</span>
                                                            <input type="hidden" class="process_step_id" value="5">
                                                            <input type="hidden" class="plugin" value="[{&quot;id&quot;:&quot;p_s_1231789&quot;,&quot;tag&quot;:&quot;alert&quot;,&quot;type&quot;:&quot;info&quot;,&quot;icon&quot;:&quot;icon-info&quot;,&quot;message&quot;:&quot;Complete the information below to verify that this Jobcard is closed&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:false},{&quot;id&quot;:&quot;p_s_123123423&quot;,&quot;tag&quot;:&quot;date&quot;,&quot;label&quot;:&quot;Completion Date&quot;,&quot;placeholder&quot;:&quot;Enter date this job was completed&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123139&quot;,&quot;tag&quot;:&quot;select&quot;,&quot;label&quot;:&quot;Client review&quot;,&quot;full_width&quot;:true,&quot;options&quot;:[{&quot;id&quot;:&quot;1&quot;,&quot;label&quot;:&quot;Satisfied&quot;},{&quot;id&quot;:&quot;2&quot;,&quot;label&quot;:&quot;Unsatisfied&quot;},{&quot;id&quot;:&quot;3&quot;,&quot;label&quot;:&quot;Excellent&quot;}],&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123145&quot;,&quot;tag&quot;:&quot;textarea&quot;,&quot;label&quot;:&quot;Comments (Optional)&quot;,&quot;placeholder&quot;:&quot;Additional comments&quot;,&quot;optional&quot;:true,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123231&quot;,&quot;tag&quot;:&quot;attach&quot;,&quot;label&quot;:&quot;Attach completion contract&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}}]">
                                                        </li>
                                                                                                        
                                                    <input type="hidden" id="processInstructions" value="[{&quot;id&quot;:38,&quot;process_form&quot;:[{&quot;id&quot;:&quot;1&quot;,&quot;name&quot;:&quot;Open&quot;,&quot;description&quot;:&quot;Requires admin to authorize&quot;,&quot;order&quot;:1,&quot;active&quot;:true,&quot;updated&quot;:false,&quot;plugin&quot;:[]},{&quot;id&quot;:&quot;2&quot;,&quot;name&quot;:&quot;Deposit Paid&quot;,&quot;description&quot;:&quot;The job deposit has been paid&quot;,&quot;order&quot;:2,&quot;active&quot;:false,&quot;updated&quot;:false,&quot;plugin&quot;:[{&quot;id&quot;:&quot;p_s_12312123&quot;,&quot;tag&quot;:&quot;alert&quot;,&quot;type&quot;:&quot;info&quot;,&quot;icon&quot;:&quot;icon-info&quot;,&quot;message&quot;:&quot;Answer all questions&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:false},{&quot;id&quot;:&quot;p_s_123123096&quot;,&quot;tag&quot;:&quot;input&quot;,&quot;type&quot;:&quot;text&quot;,&quot;label&quot;:&quot;Deposit Paid&quot;,&quot;placeholder&quot;:&quot;Please enter deposit amount paid&quot;,&quot;optional&quot;:false,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123139&quot;,&quot;tag&quot;:&quot;select&quot;,&quot;label&quot;:&quot;Select Payment Method&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;options&quot;:[{&quot;id&quot;:&quot;1&quot;,&quot;label&quot;:&quot;Cash&quot;},{&quot;id&quot;:&quot;2&quot;,&quot;label&quot;:&quot;Cheque&quot;},{&quot;id&quot;:&quot;3&quot;,&quot;label&quot;:&quot;Bank Transfer&quot;}],&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123145&quot;,&quot;tag&quot;:&quot;textarea&quot;,&quot;label&quot;:&quot;Comments (Optional)&quot;,&quot;placeholder&quot;:&quot;Additional comments&quot;,&quot;optional&quot;:true,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123423&quot;,&quot;tag&quot;:&quot;date&quot;,&quot;label&quot;:&quot;Deposit Date&quot;,&quot;placeholder&quot;:&quot;Enter deposit date&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123231&quot;,&quot;tag&quot;:&quot;attach&quot;,&quot;label&quot;:&quot;Attach deposit slip&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}}]},{&quot;id&quot;:&quot;3&quot;,&quot;name&quot;:&quot;Job Started&quot;,&quot;description&quot;:&quot;The job was started by selected contractor&quot;,&quot;order&quot;:3,&quot;active&quot;:false,&quot;updated&quot;:false,&quot;plugin&quot;:[{&quot;id&quot;:&quot;p_s_12312456&quot;,&quot;tag&quot;:&quot;alert&quot;,&quot;type&quot;:&quot;info&quot;,&quot;icon&quot;:&quot;icon-info&quot;,&quot;message&quot;:&quot;Complete the information below to verify that the job was stated&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:false},{&quot;id&quot;:&quot;p_s_123123423&quot;,&quot;tag&quot;:&quot;date&quot;,&quot;label&quot;:&quot;Start Date&quot;,&quot;placeholder&quot;:&quot;Enter the date the job was started&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123145&quot;,&quot;tag&quot;:&quot;textarea&quot;,&quot;label&quot;:&quot;Additional Notes (Optional)&quot;,&quot;placeholder&quot;:&quot;Additional comments...&quot;,&quot;optional&quot;:true,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}}]},{&quot;id&quot;:&quot;4&quot;,&quot;name&quot;:&quot;Inspected&quot;,&quot;description&quot;:&quot;The work done by contractor has been inspected and approved&quot;,&quot;order&quot;:4,&quot;active&quot;:false,&quot;updated&quot;:false,&quot;plugin&quot;:[{&quot;id&quot;:&quot;p_s_12312678&quot;,&quot;tag&quot;:&quot;alert&quot;,&quot;type&quot;:&quot;info&quot;,&quot;icon&quot;:&quot;icon-info&quot;,&quot;message&quot;:&quot;Complete the information below to verify that the job was completed&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:false},{&quot;id&quot;:&quot;p_s_123123096&quot;,&quot;tag&quot;:&quot;input&quot;,&quot;type&quot;:&quot;text&quot;,&quot;label&quot;:&quot;Inspector Name&quot;,&quot;placeholder&quot;:&quot;Enter inspector full name&quot;,&quot;optional&quot;:false,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123139&quot;,&quot;tag&quot;:&quot;select&quot;,&quot;label&quot;:&quot;Quality of work&quot;,&quot;full_width&quot;:true,&quot;options&quot;:[{&quot;id&quot;:&quot;1&quot;,&quot;label&quot;:&quot;Bad&quot;},{&quot;id&quot;:&quot;2&quot;,&quot;label&quot;:&quot;Good&quot;},{&quot;id&quot;:&quot;3&quot;,&quot;label&quot;:&quot;Excellent&quot;}],&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123145&quot;,&quot;tag&quot;:&quot;textarea&quot;,&quot;label&quot;:&quot;Comments (Optional)&quot;,&quot;placeholder&quot;:&quot;Additional comments&quot;,&quot;optional&quot;:true,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123423&quot;,&quot;tag&quot;:&quot;date&quot;,&quot;label&quot;:&quot;Inspection Date&quot;,&quot;placeholder&quot;:&quot;Enter deposit date&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123231&quot;,&quot;tag&quot;:&quot;attach&quot;,&quot;label&quot;:&quot;Attach inspection sheet&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}}]},{&quot;id&quot;:&quot;5&quot;,&quot;name&quot;:&quot;Closed&quot;,&quot;description&quot;:&quot;This job is completed&quot;,&quot;order&quot;:5,&quot;active&quot;:false,&quot;updated&quot;:false,&quot;plugin&quot;:[{&quot;id&quot;:&quot;p_s_1231789&quot;,&quot;tag&quot;:&quot;alert&quot;,&quot;type&quot;:&quot;info&quot;,&quot;icon&quot;:&quot;icon-info&quot;,&quot;message&quot;:&quot;Complete the information below to verify that this Jobcard is closed&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:false},{&quot;id&quot;:&quot;p_s_123123423&quot;,&quot;tag&quot;:&quot;date&quot;,&quot;label&quot;:&quot;Completion Date&quot;,&quot;placeholder&quot;:&quot;Enter date this job was completed&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123139&quot;,&quot;tag&quot;:&quot;select&quot;,&quot;label&quot;:&quot;Client review&quot;,&quot;full_width&quot;:true,&quot;options&quot;:[{&quot;id&quot;:&quot;1&quot;,&quot;label&quot;:&quot;Satisfied&quot;},{&quot;id&quot;:&quot;2&quot;,&quot;label&quot;:&quot;Unsatisfied&quot;},{&quot;id&quot;:&quot;3&quot;,&quot;label&quot;:&quot;Excellent&quot;}],&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123145&quot;,&quot;tag&quot;:&quot;textarea&quot;,&quot;label&quot;:&quot;Comments (Optional)&quot;,&quot;placeholder&quot;:&quot;Additional comments&quot;,&quot;optional&quot;:true,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}},{&quot;id&quot;:&quot;p_s_123123231&quot;,&quot;tag&quot;:&quot;attach&quot;,&quot;label&quot;:&quot;Attach completion contract&quot;,&quot;full_width&quot;:true,&quot;fillable&quot;:true,&quot;update&quot;:{&quot;done&quot;:false,&quot;response&quot;:&quot;&quot;}}]}],&quot;processable_id&quot;:52,&quot;processable_type&quot;:&quot;jobcard&quot;,&quot;created_at&quot;:&quot;2018-07-05 16:17:49&quot;,&quot;updated_at&quot;:&quot;2018-07-05 16:17:49&quot;}]">
                                            </ol>
                                                                                            <div class="progress" data-toggle="tooltip" data-placement="top" title="" data-original-title="60% completed">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                                                    </nav>
                                                                    </div>
                                <div class="col-12">
                                    <h3 class="card-title mb-3 mt-4 border-bottom pb-3">Contract #33</h3>
                                    <b>Description: </b>
                                    <p class="mt-2">This application form is for customer looking to use our home internet Package 1. Ensure that all fields are completed along with all attachments required.</p>
                                    <span class="lower-font mr-5">
                                        <b>Start Date: </b>06 Jul 2018</span>
                                    <span class="lower-font">
                                        <b>End Date: </b>19 Jul 2018</span>
                                    <br>
                                    <span data-toggle="tooltip" data-placement="top" title="" class="lower-font mr-4" data-original-title="All heating and cooling devices/utilities">
                                          <b>Catergory: </b>Internet</span>
                                    
                                    
                                    
                                    <span class="lower-font">
                                                <b>Assigned: </b><a href="#">Julian Tabona</a> <a href="#"> - viewed(1)</a>
                                            </span><div class="row">
                                        
                                        <div class="col-6 offset-6">
                                            
                                        </div>
                                    </div>
                                    <span class="lower-font mt-3 d-block">
                                        <b>Priority: </b>
                                                                                    <div data-toggle="tooltip" data-placement="top" title="" class="badge badge-success" style="background:#0057ff;" data-original-title="Required but not urgent">Low</div>
                                                                            </span>
                                    <div>
                                                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mt-0">
                                        <a class="btn btn-primary mr-2 float-right" href="#" target="_blank">
                                            Submit For Approval
                                        </a>
                                        <a class="btn btn-primary mr-2 float-right" href="http://127.0.0.1:8000/jobcards/52/download/pdf" target="_blank">
                                            <i class="icon-cloud-download icons"></i>
                                            Download Contract
                                        </a>
                                        <a href="#" class="btn btn-primary mr-2 float-right" data-toggle="modal" data-target="#exampleModal-3">
                                            Send Contract
                                            <i class="icon-paper-plane icons"></i>
                                        </a>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 grid-margin stretch-card">
                    <div class="card card-hoverable">
                        <div class="card-body p-3 pt-4">
                            <div class="row">
                                                                    <div class="col-12">
                                        <div class="bg-primary p-2 text-white">
                                            <i class="float-left icon-emotsmile icon-sm icons ml-3 mr-2"></i>
                                            <h6 class="card-title mb-0 ml-2 text-white">Customer Details</h6>
                                        </div>
                                        <div class="mt-3 ml-3 reference-details">
                                                                                        <span class="lower-font">
                                                <b>First Name: </b>Bame<br>
                                                <b>Last Name: </b>Mbenge<br>
                                                <b>Mobile Number: </b>+267 75902387<br>
                                                <b>Email: </b>bamembenge@gmail.com<br><br>
                                                <b>Physical Address: </b>Extension 12, Gaborone<br>
                                                <b>Postal Address: </b>563, AHH, MASA</span>
                                            
                                                <hr><div class="badge text-left w-100">Attach Omang: <a href="http://oq-bucket.s3.amazonaws.com/profile_docs/fQ4zf7xhdNZnTBZ6PoXHw051lDBy16hUz7A0wtnH.pdf" class="btn btn-primary btn-sm mr-1" target="_blank">View Attachment (1)</a></div><hr>
                                            <span class="lower-font clearfix mb-3">
                                                <a href="#" style="font-size:  12px;" class="float-right mr-1"><i class="icon-pencil"></i> Edit</a>   
                                                <a href="#" style="font-size:  12px;" class="float-right mr-1"><i class="icon-eye"></i> View</a>
                                            </span> 
                                        <hr></div>
                                    </div>
    
                                                                            
                                                                        
                                                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-12 col-lg-12 grid-margin stretch-card">
                    <div class="card card-hoverable">
                        <div class="card-body p-3 pt-4">
                            <div class="row">
                                                                    <div class="col-12 clearfix">
                                        <h4 class="card-title mb-3 mt-4 ml-2">Contract Template</h4>
                                        <div class="table-responsive table-hover">
                                            <div id="document_structure_box" class="mb-5">
                                                <textarea id = "document_structure_file" name = "document_structure_file" class="d-none">

                                                        <p></p><p class="MsoNormal" align="center" style="margin-bottom:0cm;margin-bottom:.0001pt;
                                                        text-align:center;background:white"><b><span lang="EN-US" style="font-size:10.5pt;
                                                        font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;color:#626262;border:none windowtext 1.0pt;
                                                        mso-border-alt:none windowtext 0cm;padding:0cm;mso-fareast-language:EN-GB">Service
                                                        Agreement Contract</span></b><span style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;mso-ansi-language:EN-GB;mso-fareast-language:EN-GB"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">&nbsp;</span><span style="font-size:
                                                        10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;color:#626262;mso-ansi-language:EN-GB;
                                                        mso-fareast-language:EN-GB"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">This is a service agreement between Bame Mbenge (service receiver) and&nbsp;Botswana Telecommunications Corporation (service provider).</span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><b><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">Duration</span></b><span style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;color:#626262;
                                                        mso-ansi-language:EN-GB;mso-fareast-language:EN-GB"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">This service agreement shall become
                                                        effective upon signature by the authorized officials from the (list partners)
                                                        and will remain in effect until modified or terminated by any one of the
                                                        partners by mutual consent. In the absence of mutual agreement by the
                                                        authorized officials from (list partners) this service agreement shall end on (end date of
                                                        partnership).</span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">________________________&nbsp;Date:</span><span style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;color:#626262;
                                                        mso-ansi-language:EN-GB;mso-fareast-language:EN-GB"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">(Partner signature)</span><span style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;color:#626262;
                                                        mso-ansi-language:EN-GB;mso-fareast-language:EN-GB"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">(Partner name, organization, position)</span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">________________________&nbsp;Date:</span><span style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;color:#626262;
                                                        mso-ansi-language:EN-GB;mso-fareast-language:EN-GB"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">(Partner signature)</span><span style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;color:#626262;
                                                        mso-ansi-language:EN-GB;mso-fareast-language:EN-GB"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">(Partner name, organization, position)</span><span style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;color:#626262;
                                                        mso-ansi-language:EN-GB;mso-fareast-language:EN-GB"><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;background:
                                                        white"><span lang="EN-US" style="font-size:10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;
                                                        color:#626262;border:none windowtext 1.0pt;mso-border-alt:none windowtext 0cm;
                                                        padding:0cm;mso-fareast-language:EN-GB">&nbsp;</span><span style="font-size:
                                                        10.5pt;font-family:&quot;Lato&quot;,&quot;sans-serif&quot;;color:#626262;mso-ansi-language:EN-GB;
                                                        mso-fareast-language:EN-GB"><o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-US"><o:p>&nbsp;</o:p></span></p><p><br data-mce-bogus="1"></p><p></p>
                                                        
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-12 col-md-12 col-lg-12 grid-margin stretch-card">
                    <div class="card card-hoverable">
                        <div class="card-body">
                                                            <h4 class="card-title text-center">Contract History</h4>
                                <div>
                                    <p class="mt-3 p-2 text-center">Today</p>
                                    <div class="timeline">
                                                                                    
                                            <div class="timeline-wrapper timeline-wrapper-primary">
        <div class="timeline-badge"></div>
        <div class="timeline-panel">
            <div class="timeline-body">
                <p>      
                    <a href="http://127.0.0.1:8000/contractors/70">Merchant Capital</a>
    selected as contractor for 
    <a href="http://127.0.0.1:8000/jobcards/52" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aircon Replacement">Jobcard #52</a>
    
    
    
    by
    <a href="http://127.0.0.1:8000/profiles/1">
    Julian
    Tabona
    </a>
                </p>
            </div>
            <div class="timeline-footer d-flex align-items-center">
                <span class="ml-auto font-weight-bold mt-2">
                    <i class="icon-clock icons"></i> 
                    05 Jul 2018 @ 04:07
                </span>
            </div>      
        </div>
    </div>
    
    
                                                                                    
                                            <div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
        <div class="timeline-badge"></div>
        <div class="timeline-panel">
            <div class="timeline-body">
                <p>
                    <a href="http://127.0.0.1:8000/contractors/71">Aberdeen</a>
    added to list of <b>contractors</b> for 
    <a href="http://127.0.0.1:8000/jobcards/52" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aircon Replacement">Jobcard #52</a>
    
    by
    <a href="http://127.0.0.1:8000/profiles/1">
    Julian
    Tabona
    </a>
                </p>
            </div>
            <div class="timeline-footer d-flex align-items-center">
                <span class="ml-auto font-weight-bold mt-2">
                    <i class="icon-clock icons"></i> 
                    05 Jul 2018 @ 04:07
                </span>
            </div>               
        </div>
    </div>
    
                                                                                    
                                            <div class="timeline-wrapper timeline-wrapper-primary">
        <div class="timeline-badge"></div>
        <div class="timeline-panel">
            <div class="timeline-body">
                <p>      
                    <a href="http://127.0.0.1:8000/contractors/70">Merchant Capital</a>
    added to list of <b>contractors</b> for 
    <a href="http://127.0.0.1:8000/jobcards/52" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aircon Replacement">Jobcard #52</a>
    
    by
    <a href="http://127.0.0.1:8000/profiles/1">
    Julian
    Tabona
    </a>
                </p>
            </div>
            <div class="timeline-footer d-flex align-items-center">
                <span class="ml-auto font-weight-bold mt-2">
                    <i class="icon-clock icons"></i> 
                    05 Jul 2018 @ 04:07
                </span>
            </div>      
        </div>
    </div>
    
    
                                                                                    
                                            <div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
        <div class="timeline-badge"></div>
        <div class="timeline-panel">
            <div class="timeline-body">
                <p>
                    <a href="http://127.0.0.1:8000/profiles/53">
        Karabo
        Molala
    </a>
    added as <b>client contact</b>
    
    by
    <a href="http://127.0.0.1:8000/profiles/1">
    Julian
    Tabona
    </a>
                </p>
            </div>
            <div class="timeline-footer d-flex align-items-center">
                <span class="ml-auto font-weight-bold mt-2">
                    <i class="icon-clock icons"></i> 
                    05 Jul 2018 @ 04:07
                </span>
            </div>               
        </div>
    </div>
    
                                                                                    
                                            <div class="timeline-wrapper timeline-wrapper-primary">
        <div class="timeline-badge"></div>
        <div class="timeline-panel">
            <div class="timeline-body">
                <p>      
                    <a href="http://127.0.0.1:8000/profiles/52">
        David
        Mooketsi
    </a>
    added as <b>client contact</b>
    
    by
    <a href="http://127.0.0.1:8000/profiles/1">
    Julian
    Tabona
    </a>
                </p>
            </div>
            <div class="timeline-footer d-flex align-items-center">
                <span class="ml-auto font-weight-bold mt-2">
                    <i class="icon-clock icons"></i> 
                    05 Jul 2018 @ 04:07
                </span>
            </div>      
        </div>
    </div>
    
    
                                                                                    
                                            <div class="timeline-wrapper timeline-inverted timeline-wrapper-primary">
        <div class="timeline-badge"></div>
        <div class="timeline-panel">
            <div class="timeline-body">
                <p>
                    <a href="#">Metal Depots</a>
    <b>added</b> as <b>client</b> for 
    <a href="http://127.0.0.1:8000/jobcards/52" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aircon Replacement">Jobcard #52</a>
    
    by
    <a href="http://127.0.0.1:8000/profiles/1">
    Julian
    Tabona
    </a>
                </p>
            </div>
            <div class="timeline-footer d-flex align-items-center">
                <span class="ml-auto font-weight-bold mt-2">
                    <i class="icon-clock icons"></i> 
                    05 Jul 2018 @ 04:07
                </span>
            </div>               
        </div>
    </div>
    
                                                                                    
                                            <div class="timeline-wrapper timeline-wrapper-primary">
        <div class="timeline-badge"></div>
        <div class="timeline-panel">
            <div class="timeline-body">
                <p>      
                    <a href="http://127.0.0.1:8000/jobcards/52" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aircon Replacement">
        Jobcard #52
    </a> 
    <b>created</b>
    
    by
    <a href="http://127.0.0.1:8000/profiles/1">
    Julian
    Tabona
    </a>
                </p>
            </div>
            <div class="timeline-footer d-flex align-items-center">
                <span class="ml-auto font-weight-bold mt-2">
                    <i class="icon-clock icons"></i> 
                    05 Jul 2018 @ 04:07
                </span>
            </div>      
        </div>
    </div>
    
    
                                                                            </div>
                                    <p class="mt-3 p-2 text-center">Start</p>
                                </div>
                                                    </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

@endsection

@section('js') 
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=yzpugovhcr8rirn4ok2qg1vs8bbbpuvemqng6k59tgf1x4f4"></script>
    <script src="{{ asset('js/plugins/jquery-sortable/jquery-sortable.js')}}"></script> 

    <script>

        tinymce.init({
            selector: '#document_structure_file',
            height: 500,
            theme: 'modern',
            plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ],
            setup: function (ed) {
                //  When the editor has completed loading the content
                ed.on('LoadContent', function(e) {
                    //  Hide the loader
                    $('.editor-loader').hide();
                    //  Show the editor
                    $('#document_structure_file').removeClass('d-none');
                });
            },
            init_instance_callback: function (editor) {
                editor.on('Change, KeyDown, KeyUp', function (e) {
                    //  Code when the editor is being typed or changed
                });
              }
            });

    </script>

@endsection