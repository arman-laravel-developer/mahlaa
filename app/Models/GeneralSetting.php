<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    protected $fillable = [
        'name',
        'white_logo',
        'dark_logo',
        'favicon',
        'copyright',
        'status',
        'currency_code',
        'currency_symbol',
        'currency_name',
        // Add other fields as needed
    ];
}
