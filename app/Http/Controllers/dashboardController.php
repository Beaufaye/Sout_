<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class dashboardController extends Controller
{
    public function index()
    {
        $clientCount = Client::count();
        return view('dashboard', compact('clientCount'));
    }
}
