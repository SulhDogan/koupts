<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Session;
class AdminController extends Controller
{
    public function login()
    {
        return view("admin.login");
    }
    public function register()
    {
        return view("admin.registration");
    }
    public function userlogin (Request $request)
    {
        $request->validate([
            'AdminUsername' => 'required',
            'AdminPassword' => 'required|min:8|max:8'
        ]);
        $admin = Admin::where('AdminUsername','=',$request->AdminUsername)->first();
        if($admin)
        {
            if($admin->AdminPassword==$request->AdminPassword)
            {
                $request->session()->put('LoginID',$admin->AdminID);
                return redirect('/panel');
            }
            else
            {
                return back()->with('Başarısız','Şifrenizi Lütfen Kontrol Ediniz.');
            }
        }
        else
        {   
            return back()->with('Başarısız','Bu Kullanıcı İsmine Sahip Bir Admin Bulunamadı');
        }
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'AdminUsername'=>'required|unique:admins',
            'AdminPassword'=>'required|min:8|max:8'
        ]);
        $user= new Admin();
        $user->AdminUsername=$request->AdminUsername;
        $user->AdminPassword=$request->AdminPassword;
        $res=$user->save();
        if($res)
        {
            return back()->with('Başarılı','Admin Oluşturuldu');
        }
        else
        {
            return back()->with('Başarısız','Admin Oluşturulmadı');
        }
    }
    public function panel()
    {
        $data=array();
        if(Session::has('LoginID'))
        {
            $data=Admin::where('AdminID','=',Session::get('LoginID'))->first();

        }
        return view('admin.panel',compact('data'));
    }
    public function adminlogout()
    {
        if(Session::has('LoginID'))
        {
            Session::pull('LoginID');
            return redirect('panellogin');
        }
    }
}
