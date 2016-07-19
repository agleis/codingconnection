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
     * Shows the home page of the game.
     */
    public function index() {
      $categories["categories"] = [
        ['catId' => '7', 'name' => 'alligator'],
        ['catId' => '8', 'name' => 'crocodile'],
        ['catId' => '7', 'name' => 'caiman']
      ];
      $categories['categories'] = collect($categories['categories'])->unique('catId');

      $categories['categories'] = $categories['categories']->toArray();
      return var_dump($categories);
      return view('gameindex');
    }
}
