<?php 

namespace App\Http\Controllers;

class WelcomeController extends Controller
{

	public function index()
	{
		return view('welcome');
	}

	public function home()
    {
        return view('pages.home');
        // Can also write
        //return view('pages/home');
    }
}