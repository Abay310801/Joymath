<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeluangStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'materi' => ['required', 'string'],
            'isi' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'topik_id' => ['required', 'exists:topik_models,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Field ini harus diisi.',
            'string' => 'Field ini harus berupa teks.',
            'max' => 'Field ini tidak boleh melebihi :max karakter.',
            'image' => 'File harus berupa gambar.',
            'date' => 'Field ini harus berupa tanggal.',
            'exists' => 'Field ini tidak valid.',
            'materi.required' => 'Materi harus diisi.',
            'isi.required' => 'Field ini harus diisi.',
            'deskripsi.required' => 'Field ini harus diisi.',
            'topik_id.required' => 'Field ini harus diisi.',
        ];
    }
}