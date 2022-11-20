<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AcceptController extends Controller
{
    public function index(){
        return Inertia::render('accept');
    }
}
