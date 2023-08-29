<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkandsave;
use Illuminate\Support\Facades\Session;
class CheckandsaveController extends Controller
{
    public function savetodb(Request $request) {
       //return view('save');
        Checkandsave::create([
            'zekr' => $request['zekr'],
            'allzekr' => $request['allzekr'],
            'numberofdays' => $request['numberofdays'],
            'everyday' => $request['everyday'],
        ]);
        Session::flash('createMessage', 'ذکر اضافه شد');
        return redirect()->route('save');
    }
}
