<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'idNhiemVu' => 'string',
    ];

    /**
     * The primary key for the model.
     * @var string
     */
    protected $primaryKey = 'idNhiemVu';
}
