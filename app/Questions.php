<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'questions';
    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
