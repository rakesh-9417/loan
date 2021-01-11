<?php

namespace App\Http\Controllers;
use App\loan;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class LoanController extends Controller
{
	public function ShowData() {

		if( !Auth::check()){
			return redirect('/login');
		}
		//$users = loan::all();
		$users = loan::all();
		return view('admin/show_data',['users'=>$users]);
	}
}
?>


