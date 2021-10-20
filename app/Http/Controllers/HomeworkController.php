<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientReqquest;
use Validator;

class HomeworkController extends Controller
{
    public function index()
    {
        
        return view('index');
    }
    public function confirm(Request $request)
    {
       $input = $request->session()->get("input");
		
		if(!$input){
			return redirect()->action("HomeworkController@confirm");
		}
  }

    public function verror()
    {
        return view('verror');
    }
    public function send(ClientReqquest $request)
    {
      $input = $request->session()->get("input");
		if(!$input){
			return redirect()->action("HomeworkController@index");
		}
		$request->session()->forget("input");
    return view('thanks');
}
}