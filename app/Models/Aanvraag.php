<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aanvraag extends Model
{
    use HasFactory;
    protected $table = 'contact_forms';

    protected $fillable = [
        'name',
        'email',
        'option',
        'modelNumber',
        'message'
    ];
}
