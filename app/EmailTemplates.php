<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailTemplates extends Model
{
    protected $table = 'email_templates';
    protected $fillable = [
        'subject','type', 'fixed_content', 'variant_content','signature'
    ];
}
