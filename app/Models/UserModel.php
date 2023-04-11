<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'users';


    protected $fillable = [
        'name',
        'age',
        'gender',
        'location',
        'language',
        'religion'
    ];
}