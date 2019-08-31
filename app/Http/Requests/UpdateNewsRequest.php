<?php

namespace App\Http\Requests;

use App\Models\News;
use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
        return array_merge(News::getRules(), static::additionalRules());
    }

    public static function additionalRules()
    {
        return [];
    }
}
