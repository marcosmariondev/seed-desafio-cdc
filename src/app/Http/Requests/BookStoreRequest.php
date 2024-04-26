<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BookStoreRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
            'title' => 'required|unique:books,title',
            'description' => 'required|max:500',
            'price' => 'required|numeric|min:20.00',
            'number_pages' => 'required|max:100',
            'isbn' => 'required|unique:books,isbn',
            'launch' => 'required|date|after:now',
            'summary' => 'required',
        ];
    }
}
