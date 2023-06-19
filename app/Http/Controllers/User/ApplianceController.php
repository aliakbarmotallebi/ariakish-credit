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
}
