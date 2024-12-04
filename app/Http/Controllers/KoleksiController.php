<?php

namespace App\Http\Controllers;

use App\Models\animal;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    //
    public function index()
    {
        $animals = Animal::all(); // Mengambil semua data
        return view('index', compact('animals'));
    }
}
