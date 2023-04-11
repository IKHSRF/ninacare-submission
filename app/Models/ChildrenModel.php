<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildrenModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'childrens';

    protected $fillable = [
        'name',
        'age',
        'gender',
        'location',
        'language',
        'religion',
        'user_id'
    ];

    public function language()
    {
        return $this->belongsTo(LanguageModel::class, 'language', 'id');
    }

    public function religion()
    {
        return $this->belongsTo(ReligionModel::class, 'religion', 'id');
    }

    public function user()
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'id');
    }
}
