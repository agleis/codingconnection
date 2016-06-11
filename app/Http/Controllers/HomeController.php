<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Request;

class HomeController extends Controller
{
	public function __construct() {
		
	}
	
	/**
	 * Shows the default home page
	 *
	 */
	public function index() {
		return view('home');
	}
	
	/**
	 * Shows the default home page
	 *
	 */
	public function about() {
		return view('about');
	}
	
	/**
	 * Shows the default home page
	 *
	 */
	public function forgotPassword() {
		return view('forgot_password');
	}
	
	/**
	 * Shows the default home page
	 *
	 */
	public function login() {
		return view('login');
	}
	
	/**
	 * Shows the default home page
	 *
	 */
	public function media() {
		return view('media');
	}
	
	/**
	 * Shows the default home page
	 *
	 */
	public function signup() {
		return view('sign_up');
	}
	
	/**
	 * Shows the default home page
	 *
	 */
	public function why() {
		return view('why');
	}
}
