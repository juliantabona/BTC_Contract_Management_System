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
                        <div class="card card-clickable" data-href="/jobcards/overdue">
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
                        <div class="card card-clickable" data-href="http://127.0.0.1:8000/jobcards/step/1">
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
                        <div class="card card-clickable" data-href="http://127.0.0.1:8000/jobcards/step/2">
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
                        <div class="card card-clickable" data-href="http://127.0.0.1:8000/jobcards/step/5">
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
                        <div class="card card-clickable" data-href="http://127.0.0.1:8000/jobcards/step/5">
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
                        <div class="card card-clickable" data-href="http://127.0.0.1:8000/jobcards/step/5">
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
                        <div class="card card-clickable" data-href="/contractors">
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
@endsection

@section('js')

    <!-- Custom js for this page-->
    <script src="{{ asset('js/custom/dashboard.js') }}"></script>
    <script src="{{ asset('js/custom/chart.js') }}"></script>
    <script>
        $(document).ready(function ($) {

            toggleExcessContent();

            $('.toggle-summary-cards-btn').click(function(){
                toggleExcessContent();
            });

        });

        function toggleExcessContent(){
            console.log('arranging...');
            //  Show only 8 cards on the overview summary container
            var showOnly = 8;
            //  Get the overview container
            var overviewSummary = $('.overview-summary');
            //  Get the total number of actual summary cards on the screen
            var summaryCards = $(overviewSummary).find('.summary-card');
            //  Get the number of excess cards showing
            var remainder = showOnly - summaryCards.length;
            //  Target the toggle button for hide/show excess summary cards
            var togglebtn = $('.overview-summary > .toggle-summary-cards-btn');

            
            //  If not expanded before then toggle show excess content
            if( $(overviewSummary).hasClass('hidden-content') ){
                console.log('stage 1');
                //  Show all content
                $('.overview-summary > .summary-card').slice(remainder).slideDown();                
                //  Idicate that the content is shown
                $('.overview-summary').removeClass('hidden-content');
                $(togglebtn).find('i').removeClass('icon-arrow-down-circle').addClass('icon-arrow-up-circle');
                $(togglebtn).find('span').text('Show Less');

            //If expanded before or not at all then hide only if excess content exists
            }else{
                console.log('stage 2');
                //  If we have too many cards on display than the showOnly
                if(remainder < 0){
                    //  Hide all those exceeding the limit
                    $('.overview-summary > .summary-card').slice(remainder).slideUp('slow');
                    //  If we already have the button then don't show add it again
                    //  Otherwise add it just after the last showing summary-card
                    if(!togglebtn.length){
                        $('.overview-summary').append('<div class="toggle-summary-cards-btn col-12">'+
                                '<button class="btn btn-dark d-block mr-auto ml-auto mb-3  rounded">'+
                                    '<i class="icon-arrow-down-circle icons"></i><span>Show All</span>'+
                                '</button>'+
                            '</div>');
                    }else{
                        $(togglebtn).find('i').removeClass('icon-arrow-up-circle').addClass('icon-arrow-down-circle'); 
                        $(togglebtn).find('span').text('Show All');
                    }
                    //  Idicate that the content is hidden
                    $('.overview-summary').addClass('hidden-content');
                }
            }
        }
        
    </script>
    <!-- End custom js for this page-->

@endsection