<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Volunteer;
use App\Models\Fooddonate;
use App\Models\Zakatdonate;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class VolenteerAuthController extends Controller
{

    public function login(){
        return view('volunteer.auth.login');
    }

    public function registration()
    {
        return view('volunteer.auth.registration');
    }

    public function Store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:volunteers',
            'password' => 'required|min:8|max:36',
        ]);
        $volunteer = new Volunteer;
            $volunteer->fname = $request->input('fname');
            $volunteer->lname = $request->input('lname');
            $volunteer->username = $request->input('username');
            $volunteer->phone = $request->input('phone');
            $volunteer->address = $request->input('address');
            $volunteer->email = $request->input('email');
            $volunteer->password = Hash::make($request->input('password'));
            
            $save = $volunteer->save();
        if ($save){
                return redirect('volunteer/login')->with('success','Great! You successfully registerd. ');
        }
    }

    public function check(Request $request){
        //Validate requests
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:8|max:36'
        ]);
    
        $userInfo = Volunteer::where('email','=', $request->email)->first();
    
        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if('$request->password, $userInfo->password'){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('volunteer');
    
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('volunteer/login');
        }
    }

    public function index(){
        $data= array();
        if(Session::has('LoggedUser')){
            $data = Volunteer::where('id','=', Session::get('LoggedUser'))->first();
        }

            $fooddonates = Fooddonate::select(
                "fooddonates.*"
            )
            ->join("volunteers", "volunteers.username", "=", "fooddonates.volunteer")
            ->get();

            $zakatdonates = Zakatdonate::select(
                "zakatdonates.fname","zakatdonates.phone","zakatdonates.address","zakatdonates.dontype"
            )
            ->join("volunteers", "volunteers.username", "=", "zakatdonates.volunteer")
            ->get();

           

        
        return view('volunteer.dashboard', compact('data','fooddonates','zakatdonates'));
    }


   
}
