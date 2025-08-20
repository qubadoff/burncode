<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function comingSoon(): View
    {
        return \view('comingSoon');
    }
}
