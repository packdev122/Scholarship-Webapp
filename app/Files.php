<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';
    public function question()
    {
        return $this->belongsTo(Questions::class);
    }
}
