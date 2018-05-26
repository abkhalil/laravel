<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
   public function khalil(){
     $people = ['khalil','azim','khademi','Hurmat ','murtaza'];
	return view('welcome',compact('people'));
   }
}
