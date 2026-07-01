<?php

namespace App\Http\Controllers;

use App\Models\InsuranceCompany;

class CashlessController extends Controller
{
    public function index()
    {
        $insurance = InsuranceCompany::where('is_active', true)->where('type', 'insurance')->orderBy('sort_order')->get();
        $tpa       = InsuranceCompany::where('is_active', true)->where('type', 'tpa')->orderBy('sort_order')->get();
        $government = InsuranceCompany::where('is_active', true)->where('type', 'government')->orderBy('sort_order')->get();

        return view('pages.cashless', compact('insurance', 'tpa', 'government'));
    }
}
