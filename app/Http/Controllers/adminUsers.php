<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use App\Role;
class adminUsers extends Controller
{
    private $user;

    //Inject the $user module and store it in our private variable.
    public function __construct(User $user)
    {
        $this->user = $user;
    }

   public function index(){
    $users = $this->user->all();
       return view('admin/user',['users'=>$users]);
   }
   public function find($id){
    $user = $this->user->find($id);
    $roles = $user->roles()->get();
    return response()->json(['roles'=>$roles,'user'=>$user]);
   }
   public function add(Request $request){
       $user;
       if($request->id==0){
        $user = new User();
        //$user->roles()->detach();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $user->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $user->save();
       }
        else{
            $user = User::find($request->id);
            $user->name = $request->username;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->updated_at = Carbon::now()->format('Y-m-d H:i:s');
            $user->save();
            $user->roles()->detach();
        }
        if($request['edit_inbox']){
            $user->roles()->attach(Role::where('name','inbox')->first());
        }
        if($request['edit_home']){
            $user->roles()->attach(Role::where('name','home')->first());
        }
        if($request['edit_comment']){
            $user->roles()->attach(Role::where('name','comment')->first());
        }
        if($request['edit_contact']){
            $user->roles()->attach(Role::where('name','contact')->first());
        }
        if($request['edit_service']){
            $user->roles()->attach(Role::where('name','service')->first());
        }
        if($request['edit_users']){
            $user->roles()->attach(Role::where('name','admin')->first());
        }
        return back();
        //$user->roles()->attach($role_admin);
   }
    public function check(Request $req){
        $email = $req->email;
        $check = User::where('email',$email)->first();
        
     if($check){
       return 'true';
    }
   else{
        return 'false';
     }
   }
   public function delete($id){
       $user = User::find($id);
       $user->delete();
       return "ok";
   }
}
