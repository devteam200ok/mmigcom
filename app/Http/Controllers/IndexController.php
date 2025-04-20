<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Setting;
use App\Models\Contact;
use Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        if(User::where('role', 'admin')->count() == 0){
            $admin = new User;
            $admin->name = '관리자';
            $admin->email = 'admin@mig.kr';
            $admin->email_verified_at = time();
            $admin->password = Hash::make('admin01!@#');
            $admin->role = 'admin';
            $admin->verification_code = Str::random(6);
            $admin->save();
        }
        if(Setting::count() == 0){
            $setting = new Setting;
            $setting->seo_title = '전문적이고 체계적인 글로벌엠아이지';
            $setting->seo_description = '각종 리서치 데이터를 기반으로 전문적이고 체계적인 마케팅 운영 회사';
            $setting->seo_keywords = '마케팅, 운영, 리서치, 데이터, 글로벌엠아이지';
            $setting->seo_author = 'Global Mig';

            $setting->og_url = 'https://mig.kr';
            $setting->og_type = 'website';
            $setting->og_title = '전문적이고 체계적인 글로벌엠아이지';
            $setting->og_description = '각종 리서치 데이터를 기반으로 전문적이고 체계적인 마케팅 운영 회사';
            $setting->save();
        }
        return view('index');
    }

    public function signin(Request $request)
    {
        if (Auth::attempt(['email' => $request->signin_email, 'password' => $request->signin_password])) {
            $result = Auth::user()->username;
        } else {
            $result = "failed";
        }
        $data = array(
            'result' => $result
        );
        return response()->json($data);
    }

    public function estimate()
    {
        return view('estimate');
    }

    public function estimate_confirm()
    {
        return view('estimate_confirm');
    }

    public function terms()
    {
        return view('terms');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function email()
    {
        return view('email');
    }

    public function contact_submit(Request $request)
    {
        $visit_date = $request->visit_date;
        $visit_time = $request->visit_time;
        $visit_location = $request->visit_location;

        $business_name = $request->company;
        //$position = $request->position;
        $client_name = $request->name;
        $phone_number = $request->phone;
        $email = $request->email;
        $mobile = $request->mobile;
        $domain = $request->url;
        $benchmark = $request->benchmark;
        $budget = $request->budget;
        $service = $request->service;
        $description = $request->description;
        $status = '접수';
        $date = date('Y-m-d');
        $file1 = null;
        $file2 = null;
        $file3 = null;
        $file4 = null;
        $file5 = null;
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
        $marketer = $request->marketer;
        $marketer_id = 0;
        if($marketer != '' && $marketer != null){
            $user = DB::connection('mysql2')
                ->table('users')
                ->where('role', 'marketer')
                ->where('name', $marketer)
                ->first();
            if($user){
                $marketer_id = $user->id;
            }
        }

        if($request->hasFile('file1')){
            $random = time().Str::random(4);
            $extension = $request->file('file1')->getClientOriginalExtension();
            $path = $request->file('file1')->storeAs('public/crm/file', $random.'.'.$extension);
            $file1 = url('/').'/storage/crm/file/'.$random.'.'.$extension;
        }
        if($request->hasFile('file2')){
            $random = time().Str::random(4);
            $extension = $request->file('file2')->getClientOriginalExtension();
            $path = $request->file('file2')->storeAs('public/crm/file', $random.'.'.$extension);
            $file2 = url('/').'/storage/crm/file/'.$random.'.'.$extension;
        }
        if($request->hasFile('file3')){
            $random = time().Str::random(4);
            $extension = $request->file('file3')->getClientOriginalExtension();
            $path = $request->file('file3')->storeAs('public/crm/file', $random.'.'.$extension);
            $file3 = url('/').'/storage/crm/file/'.$random.'.'.$extension;
        }
        if($request->hasFile('file4')){
            $random = time().Str::random(4);
            $extension = $request->file('file4')->getClientOriginalExtension();
            $path = $request->file('file4')->storeAs('public/crm/file', $random.'.'.$extension);
            $file4 = url('/').'/storage/crm/file/'.$random.'.'.$extension;
        }
        if($request->hasFile('file5')){
            $random = time().Str::random(4);
            $extension = $request->file('file5')->getClientOriginalExtension();
            $path = $request->file('file5')->storeAs('public/crm/file', $random.'.'.$extension);
            $file5 = url('/').'/storage/crm/file/'.$random.'.'.$extension;
        }

        DB::connection('mysql2')->table('crms')->insert([
            'visit_date' => $visit_date,
            'visit_time' => $visit_time,
            'visit_location' => $visit_location,
            
            'business_name' => $business_name,
            //'position' => $position,
            'client_name' => $client_name,
            'phone_number' => $phone_number,
            'email' => $email,
            'mobile' => $mobile,
            'domain' => $domain,
            'benchmark' => $benchmark,
            'budget' => $budget,
            'service' => $service,
            'description' => $description,
            'marketer' => $marketer,
            'marketer_id' => $marketer_id,
            'status' => $status,
            'date' => $date,
            'file1' => $file1,
            'file2' => $file2,
            'file3' => $file3,
            'file4' => $file4,
            'file5' => $file5,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);

        $result = 'success';

        $data = array(
            'result' => $result
        );
        return response()->json($data);
    }
}
