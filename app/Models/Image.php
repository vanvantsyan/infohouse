<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Validation\Rule;

/**
 * @property int id
 * @property int estate_id
 * @property string path
 *
 * Relations
 * @property Role role
 */
class Image extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id','path',
    ];

    /**
     * @param int|null $id
     * @return array
     */
    public static function getRules($id = null)
    {
        return [
            'item_id' => ['required', 'integer', Rule::exists('estate','id')],
            'path' => ['required', 'string']
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|Item
     */
    public function estate()
    {
        return $this->belongsTo(Item::class,'estate_id','id');
    }
}
