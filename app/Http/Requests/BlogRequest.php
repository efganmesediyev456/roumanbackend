<?php

namespace App\Http\Requests;

use App\Models\Blog;
use App\Models\BlogTranslation;
use App\Rules\SlugRule;
use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'date'=>'required',
            'title.az'=>'required',
            'slug'=>[new SlugRule(BlogTranslation::class, Blog::class, 'blog')],
            'tags.az'=>'required',
            'content.az'=>'required',
            'status.az'=>'required',
            'image'=>$this->blog ? 'sometimes':'required'
        ];
    }
}
