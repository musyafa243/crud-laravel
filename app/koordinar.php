<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class koordinar extends Model
{
    public function item()
    {
        return $this->belongsTo(item::class, 'item_id');
    }
}
