<?php

namespace App\Http\Controllers;

use App\Suscriptor;
use Illuminate\Http\Request;

class SuscriptorController extends Controller
{
   public function index()
   {
      $suscriptores = Suscriptor::all();
      
      return response()->json(['data'=>$suscriptores]);
   }
}
