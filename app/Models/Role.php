<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'idVaiTro' => 'string',
    ];

    /**
     * The primary key for the model.
     * @var string
     */
    protected $primaryKey = 'idVaiTro';
}
