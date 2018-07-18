@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/plugins/dropify/dist/css/dropify.min.css') }}">
@endsection

@section('content')
<div class="row">
        <div class="col-lg-12 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 col-md-12 col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body pt-2 pb-2">
                            <a href="#" class="btn btn-primary btn-sm float-right mt-0 ml-2">
                                + Add Request
                            </a>
                            <div class="dropdown ml-auto border-0 float-right mt-">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter by Category</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="top-start" style="position: absolute; transform: translate3d(0px, 5px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="#">Service</a>
                                    <a class="dropdown-item" href="#">MOU</a>
                                    <a class="dropdown-item" href="#">Non disclosure</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-lg-12 d-flex flex-column">
                <div class="row flex-grow">
                    <div class="col-12 col-md-12 col-lg-12 grid-margin stretch-card">
                        <div class="card card-hoverable">
                            <div class="card-body">
                                <i class="float-left icon-like icon-md icons ml-3"></i>
                                                                <h5 class="card-title float-left mt-2 mb-0 ml-2">Completed</h5>
                                    <div class="d-flex table-responsive">
                                        <div class="btn-group ml-auto mr-2 border-0">
                                        <input type="text" class="form-control" placeholder="Search Here">
                                        <button class="btn btn-sm btn-primary"><i class="icon-magnifier icons"></i> Search</button>
                                        </div>
                                        <div class="btn-group">
                                        <button type="button" class="btn btn-light"><i class="mdi mdi-printer"></i></button>
                                        <button type="button" class="btn btn-light"><i class="mdi mdi-dots-vertical"></i></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-hover">
                                        <table class="table mt-3 border-top">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20%">Customer</th>
                                                    <th style="width: 15%">Category</th>
                                                    <th style="width: 15%">Submission</th>
                                                    
                                                    <th style="width: 14%">Due</th>
                                                    <th class="d-sm-none d-md-table-cell">Priority</th>
                                                    <th style="text-align: center;width: 20%;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                <tr class="clickable-row" data-href="#">
                                                        <td data-toggle="tooltip" data-placement="top" title="" data-original-title="Replacement of 4 air-conditioners in Bontleng clinic">Bame Mpenge</td>
                                                        <td>Internet</td>
                                                        <td>24 Jul 2018</td>
                                                        
                                                        
                                                              
                                                        <td class="d-none d-md-table-cell">
                                                                                                                                                                                7 days
                                                                                                                </td>                                             
                                                        <td class="d-none d-md-table-cell">Low</td>                                           
                                                        <td style="text-align: center;">
                                                              
                                                                                                                                                                                            <i class="icon-eye mr-3"></i><i class="icon-cloud-download"></i>
                                                                 
                                                             
                                                        </td>
                                                    </tr><tr class="clickable-row" data-href="#">
                                                        <td data-toggle="tooltip" data-placement="top" title="" data-original-title="Replacement of 4 air-conditioners in Bontleng clinic">kgosi Mapila</td>
                                                        <td>ISP</td>
                                                        <td>24 Jul 2018</td>
                                                        
                                                        
                                                              
                                                        <td class="d-none d-md-table-cell">
                                                                                                                                                                                14 days
                                                                                                                </td>                                             
                                                        <td class="d-none d-md-table-cell">Medium</td>                                           
                                                        <td style="text-align: center;">
                                                              
                                                                                                                                                                                            <i class="icon-eye mr-3"></i><i class="icon-cloud-download"></i>
                                                                 
                                                             
                                                        </td>
                                                    </tr><tr class="clickable-row" data-href="#">
                                                        <td data-toggle="tooltip" data-placement="top" title="" data-original-title="Replacement of 4 air-conditioners in Bontleng clinic">Gaone Kgolo</td>
                                                        <td>Internet</td>
                                                        <td>24 Jul 2018</td>
                                                        
                                                        
                                                              
                                                        <td class="d-none d-md-table-cell">
                                                                                                                                                                                7 days
                                                                                                                </td>                                             
                                                        <td class="d-none d-md-table-cell">Low</td>                                           
                                                        <td style="text-align: center;">
                                                              
                                                                                                                                                                                            <i class="icon-eye mr-3"></i><i class="icon-cloud-download"></i>
                                                                 
                                                             
                                                        </td>
                                                    </tr><tr class="clickable-row" data-href="#">
                                                        <td data-toggle="tooltip" data-placement="top" title="" data-original-title="Replacement of 4 air-conditioners in Bontleng clinic">Karabo Monna</td>
                                                        <td>Internet</td>
                                                        <td>24 Jul 2018</td>
                                                        
                                                        
                                                              
                                                        <td class="d-none d-md-table-cell">
                                                                                                                                                                                7 days
                                                                                                                </td>                                             
                                                        <td class="d-none d-md-table-cell">Low</td>                                           
                                                        <td style="text-align: center;">
                                                              
                                                                                                                                                                                            <i class="icon-eye mr-3"></i><i class="icon-cloud-download"></i>
                                                                 
                                                             
                                                        </td>
                                                    </tr><tr class="clickable-row" data-href="#">
                                                        <td data-toggle="tooltip" data-placement="top" title="" data-original-title="Replacement of 4 air-conditioners in Bontleng clinic">Ronald Bay</td>
                                                        <td>ISP</td>
                                                        <td>23 Jul 2018</td>
                                                        
                                                        
                                                              
                                                        <td class="d-none d-md-table-cell">
                                                                                                                                                                                13 days
                                                                                                                </td>                                             
                                                        <td class="d-none d-md-table-cell">Low</td>                                           
                                                        <td style="text-align: center;">
                                                              
                                                                                                                                                                                            <i class="icon-eye mr-3"></i><i class="icon-cloud-download"></i>
                                                                 
                                                             
                                                        </td>
                                                    </tr>
                                                                                                
                                                                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
                                                                                                <p class="mb-3 ml-3 mb-sm-0">
                                                        <strong>301</strong>  results found
                                                    </p>
                                                                                            <nav>
                                                    <ul class="pagination" role="navigation">
            
                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                </li>
            
            
                        
                
                
                                                                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                    <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/profiles?page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/profiles?page=2">3</a></li>
        <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/profiles?page=2">4</a></li>
                                                            
            
                        <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/profiles?page=2">5</a></li><li class="page-item">
                    <a class="page-link" href="http://127.0.0.1:8000/profiles?page=2" rel="next" aria-label="Next »">›</a>
                </li>
                </ul>
        
                                                </nav>
                                            </div>
                                    <div class="d-flex float-right mt-4">
                                        <button class="btn btn-primary btn-sm">View All
                                            <i class="icon-arrow-right-circle icons ml-1"></i>
                                        </button>
                                    </div>
                                                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('js')
    <script src="{{ asset('js/plugins/dropify/dist/js/dropify.min.js') }}"></script>

    <scrript>
        $( document ).ready(function() {
            //  Initialize file/dropbox field
            $('.dropify').dropify();
        });

    </script>

@endsection