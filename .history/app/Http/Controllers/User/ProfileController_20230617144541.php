<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Traits\Uploadable;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use Uploadable;

    public function edit(Request $request)
    {
        $user = $request->user();
        return view('panel.profile', 
            compact('user')    
        );
    }

    public function update(Request $request)
    {
        $user = $request->validate([
            'fullname' => 'required|string',
            'mobile' => 'required|regex:/(09)[0-9]{9}/|numeric|digits:11',
            'mobile_second' => 'nullable|regex:/(09)[0-9]{9}/|numeric|digits:11',
            'tel' => 'nullable|numeric|digits:11',
            'postal_code' => 'required|numeric|digits:10',
            'address' => 'required|string',
            'national_id_number' => 'required|digits:10|string',
            'national_card_image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
        ]);

        if($request->has('national_card_image_path')){
            $user = $request->merge([
                'national_card_image_url' => $this->upload(
                request()->file('national_card_image_path') )
            ]);
        }
dd($user);
        $request->user()->update($user);

        alert()->success('اطلاعات با موفقیت بروزرسانی شد');
        return redirect()->back();
    }
}
