<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkandsave;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class CheckandsaveController extends Controller
{
    //ذخیره ذکر اضافه شده در دیتایس
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

    //نمایش تمامی ذکر ها
    public function see(Checkandsave $checkandsave) {
        $see = $checkandsave::all();
        return view('see', ['zekrs' => $see]);
    }



    //برای به روزرسانی کانتر در دیتابیس
    public function do(Request $request) {
        $oldNumber = Checkandsave::where('id', $request['id'] )->get();
         foreach ($oldNumber as $oldnumber){
             $old =  $oldnumber->counter;
        }
        $newNumber = $request['counter'];
         //باید مقدار به عدد تبدیل شود
        settype($newNumber, "integer");

        $sum = $old + $newNumber;
        Checkandsave::where('id', $request['id'])->update([
            'counter' =>  $sum,
        ]);
        Session::flash('createMessage', 'ذکر به روز شد');
        return redirect()->back();
    }


    //نمایش لیست ذکرها برای انتخاب و گفتن ذکر
    public function doe(Checkandsave $checkandsave) {
        $see = DB::select('SELECT * FROM checkandsaves WHERE allzekr > counter');

       return view('listforselect', ['zekrs' => $see]);
    }

    //نمایش کادر واردکردن تعداد ذکر
    public function do2($id) {
        $see = Checkandsave::find($id);
        return view('do', compact('see'));
    }
}
