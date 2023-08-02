<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class BrangkatIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function main()
    {
        $data = Destination::all();
        return view('userview.index', compact('data'));
    }

    public function article()
    {
        $data = Destination::all();
        return view('userview.article', compact('data'));
    }
}
