<?php

namespace App\Http\Controllers\soal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SoalController extends Controller
{
    public function index(){
        return Inertia::render('list');
    }
}
