@extends('layouts.app') 

@section('content')

    <div class="row">
        <div class="col-lg-12 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 col-lg-8 col-md-8 grid-margin offset-1 stretch-card mb-2">
                    <div class="card">
                        <div class="card-body pb-2">
                            <h3 class="float-left">Create Contract Template</h3>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8 col-md-8 grid-margin offset-1 stretch-card mb-2">
                    <div class="card">
                        <div class="card-body pb-2">
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb breadcrumb-custom pt-2 mb-2">
                                    <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs selected" data-target="#exampleModal-1" data-original-title="Define template name, description, category, e.t.c">
                                        <span>General</span>
                                    </li>
                                    <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs" data-target="#exampleModal-1" data-original-title="Define template form fields">
                                        <span>Create Fields</span>
                                    </li>
                                    <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs" data-target="#exampleModal-1" data-original-title="Assign template form fields to contract layout">
                                        <span>Assign Fields</span>
                                    </li>
                                    <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs" data-target="#exampleModal-1" data-original-title="Verify the final output">
                                        <span>Verify</span>
                                    </li>                                           
                                </ol>
                                <div class="progress" data-toggle="tooltip" data-placement="top" title="" data-original-title="0% completed">
                                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8 col-md-8 grid-margin offset-1 stretch-card">
                    <div class="card card-hoverable">
                        <div class="card-body p-3 pt-4">
                            <form method="POST" action="{{ route('template.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input data-toggle="tooltip" data-placement="top" title="Contract template name/title"
                                                           type="text" id="name" name="name" placeholder="Enter template name..." value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? '  is-invalid' : '' }}" required autocomplete="false">
                                                    @if ($errors->has('name'))
                                                        <span class="help-block invalid-feedback d-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <textarea data-toggle="tooltip" data-placement="top" title="Contract template detailed description of purpose"
                                                              id="description" name="description" placeholder="Enter template description..." class="form-control{{ $errors->has('description') ? '  is-invalid' : '' }}" required>{{ old('description') }}</textarea>
                                                    @if ($errors->has('description'))
                                                        <span class="help-block invalid-feedback d-block">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="category" class="m-0 p-0 w-100">Template Category</label>
                                                    <div class="input-group mb-2">
                                                        <select data-toggle="tooltip" data-placement="top" title="Category that this template belongs to"
                                                                id="category" class="form-control{{ $errors->has('category') ? '  is-invalid' : '' }} custom-select" name="category" required>
                                                            <option value = "1">Services</option>    
                                                            <option value = "2">Non Disclosure</option>
                                                            <option value = "4">MOU</option>       
                                                        </select>
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text p-0">
                                                                <button type="button" class="select-option-creation-btn btn btn-success pl-2 pr-1"
                                                                        data-toggle="tooltip" data-placement="top" title="Add a new category">
                                                                    <i class="icon-plus icons m-0"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        @if ($errors->has('category'))
                                                            <span class="help-block invalid-feedback d-block">
                                                                <strong>{{ $errors->first('category') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="duedate">Due Date</label>
                                                    <input data-toggle="tooltip" data-placement="top" title="How many days can pass until this template is considered overdue. Type 0 if contracts will never be overdue"
                                                              id="duedate" name="duedate" placeholder="Days until overdue..." class="form-control{{ $errors->has('duedate') ? '  is-invalid' : '' }}" value="{{ old('duedate') }}" required autocomplete="false">
                                                    @if ($errors->has('duedate'))
                                                        <span class="help-block invalid-feedback d-block">
                                                            <strong>{{ $errors->first('duedate') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="authorisedBy" class="m-0 p-0 w-100">Authorized By</label>
                                                    <div class="input-group mb-2">
                                                        <select data-toggle="tooltip" data-placement="top" title="Select who this template should be authorized by"
                                                                id="authorisedBy" class="form-control{{ $errors->has('authorisedBy') ? '  is-invalid' : '' }} custom-select" name="authorisedBy" required>
                                                            <option value = "1">Naledi Mosweu</option>    
                                                            <option value = "2">Gerald Mosimane</option>
                                                            <option value = "3">Lesedi Mosinyi</option>       
                                                        </select>
                                                        @if ($errors->has('authorisedBy'))
                                                            <span class="help-block invalid-feedback d-block">
                                                                <strong>{{ $errors->first('authorisedBy') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pr-2 mr-2 float-right">
                                            Next Step
                                            <i class="icon-arrow-right icons"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection 

@section('js') 

@endsection