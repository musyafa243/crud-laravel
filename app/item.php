<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    
    public function koordinar()
    {
        return $this->hasOne(koordinar::class);
    }
}
