<?php

namespace App\Http\Controllers;

use App\Models\sellerInfo;
use App\Models\User;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Strings;
use Ramsey\Uuid\Type\Integer;

class loginAndRegisterController extends Controller
{



    public function index(Request $request){
        $role = $request->session()->get("guy");

        return view('home')->with('role',$role);
    }

    public function check(Request $request){

        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if($this->checkRole($request->role, $request->email)) {
            if(Auth::attempt($credentials)){
                return redirect('userPage');
            }else{
                return redirect()->back()->with('error', 'Wrong password');
            };
        }else{
            return redirect()->back()->with('error','User doesn`t exist');
        }
        
    }

    public function register(Request $request){
        if ($request->role == 'seller'){
            return view('sellerRegister');
        }
        return view('userRegister');
    }

    public function userRegister(Request $request){
        if ($request->role == 'user'){
            $role_id = 1;
        }else{
            $role_id = 3;
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = $role_id;
        $user->save();
        
        return redirect('/home');
    }


    public function checkRole(String $role, String $email){
        $user = User::with('getRole')->where('email', $email)->first();
        if ($user != "" && $user->getRole->role_name == $role) {
            return 1;
        }else{
            return 0;
        }
    }

    public function sellerRegister(Request $request){
        $role_id = 2;
        $seller = new User();
        $seller -> name = $request -> username;
        $seller -> email = $request -> email;
        $seller -> password = bcrypt($request -> password);
        $seller -> role_id = $role_id;
        $seller -> save();
        $this -> saveSellerInfo($request, $seller->id);
    }

    public function saveSellerInfo(Request $request, $id){
        $sellerInfo = new sellerInfo;
        $sellerInfo -> pan_no = $request -> pan_no;
        $sellerInfo -> phone_number = $request -> phone_number;
        $sellerInfo -> shop_address = $request -> shop_address;
        $sellerInfo -> seller_id = $id;

        $file_citizen = $request->file('citizenship_photo');
        $extension = $file_citizen->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file_citizen->move('uploads/demo/seller_info/', $filename);
        $sellerInfo->citizenship_photo = $filename;

        $file = $request->file('shop_photo');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('uploads/demo/seller_info/', $filename);
        $sellerInfo->shop_photo = $filename;

        $sellerInfo->save();
        echo "Success";


    }

}
