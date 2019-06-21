<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Data;


class MainController extends Controller {
	public function storeItem(Request $request) {
		$data = new Data ();
		$data->name = $request->name;
		$data->email = $request->email;
		$data->save ();
		return $data;
	}
}