<?php

namespace App\Http\Controllers\Visa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    public function create()
    {
        return view('backend.pages.visa_add');
    }
}
