<?php

namespace App\Http\Requests\guru;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GuruRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_guru' => 'required',
            'file' => "foto_guru|foto_guru|mimes:png,jpg,jpeg|max:2048" ,
            'nik_guru' => 'required',
            'nuptk_guru' => 'required',
            'nip_guru' => 'required',
            'gender_guru' => 'required',
            'tempat_lahir_guru' => 'required',
            'tanggal_lahir_guru' => 'required',
            'jabatan_guru' => 'required',
            'email_guru' => 'required',
            'no_telp_guru' => 'required',
            'alamat_guru' => 'required',
            'status_guru' => 'required'
        ];
    }
}
