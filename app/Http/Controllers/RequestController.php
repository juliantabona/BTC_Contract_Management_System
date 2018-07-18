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

    public function show()
    {
        return view('request.show');
    }
}
