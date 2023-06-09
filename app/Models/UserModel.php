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

    public function language()
    {
        return $this->belongsTo(LanguageModel::class, 'language', 'id');
    }

    public function religion()
    {
        return $this->belongsTo(ReligionModel::class, 'religion', 'id');
    }

    public function children()
    {
        return $this->hasOne(ChildrenModel::class, 'user_id', 'id');
    }
}
