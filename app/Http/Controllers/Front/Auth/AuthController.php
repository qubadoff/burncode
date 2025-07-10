<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return \view('Frontend.auth.login');
    }
}
