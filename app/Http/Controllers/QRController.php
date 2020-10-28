<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;

class QRController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    
    	// \QrCode::size(500)
     //        ->format('png')
     //        ->generate('vaishali.inexture@gmail.com' );

        return view('qrCode');
    }
}
