<?php

namespace App\Models;

use App\Models\Concerns\Constants;
use Illuminate\Database\Eloquent\Collection;

/**
 * @property int id
 * @property string name
 * @property string slug
 *
 * Relations
 * @property Collection|User[] users
 */
class Role extends BaseModel
{

    use Constants;

    const ROLE_ADMIN = 'admin';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return array
     */
    public static function gerRoles()
    {
        return static::getConstantsBeginWith('ROLE_');
    }

    /**
     * @param $slug
     * @return Role|null
     */
    public static function bySlug($slug)
    {
        return static::where('slug', $slug)->first();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|User
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
