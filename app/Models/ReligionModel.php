<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReligionModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'religions';


    protected $fillable = [
        'name',
    ];
}
