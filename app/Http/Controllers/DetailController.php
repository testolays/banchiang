<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EraDetail;

use Illuminate\Http\Request;

class DetailController extends Controller {

	public function earlyDetail(){

    $details = EraDetail::whereEraId('1')->get();
    return view('collection.early.detail', compact('details'));
  }

	public function middleDetail(){

    $details = EraDetail::whereEraId('2')->get();
    return view('collection.middle.detail', compact('details'));
  }

	public function lateDetail(){

    $details = EraDetail::whereEraId('3')->get();
    return view('collection.late.detail', compact('details'));
  }

	public function show($id){
    $detail = EraDetail::find($id);
    return view('collection.item_detail', compact('detail'));
  }

}
