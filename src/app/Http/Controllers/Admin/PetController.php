<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pet;

class PetController extends Controller
{
    public function index()
    {
        $listaPets = Pet::with('cliente')->orderBy('id_pet')->get();

        return view('admin.pets.index', compact('listaPets'));
    }
}
