<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class kadai04Requestt extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $reqestPath = $this->path();
        if ($reqestPath == 'kadai04_1') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'student_id' => ['required', 'integer'],
            'email' => ['email',],
            'course' => ['integer'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前が入力されていません',
            'student_id.required' => '学籍番号が⼊⼒されていません',
            'student_id.integer' => '学籍番号は７桁の数字です',
            'email.email' => 'メールアドレスの形式が間違っています',
            'course.integer' => 'コース番号を送ってください',

        ];
    }
}
