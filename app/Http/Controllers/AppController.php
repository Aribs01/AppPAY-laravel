<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\Deposit;

class AppController extends Controller
{
    public function login() {
        return view ('login');
    }

    public function userlogin( Request $request ) 
    {
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    
    $credentials = $request->only('email', 'password');
    
    if(Auth::attempt($credentials)) {
        //Authentication passed...
        return redirect()->intended('dashboard')->with('status','You have been successfully logged in');
    }

    //Authentication failed...
    return $this->loginFailed();
    }

    public function dashboard() {
        $deposits = Deposit::all();
        $sum = Deposit::sum('amount');
        $count = Deposit::count('amount');

        return view ('dashboard', [
            'deposits' => $deposits,
            'sum' => $sum,
            'count' => $count
        ]);
    }

    public function deposit() {

        $deposits = Deposit::all();
        return view ('deposit', [
            'deposits' => $deposits
        ]);
    }

    public function createdeposit(Request $request) {

        $deposits = new Deposit();
        $deposits->amount = $request->amount;

        $deposits->save();

        return redirect('/dashboard');
    }

    public function viewdeposit($id) {

        $deposit = Deposit::findOrFail($id);

        return view ('amount', [
            'deposit'=> $deposit
        ]);
        
    }
}
