<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aaliaa extends Model
{
    use HasFactory;
    protected $table = 'aaliaa';

    protected $fillable = [
        'content',
        'actionId',
    ];
}
