<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_name',
        'ref_occupation',
        'ref_employer',
        'ref_address',
        'ref_contact_number',
        'ref_email',
    ];
    public $timestamps = false;
}
