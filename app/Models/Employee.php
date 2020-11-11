<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = 'employees';
    public $fillable = [
        'name',
        'last_name',
        'birth_date',
        'personal_id',
        'salary'
    ];
}
