<?php


namespace App\DAL\Student;


use App\Models\Student;
use BaseTree\Eloquent\BaseEloquent;
use App\DAL\Student\StudentRepository;

class EloquentStudent extends BaseEloquent implements StudentRepository
{
    public function __construct(Student $model)
    {
        parent::__construct($model);
    }
}
