<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FirstWeightRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $weightRegex = '/^\d{1,3}(\.\d)?$/';

        return [
            'current_weight' => ['required','numeric','between:0,999.9',"regex:$weightRegex"],
            'target_weight'  => ['required','numeric','between:0,999.9',"regex:$weightRegex"],
        ];
    }

    public function messages()
    {
        return [
            // 現在の体重
            'current_weight.required' => '現在の体重を入力してください',
            'current_weight.numeric'  => '数値で入力してください',
            'current_weight.between'  => '0〜999.9の範囲で入力してください',
            'current_weight.regex'    => '小数点は1桁で入力してください',

            // 目標の体重
            'target_weight.required' => '目標の体重を入力してください',
            'target_weight.numeric'  => '数値で入力してください',
            'target_weight.between'  => '0〜999.9の範囲で入力してください',
            'target_weight.regex'    => '小数点は1桁で入力してください',
        ];
    }
}
