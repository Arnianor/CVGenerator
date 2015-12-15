<?php 

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;
use App\Http\Controllers\Controller;

class FormController extends Controller
{

	public function getForms()
	{
		return view('formView');
	}
	
	public function postForms(FormRequest $request)
	{
		return view('CVView');
	}
}