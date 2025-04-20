<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;
use Image;

class AdminSettingController extends Controller
{
    public function seo()
    {
        $setting = Setting::first();
        return view('admin.setting.seo')
        ->with('setting', $setting);
    }

    public function seo_update(Request $request)
    {

        $setting = Setting::first();
        $setting->seo_code = $request->seo_code;
        $setting->seo_title = $request->seo_title;
        $setting->seo_description = $request->seo_description;
        $setting->seo_keywords = $request->seo_keywords;
        $setting->seo_author = $request->seo_author;
        $setting->og_url = $request->og_url;
        $setting->og_type = $request->og_type;
        $setting->og_title = $request->og_title;
        $setting->og_description = $request->og_description;
        $setting->save();

        $id = $setting->id;

        if($request->hasFile('og_image')){
            $this->validate($request, [
                'og_image' => 'image|mimes:jpeg,jpg,png|max:40240',
            ]);
            $extension = $request->file('og_image')->getClientOriginalExtension();
            $path = $request->file('og_image')->storeAs('public/setting/og_image', $id.'.'.$extension);
            $image = Image::make('storage/setting/og_image/'.$id.'.'.$extension);

            $image->fit(1408, 704)->encode('webp',80);
            $save = Storage::disk('public')->put('setting/og_image/'.$id.'.webp', $image);

            Storage::disk('public')->delete('setting/og_image/'.$id.'.'.$extension);
            $setting->og_image = $id.'.webp';
            $setting->save();
        }
        $result = "success";
        
        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }
    
    public function footer()
    {
        $setting = Setting::first();
        return view('admin.setting.footer')
        ->with('setting', $setting);
    }

    public function privacy()
    {
        $setting = Setting::first();
        return view('admin.setting.privacy')
        ->with('setting', $setting);
    }

    public function terms()
    {
        $setting = Setting::first();
        return view('admin.setting.terms')
        ->with('setting', $setting);
    }

    public function footer_update(Request $request)
    {

        $setting = Setting::first();
        $setting->company = $request->company;
        $setting->company_registration_number = $request->company_registration_number;
        $setting->company_ceo = $request->company_ceo;
        $setting->company_email = $request->company_email;
        $setting->company_telemarketing_number = $request->company_telemarketing_number;
        $setting->company_hr = $request->company_hr;
        $setting->company_jeonju = $request->company_jeonju;
        $setting->company_gasan = $request->company_gasan;
        $setting->company_phone = $request->company_phone;
        $setting->company_workhour = $request->company_workhour;
        $setting->footer = $request->footer;
        $setting->save();

        $result = "success";
        
        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }

    public function privacy_update(Request $request)
    {

        $setting = Setting::first();
        $setting->privacy = $request->privacy;
        $setting->save();

        $result = "success";
        
        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }

    public function terms_update(Request $request)
    {

        $setting = Setting::first();
        $setting->terms = $request->terms;
        $setting->save();

        $result = "success";
        
        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }
}
