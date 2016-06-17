<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    }

    /**
     * Show the application dashboard.
     */
    public function index() {
        return view('home');
    }

    /**
     * Show the login page.
     */
    public function login() {
        return view('login');
    }

    /**
     * Show the about page
     */
    public function about() {
        return view('about');
    }

    /**
     * Show the why CS page
     */
    public function why() {
        return view('why');
    }

    /**
     * Show the Buzz section.
     */
    public function media() {
        return view('media');
    }

    /**
     * Show the forgot password page.
     */
    public function forgotPassword() {
        return view('forgot_password');
    }

    /**
     * Show the sign up page.
     */
    public function signup() {
        return view('sign_up');
    }
}
