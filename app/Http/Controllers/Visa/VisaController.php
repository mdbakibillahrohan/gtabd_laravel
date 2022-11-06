<?php

namespace App\Http\Controllers\Visa;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class VisaController extends Controller
{

    public function create()
    {
        $Countries = Country::all();
        return view('backend.pages.visa.visa_add', ['Countries'=>$Countries ]);
    }
    public function store(Request $request){
        return $request;
    }
}
