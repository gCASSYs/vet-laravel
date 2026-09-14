<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $listaFaqs = Faq::orderBy('ordem_exibicao')->get();

        return view('admin.faqs.index', compact('listaFaqs'));
    }
}
