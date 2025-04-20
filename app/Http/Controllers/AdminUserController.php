<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Image;
use Auth;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function view($id)
    {
        $user = User::find($id);
        return view('admin.user.view')
        ->with('user', $user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit')
        ->with('user', $user);
    }

    public function store(Request $request)
    {
        $users = User::where('email', $request->email)->count();
        if($users<1){
            $user = new User;
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->mobile = $request->mobile;
            $user->verification_code = Str::random(6);
            $user->save();

            $id = $request->user_id;

            if($request->hasFile('profile_image')){
                $this->validate($request, [
                    'profile_image' => 'image|mimes:jpeg,jpg,png|max:10240',
                ]);
                $random = Str::random(4);
                $extension = $request->file('profile_image')->getClientOriginalExtension();
                $path = $request->file('profile_image')->storeAs('public/user/profile_image', $id.'-'.$random.'.'.$extension);
                $image = Image::make('storage/user/profile_image/'.$id.'-'.$random.'.'.$extension);
    
                $image->fit(400)->encode('webp',80);
                $save = Storage::disk('public')->put('user/profile_image/400/'.$id.'-'.$random.'.webp', $image);
                $image->fit(100)->encode('webp',80);
                $save = Storage::disk('public')->put('user/profile_image/100/'.$id.'-'.$random.'.webp', $image);
    
                Storage::disk('public')->delete('user/profile_image/'.$id.'-'.$random.'.'.$extension);
                $user->profile_image = $id.'-'.$random.'.webp';
                $user->save();
            }
            $result = "success";
        } else {
            $result = "error";
        }
        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }

    public function update(Request $request)
    {
        $user = User::find($request->user_id);
        $user->name = $request->name;
        if($request->password != ''){
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        $user->mobile = $request->mobile;
        $user->verification_code = Str::random(6);
        $user->save();

        $id = $request->user_id;

        if($request->hasFile('profile_image')){
            $this->validate($request, [
                'profile_image' => 'image|mimes:jpeg,jpg,png|max:10240',
            ]);
            if($user->profile_image != ''){
                Storage::disk('public')->delete('user/profile_image/400/'.$user->profile_image);
                Storage::disk('public')->delete('user/profile_image/100/'.$user->profile_image);
            }
            $random = Str::random(4);
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            $path = $request->file('profile_image')->storeAs('public/user/profile_image', $id.'-'.$random.'.'.$extension);
            $image = Image::make('storage/user/profile_image/'.$id.'-'.$random.'.'.$extension);

            $image->fit(400)->encode('webp',80);
            $save = Storage::disk('public')->put('user/profile_image/400/'.$id.'-'.$random.'.webp', $image);
            $image->fit(100)->encode('webp',80);
            $save = Storage::disk('public')->put('user/profile_image/100/'.$id.'-'.$random.'.webp', $image);

            Storage::disk('public')->delete('user/profile_image/'.$id.'-'.$random.'.'.$extension);
            $user->profile_image = $id.'-'.$random.'.webp';
            $user->save();
        }

        $result = "success";

        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }

    public function delete(Request $request)
    {
        User::find($request->user_id)->delete();
        $result = "success";

        $data = array(
            'result' => $result
        );

        return response()->json($data);
    }
    
    public function login(Request $request)
    {
        $user = User::find($request->user_id);
        Auth::login($user);

        $data = array(
            'result' => 'success'
        );
        return response()->json($data);
    }
}
