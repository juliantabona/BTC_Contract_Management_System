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
                                <i class="float-left icon-social-dropbox icon-md icons ml-3"></i>
                                <h5 class="card-title float-left mt-2 mb-0 ml-2">Requests</h5>
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
                                                    <th>Customer</th>
                                                    <th>Category</th>
                                                    <th>Submission</th>
                                                    
                                                    <th style="width: 14%">Due</th>
                                                    <th class="d-sm-none d-md-table-cell">Priority</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="clickable-row" data-href="#"  data-toggle="modal" data-target="#add-field-modal">
                                                    <td>Bame Mpenge</td>
                                                    <td>Internet</td>
                                                    <td>18 Jul 2018</td>
                                                    <td class="d-none d-md-table-cell">
                                                    7 days
                                                    </td>                                             
                                                    <td class="d-none d-md-table-cell">Low</td>
                                                </tr>
                                                    <tr class="clickable-row" data-href="#">
                                                    <td>kgosi Mapila</td>
                                                    <td>ISP</td>
                                                    <td>18 Jul 2018</td>
                                                    <td class="d-none d-md-table-cell">
                                                    14 days
                                                    </td>                                             
                                                    <td class="d-none d-md-table-cell">Low</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="#">
                                                    <td>Gaone Kgolo</td>
                                                    <td>Internet</td>
                                                    <td>18 Jul 2018</td>
                                                    <td class="d-none d-md-table-cell">
                                                    7 days
                                                    </td>                                             
                                                    <td class="d-none d-md-table-cell">Low</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="#">
                                                    <td>Karabo Monna</td>
                                                    <td>Internet</td>
                                                    <td>18 Jul 2018</td>
                                                    <td class="d-none d-md-table-cell">
                                                    7 days
                                                    </td>                                             
                                                    <td class="d-none d-md-table-cell">Low</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="#">
                                                    <td>Ronald Bay</td>
                                                    <td>ISP</td>
                                                    <td>17 Jul 2018</td>
                                                    <td class="d-none d-md-table-cell">
                                                    13 days
                                                    </td>                                             
                                                    <td class="d-none d-md-table-cell">Low</td>
                                                </tr>
                                            </tbody>
                                        </table>
</div>
<div class="d-flex align-items-center justify-content-between flex-column flex-sm-row mt-4">
<p class="mb-3 ml-3 mb-sm-0">
<strong>215</strong>  results found
</p>
<nav>
<ul class="pagination" role="navigation">

<li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
<span class="page-link" aria-hidden="true">‹</span>
</li>
<li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item"><a class="page-link" href="#">5</a></li><li class="page-item">
<a class="page-link" href="#" rel="next" aria-label="Next »">›</a>
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

<div class="modal" id="add-field-modal">
        <div class="modal-dialog">
            <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
            <!-- Modal body -->
            <div class="modal-body pb-0">

                <div class="row input-options-box">

                    <div class="col-12">
                            <div id="application-form-box" class="row"><div class="col-6"><div class="form-group"><label for="First_Name" class="field-label">First Name</label><input field-required="false" class="form-control" data-toggle="tooltip" data-placement="top" title="" type="text" id="First_Name" name="First_Name" placeholder="" data-original-title="" value="Bame"></div></div><div class="col-6"><div class="form-group"><label for="Last_Name" class="field-label">Last Name</label><input field-required="false" class="form-control" data-toggle="tooltip" data-placement="top" title="" type="text" id="Last_Name" name="Last_Name" placeholder="" data-original-title="" value="Mbenge"></div></div><div class="col-6"><div class="form-group"><label for="Mobile_Number" class="field-label">Mobile Number</label><input field-required="false" class="form-control" data-toggle="tooltip" data-placement="top" title="" type="text" id="Mobile_Number" name="Mobile_Number" placeholder="" data-original-title="" value="+267 75901787"></div></div><div class="col-6"><div class="form-group"><label for="email" class="field-label">Email</label><input field-required="false" class="form-control" data-toggle="tooltip" data-placement="top" title="" type="text" name="email" placeholder="" data-original-title="" email="" value="bamembenge@gmail.com"></div></div><div class="col-6"><div class="form-group"><label for="Physical_Address" class="field-label">Physical Address</label><input field-required="false" class="form-control" data-toggle="tooltip" data-placement="top" title="" type="text" id="Physical_Address" name="Physical_Address" placeholder="" data-original-title="" value="Extension 12, Gaborone"></div></div><div class="col-6"><div class="form-group"><label for="Postal_Address" class="field-label">Postal Address</label><input field-required="false" class="form-control" data-toggle="tooltip" data-placement="top" title="" type="text" id="Postal_Address" name="Postal_Address" placeholder="" data-original-title="" value="56q3, AHH, MASA"></div></div><div class="col-12"><hr><div class="badge text-left w-100">Attach Omang: <a href="http://oq-bucket.s3.amazonaws.com/profile_docs/fQ4zf7xhdNZnTBZ6PoXHw051lDBy16hUz7A0wtnH.pdf" class="btn btn-primary btn-sm mr-1" target="_blank">View Attachment (1)</a></div><hr></div></div>
                    </div>
                </div>
            </div>
        
            <!-- Modal footer -->
            <div class="modal-footer">
                    <div style="text-align: center;">
                                                        
    <button type="button" class="btn btn-success p-2"><i class="icon-check mr-1"></i> Approve</button><button type="button" class="btn btn-danger p-2 ml-1"><i class="icon-close mr-1"></i> Decline</button><button type="button" class="btn btn-warning p-2 ml-1"><i class="icon-user-follow mr-1"></i> Assign</button><a href="/requests/33" class="btn btn-warning p-2 ml-1"><i class="icon-note mr-1"></i> Review</a>
                                                                    
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