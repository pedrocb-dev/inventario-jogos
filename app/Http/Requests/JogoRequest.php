<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JogoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'jogadores_min' => 'required|integer|min:1',
            'jogadores_max' => 'required|integer|min:1',
            'duracao_minutos' => 'required|integer|min:1',
        ];
    }
}