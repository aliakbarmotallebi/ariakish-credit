<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Traits\Uploadable;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    use Uploadable;
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $appliances =  $request->user()->appliances;
        return view('panel.appliances', [
            'appliances' => $appliances
        ]);
    }


    public function store(Request $request)
    {
        $user = $request->validate([
            'brand_name' => 'required|string',
            'product_name' => 'required|string',
            'group_name' => 'required|string',
            'variant_name' => 'required|string',
            'image_before_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        $request->merge([
            'image_before_url' => $this->upload(
            request()->file('image_before_file') )
        ]);

        $request->user()->appliances()->create($request->all());
        alert()->success('اطلاعات با موفقیت بروزرسانی شد');
        return redirect()->back();
    }
}
