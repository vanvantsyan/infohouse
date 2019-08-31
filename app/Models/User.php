<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int id
 * @property int role_id
 * @property string full_name
 * @property string email
 * @property string password
 * @property string remember_token
 * @property Carbon created_at
 * @property Carbon updated_at
 * @property Carbon|null deleted_at
 *
 * Relations
 * @property Role role
 */
class User extends Authenticatable
{
    use Notifiable,
        SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'email', 'password','role_id'
    ];

    /**
     * @param int|null $id
     * @return array
     */
    public static function getRules($id = null)
    {
        return [
            'full_name' => ['required', 'string', 'max:200'],
            'email' => ['nullable', 'email'],
            'password' => ['required', 'string', 'max:200'],
            'role_id' => ['required', 'integer'],
        ];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'role_id' => 'integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|Role
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
