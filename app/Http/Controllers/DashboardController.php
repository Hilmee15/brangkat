<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Destination;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}