<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Group;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function getBrands(Request $request)
    {
        $brands = Brand::query();
        if($request->filled('name')){
            $brands = $brands->where('name', 'like', '%'.$request->query('name').'%');
        }

        $brands = $brands->latest('id')->paginate(15);
        return view('dashboard.content.brands', 
            compact('brands')    
        );
    }

    public function storeBrand(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:brands|max:255',
        ]);

        $brand = Brand::create($request->all());

        if($brand instanceof Brand)
            alert()->success('با موفقیت ایجاد شد!');

        return redirect()->route('dashboard.content.brands');
    }


    public function getProducts(Request $request)
    {
        $products = Product::query();
        if($request->filled('name')){
            $products = $products->where('name', 'like', '%'.$request->query('name').'%');
        }

        $products = $products->latest('id')->paginate(15);

        return view('dashboard.content.products', 
            compact('products')    
        );
    }


    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products|max:255',
        ]);

        $product = Product::create($request->all());

        if($product instanceof Product)
            alert()->success('با موفقیت ایجاد شد!');

        return redirect()->route('dashboard.content.products');
    }

    public function getGroups(Request $request)
    {
        $groups = Group::query();
        if($request->filled('name')){
            $groups = $groups->where('name', 'like', '%'.$request->query('name').'%');
        }

        $groups = $groups->latest('id')->paginate(15);

        return view('dashboard.content.groups', 
            compact('groups')    
        );
    }


    public function storeGroup(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:groups|max:255',
        ]);

        $group = Group::create($request->all());

        if($group instanceof Group)
        alert()->success('با موفقیت ایجاد شد!');

        return redirect()->route('dashboard.content.groups');
    }

    public function getVariants(Request $request)
    {
        $variants = Variant::query();
        if($request->filled('name')){
            $variants = $variants->where('name', 'like', '%'.$request->query('name').'%');
        }

        $variants = $variants->latest('id')->paginate(15);
        return view('dashboard.content.variants', 
            compact('variants')    
        );
    }


    public function storeVariant(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:variants|max:255',
        ]);

        $variant = Variant::create($request->all());

        if($variant instanceof Variant)
            alert()->success('با موفقیت ایجاد شد!');

        return redirect()->route('dashboard.content.variants');
    }
}
