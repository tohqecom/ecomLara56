<?php

namespace Modules\Admin\Entities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Modules\Admin\Entities\Models\Category;

class Product extends Model
{
    protected $table = 'products';
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
        return Arr::get($this->status, $this->p_active, '[N\A]');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'p_category_id');
    }
}
