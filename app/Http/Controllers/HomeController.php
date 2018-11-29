<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
  public function welcome(){
$this->middleware('welcome');
 }
    public function addpost(){
            if(Session::has('userid')){                  
        //dd('hi');                               
    return view('backend.pages.addpost');
    } else {                                                                                                                     
        return Redirect('/login')->with('message','You are not Logged In...!!!');                                                                        
    }
    	
    }
  public function allpost(){
      $allpost=DB::table('post')->get();
      $manage_contact=view('backend.pages.allpost')->with('all_post_info',$allpost);

      return view('backend.layouts.layout')->with('backend.pages.allpost',$manage_contact);
    
    }
  public function dashboard(){
    	return view('backend.pages.dashboard');
    }
  public function login(){

    	return view('backend.pages.login');
    }

  public function store(Request $request){
    $email=$request->email;
        $password=$request->password;
            $result=DB::table('register')                      //Checking Data In The Database
            ->where('email',$email)
            ->where('password',$password)
            ->first();
            if ($result) {
              Session::put('userid',$result->id);
              //dd($result->id);
           return Redirect::to('/');
            } else {
                return Redirect::to('/login');   
            }
  }
    
  public function logout(){
        Session::flush();
        return Redirect::to('/login');
     }
 public function register(){
    	return view('backend.pages.register');
    }

  public function save_post(Request $req){
$data=array();
$data['name']=$req->name;
$data['address']=$req->address;
DB::table('post')->insert($data);

return Redirect::to('/addpost')->with('message','Insert Successfully');

}
  public function registration(Request $request){
  $data=array();
  $data['name']=$request->name;
  $data['email']=$request->email;
  $data['password']=$request->password;
DB::table('register')->insert($data);
Session::put('message','Add Successfully'); 
return Redirect::to('/login');
}
public function delete($id){
  //echo "string";
$hel=DB::table('post')->where('id',$id)
                 ->delete();
 if($hel){
  Session::put('message','Delete Successfully');
  return Redirect::to('/allpost');
}
else
{
 return Redirect::to('/allpost')->with('message','NOnuccessfully'); 
}

}


public function update($id){
 
$hel=DB::table('post')->where('id',$id)
                 ->first();
$del=view('backend.pages.update')
      ->with('allpost',$hel);
      return view('backend.layouts.layout')
                ->with('update',$del);

// echo "</pre>";
// print_r($hel);
  //    return view('backend.pages.update');
    }


public function hot(Request $request,$id){
$data=array();
$data['name']=$request->name;
$data['address']=$request->address;

DB::table('post')->where('id',$id)
                 ->update($data);

 return Redirect::to('/allpost')->with('message','Update Successfully'); 

}

}
