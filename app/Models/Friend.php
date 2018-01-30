<?php


namespace App\Models;


use BaseTree\Models\BaseTreeModel;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model implements BaseTreeModel
{
    protected $table = 'friends';

    protected $fillable = ['email', 'student_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}