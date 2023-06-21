<?php

namespace App\Http\Controllers;

use App\Http\Requests\Kadai05Requestt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Kadai05_1Controller extends Controller

{
    public function index()
    {
        // 省略
        return view('kadai05_1');
    }

    public function post(Kadai05Requestt $request)
    {
        $file = $request->file("image_file");
        $result = [];
        // 送信したファイル名の取得
        $result["name"] = $file->getClientOriginalName();
        // アップロードされたファイルの保存
        $result["path"] = Storage::disk("public")->put("images", $file);
        // FTPでのファイルをアップロード
        Storage::disk("ftp")->put("public_html/se2a18", $file);
        return view("kadai05_2", compact("result"));
    }
}
