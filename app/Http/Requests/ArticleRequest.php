<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|string|max:64',
            'body' => 'required|string',
            'state' => 'required|string|in:review,published,draft,planned',
            'summary' => 'required|string|max:192',
            'category' => 'required|string|exists:categories,id',
            'slug' => 'nullable|max:64',
        ];
    }
}
