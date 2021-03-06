<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    /**
     * Função para retornar os tweets postados por todos que o usuário segue
     */
    public function timeline() {
        // Pegando os IDs de quem o usuário segue
        $friends = $this->follows()->pluck("id");

        // Pegando todos os tweets por ordem de created
        return Tweet::whereIn('user_id', $friends)->orWhere('user_id', $this->id)->latest()->get();
    }

    public function tweets() {
        return $this->hasMany(Tweet::class);
    }

    // seguindo um novo usuário
    public function follow(User $user) {
        return $this->follows()->save($user);
    }

    /**
     * Pegando os usuarios que o usuário autenticado está seguindo
     */
    public function follows() {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function getRouteKeyName() {
        return 'name';
    }

}
