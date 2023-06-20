<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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


    public function update(Request $request)
    {
        $user = $request->validate([
            'brand_name' => 'required|string',
            'product_name' => 'required|string',
            'group_name' => 'required|string',
            'variant_name' => 'required|string',
            'image_after_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
            'image_before_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        if($request->has('national_card_image_path')){
           $request->merge([
                'national_card_image_url' => $this->upload(
                request()->file('national_card_image_path') )
            ]);
        }

        $request->user()->update($request->all());
        $user = $request->user();
        $user->status = 'STATUS_PENDING';
        $user->save();

        alert()->success('اطلاعات با موفقیت بروزرسانی شد');
        return redirect()->back();
    }
}
