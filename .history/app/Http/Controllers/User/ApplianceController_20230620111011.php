<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Appliance;
use App\Models\Brand;
use App\Models\Group;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('panel.appliances', [
            'brands' => Brand::enables()->get(),
            'groups' => Group::enables()->get(),
            'variants' => Variant::enables()->take(1)->get(),
            'products' => Product::enables()->get(),
        ]);
    }


    public function store(Request $request)
    {
        $user = $request->validate([
            'brand_name' => 'required|string',
            'product_name' => 'required|string',
            'group_name' => 'required|string',
            'variant_name' => 'required|string',
            'image_after_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
            'image_before_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);


        $request->merge([
            'image_after_url' => $this->upload(
            request()->file('image_after_file') )
        ]);
        
        $request->merge([
            'image_before_url' => $this->upload(
            request()->file('image_before_file') )
        ]);

        $request->user()->appliances()->craete($request->all());
        alert()->success('اطلاعات با موفقیت بروزرسانی شد');
        return redirect()->back();
    }
}
