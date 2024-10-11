<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaignController extends Controller
{
    public function create_compaign()
    {
        return view('pages.compaign.create_compaign');
    }
}
