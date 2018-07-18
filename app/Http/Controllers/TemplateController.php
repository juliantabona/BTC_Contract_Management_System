<?php

namespace App\Http\Controllers;

use Auth;
use Redirect;
use Validator;
use App\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the view for creating a new template.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.create.step1');
    }

    /**
     * Show the view for creating the template form structure.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Template $template)
    {
        return view('template.create.step2', compact('template'));
    }

    /**
     * Show the view for creating the template contract document structure.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Template $template)
    {
        return view('template.create.step3', compact('template'));
    }

    /**
     * Show the view for verifying the template details.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep4(Template $template)
    {
        return view('template.create.step4', compact('template'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Rules for creating a template
        $rules = array(
            //  Name is required and must be minimum of 3 characters and maximum of 255 characters
            'name' => 'required|max:255|min:3',
            //  Description is required and must be minimum of 3 characters and maximum of 1000 characters
            'description' => 'required|max:1000|min:3',
            //  Category is required
            'category' => 'required',
            //  Due date is required and must be an integer e.g) 0,1,2,3...
            'duedate' => 'required|integer',
            //  Authorized by is required
            'authorisedBy' => 'required',
        );

        //Customized error messages
        $messages = [
            //  Name messages
            'name.required' => 'Enter the template name',
            'name.max' => 'Template name cannot be more than 255 characters',
            'name.min' => 'Template name must be atleast 3 characters',
            //  Description messages
            'description.required' => 'Enter the template description',
            'description.max' => 'Description cannot be more than 1000 characters',
            'description.min' => 'Description must be atleast 3 characters',
            //  Category messages
            'category.required' => 'Select/create a template category',
            //  Authorized by messages
            'authorisedBy.required' => 'Select a user to authorize this template',
          ];

        // Now pass the request inputs and rules into the validator
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check to see if validation fails or passes
        if ($validator->fails()) {
            //  Alert update error
            $request->session()->flash('alert', array('Couldn\'t create template, check your information!', 'icon-exclamation icons', 'danger'));

            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            //  Create the template
            $template = Template::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'category_id' => $request->input('category'),
                'due_date' => $request->input('due_date'),
                'last_progress_step' => 1,
                'completed' => 0,
                'created_by' => Auth::id(),
            ]);

            //  Alert update success
            $request->session()->flash('alert', array('Template created successfully! Now lets build our form fields.', 'icon-check icons', 'success'));

            //  Go to step 2
            return redirect()->route('template.create.step2', $template->id);
        }
    }

    public function updateStep2(Request $request, Template $template)
    {
        //  Get the form field template
        $form_fields_template = json_decode($request->input('formBuild'), true)[0];

        //  Update the template
        $template->form_structure = $form_fields_template;
        $template->save();

        //  Alert update success
        $request->session()->flash('alert', array('Form updated successfully! Now lets build the document structure.', 'icon-check icons', 'success'));

        //  Go to step 3
        return redirect()->route('template.create.step3', $template->id);
    }

    public function updateStep3(Request $request, Template $template)
    {
        //  Get the document structure template
        $doc_structure_template = $request->input('document_structure_file');

        //  Update the document structure template
        $template->doc_structure = $doc_structure_template;
        $template->save();

        //  Alert update success
        $request->session()->flash('alert', array('Document updated successfully! Now lets verify the structure.', 'icon-check icons', 'success'));

        //  Go to step 4
        return redirect()->route('template.create.step4', $template->id);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Template $template
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Template $template
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Template $template)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Template            $template
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template $template)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Template $template
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
    }
}
