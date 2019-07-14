<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUndangan extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'no_surat'      => 'required',
                'pengundang'    => 'required',
                'perihal'       => 'required',
                'nama_acara'    => 'required',
                'waktu_mulai'   => 'required',
                'waktu_selesai' => 'required',
                'tempat'        => 'required',
                'file'          => 'required|image',
        ];
    }
}
