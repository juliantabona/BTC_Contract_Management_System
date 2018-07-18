<?php

namespace App\Http\Controllers;

use App\Template;

class RequestApplicationController extends Controller
{
    /**
     * Display the specified application form.
     *
     * @param \App\Template $template
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        return view('template.application.show', compact('template', 'customer_fields', 'company_fields'));
    }

    /**
     * Store a newly created request.
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
}
