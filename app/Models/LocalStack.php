<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocalStack extends Model
{
    // Name table
    protected $table = 'local_stacks';

    protected $fillable = [
        'status_code',
        'error_message',
    ];
}
