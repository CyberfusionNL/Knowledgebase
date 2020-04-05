<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property  string twofactor_secret
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'twofactor_secret',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'twofactor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes default to values.
     * @var array
     */
    protected $attributes = [
        'twofactor_secret' => '',
    ];

    public function author()
    {
        return $this->hasOne('App\Author');
    }

    /**
     * Encrypt the user's twofactor_secret.
     *
     * @param  string  $value
     * @return string
     */
    public function setTwofactorSecretAttribute($value)
    {
        $this->attributes['twofactor_secret'] = encrypt($value);
    }

    /**
     * Decrypt the user's twofactor_secret.
     *
     * @param  string  $value
     * @return string
     */
    public function getTwofactorSecretAttribute($value)
    {
        return decrypt($value);
    }
}
