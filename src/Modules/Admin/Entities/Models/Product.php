<?php

namespace Modules\Admin\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product extends Model
{
    protected $fillable = [];
    protected $status = [
        1 => [
            'name' => 'Public',
            'class' => ''
        ],
        0 => [
            'name' => 'Private',
            'class' => ''
        ]
    ];

    public function getStatus()
    {
        return Arr::get($this->status, $this->p_active, '[N\A]');
    }
}
