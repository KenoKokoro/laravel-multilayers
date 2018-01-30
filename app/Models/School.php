<?php


namespace App\Models;


use BaseTree\Models\BaseTreeModel;
use Illuminate\Database\Eloquent\Model;

class School extends Model implements BaseTreeModel
{
    protected $table = 'schools';

    protected $fillable = ['name', 'address'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}