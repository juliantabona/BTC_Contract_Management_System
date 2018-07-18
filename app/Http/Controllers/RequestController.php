<?php

namespace App\Http\Controllers;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('request.index');
    }

    public function authorized()
    {
        return view('request.authorized');
    }

    public function reviewed()
    {
        return view('request.reviewed');
    }

    public function inspection()
    {
        return view('request.inspection');
    }

    public function waiting_signoff()
    {
        return view('request.waiting-signoff');
    }

    public function completed()
    {
        return view('request.completed');
    }

    public function show()
    {
        return view('request.show');
    }
}
