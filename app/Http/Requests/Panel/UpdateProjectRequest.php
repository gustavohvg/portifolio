<?php

namespace App\Http\Requests\Panel;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'         => 'required|string|max:255',
            'description'   => 'required|string',
            'github_url'    => 'nullable|url|max:255',
            'demo_url'      => 'nullable|url|max:255',
            'thumbnail_url' => 'nullable|url|max:255',
            'is_featured'   => 'boolean',
            'tags'          => 'nullable|array',
            'tags.*'        => 'integer|exists:tags,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'       => 'O título é obrigatório.',
            'title.max'            => 'O título não pode ter mais de 255 caracteres.',
            'description.required' => 'A descrição é obrigatória.',
            'github_url.url'       => 'Informe uma URL válida para o GitHub.',
            'demo_url.url'         => 'Informe uma URL válida para o demo.',
            'thumbnail_url.url'    => 'Informe uma URL válida para a thumbnail.',
            'tags.array'           => 'Formato de tags inválido.',
            'tags.*.exists'        => 'Uma ou mais tags selecionadas não existem.',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'is_featured' => $this->boolean('is_featured'),
        ]);
    }
}
