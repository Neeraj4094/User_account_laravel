<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usermodel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\Carbon;
class UserController extends Controller
{
    public function index(){
        return view('spiderman.home');
    }
    public function register(){
        return view('spiderman.register');
    }
    public function user_register_data(Request $request){
        $request->validate(
            [
                'name' => 'required|min:3|max:50',
                'email' => 'required|unique:users,email',
                'password' => 'required|max:20|min:8',
                'phone_number' => 'required|max:10',
                'address' => 'required',
                'gender' => 'required',
            ]
        );

        $user_data = new Usermodel;
        $user_data->name = $request['name'];
        $user_data->email = $request['email'];
        $user_data->password = Hash::make($request['password']);
        $user_data->phone_number = $request['phone_number'];
        $address = $request['address'];
        $user_data->address = "$address";
        $user_data->gender = $request['gender'];
        $user_data->save();

        return redirect('/login');
    }

    public function login(){
        return view('spiderman.login');
    }
    public function user_login_data(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20'
        ]);
        
        $credentials = $request->only('email','password');
        $user = UserModel::where('email', $credentials['email'])->first();
        if($user && Hash::check($credentials['password'],$user->password)){
            if(Auth::attempt($credentials)){
                $user = Auth::user();
                // session()->put('email',$request['email']);
                return redirect()->intended('/dashboard');
            }
        }else{
            return redirect()->back()->with(['errormsg'=>'Email & password not matched']);
        }
    }

    public function user_logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function forgetpassword(){
        return view('spiderman.forgetpassword');
    }

    public function sendmail(Request $request){
        $request->validate(['email' => 'required|email']);

        $user = Usermodel::where('email',$request['email'])->first();
        if(empty($user)){
            return redirect('/forget_password')->withErrors('errormsg',"Email not matched with our credentials");
        }
    }

    public function dashboard(Request $request){
        $search = $request['search'] ?? '';
        if($search != ''){
            $userdata = Usermodel::where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->get();
        }else{
            $userdata = Usermodel::paginate(10) ?? null;
        }
        // $userdata = $data->toArray();
        // $request->session()->flash('test1',"Test1 success");
        $all_user_data = compact('userdata');
        return view('spiderman.dashboard')->with($all_user_data);
    }

    public function edit_data($id){
        $user_id_data = Usermodel::find($id);
        $url = url('/user/update') . "/" . $id;
        $url_data = compact('user_id_data','url');
        return view('spiderman.updateuser')->with($url_data);
    }

    public function update_user($id,Request $request){
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|unique:users,email,'.$id,
            'password' => 'required|max:20|min:8',
            'phone_number' => 'required|max:10',
            'address' => 'required',
            'gender' => 'required',
        ]);
        
        $user_data = Usermodel::find($id);
        if (!$user_data) {
            return redirect('/dashboard');
        }
        $user_data->name = $request['name'];
        $user_data->email = $request['email'];
        $user_data->password = Hash::make($request['password']);
        $user_data->phone_number = $request['phone_number'];
        $user_data->address = $request['address'];
        $user_data->gender = $request['gender'];
        $user_data->updated_at = date("Y-m-d H:i:s");
        $user_data->save();
        return redirect('/dashboard');
    }

    public function delete_user($id){
        $user = Usermodel::find($id);
        if(!empty($user)){
            $user->delete();
        }
        return redirect('/dashboard');
    }
    
    public function restore_user($id){
        $user = Usermodel::withTrashed()->find($id);
        if(!empty($user)){
            $user->restore();
        }
        $trash_data = Usermodel::onlyTrashed()->get();
        $data = compact('trash_data');
        return redirect('/trash_data')->with($data);
    }

    public function forcedelete_user($id){
        $user = Usermodel::withTrashed()->find($id);
        if(!empty($user)){
            $user->forceDelete();
        }
        $trash_data = Usermodel::onlyTrashed()->get();
        $data = compact('trash_data');
        return redirect('/trash_data')->with($data);
    }

    public function trash_user(){
        $trash_data = Usermodel::onlyTrashed()->get();
        $data = compact('trash_data');
        return view('spiderman.trash')->with($data);
    }
}
