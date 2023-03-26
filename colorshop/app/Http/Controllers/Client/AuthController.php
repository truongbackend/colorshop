<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    // Kiểm tra thông tin đăng nhập từ form
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required'
    ]);
    // Lấy thông tin user từ database để kiểm tra
    $user = User::where('email', $request->email)->first();
    if(!$user) {
        return redirect()->back()->with('error', 'Thông tin đăng nhập không chính xác!');
    }
    // Sử dụng phương thức attempt để kiểm tra thông tin đăng nhập
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        if (Auth::user()->roles == 1 ) {
            return redirect('admin/dashboard');
        } else {
            return redirect('home');
        }
    } else {
        return redirect()->back()->with('error', 'Thông tin đăng nhập không chính xác!');
    }

}
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        dd($user);
        $user->save();

        return response()->json([
            'message' => 'Successfully registered'], 201);
    }
}
?>
