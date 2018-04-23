<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationUser;
use Illuminate\Http\Request;
// added
use App\User;


class RegisterController extends Controller
{
    // added
    public function __construct()
    {        
                  
        // $this->middleware('guest');
    }

    public function create()
    {
     return view('register.register-create');
    }
    public function store(Request $request)
    {
 
        $this->validate(request(),[
            'name' => 'required|min:3|max:50',
            'email'=> 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);
        // User::create(request()->all())
        $user=new User();
        $user->name= request('name');
        $user->email= request('email'); 
  
        $user->password= bcrypt(request('password'));
        $user->is_verified= false;
      
        $user->save();
        // save 
        // auth()->login($user);
    
          //   send user-u on his email //
    Mail::to($user)->send(new VerificationUser($user));
        return redirect()->route('login');
    }
    
}
