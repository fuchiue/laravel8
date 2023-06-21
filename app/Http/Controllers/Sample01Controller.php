<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sample01Controller extends Controller
{
    //
    public function index()
    {
        $message = "コントローラーからBladeへ渡されたデータです";
        $records = ['PHP', 'Ruby', 'Python', 'NodeJs'];

        return view('sample01',  compact('message', 'records'));
    }
}
