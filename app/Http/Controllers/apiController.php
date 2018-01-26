<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\screen;
class apiController extends Controller
{
    public function getPantallas($id)
    {
      $pn = screen::where('cl_id',$id)->select('id','sn_mac')->get();
      return response()->json($pn);
    }
}
