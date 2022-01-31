<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaketRequest extends FormRequest
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
        return [
            'id_outlet' => 'required|integer|exists:outlet,id',
            'jenis' => 'required|max:255',
            'nama_paket' => 'required|max:255',
            'harga' => 'required|max:255'
        ];
    }
}
