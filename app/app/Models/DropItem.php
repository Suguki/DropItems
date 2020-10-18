<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DropItem extends Model
{
    protected static function boot()
    {
        parent::boot();

        $user_id = auth()->user()->id;

    }

    protected $table = 'drop_items';

    protected $fillable = [
        'name',
        'details',
        'prefecture',
        'city',
        'address',
        'droped_at',
    ];
}
