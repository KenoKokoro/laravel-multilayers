<?php


namespace App\Models;


use BaseTree\Models\BaseTreeModel;
use Illuminate\Database\Eloquent\Model;

class Student extends Model implements BaseTreeModel
{
    protected $table = 'students';

    protected $fillable = ['full_name', 'index', 'school_id'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function friends()
    {
        return $this->hasMany(Friend::class);
    }
}