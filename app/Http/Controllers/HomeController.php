<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Verificar el rol del usuario y redirigir según corresponda
        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin.dashboard'); // Vista del admin
        } else {
            return redirect()->route('user.dashboard'); // Vista del usuario regular
        }
    }
}
