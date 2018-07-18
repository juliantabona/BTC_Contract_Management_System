@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="row overview-summary">
                <div class="row overview-summary">
                    <div class="col-md-12 col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body p-3">
                                <h6 class="card-title mb-0">Overview</h6>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card card-clickable" data-href="{{ route('request.index') }}">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-social-dropbox icons icon-lg"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Requests</p>
                                        <h6>215</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card card-clickable" data-href="{{ route('request.authorized') }}">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-lg icon-layers icons"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Authorized</p>
                                        <h6>187</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card card-clickable" data-href="{{ route('request.reviewed') }}">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-lg icon-eye icons"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Currently Reviewed</p>
                                        <h6>126</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card card-clickable" data-href="{{ route('request.inspection') }}">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-lg icon-eyeglass icons"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Inspection</p>
                                        <h6>107</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card card-clickable" data-href="{{ route('request.waiting_signoff') }}">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-lg icon-note icons"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Waiting Signoff</p>
                                        <h6>88</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card card-clickable" data-href="{{ route('request.completed') }}">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-lg icon-like icons"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Completed</p>
                                        <h6>301</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card card-clickable" data-href="/jobcards/overdue">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-exclamation icons icon-lg"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Overdue</p>
                                        <h6>24</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card">
                        <div class="card card-clickable" data-href="/clients">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-lg icon-emotsmile icons"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Clients</p>
                                        <h6>984</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card" style="">
                        <div class="card card-clickable" data-href="http://127.0.0.1:8080/profiles">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-lg icon-user icons"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Staff</p>
                                        <h6>1027</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-card col-md-6 col-lg-3 grid-margin stretch-card" style="">
                        <div class="card card-clickable" data-href="/contractors">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-lg icon-notebook icons"></i>
                                    <div class="ml-3">
                                        <p class="mb-0">Contacts</p>
                                        <h6>5734</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="toggle-summary-cards-btn col-12">
                        <button class="btn btn-dark d-block mr-auto ml-auto mb-3  rounded">
                            <i class="icons icon-arrow-down-circle"></i>
                            <span>Show More</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-lg-8 d-flex flex-column">
                <div class="row flex-grow">
                    <div class="col-12 col-md-4 col-lg-12 grid-margin stretch-card">
                        <div class="card card-hoverable">
                            <div class="card-body">
                                <h6 class="card-title float-left mb-0 ml-2">Recent Requests</h6>
                                <div class="table-responsive table-hover">
                                    <table class="table mt-3 border-top">
                                        <thead>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Category</th>
                                                <th>Contact</th>
                                                <th>Submitted</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                            <tr class="clickable-row" data-href="#">
                                                <td data-toggle="tooltip" data-placement="top" title="" data-original-title="This is a sample job card with details describing work to be done by a particular contractor for a specific clientile">kgosi Mapila</td>
                                                <td>ISP</td>
                                                <td>+267 75990021</td>                                                 
                                                <td class="d-none d-md-table-cell">03 Jul 2018</td>  
                                            </tr><tr class="clickable-row" data-href="#">
                                                <td data-toggle="tooltip" data-placement="top" title="" data-original-title="This is a sample job card with details describing work to be done by a particular contractor for a specific clientile">Bame Mpenge</td>
                                                <td>Internet</td>
                                                <td>+267 74892320</td>                                                
                                                <td class="d-none d-md-table-cell">02 Jul 2018</td>  
                                            </tr><tr class="clickable-row" data-href="#">
                                                <td data-toggle="tooltip" data-placement="top" title="" data-original-title="This is a sample job card with details describing work to be done by a particular contractor for a specific clientile">Gaone Kgolo</td>
                                                <td>Internet</td>
                                                <td>+267 76879098</td>                                             
                                                <td class="d-none d-md-table-cell">02 Jul 2018</td>  
                                            </tr><tr class="clickable-row" data-href="#">
                                                <td data-toggle="tooltip" data-placement="top" title="" data-original-title="This is a sample job card with details describing work to be done by a particular contractor for a specific clientile">Ronald Bay</td>
                                                <td>ISP</td>
                                                <td>+267 72456732</td>                                                 
                                                <td class="d-none d-md-table-cell">02 Jul 2018</td>  
                                            </tr><tr class="clickable-row" data-href="#">
                                                <td data-toggle="tooltip" data-placement="top" title="" data-original-title="This is a sample job card with details describing work to be done by a particular contractor for a specific clientile">Karabo Monna</td>
                                                <td>Internet</td>
                                                <td>+267 75990021</td>                                                 
                                                <td class="d-none d-md-table-cell">01 Jul 2018</td>  
                                            </tr>
                                                                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                                <p class="mb-3 ml-3 mb-sm-0"><strong>5</strong>  results found</p>
                                <nav>
                                    
                                </nav>
                            </div>
                            <div class="d-flex float-right mt-2">
                                <a href="http://127.0.0.1:8000/jobcards" class="btn btn-primary btn-sm">View All
                                    <i class="icon-arrow-right-circle icons ml-1"></i>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
                <div class="card card-hoverable">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="card-title">Recent Activity</h6>
                        </div>
                        <p class="card-description">Activity by staff members</p>
                                                                    
                        <div class="recent-activities-box list d-flex align-items-center border-bottom py-3">
                            <img class="img-sm rounded-circle" src="/images/profile_placeholder.png" alt="">
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0"> Request  from <a href="http://127.0.0.1:8000/profiles/1">Karabo Monei
                                </a> for <a href="http://127.0.0.1:8000/profiles/1">Home Internet Package
                                </a><b>accepted</b>  by <a href="http://127.0.0.1:8000/jobcards/49" data-toggle="tooltip" data-placement="top" title="" data-original-title="____">Kealeboga Mooketsi</a> 
                                from </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <span class="text-muted ml-auto">05 Jul 2018 @ 06:07</span>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                                                                                        
                        <div class="recent-activities-box list d-flex align-items-center border-bottom py-3">
                            <img class="img-sm rounded-circle" src="/images/profile_placeholder.png" alt="">
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0">
                                    
                            <a href="http://127.0.0.1:8000/profiles/1">Contract #304</a><b> marked </b> as <b>overdue</b>
                                by <a href="http://127.0.0.1:8000/jobcards/50" data-toggle="tooltip" data-placement="top" title="" data-original-title="____">Karabo Mabelo</a></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <span class="text-muted ml-auto">05 Jul 2018 @ 07:07</span>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                                                                                        
                        <div class="recent-activities-box list d-flex align-items-center border-bottom py-3">
                            <img class="img-sm rounded-circle" src="/images/profile_placeholder.png" alt="">
                            <div class="wrapper w-100 ml-3">
                                <p class="mb-0"><a href="#">Corporate Internet</a> 
                                    contract template created by <a href="#">Lesedi Tabona</a> 
                                    waiting approval
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="mdi mdi-clock text-muted mr-1"></i>
                                        <span class="text-muted ml-auto">05 Jul 2018 @ 08:07</span>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="d-flex float-right mt-2">
                            <button class="btn btn-primary btn-sm">View All
                                <i class="icon-arrow-right-circle icons ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
                <div class="col-4 grid-margin">
                    <div class="card card-hoverable">
                        <div class="card-body"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <h6 class="card-title">Contract Status</h6>
                            <p class="card-description">Statistics of job created from all locations and their statuses.</p>
                            <canvas id="barChart" width="277" height="282" style="display: block; width: 277px; height: 282px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-4 grid-margin">
                    <div class="card card-hoverable">
                        <div class="card-body"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <h6 class="card-title">Completed Contracts</h6>
                            <p class="card-description">Statistics of jobs closed by departments in their respective locations.</p>
                            <canvas id="barChart2" width="277" height="282" style="display: block; width: 277px; height: 282px;"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-4 grid-margin">
                    <div class="card card-hoverable">
                        <div class="card-body"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                            <h6 class="card-title">Overdue Contracts</h6>
                            <p class="card-description">Products that are creating the most revenue and their sales throughout the year and the variation in
                                behavior of sales.</p>
                            <canvas id="barChart3" width="277" height="282" style="display: block; width: 277px; height: 282px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('js')

    <!-- Custom js for this page-->
    <script src="{{ asset('js/custom/dashboard.js') }}"></script>
    <script src="{{ asset('js/plugins/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('js/custom/chart.js') }}"></script>

@endsection