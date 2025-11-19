<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class userController extends Controller

{
    /**
     * Display a listing of the resource.
     */
//   function login(){
//         $data = User::all();
//         return view('signin',['signin'=>$data]);
//       }





 function signup(Request $req)
{

    $req->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed'
    ]);

    $data = new User();
    $data->name = $req->name;
    $data->email = $req->email;
    $data->password = $req->password; 

    $data->save();

    return redirect("signin")->with('success', 'Signup successful!');
}




 function showLoginForm()
    {
        return view('signin');
    }

  function signin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


    $user = User::where('email', $request->email)->first();

    // 3️⃣ Check if user exists AND password matches
    if ($user && $request->password === $user->password) {
        // 4️⃣ Session create karna
        $request->session()->put('user', [
            'id'    => $user->id,
            'name'  => $user->name,
            'email' => $user->email
        ]);

        // 5️⃣ Redirect to home/dashboard
        return redirect('/');
    } else {
        // 6️⃣ Invalid credentials
        return back()->with('error', 'Invalid credentials');
    }
   }

    // Dashboard
    public function dashboard(Request $request) {
        if (!$request->session()->has('user')) {
            return redirect('/signin')->with('error', 'Please login first');
        }

        $user = $request->session()->get('user');
        return view('/', compact('user'));
    }

    // Logout
    public function logout(Request $request) {
        $request->session()->forget('user');
        return redirect('/signin')->with('success', 'Logged out successfully');
    }



// profile
//  function show()
//     {
//         return view('edit_pro');
//     }


 public function settings(Request $request)
{
    if($request->session()->has('user')){
        $user = $request->session()->get('user'); // session user array

        // session user ke record fetch karo
        $settings = User::where('id', $user['id'])->get();

        return view('view_settings', ['settings' => $settings]);
    }
}
  function show_pro($id){
      $data= User::find($id);
      return view('edit_pro',['data'=>$data]);
    }
    function update_pro(Request $request){
      $data = User::find($request->id);
      $data->name = $request->name;
      $data->email = $request->email;
      $data->password = $request->password; 
      $data->save();
      return redirect('/');
}

 function user_delete($id){
      $data= User::find($id);
      $data->delete();
      return redirect('register');
    }


    // forgot password
public function search(Request $request)
{
    $email = $request->email;

    $view_forgots = User::where('email', $email)->get();

    return view('view_forgot_password', compact('view_forgots'));
}

}

