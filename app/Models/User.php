<?php

namespace App\Models;
use Kodeine\Metable\Metable;
use App\Notifications\CustomerApproved;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Metable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $metaTable = 'users_meta'; //optional.
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'chasis_number',
        'application',
        'others_application',
        'agree_tnc',
        'agree_for_whatsapp',
        'user_link',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
      return $this->belongsToMany(Role::class);
    }

    /**
     * Gather the full name
     *
     * @return array
     */
    public function getFullNameAttribute() {
        return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    }

    public static function boot() {
      parent::boot();
      static::updating(function($user) {

      });
    }

    public function application(){
        return $this->hasOne('App\Models\Application','id','title');
    }
}
