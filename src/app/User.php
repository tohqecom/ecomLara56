<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Arr;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => 'bg-success'
        ],
        0 => [
            'name' => 'Private',
            'class' => 'bg-default'
        ]
    ];

    public function getStatus()
    {
//        dump($this->active);
        return Arr::get($this->status, $this->active, '[N\A]');
    }
}
