<?php

namespace App\Models;

use App\Models\Concerns\Constants;
use Illuminate\Database\Eloquent\Collection;

/**
 * @property int id
 * @property string title
 * @property string description
 * @property string slug
 * @property string meta
 * @property string main_image
 * @property integer views
 *
 */
class News extends BaseModel
{
    use Constants;

    public $fillable = ['title','description','slug','meta','main_image','views'];

    /**
     * @var bool
     */
    public $timestamps = true;


    /**
     * @param int|null $id
     * @return array
     */
    public static function getRules($id = null)
    {
        return [
            'title' => ['required', 'string', 'max:200'],
            'description' => ['string','required'],
            'slug' => ['alpha_dash','unique:news,id,'.$id.''],
            'meta' => [ 'string','nullable'],
            'main_image' => ['nullable', 'mimes:jpg,png,jpeg'],
            'views' => ['numeric'],
        ];
    }

}
