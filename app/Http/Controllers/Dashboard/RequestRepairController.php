<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\RequestRepair;
use Illuminate\Http\Request;

class RequestRepairController extends Controller
{
    public function index()
    {
        $requests = RequestRepair::latest()->paginate(15);
        return view('dashboard.request.request', compact('requests'));
    }
}
