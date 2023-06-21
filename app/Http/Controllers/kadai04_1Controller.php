<?php

namespace App\Http\Controllers;

use App\Http\Requests\kadai04Requestt;
use Illuminate\Http\Request;

class kadai04_1Controller extends Controller
{
    public function index()
    {
        $courses = [
            [
                'id' => 1,
                'name' => 'IT開発エキスパート',
            ],
            [
                'id' => 2,
                'name' => 'IT開発研究',
            ],
            [
                'id' => 3,
                'name' => 'システムエンジニア',
            ],
            [
                'id' => 4,
                'name' => 'Webデザイン',
            ],
        ];

        return view('kadai04_1', compact('courses'));
    }

    public function post(kadai04Requestt $request)
    {
        $result = [];
        $result['name'] = $request->input('name');
        $result['student_id'] = $request->input('student_id');
        $result['email'] = $request->input('email');
        $result['course'] = $request->input('course');
        $result['note'] = $request->input('note');

        $request->session()->regenerateToken();

        return view('kadai04_2', compact('result'));
    }
}
