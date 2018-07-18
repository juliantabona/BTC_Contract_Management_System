@extends('layouts.app') 

@section('style')
    <link rel="stylesheet" href="{{ asset('css/plugins/dropify/dist/css/dropify.min.css') }}">
    <style>
            body.dragging, body.dragging {
                cursor: move !important;
            }

            .form-box{
                border: 1px solid #e8e8e8;
                box-shadow: 0px 2px 5px #00000014;
            }

            .draggable-form-box{
                min-height: 100px;
                padding: 10px;
                margin: 0 0 15px 0;
            }

            /*  The item being dragged   */
            .draggable-form-box li {
                border: 1px dotted transparent;
                padding: 5px 5px 0 5px;
            }

            /*  The item being dragged on hover   */
            .draggable-form-box li:hover {
                border: 1px dotted #000000;
                box-shadow: 1px 1px 5px #cecece;
            }

            /*  The item being dragged on a dragged state   */
            .draggable-form-box li.dragged {
                background: #ffbe0061;
                position: absolute;
                right:0;
                opacity: 0.5;
                z-index: 1000;
            }

            /*  The dragger button, delete column button, increase column button and decrease column button   */
            .draggable-form-box li > .dragger-btn,
            .draggable-form-box li > .delete-column-btn,
            .draggable-form-box li > .increase-column-btn,
            .draggable-form-box li > .decrease-column-btn{
                display:none;
            }

            /*  The dragger button, delete column button, increase column button and decrease column button,
                when the draggable item is being hovered   
            */
            .draggable-form-box li:hover > .dragger-btn,
            .draggable-form-box li:hover > .delete-column-btn,
            .draggable-form-box li:hover > .increase-column-btn,
            .draggable-form-box li:hover > .decrease-column-btn{
                display: block;
                cursor: move !important;
                z-index: 100;
                position: absolute;
                right: 50%;
                top: 10px;
            }

            /*  The dragger button, delete column button, increase column button and decrease column button on hover state
                while the draggable item is also being hovered   
            */
            .draggable-form-box li:hover > .dragger-btn:hover,
            .draggable-form-box li:hover > .delete-column-btn:hover,
            .draggable-form-box li:hover > .increase-column-btn:hover,
            .draggable-form-box li:hover > .decrease-column-btn:hover{
                color: #fba200;
            }

            /*  The increase column button on hover state
                when the draggable item is being hovered   
            */
            .draggable-form-box li:hover > .increase-column-btn{
                right: 15px;
                cursor: pointer !important;
            }

            /*  The decrease column button on hover state
                when the draggable item is being hovered   
            */
            .draggable-form-box li:hover > .decrease-column-btn{
                right: 35px;
                cursor: pointer !important;
            }

            /*  The delete column button on hover state
                when the draggable item is being hovered   
            */
            .draggable-form-box li:hover > .delete-column-btn{
                right: 55px;
                cursor: pointer !important;
            }
            
            /*  The draggable item when the  
            */
            .draggable-form-box li.placeholder {
                position: relative;
                margin-left:0 !important;
                padding-left:0 !important;
                left:0 !important;
                /** More li styles **/
            }
            .draggable-form-box li.placeholder:before {
                position: absolute;
                /** Define arrowhead **/
                content: "";
                width: 0;
                height: 0;
                margin-top: -8px;
                left: -10px;
                top: 50%;
                border-top: 5px solid transparent;
                border-right: 10px solid transparent;
                border-left: 10px solid transparent;
                border-bottom: 5px solid transparent;
                border-left-color: #004e26;
                border-right: none;
            }

    </style>

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 d-flex flex-column">
            <div class="row flex-grow">
                <div class="col-12 mb-2">
                    <div class="card">
                        <div class="card-body pb-2">
                            <h3>Create Contract Template</h3>
                            <p>Name: {{ $template->name }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mb-2">
                    <div class="card">
                        <div class="card-body pb-2">
                            <div class="row">
                                <div class="col-9">
                                    <nav aria-label="breadcrumb" role="navigation">
                                        <ul class="breadcrumb breadcrumb-custom mb-2 pt-2">
                                            <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs active" data-target="#exampleModal-1" data-original-title="Define template name, description, category, e.t.c">
                                                <span>General</span>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs selected" data-target="#exampleModal-1" data-original-title="Define template form fields">
                                                <span>Create Fields</span>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs" data-target="#exampleModal-1" data-original-title="Assign template form fields to contract layout">
                                                <span>Assign Fields</span>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="top" title="" class="breadcrumb-item progress-status-tabs" data-target="#exampleModal-1" data-original-title="Verify the final output">
                                                <span>Verify</span>
                                            </li>  
                                        </ul>
                                        <div class="progress" data-toggle="tooltip" data-placement="top" title="" data-original-title="25% completed">
                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-3">
                                    <button type="button" id="field-creation-box-btn-1" class="field-creation-box-btn btn btn-success pl-2 pr-3 mt-4 float-right">
                                        <i class="icon-plus icons icons"></i>Add Field
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 stretch-card">
                    <div class="card card-hoverable">
                        <div class="card-body p-3 pt-4">
                            <form method="POST" action="{{ route('template.update.step2', [$template->id]) }}">
                                {{ method_field('PUT') }}
                                @csrf
                                <input id="formBuild" type="hidden" value="" name="formBuild">
                                <div class="row">
                                    <div class="col-12">
                                        
                                        <h4 class="pl-2 pb-2">Customer Fields</h4>
                                        
                                        <div class="form-box">
                                            <ol class="row draggable-form-box vertical" draggable-type="customer">
                                                
                                            </ol>
                                            <div class="col-12">
                                                <button type="button" id="field-creation-box-btn-2" class="field-creation-box-btn btn btn-rounded btn-success d-block mb-3 ml-auto mr-auto mt-2 p-0">
                                                    <i class="d-block icon-md icon-plus icons m-0"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <h4 class="pl-2 pb-2 mt-4">Company Fields</h4>

                                        <div class="form-box mb-5">
                                            <ol class="row draggable-form-box vertical" draggable-type="company">
                                                
                                            </ol>
                                            <div class="col-12">
                                                <button type="button" id="field-creation-box-btn-3" class="field-creation-box-btn btn btn-rounded btn-success d-block mb-3 ml-auto mr-auto mt-2 p-0">
                                                    <i class="d-block icon-md icon-plus icons m-0"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <button id="submittionBtn" type="button" class="btn btn-primary pr-2 mr-2 float-right">
                                            Next Step
                                            <i class="icon-arrow-right icons"></i>
                                        </button>
                                        <button type="button" class="btn btn-success pl-2 pr-3 mr-2 float-right" data-toggle="modal" data-target="#add-field-modal">
                                            <i class="icon-arrow-left icons"></i>
                                            Back
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
    
    <div class="modal" id="add-field-modal">
        <div class="modal-dialog">
            <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Field</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
            <!-- Modal body -->
            <div class="modal-body">
                <div class="row input-types-box">

                    <div class="col-4 grid-margin stretch-card">
                        <div class="card card-clickable" field-type="text">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-pencil icons icon-lg"></i>
                                    <div class="mt-2 ml-2">
                                        <h6>Text</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 grid-margin stretch-card">
                        <div class="card card-clickable" field-type="dropdown">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-list icons icon-lg"></i>
                                    <div class="mt-2 ml-2">
                                        <h6>Dropdown</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 grid-margin stretch-card">
                        <div class="card card-clickable" field-type="checkbox">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-check icons icon-lg"></i>
                                    <div class="mt-2 ml-2">
                                        <h6>Checkbox</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 grid-margin stretch-card">
                        <div class="card card-clickable" field-type="radio">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-options icons icon-lg"></i>
                                    <div class="mt-2 ml-2">
                                        <h6>Radio</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 grid-margin stretch-card">
                        <div class="card card-clickable" field-type="date">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-clock icons icon-lg"></i>
                                    <div class="mt-2 ml-2">
                                        <h6>Date</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 grid-margin stretch-card">
                        <div class="card card-clickable" field-type="attach">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-md-center">
                                    <i class="icon-cloud-upload icons icon-lg"></i>
                                    <div class="mt-2 ml-2">
                                        <h6>Attach</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row input-options-box d-none">

                    <div class="col-12">
                        <div class="row">
                            <div class="col-3 pr-0">
                                <button type="button" class="show-input-types-box-btn btn btn-success pl-2 pr-3 mb-0">
                                    <i class="icon-arrow-left icons"></i>
                                    Back
                                </button>
                            </div>
                            <div class="col-9 pl-0">
                                <div class="bg-white" field-type="text">
                                    <div class="d-flex align-items-center pb-1 pl-5">
                                        <i class="icon-pencil icons icon-sm"></i>
                                        <h6 class="input-type-heading mt-2 ml-2"></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="form-group">
                            <label for="field_name">Field Name</label>
                            <input data-toggle="tooltip" data-placement="top" title="Name of the field label"
                                type="text" id="field_name" placeholder="Enter field name..." class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="field_description">Field Description/example (optional)</label>
                            <input data-toggle="tooltip" data-placement="top" title="Description for the field helper tip"
                                type="text" id="field_description" placeholder="Enter field description/example..." class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="field_placeholder">Field placeholder (optional)</label>
                            <input data-toggle="tooltip" data-placement="top" title="Placeholder for when the field is empty"
                                type="text" id="field_placeholder" placeholder="Enter field placeholder..." class="form-control">
                        </div>

                        <div class="form-group">
                            <div class="checkbox" data-toggle="tooltip" data-placement="top" title="This means the field cannot be blank">
                                <label><input id="field_required" type="checkbox" class="mr-2" checked>Required</label>
                            </div>
                        </div>

                        <input id="selectedFieldInput" type="hidden" value="">
                        <input id="activatedBtn" type="hidden" value="">
                              
                    </div> 
        
                </div>
            </div>
        
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="add-field-btn btn btn-primary d-none">
                    <i class="icon-plus icons icons"></i>
                    <span>Add</span>
                </button>
            </div>
        
            </div>
        </div>
    </div>

@endsection 

@section('js') 

    /*  Plugins required for drag and drop  */
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/plugins/jquery-sortable/jquery-sortable.js')}}"></script> 
    <script src="{{ asset('js/plugins/dropify/dist/js/dropify.min.js') }}"></script>

    <script>

            $( document ).ready(function() {

                /*
                    Functionality to initiate drag & drop with animation effects
                */
                var adjustment;

                $(".draggable-form-box").sortable({
                  group: 'draggable',
                  handle: '.dragger-btn',
                  pullPlaceholder: false,
                  // animation on drop
                  onDrop: function  ($item, container, _super) {
                    var $clonedItem = $('<li/>').css({height: 0});
                    $item.before($clonedItem);
                    $clonedItem.animate({'height': $item.height()});
                
                    $item.animate($clonedItem.position(), function  () {
                      $clonedItem.detach();
                      _super($item, container);
                    });

                    //  Get the form field structure
                    updateFormBuild();

                  },
                
                  // set $item relative to cursor position
                  onDragStart: function ($item, container, _super) {
                    var offset = $item.offset(),
                        pointer = container.rootGroup.pointer;
                
                    adjustment = {
                      left: pointer.left - offset.left,
                      top: pointer.top - offset.top
                    };
                
                    _super($item, container);
                  },
                  onDrag: function ($item, position) {
                    $item.css({
                      left: position.left - adjustment.left,
                      top: position.top - adjustment.top
                    });
                  }
                });

                /*
                    Functionality to delete column
                */
                $(document).on("click",".draggable-form-box li > .delete-column-btn",function() {
                    //  Get the draggable element
                    var draggableElement = $(this).parent('li');

                    //  Highlight and fade effect
                    $(draggableElement).hightlightFade().fadeOut(800);

                    //  Remove from DOM in 1/2 a second
                    setTimeout(
                        function() 
                        {
                            //  Remove draggable element
                            $(draggableElement).remove();
                        }, 800 ); 
                });

                /*
                    Functionality to decrease column size
                */
                $(document).on("click",".draggable-form-box li > .decrease-column-btn",function() {
                    var draggableElement = $(this).parent('li');
                    //  If the width is full size (1/1) then reduce to half size (1/2)
                    if( $(draggableElement).hasClass('col-12') ){
                        $(draggableElement).switchClass( "col-12", "col-6", 750, "easeInOutQuad" )

                    //  If the width is half size (1/2) then reduce to three quater 3/4 size
                    }else if( $(draggableElement).hasClass('col-6') ){
                        $(draggableElement).switchClass( "col-6", "col-4", 750, "easeInOutQuad" )
                    
                    //  If the width is three quater size (3/4) then reduce one quater to 1/4 size
                    }else if( $(draggableElement).hasClass('col-4') ){
                        $(draggableElement).switchClass( "col-4", "col-3", 750, "easeInOutQuad" )
                    }
                });

                /*
                    Functionality to increase column size
                */
                $(document).on("click",".draggable-form-box li > .increase-column-btn",function() {
                    var draggableElement = $(this).parent('li');
                    //  If the width is half size (1/2) then increase to full size (1/1)
                    if( $(draggableElement).hasClass('col-6') ){
                        $(draggableElement).switchClass( "col-6", "col-12", 750, "easeInOutQuad" )

                    //  If the width is three quater 3/4 size then increase to half size (1/2)
                    }else if( $(draggableElement).hasClass('col-4') ){
                        $(draggableElement).switchClass( "col-4", "col-6", 750, "easeInOutQuad" )
                    
                    //  If the width is quater 1/4 size then increase to three quater size (3/4)
                    }else if( $(draggableElement).hasClass('col-3') ){
                        $(draggableElement).switchClass( "col-3", "col-4", 750, "easeInOutQuad" )
                    }
                });
                
                /*
                    Functionality to open the field type box. This is the container that allows
                    the user to select the input field they want to create e.g) text, dropdown, e.t.c
                */
                $(document).on("click",".field-creation-box-btn",function() {
                    
                    //  Now lets open the modal to the user
                    $('#add-field-modal').modal("show");

                    //  Get the button clicked to open the modal
                    var btnClicked = $(this);

                    //  Track the button clicked to open the modal
                    $('#add-field-modal #activatedBtn').val( $(btnClicked).attr('id') );

                });

                /*
                    Functionality to open the field options box. This is the container that allows
                    the user to now populate options for the input field they selected.
                */

                $('#add-field-modal .card-clickable').click(function(){
                    //  Get the clicked input type e.g) text, dropdown, checkbox, radio, date, attach, e.t.c
                    var inputType = $(this).attr('field-type');
                    //  Get the associated icon
                    var inputIconClasses = $(this).find('i').attr("class");
                    //  Unhide all fields
                    $('.input-options-box').find('.form-group').show();
                    
                    //  If the selected input has a valid type
                    if(inputType != undefined){

                        if(inputType == 'attach'){
                            $('#field_placeholder').closest('.form-group').hide();
                        }

                        //  Track the selected input
                        $('#add-field-modal #selectedFieldInput').val(inputType);

                        //  Fade out the input-types-box to hide it
                        $('.input-types-box').fadeOut(500);

                        //  After 1/2 a second show the input options box by faing it in
                        setTimeout(
                            function() 
                            {
                                //  Start fading
                                $('.input-options-box').fadeIn(500).removeClass('d-none');
                                //  Also change the display title
                                $('.input-options-box .input-type-heading').text(inputType);
                                //  Also change the display icon
                                $('.input-options-box .input-type-heading').parent().find('i').attr("class", inputIconClasses).removeClass('icon-lg').addClass('icon-sm')
                                //  Start fading add button
                                $('#add-field-modal .add-field-btn span').text('Add '+inputType)
                                $('#add-field-modal .add-field-btn').fadeIn(500).removeClass('d-none');
                                
                            }, 500 );
                        

                    }
                });

                /*
                    Functionality to go back to input types box when the user is at the 
                    input options box. This is incase the user decides to change the field
                    they want to add. 
                */

                $('.show-input-types-box-btn').click(function(){

                    //  Run the function to handle the fadein of the input options box
                    openInputOptionsBox();
                  
                });

                /*
                    Functionality to append/prepend the new input with the options
                */
                $('#add-field-modal .add-field-btn').click(function(){

                    /* Get the clicked input type e.g) text, dropdown, checkbox, radio, date, attach, e.t.c
                      Use the tracker to get this value
                    */
                    var inputType = $('#add-field-modal #selectedFieldInput').val();

                    /* Get the button used to open this modal
                      Use the tracker to get this value
                    */
                    var btnClicked = $('#'+ $('#add-field-modal #activatedBtn').val() );
                    
                    //  If the selected input has a valid type
                    if(inputType != undefined){

                        //  Initialize variables
                        var build, name, _name, description, placeholder, required, errors = [];

                        //  Declare variables with values
                        name = $('#add-field-modal #field_name').val();
                        _name = name.split(' ').join('_');
                        description = $('#add-field-modal #field_description').val();
                        placeholder = $('#add-field-modal #field_placeholder').val();
                        
                        if(name != '' && name != undefined){
                            //  Get all existing elements already using this name
                            //  Check based on ID's and Input
                            var existingElements = $('#' + _name + ', input[name="'+_name+'"], textarea[name="'+_name+'"], select[name="'+_name+'"]');
                            
                            //  If no elements already exist then continue
                            if($(existingElements).length == 0) {

                                //  Define requirements and build structure for next modal to pop-up
                                
                                //  If the input is a type of text
                                if(inputType == 'text'){
                                    build = '<label for="'+_name+'" class="field-label">'+name+'</label>'+
                                            '<input data-toggle="tooltip" data-placement="top" title="'+description+'" '+
                                                'type="text" id="'+_name+'" name="'+_name+'" placeholder="'+placeholder+'" value="" class="form-control">';
                    
                                //  If the input is a type of dropdown
                                }else if(inputType == 'dropdown'){


                                }else if(inputType == 'checkbox'){

                                }else if(inputType == 'radio'){

                                }else if(inputType == 'date'){

                                }else if(inputType == 'attach'){
                                    build = '<label for="'+_name+'" class="badge badge-warning text-white field-label">'+name+'</label>'+
                                            '<div class="wrapper mb-3">'+
                                                '<p class="d-inline text-muted">File size is limited to not greater than <b>2MB</b>. Only <b>pdf/jpeg</b> are accepted.</p>'+
                                            '</div>'+
                                            '<input data-toggle="tooltip" data-max-file-size="2mb" data-placement="top" title="'+description+'"'+
                                                'type="file" id="'+_name+'" name="'+_name+'" value="" class="dropify form-control" data-default-file="" data-height="70">';

                                }
                            //  If elements already exist then issue an error
                            }else{
                                //  Catch error
                                errors.push('field_name');
                                alert('Please type another name, "'+name+'" is already in use');
                            }

                        }else{
                            //  Catch error
                            errors.push('field_name');
                            alert('Please include the field name');
                        }

                        //  If we have no errors
                        if(errors.length == 0){
                            //  If we have a successful build
                            if(build != undefined){
                                var CompleteBuild = '<li class="col-12 d-none">'+
                                                        '<i class="delete-column-btn icon-trash icons icons"></i>'+
                                                        '<i class="decrease-column-btn icon-arrow-left-circle icons"></i>'+
                                                        '<i class="increase-column-btn icon-arrow-right-circle icons"></i>'+
                                                        '<i class="icon-cursor-move dragger-btn" aria-hidden="true"></i>'+
                                                        '<div class="form-group">'+
                                                            build +                                             
                                                        '</div>'+
                                                    '</li>';
                                                    
                                if( $(btnClicked).closest('.form-box').length != 0 ){
                                    
                                    //  Add the input to the bottom of the draggable box that is the parent to the button clicked
                                    $(btnClicked).closest('.form-box').find('.draggable-form-box').append(CompleteBuild);
                                    //  Get the element we just added
                                    var addedItem = $(btnClicked).closest('.form-box').find('.draggable-form-box li:last');
                                }else{
                                    
                                    //  Add the input to the first draggable box in the DOM
                                    $('.draggable-form-box:first').prepend(CompleteBuild);
                                    //  Get the element we just added
                                    var addedItem = $('.draggable-form-box:first li:first');
                                }

                                //  Fade in the element we just created
                                $(addedItem).fadeIn(500).removeClass('d-none');
                                            
                                //  After 1/2 a second 
                                setTimeout(
                                    function() 
                                    {   
                                        //  Add the highlight effect
                                        $(addedItem).hightlightFade();
                                        
                                    }, 500 );

                            }

                            //  Run the function to handle the fadein of the input options box
                            //  so that the next time the user clicks to add another new field
                            //  they are presented with the input types
                            openInputOptionsBox();   

                            //  Hide the modal
                            $('#add-field-modal').modal('hide');

                            //  Initialize file/dropbox field
                            $('.dropify').dropify();

                        }

                    }                    
                    
                });

                /*
                    Functionality to submit complete form
                */

                $('#submittionBtn').click(function(e){
                    //  Stop default submittion action
                    e.preventDefault();

                    //  Get the form field structure
                    updateFormBuild();

                    //  Now submit the form
                    $("form").submit(); 

                });
                
                /*
                    Reusable functionality to open the input options box
                    This is the container that holds all the options for any field that user
                    selects. They can add the fields name, description, placeholder, e.t.c
                */

                function openInputOptionsBox(){

                    //  Fade out the input options box to hide panel
                    $('.input-options-box').fadeOut(500);
                    $('#add-field-modal .add-field-btn').fadeOut(500);

                    setTimeout(
                        function() 
                        {
                            //  Fade in the input types box to show panel
                            $('.input-types-box').fadeIn(500);
                        }, 500 );  

                    //  Reset input fields
                    resetInputOptionsBox();

                }

                /*
                    Reusable functionality to reset the input options fields, such as setting
                    the name, description, placeholder, e.t.c to empty values. So that the
                    user can find a clean slate when settings options for new fields
                */
                function resetInputOptionsBox(){
                    $('#add-field-modal #field_name').val('');
                    $('#add-field-modal #field_description').val('');
                    $('#add-field-modal #field_placeholder').val('');
                }

                /*
                    Reusable functionality to actual build out the fields that the user created
                    into one big collection that can be saved to the database as a template for
                    use by users registering
                */
                function updateFormBuild(){
                    
                    //  Initialize the storage array
                    //  It will hold all the data compiled from the existing form fields
                    var storage = [];
                    
                    storage.push($('.draggable-form-box').map(function(){
                        
                        var draggableFormBox = $(this);
                        
                        //  Get data from form fields and store inside the draggables array
                        return $(this).find('li').map(function(){

                                        //  Get the current field in this element
                                        var field = $(this).find('input, select, textarea');

                                        //  Get all the properties we can retrieve from this field
                                        var width = $(this).attr('class');
                                        var id = $(field).attr('id');
                                        var label = $(field).closest('.form-group').find('.field-label').text();
                                        var name = $(field).attr('name');
                                        var tag = $(field).prop("tagName");
                                        var type = $(field).attr('type');
                                        var classes = $(field).attr('class');
                                        var For = $(draggableFormBox).attr('draggable-type');
                                        var placeholder = $(field).attr('placeholder');
                                        var description = $(field).attr('title');
                                        var required = $(field).attr('field-required');

                                        //  Check for any other unique properties such as what kind of input type this field has
                                        //  If we have any, chain them to the
                                        
                                        //  Remove common classes
                                        var removeItem = 'form-control';

                                        //  Identify unique classes
                                        classes = jQuery.grep(classes.split(' '), function(value) {
                                            return value != removeItem;
                                        }).join(' ');

                                        //  If the required field is not set to true or does not exist at all,
                                        //  then say that the field is not really required (its optional) by setting it to false. 
                                        if(required != true){
                                            required = false;
                                        }
                                        
                                        //  If this field is a select input then it will have options
                                        //  lets capture those options
                                        
                                        //  First define the choices and options objects
                                        //  Choices are the individual options we want to get and retreive data from
                                        //  Options are the objects holding the information of both choices  
                                        var choices, options;
                                        
                                        //  
                                        if( $(field).is('select') ){
                                            //  Get the options from the field
                                            choices = $(field).find('option');

                                            //  Go through the options and return the id and label for each choice
                                            //  Store the result in the options object
                                            options = $(choices).map(function(){
                                                return {'id':$(this).attr('id'), 'label':$(this).val()}
                                            }).get();
                                        }
                                        
                                        //  Build up all the properties into an object called data
                                        var data = {
                                                       'width': width, 'id':id, 'tag':tag, 'type':type, 'label':label, 'name':name, 
                                                       'placeholder':placeholder, 'description':description,
                                                       'options': options, 'required': required, 'classes': classes,
                                                       'update': {
                                                           'done':false,
                                                           'response':''
                                                       },
                                                       'for': For
                                                   };

                                        // return the data, we have what we need
                                        return data;
                                        
                                    }).get();

                    }).get());

                    //  JSON.decycle to handle Error => [Converting circular structure to JSON]
                    var formBuild = JSON.stringify(JSON.decycle(storage, true));

                    //  Add the formBuild back to the submittion form under the hidden input
                    $('#formBuild').val(formBuild);
                }

                /*

                Start => CONFIRM BROWSER REDIRECT ON (CLOSE/RELOAD/BACK) WHEN THE USER HAS MADE CHANGES TO QUESTIONS

                */

                // Show warning
                $(window).on('beforeunload', function(){
                    if( $('#formBuild').val() != ''){
                        var s = "You have unsaved changes. Are you sure you want to leave?";

                        event = event || window.event;
                        if (event) {
                            // This is for IE
                            event.returnValue = s;
                        }

                        // This is for all other browsers
                        return s;
                    }
                });

                // Continue if user ignores warning
                $(document).on("submit", "form", function(event){
                    // disable warning
                    $(window).off('beforeunload');
                });

                /*

                End => CONFIRM BROWSER REDIRECT ON (CLOSE/RELOAD/BACK) WHEN THE USER HAS MADE CHANGES TO QUESTIONS

                */

            });

    </script>

@endsection