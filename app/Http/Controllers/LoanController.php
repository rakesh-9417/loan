<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class LoanController extends Controller
{
   public function ShowData() {

   if( !Auth::check()){
   	return redirect('/login');
   }
		
		$users = DB::select('select * from loan_data');
		return view('show_data',['users'=>$users]);
	}
}
?>


