<?php

namespace Modules\Admin\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [];
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
        return Arr::get($this->status, $this->c_active, '[N\A]');
    }

//    public function product()
//    {
//        return $this->belongsTo(Product::class);
//    }
}
