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
            'title' => $request['title'],
            'zekr' => $request['zekr'],
            'allzekr' => $request['allzekr'],
            'numberofdays' => $request['numberofdays'],
            'everyday' => $request['everyday'],
        ]);
        Session::flash('createMessage', 'ذکر اضافه شد');
        return redirect()->route('confirm');
    }

    public function see(Checkandsave $checkandsave) {
        $see = $checkandsave::all();
        return view('see', ['zekrs' => $see]);
    }
}
