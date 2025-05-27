<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags'; 

    protected $fillable = [
        'name',
    ]; 

    // relationship
    public function taggable()
    {
        return $this->morphTo();
    }
}
