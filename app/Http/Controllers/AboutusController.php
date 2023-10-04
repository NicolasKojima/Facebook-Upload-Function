<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\informations;
use App\Models\Post;

class AboutusController extends Controller
{
    public function index()
    {
        $informations = informations::all();

        return view('about-us', compact('informations')); 
    }
}

