<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientReqquest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'contact'){
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
            'family-name' => 'required',
            'given-name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'postal_code' => 'required|/^\d{3}[-]\d{4}$/',
            'adress' => 'required',
            'opinion' => 'required|between:1,120',
        ];
    }
    public function massages()
    {
        return [
            'family-name.required' => '名前を入力してください',
            'given-name.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'postal_code.required' =>'ハイフンありの８桁で入力してください',
            'adress.required' => '住所を入力してください',
            'opinion.required' => '120字以内で入力してください'
        ];
    }
    protected function getRedirectUrl()
    {
        return 'verror';
}

