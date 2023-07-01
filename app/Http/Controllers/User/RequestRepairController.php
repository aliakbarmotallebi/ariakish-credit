<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appliance;
use Illuminate\Http\Request;

class RequestRepairController extends Controller
{
    public function index(Request $request, Appliance $appliance)
    {
        $repairs = $appliance->requestRepairs;
        return view('panel.request', compact('repairs'));
    }

    public function store(Request $request, Appliance $appliance)
    {
        $message = $request->validate([
            'message' => 'required|string',
        ]);

        $appliance->requestRepairs()->create([
            'message' => $request->get('message')
        ]);

        alert()->success('اطلاعات با موفقیت ذخیره شد');
        return redirect()->back();
    }
}
